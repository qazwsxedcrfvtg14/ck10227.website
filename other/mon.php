<?php include("../include.php");?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><a href="other/mon.php" target="main">夢駝林</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
</head>
<frameset cols="*" framespacing="0" border="0">
  <frame src="http://study.ck.tp.edu.tw/login_chk.asp?f_uid=<?php echo $CookieUser;?>&f_pwd=<?php
if((@file_exists("/volume1/web/joe59491/user/".$CookieUser.".txt"))){
	$fi = fopen("/volume1/web/joe59491/user/".$CookieUser.".txt","r");
	$str=fgets($fi,10000);
	$str=trim($str);	
	echo $str;
	}
?>">
</frameset></noframes>
<body>
</html>
