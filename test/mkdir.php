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
<form method="post" action="mkdir2.php?file_src=<?php echo $file_src;?>">
	新資料夾：<input type="text" name="file" id="file">
<br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</center>
</body>
</html>


