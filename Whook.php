<?php // حقوق الملف محفوضه لـ @SeroBots بذمته الي يغير
error_reporting(0);
$API_KEY = "ضـع توكنك | TOKEN" ;

define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$usrbot = bot("getme")->result->username;


define("USR_BOT", $usrbot);


$BERO = json_decode(file_get_contents('BERO.json'),1);
$LANGUAGES = json_decode(file_get_contents('LANGUAGES.json'),1);
function SETJSON($INPUT,$NAME = "BERO.json")
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "$NAME";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}



$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

if ($update->callback_query) {
    $data = $update->callback_query->data; 
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

mkdir('DATA_INFOS');
mkdir("DATA_INFOS/$chat_id");
$HELPER = json_decode(file_get_contents("DATA_INFOS/$chat_id/HELPER.json"),1);
function et($text) {
    $pn = '/\d{10,}:([A-Za-z0-9\-_]+)/';
    if (preg_match($pn, $text, $ms)) {
        return $ms[0]; 
    }
    return null; 
}

function isValidUrl($text) {
    return filter_var($text, FILTER_VALIDATE_URL) !== false;
}

function isOnlyUrl($text) {
    $text = trim($text);
    if (isValidUrl($text)) {
        return preg_match('/^[a-zA-Z0-9]+:\/\//', $text);
    }

    return false;
}

include('LANGUAGES.php');


$Commands = [
    ["command" => "start", "description" => "Bot Control 🤖"],
    ["command" => "webhookinfo", "description" => "Token Information 🧾"],
    ["command" => "setwebhook", "description" => "Set Webhook 📌"],
    ["command" => "deletewebhook", "description" => "Delete Webhook 🗑"],
    ["command" => "drop_pending_updates", "description" => "Drop Pending Updates 🛑"],
    ["command" => "languages", "description" => "Changing the bot language 🔠"]
];

bot('setMyCommands', [
    'commands' => json_encode($Commands)
]);

if(!$LANGUAGES['IF'][$chat_id]){
    $lan = $update->message->from->language_code;
    $LANGUAGES['IF'][$chat_id] = 'ok';
    $LANGUAGES[$chat_id] = $lan;
    SETJSON($LANGUAGES,"LANGUAGES.json");
    $K = [
        'ar' => 'تم ضبط لغتك العربيه تلقائيا',
        'en' => 'Your language has been automatically set to english.',
        'fa' => 'زبان شما به طور خودکار روی فارسي تنظیم شده است.',
        'tr' => 'Diliniz otomatik olarak turki olarak ayarlandı.',
        'ru' => 'Ваш язык был автоматически установлен на арабский.',
        'uz' => 'Tiliniz avtomatik ravishda uzbek tiliga sozlandi.',
        'zh' => '您的语言已自动设置为阿拉伯语。',
    ];
    
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "".$K[$lan]."
",
        'parse_mode' => 'Markdown',
        'disable_web_page_preview' => true,
    ]);

}

if($text == $cancel){
    bot('DeleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=> $BERO['ID'][$chat_id],
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $DoneCancel,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$infoTok",]],
                [['text' => "$delweb",],['text' => "$creatweb",]],
                [['text' => "$drop",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    unlick($HELPER);
SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
    unset($BERO[$chat_id]);
    unset($BERO['X'][$chat_id]);
    SETJSON($BERO);
    die();
}

if($text == '/start'){
    bot('DeleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=> $BERO['ID'][$chat_id],
    ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => str_replace("#FULL","[$name](tg://user?id=$chat_id)",$start_msg),
            'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
        unlick($HELPER);
SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
        unset($BERO[$chat_id]);
    unset($BERO['X'][$chat_id]);
    SETJSON($BERO);
    die();
}



if ($text == '/languages') {
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "- [/lang_ar] ~> *العربية 🇵🇸* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_en] ~> *English 🇺🇸* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_ru] ~> *Русский 🇷🇺* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_uz] ~> *O'zbekcha 🇺🇿* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_hi] ~> *हिंदी 🇮🇳* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_tr] ~> *Türkçe 🇹🇷* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_fa] ~> *فارسی 🇮🇷* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_zh] ~> *中文 🇨🇳* | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_krd] ~> *کوردیی ناوەندی 🇭🇺*  | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
- [/lang_kr] ~> *کوردیی باديني 🇭🇺*  | [(• Ᏼ Ξ Ꭱ Ｏ)](http://t.me/it_bero)
",
        'parse_mode' => 'Markdown',
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "العربية 🇵🇸", 'callback_data' => "setl_ar"], ['text' => "O'zbekcha 🇺🇿", 'callback_data' => "setl_uz"]],
                [['text' => "English 🇺🇸", 'callback_data' => "setl_en"], ['text' => "Русский 🇷🇺", 'callback_data' => "setl_ru"]],
                [['text' => "हिंदी 🇮🇳", 'callback_data' => "setl_hi"],['text' => "Türkçe 🇹🇷", 'callback_data' => "setl_tr"]],
                [['text' => "فارسی 🇮🇷", 'callback_data' => "setl_fa"],['text' => "中文 🇨🇳", 'callback_data' => "setl_zh"]],
                [['text' => "کوردیی ناوەندی 🇭🇺", 'callback_data' => "setl_krd"],['text' => "کوردیی باديني 🇭🇺", 'callback_data' => "setl_kr"]],
            ]
        ])
    ]);
}

$V = explode('setl_',$data)[1];
if($V){
    if($V == 'en' or $V == 'ru' or $V == 'uz' or $V == 'hi' or $V == 'tr' or $V == 'fa' or $V == 'zh' or $V == 'kr' or $V == 'krd'){
        $LANGUAGES[$chat_id] = $V;
        SETJSON($LANGUAGES,"LANGUAGES.json");
    }else{
        unset($LANGUAGES[$chat_id]);
        SETJSON($LANGUAGES,"LANGUAGES.json");
    }
    bot('EditMessagetEXT', [
        'chat_id' => $chat_id,'message_id'=>$message_id,
        'text' => "Refresh ♻️ - /start",
        'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
    ]);
    die();
}
$G = explode('lang_',$text)[1];
if($G){
    $V = $G;
    if($G == 'en' or $G == 'ru' or $G == 'uz' or $V == 'hi' or $V == 'tr' or $V == 'fa' or $V == 'zh' or $V == 'kr' or $V == 'krd'){
        $LANGUAGES[$chat_id] = $G;
        SETJSON($LANGUAGES,"LANGUAGES.json");
    }else{
        unset($LANGUAGES[$chat_id]);
        SETJSON($LANGUAGES,"LANGUAGES.json");
    }
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "Refresh ♻️ - /start",
        'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
    ]);
    die();
}
if($text == $creatweb or $text == '/start SetWebHook'){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*$creatweb*\n".$send_to,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$cancel",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    $BERO[$chat_id] = "creat";
    SETJSON($BERO);
    die();
}


if($text and $BERO[$chat_id] == 'creat'){
    unset($BERO[$chat_id]);
    SETJSON($BERO);
    if(et($text)){
        $InfoBot = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
$ok = $InfoBot->ok; 
if($ok != 1){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_token,
        'parse_mode' => 'Markdown',
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_back,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$infoTok",]],
                [['text' => "$delweb",],['text' => "$creatweb",]],
                [['text' => "$drop",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    die();
}
$result_id = $InfoBot->result->id; 
$result_is_bot = $InfoBot->result->is_bot; 
$result_first_name = $InfoBot->result->first_name; 
$result_username = $InfoBot->result->username; 

$a1 = array('#name_bot','#user_bot','#id_bot');
$a2 = array($result_first_name,$result_username,$result_id);
$text_to_send = str_replace($a1,$a2,$infoX);
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => "$text_to_send\n\n".$now_send,
    'parse_mode' => 'Markdown',
    'reply_markup' => json_encode([
        'keyboard' => [
            [['text' => "$cancel",]],
        ],
        'resize_keyboard' => true
    ])
]);
$HELPER['tok'][$chat_id] = $text;
        SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
$BERO[$chat_id] = "url";
$BERO['X'][$chat_id] = $text;
    SETJSON($BERO);
    die();
    }else{
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_token,
            'parse_mode' => 'Markdown',
        ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_back,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }

}


if ($text && $BERO[$chat_id] == 'url') {
    if (isOnlyUrl($text)) {
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $now_less,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$cancel"], ['text' => "$key_ok"]],
                ],
                'resize_keyboard' => true
            ])
        ]);
        $HELPER['message'][$chat_id] = '✅';
        $HELPER['edited_message'][$chat_id] = '✅';
        $HELPER['channel_post'][$chat_id] = '✅';
        $HELPER['edited_channel_post'][$chat_id] = '✅';
        $HELPER['inline_query'][$chat_id] = '✅';
        $HELPER['chosen_inline_result'][$chat_id] = '✅';
        $HELPER['callback_query'][$chat_id] = '✅';
        $HELPER['shipping_query'][$chat_id] = '✅';
        $HELPER['pre_checkout_query'][$chat_id] = '✅';
        $HELPER['poll'][$chat_id] = '✅';
        $HELPER['poll_answer'][$chat_id] = '✅';
        $HELPER['my_chat_member'][$chat_id] = '✅';
        $HELPER['chat_join_request'][$chat_id] = '✅';
        $HELPER['chat_boost'][$chat_id] = '✅';
        $HELPER['removed_chat_boost'][$chat_id] = '✅';
        $HELPER['business_connection'][$chat_id] = '✅';
        $HELPER['business_message'][$chat_id] = '✅';
        $HELPER['edited_business_message'][$chat_id] = '✅';
        $HELPER['deleted_business_message'][$chat_id] = '✅';
        $HELPER['purchased_paid_media'][$chat_id] = '✅';
        $HELPER['chat_member'][$chat_id] = '✅';
        $HELPER['message_reaction'][$chat_id] = '✅';
        $HELPER['message_reaction_count'][$chat_id] = '✅';
        $HELPER['del_droper_s'][$chat_id] = '❌';
        $HELPER['ip_address'][$chat_id] = $auto;
        $HELPER['max_updates_s'][$chat_id] = 40;
        $HELPER['url'][$chat_id] = $text;
        SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");

        $message = $HELPER['message'][$chat_id];
$edited_message = $HELPER['edited_message'][$chat_id];
$channel_post = $HELPER['channel_post'][$chat_id];
$edited_channel_post = $HELPER['edited_channel_post'][$chat_id];
$inline_query = $HELPER['inline_query'][$chat_id];
$chosen_inline_result = $HELPER['chosen_inline_result'][$chat_id];
$callback_query = $HELPER['callback_query'][$chat_id];
$shipping_query = $HELPER['shipping_query'][$chat_id];
$pre_checkout_query = $HELPER['pre_checkout_query'][$chat_id];
$poll = $HELPER['poll'][$chat_id];
$poll_answer = $HELPER['poll_answer'][$chat_id];
$my_chat_member = $HELPER['my_chat_member'][$chat_id];
$chat_join_request = $HELPER['chat_join_request'][$chat_id];
$chat_boost = $HELPER['chat_boost'][$chat_id];
$removed_chat_boost = $HELPER['removed_chat_boost'][$chat_id];
$business_connection = $HELPER['business_connection'][$chat_id];
$business_message = $HELPER['business_message'][$chat_id];
$edited_business_message = $HELPER['edited_business_message'][$chat_id];
$deleted_business_message = $HELPER['deleted_business_message'][$chat_id];
$purchased_paid_media = $HELPER['purchased_paid_media'][$chat_id];
$chat_member = $HELPER['chat_member'][$chat_id];
$message_reaction = $HELPER['message_reaction'][$chat_id];
$message_reaction_count = $HELPER['message_reaction_count'][$chat_id];
$del_droper_s = $HELPER['del_droper_s'][$chat_id];
$ip_address = $HELPER['ip_address'][$chat_id];
$max_updates_s = $HELPER['max_updates_s'][$chat_id];
        $f=bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $click_ok,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [["text" => "Message : $message", "callback_data" => "toggle_message"]],
                    [["text" => "Edited Message : $edited_message", "callback_data" => "toggle_edited_message"]],
                    [["text" => "Channel Post : $channel_post", "callback_data" => "toggle_channel_post"]],
                    [["text" => "Edited Channel Post : $edited_channel_post", "callback_data" => "toggle_edited_channel_post"]],
                    [["text" => "Inline Query : $inline_query", "callback_data" => "toggle_inline_query"]],
                    [["text" => "Chosen Inline Result : $chosen_inline_result", "callback_data" => "toggle_chosen_inline_result"]],
                    [["text" => "Callback Query : $callback_query", "callback_data" => "toggle_callback_query"]],
                    [["text" => "Shipping Query : $shipping_query", "callback_data" => "toggle_shipping_query"]],
                    [["text" => "Pre-checkout Query : $pre_checkout_query", "callback_data" => "toggle_pre_checkout_query"]],
                    [["text" => "Poll : $poll", "callback_data" => "toggle_poll"]],
                    [["text" => "Poll Answer : $poll_answer", "callback_data" => "toggle_poll_answer"]],
                    [["text" => "My Chat Member : $my_chat_member", "callback_data" => "toggle_my_chat_member"]],
                    [["text" => "Chat Join Request : $chat_join_request", "callback_data" => "toggle_chat_join_request"]],
                    [["text" => "Chat Boost : $chat_boost", "callback_data" => "toggle_chat_boost"]],
                    [["text" => "Removed Chat Boost : $removed_chat_boost", "callback_data" => "toggle_removed_chat_boost"]],
                    [["text" => "Business Connection : $business_connection", "callback_data" => "toggle_business_connection"]],
                    [["text" => "Business Message : $business_message", "callback_data" => "toggle_business_message"]],
                    [["text" => "Edited Business Message : $edited_business_message", "callback_data" => "toggle_edited_business_message"]],
                    [["text" => "Deleted Business Message : $deleted_business_message", "callback_data" => "toggle_deleted_business_message"]],
                    [["text" => "Purchased Paid Media : $purchased_paid_media", "callback_data" => "toggle_purchased_paid_media"]],
                    [["text" => "Chat Member : $chat_member", "callback_data" => "toggle_chat_member"]],
                    [["text" => "Message Reaction : $message_reaction", "callback_data" => "toggle_message_reaction"]],
                    [["text" => "Message Reaction Count : $message_reaction_count", "callback_data" => "toggle_message_reaction_count"]],
                    [["text" => "ip_address : $ip_address", "callback_data" => "setip"],["text" => "$max_updates ; $max_updates_s", "callback_data" => "max_updates"]],
                    [["text" => "$del_droper : $del_droper_s", "callback_data" => "toggle_del_droper_s"]]
                    
                ]
            ])
        ]);
        $BERO['ID'][$chat_id] = $f->result->message_id;
        SETJSON($BERO);
    }
}

$b = explode('toggle_',$data)[1];
if($b){
    if($HELPER[$b][$chat_id] == null or $HELPER[$b][$chat_id] == '✅'){
        $choose = '❌';
    }else{
        $choose = '✅';
    }
    $HELPER[$b][$chat_id] = $choose;
    SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
    $message = $HELPER['message'][$chat_id];
    $edited_message = $HELPER['edited_message'][$chat_id];
    $channel_post = $HELPER['channel_post'][$chat_id];
    $edited_channel_post = $HELPER['edited_channel_post'][$chat_id];
    $inline_query = $HELPER['inline_query'][$chat_id];
    $chosen_inline_result = $HELPER['chosen_inline_result'][$chat_id];
    $callback_query = $HELPER['callback_query'][$chat_id];
    $shipping_query = $HELPER['shipping_query'][$chat_id];
    $pre_checkout_query = $HELPER['pre_checkout_query'][$chat_id];
    $poll = $HELPER['poll'][$chat_id];
    $poll_answer = $HELPER['poll_answer'][$chat_id];
    $my_chat_member = $HELPER['my_chat_member'][$chat_id];
    $chat_join_request = $HELPER['chat_join_request'][$chat_id];
    $chat_boost = $HELPER['chat_boost'][$chat_id];
    $removed_chat_boost = $HELPER['removed_chat_boost'][$chat_id];
    $business_connection = $HELPER['business_connection'][$chat_id];
    $business_message = $HELPER['business_message'][$chat_id];
    $edited_business_message = $HELPER['edited_business_message'][$chat_id];
    $deleted_business_message = $HELPER['deleted_business_message'][$chat_id];
    $purchased_paid_media = $HELPER['purchased_paid_media'][$chat_id];
    $chat_member = $HELPER['chat_member'][$chat_id];
    $message_reaction = $HELPER['message_reaction'][$chat_id];
    $message_reaction_count = $HELPER['message_reaction_count'][$chat_id];
    $del_droper_s = $HELPER['del_droper_s'][$chat_id];
    $ip_address = $HELPER['ip_address'][$chat_id];
    $max_updates_s = $HELPER['max_updates_s'][$chat_id];
    bot('EditMessageText', [
        'chat_id' => $chat_id,'message_id' => $message_id,
        'text' => $click_ok,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [["text" => "Message : $message", "callback_data" => "toggle_message"]],
                [["text" => "Edited Message : $edited_message", "callback_data" => "toggle_edited_message"]],
                [["text" => "Channel Post : $channel_post", "callback_data" => "toggle_channel_post"]],
                [["text" => "Edited Channel Post : $edited_channel_post", "callback_data" => "toggle_edited_channel_post"]],
                [["text" => "Inline Query : $inline_query", "callback_data" => "toggle_inline_query"]],
                [["text" => "Chosen Inline Result : $chosen_inline_result", "callback_data" => "toggle_chosen_inline_result"]],
                [["text" => "Callback Query : $callback_query", "callback_data" => "toggle_callback_query"]],
                [["text" => "Shipping Query : $shipping_query", "callback_data" => "toggle_shipping_query"]],
                [["text" => "Pre-checkout Query : $pre_checkout_query", "callback_data" => "toggle_pre_checkout_query"]],
                [["text" => "Poll : $poll", "callback_data" => "toggle_poll"]],
                [["text" => "Poll Answer : $poll_answer", "callback_data" => "toggle_poll_answer"]],
                [["text" => "My Chat Member : $my_chat_member", "callback_data" => "toggle_my_chat_member"]],
                [["text" => "Chat Join Request : $chat_join_request", "callback_data" => "toggle_chat_join_request"]],
                [["text" => "Chat Boost : $chat_boost", "callback_data" => "toggle_chat_boost"]],
                [["text" => "Removed Chat Boost : $removed_chat_boost", "callback_data" => "toggle_removed_chat_boost"]],
                [["text" => "Business Connection : $business_connection", "callback_data" => "toggle_business_connection"]],
                [["text" => "Business Message : $business_message", "callback_data" => "toggle_business_message"]],
                [["text" => "Edited Business Message : $edited_business_message", "callback_data" => "toggle_edited_business_message"]],
                [["text" => "Deleted Business Message : $deleted_business_message", "callback_data" => "toggle_deleted_business_message"]],
                [["text" => "Purchased Paid Media : $purchased_paid_media", "callback_data" => "toggle_purchased_paid_media"]],
                [["text" => "Chat Member : $chat_member", "callback_data" => "toggle_chat_member"]],
                [["text" => "Message Reaction : $message_reaction", "callback_data" => "toggle_message_reaction"]],
                [["text" => "Message Reaction Count : $message_reaction_count", "callback_data" => "toggle_message_reaction_count"]],
                [["text" => "ip_address : $ip_address", "callback_data" => "setip"],["text" => "$max_updates ; $max_updates_s", "callback_data" => "max_updates"]],
                [["text" => "$del_droper : $del_droper_s", "callback_data" => "toggle_del_droper_s"]]
                
            ]
        ])
    ]);
}

if($data == 'to_web'){
    $message = $HELPER['message'][$chat_id];
    $edited_message = $HELPER['edited_message'][$chat_id];
    $channel_post = $HELPER['channel_post'][$chat_id];
    $edited_channel_post = $HELPER['edited_channel_post'][$chat_id];
    $inline_query = $HELPER['inline_query'][$chat_id];
    $chosen_inline_result = $HELPER['chosen_inline_result'][$chat_id];
    $callback_query = $HELPER['callback_query'][$chat_id];
    $shipping_query = $HELPER['shipping_query'][$chat_id];
    $pre_checkout_query = $HELPER['pre_checkout_query'][$chat_id];
    $poll = $HELPER['poll'][$chat_id];
    $poll_answer = $HELPER['poll_answer'][$chat_id];
    $my_chat_member = $HELPER['my_chat_member'][$chat_id];
    $chat_join_request = $HELPER['chat_join_request'][$chat_id];
    $chat_boost = $HELPER['chat_boost'][$chat_id];
    $removed_chat_boost = $HELPER['removed_chat_boost'][$chat_id];
    $business_connection = $HELPER['business_connection'][$chat_id];
    $business_message = $HELPER['business_message'][$chat_id];
    $edited_business_message = $HELPER['edited_business_message'][$chat_id];
    $deleted_business_message = $HELPER['deleted_business_message'][$chat_id];
    $purchased_paid_media = $HELPER['purchased_paid_media'][$chat_id];
    $chat_member = $HELPER['chat_member'][$chat_id];
    $message_reaction = $HELPER['message_reaction'][$chat_id];
    $message_reaction_count = $HELPER['message_reaction_count'][$chat_id];
    $del_droper_s = $HELPER['del_droper_s'][$chat_id];
    $ip_address = $HELPER['ip_address'][$chat_id];
    $max_updates_s = $HELPER['max_updates_s'][$chat_id];
    bot('EditMessageText', [
        'chat_id' => $chat_id,'message_id' => $message_id,
        'text' => $click_ok,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [["text" => "Message : $message", "callback_data" => "toggle_message"]],
                [["text" => "Edited Message : $edited_message", "callback_data" => "toggle_edited_message"]],
                [["text" => "Channel Post : $channel_post", "callback_data" => "toggle_channel_post"]],
                [["text" => "Edited Channel Post : $edited_channel_post", "callback_data" => "toggle_edited_channel_post"]],
                [["text" => "Inline Query : $inline_query", "callback_data" => "toggle_inline_query"]],
                [["text" => "Chosen Inline Result : $chosen_inline_result", "callback_data" => "toggle_chosen_inline_result"]],
                [["text" => "Callback Query : $callback_query", "callback_data" => "toggle_callback_query"]],
                [["text" => "Shipping Query : $shipping_query", "callback_data" => "toggle_shipping_query"]],
                [["text" => "Pre-checkout Query : $pre_checkout_query", "callback_data" => "toggle_pre_checkout_query"]],
                [["text" => "Poll : $poll", "callback_data" => "toggle_poll"]],
                [["text" => "Poll Answer : $poll_answer", "callback_data" => "toggle_poll_answer"]],
                [["text" => "My Chat Member : $my_chat_member", "callback_data" => "toggle_my_chat_member"]],
                [["text" => "Chat Join Request : $chat_join_request", "callback_data" => "toggle_chat_join_request"]],
                [["text" => "Chat Boost : $chat_boost", "callback_data" => "toggle_chat_boost"]],
                [["text" => "Removed Chat Boost : $removed_chat_boost", "callback_data" => "toggle_removed_chat_boost"]],
                [["text" => "Business Connection : $business_connection", "callback_data" => "toggle_business_connection"]],
                [["text" => "Business Message : $business_message", "callback_data" => "toggle_business_message"]],
                [["text" => "Edited Business Message : $edited_business_message", "callback_data" => "toggle_edited_business_message"]],
                [["text" => "Deleted Business Message : $deleted_business_message", "callback_data" => "toggle_deleted_business_message"]],
                [["text" => "Purchased Paid Media : $purchased_paid_media", "callback_data" => "toggle_purchased_paid_media"]],
                [["text" => "Chat Member : $chat_member", "callback_data" => "toggle_chat_member"]],
                [["text" => "Message Reaction : $message_reaction", "callback_data" => "toggle_message_reaction"]],
                [["text" => "Message Reaction Count : $message_reaction_count", "callback_data" => "toggle_message_reaction_count"]],
                [["text" => "ip_address : $ip_address", "callback_data" => "setip"],["text" => "$max_updates ; $max_updates_s", "callback_data" => "max_updates"]],
                [["text" => "$del_droper : $del_droper_s", "callback_data" => "toggle_del_droper_s"]]
                
            ]
        ])
    ]);
}

$BERO = json_decode(file_get_contents('BERO.json'),1);
if($data == 'max_updates'){
    bot('EditMessageText', [
        'chat_id' => $chat_id,'message_id' => $message_id,
        'text' => $set_updates,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [["text" => "$cancel", "callback_data" => "to_web"]],
            ]
        ])
    ]);
    $BERO[$chat_id] = 'supdate';
    $BERO['ID'][$chat_id] = $message_id;
    SETJSON($BERO);
}

if($text and $BERO[$chat_id] == 'supdate'){
    if($text >= 1 and $text <= 100){
        $HELPER['max_updates_s'][$chat_id] = $text;
        SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
        $message = $HELPER['message'][$chat_id];
        $edited_message = $HELPER['edited_message'][$chat_id];
        $channel_post = $HELPER['channel_post'][$chat_id];
        $edited_channel_post = $HELPER['edited_channel_post'][$chat_id];
        $inline_query = $HELPER['inline_query'][$chat_id];
        $chosen_inline_result = $HELPER['chosen_inline_result'][$chat_id];
        $callback_query = $HELPER['callback_query'][$chat_id];
        $shipping_query = $HELPER['shipping_query'][$chat_id];
        $pre_checkout_query = $HELPER['pre_checkout_query'][$chat_id];
        $poll = $HELPER['poll'][$chat_id];
        $poll_answer = $HELPER['poll_answer'][$chat_id];
        $my_chat_member = $HELPER['my_chat_member'][$chat_id];
        $chat_join_request = $HELPER['chat_join_request'][$chat_id];
        $chat_boost = $HELPER['chat_boost'][$chat_id];
        $removed_chat_boost = $HELPER['removed_chat_boost'][$chat_id];
        $business_connection = $HELPER['business_connection'][$chat_id];
        $business_message = $HELPER['business_message'][$chat_id];
        $edited_business_message = $HELPER['edited_business_message'][$chat_id];
        $deleted_business_message = $HELPER['deleted_business_message'][$chat_id];
        $purchased_paid_media = $HELPER['purchased_paid_media'][$chat_id];
        $chat_member = $HELPER['chat_member'][$chat_id];
        $message_reaction = $HELPER['message_reaction'][$chat_id];
        $message_reaction_count = $HELPER['message_reaction_count'][$chat_id];
        $del_droper_s = $HELPER['del_droper_s'][$chat_id];
        $ip_address = $HELPER['ip_address'][$chat_id];
        $max_updates_s = $HELPER['max_updates_s'][$chat_id];
        bot('EditMessageText', [
            'chat_id' => $chat_id,'message_id' => $BERO['ID'][$chat_id],
            'text' => $click_ok,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [["text" => "Message : $message", "callback_data" => "toggle_message"]],
                    [["text" => "Edited Message : $edited_message", "callback_data" => "toggle_edited_message"]],
                    [["text" => "Channel Post : $channel_post", "callback_data" => "toggle_channel_post"]],
                    [["text" => "Edited Channel Post : $edited_channel_post", "callback_data" => "toggle_edited_channel_post"]],
                    [["text" => "Inline Query : $inline_query", "callback_data" => "toggle_inline_query"]],
                    [["text" => "Chosen Inline Result : $chosen_inline_result", "callback_data" => "toggle_chosen_inline_result"]],
                    [["text" => "Callback Query : $callback_query", "callback_data" => "toggle_callback_query"]],
                    [["text" => "Shipping Query : $shipping_query", "callback_data" => "toggle_shipping_query"]],
                    [["text" => "Pre-checkout Query : $pre_checkout_query", "callback_data" => "toggle_pre_checkout_query"]],
                    [["text" => "Poll : $poll", "callback_data" => "toggle_poll"]],
                    [["text" => "Poll Answer : $poll_answer", "callback_data" => "toggle_poll_answer"]],
                    [["text" => "My Chat Member : $my_chat_member", "callback_data" => "toggle_my_chat_member"]],
                    [["text" => "Chat Join Request : $chat_join_request", "callback_data" => "toggle_chat_join_request"]],
                    [["text" => "Chat Boost : $chat_boost", "callback_data" => "toggle_chat_boost"]],
                    [["text" => "Removed Chat Boost : $removed_chat_boost", "callback_data" => "toggle_removed_chat_boost"]],
                    [["text" => "Business Connection : $business_connection", "callback_data" => "toggle_business_connection"]],
                    [["text" => "Business Message : $business_message", "callback_data" => "toggle_business_message"]],
                    [["text" => "Edited Business Message : $edited_business_message", "callback_data" => "toggle_edited_business_message"]],
                    [["text" => "Deleted Business Message : $deleted_business_message", "callback_data" => "toggle_deleted_business_message"]],
                    [["text" => "Purchased Paid Media : $purchased_paid_media", "callback_data" => "toggle_purchased_paid_media"]],
                    [["text" => "Chat Member : $chat_member", "callback_data" => "toggle_chat_member"]],
                    [["text" => "Message Reaction : $message_reaction", "callback_data" => "toggle_message_reaction"]],
                    [["text" => "Message Reaction Count : $message_reaction_count", "callback_data" => "toggle_message_reaction_count"]],
                    [["text" => "ip_address : $ip_address", "callback_data" => "setip"],["text" => "$max_updates ; $max_updates_s", "callback_data" => "max_updates"]],
                    [["text" => "$del_droper : $del_droper_s", "callback_data" => "toggle_del_droper_s"]]
                    
                ]
            ])
        ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $done_edit,
            'parse_mode' => 'Markdown',
            'reply_to_message_id' => $BERO['ID'][$chat_id],
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$cancel",],['text' => "$key_ok",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
        $BERO[$chat_id] = "oncreate";
    SETJSON($BERO);
        
    }else{
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_updates,
            'parse_mode' => 'Markdown',
        ]);
    }
}

if($data == 'setip'){
    bot('EditMessageText', [
        'chat_id' => $chat_id,'message_id' => $message_id,
        'text' => $set_ip,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [["text" => "$cancel", "callback_data" => "to_web"]],
            ]
        ])
    ]);
    $BERO[$chat_id] = "ip";
    $BERO['ID'][$chat_id] = $message_id;
    SETJSON($BERO);
}

if($text and $BERO[$chat_id] == 'ip'){
if (filter_var($text, FILTER_VALIDATE_IP)) {
    $HELPER['ip_address'][$chat_id] = $text;
    SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
    $message = $HELPER['message'][$chat_id];
    $edited_message = $HELPER['edited_message'][$chat_id];
    $channel_post = $HELPER['channel_post'][$chat_id];
    $edited_channel_post = $HELPER['edited_channel_post'][$chat_id];
    $inline_query = $HELPER['inline_query'][$chat_id];
    $chosen_inline_result = $HELPER['chosen_inline_result'][$chat_id];
    $callback_query = $HELPER['callback_query'][$chat_id];
    $shipping_query = $HELPER['shipping_query'][$chat_id];
    $pre_checkout_query = $HELPER['pre_checkout_query'][$chat_id];
    $poll = $HELPER['poll'][$chat_id];
    $poll_answer = $HELPER['poll_answer'][$chat_id];
    $my_chat_member = $HELPER['my_chat_member'][$chat_id];
    $chat_join_request = $HELPER['chat_join_request'][$chat_id];
    $chat_boost = $HELPER['chat_boost'][$chat_id];
    $removed_chat_boost = $HELPER['removed_chat_boost'][$chat_id];
    $business_connection = $HELPER['business_connection'][$chat_id];
    $business_message = $HELPER['business_message'][$chat_id];
    $edited_business_message = $HELPER['edited_business_message'][$chat_id];
    $deleted_business_message = $HELPER['deleted_business_message'][$chat_id];
    $purchased_paid_media = $HELPER['purchased_paid_media'][$chat_id];
    $chat_member = $HELPER['chat_member'][$chat_id];
    $message_reaction = $HELPER['message_reaction'][$chat_id];
    $message_reaction_count = $HELPER['message_reaction_count'][$chat_id];
    $del_droper_s = $HELPER['del_droper_s'][$chat_id];
    $ip_address = $HELPER['ip_address'][$chat_id];
    $max_updates_s = $HELPER['max_updates_s'][$chat_id];
    bot('EditMessageText', [
        'chat_id' => $chat_id,'message_id' => $BERO['ID'][$chat_id],
        'text' => $click_ok,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [["text" => "Message : $message", "callback_data" => "toggle_message"]],
                [["text" => "Edited Message : $edited_message", "callback_data" => "toggle_edited_message"]],
                [["text" => "Channel Post : $channel_post", "callback_data" => "toggle_channel_post"]],
                [["text" => "Edited Channel Post : $edited_channel_post", "callback_data" => "toggle_edited_channel_post"]],
                [["text" => "Inline Query : $inline_query", "callback_data" => "toggle_inline_query"]],
                [["text" => "Chosen Inline Result : $chosen_inline_result", "callback_data" => "toggle_chosen_inline_result"]],
                [["text" => "Callback Query : $callback_query", "callback_data" => "toggle_callback_query"]],
                [["text" => "Shipping Query : $shipping_query", "callback_data" => "toggle_shipping_query"]],
                [["text" => "Pre-checkout Query : $pre_checkout_query", "callback_data" => "toggle_pre_checkout_query"]],
                [["text" => "Poll : $poll", "callback_data" => "toggle_poll"]],
                [["text" => "Poll Answer : $poll_answer", "callback_data" => "toggle_poll_answer"]],
                [["text" => "My Chat Member : $my_chat_member", "callback_data" => "toggle_my_chat_member"]],
                [["text" => "Chat Join Request : $chat_join_request", "callback_data" => "toggle_chat_join_request"]],
                [["text" => "Chat Boost : $chat_boost", "callback_data" => "toggle_chat_boost"]],
                [["text" => "Removed Chat Boost : $removed_chat_boost", "callback_data" => "toggle_removed_chat_boost"]],
                [["text" => "Business Connection : $business_connection", "callback_data" => "toggle_business_connection"]],
                [["text" => "Business Message : $business_message", "callback_data" => "toggle_business_message"]],
                [["text" => "Edited Business Message : $edited_business_message", "callback_data" => "toggle_edited_business_message"]],
                [["text" => "Deleted Business Message : $deleted_business_message", "callback_data" => "toggle_deleted_business_message"]],
                [["text" => "Purchased Paid Media : $purchased_paid_media", "callback_data" => "toggle_purchased_paid_media"]],
                [["text" => "Chat Member : $chat_member", "callback_data" => "toggle_chat_member"]],
                [["text" => "Message Reaction : $message_reaction", "callback_data" => "toggle_message_reaction"]],
                [["text" => "Message Reaction Count : $message_reaction_count", "callback_data" => "toggle_message_reaction_count"]],
                [["text" => "ip_address : $text", "callback_data" => "setip"],["text" => "$max_updates ; $max_updates_s", "callback_data" => "max_updates"]],
                [["text" => "$del_droper : $del_droper_s", "callback_data" => "toggle_del_droper_s"]]
                
            ]
        ])
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $done_edit,
        'parse_mode' => 'Markdown',
        'reply_to_message_id' => $BERO['ID'][$chat_id],
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$cancel",],['text' => "$key_ok",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    $BERO[$chat_id] = "oncreate";
    SETJSON($BERO);
}else{
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_ip,
        'parse_mode' => 'Markdown',
    ]);
}
}

if($text == $key_ok){
    bot('DeleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=> $BERO['ID'][$chat_id],
    ]);
    $tok = $HELPER['tok'][$chat_id];
    
    $del_droper_s = $HELPER['del_droper_s'][$chat_id];
    $ip_address = $HELPER['ip_address'][$chat_id];
    $max_updates_s = $HELPER['max_updates_s'][$chat_id];
    if($ip_address != $auto){
        $ip = "&ip_address=$ip_address";
    }
    if($max_updates_s){
        $max_connections = "&max_connections=$max_updates_s";
    }
    $variables = [
        'message', 'edited_message', 'channel_post', 'edited_channel_post', 'inline_query',
        'chosen_inline_result', 'callback_query', 'shipping_query', 'pre_checkout_query', 'poll',
        'poll_answer', 'my_chat_member', 'chat_join_request', 'chat_boost', 'removed_chat_boost',
        'business_connection', 'business_message', 'edited_business_message', 'deleted_business_message',
        'purchased_paid_media', 'chat_member', 'message_reaction', 'message_reaction_count',
        'del_droper_s', 'ip_address', 'max_updates_s'
    ];
    
    $validVars = [];
    
    foreach ($variables as $var) {
        if ($HELPER[$var][$chat_id] == "✅") {
            $validVars[] = $var;
        }
    }
    $OKS = file_get_contents("https://api.telegram.org/bot$tok/setwebhook?url=".$HELPER['url'][$chat_id]."".$ip."".$max_connections."&allowed_updates=".json_encode($validVars));
    $send_message = str_replace('#usrbot',$usrbot,$send_message);
file_get_contents("https://api.telegram.org/bot$tok/SendMessage?chat_id=$chat_id&parse_mode=Markdown&text=" . urlencode($send_message));

    $response = json_decode($OKS, true);
    if (!$response || !isset($response['ok']) || !$response['ok']) {
        $error_code = $response['error_code'] ?? '400';
        $description = $response['description'] ?? 'Bad Request: bad webhook: Failed to resolve host: Name or service not known ';
        
        $error_webhook = str_replace(['#NUM', '#ERROR'], [$error_code, $description], $error_webhook);
        
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_webhook,
            'parse_mode' => 'Markdown'
        ]);
        
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_back,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => $infoTok]],
                    [['text' => $delweb], ['text' => $creatweb]],
                    [['text' => $drop]],
                ],
                'resize_keyboard' => true
            ])
        ]);
        
        error_log("Webhook error: Code - $error_code, Description - $description");
        die();
    }
    $WebInfo = json_decode(file_get_contents("https://api.telegram.org/bot$tok/getWebhookInfo"));
$ok = $WebInfo->ok;
$result_url = $WebInfo->result->url;
if(!$result_url){
    $result_url = $notfound;
}
$result_has_custom_certificate = $WebInfo->result->has_custom_certificate; 
if($result_has_custom_certificate == 1){
    $result_has_custom_certificate = $found;
}else{
    $result_has_custom_certificate = $notfound;
}
$result_pending_update_count = $WebInfo->result->pending_update_count; 
$result_max_connections = $WebInfo->result->max_connections; 
$result_ip_address = $WebInfo->result->ip_address; 
if(!$result_ip_address){
    $result_ip_address = $notfound;
}


$InfoBot = json_decode(file_get_contents("https://api.telegram.org/bot$tok/getme"));
$ok = $InfoBot->ok; 
if($ok != 1){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_token,
        'parse_mode' => 'Markdown',
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_back,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$infoTok",]],
                [['text' => "$delweb",],['text' => "$creatweb",]],
                [['text' => "$drop",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    die();
}
$result_id = $InfoBot->result->id; 
$result_is_bot = $InfoBot->result->is_bot; 
$result_first_name = $InfoBot->result->first_name; 
$result_username = $InfoBot->result->username; 
$result_can_join_groups = $InfoBot->result->can_join_groups; //1
if($result_can_join_groups == 1){
    $result_can_join_groups = $support;
}else{
    $result_can_join_groups = $notsupport;
}
$result_can_read_all_group_messages = $InfoBot->result->can_read_all_group_messages; //
if($result_can_read_all_group_messages){
    $result_can_read_all_group_messages = $support;
}else{
    $result_can_read_all_group_messages = $notsupport;
}
$result_supports_inline_queries = $InfoBot->result->supports_inline_queries; //
if($result_supports_inline_queries){
    $result_supports_inline_queries = $support;
}else{
    $result_supports_inline_queries = $notsupport;
}
$result_can_connect_to_business = $InfoBot->result->can_connect_to_business; //
$result_has_main_web_app = $InfoBot->result->has_main_web_app; //

foreach($WebInfo->result->allowed_updates as $aX){
    $ALLS = $ALLS ." , ".$aX;
}

if ($ALLS == NULL){
    $ALLS = "جميع أنواع التحديثات باستثناء [chat_member, message_reaction, message_reaction_count] (افتراضي) ";
}
$a1 = array('#name_bot','#user_bot','#id_bot','#link_webhook','#ip','#drop','#max','#all');
$a2 = array($result_first_name,$result_username,$result_id,$result_url,$HELPER['ip_address'][$chat_id],$HELPER['del_droper_s'][$chat_id],$HELPER['max_updates_s'][$chat_id],$ALLS);

$text_to_send = str_replace($a1,$a2,$ok_web);
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $text_to_send,
    'parse_mode' => 'Markdown',
]);
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $DoneCancel,
    'parse_mode' => 'Markdown',
    'reply_markup' => json_encode([
        'keyboard' => [
            [['text' => "$infoTok",]],
            [['text' => "$delweb",],['text' => "$creatweb",]],
            [['text' => "$drop",]],
        ],
        'resize_keyboard' => true
    ])
]);
unset($BERO[$chat_id]);
unset($BERO['X'][$chat_id]);
SETJSON($BERO);

unlick($HELPER);
SETJSON($HELPER,"DATA_INFOS/$chat_id/HELPER.json");
die();
}



if($text == $drop or $text == '/drop_pending_updates' or $text == '/start DropUpdates'){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*$drop*\n".$send_to,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$cancel",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    $BERO[$chat_id] = "drop";
    SETJSON($BERO);
    die();
}

if($text and $BERO[$chat_id] == 'drop'){
    unset($BERO[$chat_id]);
    SETJSON($BERO);
    if(et($text)){
        $InfoBot = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
        $ok = $InfoBot->ok; 
        if($ok != 1){
            bot('SendMessage', [
                'chat_id' => $chat_id,
                'text' => $error_token,
                'parse_mode' => 'Markdown',
            ]);
            bot('SendMessage', [
                'chat_id' => $chat_id,
                'text' => $error_back,
                'parse_mode' => 'Markdown',
                'reply_markup' => json_encode([
                    'keyboard' => [
                        [['text' => "$infoTok",]],
                        [['text' => "$delweb",],['text' => "$creatweb",]],
                        [['text' => "$drop",]],
                    ],
                    'resize_keyboard' => true
                ])
            ]);
            die();
        }
        $result_id = $InfoBot->result->id; 
        $result_is_bot = $InfoBot->result->is_bot; 
        $result_first_name = $InfoBot->result->first_name; 
        $result_username = $InfoBot->result->username; 
        
        $a1 = array('#name_bot','#user_bot','#id_bot');
        $a2 = array($result_first_name,$result_username,$result_id);
        $text_to_send = str_replace($a1,$a2,$infoX);
        $WebInfo = json_decode(file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"));
$ok = $WebInfo->ok;
$result_pending_update_count = $WebInfo->result->pending_update_count; 
$result_url = $WebInfo->result->url;

if($result_pending_update_count <= 0){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $text_to_send ."\n".$drop_error,
        'parse_mode' => 'Markdown',
    ]);
}else{
    $drop_true = str_replace('#NUM',$result_pending_update_count,$drop_true);
    $DEL = file_get_contents("https://api.telegram.org/bot$text/setWebhook?url=$result_url&drop_pending_updates=true");
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $text_to_send ."\n".$drop_true,
        'parse_mode' => 'Markdown',
    ]);
}
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $s_back,
    'parse_mode' => 'Markdown',
    'reply_markup' => json_encode([
        'keyboard' => [
            [['text' => "$infoTok",]],
            [['text' => "$delweb",],['text' => "$creatweb",]],
            [['text' => "$drop",]],
        ],
        'resize_keyboard' => true
    ])
]);
    }else{
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_token,
            'parse_mode' => 'Markdown',
        ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_back,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }
}
if($text == $delweb or $text == '/deletewebhook' or $text == '/start DeleteWebHook'){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*$delweb*\n".$send_to,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$cancel",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    $BERO[$chat_id] = "del";
    SETJSON($BERO);
    die();
}
if($text == $infoTok or $text == '/webhookinfo' or $text == '/start WebHookInfo'){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => "*$infoTok*\n".$send_to,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$cancel",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    $BERO[$chat_id] = "info";
    SETJSON($BERO);
    die();
}

if($text and $BERO[$chat_id] == "DROPER"){
    
    $tok = $BERO['X'][$chat_id];
    unset($BERO[$chat_id]);
    unset($BERO['X'][$chat_id]);
    SETJSON($BERO);
    if($text == $no){
        $DEL = file_get_contents("https://api.telegram.org/bot$tok/deleteWebhook");
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $deleter1,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }
    if($text == $yes){
        $ch = curl_init("https://api.telegram.org/bot$tok/deleteWebhook?drop_pending_updates=True");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
         bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $deleter2,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }
}
if($text and $BERO[$chat_id] == 'del'){
    unset($BERO[$chat_id]);
    SETJSON($BERO);
    if(et($text)){
        $InfoBot = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
$ok = $InfoBot->ok; 
if($ok != 1){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_token,
        'parse_mode' => 'Markdown',
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_back,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$infoTok",]],
                [['text' => "$delweb",],['text' => "$creatweb",]],
                [['text' => "$drop",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    die();
}
$result_id = $InfoBot->result->id; 
$result_is_bot = $InfoBot->result->is_bot; 
$result_first_name = $InfoBot->result->first_name; 
$result_username = $InfoBot->result->username; 


$WebInfo = json_decode(file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"));
$ok = $WebInfo->ok;
$result_url = $WebInfo->result->url;
$result_has_custom_certificate = $WebInfo->result->has_custom_certificate; 
$result_pending_update_count = $WebInfo->result->pending_update_count; 
$result_max_connections = $WebInfo->result->max_connections; 
$result_ip_address = $WebInfo->result->ip_address;


$a1 = array('#name_bot','#user_bot','#id_bot');
$a2 = array($result_first_name,$result_username,$result_id);
$text_to_send = str_replace($a1,$a2,$infoX);
if($result_pending_update_count > 0){
    $you_have = str_replace('#NUM',$result_pending_update_count,$you_have);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $text_to_send,
        'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
    ]);  
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $you_have,
        'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$no",],['text' => "$yes",]],
                [['text' => "$cancel",]],
            ],
            'resize_keyboard' => true
        ])
    ]);  
    $BERO['X'][$chat_id] = $text;
    $BERO[$chat_id] = 'DROPER';
    SETJSON($BERO);
    die();
}else{
    $DEL = file_get_contents("https://api.telegram.org/bot$text/deleteWebhook");
    $msg = str_replace('#usrbot',$usrbot,$delete_mesg);
  file_get_contents("https://api.telegram.org/bot$text/SendMessage?chat_id=$chat_id&text=".urldecode($msg));
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $text_to_send ."\n".$deleter,
        'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
    ]);  
}

bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $s_back,
    'parse_mode' => 'Markdown',
    'reply_markup' => json_encode([
        'keyboard' => [
            [['text' => "$infoTok",]],
            [['text' => "$delweb",],['text' => "$creatweb",]],
            [['text' => "$drop",]],
        ],
        'resize_keyboard' => true
    ])
]);
    }else{
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_token,
            'parse_mode' => 'Markdown',
        ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_back,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }
}

if($text and $BERO[$chat_id] == 'info'){
    unset($BERO[$chat_id]);
    SETJSON($BERO);
    
    if(et($text)){
$WebInfo = json_decode(file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo"));
$ok = $WebInfo->ok;
$result_url = $WebInfo->result->url;
if(!$result_url){
    $result_url = $notfound;
}
$result_has_custom_certificate = $WebInfo->result->has_custom_certificate; 
if($result_has_custom_certificate == 1){
    $result_has_custom_certificate = $found;
}else{
    $result_has_custom_certificate = $notfound;
}
$result_pending_update_count = $WebInfo->result->pending_update_count; 
$result_max_connections = $WebInfo->result->max_connections; 
$result_ip_address = $WebInfo->result->ip_address; 
if(!$result_ip_address){
    $result_ip_address = $notfound;
}


$InfoBot = json_decode(file_get_contents("https://api.telegram.org/bot$text/getme"));
$ok = $InfoBot->ok; 
if($ok != 1){
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_token,
        'parse_mode' => 'Markdown',
    ]);
    bot('SendMessage', [
        'chat_id' => $chat_id,
        'text' => $error_back,
        'parse_mode' => 'Markdown',
        'reply_markup' => json_encode([
            'keyboard' => [
                [['text' => "$infoTok",]],
                [['text' => "$delweb",],['text' => "$creatweb",]],
                [['text' => "$drop",]],
            ],
            'resize_keyboard' => true
        ])
    ]);
    die();
}
$result_id = $InfoBot->result->id; 
$result_is_bot = $InfoBot->result->is_bot; 
$result_first_name = $InfoBot->result->first_name; 
$result_username = $InfoBot->result->username; 
$result_can_join_groups = $InfoBot->result->can_join_groups; //1
if($result_can_join_groups == 1){
    $result_can_join_groups = $support;
}else{
    $result_can_join_groups = $notsupport;
}
$result_can_read_all_group_messages = $InfoBot->result->can_read_all_group_messages; //
if($result_can_read_all_group_messages){
    $result_can_read_all_group_messages = $support;
}else{
    $result_can_read_all_group_messages = $notsupport;
}
$result_supports_inline_queries = $InfoBot->result->supports_inline_queries; //
if($result_supports_inline_queries){
    $result_supports_inline_queries = $support;
}else{
    $result_supports_inline_queries = $notsupport;
}
$result_can_connect_to_business = $InfoBot->result->can_connect_to_business; //
$result_has_main_web_app = $InfoBot->result->has_main_web_app; //

foreach($WebInfo->result->allowed_updates as $aX){
    $ALLS = $ALLS ." , ".$aX;
}

if ($ALLS == NULL){
    $ALLS = "جميع أنواع التحديثات باستثناء [chat_member, message_reaction, message_reaction_count] (افتراضي) ";
}
$a1 = array('#name_bot','#user_bot','#id_bot','#add_to_group','#privacy','#inline','#link_webhook','#ip','#cert','#drop','#max','#all');
$a2 = array($result_first_name,$result_username,$result_id,$result_can_join_groups,$result_can_read_all_group_messages,$result_supports_inline_queries,$result_url,$result_ip_address,$result_has_custom_certificate,$result_pending_update_count,$result_max_connections,$ALLS);

$text_to_send = str_replace($a1,$a2,$webhook_info);
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $text_to_send,
    'parse_mode' => 'Markdown','disable_web_page_preview'=>true,
]);
bot('SendMessage', [
    'chat_id' => $chat_id,
    'text' => $s_back,
    'parse_mode' => 'Markdown',
    'reply_markup' => json_encode([
        'keyboard' => [
            [['text' => "$infoTok",]],
            [['text' => "$delweb",],['text' => "$creatweb",]],
            [['text' => "$drop",]],
        ],
        'resize_keyboard' => true
    ])
]);

    }else{
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_token,
            'parse_mode' => 'Markdown',
        ]);
        bot('SendMessage', [
            'chat_id' => $chat_id,
            'text' => $error_back,
            'parse_mode' => 'Markdown',
            'reply_markup' => json_encode([
                'keyboard' => [
                    [['text' => "$infoTok",]],
                    [['text' => "$delweb",],['text' => "$creatweb",]],
                    [['text' => "$drop",]],
                ],
                'resize_keyboard' => true
            ])
        ]);
    }
}

// BY BERO - @iT_BERO - @SeroBots