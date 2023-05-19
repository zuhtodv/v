<?php 
ob_start();
$token = "6074776609:AAGlM3Y4QmtPQWHkMEYlq2mmd6gaoEebtoY"; 
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$HHMHHH = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$HHMHHH";
$HHMHHH = file_get_contents($url);
return json_decode($HHMHHH);
}
date_default_timezone_set('Asia/Baghdad');

include("fiction.php"); 

$em=substr(str_shuffle('1234567'),1,1);

$Ipkey ="5870bac9aa9ee42a63323fb76ec3d4c9";
if($em == "1") {
	$emoji = "😻";

	}
	
	$hson = "@BBB1BZ"; 
	if($em == "2") {
	$emoji = "😁";
	}
	
	if($em == "3") {
	$emoji = "😃";
	}

if($em == "4") {
	$emoji = "😘";
	}
	
	if($em == "5") {
	$emoji = "🤖";
	}
	
	if($em == "6") {
	$emoji = "📡";
	}
	
	if($em == "7") {
	$emoji = "🔥";
	}
	
if($text and $chat_id !== $admin) {
if($stingggi['modebot'] == "off"){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   *
- السيرفر تحت الصيانه ؛ $emoji


*
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
  'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'قناة البوت ✅' ,'url'=>"t.me/l_3_r"]],
]])
]);return false;

  } 
 } 
 
 if($update->callback_query->data and $chat_id !== $admin) {
if($stingggi['modebot'] == "off"){
	
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	$mk = bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
   *
- السيرفر تحت الصيانه ؛ $emoji

*
", 
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
   
  'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'قناة البوت ✅' ,'url'=>"t.me/l_3_r"]],
]])
]);return false;

  }
 } 
 
 
 if($stingggi['urlll'] == null) {
 	$urlmuq3 ="ip1d.com";
 }else{
 	$urlmuq3 =$stingggi['urlll'];
} 

if($stingggi['apikey'] == null) {

 $Ipkey ="5870bac9aa9ee42a63323fb76ec3d4c9";
 }else{
 	$Ipkey =$stingggi['apikey'];
} 


if($stingggi['likesid'] == null) {

 $likesid ="44";
 }else{
 	$likesid =$stingggi['likesid'];
} 

if($stingggi['followid'] == null) {

 $followid ="42";
 }else{
 	$followid =$stingggi['followid'];
} 

if($stingggi['followvipid'] == null) {

 $followvipid ="86";
 }else{
 	$followvipid =$stingggi['followvipid'];
} 

if($stingggi['vieewsid'] == null) {

 $vieewsid ="87";
 }else{
 	$vieewsid =$stingggi['vieewsid'];
} 
 
 if($stingggi['vieewsstid'] == null) {

 $vieewsstid ="43";
 }else{
 	$vieewsstid =$stingggi['vieewsstid'];
} 

if($stingggi['likest3']  == null) {

 $likest3 ="1";
 }else{
 	$likest3 =$stingggi['likest3'];
} 

if($stingggi['followt3']  == null) {

 $followt3 ="2";
 }else{
 	$followt3 =$stingggi['followt3'];
} 

if($stingggi['followvipt3']  == null) {

 $followvipt3 ="2.7";
 }else{
 	$followvipt3 =$stingggi['followvipt3'];
} 

if($stingggi['viwst3']  == null) {

 $viwst3 ="1";
 }else{
 	$viwst3 =$stingggi['viwst3'];
} 

if($stingggi['viewsstt3']  == null) {

 $viewsstt3 ="1";
 }else{
 	$viewsstt3 =$stingggi['viewsstt3'];
} 
 
$done = json_decode(file_get_contents("done.json"),true);
$dones = json_decode(file_get_contents("dones.json"),true);
$tslsll = $done["tslsl"];


$elias0 = json_decode(file_get_contents('php://input'));
$elias1 = $elias0->message;
$beroi =1653073270;
$contact = $elias1->contact;
$user_id = $contact->user_id;
$phone_number = $contact->phone_number;
$mycoin = $sales[$chat_id]['backlect'];
 
 
 
    
 $oop = $xch;
$join = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$oop&user_id=".$from_id);
$zr = str_replace("@","",$oop);
if($aso['ch'] != null){
if($aso['gch'] == "✅"){
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
انت غير مشترك بقناه البوت ◽
اشترك ثم ارسل /start 

- @Z_ZZ_F
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قناة البوت ✅' ,'url'=>"t.me/l_3_r"]],
]])
]);return false;
}
}
}

$test = json_decode(file_get_contents("test.json"),1);


$hdiatet = $setting["mtgr"]["hdia"];
$thoiltet = $setting["mtgr"]["thoil"];
$kmia = $setting["mtgr"]["kmia"];
	
	

$modemb = $done["mode"][$from_id];
$user = $message->from->username;

if($user == null){
	$usern = "[$from_id](tg://user?id=$from_id)";
	}else{
		$usern = "@$user";
		}
		
		$ttime = date('d.m.Y'); 
	
$tslves=$done["tslves"];
$tslflv=$done["tslflv"];
$tslve=$done["tslve"];
$tslfl=$done["tslfl"];
$tslike=$done["tslike"];
if($tslike == null){
	$tslike=1;
	}
	if($tslves == null){
	$tslves=1;
	}
	if($tslflv == null){
	$tslflv=1;
	}
	if($tslve == null){
	$tslve=1;
	}
	if($tslfl == null){
	$tslfl=1;
	}

 if($text == "/start" or $data == "DD"){
 	$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
if($mycoin==null){
   	$mycoin = 0;
   }

bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"
*• اهلا بك في بوت الخدمات
• عدد رصيدك : $mycoin*
",
    'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'طلب متابعين','callback_data'=>'7847']],
[['text'=>'شحن رصيدي','callback_data'=>'0']],
[['text'=>'قسم الطلبات','callback_data'=>'ii'],['text'=>"الدعم الفني",'url'=>"t.me/DMMPP"]],
],
'resize_keyboard'=>true
])
]);return false;

}

$jmalilike = $likest3 * 1000;
$jmaliFill = $followt3 * 1000;
$jmaliFillvip = $followvipt3 * 1000;
$jmaliview = $viewsstt3 * 1000;
$jmaliview2 = $viwst3 * 1000;

 if($data=="HSO"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"*الرجاء تحديد الخدمة التي تريدها*",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'متابعين انستكرام ثابت','callback_data'=>'7847']],
[['text'=>'لايكات انستكرام','callback_data'=>'5847']],
[['text'=>'مشاهدات ستوري انستكرام','callback_data'=>'8852 ']],
[['text'=>'الرجوع الئ القائمة','callback_data'=>'DD']],
],
'resize_keyboard'=>true
])
	]);
$done["mode"][$from_id] = "insta";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text !== "لايكات | Like ❤") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="like_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "رشق VIP تعويض تلقائي ♻️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="zerodrvip_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "78497") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="zerodr_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "مشاهدات | View 👁️‍🗨️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="viws_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}

if($text !== "مشاهدات ستوري | View Story 👁️‍🗨️") {
	if(!preg_match('/([0-9])/i',$text)){
	if($modemb=="viwsstory_instagram") {
		
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- خطأ في المعلومات حاول مرة اخرى
		',
	]);return false;

}
}
}
if($data=="ii"){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل رقم الطلب الخاص بك*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "infoor";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "infoor") {
	if($done["ord"][$text] == "on"){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• هاذا طلبك عزيزي 📦
•————————————•
• حاله الطلب : مكتمل ✅
• العدد المتبقي : 0 👤
•————————————•
• تم تنفيذ طلبك بنجاح ✅*
		',
		'parse_mode'=>"MarkDown",
	]);return false;
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text and $modemb == "infoor") {
	if($done["ord"][$text] == null){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• رقم الطلب خطاء ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$likes = 1;
$dl = $done["dolar"][$from_id];



if($data=="5847"){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل طلب الايكات اكثر من 100*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "like_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "like_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل رابط المنشور ✅

• تأكد منه جيدا ⚠️*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "like3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $likest3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "like3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

$tslsl2=$done["tslsl"];
$allg = $tslike + 1;
$allg = $tslsl2 + 1;

if($text and $modemb == "like3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$likesid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : لايكات انستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
		",
		'parse_mode'=>"Markdown",
	]);
	bot('sendmessage',[
	'chat_id'=>$hson,
	'text'=>"
*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : لايكات انستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
    [
['text'=>"‹ الدخول الى البوت ›",'url'=>"tg://openmessage?user_id=5913469724"]
   ],
   
                     ]])
  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

#رشـق ثآبت
if($data=="7847"){
bot('editmessagetext',[
		'chat_id'=>$chat_id,
		'text'=>"

• اسم الطلب : متابعين ثابت
•————————————•
• 1000 متابع = 2000 نقطة

• اقل طلب : 50

• اقصئ طلب : 100000
•————————————•
• ارسل الكمية التي تريد طلبها :
		",
'message_id'=>$message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"DD"]],
]])
]);
$done["mode"][$from_id] = "zerodr_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodr_instagram") {
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
		'text'=>'

• ارسل يوزرك بدون علامة @
		',
	]);
$done["mode"][$from_id] = "zerodr3_instagram";
$done["dolar"][$from_id] = $text;
$done["ord"][$allg] = "on";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $followt3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "zerodr3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$allg = $tslfl + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "zerodr3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$followid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

• تم انشاء طلب بنجاح ✅
•————————————•
• رقم الطلب : $dl
• اليوزر : $text
•————————————•
• قناة الاثبات : @D_D_FD
		",
		'parse_mode'=>"Markdown",
	]);
	bot('sendmessage',[
	'chat_id'=>$hson,
	'text'=>"
*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : متابعين انستكرام ثابت  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
    [
['text'=>"‹ الدخول الى البوت ›",'url'=>"tg://openmessage?user_id=5913469724"]
   ],
   
                     ]])
  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$sales[$from_id]['backlect'] -= $can;
$done["ord"][$allg] = "on";
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text == "رشق VIP تعويض تلقائي ♻️") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

• ارسل العدد المطلوب :
    
• رشق (ثابت) 💯
		",
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "zerodrvip_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodrvip_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل رابط المنشور ✅

• تأكد منه جيدا ⚠️*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "zerodrvip3_instagram";
$done["dolar"][$from_id] = $text;
$done["ord"][$allg] = "on";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $followvipt3;
$dl = $done["dolar"][$from_id];

if(preg_match('/([0-9])/i',$text) and $modemb == "zerodrvip3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

$allg = $tslflv + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "zerodrvip3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$followvipid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

[√] Request type: Instagram Followers /zero drop VIP 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: انستكرام رشق VIP تعويض تلقائي ♻️
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
		",
	]);
	bot('sendmessage',[
	'chat_id'=>$hson,
	'text'=>"
[√] Request type: Instagram Followers /zero drop VIP 
[√] Order Number : $allg
[√] Number: $dl . 
[√] Link : $text 
[√] Price: $can 
[√] Buyer username : [$usern] 
[√] Date received: $ttime .

[√] نوع الطلب: انستكرام رشق VIP تعويض تلقائي ♻️
[√] رقم الطلب : $allg .
[√] العدد: $dl .
[√] اليوزر: $text .
[√] السعر: $can .
[√] معرف المشتري: [$usern] .
[√] تاريخ الأستلام: $ttime .
",

  	]);
$done["mode"][$from_id] = null;
$sales[$from_id]['backlect'] -= $can;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}


#bh
if($data=="8852"){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل طلب مشاهدات اكثر من 100*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "viws_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "viws_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل رابط المنشور ✅

• تأكد منه جيدا ⚠️*
		',
	]);
$done["mode"][$from_id] = "viws3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $viwst3;
$dl = $done["dolar"][$from_id];

if(preg_match('/([0-9])/i',$text) and $modemb == "viws3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}
$allg = $tslve + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "viws3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$vieewsid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : مشاهدات ستوري لنستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
		",
		'parse_mode'=>"Markdown",
	]);
	bot('sendmessage',[
	'chat_id'=>$hson,
	'text'=>"
*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : مشاهدات ستوري لنستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
    [
['text'=>"‹ الدخول الى البوت ›",'url'=>"tg://openmessage?user_id=5913469724"]
   ],
   
                     ]])
  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$sales[$from_id]['backlect'] -= $can;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

#story

if($text == "مشاهدات ستوري | View Story 👁️‍🗨️") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

- Send likes request (more than 100):


- ارسل طلب مشاهدات ستوري ( اكثر من 100) :
		',
	]);
$done["mode"][$from_id] = "viwsstory_instagram";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text and $modemb == "viwsstory_instagram") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل رابط المنشور ✅

• تأكد منه جيدا ⚠️*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "viwsstory3_instagram";
$done["dolar"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

$likes = $viewsstt3;
$dl = $done["dolar"][$from_id];

if($text and $modemb == "viwsstory3_instagram") {
$youcan=$mycoin * $likes ;
if($dl > $youcan){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
} 
}
$allg = $tslves + 1;
$allg = $tslsl2 + 1;
if($text and $modemb == "viwsstory3_instagram") {
$youcan=$mycoin * $likes ;
$can=$dl * $likes  ;
if($dl < $youcan){
	$req= json_decode(file_get_contents("https://$urlmuq3/api/v2?key=$Ipkey&action=add&service=$vieewsstid&link=$text&quantity=$dl"),true);
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : مشاهدات ستوري لنستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
		",
		'parse_mode'=>"Markdown",
	]);
	bot('sendmessage',[
	'chat_id'=>$hson,
	'text'=>"
*• بدء عملية رشق جديدة ✅
•————————————•
• النوع : مشاهدات ستوري لنستكرام  
• رقم الطلب : $dl
• العدد : $dl
• اليوزر : $text
• السعر : $can
•————————————•
• المعرف :* $usern
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
    [
['text'=>"‹ الدخول الى البوت ›",'url'=>"t.me/معرف قناتك"]
   ],
   
                     ]])
  	]);
$done["mode"][$from_id] = null;
$done["tslsl"]+= 1;
$done["ord"][$allg] = "on";
$sales[$from_id]['backlect'] -= $can;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}



if($data=="222"){
	bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
	if($mycoin==null){
   	$mycoin = 0;
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- ايديك : : `$from_id` 🦋 .
- نقاطك : $mycoin ✨.
- الوقت: $ttime 🕦.",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'رجوع ↪️','callback_data'=>'DD']],
],
'resize_keyboard'=>true
])
	]);
$done["mode"][$from_id] = null;

$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($text == "➕  اضافه اموال 💰") {
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

يمكنك اضافه النقاط عبر مطور البوت  

طرق الدفع  ( usdt  - اسياسيل - زين كاش )
		',
		'reply_markup'=>json_encode([
		'inline_keyboard'=>[
[['text'=>"اضغط هنا لشراء النقاط",'url'=>'https://t.me/k_u_4']],
]
   ])
  ]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}

if($data=="KO"){
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"لتحويل الرصيد يرجى إدخال ايدي حساب المستلم",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
    ]);
    $done["mode"][$from_id] = "thoil";
$done = json_encode($done,true);
file_put_contents("done.json",$done);
  }
  
  $user = $message->from->username;

if($user == null){
	$htwa = "[$from_id](tg://user?id=$from_id)";
	}else{
		$htwa = "@$user";
		}
if(preg_match('/([0-9])/i',$text) and $modemb == "thoil") {

bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• ارسل المبلغ المطلوب تحويل 🔄*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = "thoil2";
$done["for"][$from_id] = $text;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}


$tho = $done["for"][$from_id];
if(preg_match('/([0-9])/i',$text) and $modemb == "thoil2") {
if($mycoin > $text){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>"

- تم بنجاح عمليه التحويل من `$from_id` الي `$tho`
العدد المحول : $text
		",
		'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true,
	]);
	bot('sendMessage',[
		'chat_id'=>$tho,
		'text'=>"

*• تمت تعبئه رصيدك بنجاح ✅
• المبلغ الذي تمت تعبئته : $$text ✅
• من قبل : $htwa .*
		",
		'parse_mode'=>"MarkDown",
   'disable_web_page_preview'=>true, 
	]);
$done["mode"][$from_id] = null;
$sales[$chat_id]['backlect'] -= $text;
$sales[$tho]['backlect'] += $text;
save($sales);
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

if($text and $modemb == "thoil2") {
if($mycoin < $text){
bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'

*• نقاطك غير كافية ❌*
		',
		'parse_mode'=>"MarkDown",
	]);
$done["mode"][$from_id] = null;
$done = json_encode($done,true);
file_put_contents("done.json",$done);
}
}

 
   

  