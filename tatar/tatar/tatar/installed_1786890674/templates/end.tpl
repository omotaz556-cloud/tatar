<?php 

#################################################################################
##              -= YOU MAY NOT REMOVE OR CHANGE THIS NOTICE =-                 ##
## --------------------------------------------------------------------------- ##
##  Filename       : end.tpl                                                   ##
##  Type           : Install Panel Frontend & Backend                          ##
## --------------------------------------------------------------------------- ##
##  Developed by   : Dzoki (Original)                                          ##
##  Refactored by  : Shadow                                                    ##
##  Redesign by    : Shadow                                                    ##
## --------------------------------------------------------------------------- ##
##  Contact        : (see project maintainer)                                 ##
##  Project        : Novaterra                                                  ##
##  GitHub         : https://github.com/omotaz556-cloud/tatar                   ##
## --------------------------------------------------------------------------- ##
##  License        : Novaterra Project                                          ##
##  Copyright      : Novaterra (c) 2010-2025. All rights reserved.              ##
## --------------------------------------------------------------------------- ##
#################################################################################

include("../GameEngine/config.php"); $time=time(); @rename("../install/","../installed_".$time); @touch('../var/installed'); ?>
<div class="card" style="text-align:center;">
  <h2 style="margin:0 0 8px;"><?=t('install_complete')?></h2>
  <p style="color:#475569;"><?=t('thanks_install')?></p>
  <div style="display:inline-block;text-align:left;background:#0f172a;color:#e2e8f0;border-radius:10px;padding:12px 16px;font-family:ui-monospace;font-size:13px;line-height:1.6;">
    rm -R install<br>
    chmod -R 755 GameEngine<br>
    chmod -R 777 GameEngine/Prevention<br>
    chmod -R 777 GameEngine/Notes<br>
    chmod -R 777 var/log
  </div>
  <div style="margin-top:16px;"><a class="btn" href="<?php echo HOMEPAGE; ?>"><?=t('go_home')?></a></div>
</div>

<div class="card">
  <h3 style="margin:0 0 12px;text-align:center;"><?=t('next_steps')?></h3>
  <div class="grid-2" style="gap:14px;">
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b><?=t('secure_server')?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?=t('secure_server_txt')?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b><?=t('read_docs')?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?=t('read_docs_txt')?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b><?=t('join_community')?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?=t('join_community_txt')?></p>
    </div>
    <div style="background:#f8fafc;border:1px solid #e5e7eb;border-radius:12px;padding:14px;">
      <b><?=t('star_github')?></b>
      <p style="margin:6px 0 0;color:#475569;font-size:14px;"><?=t('star_github_txt')?></p>
    </div>
  </div>
  <div style="text-align:center;margin-top:16px;display:flex;gap:10px;justify-content:center;flex-wrap:wrap;">
    <a class="btn" style="background:#0f172a;" href="https://github.com/omotaz556-cloud/tatar" target="_blank">GitHub</a>
    <a class="btn" style="background:#16a34a;" href="https://github.com/omotaz556-cloud/tatar/wiki" target="_blank"><?=t('documentation')?></a>
    <a class="btn" style="background:#64748b;" href="<?php echo defined('ADMIN_EMAIL') ? 'mailto:' . ADMIN_EMAIL : '#'; ?>"><?=t('contact_support')?></a>
  </div>
</div>