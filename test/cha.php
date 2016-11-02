<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>轉檔</title>
<link rel="stylesheet" type="text/css" href="../BS.css">
<style type="text/css">
</style>
</head>
<body>
<center>
<br>
<br>
<form method="post" action="cha2.php?file_src=<?php echo urlencode($file_src);?>&file=<?php echo urlencode($file);?>">
	轉成什麼副檔名：<input type="text" name="fil" id="fil">
<br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</center>
</body>
</html>


