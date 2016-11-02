<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><a href="index8.php" target="main">登入</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
body{
line-height:24px;
}
</style>
</head>

<body>
<cneter>
<?php
if($CookieUser!=""&&$CookieUser!="deleted"){
$fi = fopen("user/".$CookieUser.".txt","r");
$nn = fgets($fi,100);
$nn = fgets($fi,100);
$nn= trim($nn);
echo "<br><a href=\"html/file.php?code=".$CookieUser."\">".$nn."您好！</a><br><br>";
echo "<!--您已登入了!<br><br>-->
<a href=\"index12.php\" target=\"main\">更改個資</a><br>
<a href=\"html/big.php?name=".$CookieUser."\" target=\"main\">更換大頭貼</a><br>";
if($P_Send_Email){echo "<a href=\"PHPMailer/newpost.php\" target=\"main\">發送郵件<br>";}
if($P_Backup_Talks){echo "</a><a href=\"talkroom/back.php\" target=\"main\">備份聊天室</a><br>";}
if($P_Set_Power){echo "</a><a href=\"setpower.php\" target=\"main\">設定權限</a><br>";}
if($P_Set_Power){echo "</a><a href=\"seealluser.php\" target=\"main\">帳號清單</a><br>";}
if($P_Who_Online){echo "</a><a href=\"whoonline.php\" target=\"main\">誰在線上</a><br>";}
if($P_Run_C){echo "</a><a href=\"crun/cppuser.php\" target=\"main\">執行程式</a><br>";}
  //if($P_MAMA){echo "</a><a href=\"test%2Fmap.php%3Ffile_src%3D%2Fvar%2Fwww%2Fjoe59491%2Fmama\" target=\"main\">個人空間</a><br>";}
if($P_Back_Edit){echo "</a><a href=\"test/file_map.html\" target=\"main\">後台編輯</a><br>";}
echo "<br><a href=\"logout.php\">登出</a><br>

<script type='text/javascript'>
parent.document.getElementById('bt_login').innerHTML=\"　我的帳號\";
</script>



";

}
else{
echo "
<br>
請由此登入：<br><br>
<form Action=\"login.php\" Method=\"POST\">  
帳號:<input type=\"text\" size=\"8\"  name=\"name\" id=\"name\"><br><br>
		
	密碼:<input type=\"password\" size=\"8\"  name=\"pass\" id=\"pass\"  ><br><br>
	<INPUT TYPE=SUBMIT VALUE=\"登入!\"><br>
</form><a href=\"newpass.php\" target=\"main\">申請會員</a><br>
<br><a href=\"html/iforget.php\" target=\"main\">忘記密碼了？</a>


<script type='text/javascript'>
parent.document.getElementById('bt_login').innerHTML=\"　登入\";
</script>
";
}
?>
<br>
<br>
</center>
<p></body>
</html>



