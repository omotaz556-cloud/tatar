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

// profile
tz_def('PREFERENCES', 'التفضيلات');
tz_def('VACATION', 'وضع الإجازة');
tz_def('ACTIVATE_VACATION', 'هل تريد تفعيل وضع الإجازة');
tz_def('GRAPH_PACK', 'الحزمة الرسومية');
tz_def('PLAYER_PROFILE', 'الملف الشخصي للاعب');
tz_def('CHANGE_PASSWORD', 'تغيير كلمة المرور');
tz_def('OLD_PASSWORD', 'كلمة المرور القديمة');
tz_def('NEW_PASSWORD', 'كلمة المرور الجديدة');
tz_def('CHANGE_EMAIL', 'تغيير البريد الإلكتروني');
tz_def('CHANGE_EMAIL2', 'الرجاء إدخال بريدك الإلكتروني القديم والجديد. ستصلك رسالة تحقق على كلا البريدين يجب إدخالها هنا');
tz_def('CURRENT_EMAIL', 'البريد الإلكتروني الحالي');
tz_def('OLD_EMAIL', 'البريد الإلكتروني القديم');
tz_def('NEW_EMAIL', 'البريد الإلكتروني الجديد');
tz_def('ACCOUNT_SITTERS', 'مدراء الحساب');
tz_def('ACCOUNT_SITTERS2', 'يمكن لمدير الحساب الدخول إلى حسابك باستخدام اسمك وكلمة مروره الخاصة. يمكنك إضافة مديرين اثنين كحد أقصى');
tz_def('SITTER_NAME', 'اسم مدير الحساب');
tz_def('NO_SITTERS', 'ليس لديك مدراء حساب');
tz_def('RM_SITTER', 'إزالة مدير الحساب');
tz_def('YOU_ARE_SITTER', 'تمت إضافتك كمدير حساب في الحسابات التالية. يمكنك إلغاء ذلك بالنقر على علامة X الحمراء');
tz_def('DELETE_ACCOUNT', 'حذف الحساب');
tz_def('DELETE_ACCOUNT2', 'يمكنك حذف حسابك من هنا. بعد بدء عملية الحذف ستستغرق ثلاثة أيام لإتمامها. يمكنك إلغاء العملية خلال أول 24 ساعة');
tz_def('YES', 'نعم');
tz_def('NO', 'لا');
tz_def('CONFIRM_W_PASS', 'التأكيد بكلمة المرور');
tz_def('MEDALS', 'الأوسمة');
tz_def('PLAYER_HAS', 'لدى هذا اللاعب'); // bird 1
tz_def('HOURS_OF_BG_PROT', 'ساعات متبقية من حماية المبتدئين'); // bird 1
tz_def('PLAYER_WAS_REG_ON', 'سجّل هذا اللاعب حسابه بتاريخ'); // bird 2
tz_def('NATARS_ACC', 'حساب رسمي للتتار'); // natars
tz_def('WW_V_M', 'قرية عجيبة الدنيا الرسمية'); // WW Village
tz_def('ROMAN_T_M', 'الرومان: بفضل مستواهم العالي من التطور الاجتماعي والتقني، يُعد الرومان أساتذة في البناء وتنسيقه. كما أن قواتهم من نخبة قوات نوفاتيرا. متوازنون جدًا ومفيدون في الهجوم والدفاع'); // roman tribe medal
tz_def('TEUTON_T_M', 'التوتون: أكثر القبائل عدوانية. قواتهم مشهورة ومخيفة لغضبها وجنونها أثناء الهجوم. يتحركون كقطيع نهب لا يخشى الموت'); // teuton tribe medal
tz_def('GAUL_T_M', 'الغال: أكثر القبائل الثلاث سلمًا في نوفاتيرا. قواتهم مدربة على دفاع ممتاز، لكن قدرتها الهجومية لا تزال تنافس القبيلتين الأخريين. الغال فرسان بالفطرة وخيولهم مشهورة بسرعتها، ما يمكّن فرسانهم من ضرب العدو في أضعف نقاطه والتعامل معه بسرعة'); // gaul tribe medal
tz_def('ADMIN_M', 'مسؤول الخادم الرسمي');
tz_def('MH_M', 'صياد المتعددين العالمي الرسمي للخادم');
tz_def('MH_M2', 'صياد المتعددين هو منصب رسمي في نوفاتيرا يُستخدم أساسًا لفرض قواعد نوفاتيرا داخل الخادم. يستخدم جميع صيادي المتعددين حسابًا باسم Multihunter وقريته الوحيدة تقع في (0|0). لا يجوز لصياد المتعددين اللعب على الخادم الذي يشغل فيه هذا المنصب، لكن يمكنه اللعب بنشاط على خوادم أخرى');
tz_def('NATURE_M2', 'قوات الطبيعة هي الحيوانات التي تعيش في الواحات غير المأهولة. يمكنك استخدام محاكي القتال لمعرفة ما إذا كانت لديك قوات كافية لهزيمة حيوانات الواحة التي تريد غزوها، لكن تذكّر أنه يمكنك فقط نهب الواحات. ضع في اعتبارك أن جميع الحيوانات الأعلى من الدب يمكنها قتل أقوى قوة معاصرة من نوفاتيرا في قتال فردي');
tz_def('TASKMASTER_M', 'حساب مدير المهام');
tz_def('VETERAN_P', 'لاعب مخضرم');
tz_def('VETERAN_3_M', 'وسام يُمنح للعب 3 سنوات في نوفاتيرا');
tz_def('VETERAN_5_M', 'وسام يُمنح للعب 5 سنوات في نوفاتيرا');
tz_def('VETERAN_10_M', 'وسام يُمنح للعب 10 سنوات في نوفاتيرا');
tz_def('ATT_W_M', 'مهاجمو الأسبوع');
tz_def('DEF_W_M', 'مدافعو الأسبوع');
tz_def('POP_W_M', 'متسلقو السكان للأسبوع');
tz_def('ROB_W_M', 'ناهبو الأسبوع');
tz_def('CLIMB_W_M', 'متسلقو الترتيب للأسبوع');
tz_def('ATT_DEF_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 مهاجمين ومدافعين للأسبوع');
tz_def('ATT_3_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 3 مهاجمين للأسبوع');
tz_def('DEF_3_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 3 مدافعين للأسبوع');
tz_def('POP_3_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 3 متسلقي سكان للأسبوع');
tz_def('ROB_3_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 3 ناهبين للأسبوع');
tz_def('CLIMB_3_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 3 متسلقي ترتيب للأسبوع');
tz_def('ATT_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 مهاجمين للأسبوع');
tz_def('DEF_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 مدافعين للأسبوع');
tz_def('POP_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 متسلقي سكان للأسبوع');
tz_def('ROB_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 ناهبين للأسبوع');
tz_def('CLIMB_10_W_M', 'الحصول على هذا الوسام يعني أنك كنت ضمن أفضل 10 متسلقي ترتيب للأسبوع');
tz_def('RECEIVED_IN_W', 'تم الحصول عليه في الأسبوع');
tz_def('POINTS_M', 'النقاط');
tz_def('RANKS', 'الرتب');
tz_def('WEEK', 'الأسبوع');
tz_def('CATEGORY', 'الفئة');
tz_def('RANK', 'الرتبة');
tz_def('BB_CODE', 'كود BB');
tz_def('IN_ROW', 'على التوالي');
tz_def('ADMIN1', 'مسؤول');
tz_def('MULTIH1', 'صياد متعددين');
tz_def('PLAYER_ADMIN', 'هذا اللاعب مسؤول');
tz_def('PLAYER_MH', 'هذا اللاعب صياد متعددين');
tz_def('PLAYER_BANNED', 'هذا اللاعب محظور');
tz_def('PLAYER_VACATION', 'هذا اللاعب في وضع الإجازة');
if(!defined('BANNED')) tz_def('BANNED', 'محظور');
tz_def('GENDER', 'الجنس');
tz_def('GENDER0', 'غير محدد');
tz_def('MALE0', 'ذ');
tz_def('MALE', 'ذكر');
tz_def('FEMALE0', 'أ');
tz_def('FEMALE', 'أنثى');
tz_def('LOCATION', 'الموقع');
tz_def('DIRECT_LINKS', 'روابط مباشرة');
tz_def('NUMBER0', 'لا');
tz_def('LINK_NAME', 'اسم الرابط');
tz_def('LINK_TARGET', 'وجهة الرابط');
tz_def('TZ_LINK_GENERATOR', 'مولّد روابط اللعبة');
tz_def('TZ_LINK_GENERATOR_DESC', 'ينشئ رابطًا حسب نوع المبنى بدلًا من موقع الخانة، فيعمل في أي قرية بغض النظر عن مكان بناء المبنى فيها. انسخ النتيجة أدناه إلى حقل وجهة الرابط.');
tz_def('TZ_TAB_OPTIONAL', 'التبويب (اختياري)');
tz_def('TZ_GENERATED_LINK', 'الرابط المُنشأ');
tz_def('AUTO_COMPL', 'الإكمال التلقائي');
tz_def('AUTO_COMPL2', 'يُستخدم لنقطة التجمع والسوق');
tz_def('OWN_VILLAGES', 'قراك الخاصة');
tz_def('VILLAGES_NEAR', 'قرى المحيط');
tz_def('VILLAGES_ALLI_PLAYERS', 'قرى لاعبي التحالف');
tz_def('REPORT_FILTER', 'فلتر التقارير');
tz_def('NO_REPORTS_TO_OWN', 'لا توجد تقارير لتحويلات إلى قراك الخاصة');
tz_def('NO_REPORTS_TO_OTH', 'لا توجد تقارير لتحويلات إلى قرى أخرى');
tz_def('NO_REPORTS_FROM_OTH', 'لا توجد تقارير لتحويلات من قرى أخرى');
tz_def('CHANGE_PROFILE', 'تعديل الملف الشخصي');
tz_def('WRITE_MESSAGE', 'كتابة رسالة');
tz_def('REPORT_PLAYER', 'الإبلاغ عن اللاعب');
tz_def('ARTEFACT1', 'قطعة أثرية');
tz_def('WoW1', 'عجيبة الدنيا');
tz_def('VILLAGE_NAME', 'اسم القرية');
tz_def('BDAY', 'عيد الميلاد');
tz_def('CONDITIONS', 'الشروط');
tz_def('TIME_PREF', 'تفضيلات الوقت');
tz_def('TIME_ZONES_DESC', 'من هنا يمكنك تغيير الوقت المعروض في نوفاتيرا ليطابق منطقتك الزمنية');
tz_def('TIME_ZONE_L1', 'أوروبا');
tz_def('TIME_ZONE_L2', 'المملكة المتحدة');
tz_def('TIME_ZONE_L3', 'تركيا');
tz_def('TIME_ZONE_L4', 'آسيا/كولكاتا');
tz_def('TIME_ZONE_L5', 'آسيا/بانكوك');
tz_def('TIME_ZONE_L6', 'أمريكا/نيويورك');
tz_def('TIME_ZONE_L7', 'أمريكا/شيكاغو');
tz_def('TIME_ZONE_L8', 'نيوزيلندا');
tz_def('MONTH1', 'يناير');
tz_def('MONTH2', 'فبراير');
tz_def('MONTH3', 'مارس');
tz_def('MONTH4', 'أبريل');
tz_def('MONTH5', 'مايو');
tz_def('MONTH6', 'يونيو');
tz_def('MONTH7', 'يوليو');
tz_def('MONTH8', 'أغسطس');
tz_def('MONTH9', 'سبتمبر');
tz_def('MONTH10', 'أكتوبر');
tz_def('MONTH11', 'نوفمبر');
tz_def('MONTH12', 'ديسمبر');

//artefact
tz_def('ARCHITECTS_DESC', 'جميع المباني ضمن نطاق التأثير تصبح أقوى. هذا يعني أنك ستحتاج مزيدًا من المنجنيقات لإلحاق الضرر بالمباني المحمية بقوة هذه القطعة الأثرية.');
tz_def('ARCHITECTS_SMALL', 'سر المعماري الصغير');
tz_def('ARCHITECTS_SMALLVILLAGE', 'إزميل الألماس');
tz_def('ARCHITECTS_LARGE', 'سر المعماري العظيم');
tz_def('ARCHITECTS_LARGEVILLAGE', 'مطرقة الرخام العملاقة');
tz_def('ARCHITECTS_UNIQUE', 'سر المعماري الفريد');
tz_def('ARCHITECTS_UNIQUEVILLAGE', 'مخطوطات هيمون');
tz_def('HASTE_DESC', 'جميع القوات ضمن نطاق التأثير تتحرك بسرعة أكبر.');
tz_def('HASTE_SMALL', 'حذاء العملاق الصغير');
tz_def('HASTE_SMALLVILLAGE', 'حدوة الأوبال');
tz_def('HASTE_LARGE', 'حذاء العملاق الكبير');
tz_def('HASTE_LARGEVILLAGE', 'العربة الذهبية');
tz_def('HASTE_UNIQUE', 'حذاء العملاق الفريد');
tz_def('HASTE_UNIQUEVILLAGE', 'صنادل فيديبيدس');
tz_def('EYESIGHT_DESC', 'جميع الجواسيس (الكشافة، المستطلعون، وفرسان الإكويتس) تزداد قدرتهم على التجسس. بالإضافة إلى ذلك، تتيح لك جميع نسخ هذه القطعة الأثرية رؤية نوع القوات القادمة دون معرفة عددها.');
tz_def('EYESIGHT_SMALL', 'عين النسر الصغيرة');
tz_def('EYESIGHT_SMALLVILLAGE', 'حكاية الفأر');
tz_def('EYESIGHT_LARGE', 'عين النسر الكبيرة');
tz_def('EYESIGHT_LARGEVILLAGE', 'رسالة الجنرال');
tz_def('EYESIGHT_UNIQUE', 'عين النسر الفريدة');
tz_def('EYESIGHT_UNIQUEVILLAGE', 'يوميات صن تزو');
tz_def('DIET_DESC', 'جميع القوات ضمن نطاق القطعة الأثرية تستهلك كمية أقل من القمح، ما يتيح الحفاظ على جيش أكبر.');
tz_def('DIET_SMALL', 'تحكم غذائي طفيف');
tz_def('DIET_SMALLVILLAGE', 'الصينية الفضية');
tz_def('DIET_LARGE', 'تحكم غذائي كبير');
tz_def('DIET_LARGEVILLAGE', 'قوس الصيد المقدس');
tz_def('DIET_UNIQUE', 'تحكم غذائي فريد');
tz_def('DIET_UNIQUEVILLAGE', 'كأس الملك آرثر');
tz_def('ACADEMIC_DESC', 'تُبنى القوات بنسبة أسرع معينة ضمن نطاق القطعة الأثرية.');
tz_def('ACADEMIC_SMALL', 'موهبة المدرّب الطفيفة');
tz_def('ACADEMIC_SMALLVILLAGE', 'قسم الجندي المكتوب');
tz_def('ACADEMIC_LARGE', 'موهبة المدرّب العظيمة');
tz_def('ACADEMIC_LARGEVILLAGE', 'إعلان الحرب');
tz_def('ACADEMIC_UNIQUE', 'موهبة المدرّب الفريدة');
tz_def('ACADEMIC_UNIQUEVILLAGE', 'مذكرات الإسكندر الأكبر');
tz_def('STORAGE_DESC', 'بمخطط البناء هذا يمكنك بناء المخزن العظيم أو الصومعة العظيمة في القرية التي تحوي القطعة الأثرية، أو في الحساب كاملاً حسب نوع القطعة. ما دمت تملك تلك القطعة الأثرية يمكنك بناء وتوسيع هذه المباني.');
tz_def('STORAGE_SMALL', 'مخطط تخزين طفيف');
tz_def('STORAGE_SMALLVILLAGE', 'رسم البنّاء');
tz_def('STORAGE_LARGE', 'مخطط تخزين عظيم');
tz_def('STORAGE_LARGEVILLAGE', 'لوح بابلي');
tz_def('CONFUSION_DESC', 'تزداد سعة المخبأ بمقدار معين لكل نوع من القطع الأثرية. يمكن للمنجنيقات أن تصيب فقط أهدافًا عشوائية في القرى الواقعة ضمن نطاق قوة هذه القطعة الأثرية. الاستثناءات هي عجيبة الدنيا التي يمكن استهدافها دائمًا، وغرفة الكنوز التي يمكن استهدافها دائمًا إلا مع القطعة الأثرية الفريدة. عند استهداف حقل موارد يمكن إصابة حقول موارد عشوائية فقط، وعند استهداف مبنى يمكن إصابة مبانٍ عشوائية فقط.');
tz_def('CONFUSION_SMALL', 'ارتباك الخصم الطفيف');
tz_def('CONFUSION_SMALLVILLAGE', 'خريطة الكهوف المخفية');
tz_def('CONFUSION_LARGE', 'ارتباك الخصم الكبير');
tz_def('CONFUSION_LARGEVILLAGE', 'الحقيبة بلا قاع');
tz_def('CONFUSION_UNIQUE', 'ارتباك الخصم الفريد');
tz_def('CONFUSION_UNIQUEVILLAGE', 'حصان طروادة');
tz_def('FOOL_DESC', 'كل 24 ساعة تحصل على تأثير عشوائي، إما مكافأة أو عقوبة (كل الاحتمالات ممكنة باستثناء مخططات المخزن العظيم، الصومعة العظيمة، وعجيبة الدنيا). يتغير التأثير والنطاق كل 24 ساعة. القطعة الأثرية الفريدة تأخذ دائمًا مكافآت إيجابية.');
tz_def('FOOL_SMALL', 'قطعة الأحمق الصغيرة');
tz_def('FOOL_SMALLVILLAGE', 'قلادة الأذى');
tz_def('FOOL_UNIQUE', 'قطعة الأحمق الفريدة');
tz_def('FOOL_UNIQUEVILLAGE', 'المخطوطة المحرّمة');
tz_def('WWVILLAGE', 'قرية عجيبة الدنيا');
tz_def('ARTEFACT', '<h1><b>قطع التتار الأثرية</b></h1>

تتردد همسات وشائعات عبر القرى، تحكي أساطير لا يرويها إلا أمهر الرواة. إنها تتحدث عن التتار، أشد محاربي عالم نوفاتيرا رهبة. قتلهم حلم كل بطل وغاية كل مقاتل. لا أحد يعرف كيف نال التتار هذه القوة، ولا كيف أصبح محاربوهم بهذه القسوة. عزمًا منهم على اكتشاف مصدر قوة التتار، أرسل المقاتلون مجموعة من الجواسيس النخبة للتجسس عليهم. لم تمضِ ساعات طويلة حتى عادوا بأعين مليئة بالخوف يوازنون بين نظريات خيالية: يبدو أن قوتهم الخارقة تأتي من أغراض غامضة يسمونها القطع الأثرية، سرقوها من أجدادنا. حاول أن تسلبهم إياها، وستتمكن من التحكم بقوتها.

<img src="/img/x.gif" class="ArtefactsAnnouncement">

حان وقت المطالبة بالقطع الأثرية. تعاون مع تحالفك وأرسل محاربيك للحصول على هذه الأغراض المنشودة. لكن التتار لن يتخلوا عنها دون قتال... ولا أعداؤك أيضًا. إذا نجحت في استرداد القطع الأثرية وصددت الأعداء، ستتمكن من جني المكافآت. ستصبح مبانيك أقوى بشكل مذهل، وستتحرك قواتك أسرع وتستهلك طعامًا أقل. استولِ على القطع الأثرية، وحقق المجد لإمبراطوريتك وكن أسطورة جديدة لأتباعك.

لسرقة إحدى القطع الأثرية، يجب أن يحدث ما يلي:

1. يجب أن تهاجم القرية (وليس نهبًا!)
2. الفوز بالهجوم
3. تدمير الخزينة
4. يجب أن تكون هناك خزينة فارغة من المستوى 10 للقطع الأثرية الصغيرة، والمستوى 20 للقطع الأثرية الكبيرة، في القرية التي انطلق منها الهجوم
5. وجود بطل ضمن الهجوم

إذا لم يتحقق ذلك، فإن الهجوم التالي على تلك القرية الذي يفوز ببطل وخزينة فارغة سيأخذ القطعة الأثرية.

لبناء عجيبة الدنيا، يجب أن تملك المخطط بنفسك (أنت = مالك قرية عجيبة الدنيا) من المستوى 0 إلى 50، ومن 51 إلى 100 تحتاج مخططًا إضافيًا داخل تحالفك! امتلاك مخططين في حساب قرية عجيبة الدنيا نفسها لن يجدي نفعًا!

مخططات البناء قابلة للغزو فور ظهورها في الخادم.

سيظهر عد تنازلي داخل اللعبة يوضح الوقت الدقيق للإصدار، قبل 5 أيام من الإطلاق. ');

//WW Village Release Message
tz_def('WWVILLAGEMSG', '<h1><b>قرى عجائب الدنيا</b></h1>

مرت أيام لا تُحصى منذ المعارك الأولى فوق أسوار القرى الملعونة التابعة للتتار الرهيبين، وقاتلت جيوش عديدة من الأحرار والإمبراطورية التتارية وماتت أمام أسوار المعاقل العديدة التي حكم منها التتار كل الخليقة يومًا ما. والآن بعد أن هدأ الغبار وحلّ هدوء نسبي، بدأت الجيوش تحصي خسائرها وتجمع موتاها، ورائحة القتال لا تزال عالقة في هواء الليل، رائحة مجزرة لا تُنسى في اتساعها ووحشيتها، لكنها ستُصبح قريبًا صغيرة أمام ما هو آت. كانت أعظم جيوش الأحرار والتتار الرهيبين تحتشد لهجوم متجدد آخر على المعاقل السابقة المرغوبة للإمبراطورية التتارية.
سرعان ما وصل الكشافة يحملون أخبار مشهد مهيب وتذكيرًا مرعبًا: رُصد جيش رهيب بحجم لا يُتصور يحتشد عند نهاية العالم، عاصمة التتار، قوة عظيمة لا تُقهر بحيث يخنق الغبار المتصاعد من مسيرتها كل ضوء، قوة وحشية لا ترحم تسحق كل أمل. أدرك الأحرار أنهم بحاجة للسباق الآن، سباق مع الزمن ومع حشود الإمبراطورية التتارية التي لا تنتهي، لإقامة عجيبة من عجائب الدنيا تعيد السلام للعالم وتقضي على تهديد التتار.
لكن إقامة عجيبة عظيمة كهذه لن تكون مهمة سهلة، فالأمر يتطلب مخططات بناء أُنشئت في الماضي البعيد، مخططات من طبيعة غامضة لدرجة أن أحكم الحكماء لم يعرفوا محتواها أو مكانها.
جاب عشرات الآلاف من الكشافة كل أرجاء الوجود بحثًا عبثًا عن هذه المخططات الغامضة، بحثوا في كل مكان إلا عاصمة التتار الرهيبة، ولم يجدوها. أما اليوم، فقد عادوا بأخبار سارة، عادوا حاملين مواقع المخططات، التي أخفتها جيوش التتار داخل معاقل سرية بُنيت لتكون بعيدة عن أعين البشر.
والآن تبدأ المرحلة الأخيرة، حين تتصادم أعظم جيوش الأحرار والتتار عبر العالم من أجل مصير كل ما يقع تحت السماء. هذه هي الحرب التي ستتردد أصداؤها عبر العصور، هذه حربك، وهنا ستنقش اسمك في التاريخ، هنا ستصبح أسطورة.

<img src="/img/x.gif" class="WWVillagesAnnouncement" title="'.WWVILLAGE.'" alt="'.WWVILLAGE.'">

لغزو إحدى القرى، يجب أن يحدث ما يلي:

1. يجب أن تهاجم القرية (وليس نهبًا!)
2. الفوز بالهجوم
3. تدمير مبنى الإقامة
4. يجب خفض الولاء إلى 0 باستخدام: أصحاب الشيوخ، القائد، رئيس القبيلة
5. يجب أن تملك نقاط ثقافة كافية لغزو القرية

إذا لم يتحقق ذلك، فإن الهجوم التالي على تلك القرية الذي يفوز بأصحاب الشيوخ أو القائد أو رئيس القبيلة وخانات فارغة في الإقامة/القصر سيأخذ القرية.

لبناء عجيبة الدنيا، يجب أن تملك المخطط بنفسك (أنت = مالك قرية عجيبة الدنيا) من المستوى 0 إلى 50، ومن 51 إلى 100 تحتاج مخططًا إضافيًا داخل تحالفك! امتلاك مخططين في حساب قرية عجيبة الدنيا نفسها لن يجدي نفعًا!

مخططات البناء قابلة للغزو فور ظهورها في الخادم.

سيظهر عد تنازلي داخل اللعبة يوضح الوقت الدقيق للإصدار، '.(5 / SPEED).' أيام قبل الإطلاق.');

//Building Plans
tz_def('WILL_SPAWN_IN', 'سيظهر خلال');
tz_def('PLAN', 'مخطط بناء قديم');
tz_def('PLANVILLAGE', 'مخطط بناء عجيبة الدنيا');
tz_def('PLAN_DESC', 'بهذا المخطط القديم ستتمكن من بناء عجيبة الدنيا حتى المستوى 50. للبناء أكثر من ذلك، يجب أن يملك تحالفك مخططين على الأقل.');
tz_def('PLAN_INFO', '<h1><b>مخططات بناء عجيبة الدنيا</b></h1>


منذ أقمار عديدة، فوجئت قبائل نوفاتيرا بعودة التتار غير المتوقعة. كانت هذه القبيلة، التي تفوقت منذ الأزل على الجميع في الحكمة والقوة والمجد، على وشك إزعاج الأحرار من جديد. لذا بذلوا كل جهدهم لتحضير حرب أخيرة ضد التتار والقضاء عليهم إلى الأبد. اعتقد كثيرون أن ما يُسمى "عجائب الدنيا"، وهي بناء أسطوري، هو الحل الوحيد. قيل إن من يُتمّه سيصبح لا يُقهر، وفي النهاية يصبح البُناة حكام وغزاة كل نوفاتيرا المعروفة.

لكن قيل أيضًا إن الأمر يتطلب مخططات بناء لإقامة مثل هذا الصرح. ولهذا، ابتكر المعماريون خططًا ذكية لتخزينها بأمان. وبعد فترة، بدأت تظهر مبانٍ شبيهة بالمعابد في كثير من المدن والحواضر - غرف الكنوز (الخزائن).

للأسف، لم يكن أحد - ولا حتى أحكم الحكماء - يعرف أين يجد هذه المخططات. وكلما حاول الناس تحديد مكانها بجهد أكبر، بدت وكأنها مجرد أساطير.

أما اليوم، فسيُكشف هذا السر الأخير. لن تذهب معاناة الماضي ومساعيه هباءً، إذ نجح اليوم كشافة عدة قبائل في الحصول على مواقع مخططات البناء. محروسة جيدًا من قبل التتار، تكمن مخفية في واحات عديدة منتشرة في أرجاء نوفاتيرا. لن يتمكن من تأمين مثل هذا المخطط وإحضاره سالمًا إلى الديار سوى أشجع الأبطال، ليبدأ البناء.

في النهاية، سنرى ما إذا كانت قبائل نوفاتيرا الحرة قادرة مجددًا على التفوق بالحيلة على التتار والقضاء عليهم نهائيًا. لكن لا تكن غافلًا لتظن أن التتار سيتركونها دون قتال!

<img src="/img/x.gif" class="WWBuildingPlansAnnouncement" title="'.PLAN.'" alt="'.PLAN.'">

لسرقة مجموعة من مخططات البناء من التتار، يجب أن يحدث ما يلي:
- يجب أن تهاجم القرية (وليس نهبًا!)
- يجب أن تفوز بالهجوم
- يجب أن تدمّر غرفة الكنوز (الخزينة)
- يجب أن يكون بطلك ضمن ذلك الهجوم، فهو الوحيد القادر على حمل مخططات البناء
- يجب أن تكون هناك غرفة كنوز فارغة من المستوى 10 في القرية التي انطلق منها الهجوم
ملاحظة: إذا لم تتحقق الشروط أعلاه أثناء الهجوم، فإن الهجوم التالي على تلك القرية والذي يستوفي الشروط سيأخذ مخططات البناء.



لبناء غرفة كنوز (خزينة)، ستحتاج إلى مبنى رئيسي من المستوى 10 ويجب ألا تحتوي القرية على عجيبة دنيا.

لبناء عجيبة دنيا، يجب أن تملك مخططات البناء بنفسك (أنت = مالك قرية عجيبة الدنيا) من المستوى 0 إلى 50، ثم من المستوى 51 إلى 100 ستحتاج مجموعة إضافية من مخططات البناء داخل تحالفك! مجموعتان من مخططات البناء في حساب قرية عجيبة الدنيا نفسها لن تُجديا نفعًا!');

//QUEST
tz_def('Q_CONTINUE', 'تابع إلى المهمة التالية.');
tz_def('Q_REWARD', 'مكافأتك:');
tz_def('Q_BUTN', 'إتمام المهمة');
tz_def('Q0', 'مرحبًا بك في ');
tz_def('Q0_DESC', 'أرى أنك أصبحت زعيمًا لهذه القرية الصغيرة. سأكون مستشارك في الأيام القليلة الأولى ولن أفارق جانبك.');
tz_def('Q0_OPT1', 'إلى المهمة الأولى.');
tz_def('Q0_OPT2', 'استكشف بنفسك.');
tz_def('Q0_OPT3', 'لا ألعب المهام.');

tz_def('Q1', 'المهمة 1: الحطّاب');
tz_def('Q1_DESC', 'توجد أربع غابات خضراء حول قريتك. ابنِ منشرة خشب على إحداها. الخشب مورد مهم لمستوطنتنا الجديدة.');
tz_def('Q1_ORDER', 'الأمر:</p>ابنِ منشرة خشب.');
tz_def('Q1_RESP', 'نعم، بهذه الطريقة تحصل على مزيد من الخشب. لقد ساعدتك قليلاً وأتممت الأمر فورًا.');
tz_def('Q1_REWARD', 'اكتملت منشرة الخشب فورًا.');

tz_def('Q2', 'المهمة 2: المحاصيل');
tz_def('Q2_DESC', 'أصبح رعاياك جائعين بعد العمل طوال اليوم. وسّع حقل محاصيل لتحسين إمداد رعاياك. عد إلى هنا بعد اكتمال المبنى.');
tz_def('Q2_ORDER', 'الأمر:</p>وسّع حقل محاصيل واحد.');
tz_def('Q2_RESP', 'ممتاز جدًا. الآن لدى رعاياك ما يكفي من الطعام مجددًا...');
tz_def('Q2_REWARD', 'مكافأتك:</p>يوم واحد من نوفاتيرا');

tz_def('Q3', 'المهمة 3: اسم قريتك');
tz_def('Q3_DESC', 'بما أنك مبدع يمكنك منح قريتك الاسم المثالي.<br><br>انقر على `الملف الشخصي` في القائمة اليسرى ثم اختر `تعديل الملف الشخصي`...');
tz_def('Q3_ORDER', 'الأمر:</p>غيّر اسم قريتك إلى شيء جميل.');
tz_def('Q3_RESP', 'رائع، اسم عظيم لقريتهم. كان يمكن أن يكون اسم قريتي!...');

tz_def('Q4', 'المهمة 4: لاعبون آخرون');
tz_def('Q4_DESC', 'في '.SERVER_NAME.' تلعب جنبًا إلى جنب مع مليارات اللاعبين الآخرين. انقر على `الإحصائيات` في القائمة العلوية للاطلاع على رتبتك وأدخلها هنا.');
tz_def('Q4_ORDER', 'الأمر:</p>ابحث عن رتبتك في الإحصائيات وأدخلها هنا.');
tz_def('Q4_BUTN', 'إتمام المهمة');
tz_def('Q4_RESP', 'بالضبط! هذه رتبتك.');

tz_def('Q5', 'المهمة 5: أمران للبناء');
tz_def('Q5_DESC', 'ابنِ منجم حديد وحفرة طين. من الحديد والطين لا يمكن أن يكون لديك ما يكفي أبدًا.');
tz_def('Q5_ORDER', 'الأمر:</p><ul><li>وسّع منجم حديد واحد.</li><li>وسّع حفرة طين واحدة.</li></ul>');
tz_def('Q5_RESP', 'كما لاحظت، أوامر البناء تستغرق وقتًا طويلاً نسبيًا. سيستمر عالم '.SERVER_NAME.' في الدوران حتى وأنت غير متصل. حتى بعد بضعة أشهر ستجد أشياء جديدة كثيرة لاكتشافها.<br><br>أفضل شيء هو تفقّد قريتك من حين لآخر وإعطاء رعاياك مهام جديدة.');

tz_def('Q6', 'المهمة 6: الرسائل');
tz_def('Q6_DESC', 'يمكنك التحدث مع لاعبين آخرين باستخدام نظام الرسائل. أرسلت لك رسالة. اقرأها وعد إلى هنا.<br><br>ملاحظة: لا تنسَ، على اليسار التقارير، وعلى اليمين الرسائل.');
tz_def('Q6_ORDER', 'الأمر:</p>اقرأ رسالتك الجديدة.');
tz_def('Q6_RESP', 'استلمتها؟ ممتاز جدًا.<br><br>إليك بعض الذهب. بالذهب يمكنك فعل أشياء عديدة، مثل توسيع في القائمة اليسرى.');
tz_def('Q6_RESP1', '-الحساب أو زيادة إنتاج مواردك. للقيام بذلك انقر على ');
tz_def('Q6_RESP2', 'في القائمة اليسرى.');
tz_def('Q6_SUBJECT', 'رسالة من مدير المهام');
tz_def('Q6_MESSAGE', 'نحيطك علمًا بأن مكافأة لطيفة تنتظرك عند مدير المهام.<br><br>ملاحظة: تم إنشاء هذه الرسالة تلقائيًا. لا داعي للرد.');

tz_def('Q7', 'المهمة 7: واحد من كل نوع!');
tz_def('Q7_DESC', 'الآن يجب أن نزيد إنتاج مواردك قليلاً. ابنِ منشرة خشب إضافية، وحفرة طين، ومنجم حديد، وحقل محاصيل إلى المستوى 1.');
tz_def('Q7_ORDER', 'الأمر:</p>وسّع واحدًا إضافيًا من كل حقل مورد إلى المستوى 1.');
tz_def('Q7_RESP', 'ممتاز جدًا، تطور رائع في إنتاج الموارد.');

tz_def('Q8', 'المهمة 8: جيش ضخم!');
tz_def('Q8_DESC', 'لدي الآن مهمة خاصة جدًا لك. أنا جائع. أعطني 200 من المحاصيل!<br><br>في المقابل سأحاول تنظيم جيش ضخم لحماية قريتك.');
tz_def('Q8_ORDER', 'الأمر:</p>أرسل 200 من المحاصيل إلى مدير المهام.');
tz_def('Q8_BUTN', 'إرسال المحاصيل');
tz_def('Q8_NOCROP', 'لا يوجد محاصيل كافية!');

tz_def('Q9', 'المهمة 9: كل شيء إلى المستوى 1.');
tz_def('Q9_DESC', 'في نوفاتيرا يوجد دائمًا ما تفعله! بينما تنتظر وصول الجيش الضخم، يجب أن نزيد إنتاج مواردك قليلاً. وسّع جميع حقول مواردك إلى المستوى 1.');
tz_def('Q9_ORDER', 'الأمر:</p>وسّع جميع حقول الموارد إلى المستوى 1.');
tz_def('Q9_RESP', 'ممتاز جدًا، إنتاج مواردك يزدهر.<br><br>قريبًا يمكننا البدء ببناء المباني في القرية.');

tz_def('Q10', 'المهمة 10: حمامة السلام');
tz_def('Q10_DESC', 'في الأيام الأولى بعد التسجيل تكون محميًا من هجمات زملائك اللاعبين. يمكنك معرفة مدة استمرار هذه الحماية بإضافة الكود <b>[#0]</b> إلى ملفك الشخصي.');
tz_def('Q10_ORDER', 'الأمر:</p>اكتب الكود <b>[#0]</b> في ملفك الشخصي بإضافته إلى أحد حقلي الوصف.');
tz_def('Q10_RESP', 'أحسنت! الآن يمكن للجميع رؤية أي محارب عظيم يقترب من العالم.');
tz_def('Q10_REWARD', 'مكافأتك:</p>يومان من نوفاتيرا');

tz_def('Q11', 'المهمة 11: الجيران!');
tz_def('Q11_DESC', 'من حولك توجد قرى عديدة مختلفة. إحداها تُسمى. ');
tz_def('Q11_DESC1', ' انقر على `الخريطة` في القائمة العلوية وابحث عن تلك القرية. يمكن رؤية اسم قرى جيرانك بتمرير الفأرة فوق أي منها.');
tz_def('Q11_ORDER', 'الأمر:</p>ابحث عن إحداثيات ');
tz_def('Q11_ORDER1', 'وأدخلها هنا.');
tz_def('Q11_RESP', 'بالضبط، هناك ');
tz_def('Q11_RESP1', ' قرية! بقدر ما تصل من موارد إلى هذه القرية. حسنًا، تقريبًا بنفس القدر...');
tz_def('Q11_BUTN', 'إتمام المهمة');

tz_def('Q12', 'المهمة 12: المخبأ');
tz_def('Q12_DESC', 'حان الوقت لبناء مخبأ. عالم '.SERVER_NAME.' خطير.<br><br>يعيش كثير من اللاعبين على سرقة موارد الآخرين. ابنِ مخبأً لإخفاء بعض مواردك عن الأعداء.');
tz_def('Q12_ORDER', 'الأمر:</p>ابنِ مخبأً.');
tz_def('Q12_RESP', 'أحسنت، أصبح من الأصعب على زملائك اللاعبين الأشرار نهب قريتك.<br><br>عند التعرض للهجوم، سيخفي سكان قريتك الموارد في المخبأ من تلقاء أنفسهم.');

tz_def('Q13', 'المهمة 13: إلى اثنين.');
tz_def('Q13_DESC', 'في '.SERVER_NAME.' يوجد دائمًا ما تفعله! وسّع منشرة خشب واحدة، وحفرة طين واحدة، ومنجم حديد واحد، وحقل محاصيل واحد إلى المستوى 2 لكل منها.');
tz_def('Q13_ORDER', 'الأمر:</p>وسّع واحدًا من كل حقل مورد إلى المستوى 2.');
tz_def('Q13_RESP', 'ممتاز جدًا، قريتك تنمو وتزدهر!');

tz_def('Q14', 'المهمة 14: الإرشادات');
tz_def('Q14_DESC', 'في إرشادات اللعبة يمكنك إيجاد نصوص معلومات مختصرة عن مختلف المباني وأنواع الوحدات.<br><br>انقر على `الإرشادات` على اليسار لمعرفة كمية الخشب المطلوبة للثكنة.');
tz_def('Q14_ORDER', 'الأمر:</p>أدخل كمية الخشب التي تكلفها الثكنة');
tz_def('Q14_BUTN', 'إتمام المهمة');
tz_def('Q14_RESP', 'بالضبط! تكلف الثكنة 210 وحدات خشب.');

tz_def('Q15', 'المهمة 15: المبنى الرئيسي');
tz_def('Q15_DESC', 'يحتاج كبار البنائين إلى مبنى رئيسي من المستوى 3 لإقامة مبانٍ مهمة مثل السوق أو الثكنة.');
tz_def('Q15_ORDER', 'الأمر:</p>وسّع مبناك الرئيسي إلى المستوى 3.');
tz_def('Q15_RESP', 'أحسنت. اكتمل المبنى الرئيسي بالمستوى 3.<br><br>بهذه الترقية لن يتمكن كبار البنائين من بناء مزيد من أنواع المباني فحسب، بل سيفعلون ذلك أسرع أيضًا.');

tz_def('Q16', 'المهمة 16: تقدّم!');
tz_def('Q16_DESC', 'ابحث مجددًا عن رتبتك في إحصائيات اللاعبين واستمتع بتقدمك.');
tz_def('Q16_ORDER', 'الأمر:</p>ابحث عن رتبتك في الإحصائيات وأدخلها هنا.');
tz_def('Q16_RESP', 'أحسنت! هذه رتبتك الحالية.');

tz_def('Q17', 'المهمة 17: أسلحة أم عجين');
tz_def('Q17_DESC', 'عليك الآن اتخاذ قرار: إما التجارة بسلام أو أن تصبح محاربًا مرعبًا.<br><br>للسوق تحتاج صومعة، وللثكنة تحتاج نقطة تجمع.');
tz_def('Q17_BUTN', 'اقتصاد');
tz_def('Q17_BUTN1', 'عسكري');

tz_def('Q18', 'المهمة 18: عسكري');
tz_def('Q18_DESC', 'قرار شجاع. لتتمكن من إرسال القوات تحتاج نقطة تجمع.<br><br>يجب بناء نقطة التجمع في موقع بناء محدد. موقع البناء ');
tz_def('Q18_DESC1', '.');
tz_def('Q18_DESC2', ' يقع على يمين المبنى الرئيسي، أسفله قليلاً. موقع البناء نفسه منحنٍ.');
tz_def('Q18_ORDER', 'الأمر:</p>ابنِ نقطة تجمع.');
tz_def('Q18_RESP', 'أُقيمت نقطة تجمعك! خطوة جيدة نحو السيطرة على العالم!');

tz_def('Q19', 'المهمة 19: الثكنة');
tz_def('Q19_DESC', 'الآن لديك مبنى رئيسي من المستوى 3 ونقطة تجمع. هذا يعني أن جميع متطلبات بناء الثكنة قد تحققت.<br><br>يمكنك استخدام الثكنة لتدريب قوات للقتال.');
tz_def('Q19_ORDER', 'الأمر:</p>ابنِ ثكنة.');
tz_def('Q19_RESP', 'أحسنت... اجتمع أفضل المدربين من كل البلاد لتدريب رجالك على أعلى مستوى من مهارات القتال.');

tz_def('Q20', 'المهمة 20: تدريب.');
tz_def('Q20_DESC', 'الآن بعد أن أصبحت لديك ثكنة يمكنك بدء تدريب القوات. درّب اثنين من ');
tz_def('Q20_ORDER', 'يُرجى تدريب 2 من ');
tz_def('Q20_RESP', 'وُضع أساس جيشك المجيد.<br><br>قبل إرسال جيشك للنهب يجب أن تراجع.');
tz_def('Q20_RESP1', 'محاكي القتال');
tz_def('Q20_RESP2', 'لترى كم قوة تحتاج للانتصار على فأر واحد دون خسائر.');

tz_def('Q21', 'المهمة 18: الاقتصاد');
tz_def('Q21_DESC', 'التجارة والاقتصاد كانا اختيارك. أوقات ذهبية تنتظرك بالتأكيد!');
tz_def('Q21_ORDER', 'الأمر:</p>ابنِ صومعة.');
tz_def('Q21_RESP', 'أحسنت! بالصومعة يمكنك تخزين مزيد من القمح.');

tz_def('Q22', 'المهمة 19: المخزن');
tz_def('Q22_DESC', 'ليست المحاصيل وحدها ما يجب حفظه. يمكن أن تُهدر الموارد الأخرى أيضًا إن لم تُخزَّن بشكل صحيح. ابنِ مخزنًا!');
tz_def('Q22_ORDER', 'الأمر:</p>ابنِ مخزنًا.');
tz_def('Q22_RESP', ';أحسنت، اكتمل مخزنك...&rdquo;</i><br>الآن تحققت جميع المتطلبات اللازمة لبناء سوق.');

tz_def('Q23', 'المهمة 20: السوق.');
tz_def('Q23_DESC', ';ابنِ سوقًا لتتمكن من التجارة مع زملائك اللاعبين.');
tz_def('Q23_ORDER', 'الأمر:</p>يُرجى بناء سوق.');
tz_def('Q23_RESP', ';اكتمل السوق. الآن يمكنك تقديم عروضك الخاصة وقبول عروض الآخرين! عند إنشاء عروضك، فكّر في عرض ما يحتاجه اللاعبون الآخرون أكثر لتحقيق ربح أكبر.');

tz_def('Q24', 'المهمة 21: كل شيء إلى المستوى 2.');
tz_def('Q24_DESC', 'الآن يجب أن نزيد إنتاج مواردك قليلاً. ابنِ منشرة خشب إضافية، وحفرة طين، ومنجم حديد، وحقل محاصيل إلى المستوى 1.');
tz_def('Q24_ORDER', 'الأمر:</p>وسّع جميع حقول الموارد إلى المستوى 2.');
tz_def('Q24_RESP', 'تهانينا! قريتك تنمو وتزدهر...');

tz_def('Q28', 'المهمة 22: التحالف.');
tz_def('Q28_DESC', 'العمل الجماعي مهم في نوفاتيرا. اللاعبون الذين يعملون معًا ينظمون أنفسهم في تحالفات. احصل على دعوة من تحالف في منطقتك وانضم إليه. أو يمكنك تأسيس تحالفك الخاص. للقيام بذلك، تحتاج سفارة من المستوى 3.');
tz_def('Q28_ORDER', 'الأمر:</p>انضم إلى تحالف أو أسّس تحالفًا خاصًا بك.');
tz_def('Q28_RESP', 'جيد! أنت الآن في اتحاد يُدعى');
tz_def('Q28_RESP1', '، وأنت عضو في تحالفهم، وكلما تقدمت أسرع...');

tz_def('Q29', 'المهمة 23: المبنى الرئيسي إلى المستوى 5');
tz_def('Q29_DESC', 'لتتمكن من بناء قصر أو مقر إقامة، ستحتاج مبنى رئيسي من المستوى 5.');
tz_def('Q29_ORDER', 'الأمر:</p>رقّي مبناك الرئيسي إلى المستوى 5.');
tz_def('Q29_RESP', 'المبنى الرئيسي الآن بالمستوى 5 ويمكنك بناء قصر أو مقر إقامة...');

tz_def('Q30', 'المهمة 24: الصومعة إلى المستوى 3.');
tz_def('Q30_DESC', 'حتى لا تخسر محاصيلك، يجب أن ترقّي صومعتك.');
tz_def('Q30_ORDER', 'الأمر:</p>رقّي صومعتك إلى المستوى 3.');
tz_def('Q30_RESP', 'الصومعة الآن بالمستوى 3...');

tz_def('Q31', 'المهمة 25: المخزن إلى المستوى 7');
tz_def('Q31_DESC', ' حتى تتأكد من عدم فيضان مواردك، يجب أن ترقّي مخزنك.');
tz_def('Q31_ORDER', 'الأمر:</p>رقّي مخزنك إلى المستوى 7.');
tz_def('Q31_RESP', 'ترقّى المخزن إلى المستوى 7...');

tz_def('Q32', 'المهمة 26: الكل إلى خمسة!');
tz_def('Q32_DESC', 'ستحتاج دائمًا مزيدًا من الموارد. حقول الموارد مكلفة نوعًا ما لكنها تعود بالفائدة دائمًا على المدى الطويل.');
tz_def('Q32_ORDER', 'الأمر:</p>رقّي جميع حقول الموارد إلى المستوى 5.');
tz_def('Q32_RESP', 'جميع الموارد بالمستوى 5، ممتاز جدًا، قريتك تنمو وتزدهر!');

tz_def('Q33', 'المهمة 27: قصر أم مقر إقامة؟');
tz_def('Q33_DESC', 'لتأسيس قرية جديدة، ستحتاج مستوطنين. يمكنك تدريبهم في قصر أو مقر إقامة.');
tz_def('Q33_ORDER', 'الأمر:</p>ابنِ قصرًا أو مقر إقامة إلى المستوى 10.');
tz_def('Q33_RESP', 'وصل إلى المستوى 10، يمكنك الآن تدريب المستوطنين وتأسيس قريتك الثانية. لاحظ النقاط الثقافية...');

tz_def('Q34', 'المهمة 28: 3 مستوطنين.');
tz_def('Q34_DESC', 'لتأسيس قرية جديدة، ستحتاج مستوطنين. يمكن تدريبهم في قصر أو مقر إقامة.');
tz_def('Q34_ORDER', 'الأمر:</p>درّب 3 مستوطنين.');
tz_def('Q34_RESP', 'تم تدريب 3 مستوطنين. لتأسيس قرية جديدة تحتاج على الأقل');
tz_def('Q34_RESP1', 'نقاط ثقافية...');

tz_def('Q35', 'المهمة 29: قرية جديدة.');
tz_def('Q35_DESC', 'توجد الكثير من الخانات الفارغة على الخريطة. ابحث عن واحدة تناسبك وأسّس قرية جديدة');
tz_def('Q35_ORDER', 'الأمر:</p>أسّس قرية جديدة.');
tz_def('Q35_RESP', 'أنا فخور بك! الآن لديك قريتان ولديك كل الإمكانات لبناء إمبراطورية عظيمة. أتمنى لك التوفيق في ذلك.');

tz_def('Q36', ' المهمة 30: ابنِ ');
tz_def('Q36_DESC', 'الآن بعد أن درّبت بعض الجنود، يجب أن تبني ');
tz_def('Q36_DESC1', ' أيضًا. يزيد الدفاع الأساسي وسيحصل جنودك على مكافأة دفاعية.');
tz_def('Q36_ORDER', 'الأمر:</p>ابنِ ');
tz_def('Q36_RESP', 'هذا ما أتحدث عنه. ');
tz_def('Q36_RESP1', ' مفيد جدًا. يزيد دفاع القوات في القرية.');

tz_def('Q37', 'المهام');
tz_def('Q37_DESC', 'تم إنجاز جميع المهام!');

tz_def('RESOURCES_OVERVIEW', 'نظرة عامة على الموارد');
tz_def('YOUR_RES_DELIVERIES', 'شحنات مواردك');
tz_def('DELIVERY', 'الشحنة');
tz_def('DELIVERY_TIME', 'وقت التسليم');
tz_def('STATUS', 'الحالة');
tz_def('FETCH', 'إحضار');
tz_def('FETCHED', 'تم الإحضار');
tz_def('ON_HOLD', 'قيد الانتظار');
tz_def('ONE_DAY_OF_NOVATERRA', 'يوم واحد من نوفاتيرا ');
tz_def('TWO_DAYS_OF_NOVATERRA', 'يومان من نوفاتيرا ');

//Quest 25
tz_def('Q25_7', 'المهمة 7: الجيران!');
tz_def('Q25_7_DESC', 'من حولك توجد قرى عديدة مختلفة. إحداها تُسمى. ');
tz_def('Q25_7_DESC1', 'انقر على `الخريطة` في القائمة العلوية وابحث عن تلك القرية. يمكن رؤية اسم قرى جيرانك بتمرير الفأرة فوق أي منها.');
tz_def('Q25_7_ORDER', '</p><b>الأمر:</b><br>ابحث عن إحداثيات ');
tz_def('Q25_7_ORDER1', 'وأدخلها هنا.');
tz_def('Q25_7_RESP', 'بالضبط، هناك ');
tz_def('Q25_7_RESP1', ' قرية! بقدر ما تصل من موارد إلى هذه القرية. حسنًا، تقريبًا بنفس القدر...');

tz_def('Q25_8', 'المهمة 8: جيش ضخم!');
tz_def('Q25_8_DESC', 'لدي الآن مهمة خاصة جدًا لك. أنا جائع. أعطني 200 من المحاصيل!<br><br>في المقابل سأحاول تنظيم جيش ضخم لحماية قريتك.');
tz_def('Q25_8_ORDER', 'الأمر:</p>أرسل 200 من المحاصيل إلى مدير المهام.');
tz_def('Q25_8_BUTN', 'إرسال المحاصيل');
tz_def('Q25_8_NOCROP', 'لا يوجد محاصيل كافية!');

tz_def('Q25_9', 'المهمة 9: واحد من كل نوع!');
tz_def('Q25_9_DESC', 'في '.SERVER_NAME.' يوجد دائمًا ما تفعله! بينما تنتظر جيشك الجديد،<br><br>وسّع منشرة خشب إضافية، وحفرة طين، ومنجم حديد، وحقل محاصيل إلى المستوى 1');
tz_def('Q25_9_ORDER', 'الأمر:</p>وسّع واحدًا إضافيًا من كل حقل مورد إلى المستوى 1.');
tz_def('Q25_9_RESP', 'ممتاز جدًا، تطور رائع في إنتاج الموارد.');

tz_def('Q25_10', 'المهمة 10: قريبًا!');
tz_def('Q25_10_DESC', 'حان الوقت لاستراحة قصيرة إلى أن يصل الجيش الضخم الذي أرسلته لك.<br><br>حتى ذلك الحين يمكنك استكشاف الخريطة أو توسيع بعض حقول الموارد.');
tz_def('Q25_10_ORDER', 'الأمر:</p>انتظر وصول جيش مدير المهام');
tz_def('Q25_10_RESP', 'وصل الآن جيش ضخم من مدير المهام لحماية قريتك');
tz_def('Q25_10_REWARD', 'مكافأتك:</p>يومان إضافيان من نوفاتيرا');

tz_def('Q25_11', 'المهمة 11: التقارير');
tz_def('Q25_11_DESC', 'في كل مرة يحدث فيها شيء مهم لحسابك ستصلك رسالة تقرير.<br><br>يمكنك رؤيتها بالنقر على النصف الأيسر من الزر الخامس (من اليسار إلى اليمين). اقرأ التقرير وعد إلى هنا.');
tz_def('Q25_11_ORDER', 'الأمر:</p>اقرأ أحدث تقاريرك.');
tz_def('Q25_11_RESP', 'استلمته؟ ممتاز جدًا. إليك مكافأتك.');

tz_def('Q25_12', 'المهمة 12: كل شيء إلى المستوى 1.');
tz_def('Q25_12_DESC', 'الآن يجب أن نزيد إنتاج مواردك قليلاً.');
tz_def('Q25_12_ORDER', 'الأمر:</p>وسّع جميع حقول الموارد إلى المستوى 1.');
tz_def('Q25_12_RESP', 'ممتاز جدًا، إنتاج مواردك يزدهر.<br><br>قريبًا يمكننا البدء ببناء المباني في القرية.');

tz_def('Q25_13', 'المهمة 13: حمامة السلام');
tz_def('Q25_13_DESC', 'في الأيام الأولى بعد التسجيل تكون محميًا من هجمات زملائك اللاعبين. يمكنك معرفة مدة استمرار هذه الحماية بإضافة الكود <b>[#0]</b> إلى ملفك الشخصي.');
tz_def('Q25_13_ORDER', 'الأمر:</p>اكتب الكود <b>[#0]</b> في ملفك الشخصي بإضافته إلى أحد حقلي الوصف.');
tz_def('Q25_13_RESP', 'أحسنت! الآن يمكن للجميع رؤية أي محارب عظيم يقترب من العالم.');

tz_def('Q25_14', 'المهمة 14: المخبأ');
tz_def('Q25_14_DESC', 'حان الوقت لبناء مخبأ. عالم <b>'.SERVER_NAME.'</b> خطير.<br><br>يعيش كثير من اللاعبين على سرقة موارد الآخرين. ابنِ مخبأً لإخفاء بعض مواردك عن الأعداء.');
tz_def('Q25_14_ORDER', 'الأمر:</p>ابنِ مخبأً.');
tz_def('Q25_14_RESP', 'أحسنت، أصبح من الأصعب على زملائك اللاعبين الأشرار نهب قريتك.<br><br>عند التعرض للهجوم، سيخفي سكان قريتك الموارد في المخبأ من تلقاء أنفسهم.');

tz_def('Q25_15', 'المهمة 15: إلى اثنين.');
tz_def('Q25_15_DESC', 'في <b>'.SERVER_NAME.'</b> يوجد دائمًا ما تفعله! وسّع منشرة خشب واحدة، وحفرة طين واحدة، ومنجم حديد واحد، وحقل محاصيل واحد إلى المستوى 2 لكل منها.');
tz_def('Q25_15_ORDER', 'الأمر:</p>وسّع واحدًا من كل حقل مورد إلى المستوى 2.');
tz_def('Q25_15_RESP', 'ممتاز جدًا، قريتك تنمو وتزدهر!');

tz_def('Q25_16', 'المهمة 16: الإرشادات');
tz_def('Q25_16_DESC', 'في إرشادات اللعبة يمكنك إيجاد نصوص معلومات مختصرة عن مختلف المباني وأنواع الوحدات.<br><br>انقر على `الإرشادات` على اليسار لمعرفة كمية الخشب المطلوبة للثكنة.');
tz_def('Q25_16_ORDER', 'الأمر:</p>أدخل كمية الخشب التي تكلفها الثكنة');
tz_def('Q25_16_BUTN', 'إتمام المهمة');
tz_def('Q25_16_RESP', 'بالضبط! تكلف الثكنة 210 وحدات خشب.');

tz_def('Q25_17', 'المهمة 17: المبنى الرئيسي');
tz_def('Q25_17_DESC', 'يحتاج كبار البنائين إلى مبنى رئيسي من المستوى 3 لإقامة مبانٍ مهمة مثل السوق أو الثكنة.');
tz_def('Q25_17_ORDER', 'الأمر:</p>وسّع مبناك الرئيسي إلى المستوى 3.');
tz_def('Q25_17_RESP', 'أحسنت. اكتمل المبنى الرئيسي بالمستوى 3.<br><br>بهذه الترقية يمكن لكبار البنائين بناء مزيد من أنواع المباني وأيضًا بشكل أسرع.');

tz_def('Q25_18', 'المهمة 18: تقدّم!');
tz_def('Q25_18_DESC', 'ابحث مجددًا عن رتبتك في إحصائيات اللاعبين واستمتع بتقدمك.');
tz_def('Q25_18_ORDER', 'الأمر:</p>ابحث عن رتبتك في الإحصائيات وأدخلها هنا.');
tz_def('Q25_18_RESP', 'أحسنت! هذه رتبتك الحالية.');

tz_def('Q25_19', 'المهمة 19: أسلحة أم عجين');
tz_def('Q25_19_DESC', 'عليك الآن اتخاذ قرار: إما التجارة بسلام أو أن تصبح محاربًا مرعبًا.<br><br>للسوق تحتاج صومعة، وللثكنة تحتاج نقطة تجمع.');
tz_def('Q25_19_BUTN', 'اقتصاد');
tz_def('Q25_19_BUTN1', 'عسكري');

tz_def('Q25_20', 'المهمة 19: الاقتصاد');
tz_def('Q25_20_DESC', 'التجارة والاقتصاد كانا اختيارك. أوقات ذهبية تنتظرك بالتأكيد!');
tz_def('Q25_20_ORDER', 'الأمر:</p>ابنِ صومعة.');
tz_def('Q25_20_RESP', 'أحسنت! بالصومعة يمكنك تخزين مزيد من القمح.');

tz_def('Q25_21', 'المهمة 20: المخزن');
tz_def('Q25_21_DESC', 'ليست المحاصيل وحدها ما يجب حفظه. يمكن أن تُهدر الموارد الأخرى أيضًا إن لم تُخزَّن بشكل صحيح. ابنِ مخزنًا!');
tz_def('Q25_21_ORDER', 'الأمر:</p>ابنِ مخزنًا.');
tz_def('Q25_21_RESP', ';أحسنت، اكتمل مخزنك...&rdquo;</i><br>الآن تحققت جميع المتطلبات اللازمة لبناء سوق.');

tz_def('Q25_22', 'المهمة 21: السوق.');
tz_def('Q25_22_DESC', ';ابنِ سوقًا لتتمكن من التجارة مع زملائك اللاعبين.');
tz_def('Q25_22_ORDER', 'الأمر:</p>يُرجى بناء سوق.');
tz_def('Q25_22_RESP', 'اكتمل السوق. الآن يمكنك تقديم عروضك الخاصة وقبول عروض الآخرين! عند إنشاء عروضك، فكّر في عرض ما يحتاجه اللاعبون الآخرون أكثر لتحقيق ربح أكبر.');

tz_def('Q25_23', 'المهمة 19: عسكري');
tz_def('Q25_23_DESC', 'قرار شجاع. لتتمكن من إرسال القوات تحتاج نقطة تجمع.<br><br>يجب بناء نقطة التجمع في موقع بناء محدد. موقع البناء ');
tz_def('Q25_23_DESC1', '.');
tz_def('Q25_23_DESC2', ' يقع على يمين المبنى الرئيسي، أسفله قليلاً. موقع البناء نفسه منحنٍ.');
tz_def('Q25_23_ORDER', 'الأمر:</p>ابنِ نقطة تجمع.');
tz_def('Q25_23_RESP', 'أُقيمت نقطة تجمعك! خطوة جيدة نحو السيطرة على العالم!');

tz_def('Q25_24', 'المهمة 20: الثكنة');
tz_def('Q25_24_DESC', 'الآن لديك مبنى رئيسي من المستوى 3 ونقطة تجمع. هذا يعني أن جميع متطلبات بناء الثكنة قد تحققت.<br><br>يمكنك استخدام الثكنة لتدريب قوات للقتال.');
tz_def('Q25_24_ORDER', 'الأمر:</p>ابنِ ثكنة.');
tz_def('Q25_24_RESP', 'أحسنت... اجتمع أفضل المدربين من كل البلاد لتدريب رجالك على أعلى مستوى من مهارات القتال.');

tz_def('Q25_25', 'المهمة 21: تدريب.');
tz_def('Q25_25_DESC', 'الآن بعد أن أصبحت لديك ثكنة يمكنك بدء تدريب القوات. درّب اثنين من ');
tz_def('Q25_25_ORDER', 'يُرجى تدريب 2 من ');
tz_def('Q25_25_RESP', 'وُضع أساس جيشك المجيد.<br><br>قبل إرسال جيشك للنهب يجب أن تراجع');
tz_def('Q25_25_RESP1', 'محاكي القتال');
tz_def('Q25_25_RESP2', 'لترى كم قوة تحتاج للانتصار على فأر واحد دون خسائر.');

tz_def('Q25_26', 'المهمة 22: كل شيء إلى المستوى 2.');
tz_def('Q25_26_DESC', 'حان الوقت مجددًا لتوسيع ركائز القوة والثروة! هذه المرة المستوى 1 لا يكفي... سيستغرق الأمر وقتًا لكنه سيستحق العناء في النهاية. وسّع جميع حقول مواردك إلى المستوى 2!');
tz_def('Q25_26_ORDER', 'الأمر:</p>وسّع جميع حقول الموارد إلى المستوى 2.');
tz_def('Q25_26_RESP', 'تهانينا! قريتك تنمو وتزدهر...');

tz_def('Q25_27', 'المهمة 23: الأصدقاء.');
tz_def('Q25_27_DESC', 'من الصعب على اللاعب المنفرد منافسة المهاجمين. من مصلحتك أن يحبك جيرانك.<br><br>والأفضل من ذلك أن تلعب مع أصدقاء. هل تعلم أنه يمكنك كسب '.GOLD_IMG.' بدعوة الأصدقاء؟');
tz_def('Q25_27_ORDER', 'الأمر:</p>كم من '.GOLD_IMG.' تكسب مقابل دعوة صديق؟');
tz_def('Q25_27_RESP', 'صحيح! تحصل على 50 '.GOLD_IMG.' إذا كان لدى الصديق الذي دعوته قريتان.');

tz_def('Q25_28', 'المهمة 24: بناء سفارة.');
tz_def('Q25_28_DESC', 'عالم نوفاتيرا خطير. لقد بنيت بالفعل مخبأً لحمايتك من المهاجمين.<br><br>سيمنحك تحالف جيد حماية أفضل.');
tz_def('Q25_28_ORDER', 'الأمر:</p>لقبول دعوات التحالفات، ابنِ سفارة.');
tz_def('Q25_28_RESP', 'نعم! يمكنك انتظار دعوة من تحالف أو إنشاء تحالفك الخاص إذا كانت السفارة بالمستوى 3');

tz_def('Q25_29', 'المهمة 25: التحالف.');
tz_def('Q25_29_DESC', 'العمل الجماعي مهم في نوفاتيرا. اللاعبون الذين يعملون معًا ينظمون أنفسهم في تحالفات. احصل على دعوة من تحالف في منطقتك وانضم إليه. أو يمكنك تأسيس تحالفك الخاص. للقيام بذلك، تحتاج سفارة من المستوى 3.');
tz_def('Q25_29_ORDER', 'الأمر:</p>انضم إلى تحالف أو أسّس تحالفك الخاص.');
tz_def('Q25_29_RESP', 'أحسنت! أنت الآن في اتحاد يُدعى');
tz_def('Q25_29_RESP1', '، وأنت عضو في تحالفهم.<br>بالعمل معًا ستتقدمون جميعًا أسرع...');

tz_def('Q25_30', 'المهام');
tz_def('Q25_30_DESC', 'تم إنجاز جميع المهام!');

//INDEX.php (تكملة)
tz_def('TOTAL_PLAYERS', PLAYERS.' بالإجمالي');
tz_def('ONLINE_PLAYERS', PLAYERS.' متصل الآن');
tz_def('MP_STRATEGY_GAME', SERVER_NAME.' - لعبة الإستراتيجية متعددة اللاعبين');
tz_def('WHAT_IS', SERVER_NAME.' هي واحدة من أشهر ألعاب المتصفح في العالم. كلاعب في '.SERVER_NAME.'، ستبني إمبراطوريتك الخاصة، وتجند جيشًا عظيمًا، وتقاتل جنبًا إلى جنب مع حلفائك من أجل السيطرة على عالم اللعبة.');
tz_def('LATEST_GAME_WORLD2', 'سجّل في أحدث<br>عالم لعبة واستمتع<br>بمزايا كونك<br>من أوائل<br>اللاعبين.');
tz_def('PLAY_NOW', 'العب '.SERVER_NAME.' الآن');
tz_def('LEARN_MORE', 'تعرّف على المزيد <br>عن '.SERVER_NAME.'!');
tz_def('LEARN_MORE2', 'الآن مع نظام خوادم<br>ثوري ورسومات<br>جديدة تمامًا<br>هذا الاستنساخ هو الأفضل!');
tz_def('BECOME_COMUNITY', 'كن جزءًا من مجتمعنا الآن!');
tz_def('BECOME_COMUNITY2', 'كن جزءًا من واحد<br>من أكبر مجتمعات<br>الألعاب في<br>العالم.');
tz_def('LEARN1', 'رقّي حقولك ومناجمك لزيادة إنتاج مواردك. ستحتاج الموارد لبناء المباني وتدريب الجنود.');
tz_def('LEARN2', 'ابنِ ووسّع المباني في قريتك. تحسّن المباني بنيتك التحتية العامة، وتزيد إنتاج مواردك، وتتيح لك البحث وتدريب وترقية قواتك.');
tz_def('LEARN3', 'شاهد وتفاعل مع محيطك. يمكنك تكوين أصدقاء جدد أو أعداء جدد، والاستفادة من الواحات القريبة، ومراقبة نمو إمبراطوريتك وازدياد قوتها.');
tz_def('LEARN4', 'تابع تقدمك ونجاحك وقارن نفسك باللاعبين الآخرين. اطّلع على تصنيفات أفضل 10 وقاتل للفوز بوسام أسبوعي.');
tz_def('LEARN5', 'استلم تقارير مفصلة عن مغامراتك وصفقاتك ومعاركك. لا تنسَ الاطلاع على التقارير الجديدة عن الأحداث في محيطك.');
tz_def('LEARN6', 'تبادل المعلومات ومارس الدبلوماسية مع اللاعبين الآخرين. تذكّر دائمًا أن التواصل هو مفتاح كسب أصدقاء جدد وحل الخلافات القديمة.');
tz_def('LOGIN_TO', 'تسجيل الدخول إلى '.SERVER_NAME);
tz_def('REGIN_TO', 'التسجيل في '.SERVER_NAME);
tz_def('STARTED', ' بدأ الخادم منذ '. round((time() - COMMENCE) / 86400) .' يومًا.');

//ANMELDEN.php (تكملة)
tz_def('BEFORE_REGISTER', 'قبل تسجيل حساب، يجب أن تقرأ <a href="/anleitung.php" target="_blank">إرشادات</a> Novaterra ro1 لمعرفة مزايا وعيوب كل قبيلة.');

//ATTACKS ETC. (تكملة)
tz_def('OASISATTACKS', 'هجمات الواحة');
tz_def('MARK_ATTACK', 'وسم هذا الهجوم (الخطورة)');
tz_def('PRISONERSIN', 'أسرى في');
tz_def('PRISONERSFROM', 'أسرى من');
tz_def('CATAPULT_TARGET', 'هدف/أهداف المنجنيق');
tz_def('TROOPS_ON_THEIR_WAY', 'قوات في طريقها');
tz_def('ON', 'في');
tz_def('AT', 'عند');
tz_def('TROOPS_IN_THE_VILLAGE', 'قوات في القرية');
tz_def('TROOPS_IN_OTHER_VILLAGE', 'قوات في قرية أخرى');
tz_def('TROOPS_IN_OASIS', 'قوات في الواحة');
tz_def('TASKMASTER', 'مدير المهام');
tz_def('TO_THE_TASK', 'إلى المهمة');
tz_def('VILLAGE_OF_THE_ELDERS', 'قرية الشيوخ');
tz_def('VILLAGE_OF_THE_ELDERS_TROOPS', 'قوات قرية الشيوخ');

//map (تكملة)
tz_def('THERENOINFO', 'لا توجد<br>معلومات متاحة.');
tz_def('CULTUREPOINT', 'نقاط ثقافية');
tz_def('BUILDRALLY', 'ابنِ نقطة تجمع');
tz_def('SETTLERSAVAIL', 'مستوطنون متاحون');
tz_def('BEGINPRO', 'حماية المبتدئين');
tz_def('BUILDMARKET', 'بناء سوق');
tz_def('LARGE_MAP_DESC', 'عرض الخريطة الكبيرة في نافذة إضافية');

//other (تكملة)
tz_def('TOP10AA', 'أفضل 10 تحالفات مهاجمة');
tz_def('TOP10AD', 'أفضل 10 تحالفات مدافعة');

//LOGIN.php (تكملة)
tz_def('COOKIES', 'يجب تفعيل ملفات تعريف الارتباط (كوكيز) لتتمكن من تسجيل الدخول. إذا كنت تشارك هذا الجهاز مع آخرين، يُستحسن تسجيل الخروج بعد كل جلسة لسلامتك.');
tz_def('PW_REQUEST', 'يمكنك عندها طلب كلمة مرور جديدة ستُرسل إلى بريدك الإلكتروني.');
tz_def('EMAIL_FOLLOW', 'اتبع هذا الرابط لتفعيل حسابك.');

//404.php (تكملة)
tz_def('WE_LOOKED', 'بحثنا 404 مرة بالفعل ولم نجد شيئًا');

//MASSMESSAGE.php (تكملة)
tz_def('MASS', 'محتوى الرسالة');
tz_def('MASS_SUBJECT', 'الموضوع:');
tz_def('MASS_COLOR', 'لون الرسالة:');
tz_def('MASS_REQUIRED', 'جميع الحقول مطلوبة');
tz_def('MASS_UNITS', 'صور (وحدات):');
tz_def('MASS_SHOWHIDE', 'إظهار/إخفاء');
tz_def('MASS_READ', 'اقرأ هذا: بعد إضافة الرمز التعبيري، يجب إضافة كلمة left أو right بعد الرقم وإلا فلن تعمل الصورة');
tz_def('MASS_CONFIRM', 'التأكيد');
tz_def('MASS_REALLY', 'هل تريد فعلاً إرسال رسالة جماعية؟');
tz_def('MASS_ABORT', 'الإلغاء الآن');
tz_def('MASS_SENT', 'تم إرسال الرسالة الجماعية');

// HEADER && MENU && Messages && Reports
tz_def('REPORTS', 'التقارير');
tz_def('MESSAGES', 'الرسائل');
tz_def('PLUS_MENU', 'قائمة بلس');
tz_def('LINKS', 'روابط');
tz_def('CANCEL_PROCESS', 'إلغاء العملية');
tz_def('ACCOUNT_DELETING', 'سيتم حذف الحساب خلال');
tz_def('INBOX', 'صندوق الوارد');
tz_def('WRITE', 'كتابة');
tz_def('SENT', 'المرسلة');
tz_def('SEND', 'إرسال');
tz_def('ARCHIVE', 'الأرشيف');
tz_def('NOTES', 'ملاحظات');
tz_def('SUBJECT', 'الموضوع');
tz_def('SENDER', 'المرسل');
tz_def('RECIPIENT', 'المستلم');
tz_def('BACK', 'رجوع');
tz_def('NEW', 'جديد');
tz_def('UNREAD', 'غير مقروءة');
tz_def('NO_MESS', 'لا توجد رسائل متاحة');
tz_def('NO_MESS_IN_ARCHIVE', NO_MESS.' في الأرشيف');
tz_def('NO_MESS_SENT', 'لا توجد رسائل مرسلة متاحة');
tz_def('MESS_FOR_SUP', 'رسالة إلى الدعم');
tz_def('MESS_FOR_MH', 'رسالة إلى صياد المتعددين');
tz_def('SEND_AS_SUP', 'إرسال كدعم فني');
tz_def('SEND_AS_MH', 'إرسال كصياد متعددين');
tz_def('SAVE', 'حفظ');
tz_def('ANSWER', 'إجابة');
tz_def('REPLY', 'رد');
tz_def('ADDRESSBOOK', 'دفتر العناوين');
tz_def('CLOSE_ADDRESSBOOK', 'إغلاق دفتر العناوين');
tz_def('ONLINE_S1', 'متصل الآن');
tz_def('ONLINE_S2', 'غير متصل');
tz_def('ONLINE_S3', 'آخر 3 أيام');
tz_def('ONLINE_S4', 'آخر 7 أيام');
tz_def('ONLINE_S5', 'غير نشط');
tz_def('WAIT_FOR_CONFIRM', 'انتظار التأكيد');
tz_def('CONFIRM', 'تأكيد');
tz_def('WRITE_MESS_WARN', '<b>تحذير:</b> لا يمكنك استخدام القيمتين <b>[message]</b> أو <b>[/message]</b> في رسالتك لأنها قد تسبب مشكلة مع نظام bbcode');
tz_def('NO_REPORTS', 'لا توجد تقارير متاحة');
tz_def('ATTACKER', 'المهاجم');
tz_def('NATAR_COUNTERFORCE', 'قوة التتار المضادة');
tz_def('FROM_THE_VILL', 'من القرية');
tz_def('CASUALTIES', 'الخسائر');
tz_def('INFORMATION', 'معلومات');
// === Battle report strings (issue: i18n of combat reports) ===
tz_def('RC_HERO', 'البطل');
tz_def('RC_CATAPULT', 'المنجنيق');
tz_def('RC_TRAP', 'الفخ');
tz_def('RC_WALL', 'السور');
tz_def('TZ_AT', 'عند');
// Catapults
tz_def('RC_DESTROYED', 'دُمّر');
tz_def('RC_NOT_DAMAGED', 'لم يتضرر.');
tz_def('RC_DAMAGED_FROM_TO', 'تضرر من المستوى <b>%s</b> إلى المستوى <b>%s</b>.');
tz_def('RC_NO_BUILDINGS', 'لا توجد مبانٍ متبقية لتدميرها');
tz_def('RC_VILLAGE_ALREADY_DESTROYED', 'القرية مدمرة بالفعل.');
tz_def('RC_VILLAGE_CANT_DESTROY', "لا يمكن تدمير القرية.");
tz_def('RC_VILLAGE_CANT_BE', "لا يمكن أن تكون القرية");
tz_def('RC_VILLAGE_DESTROYED', 'دُمّرت القرية.');
// Rams
tz_def('RC_NO_WALL', 'لا يوجد سور لتدميره.');
tz_def('RC_WALL_DESTROYED', 'السور <b>مدمَّر</b>.');
tz_def('RC_WALL_NOT_DAMAGED', 'لم يتضرر السور.');
tz_def('RC_WALL_DAMAGED_FROM_TO', 'تضرر السور من المستوى <b>%s</b> إلى المستوى <b>%s</b>.');
// Conquest / chief
tz_def('RC_NO_REDUCE_CP_RAID', 'تعذر خفض النقاط الثقافية أثناء النهب');
tz_def('RC_NOT_ENOUGH_CP', 'نقاط ثقافية غير كافية.');
tz_def('RC_CANT_TAKEOVER', 'لا يمكنك الاستيلاء على هذه القرية.');
tz_def('RC_RESIDENCE_NOT_DESTROYED', "القصر/مقر الإقامة لم يُدمَّر بعد!");
tz_def('RC_LOYALTY_LOWERED', 'انخفض الولاء من <b>%s</b> إلى <b>%s</b>.');
tz_def('RC_INHABITANTS_JOIN', 'قرر سكان قرية %s الانضمام إلى إمبراطوريتك.');
// Hero
tz_def('RC_HERO_NO_KILL', 'لم يكن لدى بطلك ما يقتله لذا لم يكسب أي نقاط خبرة.');
tz_def('RC_HERO_GAINED_XP', 'اكتسب بطلك <b>%s</b> نقطة خبرة.');
tz_def('RC_HERO_CONQUERED_OASIS', 'غزا بطلك هذه الواحة');
tz_def('RC_HERO_REDUCED_OASIS_LOYALTY', 'خفض بطلك ولاء الواحة إلى %s من %s');
tz_def('RC_NO_REDUCE_LOYALTY_RAID', 'تعذر خفض الولاء أثناء النهب');
tz_def('RC_HERO_CARRYING_ARTIFACT', 'يحمل بطلك القطعة الأثرية <b>%s</b> عائدًا إلى الديار و');
tz_def('RC_HERO_NO_ARTIFACT_RAID', 'لم يتمكن بطلك من الحصول على قطعة أثرية أثناء النهب');
tz_def('RC_HERO_AND_GAINED_XP_BATTLE', 'واكتسب <b>%s</b> نقطة خبرة من المعركة.');
tz_def('RC_HERO_NO_XP_BATTLE', 'لا نقاط خبرة من المعركة.');
tz_def('RC_HERO_GAINED_XP_BATTLE', 'اكتسب <b>%s</b> نقطة خبرة من المعركة.');
tz_def('RC_HERO_BUT_GAINED_XP_BATTLE', 'لكنه اكتسب <b>%s</b> نقطة خبرة من المعركة.');
tz_def('RC_HERO_TRAPPED', 'وقع بطلك في فخ');
tz_def('RC_HERO_DIED', 'مات بطلك');
// Scout report
tz_def('RC_TOTAL_RESOURCES', 'إجمالي الموارد:');
tz_def('RC_RESIDENCE_LEVEL', 'مستوى مقر الإقامة:');
tz_def('RC_PALACE_LEVEL', 'مستوى القصر:');
tz_def('RC_WALL_LEVEL', 'مستوى السور:');
tz_def('RC_CRANNY_CAPACITY', 'إجمالي سعة المخابئ:');
tz_def('RC_NO_INFO', 'لا توجد معلومات لعرضها');
// Prisoners / traps
tz_def('RC_OF_WHICH_SAVED', 'منها <b>%s</b> تم إنقاذها');
tz_def('RC_FREED_FROM_HIS_TROOPS', 'حرر <b>%s</b> من قواته');
tz_def('RC_FREED_FRIENDLY_TROOPS', 'حرر <b>%s</b> من القوات الصديقة');
tz_def('RC_AND_FRIENDLY_TROOPS', 'و<b>%s</b> من القوات الصديقة');
// Troop return
tz_def('RC_NONE_RETURNED', 'لم يعد أي من جنودك.');
// === End battle report strings ===
// === System / alliance in-game messages (sendMessage), rendered per reader ===
tz_def('MSG_INVITE_ALLIANCE', 'دعوة إلى تحالف');
tz_def('MSG_FORUM_NEW_TITLE', 'رسالة جديدة في المنتدى');
tz_def('MSG_FORUM_NEW_BODY', "مرحبًا!\n\nقام <a href=\"%s\">%s</a> بنشر رسالة جديدة في موضوعكم المشترك. إليك رابط يوصلك إلى هناك: <a href=\"%s\">رابط المنتدى</a>\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_LEFT_ALLIANCE_TITLE', 'غادرت التحالف');
tz_def('MSG_FORCED_LEAVE_TITLE', 'أجبرك هجوم على مغادرة التحالف');
tz_def('MSG_LEFT_DEMOLITION_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب اكتمال هدم سفارتك الأخيرة، فقد غادرت تحالفك بنجاح.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_LEFT_ATTACK_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح ودمار سفارتك الأخيرة، أُجبرت على مغادرة تحالفك.\n\nلاستعادة موقعك في هذا التحالف، ستحتاج إلى بناء سفارة جديدة وطلب دعوة جديدة من القائد.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_DISBAND_TITLE', 'تم حل تحالفك');
tz_def('MSG_DISBAND_OWNER_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب اكتمال هدم سفارتك الأخيرة من المستوى 3، وكونك قائد التحالف، فقد تم حل هذا التحالف.\n\nلتأسيس تحالف جديد، يُرجى بناء سفارة من المستوى 3 مجددًا في إحدى قراك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_DISBAND_MEMBER_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هدم سفارة مؤسس تحالفك الأخيرة إلى ما دون المستوى 3، فقد تم حل هذا التحالف.\n\nيمكنك الآن قبول دعوات من تحالفات أخرى أو تأسيس تحالف جديد بنفسك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_NOW_ALLIANCE_LEADER_TITLE', 'أنت الآن قائد التحالف');
tz_def('MSG_NOW_LEADER_TITLE', 'أنت الآن قائد تحالفك');
tz_def('MSG_PROMOTE_BODY', "مرحبًا، %s!\n\nنحيطك علمًا بأنه حدث هجوم ناجح على اللاعب <a href=\"spieler.php?uid=%s\">%s</a> ألحق ضررًا بسفارته لدرجة أنه لم يعد قادرًا على تحمل قيادة تحالفك.\n\nبما أن مستوى سفارتك كافٍ، فقد تم انتخابك تلقائيًا كقائد جديد لتحالفك مع كل الواجبات والمسؤوليات المترتبة على ذلك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_DISPERSE_TITLE', 'تم تفكيك تحالفك');
tz_def('MSG_DISPERSE_OWNER_BODY_MANY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح خفّض مستوى سفارتك الأخيرة إلى مستوى غير قادر على استيعاب جميع أعضاء التحالف البالغ عددهم %s، ولعدم وجود عضو آخر في التحالف لديه سفارة بمستوى كافٍ لتولي القيادة، فقد تم تفكيك تحالفك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_DISPERSE_OWNER_BODY_FEW', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح خفّض مستوى سفارتك الأخيرة إلى أقل من المستوى 3 - وهو المطلوب لتأسيس تحالفك والحفاظ عليه - فقد تم تفكيك تحالفك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_DISPERSE_MEMBER_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح على سفارة قائد تحالفك من قبل لاعب آخر خفّض مستواها دون الحد المطلوب لاستيعاب جميع أعضاء التحالف البالغ عددهم %s، ولعدم وجود عضو آخر في التحالف لديه سفارة بمستوى كافٍ لتولي القيادة، فقد تم تفكيك تحالفك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_NEW_LEADER_TITLE', 'لتحالفك قائد جديد');
tz_def('MSG_NEWLEADER_OWNER_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح خفّض مستوى سفارتك الأخيرة إلى مستوى غير قادر على استيعاب جميع أعضاء التحالف البالغ عددهم %s، تم انتخاب عضو آخر في التحالف يستوفي هذه المعايير تلقائيًا كقائد جديد للتحالف.\n\nكما أنه - بسبب تدمير السفارة - تم طردك قسريًا من تحالفك.\n\nيُرجى إعادة الاتصال بتحالفك عبر بناء سفارة جديدة والتواصل مع <a href=\"spieler.php?uid=%s\">القائد الجديد</a> لطلب دعوة.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_NEWLEADER_MEMBER_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح على سفارة قائد تحالفك من قبل لاعب آخر، تم انتخاب <a href=\"spieler.php?uid=%s\">عضو آخر في التحالف</a> لديه سعة سفارة كافية تلقائيًا كقائد جديد للتحالف.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_FORCED_LEAVE_BODY', "مرحبًا، %s!\n\nنحيطك علمًا أنه بسبب هجوم ناجح ودمار سفارتك الأخيرة، أُجبرت على مغادرة تحالفك.\n\nلاستعادة موقعك في هذا التحالف، ستحتاج إلى بناء سفارة جديدة وطلب دعوة جديدة من <a href=\"spieler.php?uid=%s\">القائد المنتخب تلقائيًا حديثًا</a>.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_INVITE_BODY', "مرحبًا، %s!\n\nنحيطك علمًا بأنه تمت دعوتك للانضمام إلى تحالف. لقبول هذه الدعوة، يُرجى زيارة سفارتك.\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
tz_def('MSG_QUIT_REPLACEMENT_BODY', "مرحبًا!\n\nنحيطك علمًا بأن القائد السابق لتحالفك - %s، قرر الانسحاب واختارك بديلًا له. أصبح لديك الآن صلاحية الوصول الكامل والإدارة والمسؤوليات الخاصة بتحالفك.\n\nحظًا موفقًا!\n\nمع خالص التحية،\n<i>روبوت الخادم :)</i>");
// Embassy-destruction status lines, appended to the catapult battle report.
tz_def('MSG_ALLIANCE_DISPERSED_STATUS', "تم تفكيك تحالف هذا اللاعب.");
tz_def('MSG_FORCED_LEAVE_STATUS', 'أُجبر اللاعب على مغادرة تحالفه.');
// Alliance news-feed notices (rendered in Templates/Alliance/news.tpl)
tz_def('MSG_INVITE_NOTICE', 'دعا %s اللاعب %s إلى التحالف.');
tz_def('MSG_ALLIANCE_FOUNDED', 'تأسس التحالف بواسطة %s.');
tz_def('MSG_NEWS_REJECTED', 'رفض %s الدعوة.');
tz_def('MSG_NEWS_DELETED_INVITE', 'حذف %s الدعوة الموجهة إلى %s.');
tz_def('MSG_NEWS_JOINED', 'انضم %s إلى التحالف.');
tz_def('MSG_NEWS_NAME_CHANGED', 'غيّر %s اسم التحالف.');
tz_def('MSG_NEWS_DESC_CHANGED', 'غيّر %s وصف التحالف.');
tz_def('MSG_NEWS_PERMS_CHANGED', 'غيّر %s صلاحيات %s.');
tz_def('MSG_NEWS_EXPELLED', 'تم طرد %s من التحالف بواسطة %s.');
tz_def('MSG_NEWS_QUIT', 'انسحب %s من التحالف.');
tz_def('MSG_NEWS_DIPLO_CONFED', 'عرض %s اتحادًا كونفدراليًا على %s.');
tz_def('MSG_NEWS_DIPLO_NAP', 'عرض %s اتفاقية عدم اعتداء على %s.');
tz_def('MSG_NEWS_DIPLO_WAR', 'أعلن %s الحرب على %s.');
tz_def('CARRY', 'حمل');
tz_def('DEFENDER', 'المدافع');
tz_def('VISITED', 'زار');
tz_def('HIS_TROOPS', ' قواته');
tz_def('WISHES_YOU', 'يتمنى لك');
tz_def('X_MAS', 'عيد ميلاد مجيد');
tz_def('NEW_YEAR', 'سنة جديدة سعيدة');
tz_def('EASTER', 'عيد فصح سعيد');
if(!defined('PEACE')) tz_def('PEACE', 'سلام');

tz_def('GOLD', 'ذهب');
tz_def('GOLD_IMG', '<img src=\"/img/x.gif\" class=\"gold\" alt=\"'.GOLD.'\" title=\"'.GOLD.'\">');
