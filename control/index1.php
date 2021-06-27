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
$admin='499816482';
$menyu='';
if($chat_id){
   $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id"; 
}elseif($chat_id2){
     $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
}
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);

$adres=$rowqadam['adres'];
$kim=$rowqadam['kim'];
$bir=$rowqadam['bir'];
$ikki=$rowqadam['ikki'];
$uch=$rowqadam['uch'];
$turt=$rowqadam['turt'];
$nomer=$rowqadam['nomer'];
$soat = date('H:i', strtotime('5 hour'));
$kun = date ('d.m.Y', strtotime('5 hour'));
$cap2 = $update->callback_query->message->caption;





function nomer($a,$b){
    global $db;
   mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `nomer` = '$b' WHERE `qadam`.`foyid` = '$a'");   
}
function kim($a,$b){
    global $db;
   mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `kim` = '$b' WHERE `qadam`.`foyid` = '$a'");   
}
function qadam($a,$b){
    global $db;
   mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `adres` = '$b' WHERE `qadam`.`foyid` = '$a'");   
}




if($text == "/start"){     
       
    
           bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'text'=>"
⏹ 🇺🇿 Tilingizni tanlang ❕
⏹ 🇷🇺 Выберите язык общения ❕",
	 
}


if($data == "uzb" or $text=="⬅️ Ortga" and $adres=="bber"  or $text=="⬅️ Ortga" and $adres=="fikr" or $text=="⬅️ Ortga" and $adres=="admin"){
    if($chat_id2){}else{$chat_id2=$chat_id;$message_id2=$message_id;}
    kim($chat_id2,"uzb");
    qadam($chat_id2,"katalog");
     bot('deleteMessage',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
	      ]);
    if($chat_id2==$admin){
       bot('sendPhoto',[
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
			'photo'=>new CURLFile("images/logo.jpg"),
		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛒 Buyurtma qilish"]],
[['text'=>"🛍 Buyurtmalarim"],['text'=>"📝 Oferta"]],
[['text'=>"🇺🇿 O'zbekcha"],['text'=>"💟 Ma'lumot"]],
[['text'=>"✍️ Fikr bildirish"],['text'=>"admin"]],
]
])
]);  
    }else{
      bot('sendPhoto',[
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
			'photo'=>new CURLFile("images/logo.jpg"),
		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛒 Buyurtma qilish"]],
[['text'=>"🛍 Buyurtmalarim"],['text'=>"📝 Oferta"]],
[['text'=>"🇺🇿 O'zbekcha"],['text'=>"💟 Ma'lumot"]],
[['text'=>"✍️ Fikr bildirish"]],
]
])
]);  
    }
        
    
     
}

if($text=="🛒 Buyurtma qilish" or $data=='ortga' and  $adres=="bedana" or $data=='ortga' and  $adres=="korzinka" or $data=='ortga' and  $adres=="salat" or $data=='ortga' and  $adres=="gazak"){
   
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"katalog");
    if($data){$sev="editMessageText";}else{$sev="sendMessage";}
    
    
    
    
    
    
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],[{"callback_data":"salat","text":"🥗 Salatlar"},{"callback_data":"gazak","text":"🥦 Gazaklar"}]'."$menyu".']}';  
 
    
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$men",]);
    
    
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
}


if($datas == "korzinka" and $bir or $text=="🛍 Buyurtmalarim" and $bir ){
  
    if($chat_id2){$set="editMessageText"; }else{$chat_id2=$chat_id;$message_id2=$message_id; $set="sendMessage";}
    qadam($chat_id2,"korzinka");
   
   $hgl=explode(",",$bir);
$hgk=count($hgl);
    
  $tf="Tog'orada:\n";
$soqqa=0;
     
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
} 
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
            if($k==0){
                $b="[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }else{
                $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$b=$rowqadam['ikki'];
                $b.=",[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }
    
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";
    
 
    
    
    
   $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$ikki=$rowqadam['ikki']; 
    $dr='{"inline_keyboard":[[{"callback_data":"ortga","text":"⬅️ Ortga"},{"callback_data":"bber","text":"🚗 Buyurtma berish"}],[{"callback_data":"tbush","text":"Tog\'orani bo\'shatish"}],'."$ikki".']}';
     bot($set,[
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2,
	     'text'=>"$tf",
'reply_markup'=>$dr,
     ]); 
}


if($data and $adres=="katalog" and $data!="barchasi" and $data!="korzinka" and $data[10]!="=" and $data!=1 and $data!=2 and $data!=3 and $data!=4 and $data!=5 and $data!=6 and $data!=7 and $data!=8 and $data!=9 and $data!=10 and $data!=11 and $datas!="barchasix"  and $datas!="salat"  and $datas!="gazak"  and $datas!="ortga"){
            qadam($chat_id2,"bedana");
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `nom` LIKE '$data'");
while($red=mysqli_fetch_assoc($search)){
    $id=$red['id'];
    $nom=$red['nom'];
    $narx=$red['narx'];
    $info=$red['info'];
    $rasm=$red['abs'];
}   
                 if($rasm){}else{$rasm="images/no-image.PNG";}
                        if(strpos($rasm,".jpg") or strpos($rasm,".JPG") or strpos($rasm,".jpeg") or strpos($rasm,".png")){}else{$rasm="images/no-image.PNG";}
                         if($narx > "0"){}else{$narx="***";}
   if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
   }else{
       $narx=$narx;
   }
    $narx.=" ming so‘m";
    $hgl=explode(",",$bir);
    if(in_array($id,$hgl)){$de="✅ Tog'orada";}else{$de="➕ Tog'oraga qo'shish";}
    if($bir){
            $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],[['callback_data'=>'korzinka','text'=>'🍽 Tog\'ora']]
]
]);
    }else{
             $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],
]
]);  
    }
 
    
    
    
    $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}   

            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
       
    
    
    
   
	  bot('editMessageText',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"$tf \n🅜🅤🅑🅞🅡🅐🅚 🅢🅗🅞🅗🅞🅝🅐 🅣🅐🅞🅜[.](http://milliykr.zadc.ru/tfood/$rasm)",
            'disable_web_page_preview'=>false,
          'parse_mode'=>'markdown',
'reply_markup'=>$ker
]);

}

$data=explode("=",$data);
$df=explode(",",$bir);

    
if($data[0]=="bq"){
    if(!in_array($data[1],$df)){
    $bir.="$data[1],";
   mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '$bir' WHERE `qadam`.`foyid` = '$chat_id2'");  
        
        
        
        
        
$hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}   

            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
        if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
       if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
        
        
        
        
        
        
        

            qadam($chat_id2,"bedana");
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$data[1]'");
while($red=mysqli_fetch_assoc($search)){
    $id=$red['id'];
    $nom=$red['nom'];
    $narx=$red['narx'];
    $info=$red['info'];
    $rasm=$red['abs'];
}   
                 if($rasm){}else{$rasm="images/no-image.PNG";}
                        if(strpos($rasm,".jpg") or strpos($rasm,".JPG") or strpos($rasm,".jpeg") or strpos($rasm,".png")){}else{$rasm="images/no-image.PNG";}
                         if($narx > "0"){}else{$narx="***";}
   if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
   }else{
       $narx=$narx;
   }
    $narx.=" ming so‘m";
        
            $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"sdgfhjgkhljgf",'text'=>"✅ Tog'orada"],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],[['callback_data'=>'korzinka','text'=>'🍽 Tog\'ora']]
]
]);

 
	  bot('editMessageText',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"$tf\n
🅜🅤🅑🅞🅡🅐🅚 🅢🅗🅞🅗🅞🅝🅐 🅣🅐🅞🅜[.](https://milliykr.zadc.ru/tfood/$rasm)",
            'disable_web_page_preview'=>false,
          'parse_mode'=>'markdown',
'reply_markup'=>$ker
]);
     
        
        
     bot('answerCallbackQuery',[
     'callback_query_id'=>$cqid,
'parse_mode' => 'html',
     'text'=>"Buyurtma ro'yxatga qo'shildi ✅",
     'show_alert'=>true
    ]);   
        
 /* bot('sendMessage',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"buyurtma ro'yxatga qo'shildi"]);*/
   /* sleep(1);
           bot('deleteMessage',[ 
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2+1,]);*/
    
}
    else{
        bot('answerCallbackQuery',[
     'callback_query_id'=>$cqid,
'parse_mode' => 'html',
     'text'=>"Avval tanlagansiz ✅",
     'show_alert'=>true
    ]);
     /*bot('sendMessage',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"Avval tanlagansiz"]);*/
    /*sleep(1);
     bot('deleteMessage',[ 
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2+1,]);*/
}
}


if($datas == "barchasi"){  
    bot('deleteMessage',[
       'chat_id'=>$chat_id2,
        'message_id'=>$message_id2
    ]);    
    
 bot('sendPhoto',[
'chat_id'=>$chat_id2,
'photo'=>new CURLFile("images/barchasi2.jpg"),
]);
 bot('sendPhoto',[
'chat_id'=>$chat_id2,
'photo'=>new CURLFile("images/barchasi1.jpg"),
]);
  
    
     if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"katalog");
    $sev="sendMessage";
    
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],[{"callback_data":"salat","text":"🥗 Salatlar"},{"callback_data":"gazak","text":"🥦 Gazaklar"}],'."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);}






if($datas == "korzinka" and $bir or $text=="🛍 Buyurtmalarim" and $bir ){
  
    if($chat_id2){$set="editMessageText"; }else{$chat_id2=$chat_id;$message_id2=$message_id; $set="sendMessage";}
    qadam($chat_id2,"korzinka");
   
   $hgl=explode(",",$bir);
$hgk=count($hgl);
    
  $tf="Tog'orada:\n";
$soqqa=0;
     
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
} 
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
            if($k==0){
                $b="[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }else{
                $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$b=$rowqadam['ikki'];
                $b.=",[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }
    
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";
    
 
    
    
    
   $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$ikki=$rowqadam['ikki']; 
    $dr='{"inline_keyboard":[[{"callback_data":"ortga","text":"⬅️ Ortga"},{"callback_data":"bber","text":"🚗 Buyurtma berish"}],[{"callback_data":"tbush","text":"Tog\'orani bo\'shatish"}],'."$ikki".']}';
     /*bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>$dr
    ]);*/
     bot($set,[
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2,
	     'text'=>"$tf",
'reply_markup'=>$dr,
     ]); 
}

elseif($datas=="korzinka" and !$bir  or $text=="🛍 Buyurtmalarim" and !$bir or $text=="⬅️ Ortga" and !$bir and $adres=="katalog"){
     
           bot('answerCallbackQuery',[
     'callback_query_id'=>$cqid,
'parse_mode' => 'html',
     'text'=>"Siz hali hanuz birorta ham buyurtma bermagansiz 🤷🏻‍♂️",
     'show_alert'=>true
    ]);
    if($text=="🛍 Buyurtmalarim" or $text=="⬅️ Ortga"){
       bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Siz hali hanuz birorta ham buyurtma bermagansiz 🤷🏻‍♂️"
    ]);
    }
}

if($chat_id2){}else{$chat_id2=$chat_id;$message_id2=$message_id;}

$dl=explode("@",$datas);

if($dl[0] == "del"){
    qadam($chat_id2,"korzinka");
    $bir=str_replace("$dl[1],","",$bir);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '$bir' WHERE `qadam`.`foyid` = '$chat_id2'");
    
     if($bir){
   $hgl=explode(",",$bir);
$hgk=count($hgl);
    
    
    
  $tf="Tog'orada:\n";
$soqqa=0;
     
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
} 
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
            if($k==0){
                $b="[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }else{
                $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$b=$rowqadam['ikki'];
                $b.=",[{\"callback_data\":\"del@$hgl[$k]\",\"text\":\"❌$nom\"}]";
mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '$b' WHERE `qadam`.`foyid` = '$chat_id2'");
            }
    
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";
   $sqlqadam = "SELECT * FROM `qadam` WHERE `foyid` = $chat_id2";
$resqadam= mysqli_query($db,$sqlqadam);
$rowqadam = mysqli_fetch_assoc($resqadam);
$ikki=$rowqadam['ikki']; 
    $dr='{"inline_keyboard":[[{"callback_data":"ortga","text":"⬅️ Ortga"},{"callback_data":"bber","text":"🚗 Buyurtma berish"}],[{"callback_data":"tbush","text":"Tog\'orani bo\'shatish"}],'."$ikki".']}';
  
     bot('editMessageText',[
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2,
	     'text'=>"$tf",
'reply_markup'=>$dr
     ]);
     /*  bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>$dr
    ]);*/
}
else{
   
    
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"katalog");
    if($data){$sev="editMessageText";}else{$sev="sendMessage";}
    
    
    if($bir){
         $hgl=explode(",",$bir);
$hgk=count($hgl);
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}   

            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}

 $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],[{"callback_data":"salat","text":"🥗 Salatlar"},{"callback_data":"gazak","text":"🥦 Gazaklar"}],'."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]); 
}
}


if($datas=="tbush"){
  mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = '',`bir` = '' WHERE `qadam`.`foyid` = '$chat_id2'"); 
    
    qadam($chat_id2,"katalog");
   $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],[{"callback_data":"salat","text":"🥗 Salatlar"},{"callback_data":"gazak","text":"🥦 Gazaklar"}],'."$menyu".']}';  
    
     bot('editMessageText',[ 
	     'chat_id'=>$chat_id2,
         'message_id'=>$message_id2,
	       'text'=>"Kategoriyalardan birini tanlang ⬇️",
'parse_mode'=>"html",
'reply_markup'=>$men]);  
}


if($datas=="bber" or $text=="⬅️ Ortga" and $adres=="loc"){
    if($chat_id2){}else{$chat_id2=$chat_id;$message_id2=$message_id;}
       qadam($chat_id2,"bber");
      bot('deleteMessage',[
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
	      ]);
        bot('sendMessage',[
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
            'text'=>"Telefon raqamingizni kiriting yoki telefon raqamni yuborish tugmasini tanlang",
		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Telefon raqamni jo'natish",'request_contact'=>true]],
[['text'=>"⬅️ Ortga"]],
]
])
]); 
}

 if($message->contact and $adres=="bber"  or $text and $text!="⬅️ Ortga" and $adres=="bber" and filter_var($text, FILTER_VALIDATE_INT) != false ){
     qadam($chat_id,"loc");
       if($message->contact){
        $nomer=$message->contact->phone_number;   
       }else{
           $nomer=$text;
       }
       
        bot('deleteMessage',[
        'chat_id'=>$chat_id,
           'message_id'=>$mid-1
        ]);
       bot('deleteMessage',[
        'chat_id'=>$chat_id,
           'message_id'=>$mid
        ]);
         
       mysqli_query($db,"UPDATE qadam SET nomer='$nomer' WHERE foyid='$chat_id'"); 
              bot('sendMessage',[
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
            'text'=>"Eltib berish manzilini kiriting yoki geo-joylashuvni jo'nating",
		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Joylashuvni jo'natish",'request_location'=>true]],
[['text'=>"⬅️ Ortga"]],
]
])
]);
 }

elseif($text and filter_var($text, FILTER_VALIDATE_INT) == false and $text!="⬅️ Ortga" and $adres=="bber"){
     qadam($chat_id,"bber");
               bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"Siz nomeringizni xato yubordingiz\n\nIltimos qaytadan yuboring",
        ]); 
}


if($message->location and $adres=="loc" or $text and $adres=="loc"){
    if($message->location){
     $wlon=$message->location->longitude;
    $wlat=$message->location->latitude;
        mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `uch` = '$wlon-$wlat' WHERE `qadam`.`foyid` = '$chat_id'");
    }else{
     mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `uch` = '!$text' WHERE `qadam`.`foyid` = '$chat_id'");   
    }
    
  if($chat_id==$admin) {
     bot('sendMessage',[
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Kategoriyalardan birini tanlang ⬇️",
 		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛒 Buyurtma qilish"]],
[['text'=>"🛍 Buyurtmalarim"],['text'=>"📝 Oferta"]],
[['text'=>"🇺🇿 O'zbekcha"],['text'=>"💟 Ma'lumot"]],
[['text'=>"✍️ Fikr bildirish"],['text'=>"admin"]],
]
])]);  
  }  else{
     bot('sendMessage',[
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Kategoriyalardan birini tanlang ⬇️",
 		'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛒 Buyurtma qilish"]],
[['text'=>"🛍 Buyurtmalarim"],['text'=>"📝 Oferta"]],
[['text'=>"🇺🇿 O'zbekcha"],['text'=>"💟 Ma'lumot"]],
[['text'=>"✍️ Fikr bildirish"]],
]
])]); 
  }
 
    
  qadam($chat_id,"katalog");
     
     
     
     
     
     
     
  $searchq = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '$chat_id'");
while($reds=mysqli_fetch_assoc($searchq)){
    $bir=$reds['bir'];    
    $ikki=$reds['ikki'];    
    $uch=$reds['uch'];    
    $nomer=$reds['nomer'];    
    $ism=$reds['firsn'];    
    $adism=$reds['usern'];    
    $foyid=$reds['foyid'];    
}   
$hgl=explode(",",$bir);
$hgk=count($hgl);
$tf="Tog'orada:\n";
$soqqa=0;
for($k=0;$k<$hgk-1;$k++){    
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];  
}   
$r=$k+1;
$tf.="$r) $nom - $narx ming so'm \n";
$soqqa+=$narx;     
}
     
     
if($uch[0]=="!"){
    bot('sendMessage',[
	     'chat_id'=>$admin,
	       'text'=>"$uch \nU kishi 💚  💙 tilida gaplashadi.\n\n Murojaat qilish uchun yangi zayavka tushdi.
$tf ming so‘m oyiga \n\n Zayavkachi haqida ma'lumot\n Id raqami $chat_id\n Username: @$adism \n Ismi: $ism \n Raqami: $nomer \n Mahsulot idsi: $bir \n Vaqt: $kun  $soat \n\n Telefon qilindimi? ",
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data'=>"gaplashdim=$chat_id=$bir",'text'=>"Gaplashdim✅"]],
]
]),
]);
}else{
    $wert=explode("-",$uch);
    bot('sendLocation',[
       'chat_id'=>$admin,
        'longitude'=>$wert[0],
        'latitude'=>$wert[1],
    ]);
      bot('sendMessage',[
	     'chat_id'=>$admin,
	       'text'=>"$uch \nU kishi 💚  💙 tilida gaplashadi.\n\n Murojaat qilish uchun yangi zayavka tushdi.
$tf ming so‘m oyiga \n\n Zayavkachi haqida ma'lumot\n Id raqami $chat_id\n Username: @$adism \n Ismi: $ism \n Raqami: $nomer \n Mahsulot idsi: $bir \n Vaqt: $kun  $soat \n\n Telefon qilindimi? ",
   'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data'=>"gaplashdim=$chat_id=$bir",'text'=>"Gaplashdim✅"]],
]
]),
]);  
}
    

     
    
    
   mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '', `ikki` = '', `uch` = '' WHERE `qadam`.`foyid` = '$chat_id'"); 
    qadam($chat_id,"katalog");
}
if($datas){
    
    $juy =explode("=",$datas);
if($juy[0] == "gaplashdim"){
    

$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$cap2 = $update->callback_query->message->text;    
    $ads=$juy[1];
    $joy=$juy[2];
       $cap2 =str_replace('Telefon qilindimi?','Telefon qilindi✅',$cap2); 
    $cap2 =str_replace('Murojaat qilish uchun yangi zayavka tushdi.','Zayavkachi bilan gaplashildi✅',$cap2); 
    $cap2.="\n\n Gaplashilgan vaqt: $kun $soat";
    
      /*bot('deleteMessage',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2,
	      ]);*/

    bot('editMessageText',[ 
	    'chat_id'=>$chat_id2, 
        'message_id'=>$message_id2,
		'text'=>"$cap2",
	      ]);
}}





if($datas=="salat"  and  $adres=="katalog" or $datas=='ortga' and  $adres=="salatkorzinka" ){
   qadam($chat_id2,"salat");
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    if($data){$sev="editMessageText";}else{$sev="sendMessage";}
    
    
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['refum']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],'."$menyu".',[{"callback_data":"ortga","text":"⬅️ Ortga"}]]}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
}
if($datas and $adres=="salat" and $datas!="barchasi" and $datas!="korzinka" and $datas[10]!="=" and $datas!=1 and $datas!=2 and $datas!=3 and $datas!=4 and $datas!=5 and $datas!=6 and $datas!=7 and $data!=8 and $datas!=9 and $datas!=10 and $datas!=11 and $datas!="barchasix"  and $datas!="salat"  and $datas!="gazak"   and $datas!="ortga"){
            qadam($chat_id2,"salatkorzinka");
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `nom` LIKE '$datas'");
while($red=mysqli_fetch_assoc($search)){
    $id=$red['id'];
    $nom=$red['nom'];
    $narx=$red['narx'];
    $info=$red['info'];
    $rasm=$red['abs'];
}   
    
    /*bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>$datas
    ]);*/
                 if($rasm){}else{$rasm="images/no-image.PNG";}
                        if(strpos($rasm,".jpg") or strpos($rasm,".JPG") or strpos($rasm,".jpeg") or strpos($rasm,".png")){}else{$rasm="images/no-image.PNG";}
                         if($narx > "0"){}else{$narx="***";}
   if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
   }else{
       $narx=$narx;
   }
    $narx.=" ming so‘m";
    $hgl=explode(",",$bir);
    if(in_array($id,$hgl)){$de="✅ Tog'orada";}else{$de="➕ Tog'oraga qo'shish";}
    if($bir){
            $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],[['callback_data'=>'korzinka','text'=>'🍽 Tog\'ora']]
]
]);
    }else{
             $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],
]
]);  
    }
 
    $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}   

            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
	  bot('editMessageText',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"$tf \n🅜🅤🅑🅞🅡🅐🅚 🅢🅗🅞🅗🅞🅝🅐 🅣🅐🅞🅜[.](http://milliykr.zadc.ru/tfood/$rasm)",
            'disable_web_page_preview'=>false,
          'parse_mode'=>'markdown',
'reply_markup'=>$ker
]);

}


if($datas=="gazak"  and  $adres=="katalog" or $datas=='ortga' and  $adres=="gazakkorzinka" ){
   qadam($chat_id2,"salat");
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    if($data){$sev="editMessageText";}else{$sev="sendMessage";}
    
    
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['status'];
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],'."$menyu".',[{"callback_data":"ortga","text":"⬅️ Ortga"}]]}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
}
if($datas and $adres=="salat" and $datas!="barchasi" and $datas!="korzinka" and $datas[10]!="=" and $datas!=1 and $datas!=2 and $datas!=3 and $datas!=4 and $datas!=5 and $datas!=6 and $datas!=7 and $data!=8 and $datas!=9 and $datas!=10 and $datas!=11 and $datas!="barchasix"  and $datas!="salat"  and $datas!="gazak"   and $datas!="ortga"){
            qadam($chat_id2,"gazakkorzinka");
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `nom` LIKE '$datas'");
while($red=mysqli_fetch_assoc($search)){
    $id=$red['id'];
    $nom=$red['nom'];
    $narx=$red['narx'];
    $info=$red['info'];
    $rasm=$red['abs'];
}   
    
    /*bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>$datas
    ]);*/
                 if($rasm){}else{$rasm="images/no-image.PNG";}
                        if(strpos($rasm,".jpg") or strpos($rasm,".JPG") or strpos($rasm,".jpeg") or strpos($rasm,".png")){}else{$rasm="images/no-image.PNG";}
                         if($narx > "0"){}else{$narx="***";}
   if($narx>1000){
       $rt=($narx-$narx%1000)/1000;
       $narx=$narx-1000;
       $narx="$rt mln $narx";
   }else{
       $narx=$narx;
   }
    $narx.=" ming so‘m";
    $hgl=explode(",",$bir);
    if(in_array($id,$hgl)){$de="✅ Tog'orada";}else{$de="➕ Tog'oraga qo'shish";}
    if($bir){
            $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],[['callback_data'=>'korzinka','text'=>'🍽 Tog\'ora']]
]
]);
    }else{
             $ker=json_encode([
'inline_keyboard'=>[
[['callback_data'=>"bq=$id",'text'=>$de],
 ['callback_data'=>"ortga",'text'=>"⬅️ Ortga"]],
]
]);  
    }
 
    $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}   

            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
	  bot('editMessageText',[ 
	     'chat_id'=>$chat_id2,
	       'message_id'=>$message_id2, 
	       'text'=>"$tf \n🅜🅤🅑🅞🅡🅐🅚 🅢🅗🅞🅗🅞🅝🅐 🅣🅐🅞🅜[.](http://milliykr.zadc.ru/tfood/$rasm)",
            'disable_web_page_preview'=>false,
          'parse_mode'=>'markdown',
'reply_markup'=>$ker
]);

}




















































include ('fikrbildirish.php');
include ('oferta.php');
include ('malumot.php');





if($chat_id==$admin and $text=="admin" or $text=="⬅️ Ortga" and $adres=="qayer"  or $text=="⬅️ Ortga" and $adres=="mahuch" or $text=="⬅️ Ortga" and $adres=="mahaz"){
    qadam($chat_id,"admin");
    bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"Salom administrator 😜",
        'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"mahsulot qo'shish"]],
[['text'=>"mahsulotni o'chirish"]],
[['text'=>"mahsulot narxlarini o'zgartirish"]],
/*[['text'=>"mahsulot rasmlarini o'zgartirish"]],*/
[['text'=>"\"barchasi\"dagi rasmlarni o'zgartirish"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);
}
if($text=="mahsulot qo'shish" and  $chat_id==$admin){
    qadam($chat_id,"qayer");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"tanlang",
                'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"ovqat"]],
[['text'=>"salat"]],
[['text'=>"gazak"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);

}
if($text=="gazak" and $adres=="qayer" and  $chat_id==$admin){ 
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `turt` = 'gazak' WHERE `qadam`.`foyid` = '7720099'");
    qadam($chat_id,"qushish");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot oddiy lotincha ismini yuboring yoki har xil harflar kamida kjshdfk ga o'xshash va ikkita bir xil oddiy nom yubormang!!!"
    ]); 
}
if($text=="salat" and $adres=="qayer" and  $chat_id==$admin){ 
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `turt` = 'salat' WHERE `qadam`.`foyid` = '7720099'");
    qadam($chat_id,"qushish");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot oddiy lotincha ismini yuboring yoki har xil harflar kamida kjshdfk ga o'xshash va ikkita bir xil oddiy nom yubormang!!!"
    ]); 
}
if($text=="ovqat" and $adres=="qayer" and  $chat_id==$admin){ 
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `turt` = 'ovqat' WHERE `qadam`.`foyid` = '7720099'");
    qadam($chat_id,"qushish");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot oddiy lotincha ismini yuboring yoki har xil harflar kamida kjshdfk ga o'xshash va ikkita bir xil oddiy nom yubormang!!!"
    ]); 
}
if($text and $adres=="qushish" and  $chat_id==$admin){
  $dlq=mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `ikki` = \"$text\" WHERE `qadam`.`foyid` = '7720099'"); 
 
    if($dlq){
            qadam($chat_id,"qushish2");
        bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot narxini yuboring"
    ]);
    }else{
              qadam($chat_id,"qushish");
        bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot nomini qaytadan yuboring"
    ]);  
    }
    
}
if($text and $adres=="qushish2" and  $chat_id==$admin){
  $djt=mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `uch` = '$text' WHERE `qadam`.`foyid` = '7720099'"); 
     if($djt){
            qadam($chat_id,"qushish3");
        bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot rasmini fayl qilib yuboring"
    ]);
    }else{
              qadam($chat_id,"qushish2");
        bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot narxini qaytadan yuboring"
    ]);  
    }
}
if($message->document and $adres=="qushish3" and  $chat_id==$admin){

    
    
    
    $sqlqaq = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqaq= mysqli_query($db,$sqlqaq);
$rowqaq = mysqli_fetch_assoc($resqaq);
$b=$rowqaq['bir'];
$ik2=$rowqaq['ikki'];
$uch3=$rowqaq['uch'];
$tu4=$rowqaq['turt'];
$qab=$rowqaq['qab'];
$rum=$rowqaq['refum'];
$sus=$rowqaq['status'];
    
   $doc_id = $message->document->file_id;

$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
    
$path=$url['result']['file_path'];
    
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;

$okey = file_put_contents("images/ovqatlar/$ik2.jpg",file_get_contents($file));

    
    
    
    
    
    if($qab[0]=="a" and $tu4=="ovqat"){
        $qab=str_replace('a','b',$qab);
         $b.=",[{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]";   
if($tu4=="ovqat"){
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '$b', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'");   
}  
    }
    elseif($qab[0]=="b" and $tu4=="ovqat"){
$qab=str_replace('b','a',$qab);
   $sr=explode("],",$b);
$jr=count($sr)-1; 
       $avva=$esse=$sr[$jr];
        
      $br=str_replace("]",",{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]",$avva); 
      $bor=str_replace("$esse","$br",$b); 
      $bq=str_replace('"','\"',$bor);
        
if($tu4=="ovqat"){
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '$bq', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'"); 
}     
    }
    
    
    
    
    if($qab[1]=="c" and $tu4=="salat"){
         if($rum){
         $b.=",[{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]";   
        }else{
           $b="[{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]"; 
        }
        $qab=str_replace('c','d',$qab);
        
if($tu4=="salat") {
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `refum` = '$b', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'");
}    
    }
    elseif($qab[1]=="d" and $tu4=="salat"){
$qab=str_replace('d','c',$qab);
   $sr=explode("],",$b);
$jr=count($sr)-1; 
       $avva=$esse=$sr[$jr];
        
      $br=str_replace("]",",{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]",$avva); 
      $bor=str_replace("$esse","$br",$b); 
      $bq=str_replace('"','\"',$bor);
        
     if($tu4=="salat") {
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `refum` = '$bq', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'");
}       
    }
    
    
    
    if($qab[2]=="e" and $tu4=="gazak"){
        $qab=str_replace('e','f',$qab);
       if($sus){
         $b.=",[{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]";   
        }else{
           $b="[{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]"; 
        }
        if($tu4=="gazak") {
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `status` = '$b', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'");
}   
    }
    elseif($qab[2]=="f" and $tu4=="gazak"){
$qab=str_replace('f','e',$qab);
   $sr=explode("],",$b);
$jr=count($sr)-1; 
       $avva=$esse=$sr[$jr];
        
      $br=str_replace("]",",{\"callback_data\":\"$ik2\",\"text\":\"$ik2\"}]",$avva); 
      $bor=str_replace("$esse","$br",$b); 
      $bq=str_replace('"','\"',$bor);
        
        if($tu4=="gazak") {
 mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `status` = '$bq', `qab` = '$qab' WHERE `qadam`.`foyid` = '7720099'");
}     
    }
    
 mysqli_query($db,"INSERT INTO `milliykr_tfood`.`mahsulot` (`id`, `nom`, `narx`, `info`, `abs`) VALUES (NULL, '$ik2', '$uch3', '', 'images/ovqatlar/$ik2.jpg');");
    
    
     qadam($chat_id,"admin");
    
    
    $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir'];
    
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Mahsulot qo'shildi",
                'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"mahsulot qo'shish"]],
[['text'=>"mahsulotni o'chirish"]],
[['text'=>"mahsulot narxlarini o'zgartirish"]],
/*[['text'=>"mahsulot rasmlarini o'zgartirish"]],*/
[['text'=>"\"barchasi\"dagi rasmlarni o'zgartirish"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);
}



if($text=="mahsulotni o'chirish" and $chat_id==$admin and $adres=="admin"){
    qadam($chat_id,"mahuch");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"tanlang",
                'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"ovqat"]],
[['text'=>"salat"]],
[['text'=>"gazak"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);

}
if($text=="gazak" and $adres=="mahuch" and  $chat_id==$admin){ 
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahuchg");
   $sev="sendMessage";
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['status']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Mahsulotlardan birini tanlang ⬇️",
'reply_markup'=>$men]);   
}
if($text=="salat" and $adres=="mahuch" and  $chat_id==$admin){ 
      if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahuchs");
   $sev="sendMessage";
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['refum']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Mahsulotlardan birini tanlang ⬇️",
'reply_markup'=>$men]); 
}
if($text=="ovqat" and $adres=="mahuch" and  $chat_id==$admin){ 
      if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahucho");
   $sev="sendMessage";
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Mahsulotlardan birini tanlang ⬇️",
'reply_markup'=>$men]);
}
if($datas and $chat_id2==$admin and $adres=="mahuchg" or $datas and $chat_id2==$admin and $adres=="mahuchs" or $datas and $chat_id2==$admin and $adres=="mahucho"){

 mysqli_query($db,"DELETE FROM `milliykr_tfood`.`mahsulot` WHERE `nom` = '$datas'");
    del("images/ovqatlar/$datas.jpg");
$search = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
    if($adres=="mahuchg"){
     while($red=mysqli_fetch_assoc($search)){
    $mes=$red['status'];$kd="status";
}   
    }
    if($adres=="mahuchs"){
        while($red=mysqli_fetch_assoc($search)){
    $mes=$red['refum'];$kd="refum";
}
    }
    if($adres=="mahucho"){
            while($red=mysqli_fetch_assoc($search)){
    $mes=$red['bir'];$kd="bir";
}  
    }
   qadam($chat_id2,"admin");
    bot('deleteMessage',[
           'chat_id'=>$chat_id2,
            'message_id'=>$message_id2
        ]);
    
    
    
    
    
    
   /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"$mes",]);
    */
    
    
    
 $fl1=explode("],",$mes);
$fl2=count($fl1);
    
    
  
  
    
    for($f=0;$f<$fl2;$f++){
       /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"$datas",]);*/
        if($f==0){
          $dg= $fl1[$f];
           /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dgt:$dg",]);*/
            
            $dg1=explode(",",$dg);
            $dj=count($dg1);
            if($dj==2 and $fl2==1){
           # mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `bir` = '',`qab` = '2' WHERE `qadam`.`foyid` = '7720099'");
                 bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"Mahsulot bitta qolgani uchun yangi mahsulot qo'shib, keyin buni o'chiring!",]);
            }
            
            if($dj==2 and $fl2!==1){
                
            if(strpos($dg1[0],"$datas")!==false){
                $dh=str_replace("}","}],",$dg);
             /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh1:$dh",]);*/
                $mes=str_replace("$dh","",$mes);
 /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
            }
            }
            
            else{
             
            if(strpos($dg1[0],"$datas")!==false){
                
                /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg10:$dg1[0]",]);*/
                
             $dh=$dg1[0];
            $dh.=",$dg1[1]";
                $dh=str_replace("[","",$dh);
                $dh=str_replace("}","},",$dh);
              /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh1:$dh",]);*/  
                $mes=str_replace("$dh","",$mes);
 /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }
            elseif(strpos($dg1[2],"$datas")!==false){
                
              $dh=$dg1[2];
            $dh.=",$dg1[3]";
                
              /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $dh=str_replace("]","",$dh);
                $dh=str_replace("{",",{",$dh);
                 /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $mes=str_replace("$dh","",$mes);
 /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }   
            } 
        }
        elseif(strpos($fl1[$f],"$datas")!=false and $f==$fl2-1 and $f!=0){
          $dg= $fl1[$f];
      /*     bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg:$dg",]);*/
            
            $dg1=explode(",",$dg);
            $et=count($dg1);
            if($et==2){
            if(strpos($dg1[0],"$datas")!==false){
                
               /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg10:$dg1[0]",]);*/
                
             $dh=$dg1[0];
            $dh.=",$dg1[1]";
                $dh=str_replace("[",",[",$dh);
            /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dhet2:$dh",]);*/  
                $mes=str_replace("$dh","",$mes);
/*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }
                mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `qab` = '2' WHERE `qadam`.`foyid` = '7720099'");
            }else{
            
            if(strpos($dg1[0],"$datas")!==false){
                
               /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg10:$dg1[0]",]);*/
                
             $dh=$dg1[0];
            $dh.=",$dg1[1]";
                $dh=str_replace("[","",$dh);
                $dh=str_replace("}","},",$dh);
            /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh0:$dh",]);*/  
                $mes=str_replace("$dh","",$mes);
/*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }
            elseif(strpos($dg1[2],"$datas")!==false){
                
              $dh=$dg1[2];
            $dh.=",$dg1[3]";
                
              /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $dh=str_replace("]","",$dh);
                $dh=str_replace("{",",{",$dh);
                 /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $mes=str_replace("$dh","",$mes);
 /* bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }  
                mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `qab` = '1' WHERE `qadam`.`foyid` = '7720099'");
            }
        }
        
        elseif(strpos($fl1[$f],"$datas")!=false and $f<$fl2-1 and $f!=0){
          $dg= $fl1[$f];
            /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dgt:$dg",]);*/
            
            $dg1=explode(",",$dg);
            $dj=count($dg1);
            if($dj==2){
                
            if(strpos($dg1[0],"$datas")!==false){
                
              /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg10:$dg1[0]",]);*/
                
             $dh=$dg1[0];
            $dh.=",$dg1[1]";
                $dh=str_replace("[",",[",$dh);
                $dh=str_replace("}","}]",$dh);
              /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh1:$dh",]);*/
                $mes=str_replace("$dh","",$mes);
/*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }
            }else{
             
            if(strpos($dg1[0],"$datas")!==false){
                
                /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dg10:$dg1[0]",]);*/
                
             $dh=$dg1[0];
            $dh.=",$dg1[1]";
                $dh=str_replace("[","",$dh);
                $dh=str_replace("}","},",$dh);
              /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh1:$dh",]);*/  
                $mes=str_replace("$dh","",$mes);
//  bot('sendMessage',[
//       'chat_id'=>$admin,
//        'text'=>"res:$mes",]);
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }
            elseif(strpos($dg1[2],"$datas")!==false){
                
              $dh=$dg1[2];
            $dh.=",$dg1[3]";
                
              /*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $dh=str_replace("]","",$dh);
                $dh=str_replace("{",",{",$dh);
                 /*bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"dh2:$dh",]);*/
                $mes=str_replace("$dh","",$mes);
/*  bot('sendMessage',[
       'chat_id'=>$admin,
        'text'=>"res:$mes",]);*/
    $mes=str_replace("\"","\\\"",$mes);
    mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `$kd` = '$mes' WHERE `qadam`.`foyid` = '7720099'");
                
            }   
            }
        }
    }
    

    
     $sqlqadamq = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqadamq= mysqli_query($db,$sqlqadamq);
$rowqadamq = mysqli_fetch_assoc($resqadamq);
$bqw=$rowqadamq['bir'];
    $drw='{"inline_keyboard":['."$bqw".']}';
    
	  bot('editMessageText',[ 
	     'chat_id'=>$admin,
	       'message_id'=>$message_id2, 
          'text'=>"O'chirildi!!! ",
'reply_markup'=>$drw
]);

}



if($text=="mahsulot narxlarini o'zgartirish" and $chat_id==$admin and $adres=="admin"){
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahaz");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"tanlang",
                'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"ovqat"]],
[['text'=>"salat"]],
[['text'=>"gazak"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);
 
}
if($text=="ovqat" and $chat_id==$admin and $adres=="mahaz"){
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahuz");
   $sev="sendMessage";
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
           if($soqqa>1000){
       $rt=($soqqa-$soqqa%1000)/1000;
       $soqqa=$soqqa-($rt*1000);
       $soqqa="$rt mln $soqqa";
   }else{
       $soqqa=$soqqa;
   }
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
 
}
if($text=="salat" and $chat_id==$admin and $adres=="mahaz"){
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahuz");
   $sev="sendMessage";
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['status']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
 
}
if($text=="gazak" and $chat_id==$admin and $adres=="mahaz"){
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahuz");
   $sev="sendMessage";
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['refum']; 
    $men='{"inline_keyboard":['."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
 
}
if($datas and $chat_id2==$admin and $adres=="mahuz"){
    bot('deleteMessage',[
           'chat_id'=>$chat_id2,
            'message_id'=>$message_id2
        ]);
    qadam($chat_id2,"mahuz");
     mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `kim` = '$datas' WHERE `qadam`.`foyid` = '7720099'");
     $sear = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `nom` LIKE '$datas'");
while($redds=mysqli_fetch_assoc($sear)){
    $kow=$redds['narx'];
}
    bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>"Avval mahsulot $kow so'm turgandi.\n\nYangi narxni yozib yuboring."
    ]);
}
if($text and $chat_id==$admin and $adres=="mahuz"){
qadam($chat_id,"admin");
 $searchd = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
while($redd=mysqli_fetch_assoc($searchd)){
    $ko=$redd['kim'];
}   
    
  mysqli_query($db,"UPDATE `milliykr_tfood`.`mahsulot` SET `narx` = '$text' WHERE `mahsulot`.`nom` = '$ko'"); 
	  bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'message_id'=>$message_id, 
          'text'=>"Almashtirildi",
]);

}



if($text=="\"barchasi\"dagi rasmlarni o'zgartirish" and $adres=="admin" and $chat_id==$admin){
    qadam($chat_id,"barras");
       if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahaz");
    bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"tanlang",
                'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"o'chirish"]],
[['text'=>"yangi qo'shish"]],
[['text'=>"⬅️ Ortga"]],
]
])
    ]);
  
}
if($text=="o'chirish" and $adres=="mahaz" and $chat_id==$admin){
       qadam($chat_id,"uchirbar"); 
    
    $searg = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
while($reddg=mysqli_fetch_assoc($searg)){
    $koa=$reddg['refson'];
} 
    $gh=explode(",",$koa);
    $dp=count($gh);
    for($n=0;$n<$dp;$n++){
       bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$gh[$n],
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['callback_data'=>"$gh[$n]",'text'=>"o'chirish"]]
]
])
]);   
    }
}
if($datas and $adres=="uchirbar" and $chat_id2==$admin){
     bot('deleteMessage',[
           'chat_id'=>$chat_id2,
            'message_id'=>$message_id2
        ]); 
        $searg = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
while($reddg=mysqli_fetch_assoc($searg)){
    $koa=$reddg['refson'];
}
       $koa=str_replace("$datas,","",$koa);
    
     mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `refson` = '$koa' WHERE `qadam`.`foyid` = '7720099'");
    bot('sendMessage',[
           'chat_id'=>$chat_id2,
            'text'=>"o'chirildi"
        ]);
}
if($text=="yangi qo'shish" and $adres=="mahaz" and $chat_id=="$admin"){
    qadam($chat_id,"baryan");
      bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"Rasmni yuboring, (oddiy ko'rinishda, fayl ko'rinishda emas!!!)"
    ]);
}
if($message->photo and $adres=="baryan" and $chat_id=="$admin"){
    $doc = $message->photo->file_id; 
        $searg = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
while($reddg=mysqli_fetch_assoc($searg)){
    $koa=$reddg['refson'];
}
       $koa.="$doc,";
    
     mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `refson` = '$koa' WHERE `qadam`.`foyid` = '7720099'");
    bot('sendMessage',[
           'chat_id'=>$chat_id,
            'text'=>"qo'shildi"
        ]);
}
 /*
if($text=="mahsulot rasmlarini o'zgartirish" and $chat_id==$admin and $adres=="admin"){

   
    if($chat_id){}else{$chat_id=$chat_id2;$message_id=$message_id2;}
    qadam($chat_id,"mahras");
   $sev="sendMessage";
      $hgl=explode(",",$bir);
$hgk=count($hgl);
    
if($bir){
    
  $tf="Tog'orada:\n";
$soqqa=0;
        for($k=0;$k<$hgk-1;$k++){
            
$search = mysqli_query($db,"SELECT * FROM `mahsulot` WHERE `id` LIKE '$hgl[$k]'");
while($red=mysqli_fetch_assoc($search)){
    $nom=$red['nom'];
    $narx=$red['narx'];
    
}
            $r=$k+1;
            $tf.="$r) $nom - $narx ming so'm \n";
     $soqqa+=$narx;
        }
        
        $tf.="\n Jami: $soqqa ming so'm";   
    }else{$tf=" ";}
    
     $sqlqa = "SELECT * FROM `qadam` WHERE `foyid` = '7720099'";
$resqa= mysqli_query($db,$sqlqa);
$rowqa = mysqli_fetch_assoc($resqa);
$menyu=$rowqa['bir']; 
    $men='{"inline_keyboard":[[{"callback_data":"barchasi","text":"📖 Barcha menyular"},{"callback_data":"korzinka","text":"🍽 Tog\'orada"}],[{"callback_data":"salat","text":"🥗 Salatlar"},{"callback_data":"gazak","text":"🥦 Gazaklar"}],'."$menyu".']}';  
     bot($sev,[ 
	     'chat_id'=>$chat_id,
         'message_id'=>$message_id,
	       'text'=>"$tf\n Kategoriyalardan birini tanlang ⬇️",
'reply_markup'=>$men]);
 
}
if($datas and $chat_id2==$admin and $adres=="mahras"){
    qadam($chat_id2,"mahras");
     mysqli_query($db,"UPDATE `milliykr_tfood`.`qadam` SET `kim` = '$datas' WHERE `qadam`.`foyid` = '7720099'");
    bot('sendMessage',[
       'chat_id'=>$chat_id2,
        'text'=>"Yangi rasmni fayl shaklida yuboring."
    ]);
}
if($message->document and $chat_id==$admin and $adres=="mahras"){
qadam($chat_id,"admin");
 $searchd = mysqli_query($db,"SELECT * FROM `qadam` WHERE `foyid` LIKE '7720099'");
while($redd=mysqli_fetch_assoc($searchd)){
    $ko=$redd['kim'];
}
       $doc_id = $message->document->file_id;
del("images/ovqatlar/$ko.jpg");
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
    
$path=$url['result']['file_path'];
    
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;

$okey = file_put_contents("images/ovqatlar/$ko.jpg",file_get_contents($file));

    
    
    
    
    
  mysqli_query($db,"UPDATE `milliykr_tfood`.`mahsulot` SET `abs` = 'images/ovqatlar/$ko.jpg' WHERE `mahsulot`.`nom` = '$ko'"); 
	  bot('sendMessage',[ 
	     'chat_id'=>$chat_id,
	       'message_id'=>$message_id, 
          'text'=>"Almashtirildi",
]);     
}
 */





 
 /*for($j=$message_id-1;$j>$message_id-5;$j--){
        bot('deleteMessage',[
           'chat_id'=>$chat_id,
            'message_id'=>$j
        ]);
    }*/
?>