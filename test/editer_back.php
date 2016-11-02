<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>編輯器</title>
<link rel="stylesheet" type="text/css" href="../BS.css">
<style type="text/css">
</style>
</head>
<body>
<form method="post" action="write.php?file=<?php echo $file;?>&file_src=<?php echo $file_src;?>">
	<textarea id="thing" name="thing" style="width: 100%;height:80%"><?php
function chk_dir($dir,$my_dir){
	$dir=realpath($dir);
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
if(chk_dir($file,$My_Dir))
echo file_get_contents($file);
?></textarea><br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</body>
</html>


