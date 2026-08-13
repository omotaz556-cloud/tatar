# حالة إعادة التسمية (Rebrand Status) — اعتبارًا من هذه اللحظة

هذا ملف تم إيقاف العمل عليه في منتصف مرحلة إزالة العلامة التجارية (Rebrand)
بناءً على طلب صريح بإرسال ZIP فوري. **هذا ليس تسليمًا نهائيًا.**

## ✅ تم فعليًا
- إزالة عدة شعارات Travian/TravianZ مؤكدة بصريًا (لوجوهات PNG/JPG/GIF محددة)
- حذف ملف كامل كان نسخة من موقع travian.com الأصلي
- استبدال نصي شامل لاسم "TravianZ"/"Travian" في أكثر من 670 ملف كود ولغة
  بالاسم المؤقت "Novaterra" (استبدله لاحقًا باسمك النهائي عبر rebrand.py)

## ⚠️ لم يُفحص/يُنجز بعد — يجب إكماله قبل أي استخدام تجاري
الملفات التالية داخل gpack/travian_default و gpack/travian_t4 و gpack/travian
**لم تُفحص بصريًا بعد** وبعضها شبه مؤكد أنه يحمل علامات تجارية:

- gpack/travian/images/logo_traviangames.jpg  → مؤكد: شعار Travian Games
- gpack/travian_t4/images/footer_logo.gif      → مؤكد: نص "TRAVIANGAMES"
- gpack/travian_t4/images/footer_logo.png      → مؤكد: نص "By ZZJHONS"
- gpack/travian_default/images/footer_logo.gif → غير مفحوص
- gpack/*/images/footer_logo.psd               → غير مفحوص (ملف مصدر PSD)
- gpack/travian_t4/images/footer_logo_old.gif  → غير مفحوص
- gpack/travian_t4/images/footer_logo_zravianx.gif → غير مفحوص
- gpack/travian/images/logo_background.jpg     → غير مفحوص
- gpack/travian/images/logo_background-ltr.jpg → غير مفحوص
- gpack/*/lang/en/a/travian0.gif, travian1.gif → غير مفحوص (نمط مشابه لشعار مؤكد سابقًا في img/en/a/travian0.gif)

## كذلك لم يُنجز بعد
- إعادة تسمية فولدرات gpack/travian_default و gpack/travian_t4 نفسها
  (144 مسار في الكود لا يزال يشير إليها بأسمائها الحالية — إعادة التسمية
  تتطلب تحديث كل هذه المسارات معًا حتى لا تنكسر اللعبة)
- لم يتم اختيار اسم نهائي للمشروع (المستخدم حاليًا: "Novaterra" كـ placeholder)
- لم تتم مراجعة أي تصميم بصري (ألوان/CSS) — هذا تنظيف نصوص فقط، وليس هوية بصرية جديدة

## الخلاصة
**لا تستخدم هذه النسخة تجاريًا أو تعرضها للعميل كنسخة نهائية.**
شغّل rebrand.py مرة أخرى بعد اختيار الاسم النهائي، وأكمل فحص ملفات gpack
المذكورة أعلاه قبل أي إطلاق.
