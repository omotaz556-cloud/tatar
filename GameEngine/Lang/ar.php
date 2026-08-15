<?php

if (!function_exists('tz_def')) {
    function tz_def($k, $v) { if (!defined($k)) { define($k, $v); } }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////
//                                             NOVATERRA                                             //
//            Only for advanced users, do not edit if you dont know what are you doing!             //
//                                Made by: Dzoki & Dixie (Novaterra)                                 //
//                              - Novaterra = Novaterra Clone Project -                                //
//                                 DO NOT REMOVE COPYRIGHT NOTICE!                                  //
//                                Adding tasks, constructions and artefact  by: Armando             //
//                                Modified , added , fixed , implementd  by: Shadow and ronix       //
//                                                                             						//
//  					URLs:           https://novaterra.example                                        //
//                 						https://github.com/omotaz556-cloud/tatar                        //
//                                                                             						//
//////////////////////////////////////////////////////////////////////////////////////////////////////
									//                         //
									//         ARABIC          //
									//   FIRST PASS (partial)  //
									//////////////////////////////

// ============================================================================
// ARABIC LANGUAGE FILE - FIRST PASS (نسخة أولى)
//
// This file is NOT a full translation. It covers only the highest-visibility
// strings: main menu, tribe/unit names, core errors, index/login/register
// pages, attack & map screens, and the most common buildings.
//
// Every key intentionally left out of this file automatically falls back to
// English via GameEngine/Lang/loader.php (tz_load_language merges English
// underneath the selected language, so undefined keys are never blank).
//
// See _TATARS_RENAME_NOTE.md for the list of remaining sections (quest lore,
// full building descriptions, admin panel templates, WW story text, etc.)
// that still need translation in a follow-up pass.
// ============================================================================

//MAIN MENU
tz_def('TRIBE1', 'الرومان');
tz_def('TRIBE2', 'التوتون');
tz_def('TRIBE3', 'الغال');
tz_def('TRIBE4', 'الطبيعة');
tz_def('TRIBE5', 'التتار');
tz_def('TRIBE6', 'الهون');
tz_def('TRIBE7', 'المصريون');
tz_def('TRIBE8', 'الإسبرطيون');
tz_def('TRIBE9', 'الفايكنج');

tz_def('HOME', 'الصفحة الرئيسية');
tz_def('INSTRUCT', 'التعليمات');
tz_def('ADMIN_PANEL', 'لوحة الإدارة');
tz_def('MH_PANEL', 'لوحة صائد الغش');
tz_def('MASS_MESSAGE', 'رسالة جماعية');
tz_def('LOGOUT', 'تسجيل الخروج');
tz_def('PROFILE', 'الملف الشخصي');
tz_def('SUPPORT', 'الدعم');
tz_def('UPDATE_T_10', 'تحديث أفضل 10');
tz_def('SYSTEM_MESSAGE', 'رسالة النظام');
tz_def('NOVATERRA_PLUS', 'نوفاتيرا <b><span class="plus_g">پ</span><span class="plus_o">ل</span><span class="plus_g">ا</span><span class="plus_o">س</span></span></span></b>');
tz_def('CONTACT', 'اتصل بنا!');
tz_def('GAME_RULES', 'قواعد اللعبة');

//MENU
tz_def('REG', 'تسجيل حساب جديد');
tz_def('FORUM', 'المنتدى');
tz_def('CHAT', 'الدردشة');
tz_def('IMPRINT', 'بيانات الموقع');
tz_def('MORE_LINKS', 'روابط أخرى');
tz_def('TOUR', 'جولة في اللعبة');

//ERRORS
tz_def('USRNM_EMPTY', '(اسم المستخدم فارغ)');
tz_def('USRNM_TAKEN', '(هذا الاسم مستخدم بالفعل)');
tz_def('USRNM_CHAR', '(أحرف غير صالحة)');
tz_def('PW_EMPTY', '(كلمة المرور فارغة)');
tz_def('PW_INSECURE', '(كلمة المرور غير آمنة. الرجاء اختيار كلمة أقوى)');
tz_def('EMAIL_EMPTY', '(البريد الإلكتروني فارغ)');
tz_def('EMAIL_INVALID', '(عنوان بريد إلكتروني غير صالح)');
tz_def('EMAIL_TAKEN', '(هذا البريد الإلكتروني مستخدم بالفعل)');
tz_def('WINNER_ERROR', '<li>انتهى الخادم! لا يمكن إجراء تسجيلات جديدة.</li>');
tz_def('TRIBE_EMPTY', '<li>الرجاء اختيار قبيلة.</li>');
tz_def('AGREE_ERROR', '<li>يجب الموافقة على قواعد اللعبة والشروط والأحكام العامة للتسجيل.</li>');
tz_def('LOGIN_USR_EMPTY', 'أدخل الاسم.');
tz_def('LOGIN_PASS_EMPTY', 'أدخل كلمة المرور.');
tz_def('LOGIN_VACATION', 'وضع الإجازة لا يزال مفعّلاً.');
tz_def('EMAIL_ERROR', 'البريد الإلكتروني غير مطابق للمسجل');
tz_def('PASS_MISMATCH', 'كلمتا المرور غير متطابقتين');
tz_def('USR_NT_FOUND', 'الاسم غير موجود.');
tz_def('LOGIN_PW_ERROR', 'كلمة المرور غير صحيحة.');
tz_def('WEL_TOPIC', 'نصائح ومعلومات مفيدة');
tz_def('NAME_EMPTY', 'الرجاء إدخال الاسم');
tz_def('NO_PERMISSION', 'ليس لديك صلاحيات كافية!');

//BUILD.TPL
tz_def('CUR_PROD', 'الإنتاج الحالي');
tz_def('NEXT_PROD', 'الإنتاج عند المستوى ');
tz_def('CONSTRUCT_BUILD', 'إنشاء مبنى');

//======================================================//
//================ UNITS - DO NOT EDIT! ================//
//======================================================//
tz_def('U0', 'البطل');

//ROMAN UNITS
tz_def('U1', 'جندي فيلق');
tz_def('U2', 'حارس متميز');
tz_def('U3', 'إمبيريان');
tz_def('U4', 'فارس استطلاع');
tz_def('U5', 'فارس إمبراطوري');
tz_def('U6', 'فارس قيصري');
tz_def('U7', 'كبش هدم');
tz_def('U8', 'منجنيق ناري');
tz_def('U9', 'شيخ مجلس الشيوخ');
tz_def('U10', 'مستوطن');

//TEUTON UNITS
tz_def('U11', 'حامل الهراوة');
tz_def('U12', 'رامح');
tz_def('U13', 'حامل فأس');
tz_def('U14', 'كشّاف');
tz_def('U15', 'فارس مقدّس');
tz_def('U16', 'فارس توتوني');
tz_def('U17', 'كبش هدم');
tz_def('U18', 'منجنيق');
tz_def('U19', 'الزعيم');
tz_def('U20', 'مستوطن');

//GAUL UNITS
tz_def('U21', 'فالانكس');
tz_def('U22', 'مبارز بالسيف');
tz_def('U23', 'رائد استكشاف');
tz_def('U24', 'رعد ثيوتاتيس');
tz_def('U25', 'فارس الكهنة');
tz_def('U26', 'هيدوان');
tz_def('U27', 'كبش هدم');
tz_def('U28', 'منجنيق ثقيل');
tz_def('U29', 'الزعيم القبلي');
tz_def('U30', 'مستوطن');
tz_def('U99', 'فخ');

//NATURE UNITS
tz_def('U31', 'جرذ');
tz_def('U32', 'عنكبوت');
tz_def('U33', 'ثعبان');
tz_def('U34', 'خفاش');
tz_def('U35', 'خنزير بري');
tz_def('U36', 'ذئب');
tz_def('U37', 'دب');
tz_def('U38', 'تمساح');
tz_def('U39', 'نمر');
tz_def('U40', 'فيل');

//TATARS UNITS
tz_def('U41', 'رامح مشاة');
tz_def('U42', 'محارب شائك');
tz_def('U43', 'حارس');
tz_def('U44', 'طيور جارحة');
tz_def('U45', 'فارس فأس');
tz_def('U46', 'فارس تتاري');
tz_def('U47', 'فيل حربي');
tz_def('U48', 'باليستا');
tz_def('U49', 'الإمبراطور التتري');
tz_def('U50', 'مستوطن تتاري');
//HUNS (TRIBE 6)
tz_def('U51', 'محارب هوني');
tz_def('U52', 'فارس استطلاع');
tz_def('U53', 'رامي سهام على حصان');
tz_def('U54', 'فارس السهوب');
tz_def('U55', 'رمّاح هوني');
tz_def('U56', 'فارس نخبة');
tz_def('U57', 'كبش هدم');
tz_def('U58', 'منجنيق');
tz_def('U59', 'زعيم القبيلة');
tz_def('U60', 'مستوطن هوني');
//EGYPTIANS (TRIBE 7)
tz_def('U61', 'عبد مسلّح');
tz_def('U62', 'مقاتل مصري');
tz_def('U63', 'حارس المعبد');
tz_def('U64', 'كشّاف على حصان');
tz_def('U65', 'عربة حربية');
tz_def('U66', 'العربة الملكية');
tz_def('U67', 'كبش هدم');
tz_def('U68', 'منجنيق');
tz_def('U69', 'حاكم الإقليم');
tz_def('U70', 'مستوطن مصري');
//SPARTANS (TRIBE 8)
tz_def('U71', 'محارب هوبليت إسبرطي');
tz_def('U72', 'محارب أگوجي');
tz_def('U73', 'هومويوي');
tz_def('U74', 'كشّاف بيريويكوي');
tz_def('U75', 'فارس إسبرطي');
tz_def('U76', 'هيبيس');
tz_def('U77', 'كبش هدم');
tz_def('U78', 'منجنيق');
tz_def('U79', 'الإيفور');
tz_def('U80', 'مستوطن إسبرطي');
//VIKINGS (TRIBE 9)
tz_def('U81', 'غازي فايكنج');
tz_def('U82', 'كشّاف فايكنج');
tz_def('U83', 'حامل فأس');
tz_def('U84', 'برسركر');
tz_def('U85', 'فارس فايكنج');
tz_def('U86', 'هوسكارل');
tz_def('U87', 'كبش هدم');
tz_def('U88', 'منجنيق');
tz_def('U89', 'الإيرل');
tz_def('U90', 'مستوطن فايكنج');

//INDEX.php
tz_def('LOGIN', 'تسجيل الدخول');
tz_def('PLAYERS', 'اللاعبون');
tz_def('MODERATOR', 'مشرف');
tz_def('ACTIVE', 'نشط');
tz_def('ONLINE', 'متصل');
tz_def('TUTORIAL', 'الدليل التعليمي');
tz_def('PLAYER_STATISTICS', 'إحصائيات اللاعبين');
tz_def('ACTIVE_PLAYERS', 'اللاعبون النشطون');
tz_def('REGISTER_FOR_FREE', 'سجّل هنا مجانًا!');
tz_def('LATEST_GAME_WORLD', 'آخر عالم لعبة');
tz_def('COMUNITY', 'المجتمع');
tz_def('NEWS', 'الأخبار');
tz_def('SCREENSHOTS', 'لقطات الشاشة');
tz_def('AGB', 'الشروط والأحكام');
tz_def('P_ONLINE', 'اللاعبون المتصلون: ');
tz_def('P_TOTAL', 'إجمالي اللاعبين: ');
tz_def('CHOOSE', 'الرجاء اختيار خادم.');

//ANMELDEN.php
tz_def('NICKNAME', 'الاسم المستعار');
tz_def('EMAIL', 'البريد الإلكتروني');
tz_def('PASSWORD', 'كلمة المرور');
tz_def('NW', 'الشمال الغربي');
tz_def('NE', 'الشمال الشرقي');
tz_def('SW', 'الجنوب الغربي');
tz_def('SE', 'الجنوب الشرقي');
tz_def('RANDOM', 'عشوائي');
tz_def('ACCEPT_RULES', ' أوافق على قواعد اللعبة والشروط والأحكام العامة.');
tz_def('ONE_PER_SERVER', 'يجوز لكل لاعب امتلاك حساب واحد فقط لكل خادم.');
tz_def('BUILDING_UPGRADING', 'قيد الإنشاء:');
tz_def('HOURS', 'ساعات');

//ATTACKS ETC.
tz_def('TROOP_MOVEMENTS', 'تحركات الجيوش:');
tz_def('ARRIVING_REINF_TROOPS', 'تعزيزات قادمة');
tz_def('ARRIVING_ATTACKING_TROOPS', 'قوات مهاجمة قادمة');
tz_def('ARRIVING_REINF_TROOPS_SHORT', 'تعزيز.');
tz_def('OWN_ATTACKING_TROOPS', 'قواتك المهاجمة');
tz_def('ATTACK', 'هجوم');
tz_def('OWN_REINFORCING_TROOPS', 'تعزيزاتك');
tz_def('NEWVILLAGE', 'قرية جديدة.');
tz_def('FOUNDNEWVILLAGE', 'تأسيس قرية جديدة');
tz_def('UNDERATTACK', 'القرية تتعرض لهجوم');
tz_def('OASISATTACK', 'الواحة تتعرض لهجوم');
tz_def('RETURNFROM', 'عائد من');
tz_def('REINFORCEMENTFOR', 'تعزيز إلى');
tz_def('ATTACK_ON', 'هجوم على');
tz_def('RAID_ON', 'غارة على');
tz_def('SCOUTING', 'استطلاع');
tz_def('PRISONERS', 'الأسرى');
tz_def('TROOPS', 'الجيوش');
tz_def('BOUNTY', 'الغنيمة');
tz_def('ARRIVAL', 'الوصول');
tz_def('INCOMING_TROOPS', 'جيوش قادمة');
tz_def('OWN_TROOPS', 'جيوشك');
tz_def('UPKEEP', 'إعاشة');
tz_def('SEND_BACK', 'إعادة الإرسال');
tz_def('KILL', 'إبادة');
tz_def('FROM', 'من');
tz_def('SEND_TROOPS', 'إرسال الجيوش');

//SEND TROOP
tz_def('REINFORCE', 'تعزيز');
tz_def('NORMALATTACK', 'هجوم عادي');
tz_def('RAID', 'غارة');
tz_def('OR', 'أو');
tz_def('SENDTROOP', 'إرسال الجيوش');
tz_def('NOTROOP', 'لا توجد جيوش');

//map
tz_def('DETAIL', 'التفاصيل');
tz_def('ABANDVALLEY', 'وادٍ مهجور');
tz_def('OCCUPIED', 'مأهول');
tz_def('UNOCCUPIED', 'غير مأهول');
tz_def('UNOCCUOASIS', 'واحة غير مأهولة');
tz_def('OCCUOASIS', 'واحة مأهولة');
tz_def('LANDDIST', 'توزيع الأراضي');
tz_def('TRIBE', 'القبيلة');
tz_def('ALLIANCE', 'التحالف');
tz_def('POP', 'عدد السكان');
tz_def('REPORT', 'تقرير');
tz_def('OPTION', 'خيارات');
tz_def('CENTREMAP', 'توسيط الخريطة');
tz_def('FNEWVILLAGE', 'تأسيس قرية جديدة');
tz_def('SENDMERC', 'إرسال تجار');
tz_def('BAN', 'اللاعب محظور');
tz_def('PERHOUR', 'في الساعة');
tz_def('BONUS', 'مكافأة');
tz_def('MAP', 'الخريطة');
tz_def('LARGE_MAP', 'الخريطة الكبيرة');
tz_def('CROPFINDER', 'باحث المحاصيل');
tz_def('NORTH', 'الشمال');
tz_def('EAST', 'الشرق');
tz_def('SOUTH', 'الجنوب');
tz_def('WEST', 'الغرب');
tz_def('CLOSE_MAP', 'إغلاق الخريطة');
tz_def('AND', 'و');

//other
tz_def('VILLAGE', 'القرية');
tz_def('STATISTICS', 'الإحصائيات');
tz_def('ALLIANCES', 'التحالفات');
tz_def('HEROES', 'الأبطال');
tz_def('GENERAL', 'عام');
tz_def('WWS', 'عجائب الدنيا');
tz_def('TOP10P', 'أفضل 10 لاعبين');
tz_def('TOP10PA', 'أفضل 10 مهاجمين');
tz_def('TOP10PD', 'أفضل 10 مدافعين');
tz_def('TOP10A', 'أفضل 10 تحالفات');
tz_def('MILESTONES', 'الإنجازات');
tz_def('OASIS', 'الواحة');
tz_def('NO_OASIS', 'لا تملك أي واحات.');
tz_def('NO_VILLAGES', 'لا توجد قرى.');
tz_def('PLAYER', 'اللاعب');

//LOGIN.php
tz_def('NAME', 'الاسم');
tz_def('PW_FORGOTTEN', 'نسيت كلمة المرور؟');
tz_def('PW_GENERATE', 'إنشاء كلمة مرور جديدة.');
tz_def('EMAIL_NOT_VERIFIED', 'البريد الإلكتروني غير مُفعّل!');
tz_def('VERIFY_EMAIL', 'تفعيل البريد الإلكتروني.');
tz_def('SERVER_STARTS_IN', 'يبدأ الخادم خلال: ');
tz_def('START_NOW', 'ابدأ الآن');

//404.php
tz_def('NOTHING_HERE', 'لا يوجد شيء هنا!');

//INDEX PAGE (legacy $lang array — merged over English by loader.php)
$lang['index'][0][1] = 'مرحبًا بك في '.SERVER_NAME;
$lang['index'][0][2] = 'الدليل';
$lang['index'][0][3] = 'العب الآن مجانًا!';
$lang['index'][0][4] = 'ما هي '.SERVER_NAME;
$lang['index'][0][6] = 'اضغط هنا للعب '.SERVER_NAME;
$lang['index'][0][7] = 'إجمالي اللاعبين';
$lang['index'][0][8] = 'اللاعبون النشطون';
$lang['index'][0][9] = 'اللاعبون المتصلون';
$lang['index'][0][10] = 'عن اللعبة';
$lang['index'][0][11] = 'ستبدأ كزعيم لقرية صغيرة وتنطلق في مغامرة شيقة.';
$lang['index'][0][12] = 'ابنِ قراك، خض الحروب، أو أقم طرق التجارة مع جيرانك.';
$lang['index'][0][14] = 'الأخبار';
$lang['index'][0][15] = 'الأسئلة الشائعة';
$lang['index'][0][16] = 'لقطات الشاشة';
$lang['forum'] = 'المنتدى';
$lang['register'] = 'تسجيل حساب';
$lang['login'] = 'تسجيل الدخول';

//BUILDINGS
tz_def('WOODCUTTER', 'مقطع الأخشاب');
tz_def('WOODCUTTER_DESC', 'يقطع مقطع الأخشاب الأشجار لإنتاج الخشب. كلما زاد مستوى المقطع زاد إنتاج الخشب.<br>ببناء منشرة يمكنك زيادة الإنتاج أكثر');
tz_def('CLAYPIT', 'حفرة الطين');
tz_def('CLAYPIT_DESC', 'هنا يُستخرج الطين. برفع مستواها تزيد إنتاج الطين.<br>ببناء مصنع طوب يمكنك زيادة الإنتاج أكثر');
tz_def('IRONMINE', 'منجم الحديد');
tz_def('IRONMINE_DESC', 'هنا يجمع العمال معدن الحديد الثمين. برفع مستوى المنجم تزيد إنتاج الحديد.<br>ببناء مصهر حديد يمكنك زيادة الإنتاج أكثر');
tz_def('CROPLAND', 'حقل المحاصيل');
tz_def('CROPLAND_DESC', 'هنا يُنتج غذاء سكانك. برفع مستوى الحقل تزيد إنتاج المحاصيل.<br>ببناء طاحونة ومخبز يمكنك زيادة الإنتاج أكثر');

tz_def('SAWMILL', 'المنشرة');
tz_def('SAWMILL_DESC', 'يُعالَج هنا الخشب المقطوع من الحطابين. تعزز المنشرة إنتاج الخشب في القرية. في المستوى 1 تزيد الإنتاج بنسبة 5%، وكل ترقية تضيف 5% أخرى، أي 25% إجمالاً بعد 5 مستويات.<br>تسري مكافأة المنشرة وكل مباني المكافآت على قرية المبنى فقط.<br>لاحظ أن مكافأة المنشرة لا تسري على مكافآت أخرى مثل دخل الواحات أو مكافأة البلس 10%.<br>هناك أيضًا قرى بها 3 أو 5 حقول خشب. كلما زادت الحقول، زادت فعالية مستويات المنشرة');
tz_def('CURRENT_WOOD_BONUS', 'مكافأة الخشب الحالية:');
tz_def('WOOD_BONUS_LEVEL', 'مكافأة الخشب عند المستوى');
tz_def('MAX_LEVEL', 'المبنى بالفعل عند أقصى مستوى');
tz_def('PERCENT', 'النسبة المئوية');

tz_def('BRICKYARD', 'مصنع الطوب');
tz_def('CURRENT_CLAY_BONUS', 'مكافأة الطين الحالية:');
tz_def('CLAY_BONUS_LEVEL', 'مكافأة الطين عند المستوى');
tz_def('BRICKYARD_DESC', 'يتحول الطين هنا إلى طوب. يعزز مصنع الطوب إنتاج الطين في القرية. في المستوى 1 يزيد الإنتاج بنسبة 5%، وكل ترقية تضيف 5% أخرى، أي 25% إجمالاً بعد 5 مستويات.<br>تسري مكافأة مصنع الطوب وكل مباني المكافآت على قرية المبنى فقط.<br>لاحظ أن هذه المكافأة لا تسري على مكافآت أخرى مثل دخل الواحات أو مكافأة البلس 10%.<br>هناك أيضًا قرى بها 3 أو 5 حقول طين. كلما زادت الحقول، زادت فعالية المستويات');

tz_def('IRONFOUNDRY', 'مصهر الحديد');
tz_def('CURRENT_IRON_BONUS', 'مكافأة الحديد الحالية:');
tz_def('IRON_BONUS_LEVEL', 'مكافأة الحديد عند المستوى');
tz_def('IRONFOUNDRY_DESC', 'يُصهر الحديد هنا. يعزز مصهر الحديد إنتاج الحديد في القرية. في المستوى 1 يزيد الإنتاج بنسبة 5%، وكل ترقية تضيف 5% أخرى، أي 25% إجمالاً بعد 5 مستويات.<br>تسري مكافأة المصهر وكل مباني المكافآت على قرية المبنى فقط.<br>لاحظ أن هذه المكافأة لا تسري على مكافآت أخرى مثل دخل الواحات أو مكافأة البلس 10%.<br>هناك أيضًا قرى بها 3 أو 5 حقول حديد. كلما زادت الحقول، زادت فعالية المستويات');

tz_def('GRAINMILL', 'الطاحونة');
tz_def('CURRENT_CROP_BONUS', 'مكافأة المحاصيل الحالية:');
tz_def('CROP_BONUS_LEVEL', 'مكافأة المحاصيل عند المستوى');
tz_def('GRAINMILL_DESC', 'تُطحن الحبوب هنا إلى دقيق. تعزز الطاحونة إنتاج الغذاء في القرية. في المستوى 1 تزيد الإنتاج بنسبة 5%، وكل ترقية تضيف 5% أخرى، أي 25% إجمالاً بعد 5 مستويات.<br>استخدمها مع المخبز لزيادة إجمالية في إنتاج المحاصيل تصل إلى 50%.<br>تسري مكافأة الطاحونة وكل مباني المكافآت على قرية المبنى فقط.<br>لاحظ أن هذه المكافأة لا تسري على مكافآت أخرى مثل دخل الواحات أو مكافأة البلس 10%.<br>هناك أيضًا قرى بها 9 أو 15 حقل محاصيل. كلما زادت الحقول، زادت فعالية المستويات');

tz_def('BAKERY', 'المخبز');
tz_def('BAKERY_DESC', 'يُخبز الخبز هنا من الدقيق. يعزز المخبز إنتاج الغذاء في القرية. في المستوى 1 يزيد الإنتاج بنسبة 5%، وكل ترقية تضيف 5% أخرى، أي 25% إجمالاً بعد 5 مستويات.<br>عند استخدامه مع الطاحونة يمكن أن يزيد إنتاج المحاصيل بنسبة تصل إلى 50%.<br>تسري مكافأة المخبز وكل مباني المكافآت على قرية المبنى فقط.<br>لاحظ أن هذه المكافأة لا تسري على مكافآت أخرى مثل دخل الواحات أو مكافأة البلس 10%.<br>هناك أيضًا قرى بها 9 أو 15 حقل محاصيل. كلما زادت الحقول، زادت فعالية المستويات');

tz_def('WAREHOUSE', 'المخزن');
tz_def('CURRENT_CAPACITY', 'السعة الحالية:');
tz_def('CAPACITY_LEVEL', 'السعة عند المستوى');
tz_def('RESOURCE_UNITS', 'وحدات الموارد');
tz_def('WAREHOUSE_DESC', 'يُخزَّن في المخزن الخشب والطين والحديد. برفع مستواه تزيد سعة المخزن. يمكن بناء أكثر من واحد، بمجرد إتمام واحد إلى أقصى مستوى');

tz_def('GRANARY', 'الصومعة');
tz_def('CROP_UNITS', 'وحدات المحاصيل');
tz_def('GRANARY_DESC', 'تُخزَّن المحاصيل المنتجة في مزارعك بالصومعة. برفع مستواها تزيد سعتها. يمكن بناء أكثر من واحدة، بمجرد إتمام واحدة إلى أقصى مستوى');

tz_def('BLACKSMITH', 'الحدادة');
tz_def('ACTION', 'الإجراء');
tz_def('UPGRADE', 'ترقية');
tz_def('UPGRADE_IN_PROGRESS', 'الترقية<br>قيد التنفيذ');
tz_def('UPGRADE_BLACKSMITH', 'ترقية<br>الحدادة');
tz_def('UPGRADES_COMMENCE_BLACKSMITH', 'يمكن بدء الترقيات عند اكتمال الحدادة.');
tz_def('MAXIMUM_LEVEL', 'أقصى<br>مستوى');
tz_def('EXPAND_WAREHOUSE', 'توسيع<br>المخزن');
tz_def('EXPAND_GRANARY', 'توسيع<br>الصومعة');
tz_def('ENOUGH_RESOURCES', 'موارد كافية');
tz_def('CROP_NEGATIVE ', 'إنتاج المحاصيل سالب لذا لن تصل أبدًا إلى الموارد المطلوبة');
tz_def('TOO_FEW_RESOURCES', 'موارد<br>غير كافية');
tz_def('UPGRADING', 'الترقية جارية');
tz_def('DURATION', 'المدة');
tz_def('COMPLETE', 'اكتمال');
tz_def('BLACKSMITH_DESC', 'تُحسَّن أسلحة محاربيك في أفران الحدادة المنصهرة. برفع مستواها يمكنك طلب صناعة أسلحة أفضل');

tz_def('ARMOURY', 'الدرع');
tz_def('UPGRADE_ARMOURY', 'ترقية<br>الدرع');
tz_def('UPGRADES_COMMENCE_ARMOURY', 'يمكن بدء الترقيات عند اكتمال ورشة الدرع.');
tz_def('ARMOURY_DESC', 'تُحسَّن دروع محاربيك في أفران ورشة الدرع المنصهرة. برفع مستواها يمكنك طلب صناعة دروع أفضل');

tz_def('TOURNAMENTSQUARE', 'ساحة المسابقات');
tz_def('CURRENT_SPEED', 'مكافأة السرعة الحالية:');
tz_def('SPEED_LEVEL', 'مكافأة السرعة عند المستوى');
tz_def('TOURNAMENTSQUARE_DESC', 'يمكن لجيوشك زيادة قدرتها على التحمل في ساحة المسابقات. كلما زاد مستوى المبنى، أصبحت جيوشك أسرع بعد مسافة أدنى قدرها '.TS_THRESHOLD.' مربعًا');

tz_def('MAINBUILDING', 'المبنى الرئيسي');
tz_def('CURRENT_CONSTRUCTION_TIME', 'زمن البناء الحالي:');
tz_def('CONSTRUCTION_TIME_LEVEL', 'زمن البناء عند المستوى');
tz_def('DEMOLITION_BUILDING', 'هدم المبنى:</h2><p>إذا لم تعد بحاجة لمبنى، يمكنك طلب هدمه.</p>');
tz_def('DEMOLISH', 'هدم');
tz_def('DEMOLITION_OF', 'هدم ');
tz_def('MAINBUILDING_DESC', 'يعيش كبار البنائين في القرية بالمبنى الرئيسي. كلما زاد مستواه، أنجز البنّاؤون بناء المباني الجديدة أسرع.');

tz_def('RALLYPOINT', 'نقطة التجمع');
tz_def('RALLYPOINT_COMMENCE', 'ستظهر تحركات الجيوش عند اكتمال '.RALLYPOINT);
tz_def('OVERVIEW', 'نظرة عامة');
tz_def('REINFORCEMENT', 'تعزيز');
tz_def('EVASION_SETTINGS', 'إعدادات المراوغة');
tz_def('SEND_TROOPS_AWAY_MAX', 'إرسال الجيوش بعيدًا كحد أقصى');
tz_def('TIMES', 'مرات');
tz_def('PER_EVASION', 'لكل مراوغة');
tz_def('RALLYPOINT_DESC', 'تتجمع جيوش قريتك هنا. من هنا يمكنك إرسالها لغزو قرى أخرى أو غزوها أو تعزيزها.<br>إذا كان عدد الوحدات المهاجمة أقل من مستوى نقطة التجمع، يمكنك رؤية نوع الوحدة المهاجمة.');
tz_def('COMBAT_SIMULATOR', 'محاكي المعارك');

tz_def('MARKETPLACE', 'السوق');
tz_def('MERCHANT', 'التجار');
tz_def('OR_', 'أو');
tz_def('GO', 'اذهب');
tz_def('UNITS_OF_RESOURCE', 'وحدات من المورد');
tz_def('MERCHANT_CARRY', 'يمكن لكل تاجر حمل');
tz_def('MERCHANT_COMING', 'تجار قادمون');
tz_def('TRANSPORT_FROM', 'نقل من');
tz_def('ARRIVAL_IN', 'الوصول خلال');
tz_def('NO_COORDINATES_SELECTED', 'لم يتم اختيار إحداثيات');
tz_def('CANNOT_SEND_RESOURCES', 'لا يمكنك إرسال موارد لنفس القرية');
tz_def('BANNED_CANNOT_SEND_RESOURCES', 'اللاعب محظور. لا يمكنك إرسال موارد له');
tz_def('RESOURCES_NO_SELECTED', 'لم يتم اختيار موارد');
tz_def('ENTER_COORDINATES', 'أدخل الإحداثيات أو اسم القرية');
tz_def('TOO_FEW_MERCHANTS', 'عدد التجار غير كافٍ');
tz_def('OWN_MERCHANTS_ONWAY', 'تجارك في الطريق');
tz_def('MERCHANTS_RETURNING', 'تجار عائدون');
tz_def('TRANSPORT_TO', 'نقل إلى');
tz_def('I_AN_SEARCHING', 'أبحث عن');
tz_def('I_AN_OFFERING', 'أعرض');
tz_def('OFFERS_MARKETPLACE', 'عروض السوق');
tz_def('NO_AVAILABLE_OFFERS', 'لا توجد عروض في السوق');
tz_def('OFFERED_TO_ME', 'معروض<br>عليّ');
tz_def('WANTED_TO_ME', 'مطلوب<br>مني');
tz_def('NOT_ENOUGH_MERCHANTS', 'عدد التجار غير كافٍ');
tz_def('ACCEP_OFFER', 'قبول العرض');
tz_def('NO_AVALIBLE_OFFERS', 'لا توجد عروض متاحة في السوق');
tz_def('SEARCHING', 'يبحث عن');
tz_def('OFFERING', 'يعرض');
tz_def('MAX_TIME_TRANSPORT', 'أقصى زمن نقل');
tz_def('OWN_ALLIANCE_ONLY', 'تحالفي فقط');
tz_def('INVALID_OFFER', 'عرض غير صالح');
tz_def('INVALID_MERCHANTS_REPETITION', 'معدل تكرار تجار غير صالح');
tz_def('USER_ON_VACATION', 'اللاعب في وضع الإجازة');
tz_def('VACATION_MODE', 'وضع الإجازة');
tz_def('VACATION_DESC', 'إذا كنت تخطط للغياب لفترة طويلة ولا ترغب بتعيين وصي، يمكنك تفعيل وضع الإجازة. خلال هذه الفترة يتوقف حسابك عن إنتاج الموارد ونقاط الثقافة والأبحاث والجيوش وغيرها، ويتوقف عن استقبال الهجمات والتعزيزات والغارات، أي يتجمد حسابك تمامًا. تذكر أن هذا يجمد لعبتك فقط، لا الزمن. إن كنت عضوًا في نادي الذهب فسينتهي اشتراكك خلال هذه الفترة، وإذا كان التجديد التلقائي مفعّلاً فسيُلغى أثناء وضع الإجازة. يرجى ملاحظة أن الحد الأدنى لوضع الإجازة يومان والحد الأقصى 14 يومًا');
tz_def('VACATION_DESC2', 'استخدم وضع الإجازة لحماية قراك أثناء غيابك.<br>خلال الإجازة تُعطَّل الإجراءات التالية:');
tz_def('VAC_OP1', 'إرسال أو استقبال الجيوش');
tz_def('VAC_OP2', 'بدء طلب بناء جديد');
tz_def('VAC_OP3', 'استخدام السوق');
tz_def('VAC_OP4', 'تدريب جيوش جديدة');
tz_def('VAC_OP5', 'الانضمام إلى تحالف');
tz_def('VAC_OP6', 'حذف الحساب');
tz_def('VAC_COND1', 'عدم وجود جيوش متحركة');
tz_def('VAC_COND2', 'عدم وجود جيوش متجهة لقرى أخرى');
tz_def('VAC_COND3', 'عدم وجود جيوش مرسلة لتعزيز قرى أخرى');
tz_def('VAC_COND4', 'عدم وجود لاعب لديه تعزيزات في قراك');
tz_def('VAC_COND5', 'عدم امتلاك عجيبة الدنيا');
tz_def('VAC_COND6', 'عدم امتلاك أي تحف');
tz_def('VAC_COND7', 'لست تحت حماية اللاعبين الجدد بعد الآن');
tz_def('VAC_COND8', 'عدم وجود جيوش في مصائدك');
tz_def('VAC_COND9', 'حسابك ليس قيد الحذف حاليًا');
tz_def('NOT_ENOUGH_RESOURCES', 'موارد غير كافية');
tz_def('OFFER', 'عرض');
tz_def('SEARCH', 'بحث');
tz_def('OWN_OFFERS', 'عروضي');
tz_def('ALL', 'الكل');
tz_def('NPC_TRADE', 'تجارة NPC');
tz_def('SUM', 'المجموع');
tz_def('REST', 'المتبقي');
tz_def('TRADE_RESOURCES', 'تبادل الموارد عند (الخطوة 2 من 2)');
tz_def('DISTRIBUTE_RESOURCES', 'توزيع الموارد عند (الخطوة 1 من 2)');
tz_def('OF', 'من');
tz_def('NPC_COMPLETED', 'اكتملت تجارة NPC');
tz_def('BACK_BUILDING', 'العودة إلى المبنى');
tz_def('YOU_CAN_NAT_NPC_WW', 'لا يمكنك استخدام تجارة NPC في قرية عجيبة الدنيا.');
tz_def('NPC_TRADING', 'تجارة NPC');
tz_def('SEND_RESOURCES', 'إرسال الموارد');
tz_def('BUY', 'شراء');
tz_def('TRADE_ROUTES', 'طرق التجارة');
tz_def('DESCRIPTION', 'الوصف');
tz_def('G_DESCR', 'وصف عام');
tz_def('TIME_LEFT', 'الوقت المتبقي');
tz_def('START', 'بدء');
tz_def('NO_TRADE_ROUTES', 'لا توجد طرق تجارة نشطة');
tz_def('TRADE_ROUTE_TO', 'طريق تجارة إلى');
tz_def('CHECKED', 'محدد');
tz_def('DAYS', 'أيام');
tz_def('EXTEND', 'تمديد');
tz_def('EDIT', 'تعديل');
tz_def('EXTEND_TRADE_ROUTES', 'تمديد طريق التجارة لمدة <b>7</b> أيام مقابل');
tz_def('CREATE_TRADE_ROUTES', 'إنشاء طريق تجارة جديد');
tz_def('DELIVERIES', 'التوصيلات');
tz_def('START_TIME_TRADE', 'وقت البدء');
tz_def('CREATE_TRADE_ROUTE', 'إنشاء طريق تجارة');
tz_def('TARGET_VILLAGE', 'القرية المستهدفة');
tz_def('EDIT_TRADE_ROUTES', 'تعديل طريق التجارة');
tz_def('TRADE_ROUTES_DESC', 'يتيح لك طريق التجارة تحديد مسارات لتاجرك يسلكها كل يوم في ساعة معينة. <br><br> تستمر افتراضيًا <b>7</b> أيام، ويمكنك تمديدها <b>7</b> أيام أخرى مقابل');
tz_def('NPC_TRADE_DESC', 'باستخدام تاجر NPC يمكنك إعادة توزيع الموارد في مخزنك كما تشاء. <br><br> يعرض السطر الأول المخزون الحالي. في السطر الثاني يمكنك اختيار توزيع آخر. يعرض السطر الثالث الفرق بين المخزون القديم والجديد.');
tz_def('MARKETPLACE_DESC', 'في السوق يمكنك تبادل الموارد مع لاعبين آخرين. كلما زاد مستواه، زادت كمية الموارد التي ينقلها تجارك في المرة الواحدة');

tz_def('EMBASSY', 'السفارة');
tz_def('TAG', 'الشعار');
tz_def('TO_THE_ALLIANCE', 'إلى التحالف');
tz_def('JOIN_ALLIANCE', 'الانضمام إلى تحالف');
tz_def('REFUSE', 'رفض');
tz_def('ACCEPT', 'قبول');
tz_def('NO_INVITATIONS', 'لا توجد دعوات متاحة.');
tz_def('NO_CREATE_ALLIANCE', 'لا يمكن للاعب المحظور إنشاء تحالف.');
tz_def('FOUND_ALLIANCE', 'تأسيس تحالف');
tz_def('EMBASSY_DESC', 'السفارة مكان للدبلوماسيين. في المستوى 1 يمكنك الانضمام إلى تحالف، وبعد رفعها للمستوى 3 يمكنك تأسيس تحالف بنفسك.<br>الحد الأقصى لأعضاء التحالف هو 60');

tz_def('BARRACKS', 'الثكنة');
tz_def('QUANTITY', 'الكمية');
tz_def('MAX', 'الحد الأقصى');
tz_def('TRAINING', 'التدريب');
tz_def('FINISHED', 'اكتمل');
tz_def('UNIT_FINISHED', 'ستنتهي الوحدة التالية خلال');
tz_def('AVAILABLE', 'متاح');
tz_def('TRAINING_COMMENCE_BARRACKS', 'يمكن بدء التدريب عند اكتمال الثكنة.');
tz_def('BARRACKS_DESC', 'يمكن تدريب المشاة في الثكنة. كلما زاد مستواها، تدرّب الجيوش أسرع');

tz_def('STABLE', 'الإسطبل');
tz_def('AVAILABLE_ACADEMY', 'لا توجد وحدات متاحة. ابحث في الأكاديمية');
tz_def('TRAINING_COMMENCE_STABLE', 'يمكن بدء التدريب عند اكتمال الإسطبل.');
tz_def('STABLE_DESC', 'يمكن تدريب الفرسان في الإسطبل. كلما زاد مستواه، تدرّب الجيوش أسرع');

tz_def('WORKSHOP', 'الورشة');
tz_def('TRAINING_COMMENCE_WORKSHOP', 'يمكن بدء التدريب عند اكتمال الورشة.');
tz_def('WORKSHOP_DESC', 'يمكن بناء آلات الحصار كالمنجنيقات والكباش في الورشة. كلما زاد مستواها، أُنتجت هذه الوحدات أسرع');

tz_def('ACADEMY', 'الأكاديمية');
tz_def('RESEARCH_AVAILABLE', 'لا توجد أبحاث متاحة');
tz_def('RESEARCH_COMMENCE_ACADEMY', 'يمكن بدء الأبحاث عند اكتمال الأكاديمية.');
tz_def('RESEARCH', 'بحث');
tz_def('EXPAND_WAREHOUSE1', 'توسيع المخزن');
tz_def('EXPAND_GRANARY1', 'توسيع الصومعة');
tz_def('RESEARCH_IN_PROGRESS', 'البحث<br>قيد التنفيذ');
tz_def('RESEARCHING', 'جارٍ البحث');
tz_def('PREREQUISITES', 'المتطلبات');
tz_def('SHOW_MORE', 'عرض المزيد');
tz_def('HIDE_MORE', 'إخفاء');
tz_def('ACADEMY_DESC', 'يمكن البحث عن أنواع وحدات جديدة في الأكاديمية. برفع مستواها يمكنك طلب أبحاث وحدات أفضل');

tz_def('CRANNY', 'المخبأ');
tz_def('CURRENT_HIDDEN_UNITS', 'الوحدات المخبأة حاليًا لكل مورد:');
tz_def('HIDDEN_UNITS_LEVEL', 'الوحدات المخبأة لكل مورد عند المستوى');
tz_def('UNITS', 'وحدات');
tz_def('CRANNY_DESC', 'يخفي المخبأ بعض مواردك في حال تعرضت القرية لهجوم. لا يمكن سرقة هذه الموارد.<br>في المستوى 1 يمكن للمخبأ حفظ '.(100*((int)CRANNY_CAPACITY)).' من كل مورد. سعة مخابئ الغال أكبر بـ 1.5 مرة.<br>إذا هاجم بطل توتوني قرية، فلا يمكن للمخابئ إخفاء سوى 80% من سعتها المعتادة');

tz_def('TOWNHALL', 'قاعة المدينة');
tz_def('CELEBRATIONS_COMMENCE_TOWNHALL', 'يمكن بدء الاحتفالات عند اكتمال قاعة المدينة.');
tz_def('GREAT_CELEBRATIONS', 'احتفال كبير');
tz_def('CULTURE_POINTS', 'نقاط الثقافة');
tz_def('HOLD', 'إقامة');
tz_def('CELEBRATIONS_IN_PROGRESS', 'الاحتفال<br>قيد التنفيذ');
tz_def('CELEBRATIONS', 'الاحتفالات');
tz_def('TOWNHALL_DESC', 'في قاعة المدينة يمكنك إقامة احتفالات فخمة. يزيد هذا الاحتفال نقاط ثقافتك.<br>نقاط الثقافة ضرورية لتأسيس أو غزو قرى جديدة. كل مبنى ينتج نقاط ثقافة، وكلما زاد مستواه زاد إنتاجها');

tz_def('RESIDENCE', 'المقر');
tz_def('CAPITAL', 'هذه عاصمتك');
tz_def('RESIDENCE_TRAIN_DESC', 'لتأسيس قرية جديدة تحتاج مقرًا بمستوى 10 أو 20 و3 مستوطنين. لغزو قرية جديدة تحتاج مقرًا بمستوى 10 أو 20 وشيخ مجلس شيوخ أو زعيم أو زعيم قبلي.');
tz_def('PRODUCTION_POINTS', 'إنتاج هذه القرية:');
tz_def('PRODUCTION_ALL_POINTS', 'إنتاج كل القرى:');
tz_def('POINTS_DAY', 'نقاط الثقافة يوميًا');
tz_def('VILLAGES_PRODUCED', 'أنتجت قراك');
tz_def('POINTS_NEED', 'نقطة إجمالاً. لتأسيس أو غزو قرية جديدة تحتاج');
tz_def('POINTS', 'نقطة');
tz_def('INHABITANTS', 'السكان');
tz_def('COORDINATES', 'الإحداثيات');
tz_def('EXPANSION', 'التوسع');
tz_def('TRAIN', 'تدريب');
tz_def('DATE', 'التاريخ');
tz_def('CONQUERED_BY_VILLAGE', 'القرى التي أسستها أو غزتها هذه القرية');
tz_def('NONE_CONQUERED_BY_VILLAGE', 'لم تؤسس أو تغزُ هذه القرية أي قرية أخرى بعد.');
tz_def('RESIDENCE_CULTURE_DESC', 'لتوسيع إمبراطوريتك تحتاج نقاط ثقافة. تزداد هذه النقاط بمرور الوقت وبشكل أسرع كلما زادت مستويات مبانيك.');
tz_def('RESIDENCE_LOYALTY_DESC', 'بالهجوم بشيوخ مجلس الشيوخ أو الزعماء أو الزعماء القبليين يمكن خفض ولاء قرية. إذا وصل للصفر، تنضم القرية لمملكة المهاجم. ولاء هذه القرية حاليًا هو ');
tz_def('RESIDENCE_DESC', 'يحمي المقر القرية من الغزو المعادي. يمكن بناء مقر واحد لكل قرية. يمكن تدريب الوحدات القادرة على تأسيس قرية جديدة أو غزو قرى موجودة هنا.<br>كما يوفر المقر فتحة توسع عند المستويين 10 و20');

tz_def('PALACE', 'القصر');
tz_def('PALACE_CONSTRUCTION', 'القصر قيد الإنشاء');
tz_def('PALACE_TRAIN_DESC', 'لتأسيس قرية جديدة تحتاج قصرًا بمستوى 10 أو 15 أو 20 و3 مستوطنين. لغزو قرية جديدة تحتاج قصرًا بمستوى 10 أو 15 أو 20 وشيخ مجلس شيوخ أو زعيم أو زعيم قبلي.');
tz_def('CHANGE_CAPITAL', 'تغيير العاصمة');
tz_def('SECURITY_CHANGE_CAPITAL', 'هل أنت متأكد أنك تريد تغيير عاصمتك؟<br><b>لا يمكن التراجع عن هذا!</b><br>للأمان يجب إدخال كلمة المرور للتأكيد:<br>');
tz_def('PALACE_DESC', 'مبنى القصر فريد. يمكنك بناء واحد فقط في كامل مملكتك، ويمكنك إعلان تلك القرية عاصمتك. كما يحمي القرية من الغزو المعادي. يمكن تدريب الوحدات القادرة على تأسيس قرية جديدة أو غزو قرى موجودة هنا.<br>كما يوفر القصر فتحة توسع عند المستويات 10 و15 و20');

tz_def('TREASURY', 'الخزانة');
tz_def('TREASURY_COMMENCE', 'يمكن عرض التحف عند اكتمال الخزانة.');
tz_def('ARTEFACTS_AREA', 'التحف في منطقتك');
tz_def('NO_ARTEFACTS_AREA', 'لا توجد تحف في منطقتك.');
tz_def('OWN_ARTEFACTS', 'تحفك');
tz_def('CONQUERED', 'مُستولى عليها');
tz_def('DISTANCE', 'المسافة');
tz_def('EFFECT', 'التأثير');
tz_def('ACCOUNT', 'الحساب');
tz_def('SMALL_ARTEFACTS', 'التحف الصغيرة');
tz_def('LARGE_ARTEFACTS', 'التحف الكبيرة');
tz_def('NO_ARTEFACTS', 'لا توجد تحف.');
tz_def('ANY_ARTEFACTS', 'لا تملك أي تحف.');
tz_def('OWNER', 'المالك');
tz_def('AREA_EFFECT', 'تأثير المنطقة');
tz_def('VILLAGE_EFFECT', 'تأثير القرية');
tz_def('ACCOUNT_EFFECT', 'تأثير الحساب');
tz_def('UNIQUE_EFFECT', 'تأثير فريد');
tz_def('REQUIRED_LEVEL', 'المستوى المطلوب');
tz_def('TIME_CONQUER', 'وقت الاستيلاء');
tz_def('TIME_ACTIVATION', 'وقت التفعيل');
tz_def('NEXT_EFFECT', ' التأثير التالي');
tz_def('FORMER_OWNER', 'المالك (المالكون) السابق');
tz_def('BUILDING_STRONGER', 'يجعل المبنى أقوى بمقدار');
tz_def('BUILDING_WEAKER', 'يجعل المبنى أضعف بمقدار');
tz_def('TROOPS_FASTER', 'يجعل الجيوش أسرع بمقدار');
tz_def('TROOPS_SLOWEST', 'يجعل الجيوش أبطأ بمقدار');
tz_def('SPIES_INCREASE', 'يزيد قدرة الجواسيس بمقدار');
tz_def('SPIES_DECRESE', 'يقلل قدرة الجواسيس بمقدار');
tz_def('CONSUME_LESS', 'تستهلك كل الجيوش أقل بمقدار');
tz_def('CONSUME_HIGH', 'تستهلك كل الجيوش أكثر بمقدار');
tz_def('TROOPS_MAKE_FASTER', 'يجعل تدريب الجيوش أسرع بمقدار');
tz_def('TROOPS_MAKE_SLOWEST', 'يجعل تدريب الجيوش أبطأ بمقدار');
tz_def('YOU_CONSTRUCT', 'يمكنك بناء ');
tz_def('CRANNY_INCREASED', 'تزيد سعة المخبأ بمقدار');
tz_def('CRANNY_DECRESE', 'تنقص سعة المخبأ بمقدار');
tz_def('WW_BUILDING_PLAN', 'يمكنك بناء عجيبة الدنيا');
tz_def('NO_WW', 'لا توجد عجائب دنيا');
tz_def('NO_PREVIOUS_OWNERS', 'لا يوجد مالكون سابقون.');
tz_def('TREASURY_DESC', 'تُحفظ ثروات إمبراطوريتك في الخزانة. يمكن للخزانة تخزين تحفة واحدة فقط في المرة الواحدة.<br>تحتاج خزانة بمستوى 10 لتحفة صغيرة، أو مستوى 20 لتحفة كبيرة');

tz_def('TRADEOFFICE', 'مكتب التجارة');
tz_def('CURRENT_MERCHANT', 'حمولة التاجر الحالية:');
tz_def('MERCHANT_LEVEL', 'حمولة التاجر عند المستوى');
tz_def('TRADEOFFICE_DESC', 'في مكتب التجارة تُحسَّن عربات التجار وتُجهَّز بخيول أقوى. كلما زاد مستواه، زادت قدرة تجارك على الحمل');

tz_def('GREATBARRACKS', 'الثكنة الكبرى');
tz_def('TRAINING_COMMENCE_GREATBARRACKS', 'يمكن بدء التدريب عند اكتمال الثكنة الكبرى.');
tz_def('GREATBARRACKS_DESC', 'تتيح لك الثكنة الكبرى بناء ثكنة ثانية في نفس القرية، لكن الجيوش تكلف 3 أضعاف السعر الأصلي.<br>مع الثكنة العادية، يمكنك تدريب جيوشك ضعف السرعة في قرية واحدة');

tz_def('GREATSTABLE', 'الإسطبل الكبير');
tz_def('TRAINING_COMMENCE_GREATSTABLE', 'يمكن بدء التدريب عند اكتمال الإسطبل الكبير.');
tz_def('GREATSTABLE_DESC', 'يتيح لك الإسطبل الكبير بناء إسطبل ثانٍ في نفس القرية، لكن الجيوش تكلف 3 أضعاف السعر الأصلي.<br>مع الإسطبل العادي، يمكنك تدريب جيوشك ضعف السرعة في قرية واحدة');

tz_def('CITYWALL', 'سور المدينة');
tz_def('DEFENCE_NOW', 'مكافأة الدفاع الآن:');
tz_def('DEFENCE_LEVEL', 'مكافأة الدفاع عند المستوى');
tz_def('CITYWALL_DESC', 'يمنح جيوشك مكافأة دفاعية (((1.03 ^ المستوى) * 100)% + 10) نقطة دفاع لكل مستوى إلى القيمة الدفاعية الأساسية للقرية. كلما ارتفع مستوى السور زادت مكافأة الدفاع لجيوشك.<br>خاص بقبيلة: الرومان فقط');

tz_def('EARTHWALL', 'السور الترابي');
tz_def('EARTHWALL_DESC', 'يمنح جيوشك مكافأة دفاعية (((1.02 ^ المستوى) * 100)% + 6) نقطة دفاع لكل مستوى إلى القيمة الدفاعية الأساسية للقرية. السور الترابي بمستوى أعلى يمنح جيوشك مكافأة دفاع أعلى.<br>خاص بقبيلة: التوتون فقط');

tz_def('PALISADE', 'السياج الخشبي');
tz_def('PALISADE_DESC', 'يمنح جيوشك مكافأة دفاعية (((1.025 ^ المستوى) * 100)% + 8) نقطة دفاع لكل مستوى إلى القيمة الدفاعية الأساسية للقرية. السياج بمستوى أعلى يمنح جيوشك مكافأة دفاع أعلى.<br>خاص بقبيلة: الغال فقط');

tz_def('STONEMASON', 'نُزل الحجّار');
tz_def('CURRENT_STABILITY', 'مكافأة المتانة الحالية:');
tz_def('STABILITY_LEVEL', 'مكافأة المتانة عند المستوى');
tz_def('STONEMASON_DESC', 'الحجّار خبير في نحت الحجر. كلما زاد مستوى نُزل الحجّار، زادت متانة مباني قريتك. كل مستوى يزيد المتانة بنسبة 10% حتى أقصى متانة 200% لمبانيك.<br>يمكن بناء هذا المبنى فقط في عاصمة الحساب');

tz_def('BREWERY', 'المخمرة');
tz_def('CURRENT_BONUS', 'المكافأة الحالية:');
tz_def('WATERWORKS_HINT', '(معزَّزة بمرافق المياه)');
tz_def('WATERWORKS_AFFECTED', 'الواحات المضمومة تستفيد من هذه المكافأة.');
tz_def('OASIS_EFFECTIVE_BONUS', 'مكافأة الواحة الفعلية:');
tz_def('BONUS_LEVEL', 'المكافأة عند المستوى');
tz_def('BREWERY_DESC', 'يُخمَّر هنا شراب المياد اللذيذ. تجعل المشروبات جنودك أكثر شجاعة وقوة عند مهاجمة الآخرين (1% لكل مستوى من المخمرة). للأسف تنخفض قوة إقناع القادة بنسبة 50% ولا يمكن للمنجنيقات إلا إصابة أهداف عشوائية. يمكن بناؤها في العاصمة فقط، لكنها تؤثر على كل قراك. يستمر مهرجان الشراب دائمًا 72 ساعة.<br>خاص بقبيلة: التوتون فقط');
tz_def('MEAD_FESTIVAL', 'مهرجان الشراب');
tz_def('MEAD_FESTIVAL_IN_PROGRESS', 'مهرجان الشراب<br>قيد التنفيذ');
tz_def('MEAD_FESTIVAL_COMMENCE_BREWERY', 'يمكن بدء مهرجان الشراب بمجرد اكتمال المخمرة.');

tz_def('TRAPPER', 'الفخّاخ');
tz_def('CURRENT_TRAPS', 'الحد الأقصى الحالي للفخاخ القابلة للتدريب:');
tz_def('TRAPS_LEVEL', 'الحد الأقصى للفخاخ عند المستوى');
tz_def('TRAPS', 'الفخاخ');
tz_def('TRAP', 'فخ');
tz_def('CURRENT_HAVE', 'تملك حاليًا');
tz_def('WHICH_OCCUPIED', 'منها مشغولة.');
tz_def('TRAINING_COMMENCE_TRAPPER', 'يمكن بدء التدريب عند اكتمال الفخّاخ.');
tz_def('TRAPPER_DESC', 'يحمي الفخّاخ قريتك بفخاخ مموهة جيدًا. هذا يعني أن الأعداء غير الحذرين يمكن حبسهم ولن يستطيعوا إيذاء قريتك بعد الآن.<br>لا يمكن تحرير الجيوش المحبوسة بغارة. إذا حرر مالك الفخاخ الأسرى، تُصلَح كل الفخاخ تلقائيًا.<br>خاص بقبيلة: الغال فقط');

tz_def("HEROSMANSION", "منزل البطل");
tz_def('HERO_READY', 'سيكون البطل جاهزًا خلال ');
tz_def('NAME_CHANGED', 'تم تغيير اسم البطل');
tz_def('NOT_UNITS', 'وحدات غير متاحة');
tz_def('NOT', 'ليس ');
tz_def('TRAIN_HERO', 'تدريب بطل جديد');
tz_def('REVIVE', 'إحياء');
tz_def('OASES', 'الواحات');
tz_def('DELETE', 'حذف');
tz_def('RESOURCES', 'الموارد');
tz_def('OFFENCE', 'الهجوم');
tz_def('DEFENCE', 'الدفاع');
tz_def('OFF_BONUS', 'مكافأة الهجوم');
tz_def('DEF_BONUS', 'مكافأة الدفاع');
tz_def('REGENERATION', 'التجدد');
tz_def('DAY', 'يوم');
tz_def('EXPERIENCE', 'الخبرة');
tz_def('YOU_CAN', 'يمكنك ');
tz_def('RESET', 'إعادة تعيين');
tz_def('YOUR_POINT_UNTIL', ' نقاطك حتى تصبح بمستوى ');
tz_def('OR_LOWER', ' أو أقل!');
tz_def('YOUR_HERO_HAS', 'يملك بطلك ');
tz_def('OF_HIT_POINTS', 'من نقاط حياته');
tz_def('ERROR_NAME_SHORT', 'خطأ: الاسم قصير جدًا');
tz_def('HEROSMANSION_DESC', 'منزل البطل هو بيت بطلك المجيد.<br>عند مستويات المبنى 10 و15 و20، يمكنك استخدام بطلك لضم واحة غير مأهولة لقريتك، واحدة عند كل من هذه المستويات على التوالي. حسب الواحة، ستحصل على زيادة إنتاج لنوع معين من الموارد (أو حتى موردين من بعض الواحات)');

tz_def('GREATWAREHOUSE', 'المخزن الكبير');
tz_def('GREATWAREHOUSE_DESC', 'سعة المخزن الكبير 3 أضعاف المخزن العادي.<br>لا يمكن بناء هذا المبنى إلا في قرى عجيبة الدنيا أو بتحفة تترية خاصة');

tz_def('GREATGRANARY', 'الصومعة الكبرى');
tz_def('GREATGRANARY_DESC', 'سعة الصومعة الكبرى 3 أضعاف الصومعة العادية.<br>لا يمكن بناء هذا المبنى إلا في قرى عجيبة الدنيا أو بتحفة تترية خاصة');

tz_def('WONDER', 'عجيبة الدنيا');
tz_def('WORLD_WONDER', 'عجيبة الدنيا');
tz_def('WONDER_DESC', 'عجيبة الدنيا (تُعرف أيضًا اختصارًا WW) مذهلة كما يبدو اسمها. كل مستوى يكلف كمًا هائلاً من الموارد. يكاد يكون مستحيلاً على لاعب واحد بناء عجيبة دنيا بمفرده. السبب أنك لا تحتاج فقط لموارد ضخمة، بل أيضًا جيوش لحماية مبناك الثمين.<br>لبناء عجيبة الدنيا تحتاج مخططًا للبناء القديم. يمكنك الحصول عليه بمهاجمة قرية تترية ببطلك. تحتاج خزانة فارغة بمستوى 10 وأن ينجو بطلك. بهذا المخطط ومستوى مرتفع جدًا من الموارد، يمكنك بدء عجيبة الدنيا.<br>عند وصولها للمستوى 50، ستحتاج شخصًا آخر في تحالفك يملك مخططًا ثانيًا نشطًا. لا يمكنك فعل ذلك بمفردك.<br>عند إتمام عجيبة الدنيا للمستوى 100، تفوز بخادم نوفاتيرا وينتهي عالم اللعبة.<br>عند الانتهاء، ستظهر رسالة تخبر من فاز مع الإحصائيات. لن يمكنك البناء بعد ذلك، لكن يمكنك مراسلة اللاعبين حتى إعادة تشغيل الخادم');
tz_def('WORLD_WONDER_CHANGE_NAME', 'تحتاج عجيبة دنيا بمستوى 1 على الأقل لتتمكن من تغيير اسمها');
tz_def('WORLD_WONDER_NAME', 'اسم عجيبة الدنيا');
tz_def('WORLD_WONDER_NOTCHANGE_NAME', 'لا يمكنك تغيير اسم عجيبة الدنيا بعد المستوى 10');
tz_def('WORLD_WONDER_NAME_CHANGED', 'تم تغيير الاسم');

tz_def('HORSEDRINKING', 'حوض شرب الخيول');
tz_def('HORSEDRINKING_DESC', 'يقلل وقت تدريب الفرسان وإعاشتهم. يمكن بناؤه أيضًا في قرى عجيبة الدنيا الرومانية.<br>يسرّع وقت تدريب وحدات الفرسان بنسبة 1% لكل مستوى ويقلل استهلاك المحاصيل لبعض الوحدات حسب المستوى.<br>خاص بقبيلة: الرومان فقط');

tz_def('GREATWORKSHOP', 'الورشة الكبرى');
tz_def('TRAINING_COMMENCE_GREATWORKSHOP', 'يمكن بدء التدريب عند اكتمال الورشة الكبرى.');
tz_def('GREATWORKSHOP_DESC', 'تتيح لك الورشة الكبرى بناء ورشة ثانية في نفس القرية، لكن المنجنيقات والكباش تكلف 3 أضعاف السعر الأصلي.<br>مع الورشة العادية، يمكنك تدريب جيوشك ضعف السرعة في قرية واحدة');

tz_def('STONEWALL', 'السور الحجري');
tz_def('STONEWALL_DESC', 'يحمي السور الحجري قريتك من هجمات اللاعبين الآخرين. بناؤه الصلب يمنح مكافأة دفاع عالية.<br>خاص بقبيلة: المصريون فقط');
tz_def('MAKESHIFTWALL', 'السور المؤقت');
tz_def('MAKESHIFTWALL_DESC', 'يوفر السور المؤقت حماية أساسية لقريتك. رخيص وسريع البناء، لكنه يمنح مكافأة دفاع صغيرة فقط.<br>خاص بقبيلة: الهون فقط');
tz_def('COMMANDCENTER', 'مركز القيادة');
tz_def('COMMANDCENTER_TRAIN_DESC', 'تحتاج مستوى 10 على الأقل لتدريب المستوطنين والزعماء في مركز القيادة.');
tz_def('COMMANDCENTER_CULTURE_DESC', 'تحدد نقاط الثقافة عدد القرى التي يمكنك تأسيسها أو غزوها.');
tz_def('COMMANDCENTER_LOYALTY_DESC', 'يحمي مركز القيادة القرية من الزعماء الأعداء. الولاء الحالي:');
tz_def('COMMANDCENTER_DESC', 'مركز القيادة هو مقعد السلطة في قرية هونية. يتيح لك تدريب المستوطنين والزعماء والتحكم بتوسعك دون الحاجة لمقر أو قصر.<br>خاص بقبيلة: الهون فقط');
tz_def('WATERWORKS', 'مرافق المياه');
tz_def('WATERWORKS_DESC', 'تزيد مرافق المياه المكافأة الممنوحة من الواحات المضمومة لهذه القرية بنسبة 5% لكل مستوى.<br>خاص بقبيلة: المصريون فقط');
tz_def('HOSPITAL', 'المستشفى');
tz_def('HOSPITAL_DESC', 'يعتني المستشفى بجيوشك الجريحة. يمكن شفاء جزء من الوحدات المفقودة أثناء الدفاع أو الهجوم هنا بدلاً من فقدانها للأبد. المستويات الأعلى تقلل زمن الشفاء.');
tz_def('DEFENSIVEWALL', 'السور الدفاعي');
tz_def('DEFENSIVEWALL_DESC', 'يحمي السور الدفاعي قريتك من هجمات اللاعبين الآخرين. مبني على تقليد التحصينات الإسبرطية العظيمة، يمنح مكافأة دفاع قوية.<br>خاص بقبيلة: الإسبرطيون فقط');
tz_def('BIGHOSPITAL', 'المستشفى الكبير');
tz_def('BIGHOSPITAL_DESC', 'المستشفى الكبير نسخة أكبر من المستشفى العادي، ويتيح شفاء عدد أكبر من جيوشك الجريحة بعد المعركة. المستويات الأعلى تقلل زمن الشفاء.<br>خاص بقبيلة: الإسبرطيون والفايكنج فقط');
tz_def('BARRICADE', 'المتراس');
tz_def('HEALING_TIME_NOW', 'زمن الشفاء الآن');
tz_def('WOUNDED_TROOPS', 'الجيوش الجريحة');
tz_def('NO_WOUNDED', 'لا توجد جيوش جريحة في المستشفى.');
tz_def('HEAL_BUTTON', 'شفاء');
tz_def('HEAL_COST_HINT', 'يكلف الشفاء 50% من تكلفة تدريب الوحدة.');
tz_def('HEALING_IN_PROGRESS', 'الشفاء جارٍ');
tz_def('HEALING_TIME_LEVEL', 'زمن الشفاء عند المستوى');
tz_def('BARRICADE_DESC', 'يحمي المتراس قريتك من هجمات اللاعبين الآخرين. بناؤه الخشبي المتراص يمنح مكافأة دفاع متينة.<br>خاص بقبيلة: الفايكنج فقط');

tz_def('BUILDING_MAX_LEVEL_UNDER', 'المبنى عند أقصى مستوى قيد الإنشاء');
tz_def('BUILDING_BEING_DEMOLISHED', 'المبنى قيد الهدم حاليًا');
tz_def('COSTS_UPGRADING_LEVEL', 'تكلفة</b> الترقية إلى المستوى');
tz_def('WORKERS_ALREADY_WORK', 'العمال يعملون بالفعل.');
tz_def('CONSTRUCTING_MASTER_BUILDER', 'يجري البناء بواسطة كبير البنائين ');
tz_def('COSTS', 'التكلفة');
tz_def('WORKERS_ALREADY_WORK_WAITING', 'العمال يعملون بالفعل. (حلقة انتظار)');
tz_def('ENOUGH_FOOD_EXPAND_CROPLAND', 'غذاء غير كافٍ. وسّع حقول المحاصيل.');
tz_def('UPGRADE_WAREHOUSE', 'ترقية المخزن');
tz_def('UPGRADE_GRANARY', 'ترقية الصومعة');
tz_def('YOUR_CROP_NEGATIVE', 'إنتاج محاصيلك سالب، لن تحصل أبدًا على الموارد المطلوبة.');
tz_def('UPGRADE_LEVEL', 'ترقية إلى المستوى ');
tz_def('WAITING', '(حلقة انتظار)');
tz_def('NEED_WWCONSTRUCTION_PLAN', 'تحتاج مخطط بناء عجيبة الدنيا');
tz_def('NEED_MORE_WWCONSTRUCTION_PLAN', 'تحتاج المزيد من مخططات بناء عجيبة الدنيا');
tz_def('CONSTRUCT_NEW_BUILDING', 'بناء مبنى جديد');
tz_def('SHOWSOON_AVAILABLE_BUILDINGS', 'عرض المباني المتاحة قريبًا');
tz_def('HIDESOON_AVAILABLE_BUILDINGS', 'إخفاء المباني المتاحة قريبًا');

// gold plus
tz_def('GOLD_SHOP', 'متجر الذهب');
tz_def('PACKAGE_A', 'الحزمة أ');
tz_def('PACKAGE_B', 'الحزمة ب');
tz_def('PACKAGE_C', 'الحزمة ج');
tz_def('PACKAGE_D', 'الحزمة د');
tz_def('PACKAGE_E', 'الحزمة هـ');
tz_def('PAYMENT_METHOD', 'طريقة الدفع');
tz_def('PACKAGES_NOT_REFUND', 'لا يمكن استرداد أي من الحزم');

//LANGUAGE NAMES (used in profile / admin dropdowns)
tz_def('TZ_ARABIC', 'العربية');
tz_def('TZ_ENGLISH', 'الإنجليزية');
tz_def('TZ_FRENCH', 'الفرنسية');
tz_def('TZ_ITALIAN', 'الإيطالية');
tz_def('TZ_SPANISH', 'الإسبانية');
tz_def('TZ_ROMANIAN', 'الرومانية');
tz_def('TZ_CHINESE', 'الصينية');
tz_def('TZ_GAME_LANGUAGE', 'لغة اللعبة');
tz_def('TZ_LANGUAGE_SETTINGS', 'إعدادات اللغة');
