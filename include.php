<?php
  //header("Page-Enter:blendTrans(Duration=1.0)");
  //header("Page-Exit:blendTrans(Duration=1.0)");
//error_reporting(E_ALL);
error_reporting(E_ERROR);
include("key.php");
$webdb['correctiontime']=0;//28800;
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
$P_of_key=1;
$CookieUser="";
$nick="";
$WhoUser="訪客";
if($UserName!=""){
	$CookieUser = authcode($UserName,'DECODE');
    if ((!(@file_exists("/volume1/web/user/".$CookieUser.".txt")))||$CookieUser==""){
		$CookieUser="";
		$WhoUser="訪客";
		}
	else{
		$fileopen = fopen("/volume1/web/user/".$CookieUser.".txt","r");
		$word = fgets($fileopen,1000) ;
		$word=trim($word);
		$nick = fgets($fileopen,1000) ;
		$nick=trim($nick);
		fclose($fileopen);
		$UserPass = authcode($UserPass,'DECODE');
		if($word==$UserPass){
			$WhoUser=$CookieUser."(".$nick.")";
			$Time=date("Y年m月d號H點i分s秒",time()+$webdb['correctiontime']);
			file_put_contents("/volume1/web/IPs/".$CookieUser.".txt",$REMOTE_ADDR."\n".$Time,LOCK_EX);
			}
		else{
			$nick="";
			$CookieUser="";
			$WhoUser="訪客";
			}
		}
	}
$Time=date("Y@m@d@H@i@s",time()+$webdb['correctiontime']);
//$LineArray=file("/var/www/joe59491/IPs/list.txt");
$LineArray=file("/tmp/ck10227list.txt");
$HowManyLines=count($LineArray);
$SameUser=false;
$IPs_S="";
$UserData=$REMOTE_ADDR ."@".$WhoUser."@".$Time."\n";
for ($i=0; $i<$HowManyLines; $i++){
  	$AllData=$LineArray[$i];
  	$Segment=explode("@",$AllData);
  	$IPAddress[$i]=$Segment[0];
  	$CokiU[$i]=$Segment[1];
	$Gap=0;
	$Gap=time()+$webdb['correctiontime']-mktime((int)$Segment[5],(int)$Segment[6],(int)$Segment[7],(int)$Segment[3],(int)$Segment[4],(int)$Segment[2]);
  	if($REMOTE_ADDR == $IPAddress[$i]&&$CokiU[$i]==$WhoUser&&$SameUser==false){
		$IPs_S=$UserData.$IPs_S;
		$UserData2=$AllData;
    		$SameUser = true;
  		}
  	else if($REMOTE_ADDR == $IPAddress[$i]&&$CokiU[$i]==$WhoUser&&$SameUser==true){
  		}
  	else if($Gap<=3600*24*7){
		$IPs_S=$IPs_S.$AllData;
  		}
	}
if($SameUser==false){$IPs_S=$REMOTE_ADDR."@".$WhoUser."@".$Time."\n".$IPs_S;}
if($UserData!=$UserData2)
  //file_put_contents("/var/www/joe59491/IPs/list.txt", $IPs_S,LOCK_EX);
file_put_contents("/tmp/ck10227list.txt", $IPs_S,LOCK_EX);
$Group="None";
if($CookieUser!=""){
	if((@file_exists("/volume1/web/user/group/".$CookieUser.".txt"))){
		$str=file_get_contents("/volume1/web/user/group/".$CookieUser.".txt");
		$str=trim($str);
		$Group=$str;
		}
	else{
		$Group="Normal";	
		}
	}
include("power.php");
/*
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}*/
?>
