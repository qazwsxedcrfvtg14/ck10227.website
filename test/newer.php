<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>編輯器</title>
<link rel="stylesheet" type="text/css" href="../BS.css">
<style type="text/css">
</style>
</head>
<body>
<form method="post" action="write.php?file_src=<?php echo urlencode($file_src);?>">
	檔名：<input type="text" name="file" id="file"><br><br>
	<textarea id="thing" name="thing" style="width: 100%;height:70%"></textarea><br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</body>
</html>


