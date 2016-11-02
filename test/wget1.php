<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>編輯器</title>
<link rel="stylesheet" type="text/css" href="../BS.css">
<style type="text/css">
</style>
</head>
<body>
<center>
<br>
<br>
<form method="post" action="wget.php?file_src=<?php echo urlencode($file_src);?>">
	檔案名稱：<input type="text" name="nam" id="nam">
	<br><br>
	檔案位置：<input type="text" name="thing" id="thing">
	<br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</center>
</body>
</html>


