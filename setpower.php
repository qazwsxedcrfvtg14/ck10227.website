<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><a href="seealluser.php" target="main">設定權限</a></title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>

</center>
<form name="form1" method="post" action="setingpower.php">
    <label>  </label>
  　　　　　　帳　　號：<input name="code" type="text" id="code" value="<?php echo $code;?>" size="10"><br>
<br>
  　　　　　　權　　限：<input name="power" type="text" id="pow" value="<?php echo $power;?>" size="10"><br><br>
  　　　　　　  　　　　　　  　　　　　　  　　　　　　<input type="submit" name="button" id="button" value="送出">
  </label>
</form>
</marquee></a></td></table></center>
</html>
