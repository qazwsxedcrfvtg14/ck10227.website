<?php include("../include.php"); ?><?php
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
  if(strstr($dir,"public_edit_")!="")return 1;
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
		$file=get_basename($file);
		$oldmask=umask(0);
		mkdir($file_src."/".$file);
		umask($oldmask);
		}
	//header("refresh:0;url=map.php?file_src=$file_src");
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>寫入中</title>
<script type='text/javascript'>
parent.parent.document.getElementById('treef').contentDocument.location.reload();
parent.location.reload();
parent.hide();
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
?>
<br>
</html>
