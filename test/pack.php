<?php include("../include.php"); ?><?php
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
	if(chk_dir($file_src,$My_Dir)){
  		$zip_name=get_basename($file_src);
      exec("zip zip/".$zip_name.".zip ".$file_src." -r");
		}
header("refresh:0;url=down.php?file_name=zip/".$zip_name.".zip");
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>寫入中</title>
<script type='text/javascript'>
//parent.hide();
//parent.reload();
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
</p>
<br>
</body>
</html>


