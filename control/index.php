<?php
define('API_KEY','OTgyODE1MDYxOkFBR0ZVVUU4c0VHaDNsMDZRNHRPdTk3ZC1SWXI2dHpndW9Z');
include ('connect.php');
  use Telegram\Bot\Api;
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
function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
$username = $message->from->username;//useradresi
$first_name = $message->from->first_name;//ismi
$last_name = $message->from->first_name;//ismi
$callback = $update->callback_query;
$username2 = $callback->message->from->username;
$first_name2 = $callback->message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $callback->message->message_id;
$cap2 = $update->callback_query->message->caption;
$data = $update->callback_query->data;
$datas = $update->callback_query->data;
$cqid = $update->callback_query->id;
$soat = date('H:i', strtotime('5 hour'));
$kun = date ('d.m.Y', strtotime('5 hour'));
$admin='740082422';
if($chat_id){
   $sqlqadam = "SELECT * FROM `baze` WHERE `foyid` = $chat_id"; 
}elseif($chat_id2){
     $sqlqadam = "SELECT * FROM `baze` WHERE `foyid` = $chat_id2";
}
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);

$id=$rowqadam['id'];
$foyid=$rowqadam['foyid'];
$fin=$rowqadam['fin'];
$kim=$rowqadam['kim'];
$parol=$rowqadam['parol'];
$aktiv=$rowqadam['aktiv'];
$papka=$rowqadam['papka'];
$qadam=$rowqadam['qadam'];
$xatolik=$rowqadam['xatolik'];
$soat = date('H:i', strtotime('5 hour'));
$kun = date ('d.m.Y', strtotime('5 hour'));
$cap2 = $update->callback_query->message->caption;

$idrep = $message->reply_to_message->from->id;
$idrepq = $message->forward_from;
$chat_idrep = $message->reply_to_message->chat->id;
$message_idrep = $message->reply_to_message->message_id;
$first_namerep = $message->reply_to_message->from->first_name;
$textrep = $message->reply_to_message->text;
$reply=$message->reply_to_message;

function qadam($a,$b){
    global $db;
   mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `qadam` = '$b' WHERE `baze`.`foyid` = '$a'");   
}





if($text == "/start" or $text=="ortga" and $qadam=="adm" or $text=="ortga" and $qadam=="foy"){  
      bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
            
  if(!mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM `baze` WHERE `foyid` = $chat_id"))){
      mysqli_query($db,"INSERT INTO `milliykr_control`.`baze` (`id`, `foyid`, `fin`, `kim`, `parol`, `aktiv`, `papka`, `qadam`, `xatolik`) VALUES (NULL, '$chat_id', '', '', '', '4', '', '', '0');"); 
  } 
    
    qadam($chat_id,"boshm");
           bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"$last_name Assalom-u alaykum\n\n\n👇🏻Tanlang👇🏻",
           'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data'=>"adm","text"=>"Admin"],
['callback_data'=>"foy","text"=>"Foydalanuvchi"],
 ]]
])]);
}


if($data=="adm" or $text=="ortga" and $qadam=="ism"){
     bot('deleteMessage',[
           'chat_id'=>$chat_id2,
            'message_id'=>$message_id2
        ]);
     bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);

    qadam($chat_id2,"adm");
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id2,
	       'text'=>"Parolni kiriting👇 $parol🏻",
 'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"ortga"]],
]
])]);  
}


if($text=="1515" and $qadam=="adm"){
    bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-1
        ]);
    bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
    
       mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `kim`='admin' WHERE `foyid`='$chat_id'");
     qadam($chat_id,"admism");
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"Hamma uchun ismingizni kiriting👇🏻",
 'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"ortga"]],
]
])]);  
}
if($text and $qadam=="admism"){
     bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-1
        ]);
    bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
    
     mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `fin`='$text' WHERE `foyid`='$chat_id'");
    
     qadam($chat_id,"glm");
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"Salom $fin",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Ayrimlarga yubormaslik"]],
]
])
]); 
    mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `aktiv`='1' WHERE `foyid`='$chat_id'");
}



if($data=="foy"){
    bot('deleteMessage',[
           'chat_id'=>$chat_id2,
            'message_id'=>$message_id2
        ]);
    qadam($chat_id2,"foy");
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id2,
	       'text'=>"Ismingizni kiriting👇🏻",
 ]);  
}
if($text and $qadam=="foy"){
     bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-1
        ]);
    bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
     $rand = rand(1000,9999);
     mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `fin`='$text', `parol`='$rand' WHERE `foyid`='$chat_id'");
             bot('sendMessage',[ 
	     'chat_id'=>$admin,
	       'text'=>"$text ismli kishiga \nparol:$rand\n paroli o'rnatildi. Uni komandaga qo'shmoqchi bo'lsangiz parolni unga ayting🏻",
]);
     qadam($chat_id,"foypa");
          bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"Parol adminga yuborildi parolni admindan so'rang va \nParolni kiriting👇🏻",
]);  
}
if($qadam=="foypa" and $text==$parol){
       bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-1
        ]);
    bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
    
    
    
    
         $sqlqa = "SELECT * FROM `baze` WHERE `foyid` = '99'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$papka=$rowqa['papka'];
    
           if(!$papka){
         $papka="[{\"callback_data\":\"*$chat_id\",\"text\":\"$fin++\"}]";   
        }else{
           $papka.=",[{\"callback_data\":\"*$chat_id\",\"text\":\"$fin++\"}]"; 
        }
 mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `papka` = '$papka' WHERE `baze`.`foyid` = '99'");
     mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `kim`='foydalanuvchi' WHERE `foyid`='$chat_id'");
    
     qadam($chat_id,"glm");
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"Salom $fin",
         ]);
    mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `aktiv`='1' WHERE `foyid`='$chat_id'");
}
elseif($qadam=="foypa" and $text!=$parol){
    $xatolik+=1;
    if($xatolik>2){
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-5
        ]);    
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-4
        ]);    
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-3
        ]);   
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-2
        ]);  
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id-1
        ]);   
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$message_id
        ]);
        
        mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `xatolik`='0' WHERE `foyid`='$chat_id'");
        qadam($chat_id,"boshm");
           bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"$last_name Assalom-u alaykum\n\n\n👇🏻Tanlang👇🏻",
           'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data'=>"adm","text"=>"Admin"],
['callback_data'=>"foy","text"=>"Foydalanuvchi"],
 ]]
])]);
    
    }else{
        mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `xatolik`='$xatolik' WHERE `foyid`='$chat_id'");
    
         bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"Iltimos qaytadan kiriting",
         ]);  
    }
   
}


$forward1 = $message->forward_from->id;
if($forward1){
            bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
               'message_id'=>$message_id,
	       'text'=>"salom $forward1",
]); 
}

$forward = $message->reply_to_message->forward_from->id;
if($message and $kim=="foydalanuvchi"){
    
     $redmie = "SELECT * FROM `baze`";
$reste = mysqli_query($db,$redmie);
$userste= array();
while($rowte = mysqli_fetch_assoc($reste)){
    $userste[] = $rowte;
}

foreach($userste AS $usere){
if($usere['kim']=='admin'){
            bot('forwardMessage',[ 
	     'chat_id'=>$usere['foyid'],
               'from_chat_id'=>$chat_id,
               'message_id'=>$message_id,
]);
}
}
}


if($reply){ 
                bot('forwardMessage',[ 
	     'chat_id'=>$forward,
               'from_chat_id'=>$chat_id,
               'message_id'=>$message_id,
]);
    
         $redmie = "SELECT * FROM `baze`";
$reste = mysqli_query($db,$redmie);
$userste= array();
while($rowte = mysqli_fetch_assoc($reste)){
    $userste[] = $rowte;
}

foreach($userste AS $usere){
if($usere['kim']=='admin' and $usere['foyid']!=$chat_id){
               bot('forwardMessage',[ 
	     'chat_id'=>$usere['foyid'],
               'from_chat_id'=>$chat_id,
               'message_id'=>$message_id,
]);
}
}
}




if($text=="Ayrimlarga yubormaslik" and $kim=="admin"){
   qadam($chat_id,"ay");
   
     $sqlqa = "SELECT * FROM `baze` WHERE `foyid` = '99'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$papka=$rowqa['papka'];
    $papka=str_replace("++","✅",$papka);
     $papka=str_replace("--","❌",$papka);
    $men='{"inline_keyboard":['."$papka".']}';  
     bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"\"✅\" bu yuborish mumkin degani\n\"❌\" bu yuborish mumkinmas degani",
'reply_markup'=>$men]);
}


if($data[0]=='*' and $chat_id2==$admin){
    $datah=str_replace("*","",$data);
    $sqlqa = "SELECT * FROM `baze` WHERE `foyid` = '$datah'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$fins=$rowqa['fin'];
$activ=$rowqa['aktiv'];
    
      $sqlqaq = "SELECT * FROM `baze` WHERE `foyid` = '99'";
$resqaq= mysqli_query($db,$sqlqaq);
$rowqaq = mysqli_fetch_assoc($resqaq);
$pap=$rowqaq['papka'];
if($activ=="1"){
  $papkad=str_replace("$fins++","$fins--",$pap); 
  $papkads=str_replace("\"","\\\"",$papkad); 
    $ac=0;
}elseif($activ=="0"){
    $papkad=str_replace("$fins--","$fins++",$pap); 
    $papkads=str_replace("\"","\\\"",$papkad); 
    $ac=1;
}
     $papkad=str_replace("++","✅",$papkad);
     $papkad=str_replace("--","❌",$papkad);
    
$mens='{"inline_keyboard":['."$papkad".']}';  
     bot('EditMessageText',[ 
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2,
	       'text'=>"\"✅\" bu yuborish mumkin degani\n\"❌\" bu yuborish mumkinmas degani",
'reply_markup'=>$mens]);
mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `aktiv`='$ac' WHERE `foyid`='$datah'");
mysqli_query($db,"UPDATE `milliykr_control`.`baze` SET `papka`='$papkads' WHERE `foyid`='99'");


}


if($message and !$reply and $kim=="admin" and !$text=="Ayrimlarga yubormaslik"){
  $redmi = "SELECT * FROM `baze`";
$rest = mysqli_query($db,$redmi);
$userst= array();
while($rowt = mysqli_fetch_assoc($rest)){
    $userst[] = $rowt;
}

foreach($userst AS $user){
if($user['aktiv']=='1' and $user['kim']=='foydalanuvchi'){
            bot('forwardMessage',[ 
	     'chat_id'=>$user['foyid'],
               'from_chat_id'=>$chat_id,
               'message_id'=>$message_id,
]);
}
    if($user['kim']=='admin'){
            bot('forwardMessage',[ 
	     'chat_id'=>$user['foyid'],
               'from_chat_id'=>$chat_id,
               'message_id'=>$message_id,
]);
}
}
}




















?>