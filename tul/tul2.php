<?php include("../include.php"); ?><?php
if($url!=""){
$password_len = 6;
$password = '';
// remove o,0,1,l
$word = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
$len = strlen($word);
for($i=0;$i<$password_len;$i++){
    $password.=$word[rand()%$len];
	}
while((@file_exists("data/".$password))){
	$password_len = 6;
	$password = '';
	// remove o,0,1,l
	$word = 'abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789';
	$len = strlen($word);
	for($i=0;$i<$password_len;$i++){
		$password.=$word[rand()%$len];
		}
	}
$chk=explode(":",$url);
if($chk[0]!="http"&&$chk[0]!="https"&&$chk[0]!="ftp"){
$url="http://".$url;
}
file_put_contents("data/".$password,$url,LOCK_EX);}
else{
$err=1;
}
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>縮網址</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body>
<center>
<p>
<?php
if($err==1){echo"請勿輸入空網址！";}
else{
echo"你的縮網址為： <b>http://ck10227.twbbs.org/?u=$password</b>";
}
?></p>
</center>
</html>


