<?php include("../include.php"); ?>
<?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
$file_path = get_basename($file_dir)."/".get_basename($file_name);
	if((@file_exists($file_path))){
		$file_size = filesize($file_path);
		header('Pragma: public');
		header('Expires: 0');
		header('Last-Modified: ' . gmdate('D, d M Y H:i ') . ' GMT');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Cache-Control: private', false);
		header('Content-Type: application/octet-stream');
		header('Content-Length: ' . $file_size);
		header('Content-Disposition: attachment; filename="' . $file_name . '";');
		header('Content-Transfer-Encoding: binary');
		readfile($file_path);
		}
	else{
      //echo $file_path;
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
