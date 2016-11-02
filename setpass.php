<?php include("include.php"); ?><?php
	$err=0;
	$name=authcode($name,'DECODE');
	$pass=authcode($pass,'DECODE');
	$code=authcode($code,'DECODE');
	$email=authcode($email,'DECODE');
	if (!(@file_exists("user/".$code.".txt"))){
		}
	else{
		$err=4;
		}
  if($err==0){
		$fileopen = fopen("user/".$code.".txt","w");
		fwrite($fileopen,$pass."\n".$name."\n".$email."\n");
		fclose($fileopen);
		$elis=file("html/class/data/parent_email.txt");
		$lines=count($elis);
		for ($i=0; $i<$lines; $i++){
			if($email==trim($elis[$i])){
				file_put_contents("user/group/".$code.".txt","parent",LOCK_EX);
				}
			}
		$name=authcode($code,'ENCODE');
		$pass=authcode($pass,'ENCODE');
		setcookie("UserName",$name,time()+100000000);
		setcookie("UserPass",$pass,time()+100000000);
		header("refresh:5;url=index.php");
		}

?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>註冊中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
  if($err==0){
echo"
	註冊成功！！(目前您已自動登入)<br>
五秒後將自動跳轉
	";}
  if($err==4){echo"此帳號已被註冊！";}
?>
<a href="http://tw.webmaster.yahoo.com"><br>
<br>
<img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
</html>

