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
<form method="post" action="rename2.php?file=<?php echo urlencode($file);?>&file_src=<?php echo urlencode($file_src);?>">
	重新命名：<input type="text" name="thing" id="thing" value="<?php
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if(chk_dir($file,$My_Dir))
echo get_basename($file);
?>">
<br><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
</center>
</body>
</html>


