<?php
#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : centralGoldAdmin.php                                     ##
##  Type           : BACKEND (Central Gold admin actions)                     ##
##  Developed by   : Shadow                                                    ##
##  License        : Novaterra Project                                        ##
##  Copyright      : Novaterra (c) 2010-2026. All rights reserved.            ##
## --------------------------------------------------------------------------- ##
##  Handles the three admin actions for cross-world paid gold:                ##
##    - toggle free-gold visibility (central_gold_settings)                   ##
##    - look up a player's central account by email                           ##
##    - transfer paid gold between two players by email                       ##
##  All three simply call the existing CentralGold class; no new game logic.  ##
#################################################################################

require_once(__DIR__ . '/../csrf.php');
if (!isset($_SESSION)) session_start();
if (($_SESSION['access'] ?? 0) < 9) {
    admin_deny('You must be signed in as an administrator to do this. '
        . 'Your session may have expired — please return to the admin panel and sign in again.');
}

csrf_verify();

$autoprefix = '';
for ($i = 0; $i < 5; $i++) {
    $autoprefix = str_repeat('../', $i);
    if (file_exists($autoprefix . 'autoloader.php')) break;
}
include_once($autoprefix . "GameEngine/config.php");
include_once($autoprefix . "GameEngine/Database.php");
include_once($autoprefix . "GameEngine/CentralGold.php");

$admid = (int) ($_SESSION['id'] ?? 0);

// Re-confirm the session's access level against the DB, same pattern used by
// the other admin Mods (goldPromo.php etc.) — a stale session cookie should
// not be trusted on its own for a privileged action.
$check = mysqli_query($GLOBALS['link'],
    "SELECT access FROM " . TB_PREFIX . "users WHERE id = " . $admid);
$acc = $check ? mysqli_fetch_assoc($check) : null;
if (!$acc || (int) $acc['access'] < 9) {
    admin_deny('Your session may have expired — please sign in again.');
}

$do  = $_POST['do'] ?? '';
$msg = '';
$lookupEmail = '';

if ($do === 'toggle_free_gold') {
    $enabled = ((string) ($_POST['enabled'] ?? '0') === '1') ? 1 : 0;
    if (CentralGold::isConfigured()) {
        CentralGold::setFreeGoldEnabled((bool) $enabled);
        $msg = $enabled ? 'Free gold enabled.' : 'Free gold disabled.';
        $logMsg = mysqli_real_escape_string($GLOBALS['link'],
            'Central Gold: free gold ' . ($enabled ? 'enabled' : 'disabled'));
        mysqli_query($GLOBALS['link'],
            "INSERT INTO " . TB_PREFIX . "admin_log VALUES (0, " . $admid . ", '" . $logMsg . "', " . time() . ")");
    } else {
        $msg = 'Central Gold is not configured on this server.';
    }
} elseif ($do === 'lookup') {
    $lookupEmail = trim((string) ($_POST['email'] ?? ''));
    // Nothing to persist here — the results template re-runs the same
    // lookup on GET via ?p=centralGold&lookup=<email>, so a plain redirect
    // keeps the URL bookmarkable/shareable and avoids POST-resubmit prompts.
    header("Location: ../../../Admin/admin.php?p=centralGold&lookup=" . urlencode($lookupEmail));
    exit;
} elseif ($do === 'transfer') {
    $fromEmail = trim((string) ($_POST['from_email'] ?? ''));
    $toEmail   = trim((string) ($_POST['to_email'] ?? ''));
    $amount    = (int) ($_POST['amount'] ?? 0);
    $note      = trim((string) ($_POST['note'] ?? ''));

    if (!CentralGold::isConfigured()) {
        $msg = 'Central Gold is not configured on this server.';
    } elseif ($fromEmail === '' || $toEmail === '' || $amount <= 0) {
        $msg = 'From email, to email, and a positive amount are all required.';
    } else {
        // Usernames/world-user-ids are only needed the first time an email is
        // seen (account creation); for an existing account they are refreshed
        // but not required to be accurate here, so pass empty/0 for the admin
        // panel flow. resolveAccount() inside credit/debit will simply reuse
        // whatever is already on file if the account already exists.
        list($ok, $resultMsg) = CentralGold::transfer(
            $fromEmail, '', 0,
            $toEmail, '', 0,
            $amount, $admid, $note !== '' ? $note : 'admin transfer'
        );
        $msg = $resultMsg;
        if ($ok) {
            $logMsg = mysqli_real_escape_string($GLOBALS['link'],
                'Central Gold: admin transferred ' . $amount . ' gold from ' . $fromEmail . ' to ' . $toEmail);
            mysqli_query($GLOBALS['link'],
                "INSERT INTO " . TB_PREFIX . "admin_log VALUES (0, " . $admid . ", '" . $logMsg . "', " . time() . ")");
        }
    }
}

header("Location: ../../../Admin/admin.php?p=centralGold&msg=" . urlencode($msg)
    . ($lookupEmail !== '' ? '&lookup=' . urlencode($lookupEmail) : ''));
exit;
