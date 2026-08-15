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

//Admin setting - Admin/Templates/config.tpl & editServerSet.tpl
tz_def('EDIT_BACK', 'رجوع');
tz_def('SERV_CONFIG', 'إعدادات السيرفر');
tz_def('SERV_SETT', 'إعدادات السيرفر');
tz_def('EDIT_SERV_SETT', 'تعديل إعدادات السيرفر');
tz_def('SERV_VARIABLE', 'المتغيّر');
tz_def('SERV_VALUE', 'القيمة');
tz_def('CONF_SERV_NAME', 'اسم السيرفر');
tz_def('CONF_SERV_NAME_TOOLTIP', 'اسم سيرفر اللعبة.');
tz_def('CONF_SERV_STARTED', 'تاريخ بدء السيرفر');
tz_def('CONF_SERV_STARTED_TOOLTIP', 'الوقت الذي بدأ فيه سيرفر اللعبة. لا يمكن تغيير هذا المتغيّر على سيرفر مثبَّت بالفعل.');
tz_def('CONF_SERV_TIMEZONE', 'المنطقة الزمنية للسيرفر');
tz_def('CONF_SERV_TIMEZONE_TOOLTIP', 'المنطقة الزمنية لسيرفر اللعبة.');
tz_def('CONF_SERV_LANG', 'اللغة');
tz_def('CONF_SERV_LANG_TOOLTIP', 'اللغة المستخدمة في لوحة الأدمن ولجميع اللاعبين على سيرفر اللعبة افتراضيًا.');
tz_def('CONF_SERV_SERVSPEED', 'سرعة السيرفر');
tz_def('CONF_SERV_SERVSPEED_TOOLTIP', 'سرعة سيرفر اللعبة. كلما زادت سرعة السيرفر، كلما بُنيت المباني بشكل أسرع، وتمت الأبحاث والتطويرات في الحدادة بشكل أسرع، وبُنيت الوحدات بسرعة، وزادت إنتاجية جميع الموارد.');
tz_def('CONF_SERV_TROOPSPEED', 'سرعة القوات');
tz_def('CONF_SERV_TROOPSPEED_TOOLTIP', 'سرعة تحرك القوات على سيرفر اللعبة. كلما زاد هذا المؤشر، كلما تحركت القوات أسرع على الخريطة.');
tz_def('CONF_SERV_EVASIONSPEED', 'سرعة المراوغة');
tz_def('CONF_SERV_EVASIONSPEED_TOOLTIP', 'سرعة المراوغة هي الوقت الذي تقضيه القوات في الطريق للعودة إلى الوطن بعد مراوغة هجوم.');
tz_def('CONF_SERV_STORMULTIPLER', 'مضاعِف سعة التخزين');
tz_def('CONF_SERV_STORMULTIPLER_TOOLTIP', 'مضاعِف لسعة تخزين المخزن والمخزن الزراعي. القيمة 1 تساوي سعة 80,000 من كل مورد عند أعلى مستوى. إذا ضبطت القيمة إلى 2، فستكون السعة عند أعلى مستوى 160,000 من كل مورد.<br><b>ملاحظة:</b> كمية الموارد التي ستُنتَج من الواحات غير المحتلة للنهب تعتمد على هذه القيمة. القيمة الافتراضية هي 800. إذا ضبطتها إلى 2، فسيصبح الحد الأقصى المُنتَج لكل مورد 1600.');
tz_def('CONF_SERV_TRADCAPACITY', 'سعة التاجر');
tz_def('CONF_SERV_TRADCAPACITY_TOOLTIP', 'مضاعِف لسعة الموارد التي يمكن لتاجر واحد نقلها. القيمة 1 تساوي سعة 500 للرومان، و750 للغال، و1000 للتيوتون. إذا ضبطت القيمة إلى 2، فستتضاعف سعة الموارد المنقولة وفقًا لذلك: 1000، 1500، 2000.');
tz_def('CONF_SERV_CRANCAPACITY', 'سعة المخبأ');
tz_def('CONF_SERV_CRANCAPACITY_TOOLTIP', 'مضاعِف لسعة الموارد في المخبأ، والتي يمكن حمايتها من النهب. القيمة 1 تساوي 1000 للرومان والتيوتون، و2000 للغال. إذا ضبطت القيمة إلى 2، فستتضاعف سعة المخبأ لتصبح 2000 و4000 على التوالي.');
tz_def('CONF_SERV_TRAPCAPACITY', 'سعة الفخ');
tz_def('CONF_SERV_TRAPCAPACITY_TOOLTIP', 'مضاعِف لسعة فخ الغال، الذي يستطيع أسر جنود العدو حتى قبل مهاجمة القرية. القيمة 1 تساوي سعة 400 عند المستوى 20 من البناء. إذا ضبطت القيمة إلى 2، فستصبح السعة 800.');
tz_def('CONF_SERV_NATUNITSMULTIPLIER', 'مضاعِف وحدات التتار');
tz_def('CONF_SERV_NATUNITSMULTIPLIER_TOOLTIP', 'هذا المتغيّر مسؤول عن عدد قوات التتار، على القطع الأثرية وقرى عجائب الدنيا.');
tz_def('CONF_SERV_NATARS_SPAWN_TIME', 'ظهور التتار');
tz_def('CONF_SERV_NATARS_SPAWN_TIME_TOOLTIP', 'بعد كم يومًا من تاريخ بدء السيرفر سيظهر التتار والقطع الأثرية');
tz_def('CONF_SERV_NATARS_WW_SPAWN_TIME', 'ظهور عجائب الدنيا');
tz_def('CONF_SERV_NATARS_WW_SPAWN_TIME_TOOLTIP', 'بعد كم يومًا من تاريخ بدء السيرفر ستظهر قرى عجائب الدنيا');
tz_def('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME', 'ظهور مخططات بناء عجائب الدنيا');
tz_def('CONF_SERV_NATARS_WW_BUILDING_PLAN_SPAWN_TIME_TOOLTIP', 'بعد كم يومًا من تاريخ بدء السيرفر ستظهر مخططات بناء عجائب الدنيا');
tz_def('CONF_SERV_MAPSIZE', 'حجم الخريطة');
tz_def('CONF_SERV_MAPSIZE_TOOLTIP', 'حجم خريطة عالم اللعبة. لا يمكن تغييره على سيرفر لعبة مثبَّت بالفعل.');
tz_def('CONF_SERV_VILLEXPSPEED', 'سرعة توسّع القرى');
tz_def('CONF_SERV_VILLEXPSPEED_TOOLTIP', 'سرعة تؤثر على توسّع الإمبراطورية. مع السرعة البطيئة تحتاج إلى نقاط ثقافة أكثر لتأسيس قرية جديدة، ومع السرعة السريعة يقل العدد المطلوب من نقاط الثقافة.');
tz_def('CONF_SERV_BEGINPROTECT', 'حماية المبتدئين');
tz_def('CONF_SERV_BEGINPROTECT_TOOLTIP', 'حماية تمنع مهاجمة قرى اللاعبين الجدد لفترة زمنية معيّنة.');
tz_def('CONF_SERV_REGOPEN', 'التسجيل مفتوح');
tz_def('CONF_SERV_REGOPEN_TOOLTIP', 'يسمح بتفعيل (صحيح) أو تعطيل (خطأ) تسجيل اللاعبين على سيرفر اللعبة.');
tz_def('CONF_SERV_ACTIVMAIL', 'تفعيل البريد الإلكتروني');
tz_def('CONF_SERV_ACTIVMAIL_TOOLTIP', 'إذا كان مفعّلًا (نعم)، سيكون من الضروري عند التسجيل تأكيد البريد الإلكتروني. إذا كان معطّلًا (لا) فلا حاجة لتأكيد البريد الإلكتروني.');
tz_def('CONF_SERV_QUEST', 'المهام');
tz_def('CONF_SERV_QUEST_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) نظام المهام على سيرفر اللعبة.');
tz_def('CONF_SERV_QTYPE', 'نوع المهام');
tz_def('CONF_SERV_QTYPE_TOOLTIP', 'نوع المهام يمكن أن يكون رسميًا وهو أقصر قليلًا، أو موسّعًا وهو أطول.');
tz_def('CONF_SERV_DLR', 'الهدم - المستوى المطلوب');
tz_def('CONF_SERV_DLR_TOOLTIP', 'المستوى المطلوب للمبنى الرئيسي، الذي يمكن من خلاله هدم المباني في القرية.');
tz_def('CONF_SERV_WWSTATS', 'عجيبة الدنيا - الإحصائيات');
tz_def('CONF_SERV_WWSTATS_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) عرض القرى التي تحتوي على عجيبة من عجائب الدنيا في الإحصائيات.');
tz_def('CONF_SERV_NTRTIME', 'وقت تجدد قوات الطبيعة');
tz_def('CONF_SERV_NTRTIME_TOOLTIP', 'الوقت الذي يتم من خلاله استعادة قوات الطبيعة في الواحات.');
tz_def('CONF_SERV_OASIS_WOOD_PROD_MULT', 'مضاعِف إنتاج الخشب في الواحة');
tz_def('CONF_SERV_OASIS_WOOD_PROD_MULT_TOOLTIP', 'الإنتاج الأساسي للخشب في الواحة');
tz_def('CONF_SERV_OASIS_CLAY_PROD_MULT', 'مضاعِف إنتاج الطين في الواحة');
tz_def('CONF_SERV_OASIS_CLAY_PROD_MULT_TOOLTIP', 'الإنتاج الأساسي للطين في الواحة');
tz_def('CONF_SERV_OASIS_IRON_PROD_MULT', 'مضاعِف إنتاج الحديد في الواحة');
tz_def('CONF_SERV_OASIS_IRON_PROD_MULT_TOOLTIP', 'الإنتاج الأساسي للحديد في الواحة');
tz_def('CONF_SERV_OASIS_CROP_PROD_MULT', 'مضاعِف إنتاج المحاصيل في الواحة');
tz_def('CONF_SERV_OASIS_CROP_PROD_MULT_TOOLTIP', 'الإنتاج الأساسي للمحاصيل في الواحة');
tz_def('CONF_SERV_MEDALINTERVAL', 'الفاصل الزمني للأوسمة');
tz_def('CONF_SERV_MEDALINTERVAL_TOOLTIP', 'الفاصل الزمني لمنح الأوسمة لأفضل اللاعبين والتحالفات. إذا تم تغيير هذا المتغيّر على سيرفر مثبَّت بالفعل، فسيتغيّر الفاصل الزمني بعد عملية منح الأوسمة التالية.');
tz_def('CONF_SERV_TOURNTHRES', 'حد ساحة البطولة');
tz_def('CONF_SERV_TOURNTHRES_TOOLTIP', 'عدد المربعات على خريطة اللعبة، والذي بعده تبدأ ساحة البطولة في العمل.');
tz_def('CONF_SERV_GWORKSHOP', 'الورشة العظيمة');
tz_def('CONF_SERV_GWORKSHOP_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) استخدام الورشة العظيمة في اللعبة.');
tz_def('CONF_SERV_NATARSTAT', 'إظهار التتار في الإحصائيات');
tz_def('CONF_SERV_NATARSTAT_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) إظهار حساب التتار في الإحصائيات.');
tz_def('CONF_SERV_PEACESYST', 'نظام السلام');
tz_def('CONF_SERV_PEACESYST_TOOLTIP', 'تفعيل أو تعطيل نظام السلام. عند تفعيل نظام السلام، سيتمكن اللاعبون من مهاجمة بعضهم البعض، ولكن بدلًا من أي أضرار في التقارير ستظهر عبارة تهنئة. ولن تموت القوات جوعًا.');
tz_def('CONF_SERV_GRAPHICPACK', 'حزمة الرسوميات');
tz_def('CONF_SERV_GRAPHICPACK_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) إمكانية استخدام حزمة الرسوميات.');
tz_def('CONF_SERV_ERRORREPORT', 'الإبلاغ عن الأخطاء');
tz_def('CONF_SERV_ERRORREPORT_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض تقارير الأخطاء على سيرفر اللعبة.');

//Admin setting - Admin/Templates/config.tpl & editPlusSet.tpl
tz_def('PLUS_LOGO', '<b><font color="#71D000">P</font><font color="#FF6F0F">l</font><font color="#71D000">u</font><font color="#FF6F0F">s</font></b>');
tz_def('PLUS_CONFIGURATION', 'إعدادات '.PLUS_LOGO);
tz_def('PLUS_SETT', 'إعدادات '.PLUS_LOGO);
tz_def('EDIT_PLUS_SETT', 'تعديل إعدادات '.PLUS_LOGO);
tz_def('EDIT_PLUS_SETT1', 'تعديل إعدادات PLUS');
tz_def('CONF_PLUS_PAYPALEMAIL', 'البريد الإلكتروني لـ<a href="https://www.paypal.com" target="_blank">PayPal</a>');
tz_def('CONF_PLUS_PAYPALEMAIL_TOOLTIP', 'البريد الإلكتروني المحدد عند التسجيل في PayPal.<br><font color="red"><b>يجب أن يكون حساب Business أو Premier!</b></font>');
tz_def('CONF_PLUS_CURRENCY', 'عملة الدفع');
tz_def('CONF_PLUS_CURRENCY_TOOLTIP', 'العملة التي سيتم استخدامها في الدفع.');
tz_def('CONF_PLUS_PACKAGEGOLDA', 'كمية الذهب لباقة &#34;A&#34;');
tz_def('CONF_PLUS_PACKAGEGOLDA_TOOLTIP', 'كمية الذهب الممنوحة عند دفع ثمن باقة &#34;A&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEA', 'سعر باقة &#34;A&#34;');
tz_def('CONF_PLUS_PACKAGEPRICEA_TOOLTIP', 'المبلغ اللازم لدفع تكلفة باقة &#34;A&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDB', 'كمية الذهب لباقة &#34;B&#34;');
tz_def('CONF_PLUS_PACKAGEGOLDB_TOOLTIP', 'كمية الذهب الممنوحة عند دفع ثمن باقة &#34;B&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEB', 'سعر باقة &#34;B&#34;');
tz_def('CONF_PLUS_PACKAGEPRICEB_TOOLTIP', 'المبلغ اللازم لدفع تكلفة باقة &#34;B&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDC', 'كمية الذهب لباقة &#34;C&#34;');
tz_def('CONF_PLUS_PACKAGEGOLDC_TOOLTIP', 'كمية الذهب الممنوحة عند دفع ثمن باقة &#34;C&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEC', 'سعر باقة &#34;C&#34;');
tz_def('CONF_PLUS_PACKAGEPRICEC_TOOLTIP', 'المبلغ اللازم لدفع تكلفة باقة &#34;C&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDD', 'كمية الذهب لباقة &#34;D&#34;');
tz_def('CONF_PLUS_PACKAGEGOLDD_TOOLTIP', 'كمية الذهب الممنوحة عند دفع ثمن باقة &#34;D&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICED', 'سعر باقة &#34;D&#34;');
tz_def('CONF_PLUS_PACKAGEPRICED_TOOLTIP', 'المبلغ اللازم لدفع تكلفة باقة &#34;D&#34;.');
tz_def('CONF_PLUS_PACKAGEGOLDE', 'كمية الذهب لباقة &#34;E&#34;');
tz_def('CONF_PLUS_PACKAGEGOLDE_TOOLTIP', 'كمية الذهب الممنوحة عند دفع ثمن باقة &#34;E&#34;.');
tz_def('CONF_PLUS_PACKAGEPRICEE', 'سعر باقة &#34;E&#34;');
tz_def('CONF_PLUS_PACKAGEPRICEE_TOOLTIP', 'المبلغ اللازم لدفع تكلفة باقة &#34;E&#34;.');
tz_def('CONF_PLUS_ACCDURATION', 'مدة حساب '.PLUS_LOGO);
tz_def('CONF_PLUS_ACCDURATION_TOOLTIP', 'مدة تفعيل ميزة '.PLUS_LOGO.' للحساب عند تفعيلها من قبل اللاعب.');
tz_def('CONF_PLUS_PRODUCTDURATION', 'مدة زيادة الإنتاج بنسبة +25%');
tz_def('CONF_PLUS_PRODUCTDURATION_TOOLTIP', 'مدة تفعيل ميزة زيادة الإنتاج بنسبة +25% للحساب عند تفعيلها من قبل اللاعب.');

//Admin setting - Admin/Templates/config.tpl & editLogSet.tpl
tz_def('LOG_SETT', 'إعدادات السجلات');
tz_def('EDIT_LOG_SETT', 'تعديل إعدادات السجلات');
tz_def('CONF_LOG_BUILD', 'سجل البناء');
tz_def('CONF_LOG_BUILD_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات بناء المباني في القرية.');
tz_def('CONF_LOG_TECHNOLOGY', 'سجل التقنيات');
tz_def('CONF_LOG_TECHNOLOGY_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات تطوير القوات في الحدادة والدرع.');
tz_def('CONF_LOG_LOGIN', 'سجل تسجيل الدخول');
tz_def('CONF_LOG_LOGIN_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات دخول اللاعبين إلى اللعبة.');
tz_def('CONF_LOG_GOLD', 'سجل الذهب');
tz_def('CONF_LOG_GOLD_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات استخدام الذهب داخل اللعبة من قبل اللاعبين.');
tz_def('CONF_LOG_ADMIN', 'سجل الأدمن');
tz_def('CONF_LOG_ADMIN_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات إجراءات المسؤول في لوحة التحكم.');
tz_def('CONF_LOG_WAR', 'سجل الحروب');
tz_def('CONF_LOG_WAR_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات الهجمات على اللاعبين في اللعبة.');
tz_def('CONF_LOG_MARKET', 'سجل السوق');
tz_def('CONF_LOG_MARKET_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات استخدام السوق في اللعبة من قبل اللاعبين.');
tz_def('CONF_LOG_ILLEGAL', 'سجل المخالفات');
tz_def('CONF_LOG_ILLEGAL_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) عرض سجلات المخالفات. (غير معروف بالضبط ماهيتها)');

//Admin setting - Admin/Templates/config.tpl & editNewsboxSet.tpl
tz_def('NEWSBOX_SETT', 'إعدادات صندوق الأخبار');
tz_def('EDIT_NEWSBOX_SETT', 'تعديل إعدادات صندوق الأخبار');
tz_def('EDIT_NEWSBOX1', 'صندوق الأخبار 1');
tz_def('EDIT_NEWSBOX1_TOOLTIP', 'تفعيل أو تعطيل عرض صندوق الأخبار 1. يظهر في صفحة تسجيل الدخول وفي صفحات اللعبة.');
tz_def('EDIT_NEWSBOX2', 'صندوق الأخبار 2');
tz_def('EDIT_NEWSBOX2_TOOLTIP', 'تفعيل أو تعطيل عرض صندوق الأخبار 2. يظهر في صفحة تسجيل الدخول وفي صفحات اللعبة.');
tz_def('EDIT_NEWSBOX3', 'صندوق الأخبار 3');
tz_def('EDIT_NEWSBOX3_TOOLTIP', 'تفعيل أو تعطيل عرض صندوق الأخبار 3. يظهر في صفحة تسجيل الدخول وفي صفحات اللعبة.');

//Admin setting - Admin/Templates/config.tpl SQL Settings
tz_def('SQL_SETTINGS', 'إعدادات SQL');
tz_def('CONF_SQL_HOSTNAME', 'اسم المضيف');
tz_def('CONF_SQL_HOSTNAME_TOOLTIP', 'اسم السيرفر الذي يعمل عليه MySQL (الافتراضي هو: localhost).');
tz_def('CONF_SQL_PORT', 'المنفذ');
tz_def('CONF_SQL_PORT_TOOLTIP', 'منفذ MySQL للاتصال عن بُعد. المنفذ القياسي للاتصال هو: 3306.');
tz_def('CONF_SQL_DBUSER', 'اسم مستخدم قاعدة البيانات');
tz_def('CONF_SQL_DBUSER_TOOLTIP', 'اسم المستخدم للاتصال بقاعدة البيانات.');
tz_def('CONF_SQL_DBPASS', 'كلمة مرور قاعدة البيانات');
tz_def('CONF_SQL_DBPASS_TOOLTIP', 'كلمة مرور المستخدم للاتصال بقاعدة البيانات.');
tz_def('CONF_SQL_DBNAME', 'اسم قاعدة البيانات');
tz_def('CONF_SQL_DBNAME_TOOLTIP', 'اسم قاعدة البيانات التي يتم الاتصال بها.');
tz_def('CONF_SQL_TBPREFIX', 'بادئة الجداول');
tz_def('CONF_SQL_TBPREFIX_TOOLTIP', 'البادئة المستخدمة لجداول قاعدة البيانات.');
tz_def('CONF_SQL_DBTYPE', 'نوع قاعدة البيانات');
tz_def('CONF_SQL_DBTYPE_TOOLTIP', 'نوع قاعدة البيانات المستخدمة.');

//Admin setting - Admin/Templates/config.tpl & editExtraSet.tpl
tz_def('EXTRA_SETT', 'إعدادات إضافية');
tz_def('EDIT_EXTRA_SETT', 'تعديل الإعدادات الإضافية');
tz_def('CONF_EXTRA_LIMITMAIL', 'حد صندوق الرسائل');
tz_def('CONF_EXTRA_LIMITMAIL_TOOLTIP', 'تفعيل (نعم) أو تعطيل (لا) الحد الأقصى لصندوق الرسائل.');
tz_def('CONF_EXTRA_MAXMAIL', 'الحد الأقصى لعدد الرسائل');
tz_def('CONF_EXTRA_MAXMAIL_TOOLTIP', 'العدد الأقصى للرسائل التي يمكن أن تتسع في صندوق الرسائل.');

//Admin setting - Admin/Templates/config.tpl & editAdminInfo.tpl
tz_def('ADMIN_INFO', 'معلومات الأدمن');
tz_def('EDIT_ADMIN_INFO', 'تعديل معلومات الأدمن');
tz_def('CONF_ADMIN_NAME', 'اسم الأدمن');
tz_def('CONF_ADMIN_NAME_TOOLTIP', 'الاسم الخاص بحساب المسؤول.');
tz_def('CONF_ADMIN_EMAIL', 'بريد الأدمن الإلكتروني');
tz_def('CONF_ADMIN_EMAIL_TOOLTIP', 'البريد الإلكتروني الخاص بحساب المسؤول.');
tz_def('CONF_ADMIN_SHOWSTATS', 'إظهار الأدمن في الإحصائيات');
tz_def('CONF_ADMIN_SHOWSTATS_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) عرض حساب المسؤول في الإحصائيات العامة للاعبين.');
tz_def('CONF_ADMIN_SUPPMESS', 'تضمين رسائل الدعم');
tz_def('CONF_ADMIN_SUPPMESS_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) إرسال الرسائل الموجّهة إلى الدعم إلى صندوق رسائل المسؤول.');
tz_def('CONF_ADMIN_RAIDATT', 'السماح بالنهب والهجوم');
tz_def('CONF_ADMIN_RAIDATT_TOOLTIP', 'تفعيل (صحيح) أو تعطيل (خطأ) إمكانية نهب ومهاجمة المسؤول.');

// ===== i18n nouvelles constantes (etape 2) =====
tz_def('TZ_ACTIVATION_AVAILBLE_IN', 'التفعيل متاح خلال:');
tz_def('TZ_ACTIVATION_CODE', 'رمز التفعيل:');
tz_def('TZ_ADD', 'إضافة');
tz_def('TZ_ADD_2', 'إضافة');
tz_def('TZ_ALLIANCE_ID', 'رقم التحالف');
tz_def('TZ_ARRIVED', 'وصل:');
tz_def('TZ_ASSIGN_TO_POSITION', 'تعيين في منصب');
tz_def('TZ_AS_SOON_AS_A_PLAYER_YOU_INVITED_FO', 'بمجرد أن يقوم لاعب دعوته بتأسيس');
tz_def('TZ_ATTACKS', 'الهجمات');
tz_def('TZ_OVERVIEW', 'نظرة عامة');
tz_def('TZ_FORUM', 'المنتدى');
tz_def('TZ_CHAT', 'الدردشة');
tz_def('TZ_NEWS', 'الأخبار');
tz_def('TZ_OPTIONS', 'الخيارات');
tz_def('TZ_BOLD', 'عريض');
tz_def('TZ_BUILDING', 'مبنى');
tz_def('TZ_CATAPULT_TARGET', 'هدف المنجنيق');
tz_def('TZ_CLICK_TO_COPY', 'انقر للنسخ');
tz_def('TZ_CLIMBERS_OF_THE_WEEK', 'متسلقو الأسبوع');
tz_def('TZ_CLOCK', 'الساعة');
tz_def('TZ_CONTINUE_WITH_THE_NEXT_TASK', 'تابع إلى المهمة التالية.');
tz_def('TZ_CREATE', 'إنشاء');
tz_def('TZ_CREATE_A_NEW_LIST', 'إنشاء قائمة جديدة');
tz_def('TZ_DESTINATION', 'الوجهة:');
tz_def('TZ_DOES_NOT_EXIST', 'غير موجود.');
tz_def('TZ_DOWNLOAD', 'تحميل');
tz_def('TZ_EVENT', 'الحدث');
tz_def('TZ_FEATURES_OF_NOVATERRA', 'مزايا نوفاتيرا');
tz_def('TZ_FORUM_NAME', 'اسم المنتدى');
tz_def('TZ_FORWARD', 'إعادة توجيه');
tz_def('TZ_GOLD', 'ذهب.');
tz_def('TZ_HERO_DEF_BONUS', 'البطل (مكافأة الدفاع)');
tz_def('TZ_HERO_FIGHTING_STRENGTH', 'البطل (قوة القتال)');
tz_def('TZ_HERO_OFF_BONUS', 'البطل (مكافأة الهجوم)');
tz_def('TZ_HOUR', 'ساعة');
tz_def('TZ_HOW_IS_IT_DONE', 'كيف يتم ذلك؟');
tz_def('TZ_HRS', 'س');
tz_def('TZ_HRS_2', 'س.');
tz_def('TZ_IF_YOU_GET_NEW_PLAYERS_TO_OPEN_AN', 'إذا جعلت لاعبين جددًا يفتحون حسابًا ويؤسسون قرية ثانية، ستحصل على');
tz_def('TZ_IN_YOUR_POST_BECAUSE_IT_CAN_CAUSE', 'في منشورك لأنه قد يسبب مشكلة مع نظام bbcode.');
tz_def('TZ_ITALIC', 'مائل');
tz_def('TZ_LAST_TARGETS', 'آخر الأهداف:');
tz_def('TZ_LIST_NAME', 'اسم القائمة:');
tz_def('TZ_LOOK_FOR_YOUR_RANK_IN_THE_STATISTI', 'ابحث عن ترتيبك في الإحصائيات وأدخله هنا.');
tz_def('TZ_MACEMAN', 'حامل الصولجان');
tz_def('TZ_MEMBERS', 'الأعضاء');
tz_def('TZ_MEMBER_SINCE', 'عضو منذ');
tz_def('TZ_NAME', 'الاسم:');
tz_def('TZ_NO', 'رقم.');
tz_def('TZ_NOT_CODED_YET', '(لم تتم برمجته بعد)');
tz_def('TZ_NO_EMAIL_RECEIVED', 'لم تستلم بريدًا إلكترونيًا؟');
tz_def('TZ_N_15_GOLD', '15 ذهب');
tz_def('TZ_N_1_INVITE_YOUR_FRIENDS_VIA_EMAIL', '1) ادعُ أصدقاءك عبر البريد الإلكتروني');
tz_def('TZ_N_20_GOLD', '20 ذهب');
tz_def('TZ_N_2_COPY_YOUR_PERSONAL_REF_LINK_AN', '2) انسخ رابط الإحالة الشخصي وشاركه!');
tz_def('TZ_N_50_GOLD', '50 ذهب');
tz_def('TZ_OK_2', 'موافق');
tz_def('TZ_OPEN_FORUM_FOR_THE_FOLLOWING_PLAYE', 'فتح المنتدى للاعبين التاليين');
tz_def('TZ_OPEN_FOR_MORE_ALLIANCES', 'مفتوح لمزيد من التحالفات');
tz_def('TZ_ORDER', 'الترتيب:');
tz_def('TZ_OTHER', 'أخرى');
tz_def('TZ_OWNER', 'المالك:');
tz_def('TZ_PAY_SECURELY_WITH_PAYPAL', 'ادفع بأمان عبر PayPal.');
tz_def('TZ_PLAYERS_BROUGHT_IN', 'اللاعبون الذين تمت دعوتهم');
tz_def('TZ_POST_NEW_THREAD', 'نشر موضوع جديد');
tz_def('TZ_PREVIEW', 'معاينة');
tz_def('TZ_PREVIEW_2', 'معاينة');
tz_def('TZ_PROGRESS_OF_YOUR_INVITED_FRIENDS', 'تقدّم أصدقائك المدعوين');
tz_def('TZ_QUIT_ALLIANCE', 'مغادرة التحالف');
tz_def('TZ_REGISTER_FOR_THE_GAME', 'سجّل في اللعبة');
tz_def('TZ_REGISTRATION', 'التسجيل');
tz_def('TZ_SENT', 'أُرسل:');
tz_def('TZ_SMILIES', 'الرموز التعبيرية');
tz_def('TZ_SMILIES_2', 'الرموز التعبيرية');
tz_def('TZ_STONEMASON_S_LODGE', 'نُزل النحّات');
tz_def('TZ_TAG', 'الوسم:');
tz_def('TZ_TARGET_VILLAGE', 'القرية المستهدفة:');
tz_def('TZ_TASK_10_CRANNY', 'المهمة 10: المخبأ');
tz_def('TZ_TASK_11_TO_TWO', 'المهمة 11: إلى اثنين.');
tz_def('TZ_TASK_12_INSTRUCTIONS', 'المهمة 12: تعليمات');
tz_def('TZ_TASK_13_MAIN_BUILDING', 'المهمة 13: المبنى الرئيسي');
tz_def('TZ_TASK_14_ADVANCED', 'المهمة 14: متقدّم!');
tz_def('TZ_TASK_16_ECONOMY', 'المهمة 16: الاقتصاد');
tz_def('TZ_TASK_16_MILITARY', 'المهمة 16: الجيش');
tz_def('TZ_TASK_17_BARRACKS', 'المهمة 17: الثكنة');
tz_def('TZ_TASK_17_WAREHOUSE', 'المهمة 17: المخزن');
tz_def('TZ_TASK_18_MARKETPLACE', 'المهمة 18: السوق.');
tz_def('TZ_TASK_18_TRAIN', 'المهمة 18: التدريب.');
tz_def('TZ_TASK_19_EVERYTHING_TO_2', 'المهمة 19: كل شيء إلى 2.');
tz_def('TZ_TASK_20_ALLIANCE', 'المهمة 20: التحالف.');
tz_def('TZ_TASK_21_MAIN_BUILDING_TO_LEVEL_5', 'المهمة 21: المبنى الرئيسي إلى المستوى 5');
tz_def('TZ_TASK_22_GRANARY_TO_LEVEL_3', 'المهمة 22: المخزن الزراعي إلى المستوى 3.');
tz_def('TZ_TASK_23_WAREHOUSE_TO_LEVEL_7', 'المهمة 23: المخزن إلى المستوى 7.');
tz_def('TZ_TASK_24_ALL_TO_FIVE', 'المهمة 24: كل شيء إلى خمسة!');
tz_def('TZ_TASK_25_PALACE_OR_RESIDENCE', 'المهمة 25: القصر أم مقر الإقامة؟');
tz_def('TZ_TASK_26_3_SETTLERS', 'المهمة 26: 3 مستوطنين.');
tz_def('TZ_TASK_27_NEW_VILLAGE', 'المهمة 27: قرية جديدة.');
tz_def('TZ_TASK_3_YOUR_VILLAGE_S_NAME', 'المهمة 3: اسم قريتك');
tz_def('TZ_TASK_9_DOVE_OF_PEACE', 'المهمة 9: حمامة السلام');
tz_def('TZ_TERMS', 'الشروط');
tz_def('TZ_THE_ALLIANCE', 'التحالف');
tz_def('TZ_THE_LARGEST_ALLIANCES', 'أكبر التحالفات');
tz_def('TZ_THE_USER', 'المستخدم');
tz_def('TZ_THREAD', 'الموضوع');
tz_def('TZ_TOP_10', 'أفضل 10');
tz_def('TZ_TOTAL', 'الإجمالي');
tz_def('TZ_TOWNHALL', 'دار البلدية');
tz_def('TZ_NOVATERRA_NAME', 'نوفاتيرا');
tz_def('TZ_NOVATERRA', 'نوفاتيرا');
tz_def('TZ_GAME_BRAND', 'نوفاتيرا');
tz_def('TZ_UNDERLINE', 'تسطير');
tz_def('TZ_UNDERLINED', 'مسطّر');
tz_def('TZ_UNKNOWN', 'غير معروف');
tz_def('TZ_UNTIL_THE_NEXT_LEVEL', 'حتى المستوى التالي');
tz_def('TZ_USER_ID', 'رقم المستخدم');
tz_def('TZ_VILLAGE', 'القرية:');
tz_def('TZ_VILLAGE_OVERVIEW', 'نظرة عامة على القرية');
tz_def('TZ_WAIT_INSTANT', 'الانتظار: فوري');
tz_def('TZ_WARNING', 'تحذير:');
tz_def('TZ_WOOD', 'خشب');
tz_def('TZ_YOUR_PERSONAL_REF_LINK', 'رابط الإحالة الشخصي الخاص بك:');
tz_def('TZ_YOU_CAN_T_USE_THE_VALUES', 'لا يمكنك استخدام القيم');
tz_def('TZ_YOU_HAVE_NOT_BROUGHT_IN_ANY_NEW_PL', 'لم تدعُ أي لاعبين جدد بعد.');

// ===== i18n etape 2 (lot suivant) =====
tz_def('TZ_ACCOUNT_IS_ADMIN_OR_MH', 'الحساب أدمن أو صاحب مضيف');
tz_def('TZ_ACCOUNT_IS_NOT_SCHEDULED_FOR_DELET', 'الحساب غير مُجدوَل للحذف');
tz_def('TZ_ACCOUNT_STATEMENT', 'كشف الحساب');
tz_def('TZ_ACTIVATE_VACATION_MODE', 'تفعيل وضع الإجازة');
tz_def('TZ_ADD_RAID', 'إضافة غارة');
tz_def('TZ_ADD_SLOT', 'إضافة فتحة');
tz_def('TZ_ADVANTAGES', 'المزايا');
tz_def('TZ_AFTER_PAYMENT_YOU_WILL_BE_CREDITED', 'بعد الدفع، سيتم إضافة الرصيد إلى حسابك تلقائيًا.');
tz_def('TZ_AGRESOR', 'المعتدي');
tz_def('TZ_ALLIANCE_DIPLOMACY', 'دبلوماسية التحالف');
tz_def('TZ_ALLIANCE_EVENTS', 'أحداث التحالف');
tz_def('TZ_ALLIANCE_FORUM', 'منتدى التحالف');
tz_def('TZ_ALLIANCE_MEMBERS', 'أعضاء التحالف.');
tz_def('TZ_ALLY_CHAT', 'دردشة التحالف');
tz_def('TZ_AM', 'ص');
tz_def('TZ_AND_LATER_YOUR_VILLAGE_COULD_LOOK', '...وفي وقت لاحق يمكن أن تبدو قريتك هكذا.');
tz_def('TZ_AND_QUIT_THE_ALLIANCE_AFTERWARDS', 'ثم مغادرة التحالف بعد ذلك.');
tz_def('TZ_ASSIGN_RIGHTS', 'تعيين الصلاحيات');
tz_def('TZ_ATTENTION_USE_ONLY_TRUSTWORTHY_GRA', 'تنبيه! استخدم فقط حزم رسوميات موثوقة');
tz_def('TZ_AUTHOR', 'المؤلف');
tz_def('TZ_BEGINNERS_PROT', 'حماية المبتدئين');
tz_def('TZ_BEST_PLAYER', 'أفضل لاعب');
tz_def('TZ_BUILDING_SITE', 'موقع البناء');
tz_def('TZ_BUILD_A_PALACE_OR_RESIDENCE_TO_LEV', 'ابنِ قصرًا أو مقر إقامة إلى المستوى 10.');
tz_def('TZ_BUILD_CROPPER', 'بناء قرية محاصيل');
tz_def('TZ_BUY_IT_IN_THE_GOLD_SHOP', 'اشترِها من متجر الذهب');
tz_def('TZ_CELEBRATION_STILL_NEEDS', 'الاحتفال لا يزال يحتاج إلى:');
tz_def('TZ_CENTRE', 'المركز:');
tz_def('TZ_CHANGE_NAME', 'تغيير الاسم');
tz_def('TZ_CHANGE_YOUR_VILLAGE_S_NAME_TO_SOME', 'غيّر اسم قريتك إلى شيء لطيف.');
tz_def('TZ_CLAY_25_5_GOLD', 'طين +25% (5 ذهب)');
tz_def('TZ_CLOSED_FORUM', 'منتدى مغلق');
tz_def('TZ_CLOSE_ADRESSBOOK', 'إغلاق دفتر العناوين');
tz_def('TZ_COMBAT_SIMULATOR', 'محاكي القتال');
tz_def('TZ_COMPLETE_DEMOLITION_10', 'هدم كامل (10');
tz_def('TZ_CONFEDERATION_FORUM', 'منتدى الاتحاد الكونفدرالي');
tz_def('TZ_CONFIRM_WITH_PASSWORD', 'التأكيد بكلمة المرور:');
tz_def('TZ_CONSTRUCT_A_CRANNY', 'ابنِ مخبأً.');
tz_def('TZ_CONSTRUCT_A_GRANARY', 'ابنِ مخزنًا زراعيًا.');
tz_def('TZ_CONSTRUCT_A_RALLY_POINT', 'ابنِ نقطة تجمع.');
tz_def('TZ_CONSTRUCT_A_WOODCUTTER', 'ابنِ منشرة أخشاب.');
tz_def('TZ_CONSTRUCT_BARRACKS', 'ابنِ ثكنة.');
tz_def('TZ_CONSTRUCT_WAREHOUSE', 'ابنِ مخزنًا.');
tz_def('TZ_CP_DAY', 'نقطة ثقافة/يوم');
tz_def('TZ_CROP_25_5_GOLD', 'محاصيل +25% (5 ذهب)');
tz_def('TZ_DATE_AND_TIME', 'التاريخ والوقت');
tz_def('TZ_DEBUG_OFF', 'سجل التصحيح: متوقف');
tz_def('TZ_DEBUG_ON', 'سجل التصحيح: مفعّل');
tz_def('TZ_DECLARE_WAR', 'إعلان الحرب');
tz_def('TZ_DEFAULT', 'الافتراضي:');
tz_def('TZ_DELETE_ACCOUNT', 'حذف الحساب؟');
tz_def('TZ_DIFFERENT_EMAIL_ADDRESS', 'بريد إلكتروني مختلف');
tz_def('TZ_DOWNLOAD_FROM', 'التحميل من');
tz_def('TZ_DO_I_NEED_PLUS_TO_USE_OTHER_FEATUR', 'هل أحتاج إلى Plus لاستخدام الميزات الأخرى؟');
tz_def('TZ_EARN_GOLD', 'اكسب ذهبًا');
tz_def('TZ_EDIT_ANSWER', 'تعديل الإجابة');
tz_def('TZ_EDIT_ANSWER_2', 'تعديل الإجابة');
tz_def('TZ_EDIT_FORUM', 'تعديل المنتدى');
tz_def('TZ_EDIT_SLOT', 'تعديل الفتحة');
tz_def('TZ_EDIT_TOPIC', 'تعديل الموضوع');
tz_def('TZ_ENDS_ON', 'ينتهي في');
tz_def('TZ_ENTER_HOW_MUCH_LUMBER_THE_BARRACKS', 'أدخل تكلفة الثكنة من الخشب');
tz_def('TZ_EU_DD_MM_YY_24H', 'أوروبي (يوم.شهر.سنة 24 ساعة)');
tz_def('TZ_EXAMPLE', 'مثال:');
tz_def('TZ_EXISTING_RELATIONSHIPS', 'العلاقات الحالية');
tz_def('TZ_EXTEND_ALL_RESOURCE_TILES_TO_LEVEL', 'ارفع كل حقول الموارد إلى المستوى 1.');
tz_def('TZ_EXTEND_ALL_RESOURCE_TILES_TO_LEVEL_2', 'ارفع كل حقول الموارد إلى المستوى 2.');
tz_def('TZ_EXTEND_ONE_CLAY_PIT', 'ارفع حفرة طين واحدة.');
tz_def('TZ_EXTEND_ONE_CROPLAND', 'ارفع حقل محاصيل واحد.');
tz_def('TZ_EXTEND_ONE_IRON_MINE', 'ارفع منجم حديد واحد.');
tz_def('TZ_EXTEND_ONE_OF_EACH_RESOURCE_TILE_T', 'ارفع حقلًا واحدًا من كل مورد إلى المستوى 2.');
tz_def('TZ_EXTEND_YOUR_MAIN_BUILDING_TO_LEVEL', 'ارفع مبناك الرئيسي إلى المستوى 3.');
tz_def('TZ_FINISH', 'إنهاء');
tz_def('TZ_FOLLOWING_CAUSES_ARE_POSSIBLE', 'الأسباب المحتملة هي التالية:');
tz_def('TZ_FOLLOW_THIS_LINK_TO', 'اتبع هذا الرابط لـ');
tz_def('TZ_FOREIGN_OFFERS', 'العروض الخارجية');
tz_def('TZ_FORUM_TYPE', 'نوع المنتدى');
tz_def('TZ_FOUND_A_NEW_VILLAGE', 'أسّس قرية جديدة.');
tz_def('TZ_FREE', 'مجانًا!');
tz_def('TZ_FRIEND_EMAIL_COM', 'friend@email.com');
tz_def('TZ_GITHUB', 'Github');
tz_def('TZ_GRAPHIC_PACK_FOUND', 'تم العثور على حزمة الرسوميات.');
tz_def('TZ_GRAPHIC_PACK_SETTINGS', 'إعدادات حزمة الرسوميات');
tz_def('TZ_GREAT_STABLES', 'الإسطبل العظيم');
tz_def('TZ_HERE', 'هنا');
tz_def('TZ_HERE_YOU_CAN_KICK_THE_PLAYERS_FROM', 'هنا يمكنك طرد اللاعبين من تحالفك.');
tz_def('TZ_HERE_YOU_FIND_YOUR_RESOURCE_FIELDS', 'هنا تجد حقول مواردك');
tz_def('TZ_HINT', 'تلميح');
tz_def('TZ_HOW_DO_I_GET_GOLD', 'كيف أحصل على ذهب؟');
tz_def('TZ_INACTIVE_DURING_VACATION', 'غير نشط أثناء الإجازة');
tz_def('TZ_INFORMATION_ON_HAPPENINGS_IN_YOUR', 'معلومات عن الأحداث في قريتك');
tz_def('TZ_INITIATE_PAYMENT_BY_PAYPAL', 'بدء الدفع عبر PayPal');
tz_def('TZ_INVITATIONS', 'الدعوات:');
tz_def('TZ_INVITE_A_PLAYER_INTO_THE_ALLIANCE', 'ادعُ لاعبًا إلى التحالف');
tz_def('TZ_INVITE_BY_E_MAIL_OR_SHARE_YOUR_REF', 'ادعُ عبر البريد الإلكتروني أو شارك رابط الإحالة الخاص بك.');
tz_def('TZ_IN_DESCRIPTION', 'في الوصف.');
tz_def('TZ_IN_THE_VILLAGE_YOU_CAN_BUILD_BUILD', 'في القرية يمكنك بناء المباني');
tz_def('TZ_IRON_25_5_GOLD', 'حديد +25% (5 ذهب)');
tz_def('TZ_ISO_YY_MM_DD_24H', 'ISO (سنة/شهر/يوم 24 ساعة)');
tz_def('TZ_I_ACTIVATED_PLUS_BUT_PRODUCTION_DI', 'فعّلت Plus، لكن الإنتاج لم يزد.');
tz_def('TZ_JOIN_AN_ALLIANCE', 'انضم إلى تحالف');
tz_def('TZ_JOIN_AN_ALLIANCE_OR_FOUND_ONE_ON_Y', 'انضم إلى تحالف أو أسّس واحدًا بنفسك.');
tz_def('TZ_JUL', 'يوليو');
tz_def('TZ_JUN', 'يونيو');
tz_def('TZ_KICK_ALL_MEMBERS', 'طرد كل الأعضاء');
tz_def('TZ_KICK_PLAYER', 'طرد اللاعب:');
tz_def('TZ_LAST_POST', 'آخر مشاركة');
tz_def('TZ_LAST_RAID', 'آخر غارة');
tz_def('TZ_LINKS', 'الروابط:');
tz_def('TZ_LINK_TO_THE_FORUM', 'رابط المنتدى');
tz_def('TZ_LOG_IN', 'تسجيل الدخول');
tz_def('TZ_LUMBER_25_5_GOLD', 'خشب +25% (5 ذهب)');
tz_def('TZ_MAINTENANCE_OFF', 'الصيانة: متوقفة');
tz_def('TZ_MAINTENANCE_ON', 'الصيانة: مفعّلة');
tz_def('TZ_MAJOR_CHANGES', 'تغييرات رئيسية:');
tz_def('TZ_MAP_2', 'الخريطة:');
tz_def('TZ_MAXIMUM_VACATION', 'الحد الأقصى للإجازة:');
tz_def('TZ_MESSAGES', 'الرسائل:');
tz_def('TZ_MESSAGE_3', 'الرسالة');
tz_def('TZ_MILITARY_EVENTS', 'الأحداث العسكرية');
tz_def('TZ_MINIMUM_VACATION', 'الحد الأدنى للإجازة:');
tz_def('TZ_MINOR_CHANGES', 'تغييرات طفيفة:');
tz_def('TZ_MISCELLANEOUS', 'متنوعات');
tz_def('TZ_MORE_GRAPHIC_PACKS', 'المزيد من حزم الرسوميات');
tz_def('TZ_MORE_INFO', 'مزيد من المعلومات:');
tz_def('TZ_MOVE_TOPIC', 'نقل الموضوع');
tz_def('TZ_MULTIHUNTER', 'صياد الحسابات المتعددة:');
tz_def('TZ_NEW_FORUM', 'منتدى جديد');
tz_def('TZ_NONE_OF_THE_PACKAGES_ARE_REFUNDABL', 'لا يمكن استرداد أي من هذه الباقات!');
tz_def('TZ_NOT_ENOUGH_RESOURCE', 'الموارد غير كافية');
tz_def('TZ_NO_MARKETPLACE_ACTIVITY', 'لا يوجد نشاط في السوق');
tz_def('TZ_NO_OWNERSHIP_OF_AN_ARTIFACT_VILLAG', 'لا تملك قرية قطعة أثرية');
tz_def('TZ_NO_OWNERSHIP_OF_A_WONDER_OF_THE_WO', 'لا تملك قرية عجيبة من عجائب الدنيا');
tz_def('TZ_NO_REINFORCING_TROOPS_SENT_RECEIVE', 'لم تُرسَل أو تُستقبَل قوات تعزيز');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_FROM_FORE', 'لا توجد تقارير لعمليات النقل من قرى خارجية.');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_TO_FOREIG', 'لا توجد تقارير لعمليات النقل إلى قرى خارجية.');
tz_def('TZ_NO_REPORTS_FOR_TRANSFERS_TO_OWN_VI', 'لا توجد تقارير لعمليات النقل إلى قراك الخاصة.');
tz_def('TZ_N_14_DAYS', '14 يومًا');
tz_def('TZ_N_1_1_TRADE_WITH_THE_NPC_MERCHANT', 'تجارة 1:1 مع تاجر NPC');
tz_def('TZ_N_1_5_YOUR_VILLAGE', '(1/5) قريتك');
tz_def('TZ_N_1_CHOOSE_A_RESOURCE_FIELD', '1. اختر حقل موارد');
tz_def('TZ_N_1_CHOOSE_BUILDING_SITE', '1. اختر موقع البناء');
tz_def('TZ_N_2_5_RESOURCES', '(2/5) الموارد');
tz_def('TZ_N_2_CONSTRUCT_A_BUILDING', '2. ابنِ مبنى');
tz_def('TZ_N_2_DAYS', 'يومان');
tz_def('TZ_N_2_EXTEND_THE_RESOURCE_FIELD', '2. ارفع حقل الموارد');
tz_def('TZ_N_3_5_BUILDINGS', '(3/5) المباني');
tz_def('TZ_N_4_5_NEIGHBOURS', '(4/5) الجيران');
tz_def('TZ_N_5_5_NAVIGATION', '(5/5) التنقّل');
tz_def('TZ_OFFER_A_CONFEDERATION', 'عرض اتحاد كونفدرالي');
tz_def('TZ_OFFER_NON_AGGRESSION_PACT', 'عرض اتفاقية عدم اعتداء');
tz_def('TZ_OK_3', 'موافق');
tz_def('TZ_ONLINE_USERS', 'المستخدمون المتصلون');
tz_def('TZ_OPTION_1', 'الخيار 1:');
tz_def('TZ_OPTION_2', 'الخيار 2:');
tz_def('TZ_OPTION_3', 'الخيار 3:');
tz_def('TZ_OPTION_4', 'الخيار 4:');
tz_def('TZ_OPTION_5', 'الخيار 5:');
tz_def('TZ_OPTION_6', 'الخيار 6:');
tz_def('TZ_OPTION_7', 'الخيار 7:');
tz_def('TZ_OPTION_8', 'الخيار 8:');
tz_def('TZ_ORDERED_PACKAGE', 'الباقة المطلوبة');
tz_def('TZ_OR_ASK_THE_SERVER_OWNER', 'أو اسأل مالك السيرفر.');
tz_def('TZ_OWN_TEXT', 'نص خاص:');
tz_def('TZ_PALACE_RESIDENCE', 'القصر/مقر الإقامة');
tz_def('TZ_PASSWORD', 'كلمة المرور:');
tz_def('TZ_PAYMENT_ACCOUNT', 'حساب الدفع');
tz_def('TZ_PAYPAL', 'PayPal');
tz_def('TZ_PAYPAL_PACKAGE_A', 'PayPal – الباقة A');
tz_def('TZ_PAYPAL_PACKAGE_B', 'PayPal – الباقة B');
tz_def('TZ_PAYPAL_PACKAGE_C', 'PayPal – الباقة C');
tz_def('TZ_PAYPAL_PACKAGE_D', 'PayPal – الباقة D');
tz_def('TZ_PAYPAL_PACKAGE_E', 'PayPal – الباقة E');
tz_def('TZ_PLAY_NO_TASKS', 'اللعب بدون مهام.');
tz_def('TZ_PLEASE_BUILD_A_MARKETPLACE', 'يرجى بناء سوق.');
tz_def('TZ_PLUS_FUNCTIONS', 'ميزات Plus');
tz_def('TZ_PM', 'م');
tz_def('TZ_POP', 'السكان');
tz_def('TZ_POSITION', 'المنصب:');
tz_def('TZ_PRODUCTION_CLAY', 'الإنتاج: طين');
tz_def('TZ_PRODUCTION_CROP', 'الإنتاج: محاصيل');
tz_def('TZ_PRODUCTION_IRON', 'الإنتاج: حديد');
tz_def('TZ_PRODUCTION_LUMBER', 'الإنتاج: خشب');
tz_def('TZ_PUBLIC_FORUM', 'منتدى عام');
tz_def('TZ_RAGEZONE_COM', 'RageZone.com');
tz_def('TZ_RANKING_OF_ALL_PLAYERS', 'ترتيب جميع اللاعبين');
tz_def('TZ_RATIO', 'النسبة');
tz_def('TZ_READ_YOUR_NEW_MESSAGE', 'اقرأ رسالتك الجديدة.');
tz_def('TZ_REGISTERED', 'مسجَّل');
tz_def('TZ_REGISTERED_PLAYERS', 'اللاعبون المسجَّلون');
tz_def('TZ_RELEASED_BY_NOVATERRA_TEAM', 'إصدار: فريق نوفاتيرا');
tz_def('TZ_RELEASE_BY_NOVATERRA', '[إصدار: نوفاتيرا]');
tz_def('TZ_REPLIES', 'الردود');
tz_def('TZ_REPORTS', 'التقارير:');
tz_def('TZ_REQUIREMENTS', 'المتطلبات');
tz_def('TZ_SCOUT_DEFENCES_AND_TROOPS', 'استطلاع الدفاعات والقوات');
tz_def('TZ_SCOUT_RESOURCES_AND_TROOPS', 'استطلاع الموارد والقوات');
tz_def('TZ_SCRIPT_PRICE', 'سعر السكربت:');
tz_def('TZ_SELECT_ALL', 'تحديد الكل');
tz_def('TZ_SELECT_REWARD', 'اختر مكافأة...');
tz_def('TZ_SELECT_REWARD_2', 'اختر المكافأة:');
tz_def('TZ_SEND_200_CROP_TO_THE_TASKMASTER', 'أرسل 200 محاصيل إلى مسؤول المهام.');
tz_def('TZ_SEND_AND_RECEIVE_MESSAGES', 'إرسال واستقبال الرسائل');
tz_def('TZ_SEND_UNITS_BACK', 'إعادة الوحدات');
tz_def('TZ_SERVER_START', 'بداية السيرفر');
tz_def('TZ_SHOW_THE_LARGE_MAP_IN_AN_EXTRA_WIN', 'إظهار الخريطة الكبيرة في نافذة إضافية.');
tz_def('TZ_SIZE_IN_MB', 'الحجم بالميجابايت');
tz_def('TZ_SLOTS', 'الفتحات');
tz_def('TZ_START_RAID', 'بدء الغارة');
tz_def('TZ_STATISTICS', 'الإحصائيات:');
tz_def('TZ_SUPPORT', 'الدعم:');
tz_def('TZ_SUPPORT_AND_MULTIHUNTER', 'الدعم وصياد الحسابات المتعددة');
tz_def('TZ_SURVEY', 'استطلاع');
tz_def('TZ_TARIFFS', 'الأسعار');
tz_def('TZ_TASK_7_HUGE_ARMY', 'المهمة 7: جيش ضخم!');
tz_def('TZ_TASK_8_EVERYTHING_TO_1', 'المهمة 8: كل شيء إلى 1.');
tz_def('TZ_THANK_YOU_FOR_USING_OUR_VERSION', 'شكرًا لاستخدامك نسختنا!');
tz_def('TZ_THERE_ARE_NO_INCOMING_TROOPS', 'لا توجد قوات قادمة');
tz_def('TZ_THERE_ARE_NO_OUTGOING_TROOPS', 'لا توجد قوات خارجة');
tz_def('TZ_THE_BEST_ALLIANCES_DEF', 'أفضل التحالفات (دفاع)');
tz_def('TZ_THE_BEST_ALLIANCES_OFF', 'أفضل التحالفات (هجوم)');
tz_def('TZ_THE_BUILDING_WAS_COMPLETELY_DEMOLI', 'تم هدم المبنى بالكامل مقابل 10 ذهب!');
tz_def('TZ_THE_EMAIL_ACCOUNT_S_STORAGE_LIMIT', 'تم الوصول إلى الحد الأقصى لتخزين حساب البريد الإلكتروني');
tz_def('TZ_THE_EMAIL_HAS_BEEN_MOVED_TO_THE_SP', 'تم نقل البريد الإلكتروني إلى مجلد البريد المزعج');
tz_def('TZ_THE_EMAIL_WILL_BE_SENT_TO_FOLLOWIN', 'سيتم إرسال البريد الإلكتروني إلى العنوان التالي:');
tz_def('TZ_THE_E_MAIL_ADDRESS_OF_THE_NEW_OWNE', 'البريد الإلكتروني للمالك الجديد.');
tz_def('TZ_THE_GAME_WORLD_ON_WHICH_THE_ACCOUN', 'عالم اللعبة الذي يوجد فيه الحساب');
tz_def('TZ_THE_HERO', 'البطل');
tz_def('TZ_THE_LARGEST_GAULS', 'أكبر الغال');
tz_def('TZ_THE_LARGEST_PLAYERS', 'أكبر اللاعبين');
tz_def('TZ_THE_LARGEST_ROMANS', 'أكبر الرومان');
tz_def('TZ_THE_LARGEST_TEUTONS', 'أكبر التيوتون');
tz_def('TZ_THE_LARGEST_HUNS', 'أكبر الهون');
tz_def('TZ_THE_LARGEST_EGYPTIANS', 'أكبر المصريين');
tz_def('TZ_THE_LARGEST_SPARTANS', 'أكبر الإسبرطيين');
tz_def('TZ_THE_LARGEST_VIKINGS', 'أكبر الفايكنج');
tz_def('TZ_THE_LARGEST_VILLAGES', 'أكبر القرى');
tz_def('TZ_THE_MOST_EXPERIENCED_HEROES', 'أكثر الأبطال خبرة');
tz_def('TZ_THE_MOST_SUCCESSFUL_ATTACKERS', 'أكثر المهاجمين نجاحًا');
tz_def('TZ_THE_MOST_SUCCESSFUL_DEFENDERS', 'أكثر المدافعين نجاحًا');
tz_def('TZ_THE_MULTIHUNTERS_ARE_RESPONSIBLE_F', 'صيادو الحسابات المتعددة مسؤولون عن الامتثال لـ');
tz_def('TZ_THE_NAVIGATION_BAR', 'شريط التنقّل');
tz_def('TZ_THE_NICKNAME_OF_THE_ACCOUNT', 'اسم مستخدم الحساب');
tz_def('TZ_THE_PATH', 'المسار');
tz_def('TZ_THE_VILLAGE', 'القرية');
tz_def('TZ_THIS_FEATURE_IS_NOT_INCLUDED_IN_TH', 'هذه الميزة غير مشمولة في نادي الذهب!');
tz_def('TZ_THIS_IS_HOW_YOU_START', 'هكذا تبدأ...');
tz_def('TZ_THREADS', 'المواضيع');
tz_def('TZ_TIME_PREFERENCE', 'تفضيل الوقت');
tz_def('TZ_TIME_ZONES', 'المناطق الزمنية');
tz_def('TZ_TIP', 'نصيحة');
tz_def('TZ_TOP_10_ALLIANCES', 'أفضل 10 تحالفات');
tz_def('TZ_TOP_10_PLAYERS', 'أفضل 10 لاعبين');
tz_def('TZ_TOTAL_POPULATION', 'إجمالي السكان');
tz_def('TZ_TOTAL_VILLAGES', 'إجمالي القرى');
tz_def('TZ_TO_THE_FIRST_TASK', 'إلى المهمة الأولى.');
tz_def('TZ_TO_THE_REGISTRATION', 'إلى التسجيل');
tz_def('TZ_TRAIN_3_SETTLERS', 'درّب 3 مستوطنين.');
tz_def('TZ_NOVATERRA_DEFAULT', 'نوفاتيرا الافتراضي');
tz_def('TZ_NOVATERRA_GOLD_CLUB', 'نادي نوفاتيرا الذهبي');
tz_def('TZ_NOVATERRA_T4_STYLE', 'نمط نوفاتيرا T4');
tz_def('TZ_TRIBES', 'القبائل');
tz_def('TZ_TYPOS_IN_THE_EMAIL_ADDRESS', 'أخطاء إملائية في البريد الإلكتروني');
tz_def('TZ_UK_DD_MM_YY_12H', 'بريطاني (يوم/شهر/سنة 12 ساعة)');
tz_def('TZ_UPGRADE_ALL_RESOURCES_TILES_TO_LEV', 'ارفع كل حقول الموارد إلى المستوى 5.');
tz_def('TZ_UPGRADE_YOUR_GRANARY_TO_LEVEL_3', 'ارفع مخزنك الزراعي إلى المستوى 3.');
tz_def('TZ_UPGRADE_YOUR_MAIN_BUILDING_TO_LEVE', 'ارفع مبناك الرئيسي إلى المستوى 5.');
tz_def('TZ_UPGRADE_YOUR_WAREHOUSE_TO_LEVEL_7', 'ارفع مخزنك إلى المستوى 7.');
tz_def('TZ_USE', 'استخدام');
tz_def('TZ_USED_FOR_RALLY_POINT_AND_MARKETPLA', 'يُستخدم لنقطة التجمع والسوق:');
tz_def('TZ_USERNAME', 'اسم المستخدم');
tz_def('TZ_USER_DEFINED_GRAPHIC_PACK', 'حزمة رسوميات معرّفة من المستخدم');
tz_def('TZ_USE_IT_FOR_PLUS_OR_ANY_ADVANTAGE', '. استخدمه لـ Plus أو أي ميزة أخرى.');
tz_def('TZ_US_MM_DD_YY_12H', 'أمريكي (شهر/يوم/سنة 12 ساعة)');
tz_def('TZ_UTC_1', 'UTC+1');
tz_def('TZ_UTC_10', 'UTC+10');
tz_def('TZ_UTC_10_2', 'UTC-10');
tz_def('TZ_UTC_11', 'UTC+11');
tz_def('TZ_UTC_11_2', 'UTC-11');
tz_def('TZ_UTC_12', 'UTC+12');
tz_def('TZ_UTC_1_2', 'UTC-1');
tz_def('TZ_UTC_2', 'UTC+2');
tz_def('TZ_UTC_2_2', 'UTC-2');
tz_def('TZ_UTC_3', 'UTC+3');
tz_def('TZ_UTC_3_2', 'UTC-3');
tz_def('TZ_UTC_4', 'UTC+4');
tz_def('TZ_UTC_4_2', 'UTC-4');
tz_def('TZ_UTC_5', 'UTC+5');
tz_def('TZ_UTC_5_2', 'UTC-5');
tz_def('TZ_UTC_6', 'UTC+6');
tz_def('TZ_UTC_6_2', 'UTC-6');
tz_def('TZ_UTC_7', 'UTC+7');
tz_def('TZ_UTC_7_2', 'UTC-7');
tz_def('TZ_UTC_8', 'UTC+8');
tz_def('TZ_UTC_8_2', 'UTC-8');
tz_def('TZ_UTC_9', 'UTC+9');
tz_def('TZ_UTC_9_2', 'UTC-9');
tz_def('TZ_VERSION', 'الإصدار:');
tz_def('TZ_VILLAGE_EXP', 'خبرة القرية');
tz_def('TZ_VILLAGE_YOU_GET', 'قرية، تحصل على');
tz_def('TZ_VILLAGE_YOU_WILL_BE_CREDITED_WITH', 'قرية، سيتم إضافة رصيدك بمقدار');
tz_def('TZ_VIP_ACCOUNT_10_GOLD_7_DAYS', 'حساب VIP (10 ذهب – 7 أيام)');
tz_def('TZ_VISIT', 'زيارة:');
tz_def('TZ_VOTE', 'تصويت');
tz_def('TZ_WAIT_24H', 'الانتظار: 24 ساعة');
tz_def('TZ_WAIT_INSTANT_AFTER_IPN', 'الانتظار: فوري بعد IPN');
tz_def('TZ_WARNING_CATAPULT_WILL', 'تحذير: سيقوم المنجنيق بـ');
tz_def('TZ_WE_STRIVE_TO_ENSURE_SPEEDY_PROCESS', 'نسعى لضمان معالجة سريعة!');
tz_def('TZ_WHY_CAN_T_I_FINISH_SOME_BUILDINGS', 'لماذا لا أستطيع إنهاء بعض المباني بالذهب؟');
tz_def('TZ_WILL_BE_ATTACKED_BY_CATAPULT_S', '(سيتم مهاجمته بواسطة المنجنيق(المنجنيقات))');
tz_def('TZ_WILL_SPAWN_IN', 'سيظهر خلال:');
tz_def('TZ_WILL_SPAWN_IN_ARTIFACTS', 'القطع الأثرية');
tz_def('TZ_WILL_SPAWN_IN_WW', 'قرى عجائب الدنيا');
tz_def('TZ_WILL_SPAWN_IN_PLAN', 'مخططات بناء عجائب الدنيا');
tz_def('TZ_WOODCUTTER_INSTANTLY_COMPLETED', 'تم إنهاء منشرة الأخشاب فورًا.');
tz_def('TZ_WORLD_STATS', 'إحصائيات العالم');
tz_def('TZ_WRITE_THE_CODE', 'اكتب الرمز');
tz_def('TZ_WRONG_DOMAIN_THERE_IS_E_G_NO_AOL_D', 'نطاق خاطئ: مثلًا لا يوجد @aol.de، فقط @aol.com');
tz_def('TZ_YOUR_ACCOUNT_HAS_BEEN_SUCCESSFULLY', 'تم تفعيل حسابك بنجاح.');
tz_def('TZ_YOUR_VILLAGE_AND_YOUR_NEIGHBOURS', 'قريتك وجيرانك');
tz_def('TZ_YOU_CAN_UNDO_THE_REGISTRATION_AND', 'يمكنك التراجع عن التسجيل وإعادة التسجيل بـ');
tz_def('TZ_YOU_CAN_USE_THIS_GOLD_FOR_PLUS_OR', '. يمكنك استخدام هذا الذهب لـ Plus أو أي ميزة ذهب أخرى.');

// ===== Server Milestones (NEW_FUNCTIONS_MILESTONES) =====
tz_def('TZ_SERVER_MILESTONES', 'إنجازات السيرفر');
tz_def('TZ_MILESTONE_NOT_YET', 'لم يتحقق بعد');
tz_def('TZ_MILESTONE_SECOND_VILLAGE', 'أول من أسّس قرية ثانية');
tz_def('TZ_MILESTONE_POPULATION_1000', 'أول من وصل إلى 1,000 نسمة');
tz_def('TZ_MILESTONE_FIRST_ARTIFACT', 'أول من استولى على قطعة أثرية');
tz_def('TZ_MILESTONE_FIRST_WW', 'أول من احتلّ عجيبة من عجائب الدنيا');
tz_def('TZ_MILESTONE_FIRST_WW_PLAN', 'أول من احتلّ مخطط بناء عجيبة من عجائب الدنيا');
tz_def('TZ_MILESTONE_FIRST_ALLIANCE', 'أول تحالف تأسّس');
tz_def('TZ_MILESTONE_FIRST_PVP_CONQUEST', 'أول قرية تم احتلالها من لاعب');
tz_def('TZ_MILESTONE_FIVE_VILLAGES', 'أول من أسّس 5 قرى');
tz_def('TZ_MILESTONE_FOUNDED_BY', 'أسّسها');
tz_def('TZ_MILESTONE_HERO_MASTER', 'أول سيّد أبطال (تجهيزات كاملة من الفئة 3)');

// ===== i18n etape 2 (lot suivant) =====
tz_def('TZ_ACCOUNT_OR_INCREASE_YOUR_RESOURCE', '-الحساب أو زيادة إنتاج مواردك. للقيام بذلك انقر');
tz_def('TZ_ADDITIONALLY_THE_NOVATERRA_TEAM_WILL', 'بالإضافة إلى ذلك، لن يقدّم فريق نوفاتيرا معلومات عن الحظر لأي شخص سوى مالك الحساب.');
tz_def('TZ_ADVERTISEMENT_OF_ANY_KIND_THAT_HAS', 'الإعلانات من أي نوع لم يُسمح بها من فريق نوفاتيرا غير مسموح بها.');
tz_def('TZ_AFTERWARDS_BOTH_PARTIES_MUST_REQUE', 'بعد ذلك، يجب على كلا الطرفين طلب كلمة مرور حسابهما الجديد عبر وظيفة استعادة كلمة المرور.');
tz_def('TZ_AFTER_TAKING_CARE_OF_YOUR_RESOURCE', 'بعد الاهتمام بمصدر مواردك، يمكنك البدء بتوسيع قريتك.');
tz_def('TZ_ANY_SALES_OR_PURCHASES_CONCERNING', 'غير مسموح بأي بيع أو شراء بأموال حقيقية يخص الحسابات، الوحدات، القرى، الموارد، الخدمات أو أي جانب آخر من نوفاتيرا. بيع حسابات نوفاتيرا وكذلك أي نقل غير مباشر (حتى كهدايا) مرتبط بمواقع المزادات أو معاملات مالية أخرى غير مسموح به.');
tz_def('TZ_AS_A_LEADER_YOU_CAN_ONLY_CHANGE_YO', 'بصفتك قائدًا، يمكنك فقط تغيير لقبك. صلاحياتك تبقى عند أقصى حد.');
tz_def('TZ_A_SITTER_CAN_LOG_INTO_YOUR_ACCOUNT', 'يمكن لمدير الحساب تسجيل الدخول إلى حسابك باستخدام اسمك وكلمة مروره. يمكنك تعيين ما يصل إلى مديرين للحساب.');
tz_def('TZ_A_WAREHOUSE_AND_A_GRANARY_ENABLE_Y', 'المخزن والمخزن الزراعي يتيحان لك تخزين المزيد من الموارد. المخبأ يحمي مواردك من السرقة على يد الغزاة الأعداء.');
tz_def('TZ_BECAUSE_YOU_ARE_THE_ALLIANCE_FOUND', 'بما أنك مؤسس التحالف، يجب عليك اختيار مؤسس بديل قبل مغادرتك.');
tz_def('TZ_BEFORE_YOU_EXPAND_YOUR_VILLAGE_S_B', 'قبل توسيع مباني قريتك، يجب عليك تطوير بعض حقول الموارد لزيادة مصدر مواردك.');
tz_def('TZ_BLACKMAILING_PLAYERS_IN_A_WAY_THAT', 'ابتزاز اللاعبين بطريقة تخالف أيًا من قواعد نوفاتيرا وفقًا للشروط والأحكام العامة.');
tz_def('TZ_COMPLETE_CONSTRUCTION_ORDERS_AND_R', 'أكمل أوامر البناء والأبحاث في هذه القرية الآن');
tz_def('TZ_DISPLAYING_BATTLE_REPORTS_OR_MESSA', 'عرض تقارير المعارك أو الرسائل علنًا دون موافقة كلا الطرفين المعنيين.');
tz_def('TZ_EACH_PLAYER_MAY_ONLY_OWN_AND_PLAY', 'يجوز لكل لاعب امتلاك ولعب حساب واحد فقط لكل سيرفر.');
tz_def('TZ_ENGLISH_IS_THE_ONLY_LANGUAGE_TOLER', 'الإنجليزية هي اللغة الوحيدة المسموح بها في الرسائل والأوصاف.');
tz_def('TZ_FOLLOWING_BEHAVIOR_IS_PUNISHABLE_A', 'السلوك التالي يستوجب العقاب وينطبق على جميع الأوصاف، اسم الحساب، أسماء التحالفات، أسماء القرى والرسائل:');
tz_def('TZ_HERE_YOU_CAN_CHANGE_NOVATERRA_S_DISP', 'هنا يمكنك تغيير الوقت المعروض في نوفاتيرا ليتناسب مع منطقتك الزمنية.');
tz_def('TZ_HERE_YOU_CAN_HAVE_A_LOOK_AT_YOUR_V', 'هنا يمكنك إلقاء نظرة على المنطقة المحيطة بقريتك وجيرانك');
tz_def('TZ_HOWEVER_IT_IS_PERMISSIBLE_TO_TRANS', 'ومع ذلك، يُسمح بنقل كلمة مرور حساب إلى شخص أو أشخاص يلعبون على عالم لعبة مختلف (أو لا يلعبون على الإطلاق) من أجل لعب حساب واحد معًا.');
tz_def('TZ_IF_INDIVIDUAL_REGULATIONS_OF_THIS', 'إذا ثبت أن لوائح فردية من مجموعة القواعد هذه غير فعّالة بأي شكل، فذلك لا يؤثر على صلاحية باقي اللوائح في مجموعة القواعد هذه. يلتزم المسؤولون باستبدال اللوائح غير الفعّالة بلوائح جديدة تحل محلها في أسرع وقت ممكن.');
tz_def('TZ_IF_THERE_IS_AN_OFFENCE_AGAINST_THE', 'في حال وجود مخالفة لقواعد اللعبة هذه، سيقوم صيادو الحسابات المتعددة، وعند الضرورة المسؤولون، بحظر الحساب (الحسابات) المعنية وتحديد العقوبة المناسبة. ستتجاوز العقوبات دائمًا الفائدة المكتسبة من مخالفة القواعد.');
tz_def('TZ_IF_YOUR_ALLIANCE_WANTS_TO_USE_AN_E', 'إذا أراد تحالفك استخدام منتدى خارجي، يمكنك إدخال الرابط هنا.');
tz_def('TZ_IMPERSONATING_OFFICIALS_OR_OFFICIA', 'انتحال شخصية المسؤولين أو المناصب الرسمية أمر غير قانوني بأي شكل من الأشكال.');
tz_def('TZ_INCITING_MANIPULATING_ENCOURAGING', 'التحريض أو التلاعب أو التشجيع أو المساعدة أو التآمر مع آخرين لمخالفة أي من قواعد نوفاتيرا غير مسموح به. تنطبق هذه القواعد على اللاعبين الذين سيحذفون حساباتهم أو يقومون حاليًا بحذفها دون استثناء.');
tz_def('TZ_INTO_YOUR_PROFILE_BY_ADDING_IT_TO', 'إلى ملفك الشخصي عن طريق إضافته إلى أحد حقلي الوصف.');
tz_def('TZ_IN_ORDER_TO_ACTIVATE_YOUR_ACCOUNT', 'لتفعيل حسابك، أدخل الرمز أو انقر على الرابط في بريدك الإلكتروني.');
tz_def('TZ_IN_ORDER_TO_PLAY_NOVATERRA_YOU_NEED', 'للعب نوفاتيرا، تحتاج إلى بريد إلكتروني صالح يمكن إرسال رمز التفعيل إليه. هناك حالات استثنائية قد لا يصل فيها هذا البريد الإلكتروني.');
tz_def('TZ_IN_ORDER_TO_QUIT_THE_ALLIANCE_YOU', 'لمغادرة التحالف، يجب عليك إدخال كلمة مرورك مرة أخرى لأسباب أمنية.');
tz_def('TZ_IN_ORDER_TO_SWITCH_AN_ACCOUNT_WITH', 'لتبديل حساب مع شخص آخر على نفس عالم اللعبة، يجب على كلا الشخصين إرسال رسالة بريد إلكتروني إلى admin@novaterra.com من عنوان البريد الإلكتروني المسجّل حاليًا للحساب. يجب أن تحتوي الرسالة على المعلومات التالية:');
tz_def('TZ_IN_THE_BEGINNING_YOUR_SMALL_VILLAG', 'في البداية، ستحتوي قريتك الصغيرة على مبنى واحد فقط.');
tz_def('TZ_IN_NOVATERRA_YOU_ARE_NOT_ALONE_YOU_I', 'في نوفاتيرا لست وحدك؛ فأنت تتفاعل مع آلاف اللاعبين الآخرين في عالم نوفاتيرا.');
tz_def('TZ_IT_S_PART_OF_DIPLOMATIC_ETIQUETTE', 'من آداب الدبلوماسية التحدث إلى تحالف آخر قبل إرسال عرض.');
tz_def('TZ_MULTIACCOUNTS_ON_THE_SPEED_SERVER', 'قد يتم حذف الحسابات المتعددة على السيرفر السريع والحسابات المتعددة التي يقل عدد سكانها عن 100 فور اكتشافها دون إنذار مسبق.');
tz_def('TZ_NOW_YOU_HAVE_FULFILLED_ALL_PREREQU', 'الآن استوفيت جميع المتطلبات اللازمة لبناء سوق.');
tz_def('TZ_NOW_YOU_KNOW_EVERYTHING_IMPORTANT', 'الآن تعرف كل ما هو مهم عن نوفاتيرا. بعد التسجيل يمكنك البدء باللعب!');
tz_def('TZ_NO_EVERY_GOLD_FEATURE_WORKS_STANDA', 'لا. كل ميزة ذهب تعمل بشكل مستقل طالما لديك ذهب كافٍ.');
tz_def('TZ_NO_REAL_WORLD_POLITICS_ARE_ALLOWED', 'لا يُسمح بسياسة العالم الحقيقي في الأسماء والرسائل والأوصاف.');
tz_def('TZ_PARTICIPATION_IN_ABUSIVE_DEFAMATOR', 'المشاركة في لغة مسيئة، تشهيرية، متحيزة جنسيًا، عنصرية أو بذيئة؛ التقليل من شأن أي دين، عرق، أمة، جنس، فئة عمرية، أو ميول جنسية؛ تهديد شخص بأفعال في الحياة الواقعية.');
tz_def('TZ_PLAYERS_MAY_TALK_TO_THE_MULTIHUNTE', 'يجوز للاعبين التحدث مع صياد الحسابات المتعددة الذي حظرهم أو مع أحد المسؤولين عبر الرسائل داخل اللعبة أو البريد الإلكتروني. لا يجوز مناقشة الحظر أو العقوبات أو الحذف علنًا (مثل الدردشة أو المنتديات). يجب كتابة الاستئنافات باللغة الإنجليزية.');
tz_def('TZ_PLEASE_ENTER_YOUR_OLD_AND_YOUR_NEW', 'يرجى إدخال عنوان بريدك الإلكتروني القديم والجديد. ستتلقى بعدها رمزًا في كلا العنوانين يجب عليك إدخاله هنا.');
tz_def('TZ_PLUS_DOES_NOT_INCLUDE_PRODUCTION_B', 'لا يشمل Plus مكافآت الإنتاج. يجب عليك شراء +25% لكل مورد على حدة في');
tz_def('TZ_PROGRAM_ERRORS_ALSO_CALLED_BUGS_MA', 'لا يجوز استغلال أخطاء البرنامج (المعروفة أيضًا بالأخطاء البرمجية) لتحقيق فائدة. قد يؤدي إساءة الاستخدام إلى معاقبة الحساب.');
tz_def('TZ_RESIDENCE_PALACE_AND_WORLD_WONDER', 'قرى مقر الإقامة، القصر، وعجيبة الدنيا مستثناة لأسباب تتعلق بأسلوب اللعب.');
tz_def('TZ_RESOURCES_BUILDINGS_VILLAGES_OR_TR', 'الموارد أو المباني أو القرى أو القوات المفقودة أثناء فترة التعليق لا تُحتسب كعقوبة ولن يتم تعويضها من فريق نوفاتيرا. لا يحق لأي لاعب المطالبة بدفع أو تعويض عن وقت Plus/الذهب المفقود بسبب التعليق.');
tz_def('TZ_SHOOT_WITH_A_NORMAL_ATTACK_THEY_DO', 'يطلق بهجوم عادي (لا يطلق مع الغارات!)');
tz_def('TZ_SOMETIMES_THE_EMAIL_IS_MOVED_TO_TH', 'أحيانًا يتم نقل البريد الإلكتروني إلى مجلد البريد المزعج. لمزيد من المساعدة انقر');
tz_def('TZ_THERE_ARE_FOUR_DIFFERENT_TYPES_OF', 'يوجد أربعة أنواع مختلفة من الموارد في نوفاتيرا: الخشب، الطين، الحديد والمحاصيل.');
tz_def('TZ_THERE_IS_NO_COMPENSATION_FOR_DAMAG', 'لا يوجد تعويض عن الأضرار التي يسببها مدير الحساب. أصحاب الحسابات مسؤولون بالكامل عن الأفعال التي يقوم بها مديرو حساباتهم المختارون. في حال عدم التزام مديري حساب ما بهذه القواعد والشروط والأحكام العامة لنوفاتيرا، يجوز محاسبة كل من صاحب الحساب والمدير ومعاقبتهما.');
tz_def('TZ_THERE_IS_NO_COMPENSATION_FOR_DAMAG_2', 'لا يوجد تعويض عن الأضرار التي يسببها شخص يعرف كلمة مرور حساب. يخضع الشخص المستلم لكلمة المرور لقواعد نوفاتيرا وكذلك الشروط والأحكام العامة.');
tz_def('TZ_THERE_IS_NO_SPECIAL_TREATMENT_FOR', 'لا توجد معاملة خاصة لمستخدمي نوفاتيرا Plus/الذهب فيما يخص قواعد اللعبة، لا في الوقت اللازم لمعالجة الحالة ولا في العقوبة.');
tz_def('TZ_THE_E_MAIL_ADDRESS_USED_FOR_THE_RE', 'يجب أن يكون عنوان البريد الإلكتروني المستخدم لتسجيل الحساب تحت السيطرة الشخصية والحصرية للشخص الذي سجّل الحساب. الشخص الذي يملك عنوان البريد الإلكتروني المسجّل حاليًا لحساب ما يُعتبر مالك الحساب، بغض النظر عن أي اتفاقيات شخصية أو تحالفية أخرى. مالك الحساب مسؤول بالكامل عن جميع الإجراءات التي يقوم بها الحساب.');
tz_def('TZ_THE_FOLLOWING_SET_OF_RULES_ARE_IN', 'مجموعة القواعد التالية مرتبطة بالشروط والأحكام العامة لنوفاتيرا. يجب عليك الاطلاع على الشروط والأحكام العامة للتحقق مما هو مسموح وما هو ممنوع، خاصة في حالة حساب تم حظره لمخالفة قاعدة ما.');
tz_def('TZ_THE_GAME_MUST_BE_PLAYED_WITH_AN_UN', 'يجب لعب اللعبة باستخدام متصفح إنترنت غير معدَّل. استخدام السكربتات أو البوتات التي تُؤتمت إجراءات الحساب يخالف القواعد.');
tz_def('TZ_THE_OWNER_OF_AN_ACCOUNT_MAY_NOT_TR', 'لا يجوز لمالك الحساب نقل كلمة مرور الحساب إلى أي شخص يلعب على نفس عالم اللعبة (السيرفر). بالإضافة إلى ذلك، اختيار نفس كلمة المرور عمدًا على نفس عالم اللعبة كشخص آخر أمر غير قانوني؛ وتُعتبر أي من هذه الأفعال حسابات متعددة، كما هو محدد في هذه القواعد.');
tz_def('TZ_THE_PLAYERS_IN_YOUR_SURROUNDING_AR', 'اللاعبون في محيطك هم الأكثر أهمية بالنسبة لك. بفضل الخريطة لديك نظرة عامة جيدة عمّن هم.');
tz_def('TZ_THE_REGISTRATION_WAS_SUCCESSFUL_IN', 'تم التسجيل بنجاح. في الدقائق القليلة القادمة ستتلقى بريدًا إلكترونيًا يحتوي على معلومات الوصول.');
tz_def('TZ_THE_SUPPORT_IS_A_GROUP_OF_EXPERIEN', 'الدعم هو مجموعة من اللاعبين ذوي الخبرة الذين سيجيبون على أسئلتك بكل سرور.');
tz_def('TZ_THE_NOVATERRA_TEAM_RESERVES_THE_RIGH', 'يحتفظ فريق نوفاتيرا بحق تغيير القواعد في أي وقت.');
tz_def('TZ_TO_BRING_IN_NEW_PLAYERS_INVITE_THE', 'لجلب لاعبين جدد، ادعُهم عبر البريد الإلكتروني أو شارك رابط الإحالة الخاص بك.');
tz_def('TZ_VACATION_MODE_CANNOT_BE_ACTIVATED', 'لا يمكن تفعيل وضع الإجازة – المتطلبات غير مستوفاة');
tz_def('TZ_WE_WILL_SHOW_YOU_HOW_TO_EXPAND_YOU', 'سنُريك كيفية توسيع قريتك لتصبح مدينة قوية ومزدهرة في الصفحة التالية.');
tz_def('TZ_YOU_CAN_DELETE_YOUR_ACCOUNT_HERE_A', 'يمكنك حذف حسابك هنا. بعد بدء عملية الإلغاء ستستغرق ثلاثة أيام لإتمام إلغاء حسابك. يمكنك إلغاء هذه العملية خلال أول 24 ساعة.');
tz_def('TZ_YOU_DON_T_HAVE_ENOUGH_GOLD_YOU_NEE', 'ليس لديك ذهب كافٍ. تحتاج إلى 10 ذهب للهدم الفوري.');
tz_def('TZ_YOU_HAVE_BEEN_ENTERED_AS_SITTER_ON', 'تم تسجيلك كمدير حساب على الحسابات التالية. يمكنك إلغاء ذلك بالنقر على X الأحمر.');
// ===== i18n composites (Simulateur) =====
tz_def('TZ_NUMBER', 'رقم');
tz_def('TZ_LVL', 'المستوى');

// ===== i18n reliquat multi-lignes =====
tz_def('TZ_ML_LEADER_DEMOLITION_EMBASSY', 'نظرًا لأنك قائد تحالفك، لا يمكن بدء هدم السفارة الحالية، لأنها ما زالت تحمل كل');
tz_def('TZ_ML_CHANGELOG_120BUGS', 'تم إصلاح أكثر من 120 خطأ، وإصلاح القطع الأثرية بالكامل، وإصلاح المنجنيقات والكباش بالكامل، وأتمتة قرى التتار/القطع الأثرية/عجائب الدنيا/مخططات مباني عجائب الدنيا، ومعادلة معركة جديدة (أكثر دقة من القديمة)، وتفعيل تلقائي للقطع الأثرية، وإعادة كتابة الكثير من الكود. اطّلع على المزيد في ملف readme!');
tz_def('TZ_ML_CHANGELOG_NEWFORUM', 'نظام منتدى جديد، معادلة صياد شبيهة بنوفاتيرا، إصلاح كبير البنائين، طابور بحث مزدوج في الحدادة والدرع مع Plus');
tz_def('TZ_ML_GOLD_RESERVE', 'بشكل أساسي، نحجز كمية الذهب المطلوبة فور إتمام الدفع. إذا واجهت أي مشكلة، يرجى إرسال بريد إلكتروني إلى');
tz_def('TZ_ML_GPACK_NOTFOUND', 'تعذر العثور على حزمة الرسوميات. قد يكون ذلك لأحد الأسباب التالية:');
tz_def('TZ_ML_GPACK_ALLOWED_SAVE', 'تعرض حزمة رسوميات مسموح بها. احفظ اختيارك لتفعيلها.');
tz_def('TZ_ML_GPACK_ALTER_APPEARANCE', 'باستخدام حزمة رسوميات يمكنك تغيير مظهر نوفاتيرا. يمكنك اختيار واحدة من القائمة أو إدخال مسار مخصص.');
tz_def('TZ_ML_QUESTIONS_MULTIHUNTER', '. إذا كانت لديك أسئلة أو تريد الإبلاغ عن مخالفة، يمكنك مراسلة صياد الحسابات المتعددة.');
tz_def('TZ_ML_AWAY_NO_SITTER', 'إذا كنت تخطط للغياب لفترة طويلة ولا ترغب في تعيين مدير حساب، يمكنك تفعيل');
tz_def('TZ_ML_ACCOUNT_FROZEN', '. خلال هذه الفترة يكون حسابك مجمّدًا فعليًا. لن تتقدم الموارد أو القوات أو الأبحاث ولن يمكن مهاجمة قراك. تذكّر أن هذا يجمّد نوفاتيرا فقط، وليس الوقت.');
tz_def('TZ_ML_ACTIVATION_RESENT', '. سيتم بعدها إرسال رمز التفعيل مرة أخرى');
tz_def('TZ_ML_TWO_SITTERS_RIGHT', 'يحق لكل لاعب تسمية مديرَي حساب يمكنهما لعب الحساب أثناء غياب المالك. يجب على مديري الحساب لعب الحساب الذي يديرونه لتحقيق أقصى فائدة له. يُعاقب على إساءة استخدام هذه الميزة.');
tz_def('TZ_ML_SAME_COMPUTER_SITTER', 'اللاعبون الذين يستخدمون نفس الجهاز ويريدون الوصول لحساب بعضهم البعض يجب أن يستخدموا ميزة مدير الحساب.');
tz_def('TZ_ML_POLITE_TONE', 'يجب على الجميع التواصل بنبرة مهذبة وودية. يجوز لصيادي الحسابات المتعددة تغيير الملفات الشخصية وأسماء القرى غير اللائقة دون إنذار.');
tz_def('TZ_ML_MATERIAL_UNDERAGE', 'نشر أو نقل أي محتوى غير مناسب للقاصرين.');

// ===== i18n reliquat final =====
tz_def('TZ_NO_BEGINNER_PROT2', 'لا توجد حماية مبتدئين');
tz_def('TZ_SERVER_RUNNING_ON', '▶ السيرفر يعمل على');

// ===== task A: re-wired reverted templates =====
tz_def('TZ_HERO', "البطل");
tz_def('TZ_SEND_UNITS_BACK_TO', "إرسال القوات عائدة إلى");
tz_def('TZ_CONFIRM_DEMOLISH_COMPLETE_1', "هل أنت متأكد من رغبتك في الهدم الكامل لـ ");
tz_def('TZ_CONFIRM_DEMOLISH_COMPLETE_2', " مقابل 10 ذهب؟\nسيختفي المبنى فورًا، ولا يمكن التراجع عن ذلك.");
tz_def('TZ_CONFIRM_LAST_EMBASSY_L3', "تحذير!\n\nأنت على وشك هدم آخر سفارة من المستوى 3!\n\nبما أنك قائد تحالفك ولا يوجد أعضاء إضافيون متبقون، سيتم حل التحالف بمجرد اكتمال الهدم.");
tz_def('TZ_CONFIRM_LAST_EMBASSY_L1', "تحذير!\n\nأنت على وشك هدم آخر سفارة لديك!\n\nبما أنك عضو في تحالف، ستغادر ذلك التحالف تلقائيًا بمجرد اكتمال الهدم.");
tz_def('TZ_TRADE', "التجارة");

// ===== reports section (noticeClass tooltips) =====
tz_def('TZ_RPT_SCOUT', "تقرير استطلاع");
tz_def('TZ_RPT_WON_ATK_NOLOSS', "فوز كمهاجم دون خسائر");
tz_def('TZ_RPT_WON_ATK_LOSS', "فوز كمهاجم بخسائر");
tz_def('TZ_RPT_LOST_ATK_LOSS', "خسارة كمهاجم بخسائر");
tz_def('TZ_RPT_WON_DEF_NOLOSS', "فوز كمدافع دون خسائر");
tz_def('TZ_RPT_WON_DEF_LOSS', "فوز كمدافع بخسائر");
tz_def('TZ_RPT_LOST_DEF_LOSS', "خسارة كمدافع بخسائر");
tz_def('TZ_RPT_LOST_DEF_NOLOSS', "خسارة كمدافع دون خسائر");
tz_def('TZ_RPT_REINF_ARRIVED', "وصلت التعزيزات");
tz_def('TZ_RPT_WOOD_DELIVERED', "تم توصيل الخشب");
tz_def('TZ_RPT_CLAY_DELIVERED', "تم توصيل الطين");
tz_def('TZ_RPT_IRON_DELIVERED', "تم توصيل الحديد");
tz_def('TZ_RPT_CROP_DELIVERED', "تم توصيل المحاصيل");
tz_def('TZ_RPT_WON_SCOUT_ATK', "فوز في الاستطلاع كمهاجم");
tz_def('TZ_RPT_LOST_SCOUT_ATK', "خسارة في الاستطلاع كمهاجم");
tz_def('TZ_RPT_WON_SCOUT_DEF', "فوز في الاستطلاع كمدافع");
tz_def('TZ_RPT_LOST_SCOUT_DEF', "خسارة في الاستطلاع كمدافع");

// ===== report topic connectors (display-time localization) =====
tz_def('TZ_RT_ATTACKS', "يهاجم");
tz_def('TZ_RT_REINFORCEMENT', "تعزيزات");
tz_def('TZ_RT_SCOUTS', "يستطلع");
tz_def('TZ_RT_SEND_RES_TO', "إرسال موارد إلى");
tz_def('TZ_RT_WAS_ATTACKED', "تعرضت للهجوم");
tz_def('TZ_RT_REINF_IN', "تعزيزات في");
tz_def('TZ_RT_ELDERS_REINF', "تعزيزات قرية الشيوخ");
tz_def('TZ_RT_UNOCC_OASIS', "واحة غير مأهولة");

// ===== settler reports (issue #178) =====
tz_def('TZ_RT_NEW_VILLAGE', "تم تأسيس قرية جديدة");
tz_def('TZ_RT_VALLEY_OCCUPIED', "فشل الاستيطان (الوادي مأهول)");
tz_def('TZ_NEW_VILLAGE_MSG', "لقد أسّست قرية جديدة:");
tz_def('TZ_VALLEY_OCCUPIED_MSG', "لم يتمكن مستوطنوك من الاستقرار هنا - الوادي مأهول بالفعل من لاعب آخر. هم في طريقهم للعودة.");

// ===== player profile page (#189) =====
tz_def('AGE', 'العمر');
tz_def('CAPITAL_TAG', 'العاصمة');
tz_def('WRITE_MESSAGE_UNAVAILABLE', 'كتابة رسالة غير متاحة');
tz_def('PROFILE_FLAG_ADMIN', 'هذا اللاعب مسؤول (أدمن).');
tz_def('PROFILE_FLAG_MULTIHUNTER', 'هذا اللاعب صياد حسابات متعددة.');
tz_def('PROFILE_FLAG_BANNED', 'هذا اللاعب محظور.');
tz_def('PROFILE_FLAG_VACATION', 'هذا اللاعب في وضع الإجازة.');

// ===== in-game manual overview page (#189) =====
tz_def('BUILDINGS', 'المباني');
tz_def('INFRASTRUCTURE', 'البنية التحتية');
tz_def('FORWARD', 'التالي');
tz_def('NEW_FEATURES', 'الميزات الجديدة');
tz_def('NEW_WINDOW', 'نافذة جديدة');
tz_def('MANUAL_INTRO', 'يمنحك هذا الدليل داخل اللعبة فرصة الاطلاع على المعلومات المهمة في أي وقت.');
tz_def('MANUAL_NEW_FEATURES_DESC', 'هذه ميزات جديدة لن تجدها في النسخة الأصلية من لعبة نوفاتيرا T3.6. هنا يمكنك التعرف على كل الميزات الجديدة بمزيد من التفصيل.');
tz_def('MANUAL_FAQ', 'الأسئلة الشائعة لنوفاتيرا');
tz_def('MANUAL_FAQ_DESC', 'يقدم هذا الدليل داخل اللعبة معلومات موجزة فقط. مزيد من المعلومات متوفر على');

// ===== manual: building pages (PR-A) =====
tz_def('CONSTRUCTION_TIME', "وقت البناء");
tz_def('MANUAL_FOR_LEVEL_1', "للمستوى 1:");
tz_def('CROP_CONSUMPTION', "استهلاك المحاصيل");
tz_def('NONE', "لا يوجد");
tz_def('MANUAL_DESC_TRAPPER', "يحمي الصياد قريتك بأفخاخ مخفية بعناية. هذا يعني أن الأعداء غير الحذرين يمكن حبسهم ولن يتمكنوا من إيذاء قريتك بعد الآن.");
tz_def('MANUAL_ONE_TRAP_COSTS', "يكلف الفخ الواحد");
tz_def('MANUAL_TRAPPER_FREE', "لا يمكن تحرير القوات بغارة. عند تحرير القوات بهجوم عادي ناجح، يتم إصلاح ثلث الأفخاخ تلقائيًا. إذا حرر مالك الأفخاخ الأسرى فيمكن إصلاح كل الأفخاخ.");
tz_def('MANUAL_TRAPPER_GAULS', "لاحظ أن هذا المبنى لا يمكن بناؤه إلا من قِبل الغال.");
tz_def('MANUAL_DESC_WOODCUTTER', "يقطع الحطّاب الأشجار لإنتاج الخشب. كلما زدت من مستوى الحطّاب زاد الخشب الذي ينتجه.<br /><br />ببناء منشرة يمكنك زيادة الإنتاج أكثر.");
tz_def('MANUAL_DESC_CLAYPIT', "يُجمع الطين من حفر الطين. كلما ارتفع مستوى حفرة الطين، زاد إنتاج الطين.");
tz_def('MANUAL_DESC_IRONMINE', "هنا يجمع عمال المناجم معدن الحديد الثمين. بزيادة مستوى المنجم تزيد إنتاجه من الحديد. ببناء مصهر حديد يمكنك زيادة الإنتاج أكثر.<br /><br />");
tz_def('MANUAL_DESC_CROPLAND', "هنا يُنتج طعام سكانك. بزيادة مستوى الحقل الزراعي تزيد إنتاجه من المحاصيل.<br /><br />ببناء مطحنة حبوب ومخبز يمكنك زيادة الإنتاج أكثر.");
tz_def('MANUAL_DESC_SAWMILL', "يُعالَج هنا الخشب الذي يقطعه حطّابوك. حسب مستواها يمكن للمنشرة زيادة إنتاجك من الخشب حتى 25 بالمئة.");
tz_def('MANUAL_DESC_BRICKYARD', "يحوّل مصنع الطوب الطين إلى طوب. حسب مستواه يمكن لمصنع الطوب زيادة إنتاجك من الطين حتى 25 بالمئة.");
tz_def('MANUAL_DESC_IRONFOUNDRY', "يصهر مصهر الحديد الحديد. حسب مستواه يمكن لمصهر الحديد زيادة إنتاجك من الحديد حتى 25 بالمئة.");
tz_def('MANUAL_DESC_GRAINMILL', "تحوّل مطحنة الحبوب الحبوب إلى دقيق. حسب مستواها يمكن لمطحنة الحبوب زيادة إنتاجك من المحاصيل حتى 25 بالمئة.");
tz_def('MANUAL_DESC_BAKERY', "يحوّل المخبز الدقيق إلى خبز. بالإضافة إلى مطحنة الحبوب يمكن أن تصل زيادة إنتاج المحاصيل إلى 50 بالمئة إجماليًا.");
tz_def('MANUAL_DESC_WAREHOUSE', "تُخزَّن موارد الخشب والطين والحديد في المستودع. بزيادة مستواه تزيد سعة مستودعك.");
tz_def('MANUAL_DESC_GRANARY', "تُخزَّن المحاصيل المنتَجة في مزارعك في الحظيرة. بزيادة مستواها تزيد سعة الحظيرة.");
tz_def('MANUAL_DESC_BLACKSMITH', "تُحسَّن أسلحة محاربيك في أفران صهر الحداد. بزيادة مستواها يمكنك طلب تصنيع أسلحة أفضل.");
tz_def('MANUAL_DESC_ARMOURY', "يُحسَّن درع محاربيك في أفران صهر مصنع الدروع. بزيادة مستواه يمكنك طلب تصنيع دروع أفضل.");
tz_def('MANUAL_DESC_MAINBUILDING', "يعيش كبار بنّائي القرية في المبنى الرئيسي. كلما زاد مستواه، أسرع كبار البنّائين في إتمام بناء المباني الجديدة.");
tz_def('MANUAL_DESC_RALLYPOINT', "هنا تجتمع قوات قريتك. من هنا يمكنك إرسالها للغزو أو الغارة أو التعزيز إلى قرى أخرى.<br /><br />لا يمكن بناء نقطة التجمع إلا على الأرض الخضراء أسفل المبنى الرئيسي وإلى يمينه.");
tz_def('MANUAL_DESC_MARKETPLACE', "في السوق يمكنك تبادل الموارد مع لاعبين آخرين. كلما ارتفع مستواه، زادت الموارد التي يمكن نقلها في نفس الوقت.");
tz_def('MANUAL_DESC_EMBASSY', "السفارة مكان للدبلوماسيين. عند المستوى 1 يمكنك الانضمام إلى تحالف، وبعد رفعها إلى المستوى 3 يمكنك حتى تأسيس تحالف بنفسك.<br /><br />الحد الأقصى لعدد الأعضاء الممكن في التحالف يساوي 3 أضعاف مستوى أعلى سفارة داخل ذلك التحالف. لذا مع سفارة من المستوى 20 يمكن أن يصل عدد أعضاء التحالف إلى 60 لاعبًا.");
tz_def('MANUAL_DESC_BARRACKS', "يمكن تدريب المشاة في الثكنات. كلما ارتفع مستواها، زادت سرعة تدريب القوات.");
tz_def('MANUAL_DESC_STABLE', "يمكن تدريب الفرسان في الإسطبل. كلما ارتفع مستواه، زادت سرعة تدريب القوات.");
tz_def('MANUAL_DESC_WORKSHOP', "يمكن بناء أسلحة الحصار كالمنجنيقات والكباش في الورشة. كلما ارتفع مستواها، زادت سرعة إنتاج الوحدات.");
tz_def('MANUAL_DESC_ACADEMY', "يمكن تطوير أنواع وحدات جديدة في الأكاديمية. بزيادة مستواها يمكنك طلب أبحاث وحدات أفضل.");
tz_def('MANUAL_DESC_CRANNY', "يُستخدم المخبأ لإخفاء جزء على الأقل من مواردك عند مهاجمة القرية. لا يمكن سرقة هذه الموارد.<br /><br />عند المستوى 1 يحتفظ المخبأ بـ 100 وحدة من كل مورد. مخابئ الغال ضعف حجم مخابئ الآخرين.<br /><br />ملاحظات<br />في T3 المخبأ فعّال بنسبة 66% ضد التوتون.<br />في T3.5 المخبأ فعّال بنسبة 80% ضد التوتون.");
tz_def('MANUAL_DESC_TOWNHALL', "في دار البلدية يمكنك إقامة احتفالات فخمة. تزيد هذه الاحتفالات من نقاط ثقافتك.<br /><br />نقاط الثقافة ضرورية لتأسيس أو غزو قرى جديدة. كل مبنى ينتج نقاط ثقافة وكلما ارتفع مستواه زاد إنتاجه. بالاحتفالات يمكنك زيادة هذا الإنتاج لفترة قصيرة.");
tz_def('MANUAL_DESC_RESIDENCE', "مقر الإقامة قصر صغير يعيش فيه الملك أو الملكة عند زيارة القرية. يحمي مقر الإقامة القرية من الأعداء الراغبين في غزوها.");
tz_def('MANUAL_DESC_PALACE', "يعيش ملك أو ملكة الإمبراطورية في القصر. لا يمكن أن يوجد أكثر من قصر واحد في مملكتك في وقت واحد. تحتاج إلى قصر لإعلان قرية كعاصمة لك.<br /><br />لا يمكن غزو العاصمة. بالإضافة إلى ذلك، العاصمة هي المكان الوحيد الذي يمكن فيه توسيع حقول الموارد بعد المستوى 10 والمكان الوحيد الذي يمكن فيه بناء محجر الحجّار.");
tz_def('MANUAL_DESC_TREASURY', "تُحفظ ثروات إمبراطوريتك في الخزينة. لا يمكن للخزينة تخزين سوى قطعة أثرية واحدة.<br /><br />تحتاج إلى خزينة من المستوى 10 لقطعة أثرية صغيرة، أو المستوى 20 لقطعة كبيرة.");
tz_def('MANUAL_DESC_TRADEOFFICE', "في مكتب التجارة تُحسَّن عربات التجّار وتُجهَّز بخيول قوية. كلما ارتفع مستواه، زادت قدرة تجّارك على الحمل.");
tz_def('MANUAL_DESC_GREATBARRACKS', "تتيح لك الثكنات الكبرى بناء وحدات أكثر في نفس الوقت لكن بتكلفة ثلاثة أضعاف الأصل.<br /><br />لا يمكن بناؤها في العاصمة.");
tz_def('MANUAL_DESC_GREATSTABLE', "يتيح لك الإسطبل الكبير بناء وحدات أكثر في نفس الوقت لكن بتكلفة ثلاثة أضعاف الأصل.<br /><br />لا يمكن بناؤه في العاصمة.");
tz_def('MANUAL_DESC_STONEMASON', "محجر الحجّار خبير في قطع الحجر. كلما زاد توسيع المبنى، زادت متانة مباني القرية.<br /><br />لا يمكن بناؤه إلا في العاصمة.");
tz_def('MANUAL_DESC_BREWERY', "يُخمَّر ميد لذيذ في المصنع ويُشرب لاحقًا من قِبل الجنود أثناء الاحتفالات.<br /><br />تجعل هذه المشروبات جنودك أكثر شجاعة وقوة في المعارك (1% لكل مستوى). للأسف تقل قدرة الزعماء على الإقناع ولا تستطيع المنجنيقات إلا إحداث إصابات عشوائية.<br /><br />لا يمكن بناؤه إلا من قِبل التوتون وفي عاصمتهم فقط. يؤثر على الإمبراطورية بأكملها.");
tz_def('MANUAL_DESC_HEROSMANSION', "في قصر البطل يمكنك تدريب بطل. لهذا تحتاج جنديًا عاديًا سيصبح البطل، وبالتالي تحتاج ثكنات أو إسطبل.<br /><br />عندما يصل المبنى للمستويات 10 و15 و20 يمكنك ضم 1 و2 و3 واحات غير مأهولة ببطلك. حسب الواحة ستحصل على زيادة في إنتاج مورد معين (أو حتى موردين لبعض الواحات).");
tz_def('MANUAL_DESC_GREATWAREHOUSE', "تُخزَّن موارد الخشب والطين والحديد في مستودعك. يوفر لك المستودع الكبير مساحة أكبر ويحافظ على مواردك أكثر جفافًا وأمانًا من المستودع العادي.<br /><br />لا يمكن بناء هذا المبنى إلا في قرى التتار القديمة أو بقطع أثرية تتارية خاصة.");
tz_def('MANUAL_DESC_GREATGRANARY', "تُخزَّن المحاصيل المنتَجة من مزارعك في الحظيرة. توفر لك الحظيرة الكبرى مساحة أكبر وتحافظ على محاصيلك أكثر جفافًا وأمانًا من العادية.<br /><br />لا يمكن بناء هذا المبنى إلا في قرى التتار القديمة أو بقطع أثرية تتارية خاصة.");
tz_def('MANUAL_DESC_WONDER', "تمثل عجيبة الدنيا فخر الإبداع. فقط الأقوى والأغنى قادرون على بناء مثل هذا التحفة والدفاع عنها ضد الأعداء الحاسدين.<br /><br />لا يمكن تشييد عجائب الدنيا إلا في قرى التتار القديمة. كما يلزم مخطط بناء. بدءًا من المستوى 50 يلزم مخطط إضافي، يجب أن يملكه لاعب آخر في نفس التحالف.");
tz_def('MANUAL_DESC_HORSEDRINKING', "يهتم مسقى الخيول برفاهية خيولك وبالتالي يزيد أيضًا من سرعة تدريبها.<br /><br />يقلل مسقى الخيول من استهلاك المحاصيل بمقدار واحد للجنود التالين: فرسان المندوبين (Equites Legati) من المستوى 10، فرسان الإمبراطور (Equites Imperatoris) من المستوى 15، وفرسان قيصر (Equites Caesaris) من المستوى 20.<br /><br />لا يمكن بناء مسقى الخيول إلا من قِبل الرومان.");
tz_def('MANUAL_DESC_GREATWORKSHOP', "في الورشة الكبرى يمكن بناء أسلحة الحصار كالمنجنيقات والكباش، وإن كانت بثلاثة أضعاف تكلفة الوحدة القياسية. كلما ارتفع مستواها، أسرع إنتاج الوحدات.<br /><br />لا يمكن بناؤها في العاصمة.");

tz_def('MANUAL_ATTACK_VALUE', "قيمة الهجوم");
tz_def('MANUAL_DEF_INFANTRY', "الدفاع ضد المشاة");
tz_def('MANUAL_DEF_CAVALRY', "الدفاع ضد الفرسان");
tz_def('MANUAL_VELOCITY', "السرعة");
tz_def('MANUAL_FIELDS_HOUR', "حقل/ساعة");
tz_def('MANUAL_CAN_CARRY', "يمكنه حمل");
tz_def('MANUAL_TRAINING_DURATION', "مدة التدريب");
tz_def('MANUAL_NPC_NATARS', "الوصف مخصص للرجوع إليه فقط. التتار قبيلة NPC خالصة ولا يمكن لعبها من قِبل اللاعبين.");
tz_def('MANUAL_NPC_NATURE', "الوصف مخصص للرجوع إليه فقط. قبيلة الطبيعة هي قبيلة NPC خالصة ولا يمكن لعبها من قِبل اللاعبين.");
tz_def('MANUAL_UDESC_ANIMAL_EXP', "تُحدَّد الخبرة التي يكتسبها البطل من قتل حيوان بناءً على استهلاك ذلك الحيوان. هذا يعني أن %s سيمنح نقطة خبرة واحدة فقط بمقدار %d.");
tz_def('MANUAL_UDESC_1', "الليجونير هو المشاة البسيط متعدد الاستخدامات في الإمبراطورية الرومانية. بفضل تدريبه المتوازن، يجيد الدفاع والهجوم معًا. لكنه لن يبلغ أبدًا مستويات الوحدات الأكثر تخصصًا.");
tz_def('MANUAL_UDESC_2', "البريتوريون هم حرس الإمبراطور ويدافعون عنه بأرواحهم. بما أن تدريبهم متخصص للدفاع، فهم مهاجمون ضعفاء جدًا.");
tz_def('MANUAL_UDESC_3', "الإمبيريان هو المهاجم الأقوى في الإمبراطورية الرومانية. سريع وقوي، وكابوس لكل المدافعين. لكن تدريبه مكلف ويستغرق وقتًا طويلًا.");
tz_def('MANUAL_UDESC_4', "فرسان المندوبين (Equites Legati) هم قوات الاستطلاع الرومانية. سريعون نسبيًا ويمكنهم التجسس على قرى العدو لرؤية الموارد والقوات. <br /><br /> إذا لم يوجد كشافة أو فرسان مندوبين أو مستكشفون في القرية المستطلَعة، يمر الاستطلاع دون أن يُلاحظ.");
tz_def('MANUAL_UDESC_5', "فرسان الإمبراطور (Equites Imperatoris) هم الفرسان القياسيون في الجيش الروماني ومسلحون جيدًا. ليسوا الأسرع لكنهم رعب للأعداء غير المستعدين. يجب أن تتذكر دائمًا أن إعالة الفارس وحصانه ليست رخيصة.");
tz_def('MANUAL_UDESC_6', "فرسان قيصر (Equites Caesaris) هم الفرسان الثقيلون لروما. مدرَّعون جيدًا جدًا ويحدثون أضرارًا كبيرة، لكن كل هذا الدرع والسلاح له ثمن. بطيئون، يحملون موارد أقل، وإطعامهم مكلف.");
tz_def('MANUAL_UDESC_7', "الكبش هو سلاح دعم ثقيل لمشاتك وفرسانك. مهمته تدمير أسوار العدو وبالتالي زيادة فرص قواتك في التغلب على تحصينات العدو.");
tz_def('MANUAL_UDESC_8', "المنجنيق سلاح بعيد المدى ممتاز؛ يُستخدم لتدمير حقول ومباني قرى العدو. لكن بدون قوات مرافقة يكاد يكون بلا دفاع، فلا تنسَ إرسال بعض قواتك معه. <br /><br /> امتلاك نقطة تجمع بمستوى عالٍ يجعل منجنيقاتك أكثر دقة ويمنحك خيار استهداف مبانٍ إضافية للعدو. مع نقطة تجمع من المستوى 10 يمكن استهداف كل مبنى باستثناء المخبأ ومحجر الحجّار والصياد. <br /> ملاحظة: يمكن للمنجنيقات المشتعلة إصابة المخبأ أو الفخاخ أو محجر الحجّار عند الاستهداف العشوائي.");
tz_def('MANUAL_UDESC_9', "السيناتور هو الزعيم المختار للقبيلة. متحدث بارع ويعرف كيف يقنع الآخرين. قادر على إقناع قرى أخرى بالقتال مع الإمبراطورية. <br /><br /> في كل مرة يتحدث فيها السيناتور إلى سكان قرية، تنخفض قيمة ولاء العدو حتى تصبح القرية ملكك.");
tz_def('MANUAL_UDESC_10', "المستوطنون مواطنون شجعان وجريئون ينتقلون خارج القرية بعد جلسة تدريب طويلة لتأسيس قرية جديدة تكريمًا لك. <br /><br /> بما أن الرحلة وتأسيس القرية الجديدة صعبان جدًا، يلتزم ثلاثة مستوطنين بالبقاء معًا. يحتاجون إلى أساس قدره 750 وحدة من كل مورد.");
tz_def('MANUAL_UDESC_11', "حاملو الهراوات هم أرخص وحدة في نوفاتيرا. يُدرَّبون بسرعة ولديهم قدرات هجومية متوسطة لكن درعهم ليس الأفضل. حاملو الهراوات شبه عزّل أمام الفرسان وسيُداسون بسهولة.");
tz_def('MANUAL_UDESC_12', "في جيش التوتون مهمة الرمّاح هي الدفاع. بارع بشكل خاص ضد الفرسان بفضل طول سلاحه. <br /><br /> لكن لا تستخدمه كوحدة هجومية لأن قدراته الهجومية منخفضة جدًا.");
tz_def('MANUAL_UDESC_13', "هذه أقوى وحدة مشاة عند التوتون. قوي في الهجوم والدفاع معًا لكنه أبطأ وأغلى من الوحدات الأخرى.");
tz_def('MANUAL_UDESC_14', "يتحرك الكشاف بعيدًا أمام قوات التوتون للحصول على انطباع عن قوة العدو وقراه. يتحرك سيرًا على الأقدام، مما يجعله أبطأ من نظرائه الرومان أو الغال. يستطلع وحدات العدو وموارده وتحصيناته. <br /><br /> إذا لم يوجد كشافة أو مستكشفون أو فرسان مندوبين للعدو في القرية المستطلَعة فيمر الاستطلاع دون أن يُلاحظ.");
tz_def('MANUAL_UDESC_15', "بما أن الفرسان المقدَّسين (Paladins) مجهزون بدروع ثقيلة، فهم وحدة دفاعية ممتازة. سيجد المشاة صعوبة خاصة في اختراق درعه. <br /><br /> للأسف قدراتهم الهجومية منخفضة نسبيًا وسرعتهم، مقارنة بوحدات الفرسان الأخرى، أقل من المتوسط. تدريبهم يستغرق وقتًا طويلًا جدًا ومكلف نسبيًا.");
tz_def('MANUAL_UDESC_16', "فارس التوتون محارب هائل يجلب الخوف واليأس لأعدائه. في الدفاع يتميز ضد فرسان العدو. لكن تكلفة تدريبه وإطعامه استثنائية.");
tz_def('MANUAL_UDESC_17', "الكبش سلاح دعم ثقيل لمشاتك وفرسانك. مهمته تدمير أسوار العدو وبالتالي زيادة فرص قواتك في التغلب على تحصينات العدو.");
tz_def('MANUAL_UDESC_18', "المنجنيق سلاح بعيد المدى ممتاز؛ يُستخدم لتدمير حقول ومباني قرى العدو. لكن بدون قوات مرافقة يكاد يكون بلا دفاع، فلا تنسَ إرسال بعض قواتك معه. <br /><br /> امتلاك نقطة تجمع بمستوى عالٍ يجعل منجنيقاتك أكثر دقة ويمنحك خيار استهداف مبانٍ إضافية للعدو. مع نقطة تجمع من المستوى 10 يمكن استهداف كل مبنى باستثناء المخبأ ومحجر الحجّار والصياد. <br /> ملاحظة: يمكن للمنجنيقات إصابة المخبأ أو الفخاخ أو محاجر الحجّار عند الاستهداف العشوائي.");
tz_def('MANUAL_UDESC_19', "من بين صفوفهم يختار التوتون زعيمهم. للاختيار لا تكفي الشجاعة والاستراتيجية؛ يجب أيضًا أن تكون متحدثًا رائعًا، إذ إن الهدف الأساسي للزعيم هو إقناع سكان القرى الأجنبية بالانضمام إلى قبيلته. <br /><br /> كلما تحدث الزعيم أكثر إلى سكان قرية، انخفض ولاء القرية أكثر حتى تنضم أخيرًا إلى قبيلة الزعيم.");
tz_def('MANUAL_UDESC_21', "بما أن الفالانكس مشاة، فهو رخيص وسريع الإنتاج. <br /><br /> رغم أن قوته الهجومية منخفضة، إلا أنه في الدفاع قوي جدًا ضد المشاة والفرسان معًا.");
tz_def('MANUAL_UDESC_22', "حاملو السيوف أغلى من الفالانكس، لكنهم وحدة هجومية. <br /><br /> دفاعيًا هم ضعفاء نسبيًا، خاصة ضد الفرسان.");
tz_def('MANUAL_UDESC_23', "المستكشف هو وحدة الاستطلاع عند الغال. سريعون جدًا ويمكنهم التقدم بحذر نحو وحدات العدو أو موارده أو مبانيه للتجسس عليها. <br /><br /> إذا لم يوجد كشافة أو فرسان مندوبين أو مستكشفون في القرية المستطلَعة، يمر الاستطلاع دون أن يُلاحظ.");
tz_def('MANUAL_UDESC_24', "رعود ثيوتات (Theutates Thunders) فرسان سريعون وقويون جدًا. يمكنهم حمل كمية كبيرة من الموارد مما يجعلهم مغيرين ممتازين أيضًا. <br /><br /> في الدفاع قدراتهم متوسطة في أفضل الأحوال.");
tz_def('MANUAL_UDESC_25', "هذه وحدة الفرسان المتوسطة رائعة في الدفاع. الغرض الرئيسي من فارس الدرويد هو الدفاع ضد مشاة العدو. تكلفته وإعالته مرتفعتان نسبيًا.");
tz_def('MANUAL_UDESC_26', "الهيدوان (Haeduans) هم السلاح الأمثل للغال في الهجوم والدفاع ضد الفرسان. قليلون يستطيعون مجاراتهم في هذه النقاط. <br /><br /> لكن تدريبهم وتجهيزهم مكلفان جدًا أيضًا. يأكلون 3 وحدات محاصيل في الساعة، لذا يجب أن تفكر جيدًا فيما إذا كانوا يستحقون ذلك.");
tz_def('MANUAL_UDESC_28', "المنجنيق العملاق (Trebuchet) سلاح بعيد المدى ممتاز؛ يُستخدم لتدمير حقول ومباني قرى العدو. لكن بدون قوات مرافقة يكاد يكون بلا دفاع، فلا تنسَ إرسال بعض قواتك معه. <br /><br /> امتلاك نقطة تجمع بمستوى عالٍ يجعل منجنيقاتك أكثر دقة ويمنحك خيار استهداف مبانٍ إضافية للعدو. مع نقطة تجمع من المستوى 10 يمكن استهداف كل مبنى باستثناء المخبأ ومحاجر الحجّار والصياد. <br /> ملاحظة: يمكن للمنجنيق العملاق إصابة المخبأ أو الفخاخ أو محاجر الحجّار عند الاستهداف العشوائي.");
tz_def('MANUAL_UDESC_29', "لكل قبيلة مقاتل قديم وذو خبرة يستطيع حضوره وخطبه إقناع سكان قرى العدو بالانضمام إلى قبيلته. <br /><br /> كلما تحدث الزعيم القبلي أكثر أمام أسوار قرية العدو، انخفض ولاؤها أكثر حتى تنضم إلى قبيلة الزعيم القبلي.");
tz_def('MANUAL_UDESC_31', "الجرذان رخيصة وتتكاثر بسرعة كبيرة لكنها لا تستطيع حمل الكثير.<br /><br />هذه على الأرجح أرخص وحدات الطبيعة وأقبحها.");
tz_def('MANUAL_UDESC_44', "يستخدم التتار أسراب الطيور لجمع المعلومات عن أعدائهم. بفضل ميزة الاستطلاع من الجو، يكاد يكون من المستحيل إيقاف فرق استطلاع التتار؛ من ناحية أخرى، حتى القروي البسيط يمكنه بسهولة ملاحظة الأسراب المصفّرة والريشية.");
tz_def('MANUAL_UDESC_41', "رماحهم الطويلة والحادة تُستخدم كخط دفاع رئيسي في أي معركة. حرّاس الرماح التتار محاربون جريئون يستخدمون براعتهم لإسقاط فرسان العدو بسرعة والقضاء عليهم.");
tz_def('MANUAL_UDESC_42', "الامتدادات الشبيهة بالأشواك على خوذاتهم وأساوِرهم وأجزاء أكتاف دروعهم تمنح المحاربين الشائكين اسمهم. الرجال الذين يقاتلون للتتار كمحاربين شائكين مثابرون ومدرَّبون جيدًا، يقدمون معركة دامية لأي شخص يتحلى بالحماقة الكافية لمهاجمتهم.");
tz_def('MANUAL_UDESC_43', "يُعبَده شعبه ويخشاه أعداؤه، يقاتل الحارس بلا مطية لكنه مع ذلك أحد أقيم جنود الجيش التتاري، بفضل تنوع مهاراته. يُعتبرون مقاتلين مدرَّبين جيدًا، ولا يتركون لأعدائهم فرصًا تُذكر للفوز. بفضل دروعهم الثقيلة، يمكن استخدامهم أيضًا كقوات دفاع قوية وموثوقة.");
tz_def('MANUAL_UDESC_45', "لا تفوح إلا رائحة الموت والفناء عندما يمتطي فرسان الفأس خيولهم استعدادًا للحرب. بمهارة مثل الفلاح الذي يستخدم منجله للحصاد، يلوّح فارس الفأس بنصله الجبار. عادةً ما تكفي ضربة واحدة لقطع رأس الخصم وإصراخ من حوله رعبًا.");
tz_def('MANUAL_UDESC_46', "فقط أمهر وأقوى محاربي التتار يبقون على قيد الحياة بعد التدريب ليصبحوا فرسانًا تتاريين. رؤيتهم يقاتلون تملأ المرء بالرهبة وتُظهر معنى الحرب الحقيقية. يستخدمون سيوفهم كما لو كانت جزءًا من أذرعهم وأيديهم ويستخدمون دروعهم كامتداد طبيعي لأجسادهم. حتى الخيول التي يمتطونها مُربّاة ومدرَّبة خصيصًا - لا يمكن لأي حصان عادي أن يتحمل الدرع الذي ترتديه خيول الفرسان، ناهيك عن الفارس نفسه، ويظل قادرًا على الذهاب إلى الحرب. وصلت همسات مجدهم حتى إلى أبعد الممالك، ناشرةً الخوف والرعب.");
tz_def('MANUAL_UDESC_47', "لا تعرف قبيلة أخرى غير التتار كيفية استخدام هذه المخلوقات الرائعة لأغراضهم. لا سور ولا سياج يستطيع الصمود أمام هجمات فيل الحرب. آلة قتل متحركة، تسحق كل ما يحاول الوقوف في طريقها أو معارضتها.");
tz_def('MANUAL_UDESC_48', "حتى كمهندسين، كان التتار ناجحين جدًا. صنعوا آلات الحرب قبل أي شخص آخر بوقت طويل وأتقنوها منذ ذلك الحين من كل النواحي. البالستا، سلاح ضخم شبيه بالقوس المعترض، يطلق مقذوفاته بقوة لا يستطيع أي سور أو درع صدّها. عندما يفكك المهندسون السلاح لنقله إلى ساحة المعركة التالية، لا يبقى عادة سوى الأنقاض حيث أصابت المقذوفات.");
tz_def('MANUAL_UDESC_49', "مزيج من الخوف الخالص والإعجاب والرهبة يحرّك القرويين عندما يتحدث إليهم الإمبراطور التتاري. هذه الشخصية المهيبة والمجهَّزة جيدًا تدرك تمامًا تأثيرها على الآخرين وتعرف كيف تُخضع قرية بأكملها بخطبة واحدة.");
tz_def('MANUAL_UDESC_50', "رحّالة جريئون وكبار بنّائين، مدفوعون بحماس للعمل ومعرفة كل سر صغير عن استصلاح الأرض وبناء القصور وتحصين القرى، يخرج المستوطنون التتار في مجموعات من ثلاثة للمطالبة بالأرض باسم أسيادهم التتار.");

// ===== manual: new-features pages (PR-C) =====
tz_def('MANUAL_NF_ENABLED', "مفعّل");
tz_def('MANUAL_NF_DISABLED', "معطّل");
tz_def('MANUAL_NF_T_11', "عرض الواحة في الملف الشخصي");
tz_def('MANUAL_NF_T_12', "رسالة دعوة التحالف");
tz_def('MANUAL_NF_T_13', "آليات جديدة للتحالف والسفارة");
tz_def('MANUAL_NF_T_14', "رسالة موضوع منتدى جديد");
tz_def('MANUAL_NF_T_15', "صور القبائل في الملف الشخصي");
tz_def('MANUAL_NF_T_16', "صور صيادي الحسابات المتعددة في الملف الشخصي");
tz_def('MANUAL_NF_T_17', "عرض القطعة الأثرية في الملف الشخصي");
tz_def('MANUAL_NF_T_18', "عرض عجيبة الدنيا في الملف الشخصي");
tz_def('MANUAL_NF_T_20', "أهداف المنجنيق");
tz_def('MANUAL_NF_T_21', "دليل عن الطبيعة والتتار");
tz_def('MANUAL_NF_T_22', "وضع الروابط المباشرة");
tz_def('MANUAL_NF_T_23', "وسام لاعب مخضرم");
tz_def('MANUAL_NF_T_24', "وسام لاعب مخضرم 5 سنوات");
tz_def('MANUAL_NF_T_25', "وسام لاعب مخضرم 10 سنوات");
tz_def('MANUAL_NF_T_26', "أوسمة خاصة");
tz_def('MANUAL_NF_D_11', "إذا كانت هناك واحة مستولى عليها في القرية، ستُعرض في الملف الشخصي للاعب أمام القرية المقابلة مع نوع المورد المناسب ومكافأة الإنتاج. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_12', "إذا أُرسِلت دعوة لأحد اللاعبين للانضمام إلى التحالف، سيُبلَّغ اللاعب برسالة داخل اللعبة.");
tz_def('MANUAL_NF_D_13', "<h2>مقدمة</h2><br> آليات السفارة والتحالف كانت دائمًا تبدو لي وكأنها نوع من الغش. خاصة أن مبنى السفارة له \"سعة\" محددة، مما يعني أن 3/6/9/12/... وحتى 60 عضوًا فقط يمكن أن يكونوا في التحالف، حسب مستوى سفارتك. <br><br> هذا كله جيد، لكن بمجرد أن تصل بسفارتك إلى المستوى 20 وتبلغ 60 عضوًا في التحالف، كنت حرًا في هدم المبنى بالكامل ولا يحدث شيء أبدًا. لن تستطيع تبديل التحالفات لكن هذا كل ما في الأمر. لم تعد خاصية السعة للسفارة مطبَّقة. لو كانت مطبَّقة، لما استطعت هدمها حتى بمستوى واحد إلى 19 - لأنه مع 60 عضوًا كاملًا، لن تستطيع السفارة استيعابهم عند المستوى 19 بعد الآن. <br><br> لذا قررت أن أضيف بعض التوابل إلى اللعبة، لأجعل السفارة قطعة شطرنج أكثر وضوحًا على اللوحة. <br><br> <h2>آليات جديدة</h2><br> لجعل الأمور مثيرة، طوّرت مجموعة قواعد جديدة كاملة لهدم وتدمير السفارة في المعركة. الأمر معقد بعض الشيء لكنه يعكس خاصية \"السعة\" للتحالف بشكل مثالي. <br><br> التغيير الرئيسي هو أن الناس لا يستطيعون هدم سفاراتهم فعليًا دون تأثير جانبي يتمثل في العقاب بمجرد أن ينخفض المستوى كثيرًا. بالنسبة لعضو التحالف، هذا يعني أن سفارته يجب ألا تنخفض أبدًا عن المستوى 1. إذا حدث ذلك، سيُحذَّر ثم يُزال من تحالفه. <br><br> بالمثل، بالنسبة لمؤسسي التحالف، هذا يمثل تحديًا أكبر فعليًا، لأنهم من يحتاج للحفاظ على سير تحالفهم بسلاسة. بالنسبة لهم، لن يُسمح بهدم السفارة تحت مستوى ما زال قادرًا على استيعاب العدد الحالي لأعضاء التحالف. <br><br> الآن، في الحالة الغريبة عندما يهاجم لاعبون/تحالفات أخرى فعليًا قرية المؤسس التي تقع فيها سفارته، ثم يستهدفون تلك السفارة بمنجنيقاتهم وكباشهم - يمكن لهذا الموقف أن يسبب الكثير من المتاعب. إذا لم توجد سفارات أخرى في قرى مؤسسين آخرين بمستوى كافٍ لاستيعاب جميع أعضاء التحالف، فقد يتفرق التحالف. الاستثناء الوحيد هو إذا كان لدى أي عضو آخر في التحالف سفارة متطورة بشكل كافٍ - في هذه الحالة سيُنتخَب ذلك العضو تلقائيًا لمنصب قيادي وسينقذ التحالف. إذا لم يُعثر على مثل هذا اللاعب، سيتفرق التحالف بالكامل. <br><br> <h2>معلومات مفصّلة</h2><br> لمزيد من المعلومات المرئية والمتعمقة حول كيفية عمل هذا النظام الجديد، يمكنك زيارة هذا <a href=\"https://docs.google.com/presentation/d/1KN1qVAlxVj7aAN6F9QkRai1oliajfxKPIaJ4MSodUac/edit#slide=id.p\" target=\"_blank\">العرض التقديمي على Google</a>.");
tz_def('MANUAL_NF_D_14', "إذا ترك اللاعب رسالة واحدة على الأقل في موضوع المنتدى، سيتلقى رسائل داخل اللعبة تُعلمه أن شخصًا آخر ترك رسالة جديدة في نفس الموضوع (أي أنه \"مشترك\" فيه تقنيًا).");
tz_def('MANUAL_NF_D_15', "باستخدام هذه الميزة، يمكن لأي لاعب أن يضيف إلى وصف ملفه الشخصي صورة قبيلته مع وصف صغير (الرومان، التوتون، الغال).");
tz_def('MANUAL_NF_D_16', "في الواقع، هذه ميزة غير مفيدة للاعبين، لأنها مخصصة فقط للمسؤولين وصيادي الحسابات المتعددة. بها، سيتمكن المسؤولون وصيادو الحسابات المتعددة من إضافة صور مثيرة للاهتمام مع أوصافها إلى أوصاف ملفاتهم الشخصية.");
tz_def('MANUAL_NF_D_17', "إذا كانت هناك قطعة أثرية في إحدى القرى، سيُعرض ذلك في الملف الشخصي للاعب أمام القرية المقابلة التي توجد فيها. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_18', "إذا كان في القرية ملعب لبناء عجيبة الدنيا، سيُعرض ذلك في الملف الشخصي مقابل القرية المقابلة. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_19', "يتيح لك وضع الإجازة حماية إمبراطوريتك من أي أفعال عدائية من لاعبين آخرين أثناء غيابك الطويل. صحيح أن لذلك شروطًا معينة ستؤدي إلى تأخر في تطوير إمبراطوريتك. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_20', "إذا أرسلت المنجنيقات في هجوم عادي، يمكنك رؤية الأهداف التي حددتها للهجوم في نقطة التجمع. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_21', "بمساعدة هذه المعلومات في الدليل، يمكنك العثور على وصف لقوى الطبيعة والتتار.");
tz_def('MANUAL_NF_D_22', "موقع الروابط المباشرة يتغير. في نوفاتيرا T3.6 الأصلية، توضع الروابط المباشرة في القائمة اليمنى أسفل قائمة القرى وهو أمر غير مريح تمامًا. إذا فُعِّل هذا الخيار، ستوضع الروابط المباشرة في القائمة اليسرى وهو أكثر ملاءمة بكثير.");
tz_def('MANUAL_NF_D_23', "الوسام الذي يُمنح للاعبين الذين يخسرون بنفس عنوان البريد الإلكتروني منذ 3 سنوات أو أكثر. يمكن إضافته إلى وصف الملف الشخصي. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_24', "الوسام الذي يُمنح للاعبين الذين يخسرون بنفس عنوان البريد الإلكتروني منذ 5 سنوات أو أكثر. يمكن إضافته إلى وصف الملف الشخصي. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_25', "الوسام الذي يُمنح للاعبين الذين يخسرون بنفس عنوان البريد الإلكتروني منذ 10 سنوات أو أكثر. يمكن إضافته إلى وصف الملف الشخصي. تم تقديم هذه الميزة في نوفاتيرا T4.");
tz_def('MANUAL_NF_D_26', "الوسام الذي يُمنح للاعبين الذين يخسرون بنفس عنوان البريد الإلكتروني منذ 10 سنوات أو أكثر. يمكن إضافته إلى وصف الملف الشخصي. تم تقديم هذه الميزة في نوفاتيرا T4.");

// ===== per-reader localization of battle reports (token layer) =====
// Battle reports are generated server-side at resolution time, in whichever
// player's language happened to trigger the automation tick. To make the
// *body* read in each viewer's own language instead, the report builders store
// language-neutral TOKENS in the notice payload and tz_expand_report() expands
// them at display time in the reader's LANG. Token grammar (no commas, so it
// survives the CSV payload):
//   {{KEY}}            -> CONST                              (e.g. {{RC_WALL_NOT_DAMAGED}})
//   {{KEY|a|b}}        -> vsprintf(CONST, [a, b])            (args are rawurlencoded)
//   {{BLD|type|mode}}  -> building name in the reader's language
// rc_tok()/rc_bld() are the emit-side helpers (used by the report builders).
// Unknown / undefined tokens are left untouched, and old reports stored as
// plain text (pre-token) pass through unchanged.
if (!function_exists('rc_tok')) {
    function rc_tok($key /* , ...$args */) {
        $args = array_slice(func_get_args(), 1);
        if (!$args) return '{{' . $key . '}}';
        return '{{' . $key . '|' . implode('|', array_map('rawurlencode', $args)) . '}}';
    }
}
if (!function_exists('rc_bld')) {
    function rc_bld($type, $mode = 0) {
        return '{{BLD|' . (int) $type . '|' . (int) $mode . '}}';
    }
}
if (!function_exists('tz_build_name')) {
    function tz_build_name($type, $mode = 0) {
        $b = Building::procResType((int) $type);
        return ($b === '' && !$mode) ? RC_VILLAGE_CANT_BE : $b;
    }
}
if (!function_exists('tz_expand_report')) {
    function tz_expand_report($s) {
        if (!is_string($s) || strpos($s, '{{') === false) return $s;
        return preg_replace_callback('/\{\{([A-Z0-9_]+)((?:\|[^|{}]*)*)\}\}/', function ($m) {
            $key  = $m[1];
            $args = ($m[2] === '') ? [] : array_map('rawurldecode', explode('|', substr($m[2], 1)));
            if ($key === 'BLD') {
                return tz_build_name($args[0] ?? 0, $args[1] ?? 0);
            }
            if (!defined($key)) return $m[0];
            return $args ? vsprintf(constant($key), $args) : constant($key);
        }, $s);
    }
}

// ===== display-time localization of stored report topics =====
// Reports are generated server-side at battle resolution and stored in the DB
// (column `topic`) with English connectors. This rewrites them to the viewing
// player's language at display time (works for old AND new reports).
if (!function_exists('tz_loc_topic')) {
    function tz_loc_topic($s) {
        if (!is_string($s) || $s === '') return $s;
        // strtr does longest-match, single-pass (no double substitution).
        $map = array(
            'village of the elders reinforcement ' => TZ_RT_ELDERS_REINF.' ',
            'Reinforcement in '                    => TZ_RT_REINF_IN.' ',
            ' was attacked'                        => ' '.TZ_RT_WAS_ATTACKED,
            ' send resources to '                  => ' '.TZ_RT_SEND_RES_TO.' ',
            ' scouts '                             => ' '.TZ_RT_SCOUTS.' ',
            ' attacks '                            => ' '.TZ_RT_ATTACKS.' ',
            ' reinforcement '                      => ' '.TZ_RT_REINFORCEMENT.' ',
            'Unoccupied Oasis'                     => TZ_RT_UNOCC_OASIS,
            'New village founded'                  => TZ_RT_NEW_VILLAGE,
            'Settlers returned - valley occupied'  => TZ_RT_VALLEY_OCCUPIED,
            // T4 hero port (Phase 6)
            'Hero returned from an adventure'      => TZ_RT_ADV_RETURNED,
            'Hero fell on an adventure'             => TZ_RT_ADV_FELL,
            'Auction won'                          => TZ_RT_AUC_WON,
            'Auction sold'                         => TZ_RT_AUC_SOLD,
            'Auction expired'                      => TZ_RT_AUC_EXPIRED,
        );
        return strtr($s, $map);
    }
}

/* =============================================================================
 * T4 HERO PORT (Phase 6) - items / adventures / auction house
 * ========================================================================== */
tz_def('HERO_T4_TAB_HERO',       'البطل');
tz_def('HERO_T4_TAB_OASIS',      'الواحة');
tz_def('HERO_T4_TAB_ITEMS',      'المخزون');
tz_def('HERO_T4_TAB_ADVENTURES', 'المغامرات');
tz_def('HERO_T4_TAB_AUCTION',    'المزادات');

tz_def('HERO_EXCHANGE', 'مكتب الصرف');
tz_def('HERO_EXCHANGE_G2S', 'ذهب إلى فضة');
tz_def('HERO_EXCHANGE_S2G', 'فضة إلى ذهب');
tz_def('HERO_EXCHANGE_OK', 'اكتمل التبادل.');
tz_def('HERO_EXCHANGE_NOTENOUGH', 'لا تملك ما يكفي لهذا التبادل.');
tz_def('HERO_EXCHANGE_FAIL', 'تعذر إتمام التبادل.');
tz_def('HERO_EXCHANGE_HINT', 'أدخل الكمية التي تريد إعطاءها. الفضة المتبقية أقل من وحدة ذهب واحدة تبقى معك.');
tz_def('HERO_RES_PRODUCTION', 'الموارد');
tz_def('HERO_RES_TYPE', 'المورد المنتَج');
tz_def('HERO_RES_ALL', 'كل الموارد');
tz_def('HERO_RES_TYPE_HINT', 'يمكن تغييره في أي وقت، مجانًا.');
tz_def('HERO_SILVER',            'الفضة');
tz_def('HERO_EXPERIENCE',        'الخبرة');
tz_def('RESOURCES',              'الموارد');

/* Equipment slots */
tz_def('HERO_SLOT_1', 'الخوذة');
tz_def('HERO_SLOT_2', 'الجسد');
tz_def('HERO_SLOT_3', 'اليد اليمنى');
tz_def('HERO_SLOT_4', 'اليد اليسرى');
tz_def('HERO_SLOT_5', 'الحذاء');
tz_def('HERO_SLOT_6', 'الحصان');
tz_def('HERO_SLOT_7', 'الحقيبة');

/* Inventory actions */
tz_def('HERO_ITEMS_EQUIPPED',    'مرتدى');
tz_def('HERO_ITEMS_BAG',         'المخزون');
tz_def('HERO_ITEMS_EMPTY',       'لا يملك بطلك أي عناصر بعد. المغامرات ودار المزادات أماكن جيدة للعثور على بعضها.');
tz_def('HERO_EQUIP',             'ارتداء');
tz_def('HERO_UNEQUIP',           'خلع');
tz_def('HERO_USE_ITEM',          'استخدام');
tz_def('HERO_QUANTITY',          'الكمية');
tz_def('HERO_ITEM_USED_OK',      'تم استخدام العنصر.');
tz_def('HERO_ITEM_USE_FAIL',     'لا يمكن استخدام هذا العنصر الآن.');
tz_def('HERO_ITEM_USE_BATTLE',   'يُستخدم هذا العنصر تلقائيًا (الضمادات تشفي القوات العائدة بعد المعارك).');
tz_def('HERO_EQUIP_OK',          'تم ارتداء العنصر.');
tz_def('HERO_LOCKED_NOHERO', 'ليس لديك بطل بعد. درّب واحدًا في قصر البطل قبل ارتداء العناصر.');
tz_def('HERO_EQUIP_FAIL',        'لا يمكن ارتداء هذا العنصر (وحدة بطل خاطئة أو نوع عنصر خاطئ).');
tz_def('HERO_UNEQUIP_OK',        'تم خلع العنصر.');

/* Adventures */
tz_def('HERO_ADV_NORMAL',        'مغامرة عادية');
tz_def('HERO_ADV_HARD',          'مغامرة صعبة');
tz_def('HERO_ADV_LIST',          'المغامرات المتاحة');
tz_def('HERO_ADV_NONE',          'لا توجد مغامرات متاحة الآن. تظهر مغامرات جديدة بمرور الوقت.');
tz_def('HERO_ADV_DIFFICULTY',    'الصعوبة');
tz_def('HERO_ADV_DIFF_NORMAL',   'عادية');
tz_def('HERO_ADV_DIFF_HARD',     'صعبة');
tz_def('HERO_ADV_PLACE', 'المكان');
tz_def('HERO_ADV_DANGER', 'الخطورة');
tz_def('HERO_ADV_LINK', 'الرابط');
tz_def('HERO_ADV_DURATION',      'وقت السفر (اتجاه واحد)');
tz_def('HERO_ADV_EXPIRES',       'تنتهي خلال');
tz_def('HERO_ADV_GO',            'بدء المغامرة');
tz_def('HERO_ADV_RUNNING',       'بطلك في مغامرة وسيصل خلال');
tz_def('HERO_ADV_START_OK',      'انطلق بطلك في المغامرة.');
tz_def('HERO_ADV_START_NOHERO',  'تحتاج إلى بطل حي لبدء مغامرة.');
tz_def('HERO_ADV_START_AWAY',    'بطلك ليس في المنزل.');
tz_def('HERO_ADV_START_FAIL',    'هذه المغامرة لم تعد متاحة.');
tz_def('HERO_ADV_RETURNED',      'عاد بطلك من');
tz_def('HERO_ADV_REWARD',        'المكافأة');
tz_def('HERO_ADV_AMOUNT',        'الكمية');
tz_def('HERO_ADV_ITEM_FOUND',    'عُثر على عنصر');
tz_def('HERO_ADV_HP_LOST',       'الصحة المفقودة');
tz_def('HERO_ADV_DIED',          'سقط بطلك في');
tz_def('HERO_ADV_DIED_INFO',     "فُقدت كل الغنائم. يمكن إحياء البطل في قصر البطل.");

/* Auction house */
tz_def('HERO_AUC_OPEN',          'المزادات المفتوحة');
tz_def('HERO_AUC_NONE',          'لا توجد مزادات مفتوحة حاليًا.');
tz_def('HERO_AUC_ITEM',          'العنصر');
tz_def('HERO_AUC_PRICE',         'السعر الحالي');
tz_def('HERO_AUC_FINAL_PRICE',   'السعر النهائي');
tz_def('HERO_AUC_TIME_LEFT',     'ينتهي خلال');
tz_def('HERO_AUC_YOUR_MAX',      'الحد الأقصى الخاص بك');
tz_def('HERO_AUC_BID',           'مزايدة');
tz_def('HERO_AUC_BID_OK',        'تم تسجيل مزايدتك. أنت صاحب أعلى مزايدة.');
tz_def('HERO_AUC_BID_OUTBID',    'تم تجاوز مزايدتك فورًا بحد أقصى أعلى.');
tz_def('HERO_AUC_BID_FAIL',      'لم تُقبل مزايدتك.');
tz_def('HERO_AUC_BID_NOSILVER',  'لا تملك فضة كافية لهذه المزايدة.');
tz_def('HERO_AUC_MY_BIDS',       'مزايداتي');
tz_def('HERO_AUC_MY_SALES',      'مبيعاتي');
tz_def('HERO_AUC_SELL',          'بيع عنصر');
tz_def('HERO_AUC_SELL_OK',       'تم إدراج عنصرك.');
tz_def('HERO_AUC_SELL_FAIL',     'لا يمكن إدراج هذا العنصر (يجب خلع العناصر المرتداة أولًا).');
tz_def('HERO_AUC_START_PRICE',   'سعر البداية');
tz_def('HERO_AUC_DURATION',      'المدة');
tz_def('HERO_AUC_LIST',          'إدراج عنصر');
tz_def('HERO_AUC_SELLER_NPC',    'تاجر');
tz_def('HERO_AUC_WON',           'فزت بالمزاد على');
tz_def('HERO_AUC_SOLD',          'بيع مزادك:');
tz_def('HERO_AUC_REFUND',        'مسترد من حد مزايدتك الأقصى');
tz_def('HERO_AUC_FEE',           'رسوم المزاد');
tz_def('HERO_AUC_PAYOUT',        'المستحقات');
tz_def('HERO_AUC_EXPIRED',       'انتهى مزادك دون مزايدات. أُعيد العنصر إلى مخزونك:');

/* Report topics (raw English strings live in ndata.topic) */
tz_def('TZ_RT_ADV_RETURNED',     'عاد البطل من مغامرة');
tz_def('TZ_RT_ADV_FELL',         'سقط البطل في مغامرة');
tz_def('TZ_RT_AUC_WON',          'فوز في المزاد');
tz_def('TZ_RT_AUC_SOLD',         'بيع في المزاد');
tz_def('TZ_RT_AUC_EXPIRED',      'انتهى المزاد');

/* T4 hero port - movement display (dorf1 + rally point) */
tz_def('HERO_ADV_MOV_OUT',   'البطل في مغامرة');
tz_def('HERO_ADV_MOV_BACK',  'البطل عائد من مغامرة');
tz_def('HERO_ADV_MOV_SHORT', 'مغامرة');

/* T4 hero port - tooltip effect fragments (heroItemBonusText) */
tz_def('HB_TXT_FIGHT',      'قوة القتال');
tz_def('HB_TXT_UNIT_OFF',   'الهجوم');
tz_def('HB_TXT_UNIT_DEF',   'الدفاع');
tz_def('HB_TXT_PER',        'لكل');
tz_def('HB_TXT_VS_NATARS',  'قوة ضد التتار');
tz_def('HB_TXT_RAID',       'الموارد المنهوبة');
tz_def('HB_TXT_RETURN',     'سرعة عودة القوات');
tz_def('HB_TXT_SPEED_OWN',  'السرعة بين قراك الخاصة');
tz_def('HB_TXT_SPEED_ALLY', 'السرعة بين قرى الحلفاء');
tz_def('HB_TXT_XP',         'الخبرة');
tz_def('HB_TXT_REGEN',      'نقاط الصحة يوميًا');
tz_def('HB_TXT_CP',         'نقاط الثقافة يوميًا');
tz_def('HB_TXT_TRAIN_CAV',  'وقت تدريب الفرسان');
tz_def('HB_TXT_TRAIN_INF',  'وقت تدريب المشاة');
tz_def('HB_TXT_DMG',        'الضرر الذي يتلقاه البطل');
tz_def('HB_TXT_SPEED20',    'سرعة القوات بعد 20 مربعًا');
tz_def('HB_TXT_MOUNT',      'حقل/ساعة أثناء الامتطاء');
tz_def('HB_TXT_HORSE',      'حقل/ساعة سرعة البطل');
tz_def('HB_TXT_OINTMENT',   'يشفي 1% من صحة البطل لكل وحدة (بحد أقصى 99%)');
tz_def('HB_TXT_SCROLL',     'خبرة البطل لكل واحدة');
tz_def('HB_TXT_BUCKET',     'يُحيي البطل فورًا دون تكلفة');
tz_def('HB_TXT_TABLET',     '+1% ولاء قريتك الخاصة لكل واحدة (بحد أقصى 125%)');
tz_def('HB_TXT_BOOK',       'يعيد ضبط نقاط سمات البطل');
tz_def('HB_TXT_ARTWORK',    'نقاط ثقافة تساوي إنتاجك اليومي');
tz_def('HB_TXT_BANDAGE_A',  'يشفي');
tz_def('HB_TXT_BANDAGE_B',  "من قوات البطل الساقطة بعد المعركة");
tz_def('HB_TXT_CAGE',       'يأسر حيوان واحة واحد لكل قفص');
tz_def('HB_TXT_NEEDS_HORSE','يتطلب حصانًا مرتديًا');
tz_def('HB_TXT_ONLY',       'فقط لـ');
tz_def('HB_TXT_HERO',       'بطل');

/* T4 hero port - captured animals release action */
tz_def('HERO_RELEASE_ANIMALS', 'إطلاق');
tz_def('HERO_RELEASE_CONFIRM', 'إطلاق هذه الحيوانات؟ ستختفي إلى الأبد.');

//////////////////////////////////////////////////////////////////////////////////////////////////////
// PANOU DE ADMINISTRARE - etichete de meniu si titluri de pagina
// (erau scrise direct in Admin/admin.php, deci meniul ramanea in engleza)
//////////////////////////////////////////////////////////////////////////////////////////////////////
