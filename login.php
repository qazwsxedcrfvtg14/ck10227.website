<?php include("include.php"); ?>
<?php



	$p=0;
     if (!(@file_exists("user/".$name.".txt"))){
		$p=1;
		}
     else{
		$fileopen = fopen("user/".$name.".txt","r");
		fseek($fileopen,0);
		$word = fgets($fileopen,100) ;
		$word=trim($word);
		fclose($fileopen);
		if($word==$pass){
			$name=trim($name);
			$name=authcode($name,'ENCODE');
			$pass=authcode($pass,'ENCODE');
			setcookie("UserName",$name,time()+100000000);
			setcookie("UserPass",$pass,time()+100000000);
			header("refresh:0;url=index8.php");
			}
		else if($word==$pass&&$name=="guest"){
			$name=trim($name);
			$name=authcode($name,'ENCODE');
			$pass=authcode($pass,'ENCODE');
			setcookie("UserName",$name,time()+100000000);
			setcookie("UserPass",$pass,time()+100000000);
			header("refresh:0;url=index8.php");
			}
		else{$p=2;}

}
?>
<html><head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
   <title>登入中</title>  
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<style type="text/css">
<!--
a:link {
	color: #ffffff;
}
a:visited {
	color: #ffffff;
}
a:hover {
	color: #ffffff;
}
a:active {
	color: #ffffff;
}
-->
</style>
</head>

<body><center>
<?php
if($p==1){echo "沒有這個帳號！<P><a href=\"index8.php\">按我回去</a>";}
if($p==2){echo "密碼錯誤！<P><a href=\"index8.php\">按我回去</a>";}
?>
</center></body></html>
