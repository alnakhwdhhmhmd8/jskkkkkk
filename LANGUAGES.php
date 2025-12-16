<?php
$LANGUAGES = json_decode(file_get_contents('LANGUAGES.json'),1);

$start_msg = "- أهلا بك يا #FULL ❤️!

- اختصاص البوت هو : { *جلب معلومات التوكن 🧾 ، انشاء ويب هوك 📌 ، حذف ويب هوك 🗑 ، مسح التحديثات المعلقة 🛑* } 👨🏻‍🔧!

- يمكنك التحكم في البوت عن طريق الكيبورد الموجود في الأسفل بكل سهولة وسلاسة 👇!

- إصدار البوت : *V3.0* 💫!

- تغيير لغة البوت : /languages 🔠!

- قناة البوت 📡!
- [نسعي للأفضل دائما](t.me/it_bero) 💜!";
$auto = 'تلقائي';
$max_updates = 'اقصى التحديثات ';
$support = 'مدعوم';
$notsupport = 'غير مدعوم';
$notfound = 'لايوجد';
$found = 'موجود';
$infoTok = "- معلومات التوكن 🧾";
$delweb = "- حذف ويب هوك 🗑";
$creatweb = "- عمل ويب هوك 📌";
$drop = "- مسح التحديثات المعلقة 🛑";
$cancel = "- إلغاء ❌";
$wait = "جار التحقق من التوكن ♻️.";
$delete_mesg = "- بواسطة #$usrbot | تم حذف الويب هوك بنجاح 🗑!";
  
$send_message = "- بواسطة @#usrbot | تم إنشاء الويب هوك بنجاح ✅!\n"
 . "- أرسل /start لبدء التشغيل ♻️!\n"
 . "- *ملاحظة* : إذا لم يعمل البوت يمكنك التحقق من آخر خطأ في قسم [معلومات التوكن](https://t.me/#usrbot?start=WebHookInfo) 📛!";

$now_send = "- أرسل الآن رابط ملف البوت لأقوم بعمل ويب هوك له 🖇!";
$now_less = "- الآن تبقى القليل من الخطوات لإتمام عملية إنشاء الويب هوك 🔘!";
$click_ok = "- قم بالضغط على الازرار لتعطيل وتفعيل الميزات التي تريد أن يستلمها البوت 🔘!

- بعد الإنتهاء قم بالضغط على زر { - إتمام الإنشاء ☑ }";
$key_ok = "- إتمام الإنشاء ☑";
$error_webhook = "- حدث خطأ أثناء إنشاء الويب هوك ⚠️!
------------------------------------
- رمز الخطأ : *#NUM* 🔢!
- وصف الخطأ : *#ERROR* 🛑!";
$s_back = "- تم الرجوع إلى القائمة الرئيسية 🔙!";
$DoneCancel = "- تم إلغاء الأمر والرجوع إلى القائمة الرئيسية 🔙!";
$error_token = "- التوكن الذي أرسلته غير صحيح ⚠️!";
$error_back = "- تم إلغاء الأمر والرجوع إلى القائمة الرئيسية 🔙!";
$done_edit = "- تم تعديل قائمة الميزات ✏!";
$error_ip = "- الرجاء إرسال عنوان IP بهذا الشكل { XX.XX.XX.XX } 🌐!
- مثال : 8.8.8.8 💫!";
$set_ip = "- أرسل عنوان IP { XX.XX.XX.XX } الثابت الذي سيتم استخدامه لإرسال طلبات الويب هوك بدلاً من عنوان IP التلقائي الذي تم جلبه من خلال DNS 🌐!";
$send_to = "
- الآن أرسل توكن البوت أو قم بإعادة توجيهه من @BotFather 📝!";

$set_updates = '- أرسل العدد الأقصى المسموح به لاتصالات HTTPS المتزامنة إلى webhook لتسليم التحديث { 1-100 }  🔢!
- استخدم قيمًا أقل للحد من الحمل على خادم البوت الخاص بك ، وقيمًا أعلى لزيادة إنتاجية البوت 📊!';
$error_updates = '- الرجاء إرسال العدد ما بين { 1 و 100 } 🔢!';

$del_droper = 'مسح الطلبات المتعلقة';
$yes = "- نعم ✔️";
$no = "- لا ✖️";
$you_have = "- يوجد لديك طلبات معلقة هل تريد حذفهم؟ 🗑!
- عدد الطلبات المعلقة : { #NUM } 🔢!";
$drop_error = '- لا يوجد تحديثات معلقة لأقوم بحذفها ⚠️!';
$drop_true = '- عدد الطلبات المعلقة : { #NUM } 🔢!
- تم حذف جميع الطلبات المعلقة بنجاح ✅!
';
$infoX = "*- معلومات البوت 🧾!*
------------------------------------
- اسم البوت : [#name_bot] 🤖!
- معرف البوت : [@#user_bot] 🌀!
- ايدي البوت : `#id_bot` 🆔!
------------------------------------";

$deleter = "- تم حذف الويب هوك بنجاح 🗑!";

$deleter1 = "- تم حذف الويب هوك بنجاح 🗑!
- تم الرجوع إلى القائمة الرئيسية 🔙!";

$deleter2 = "- تم حذف الويب هوك والطلبات المعلقة بنجاح ✅!
- تم الرجوع إلى القائمة الرئيسية 🔙!";
$webhook_info = "*- معلومات البوت 🧾!*
------------------------------------
- اسم البوت : [#name_bot] 🤖!
- معرف البوت : [@#user_bot] 🌀!
- ايدي البوت : [#id_bot] 🆔!
- الاضافة الى المجموعات : *#add_to_group* 👥!
- وضع الخصوصية : *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- وضع الانلاين : *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- معلومات الويب هوك 🎫!*
------------------------------------
- رابط الويب هوك : *#link_webhook* 🖇!
- عنوان IP للويب هوك : *#ip* ℹ️!
- شهادة مخصصة : *#cert* 🌐!
- عدد الطلبات المعلقة : [#drop] 🔢!
- العدد الأقصى للتحديثات لكل طلب : [#max] ↗️!
- الطلبات التي يستطيع استلامها البوت : { *[#all]* } ✔!
";

$ok_web = "*- معلومات البوت 🤖!*
------------------------------------
- اسم البوت : [#name_bot] 🔠!
- معرف البوت : [@#user_bot] 🌀!
- ايدي البوت : `#id_bot` 🆔!
------------------------------------

*- معلومات الويب هوك 🧾!*
------------------------------------
- رابط الويب هوك : [#link_webhook] 🖇!
- عنوان IP للويب هوك : *#ip* ℹ️!
- العدد الأقصى للتحديثات لكل طلب : *#max* ↗️!
- مسح الطلبات المعلقة : *#drop* 🔢!
- الطلبات التي يستطيع استلامها البوت : { *[#all]* } ✔!";

if($LANGUAGES[$chat_id] == 'en'){
$start_msg = "- Welcome, #FULL ❤️!

- The bot's functions: { *Fetching token information 🧾, Creating a webhook 📌, Deleting a webhook 🗑, Clearing pending updates 🛑* } 👨🏻‍🔧!

- You can control the bot easily using the keyboard below 👇!

- Bot version: *V3.0* 💫!

- Change bot language: /languages 🔠!

- Bot channel 📡!
- [We always strive for the best](t.me/it_bero) 💜!";
$auto = 'Automatic';
$max_updates = 'Max updates';
$support = 'Supported';
$notsupport = 'Not supported';
$notfound = 'Not found';
$found = 'Found';
$infoTok = "- Token Information 🧾";
$delweb = "- Delete Webhook 🗑";
$creatweb = "- Create Webhook 📌";
$delete_mesg = "- By #$usrbot | Webhook deleted successfully 🗑!";
$drop = "- Clear Pending Updates 🛑";
$cancel = "- Cancel ❌";
$wait = "Checking the token ♻️.";
$send_message = "- By @#usrbot | Webhook created successfully ✅!\n"
. "- Send /start to begin operation ♻️!\n"
. "- *Note*: If the bot does not work, you can check the last error in the [Token Info](https://t.me/#usrbot?start=WebHookInfo) section 📛!";

$now_send = "- Send the bot file link now to create a webhook for it 🖇!";
$now_less = "- Just a few steps left to complete the webhook creation process 🔘!";
$click_ok = "- Click the buttons to enable/disable features the bot will receive 🔘!

- After finishing, click the { - Complete Creation ☑ } button";
$key_ok = "- Complete Creation ☑";
$error_webhook = "- An error occurred while creating the webhook ⚠️!
------------------------------------
- Error code: *#NUM* 🔢!
- Error description: *#ERROR* 🛑!";
$s_back = "- Returned to the main menu 🔙!";
$DoneCancel = "- Command canceled and returned to the main menu 🔙!";
$error_token = "- The token you sent is incorrect ⚠️!";
$error_back = "- Command canceled and returned to the main menu 🔙!";
$done_edit = "- Feature list updated ✏!";
$error_ip = "- Please send an IP address in the format { XX.XX.XX.XX } 🌐!
- Example: 8.8.8.8 💫!";
$set_ip = "- Send the fixed IP address { XX.XX.XX.XX } that will be used to send webhook requests instead of the automatic IP fetched via DNS 🌐!";
$send_to = "
- Now send the bot token or forward it from @BotFather 📝!";

$set_updates = "- Send the maximum number of allowed concurrent HTTPS connections to the webhook for update delivery { 1-100 } 🔢!
- Use lower values to reduce load on your bot server, and higher values to increase bot throughput 📊!";
$error_updates = "- Please send a number between { 1 and 100 } 🔢!";

$del_droper = 'Clear related requests';
$yes = "- Yes ✔️";
$no = "- No ✖️";
$you_have = "- You have pending requests. Do you want to delete them? 🗑!
- Number of pending requests: { #NUM } 🔢!";
$drop_error = "- No pending updates to delete ⚠️!";
$drop_true = "- Number of pending requests: { #NUM } 🔢!
- Successfully deleted all pending requests ✅!
";
$infoX = "*- Bot Information 🧾!*
------------------------------------
- Bot Name: [#name_bot] 🤖!
- Bot Username: [@#user_bot] 🌀!
- Bot ID: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Webhook successfully deleted 🗑!";

$deleter1 = "- Webhook successfully deleted 🗑!
- Returned to the main menu 🔙!";

$deleter2 = "- Webhook and pending requests successfully deleted ✅!
- Returned to the main menu 🔙!";

$webhook_info = "*- Bot Information 🧾!*
------------------------------------
- Bot Name: [#name_bot] 🤖!
- Bot Username: [@#user_bot] 🌀!
- Bot ID: [#id_bot] 🆔!
- Added to Groups: *#add_to_group* 👥!
- Privacy Mode: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- Inline Mode: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Webhook Information 🎫!*
------------------------------------
- Webhook URL: *#link_webhook* 🖇!
- Webhook IP Address: *#ip* ℹ️!
- Custom Certificate: *#cert* 🌐!
- Number of Pending Requests: [#drop] 🔢!
- Max Updates per Request: [#max] ↗️!
- Requests the bot can receive: { *[#all]* } ✔!
";

$ok_web = "*- Bot Information 🤖!*
------------------------------------
- Bot Name: [#name_bot] 🔠!
- Bot Username: [@#user_bot] 🌀!
- Bot ID: `#id_bot` 🆔!
------------------------------------

*- Webhook Information 🧾!*
------------------------------------
- Webhook URL: [#link_webhook] 🖇!
- Webhook IP Address: *#ip* ℹ️!
- Max Updates per Request: *#max* ↗️!
- Clear Pending Requests: *#drop* 🔢!
- Requests the bot can receive: { *[#all]* } ✔!";
}
if($LANGUAGES[$chat_id] == 'kr'){
$start_msg = "- Bi xêr hatî, #FULL ❤️!

- Xizmetên bota: { *Agahiyên tokenê bistîne 🧾, Webhook biafirîne 📌, Webhook jê bibe 🗑, Nûvekirinên bênşop bikoke 🛑* } 👨🏻‍🔧!

- Tu dikarî bi klavyeya jêr bota bi hêsanî kontrol bikî 👇!

- Guhertoya botê: *V3.0* 💫!

- Zimanê bota biguherîne: /languages 🔠!

- Kanala bota 📡!
- [Em her dem dixwazin baştir bibin](t.me/it_bero) 💜!";

$auto = 'Bixweber';
$max_updates = 'Zêdetir nûvekirin';
$support = 'Piştgirî tê dayîn';
$notsupport = 'Naye piştrastkirin';
$notfound = 'Ne hat dîtin';
$found = 'Hat dîtin';
$infoTok = "- Agahiyên Tokenê 🧾";
$delweb = "- Webhook jê bibe 🗑";
$creatweb = "- Webhook biafirîne 📌";
$delete_mesg = "- Ji hêla #$usrbot ve | Webhook bi serkeftin jê hat birin 🗑!";
$drop = "- Nûvekirinên bênşop bikoke 🛑";
$cancel = "- Betal bike ❌";
$wait = "Tokenê tê kontrol kirin ♻️.";
$send_message = "- Ji hêla @#usrbot ve | Webhook bi serkeftin hat afirandin ✅!\n"
. "- /start bişîne da destnîşan bikî ♻️!\n"
. "- *Têgihîştin*: Heke bot ne dixebite, dikarî çewtiya dawîn di beşa [Token Info](https://t.me/#usrbot?start=WebHookInfo) 📛 de kontrol bikî!";

$now_send = "- Naha girêdana pelê bota bişîne da webhook biafirînî 🖇!";
$now_less = "- Tenê çend gavên maye da webhok biafirînî 🔘!";
$click_ok = "- Bişkîlên bikirtînin da taybetmendiyên botê bikarbînin an ne 🔘!

- Dîsa, ji kerema xwe bişko { - Tevahiya Afirandina Webhook ☑ } bikirtînin";
$key_ok = "- Tevahiya Afirandina Webhook ☑";
$error_webhook = "- Di afirandina webhookê de çewtî çêbû ⚠️!
------------------------------------
- Koda çewtî: *#NUM* 🔢!
- Danasîna çewtî: *#ERROR* 🛑!";
$s_back = "- Vegeriya menuya sereke 🔙!";
$DoneCancel = "- Fermana betal bû û vegeriya menuya sereke 🔙!";
$error_token = "- Tokenê ku şandî çewt e ⚠️!";
$error_back = "- Fermana betal bû û vegeriya menuya sereke 🔙!";
$done_edit = "- Lîsteya taybetmendiyan hate nûvekirin ✏!";
$error_ip = "- Ji kerema xwe navnîşana IP bi formatê { XX.XX.XX.XX } bişîne 🌐!
- Nimûne: 8.8.8.8 💫!";
$set_ip = "- Navnîşana IP ya berdêlî { XX.XX.XX.XX } bişîne ku di nûvekirinan de were bikaranîn 🌐!";
$send_to = "
- Naha tokena bota bişîne an jê rabîne ji @BotFather 📝!";

$set_updates = "- Hejmara herî zêde ya girêdanên HTTPS yên webhokê bişîne { 1-100 } 🔢!
- Nirxên kêm bikar bîne da barê botê bikêşe, nirxên bilind bikar bîne da berfirehtiyê bidê 📊!";
$error_updates = "- Ji kerema xwe hejmarê di navbera { 1 û 100 } de bişîne 🔢!";

$del_droper = 'Daxwazan girêdayî paqij bike';
$yes = "- Erê ✔️";
$no = "- Na ✖️";
$you_have = "- Hûn daxwazan bênşop heye. Daxwazan paqij bikin? 🗑!
- Hejmara daxwazan bênşop: { #NUM } 🔢!";
$drop_error = "- Tu nûvekirin bênşop tune ⚠️!";
$drop_true = "- Hejmara daxwazan bênşop: { #NUM } 🔢!
- Hemû daxwazan bênşop bi serkeftin hatin jêbirin ✅!
";
$infoX = "*- Agahiyên Bota 🧾!*
------------------------------------
- Navê Botê: [#name_bot] 🤖!
- Navnîşa Bota: [@#user_bot] 🌀!
- Nasnameya Botê: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Webhook bi serkeftin hat jêbirin 🗑!";

$deleter1 = "- Webhook bi serkeftin hat jêbirin 🗑!
- Vegeriya menuya sereke 🔙!";

$deleter2 = "- Webhook û daxwazan bênşop bi serkeftin hatin jêbirin ✅!
- Vegeriya menuya sereke 🔙!";

$webhook_info = "*- Agahiyên Bota 🧾!*
------------------------------------
- Navê Botê: [#name_bot] 🤖!
- Navnîşa Bota: [@#user_bot] 🌀!
- Nasnameya Botê: [#id_bot] 🆔!
- Tê zêde kirin li Komên: *#add_to_group* 👥!
- Moda Tiştî: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- Moda Inline: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Agahiyên Webhook 🎫!*
------------------------------------
- URL ya Webhook: *#link_webhook* 🖇!
- Navnîşa IP ya Webhook: *#ip* ℹ️!
- Sertîfîka Taybet: *#cert* 🌐!
- Hejmara Daxwazan Bênşop: [#drop] 🔢!
- Zêdetir Nûvekirin Bo Daxwaz: [#max] ↗️!
- Daxwazan Ku Bot Dikare Wergîre: { *[#all]* } ✔!
";

$ok_web = "*- Agahiyên Bota 🤖!*
------------------------------------
- Navê Botê: [#name_bot] 🔠!
- Navnîşa Bota: [@#user_bot] 🌀!
- Nasnameya Botê: `#id_bot` 🆔!
------------------------------------

*- Agahiyên Webhook 🧾!*
------------------------------------
- URL ya Webhook: [#link_webhook] 🖇!
- Navnîşa IP ya Webhook: *#ip* ℹ️!
- Zêdetir Nûvekirin Bo Daxwaz: *#max* ↗️!
- Paqijkirina Daxwazan Bênşop: *#drop* 🔢!
- Daxwazan Ku Bot Dikare Wergîre: { *[#all]* } ✔!";
}


if($LANGUAGES[$chat_id] == 'krd'){
$start_msg = "- بەخێربێیت, #FULL ❤️!

- فەرمودەکانی بۆت: { *وەرگرتنی زانیاری تۆکەن 🧾، دروستکردنی وێبهووک 📌، سڕینەوەی وێبهووک 🗑، سڕینەوەی نوێکردنەوەکانی چاودێری 🛑* } 👨🏻‍🔧!

- دەتوانی بە ئاسانی بۆتەکە بە شتی خوارهەوە کۆنترۆڵ بکەی 👇!

- وەشانی بۆت: *V3.0* 💫!

- گۆڕینی زمان: /languages 🔠!

- کانالی بۆت 📡!
- [هەمیسە هەوڵ دەدەین باشترین ببینین](t.me/it_bero) 💜!";
$auto = 'خۆکار';
$max_updates = 'زۆرترین نوێکردنەوە';
$support = 'پاڵپشتی دەکرێت';
$notsupport = 'پاڵپشتی ناکرێت';
$notfound = 'نەدۆزرایەوە';
$found = 'دۆزرایەوە';
$infoTok = "- زانیاری تۆکەن 🧾";
$delweb = "- سڕینەوەی وێبهووک 🗑";
$creatweb = "- دروستکردنی وێبهووک 📌";
$delete_mesg = "- لەلایەن #$usrbot | وێبهووک بەسەرکەوتووی سڕدرایەوە 🗑!";
$drop = "- سڕینەوەی نوێکردنەوەکانی چاودێری 🛑";
$cancel = "- پاشگەزبوونەوە ❌";
$wait = "چالاککردنی تۆکەن ♻️.";
$send_message = "- لەلایەن @#usrbot | وێبهووک بەسەرکەوتووی دروستکرا ✅!\n"
. "- /start بنێرە بۆ دەستپێکردنی کارکردن ♻️!\n"
. "- *تێبینی*: ئەگەر بۆتەکە کار نەکرد، دەتوانی دوایین هەڵە لە [زانیاری تۆکەن](https://t.me/#usrbot?start=WebHookInfo) ببینیت 📛!";

$now_send = "- ئێستا بەستەرەکەی فایلە بۆتەکە بنێرە بۆ دروستکردنی وێبهووک 🖇!";
$now_less = "- تەنها هەندێک هەنگاو ماوە بۆ تەواوکردنی وێبهووک 🔘!";
$click_ok = "- کرتە لە دوگمەکان بکە بۆ چالاک/ناچالاککردنی تایبەتمەندییەکان بۆتەکە وەرگری دەکات 🔘!

- دوای تەواوکردن، کرتە لە { - تەواوکردن ☑ } بکە";
$key_ok = "- تەواوکردن ☑";
$error_webhook = "- هەڵەیەک ڕوویدا لەکاتی دروستکردنی وێبهووک ⚠️!
------------------------------------
- کۆدی هەڵە: *#NUM* 🔢!
- باسکردنی هەڵە: *#ERROR* 🛑!";
$s_back = "- گەڕایەوە بۆ لیستە سەرەکی 🔙!";
$DoneCancel = "- فەرموودە هەڵوەشایەوە و گەڕایەوە بۆ لیستە سەرەکی 🔙!";
$error_token = "- تۆکەنی ناردووت هەڵەیە ⚠️!";
$error_back = "- فەرموودە هەڵوەشایەوە و گەڕایەوە بۆ لیستە سەرەکی 🔙!";
$done_edit = "- لیستی تایبەتمەندییەکان نوێکرایەوە ✏!";
$error_ip = "- تکایە ناونیشانی IP بنێرە بە فۆرماتی { XX.XX.XX.XX } 🌐!
- نمونە: 8.8.8.8 💫!";
$set_ip = "- تکایە ناونیشانی IP بنێرە کە بەکاردێت بۆ ناردنی داواکارییەکانی وێبهووک بەجێ ناونیشانی خۆکار 🌐!";
$send_to = "
- ئێستا تۆکەنی بۆتەکە بنێرە یان پێشکەش بکە لە @BotFather 📝!";

$set_updates = "- زۆرترین ژمارەی پەیوەندیدانی HTTPS بۆ وێبهووک بۆ ناردنی نوێکردنەوەکان دیاری بکە { 1-100 } 🔢!
- بەکارھێنانی ژمارەی کەم بۆ کەمکردنەوەی بار بۆ ڕاژەی بۆتەکەت، و ژمارەی زۆر بۆ زیادکردنی زۆرایی بۆتەکە 📊!";
$error_updates = "- تکایە ژمارەیەک نێرە لە نێوان { 1 و 100 } 🔢!";

$del_droper = 'سڕینەوەی داواکارییە پەیوەندیدارەکان';
$yes = "- بەڵێ ✔️";
$no = "- نەخێر ✖️";
$you_have = "- تۆ داواکارییە چاودێری کراوەکانت ھەیە. دەتەوێت بسڕیتەوە؟ 🗑!
- ژمارەی داواکارییەکان: { #NUM } 🔢!";
$drop_error = "- هیچ نوێکردنەوەی چاودێری نییە بۆ سڕینەوە ⚠️!";
$drop_true = "- ژمارەی داواکارییەکان: { #NUM } 🔢!
- هەمووی بەسەرکەوتووی سڕدرانەوە ✅!
";
$infoX = "*- زانیاری بۆت 🧾!*
------------------------------------
- ناوی بۆت: [#name_bot] 🤖!
- ناوی بەکارهێنەر: [@#user_bot] 🌀!
- ناسنامەی بۆت: `#id_bot` 🆔!
------------------------------------";

$deleter = "- وێبهووک بەسەرکەوتووی سڕدرایەوە 🗑!";

$deleter1 = "- وێبهووک بەسەرکەوتووی سڕدرایەوە 🗑!
- گەڕایەوە بۆ لیستە سەرەکی 🔙!";

$deleter2 = "- وێبهووک و داواکارییە چاودێری کراوەکان بەسەرکەوتووی سڕدرانەوە ✅!
- گەڕایەوە بۆ لیستە سەرەکی 🔙!";

$webhook_info = "*- زانیاری بۆت 🧾!*
------------------------------------
- ناوی بۆت: [#name_bot] 🤖!
- ناوی بەکارهێنەر: [@#user_bot] 🌀!
- ناسنامەی بۆت: [#id_bot] 🆔!
- زیادکراوە بۆ گروپەکان: *#add_to_group* 👥!
- دۆخی تایبەتی: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- دۆخی Inline: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- زانیاری وێبهووک 🎫!*
------------------------------------
- لینکەی وێبهووک: *#link_webhook* 🖇!
- ناونیشانی IP وێبهووک: *#ip* ℹ️!
- بەلگەی تایبەتی: *#cert* 🌐!
- ژمارەی داواکارییە چاودێری کراوەکان: [#drop] 🔢!
- زۆرترین نوێکردنەوە لە داواکارییەکان: [#max] ↗️!
- داواکارییەکانی بۆت: { *[#all]* } ✔!
";

$ok_web = "*- زانیاری بۆت 🤖!*
------------------------------------
- ناوی بۆت: [#name_bot] 🔠!
- ناوی بەکارهێنەر: [@#user_bot] 🌀!
- ناسنامەی بۆت: `#id_bot` 🆔!
------------------------------------

*- زانیاری وێبهووک 🧾!*
------------------------------------
- لینکەی وێبهووک: [#link_webhook] 🖇!
- ناونیشانی IP وێبهووک: *#ip* ℹ️!
- زۆرترین نوێکردنەوە لە داواکارییەکان: *#max* ↗️!
- سڕینەوەی داواکارییە چاودێری کراوەکان: *#drop* 🔢!
- داواکارییەکانی بۆت: { *[#all]* } ✔!";
}

if($LANGUAGES[$chat_id] == 'tr'){
$start_msg = "- Hoş geldiniz, #FULL ❤️!

- Bot'un işlevleri: { *Token bilgilerini getirme 🧾, Webhook oluşturma 📌, Webhook silme 🗑, Bekleyen güncellemeleri temizleme 🛑* } 👨🏻‍🔧!

- Aşağıdaki klavyeyi kullanarak botu kolayca kontrol edebilirsiniz 👇!

- Bot sürümü: *V3.0* 💫!

- Bot dilini değiştir: /languages 🔠!

- Bot kanalı 📡!
- [Her zaman en iyisini hedefliyoruz](t.me/it_bero) 💜!";
$auto = 'Otomatik';
$max_updates = 'Maks güncellemeler';
$support = 'Destekleniyor';
$notsupport = 'Desteklenmiyor';
$notfound = 'Bulunamadı';
$found = 'Bulundu';
$infoTok = "- Token Bilgileri 🧾";
$delweb = "- Webhook Sil 🗑";
$creatweb = "- Webhook Oluştur 📌";
$delete_mesg = "- By #$usrbot | Webhook başarıyla silindi 🗑!";
$drop = "- Bekleyen Güncellemeleri Temizle 🛑";
$cancel = "- İptal ❌";
$wait = "Token kontrol ediliyor ♻️.";
$send_message = "- By @#usrbot | Webhook başarıyla oluşturuldu ✅!\n"
. "- İşleme başlamak için /start gönderin ♻️!\n"
. "- *Not*: Bot çalışmazsa, son hatayı [Token Bilgileri](https://t.me/#usrbot?start=WebHookInfo) bölümünden kontrol edebilirsiniz 📛!";

$now_send = "- Webhook oluşturmak için şimdi bot dosya bağlantısını gönderin 🖇!";
$now_less = "- Webhook oluşturma sürecini tamamlamak için birkaç adım kaldı 🔘!";
$click_ok = "- Botun alacağı özellikleri etkinleştirmek/devre dışı bırakmak için düğmelere tıklayın 🔘!

- Tamamladıktan sonra { - Oluşturmayı Tamamla ☑ } düğmesine tıklayın";
$key_ok = "- Oluşturmayı Tamamla ☑";
$error_webhook = "- Webhook oluşturulurken bir hata oluştu ⚠️!
------------------------------------
- Hata kodu: *#NUM* 🔢!
- Hata açıklaması: *#ERROR* 🛑!";
$s_back = "- Ana menüye geri dönüldü 🔙!";
$DoneCancel = "- Komut iptal edildi ve ana menüye geri dönüldü 🔙!";
$error_token = "- Gönderdiğiniz token hatalı ⚠️!";
$error_back = "- Komut iptal edildi ve ana menüye geri dönüldü 🔙!";
$done_edit = "- Özellik listesi güncellendi ✏!";
$error_ip = "- Lütfen IP adresini şu formatta gönderin { XX.XX.XX.XX } 🌐!
- Örnek: 8.8.8.8 💫!";
$set_ip = "- Webhook isteklerini göndermek için kullanılacak sabit IP adresini gönderin { XX.XX.XX.XX } 🌐!";
$send_to = "
- Şimdi bot token'ını gönderin veya @BotFather'dan iletin 📝!";

$set_updates = "- Webhook için güncelleme tesliminde izin verilen maksimum eşzamanlı HTTPS bağlantı sayısını gönderin { 1-100 } 🔢!
- Daha düşük değerler bot sunucunuzun yükünü azaltır, daha yüksek değerler botun işleyiş hızını artırır 📊!";
$error_updates = "- Lütfen { 1 ile 100 arasında } bir sayı gönderin 🔢!";

$del_droper = 'İlgili istekleri temizle';
$yes = "- Evet ✔️";
$no = "- Hayır ✖️";
$you_have = "- Bekleyen istekleriniz var. Silmek istiyor musunuz? 🗑!
- Bekleyen istek sayısı: { #NUM } 🔢!";
$drop_error = "- Silinecek bekleyen güncelleme bulunamadı ⚠️!";
$drop_true = "- Bekleyen istek sayısı: { #NUM } 🔢!
- Tüm bekleyen istekler başarıyla silindi ✅!
";
$infoX = "*- Bot Bilgileri 🧾!*
------------------------------------
- Bot Adı: [#name_bot] 🤖!
- Bot Kullanıcı Adı: [@#user_bot] 🌀!
- Bot Kimliği: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Webhook başarıyla silindi 🗑!";

$deleter1 = "- Webhook başarıyla silindi 🗑!
- Ana menüye geri dönüldü 🔙!";

$deleter2 = "- Webhook ve bekleyen istekler başarıyla silindi ✅!
- Ana menüye geri dönüldü 🔙!";

$webhook_info = "*- Bot Bilgileri 🧾!*
------------------------------------
- Bot Adı: [#name_bot] 🤖!
- Bot Kullanıcı Adı: [@#user_bot] 🌀!
- Bot Kimliği: [#id_bot] 🆔!
- Gruplara Eklendi: *#add_to_group* 👥!
- Gizlilik Modu: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- Satır İçi Mod: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Webhook Bilgileri 🎫!*
------------------------------------
- Webhook URL: *#link_webhook* 🖇!
- Webhook IP Adresi: *#ip* ℹ️!
- Özel Sertifika: *#cert* 🌐!
- Bekleyen İstek Sayısı: [#drop] 🔢!
- Güncelleme Başına Maks İstek: [#max] ↗️!
- Botun alabileceği istekler: { *[#all]* } ✔!
";

$ok_web = "*- Bot Bilgileri 🤖!*
------------------------------------
- Bot Adı: [#name_bot] 🔠!
- Bot Kullanıcı Adı: [@#user_bot] 🌀!
- Bot Kimliği: `#id_bot` 🆔!
------------------------------------

*- Webhook Bilgileri 🧾!*
------------------------------------
- Webhook URL: [#link_webhook] 🖇!
- Webhook IP Adresi: *#ip* ℹ️!
- Güncelleme Başına Maks İstek: *#max* ↗️!
- Bekleyen İstekleri Temizle: *#drop* 🔢!
- Botun alabileceği istekler: { *[#all]* } ✔!";
}

if($LANGUAGES[$chat_id] == 'fa'){
$start_msg = "- خوش آمدید، #FULL ❤️!

- قابلیت‌های ربات: { *دریافت اطلاعات توکن 🧾، ایجاد وبهوک 📌، حذف وبهوک 🗑، پاک کردن به‌روزرسانی‌های معلق 🛑* } 👨🏻‍🔧!

- می‌توانید به‌راحتی با استفاده از صفحه‌کلید زیر ربات را کنترل کنید 👇!

- نسخه ربات: *V3.0* 💫!

- تغییر زبان ربات: /languages 🔠!

- کانال ربات 📡!
- [ما همیشه برای بهترین‌ها تلاش می‌کنیم](t.me/it_bero) 💜!";
$auto = 'خودکار';
$max_updates = 'حداکثر به‌روزرسانی‌ها';
$support = 'پشتیبانی‌شده';
$notsupport = 'پشتیبانی‌نمی‌شود';
$notfound = 'یافت نشد';
$found = 'یافت شد';
$infoTok = "- اطلاعات توکن 🧾";
$delweb = "- حذف وبهوک 🗑";
$creatweb = "- ایجاد وبهوک 📌";
$delete_mesg = "- توسط #$usrbot | وبهوک با موفقیت حذف شد 🗑!";
$drop = "- پاک کردن به‌روزرسانی‌های معلق 🛑";
$cancel = "- لغو ❌";
$wait = "در حال بررسی توکن ♻️.";
$send_message = "- توسط @#usrbot | وبهوک با موفقیت ایجاد شد ✅!\n"
. "- برای شروع عملیات /start را ارسال کنید ♻️!\n"
. "- *توجه*: اگر ربات کار نمی‌کند، می‌توانید آخرین خطا را در قسمت [اطلاعات توکن](https://t.me/#usrbot?start=WebHookInfo) بررسی کنید 📛!";

$now_send = "- اکنون لینک فایل ربات را برای ایجاد وبهوک ارسال کنید 🖇!";
$now_less = "- فقط چند مرحله دیگر تا تکمیل فرایند ایجاد وبهوک باقی مانده است 🔘!";
$click_ok = "- برای فعال/غیرفعال کردن ویژگی‌هایی که ربات دریافت می‌کند، روی دکمه‌ها کلیک کنید 🔘!

- پس از اتمام، روی دکمه { - تکمیل ایجاد ☑ } کلیک کنید";
$key_ok = "- تکمیل ایجاد ☑";
$error_webhook = "- هنگام ایجاد وبهوک خطایی رخ داد ⚠️!
------------------------------------
- کد خطا: *#NUM* 🔢!
- توضیح خطا: *#ERROR* 🛑!";
$s_back = "- بازگشت به منوی اصلی 🔙!";
$DoneCancel = "- فرمان لغو شد و به منوی اصلی بازگشت 🔙!";
$error_token = "- توکنی که ارسال کردید نادرست است ⚠️!";
$error_back = "- فرمان لغو شد و به منوی اصلی بازگشت 🔙!";
$done_edit = "- لیست ویژگی‌ها به‌روزرسانی شد ✏!";
$error_ip = "- لطفاً یک آدرس IP در قالب { XX.XX.XX.XX } ارسال کنید 🌐!
- مثال: 8.8.8.8 💫!";
$set_ip = "- آدرس IP ثابتی را ارسال کنید که برای ارسال درخواست‌های وبهوک به جای IP خودکار استفاده می‌شود 🌐!";
$send_to = "
- اکنون توکن ربات را ارسال کنید یا آن را از @BotFather فوروارد کنید 📝!";

$set_updates = "- حداکثر تعداد اتصالات همزمان HTTPS به وبهوک برای تحویل به‌روزرسانی‌ها را ارسال کنید { 1-100 } 🔢!
- مقادیر پایین‌تر باعث کاهش بار روی سرور ربات شما می‌شود و مقادیر بالاتر باعث افزایش عملکرد ربات 📊!";
$error_updates = "- لطفاً عددی بین { 1 تا 100 } ارسال کنید 🔢!";

$del_droper = 'پاک کردن درخواست‌های مرتبط';
$yes = "- بله ✔️";
$no = "- خیر ✖️";
$you_have = "- شما درخواست‌های معلق دارید. آیا می‌خواهید آن‌ها را حذف کنید؟ 🗑!
- تعداد درخواست‌های معلق: { #NUM } 🔢!";
$drop_error = "- هیچ به‌روزرسانی معلقی برای حذف وجود ندارد ⚠️!";
$drop_true = "- تعداد درخواست‌های معلق: { #NUM } 🔢!
- تمامی درخواست‌های معلق با موفقیت حذف شدند ✅!
";
$infoX = "*- اطلاعات ربات 🧾!*
------------------------------------
- نام ربات: [#name_bot] 🤖!
- نام کاربری ربات: [@#user_bot] 🌀!
- شناسه ربات: `#id_bot` 🆔!
------------------------------------";

$deleter = "- وبهوک با موفقیت حذف شد 🗑!";

$deleter1 = "- وبهوک با موفقیت حذف شد 🗑!
- بازگشت به منوی اصلی 🔙!";

$deleter2 = "- وبهوک و درخواست‌های معلق با موفقیت حذف شدند ✅!
- بازگشت به منوی اصلی 🔙!";

$webhook_info = "*- اطلاعات ربات 🧾!*
------------------------------------
- نام ربات: [#name_bot] 🤖!
- نام کاربری ربات: [@#user_bot] 🌀!
- شناسه ربات: [#id_bot] 🆔!
- اضافه شده به گروه‌ها: *#add_to_group* 👥!
- حالت خصوصی: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- حالت اینلاین: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- اطلاعات وبهوک 🎫!*
------------------------------------
- آدرس وبهوک: *#link_webhook* 🖇!
- آدرس IP وبهوک: *#ip* ℹ️!
- گواهی سفارشی: *#cert* 🌐!
- تعداد درخواست‌های معلق: [#drop] 🔢!
- حداکثر به‌روزرسانی در هر درخواست: [#max] ↗️!
- درخواست‌هایی که ربات می‌تواند دریافت کند: { *[#all]* } ✔!
";

$ok_web = "*- اطلاعات ربات 🤖!*
------------------------------------
- نام ربات: [#name_bot] 🔠!
- نام کاربری ربات: [@#user_bot] 🌀!
- شناسه ربات: `#id_bot` 🆔!
------------------------------------

*- اطلاعات وبهوک 🧾!*
------------------------------------
- آدرس وبهوک: [#link_webhook] 🖇!
- آدرس IP وبهوک: *#ip* ℹ️!
- حداکثر به‌روزرسانی در هر درخواست: *#max* ↗️!
- پاک کردن درخواست‌های معلق: *#drop* 🔢!
- درخواست‌هایی که ربات می‌تواند دریافت کند: { *[#all]* } ✔!";
}

if($LANGUAGES[$chat_id] == 'zh'){
$start_msg = "- 欢迎, #FULL ❤️!

- 机器人功能: { *获取令牌信息 🧾, 创建 Webhook 📌, 删除 Webhook 🗑, 清除待处理更新 🛑* } 👨🏻‍🔧!

- 您可以使用下面的键盘轻松控制机器人 👇!

- 机器人版本: *V3.0* 💫!

- 更改机器人语言: /languages 🔠!

- 机器人频道 📡!
- [我们始终追求更好](t.me/it_bero) 💜!";
$auto = '自动';
$max_updates = '最大更新数';
$support = '支持';
$notsupport = '不支持';
$notfound = '未找到';
$found = '已找到';
$infoTok = "- 令牌信息 🧾";
$delweb = "- 删除 Webhook 🗑";
$creatweb = "- 创建 Webhook 📌";
$delete_mesg = "- 由 #$usrbot | Webhook 删除成功 🗑!";
$drop = "- 清除待处理更新 🛑";
$cancel = "- 取消 ❌";
$wait = "正在检查令牌 ♻️.";
$send_message = "- 由 @#usrbot | Webhook 创建成功 ✅!\n"
. "- 发送 /start 开始操作 ♻️!\n"
. "- *注意*: 如果机器人无法运行，您可以在 [令牌信息](https://t.me/#usrbot?start=WebHookInfo) 部分查看最后的错误 📛!";

$now_send = "- 现在发送机器人文件链接，以创建 Webhook 🖇!";
$now_less = "- 只剩下几个步骤即可完成 Webhook 创建过程 🔘!";
$click_ok = "- 点击按钮以启用/禁用机器人接收的功能 🔘!

- 完成后，点击 { - 完成创建 ☑ } 按钮";
$key_ok = "- 完成创建 ☑";
$error_webhook = "- 创建 Webhook 时发生错误 ⚠️!
------------------------------------
- 错误代码: *#NUM* 🔢!
- 错误描述: *#ERROR* 🛑!";
$s_back = "- 返回主菜单 🔙!";
$DoneCancel = "- 命令已取消，并返回主菜单 🔙!";
$error_token = "- 您发送的令牌无效 ⚠️!";
$error_back = "- 命令已取消，并返回主菜单 🔙!";
$done_edit = "- 功能列表已更新 ✏!";
$error_ip = "- 请以格式 { XX.XX.XX.XX } 发送 IP 地址 🌐!
- 示例: 8.8.8.8 💫!";
$set_ip = "- 发送将用于 Webhook 请求的固定 IP 地址，而不是通过 DNS 自动获取的 IP 🌐!";
$send_to = "
- 现在发送机器人令牌，或从 @BotFather 转发它 📝!";

$set_updates = "- 发送 Webhook 并发 HTTPS 连接的最大数量 { 1-100 } 🔢!
- 使用较低的值可减少机器人服务器的负载，使用较高的值可提高机器人吞吐量 📊!";
$error_updates = "- 请输入 { 1 到 100 } 之间的数字 🔢!";

$del_droper = '清除相关请求';
$yes = "- 是 ✔️";
$no = "- 否 ✖️";
$you_have = "- 您有待处理的请求。是否要删除它们? 🗑!
- 待处理请求数量: { #NUM } 🔢!";
$drop_error = "- 没有待删除的待处理更新 ⚠️!";
$drop_true = "- 待处理请求数量: { #NUM } 🔢!
- 所有待处理请求已成功删除 ✅!
";
$infoX = "*- 机器人信息 🧾!*
------------------------------------
- 机器人名称: [#name_bot] 🤖!
- 机器人用户名: [@#user_bot] 🌀!
- 机器人 ID: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Webhook 已成功删除 🗑!";

$deleter1 = "- Webhook 已成功删除 🗑!
- 返回主菜单 🔙!";

$deleter2 = "- Webhook 和待处理请求已成功删除 ✅!
- 返回主菜单 🔙!";

$webhook_info = "*- 机器人信息 🧾!*
------------------------------------
- 机器人名称: [#name_bot] 🤖!
- 机器人用户名: [@#user_bot] 🌀!
- 机器人 ID: [#id_bot] 🆔!
- 加入的群组数: *#add_to_group* 👥!
- 隐私模式: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- 内联模式: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Webhook 信息 🎫!*
------------------------------------
- Webhook URL: *#link_webhook* 🖇!
- Webhook IP 地址: *#ip* ℹ️!
- 自定义证书: *#cert* 🌐!
- 待处理请求数量: [#drop] 🔢!
- 每次请求的最大更新数: [#max] ↗️!
- 机器人可接收的请求: { *[#all]* } ✔!
";

$ok_web = "*- 机器人信息 🤖!*
------------------------------------
- 机器人名称: [#name_bot] 🔠!
- 机器人用户名: [@#user_bot] 🌀!
- 机器人 ID: `#id_bot` 🆔!
------------------------------------

*- Webhook 信息 🧾!*
------------------------------------
- Webhook URL: [#link_webhook] 🖇!
- Webhook IP 地址: *#ip* ℹ️!
- 每次请求的最大更新数: *#max* ↗️!
- 清除待处理请求: *#drop* 🔢!
- 机器人可接收的请求: { *[#all]* } ✔!";
}


if($LANGUAGES[$chat_id] == 'hi'){
$start_msg = "- स्वागत है, #FULL ❤️!  

- बॉट की सुविधाएँ: { *टोकन जानकारी प्राप्त करना 🧾, वेबहुक बनाना 📌, वेबहुक हटाना 🗑, पेंडिंग अपडेट्स साफ़ करना 🛑* } 👨🏻‍🔧!  

- आप नीचे दिए गए कीबोर्ड का उपयोग करके बॉट को आसानी से नियंत्रित कर सकते हैं 👇!  

- बॉट संस्करण: *V3.0* 💫!  

- बॉट की भाषा बदलें: /languages 🔠!  

- बॉट चैनल 📡!  
- [हम हमेशा बेहतरीन की कोशिश करते हैं](t.me/it_bero) 💜!";  

$auto = 'स्वचालित';  
$max_updates = 'अधिकतम अपडेट्स';  
$support = 'समर्थित';  
$notsupport = 'असमर्थित';  
$notfound = 'नहीं मिला';  
$found = 'मिल गया';  
$infoTok = "- टोकन जानकारी 🧾";  
$delweb = "- वेबहुक हटाएं 🗑";  
$creatweb = "- वेबहुक बनाएं 📌";  
$delete_mesg = "- द्वारा #$usrbot | वेबहुक सफलतापूर्वक हटाया गया 🗑!";  
$drop = "- पेंडिंग अपडेट्स साफ करें 🛑";  
$cancel = "- रद्द करें ❌";  
$wait = "टोकन की जांच की जा रही है ♻️.";  

$send_message = "- द्वारा @#usrbot | वेबहुक सफलतापूर्वक बनाया गया ✅!\n"
. "- संचालन शुरू करने के लिए /start भेजें ♻️!\n"
. "- *नोट*: यदि बॉट काम नहीं कर रहा है, तो आप [टोकन जानकारी](https://t.me/#usrbot?start=WebHookInfo) अनुभाग में अंतिम त्रुटि देख सकते हैं 📛!";  

$now_send = "- वेबहुक बनाने के लिए अब बॉट फ़ाइल लिंक भेजें 🖇!";  
$now_less = "- वेबहुक निर्माण प्रक्रिया पूरी करने के लिए बस कुछ ही कदम बचे हैं 🔘!";  
$click_ok = "- उन सुविधाओं को सक्षम/अक्षम करने के लिए बटन पर क्लिक करें जो बॉट प्राप्त करेगा 🔘!  

- समाप्त करने के बाद, { - निर्माण पूरा करें ☑ } बटन पर क्लिक करें";  
$key_ok = "- निर्माण पूरा करें ☑";  
$error_webhook = "- वेबहुक बनाते समय एक त्रुटि हुई ⚠️!  
------------------------------------  
- त्रुटि कोड: *#NUM* 🔢!  
- त्रुटि विवरण: *#ERROR* 🛑!";  

$s_back = "- मुख्य मेनू पर लौट आया 🔙!";  
$DoneCancel = "- कमांड रद्द कर दिया गया और मुख्य मेनू पर लौट आया 🔙!";  
$error_token = "- आपने जो टोकन भेजा है वह गलत है ⚠️!";  
$error_back = "- कमांड रद्द कर दिया गया और मुख्य मेनू पर लौट आया 🔙!";  
$done_edit = "- सुविधा सूची अपडेट की गई ✏!";  
$error_ip = "- कृपया { XX.XX.XX.XX } प्रारूप में एक IP पता भेजें 🌐!  
- उदाहरण: 8.8.8.8 💫!";  

$set_ip = "- निश्चित IP पता भेजें { XX.XX.XX.XX } जो वेबहुक अनुरोध भेजने के लिए उपयोग किया जाएगा 🌐!";  
$send_to = "
- अब बॉट टोकन भेजें या इसे @BotFather से फ़ॉरवर्ड करें 📝!";  

$set_updates = "- अपडेट डिलीवरी के लिए वेबहुक पर अनुमत अधिकतम समवर्ती HTTPS कनेक्शन की संख्या भेजें { 1-100 } 🔢!  
- कम संख्या का उपयोग करने से आपके बॉट सर्वर पर लोड कम होगा, और अधिक संख्या आपके बॉट की गति बढ़ाएगी 📊!";  

$error_updates = "- कृपया { 1 से 100 } के बीच एक संख्या भेजें 🔢!";  

$del_droper = 'संबंधित अनुरोध साफ़ करें';  
$yes = "- हां ✔️";  
$no = "- नहीं ✖️";  
$you_have = "- आपके पास पेंडिंग अनुरोध हैं। क्या आप उन्हें हटाना चाहते हैं? 🗑!  
- पेंडिंग अनुरोधों की संख्या: { #NUM } 🔢!";  
$drop_error = "- हटाने के लिए कोई पेंडिंग अपडेट नहीं है ⚠️!";  
$drop_true = "- पेंडिंग अनुरोधों की संख्या: { #NUM } 🔢!  
- सभी पेंडिंग अनुरोध सफलतापूर्वक हटा दिए गए ✅!";  

$infoX = "*- बॉट जानकारी 🧾!*  
------------------------------------  
- बॉट का नाम: [#name_bot] 🤖!  
- बॉट उपयोगकर्ता नाम: [@#user_bot] 🌀!  
- बॉट आईडी: `#id_bot` 🆔!  
------------------------------------";  

$deleter = "- वेबहुक सफलतापूर्वक हटाया गया 🗑!";  

$deleter1 = "- वेबहुक सफलतापूर्वक हटाया गया 🗑!  
- मुख्य मेनू पर लौट आया 🔙!";  

$deleter2 = "- वेबहुक और पेंडिंग अनुरोध सफलतापूर्वक हटाए गए ✅!  
- मुख्य मेनू पर लौट आया 🔙!";  

$webhook_info = "*- बॉट जानकारी 🧾!*  
------------------------------------  
- बॉट का नाम: [#name_bot] 🤖!  
- बॉट उपयोगकर्ता नाम: [@#user_bot] 🌀!  
- बॉट आईडी: [#id_bot] 🆔!  
- समूहों में जोड़ा गया: *#add_to_group* 👥!  
- गोपनीयता मोड: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)  
- इनलाइन मोड: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)  
------------------------------------  

*- वेबहुक जानकारी 🎫!*  
------------------------------------  
- वेबहुक URL: *#link_webhook* 🖇!  
- वेबहुक IP पता: *#ip* ℹ️!  
- कस्टम प्रमाणपत्र: *#cert* 🌐!  
- पेंडिंग अनुरोधों की संख्या: [#drop] 🔢!  
- प्रति अनुरोध अधिकतम अपडेट्स: [#max] ↗️!  
- बॉट प्राप्त कर सकने वाले अनुरोध: { *[#all]* } ✔!";  

$ok_web = "*- बॉट जानकारी 🤖!*  
------------------------------------  
- बॉट का नाम: [#name_bot] 🔠!  
- बॉट उपयोगकर्ता नाम: [@#user_bot] 🌀!  
- बॉट आईडी: `#id_bot` 🆔!  
------------------------------------  

*- वेबहुक जानकारी 🧾!*  
------------------------------------  
- वेबहुक URL: [#link_webhook] 🖇!  
- वेबहुक IP पता: *#ip* ℹ️!  
- प्रति अनुरोध अधिकतम अपडेट्स: *#max* ↗️!  
- पेंडिंग अनुरोध साफ़ करें: *#drop* 🔢!  
- बॉट प्राप्त कर सकने वाले अनुरोध: { *[#all]* } ✔!";  
}


if($LANGUAGES[$chat_id] == 'ru'){
$start_msg = "- Привет, #FULL ❤️!

- Функции бота: { *Получение информации о токене 🧾, Создание вебхука 📌, Удаление вебхука 🗑, Очистка ожидающих обновлений 🛑* } 👨🏻‍🔧!

- Вы можете легко управлять ботом, используя клавиатуру ниже 👇!

- Версия бота: *V3.0* 💫!

- Изменить язык бота: /languages 🔠!

- Канал бота 📡!
- [Мы всегда стремимся к лучшему](t.me/it_bero) 💜!";
$auto = 'Автоматически';
$max_updates = 'Максимум обновлений';
$support = 'Поддерживается';
$notsupport = 'Не поддерживается';
$notfound = 'Не найдено';
$found = 'Найдено';
$infoTok = "- Информация о токене 🧾";
$delweb = "- Удалить вебхук 🗑";
$creatweb = "- Создать вебхук 📌";
$drop = "- Очистить ожидающие обновления 🛑";
$cancel = "- Отмена ❌";
$wait = "Проверка токена ♻️.";
$delete_mesg = "- От #$usrbot | Вебхук успешно удален 🗑!";
$send_message = "- От @#usrbot | Вебхук успешно создан ✅!\n"
. "- Отправьте /start для запуска ♻️!\n"
. "- *Примечание*: Если бот не работает, вы можете проверить последнюю ошибку в разделе [Информация о токене](https://t.me/#usrbot?start=WebHookInfo) 📛!";

$now_send = "- Отправьте ссылку на файл бота, чтобы я мог создать вебхук для него 🖇!";
$now_less = "- Осталось несколько шагов до завершения создания вебхука 🔘!";
$click_ok = "- Нажмите кнопки, чтобы включить/отключить функции, которые будет получать бот 🔘!

- После завершения нажмите кнопку { - Завершить создание ☑ }";
$key_ok = "- Завершить создание ☑";
$error_webhook = "- Произошла ошибка при создании вебхука ⚠️!
------------------------------------
- Код ошибки: *#NUM* 🔢!
- Описание ошибки: *#ERROR* 🛑!";
$s_back = "- Возвращено в главное меню 🔙!";
$DoneCancel = "- Команда отменена, возвращено в главное меню 🔙!";
$error_token = "- Отправленный вами токен неверен ⚠️!";
$error_back = "- Команда отменена, возвращено в главное меню 🔙!";
$done_edit = "- Список функций обновлен ✏!";
$error_ip = "- Пожалуйста, отправьте IP-адрес в формате { XX.XX.XX.XX } 🌐!
- Пример: 8.8.8.8 💫!";
$set_ip = "- Отправьте фиксированный IP-адрес { XX.XX.XX.XX }, который будет использоваться для отправки запросов вебхука вместо автоматического IP, полученного через DNS 🌐!";
$send_to = "
- Теперь отправьте токен бота или перешлите его из @BotFather 📝!";

$set_updates = "- Отправьте максимальное количество разрешенных одновременных HTTPS-соединений с вебхуком для доставки обновлений { 1-100 } 🔢!
- Используйте меньшие значения, чтобы снизить нагрузку на сервер бота, и большие значения, чтобы увеличить его производительность 📊!";
$error_updates = "- Пожалуйста, отправьте число от { 1 до 100 } 🔢!";

$del_droper = 'Очистить связанные запросы';
$yes = "- Да ✔️";
$no = "- Нет ✖️";
$you_have = "- У вас есть ожидающие запросы. Хотите их удалить? 🗑!
- Количество ожидающих запросов: { #NUM } 🔢!";
$drop_error = "- Нет ожидающих обновлений для удаления ⚠️!";
$drop_true = "- Количество ожидающих запросов: { #NUM } 🔢!
- Все ожидающие запросы успешно удалены ✅!
";
$infoX = "*- Информация о боте 🧾!*
------------------------------------
- Имя бота: [#name_bot] 🤖!
- Имя пользователя бота: [@#user_bot] 🌀!
- ID бота: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Вебхук успешно удален 🗑!";

$deleter1 = "- Вебхук успешно удален 🗑!
- Возвращено в главное меню 🔙!";

$deleter2 = "- Вебхук и ожидающие запросы успешно удалены ✅!
- Возвращено в главное меню 🔙!";

$webhook_info = "*- Информация о боте 🧾!*
------------------------------------
- Имя бота: [#name_bot] 🤖!
- Имя пользователя бота: [@#user_bot] 🌀!
- ID бота: [#id_bot] 🆔!
- Добавление в группы: *#add_to_group* 👥!
- Режим конфиденциальности: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- Инлайн-режим: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Информация о вебхуке 🎫!*
------------------------------------
- URL вебхука: *#link_webhook* 🖇!
- IP-адрес вебхука: *#ip* ℹ️!
- Пользовательский сертификат: *#cert* 🌐!
- Количество ожидающих запросов: [#drop] 🔢!
- Максимальное количество обновлений на запрос: [#max] ↗️!
- Запросы, которые может получать бот: { *[#all]* } ✔!
";

$ok_web = "*- Информация о боте 🤖!*
------------------------------------
- Имя бота: [#name_bot] 🔠!
- Имя пользователя бота: [@#user_bot] 🌀!
- ID бота: `#id_bot` 🆔!
------------------------------------

*- Информация о вебхуке 🧾!*
------------------------------------
- URL вебхука: [#link_webhook] 🖇!
- IP-адрес вебхука: *#ip* ℹ️!
- Максимальное количество обновлений на запрос: *#max* ↗️!
- Очистить ожидающие запросы: *#drop* 🔢!
- Запросы, которые может получать бот: { *[#all]* } ✔!";
}

if($LANGUAGES[$chat_id] == 'uz'){
$start_msg = "- Salom, #FULL ❤️!

- Botning funksiyalari: { *Token haqida ma'lumot olish 🧾, Webhook yaratish 📌, Webhookni o‘chirish 🗑, Kutilayotgan yangilanishlarni tozalash 🛑* } 👨🏻‍🔧!

- Quyidagi klaviatura orqali botni oson va qulay boshqarishingiz mumkin 👇!

- Bot versiyasi: *V3.0* 💫!

- Bot tilini o‘zgartirish: /languages 🔠!

- Bot kanali 📡!
- [Biz har doim yaxshilanishga intilamiz](t.me/it_bero) 💜!";
$auto = 'Avtomatik';
$max_updates = 'Maksimal yangilanishlar';
$support = 'Qo‘llab-quvvatlanadi';
$notsupport = 'Qo‘llab-quvvatlanmaydi';
$notfound = 'Topilmadi';
$found = 'Topildi';
$infoTok = "- Token haqida ma'lumot 🧾";
$delweb = "- Webhookni o‘chirish 🗑";
$creatweb = "- Webhook yaratish 📌";
$drop = "- Kutilayotgan yangilanishlarni tozalash 🛑";
$cancel = "- Bekor qilish ❌";
$delete_mesg = "- #$usrbot tomonidan | Webhook muvaffaqiyatli o‘chirildi 🗑!";
$wait = "Token tekshirilmoqda ♻️.";
$send_message = "- @#usrbot tomonidan | Webhook muvaffaqiyatli yaratildi ✅!\n"
. "- Ishga tushirish uchun /start yuboring ♻️!\n"
. "- *Eslatma*: Agar bot ishlamasa, oxirgi xatoni [Token ma'lumotlari](https://t.me/#usrbot?start=WebHookInfo) bo‘limida tekshirishingiz mumkin 📛!";

$now_send = "- Webhook yaratish uchun bot faylining havolasini yuboring 🖇!";
$now_less = "- Webhook yaratish jarayonini yakunlash uchun bir necha qadam qoldi 🔘!";
$click_ok = "- Bot qabul qilishi kerak bo‘lgan funksiyalarni yoqish va o‘chirish uchun tugmalarni bosing 🔘!

- Tugatgandan so‘ng, { - Yaratishni tugatish ☑ } tugmasini bosing";
$key_ok = "- Yaratishni tugatish ☑";
$error_webhook = "- Webhook yaratishda xatolik yuz berdi ⚠️!
------------------------------------
- Xato kodi: *#NUM* 🔢!
- Xato tavsifi: *#ERROR* 🛑!";
$s_back = "- Asosiy menyuga qaytildi 🔙!";
$DoneCancel = "- Buyruq bekor qilindi va asosiy menyuga qaytildi 🔙!";
$error_token = "- Yuborgan tokeningiz noto‘g‘ri ⚠️!";
$error_back = "- Buyruq bekor qilindi va asosiy menyuga qaytildi 🔙!";
$done_edit = "- Funksiyalar ro‘yxati yangilandi ✏!";
$error_ip = "- Iltimos, IP-manzilni quyidagi formatda yuboring { XX.XX.XX.XX } 🌐!
- Misol: 8.8.8.8 💫!";
$set_ip = "- Webhook so‘rovlarini yuborish uchun DNS orqali olingan avtomatik IP o‘rniga foydalaniladigan statsionar IP-manzilni yuboring { XX.XX.XX.XX } 🌐!";
$send_to = "
- Endi bot tokenini yuboring yoki @BotFather dan uni qayta yo‘naltiring 📝!";

$set_updates = "- Webhook orqali yangilanishlarni yetkazib berish uchun ruxsat berilgan maksimal HTTPS ulanishlar sonini yuboring { 1-100 } 🔢!
- Bot serverining yuklanishini kamaytirish uchun kichikroq qiymatlarni, unumdorlikni oshirish uchun katta qiymatlarni ishlating 📊!";
$error_updates = "- Iltimos, { 1 dan 100 gacha } son yuboring 🔢!";

$del_droper = 'Bog‘liq so‘rovlarni tozalash';
$yes = "- Ha ✔️";
$no = "- Yo‘q ✖️";
$you_have = "- Sizda kutilayotgan so‘rovlar mavjud. Ularni o‘chirishni xohlaysizmi? 🗑!
- Kutilayotgan so‘rovlar soni: { #NUM } 🔢!";
$drop_error = "- O‘chirish uchun kutilayotgan yangilanishlar mavjud emas ⚠️!";
$drop_true = "- Kutilayotgan so‘rovlar soni: { #NUM } 🔢!
- Barcha kutilayotgan so‘rovlar muvaffaqiyatli o‘chirildi ✅!
";
$infoX = "*- Bot haqida ma'lumot 🧾!*
------------------------------------
- Bot nomi: [#name_bot] 🤖!
- Bot foydalanuvchi nomi: [@#user_bot] 🌀!
- Bot ID: `#id_bot` 🆔!
------------------------------------";

$deleter = "- Webhook muvaffaqiyatli o‘chirildi 🗑!";

$deleter1 = "- Webhook muvaffaqiyatli o‘chirildi 🗑!
- Asosiy menyuga qaytildi 🔙!";

$deleter2 = "- Webhook va kutilayotgan so‘rovlar muvaffaqiyatli o‘chirildi ✅!
- Asosiy menyuga qaytildi 🔙!";

$webhook_info = "*- Bot haqida ma'lumot 🧾!*
------------------------------------
- Bot nomi: [#name_bot] 🤖!
- Bot foydalanuvchi nomi: [@#user_bot] 🌀!
- Bot ID: [#id_bot] 🆔!
- Guruhlarga qo‘shish: *#add_to_group* 👥!
- Maxfiylik rejimi: *#privacy* 🔑! ⁣[(?)](https://core.telegram.org/bots/features#privacy-mode)
- Inline rejimi: *#inline* 💭! ⁣[(?)](https://core.telegram.org/bots/inline)
------------------------------------

*- Webhook haqida ma'lumot 🎫!*
------------------------------------
- Webhook URL: *#link_webhook* 🖇!
- Webhook IP-manzili: *#ip* ℹ️!
- Maxsus sertifikat: *#cert* 🌐!
- Kutilayotgan so‘rovlar soni: [#drop] 🔢!
- Har bir so‘rov uchun maksimal yangilanishlar: [#max] ↗️!
- Bot qabul qilishi mumkin bo‘lgan so‘rovlar: { *[#all]* } ✔!
";
}

// BY BERO - @iT_BERO - @OM_4Ra