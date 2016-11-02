<?
error_reporting(E_ERROR);
if(!ini_get('register_globals')){
	extract($_POST);
	extract($_GET);
	extract($_SERVER);
	extract($_FILES);
   	extract($_ENV);
   	extract($_COOKIE);
   	if(isset($_SESSION)){
       	extract($_SESSION);
   		}
	}
?><?php
if($judger=="judgement"&&$judgerpass=="MisakaMikoto"&&$id!=""){
	file_put_contents("status/$id","$pid\n$status\n$time\n$memery",LOCK_EX);
	$sta="NULL";
	if($status=="0")$sta="WJ";
	else if($status=="1")$sta="CE";
	else if($status=="2")$sta="SE";
	else if($status=="3")$sta="RE";
	else if($status=="4")$sta="TLE";
	else if($status=="5")$sta="MLE";
	else if($status=="6")$sta="WA";
	else if($status=="7")$sta="AC";
	else if($status=="8")$sta="JE";
	else if($status=="9")$sta="OLE";
	file_put_contents("userdata/$user","<p name=\"bt\" id=\"bt\" class=\"bt\">　Run ID:$id<br>　題目:$pid<br>　結果:$sta<br>　時間:$time ms<br>　記憶體:$memery KB</p>".file_get_contents("userdata/$user"),LOCK_EX);
	}
?>


