# Arabic RTL fix — edited files

Repo: https://github.com/omotaz556-cloud/tatar.git

## Files in this zip (paths are relative to the repo root)

- `GameEngine/config.php` — modified `tz_rtl_stylesheet_tag()`
- `css/rtl.css` — updated header comment (logic unchanged, now documented as global)
- `dorf1.php` — removed the hardcoded duplicate `css/rtl.css` `<link>` tag
- `changes.diff` — unified diff of all three files (git diff output), for easy review/apply

## How to apply

Copy each file over its counterpart at the same path in your working copy of
the repo, or apply the diff from the repo root:

    git apply changes.diff

## 1. Which shared mechanism now loads rtl.css

`tz_rtl_stylesheet_tag()` in `GameEngine/config.php`. It is already called
from the `<head>` of every top-level game page (dorf1.php, dorf2.php,
dorf3.php, karte.php, karte2.php, build.php, berichte.php, nachrichten.php,
allianz.php, spieler.php, Admin/admin.php, notification/index.php, and
every other page that sets `dir="rtl"` via `tz_html_dir_attrs()`). The
function now emits two `<link>` tags when the active language is RTL:
1. the optional legacy per-gpack override (`gpack/<pack>/lang/<code>/lang.css`),
   only if that file exists on disk;
2. `css/rtl.css` — the canonical, shared stylesheet — always loaded last so
   it wins the cascade on equal-specificity selectors.

Both use the existing `$relPath` parameter already threaded through every
call site, so nested pages (`Admin/admin.php`, `notification/index.php`,
which call `tz_rtl_stylesheet_tag(null, '../')`) resolve the path correctly
too.

## 2. Which files were changed

- `GameEngine/config.php` — `tz_rtl_stylesheet_tag()` rewritten to also
  link `css/rtl.css` (previously it only linked the legacy per-gpack
  override, which is a much older/incomplete stylesheet).
- `dorf1.php` — removed the hardcoded, dorf1-only `<link href="css/rtl.css">`
  tag; it now goes through the same shared `tz_rtl_stylesheet_tag()` call as
  every other page, so dorf1.php and the rest of the game use one identical
  code path.
- `css/rtl.css` — no CSS rules changed. Only the top comment block was
  updated to correctly describe it as the single, globally-loaded RTL
  stylesheet (it was already written scoped correctly under
  `html[dir="rtl"]`; the comment previously described it as dorf1/2/3-only,
  which was misleading now that it's loaded everywhere).

## 3. Which pages are now covered

Every page that already calls `tz_html_dir_attrs()` + `tz_rtl_stylesheet_tag()`
in its `<head>` — confirmed by inspection to include: dorf1.php, dorf2.php,
dorf3.php, karte.php, karte2.php, build.php, berichte.php (reports),
nachrichten.php (messages), allianz.php (alliance), spieler.php (profile),
build_croppers.php, crop_finder.php, feeding.php, statistiken.php,
manual.php, tutorial.php, a2b.php, a2b2.php, plus.php, plus1.php,
packages.php, rules.php, spielregeln.php, terms.php, impressum.php,
anleitung.php, warsim.php, support.php, version.php, winner.php,
maintenance.php, banned.php, activate.php, anmelden.php, login.php,
logout.php, password.php, index.php, Admin/admin.php,
GameEngine/notification/index.php / notification/index.php.

No page in the repo sets `dir="rtl"` without also calling
`tz_rtl_stylesheet_tag()` (verified with a grep pass), so this single
function-level fix reaches all of them without any further per-page edits.

## 4. Why the RTL layout no longer disappears when navigating

Previously, `css/rtl.css` — the stylesheet that actually implements the
correct layout (sidebar/hero position, RTL text alignment, production
layout, Arabic typography) — was linked with a hardcoded `<link>` tag that
existed **only** inside `dorf1.php`. Every other page called
`tz_rtl_stylesheet_tag()`, which at the time only linked an older,
much-less-complete per-gpack override file. The moment a player navigated
away from the village overview (map, tabs, any other menu), that hardcoded
tag was gone, so the browser stopped loading `css/rtl.css` and the page
fell back to the default English/LTR float order for `#side_navi` /
`#content` / `#side_info`.

Since `tz_rtl_stylesheet_tag()` now links `css/rtl.css` itself, and this
function is already invoked from every page's `<head>`, the correct RTL
stylesheet is loaded consistently everywhere navigation can go — there is
no longer a "special" page that has the fix and other pages that don't.

## 5. How the hero/sidebar are positioned outside the central container

`#side_navi` (sidebar/nav), `#content` (central container — village map /
reports / messages / etc.), and `#side_info` (hero/quest/news sidebar) are
**siblings**, not nested — `#content` never wraps the other two. In the
English layout all three are `float: left` in DOM order
(`#side_navi`, `#content`, `#side_info`), so they stack left-to-right as
Sidebar → Content → Hero.

`css/rtl.css` (scoped under `html[dir="rtl"]`) flips only the `float`
direction of all three to `float: right`, without touching DOM order,
width, or adding any margins:

```css
html[dir="rtl"] #side_navi { float: right; }
html[dir="rtl"] #content   { float: right; }
html[dir="rtl"] #side_info { float: right; }
```

Because CSS floats stack in DOM order starting from the float side, this
places `#side_navi` (first in the DOM) at the far right, `#content` next to
its left, and `#side_info` (last in the DOM) at the far left — giving:

    [ Hero / #side_info ]   [ Content / #content ]   [ Sidebar / #side_navi ]
           LEFT                     CENTER                    RIGHT

`#content`'s own width is never changed (537px on dorf1.php, 502px on
reports/messages/alliance/profile pages, etc. — untouched from the English
CSS), and no negative margins are used for this positioning — only a float
side flip on three existing sibling elements. Pixel-coordinate regions
(`#village_map`, `#res`, `#header`, `#mtop`, etc.) are separately forced
back to `direction: ltr; unicode-bidi: isolate;` inside the same file so
resource-field icons and the map's own coordinate system are never mirrored
or shifted.
