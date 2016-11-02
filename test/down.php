<?php include("../include.php"); ?>
<?php

function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
  	if(strstr($dir,"public_")!="")return 1;
	if($my_dir=="")return 0;
	else echo $mydir;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
	if(chk_dir($file_name,$My_Dir)&&(@file_exists($file_name))){
		header('Pragma: public');
		header('Expires: 0');
		header('Last-Modified: ' . gmdate('D, d M Y H:i ') . ' GMT');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Cache-Control: private', false);
		header('Content-Type: application/octet-stream');
		header('Content-Length: ' . filesize($file_name));
		header('Content-Disposition: attachment; filename="' . get_basename($file_name) . '";');
		header('Content-Transfer-Encoding: binary');
		readfile($file_name);
		}
	else{
	echo"
<html><head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <meta http-equiv=\"Content-Language\" content=\"zh-tw\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"./BS.css\">
  <title>下載</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
 <body><center>
檔案消失了！？？<br><br>
<a href=\"download.php\">Back</a>
 </center></body></html>

";
		}
?>
