<?php
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
$Group="None";
if($CookieUser!=""){
	if((@file_exists("/volume1/web/joe59491/user/group/".$CookieUser.".txt"))){
		$fi = fopen("/volume1/web/joe59491/user/group/".$CookieUser.".txt","r");
		$str=fgets($fi,10000);
		$str=trim($str);
		$Group=$str;
		}
	else{
		$Group="Normal";	
		}
	}
echo $Group;
?>
