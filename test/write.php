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
	if($file_src&&chk_dir($file_src,$My_Dir)){
		$file=get_basename($file);
		file_put_contents($file_src."/".$file,$thing,LOCK_EX);
		}
	if(chk_dir($file,$My_Dir))
		file_put_contents($file,$thing,LOCK_EX);
	//header("refresh:0;url=editer.php?file=$file&file_src=$file_src");
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>寫入中</title>
<script type='text/javascript'>
  parent.hide();
  parent.location.reload();
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
?>
<br>
</html>


