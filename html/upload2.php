<?php include("../include.php"); ?><?php

function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($P_Upload){
	$fupload_name=$fupload['name'];
	$fupload_name=get_basename($fupload_name);
	if(!(@file_exists("../data/Upload/".$fupload_name))){
		$fupload_name=$fupload['name'];
		$fupload_type=$fupload['type'];
		$fupload_size=$fupload['size'];
		$fupload_error=$fupload['error'];
		$fupload_tmp=$fupload['tmp_name'];
		if($fupload_error>0){
			$fupload_name="None";
			$fupload_size="None";
			$fupload_type="None";
			$fupload_tmp="None";
			echo $fupload_error;
			}
		else{
			copy($fupload_tmp,"../data/Upload/".$fupload_name);
			$fileopen = fopen("../data/list.txt","a");
			fwrite($fileopen,date('Y',time()+$webdb['correctiontime'])."-".date('m',time()+$webdb['correctiontime'])."-".date('j',time()+$webdb['correctiontime'])."-".date(H,time()+$webdb['correctiontime'])."-".date(i,time()+$webdb['correctiontime'])."-".date(s,time()+$webdb['correctiontime'])."-"."\n".$fupload_name."\n".$bac."\n".$nick."\n");
			fclose($fileopen);
			}
		}
	else{
		$fupload_name="None";
		$fupload_size="None";
		$fupload_type="None";
		$fupload_tmp="None";
		echo"There is a same file in the server!!!";
		}
	}
else{
	$fupload_name="權限不足";
	$fupload_size="權限不足";
	$fupload_type="權限不足";
	$fupload_tmp="權限不足";
}
?>
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>網路硬碟</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/upload.php";
parent.document.getElementById('top_bt1').className="top_bt_on";
parent.document.getElementById('top_bt1').innerHTML="網頁上傳";
parent.document.getElementById('top_a2').href="html/uploader1.php";
parent.document.getElementById('top_bt2').className="top_bt";
parent.document.getElementById('top_bt2').innerHTML="拖曳上傳";
parent.document.getElementById('top_a3').href="html/download.php";
parent.document.getElementById('top_bt3').className="top_bt";
parent.document.getElementById('top_bt3').innerHTML="檔案下載";
parent.document.getElementById('top_a4').href="test/file_map.html";
parent.document.getElementById('top_bt4').className="top_bt";
parent.document.getElementById('top_bt4').innerHTML="個人空間";
window.onbeforeunload = function(){
parent.document.getElementById('top_a1').href="";
parent.document.getElementById('top_bt1').className="";
parent.document.getElementById('top_bt1').innerHTML="";
parent.document.getElementById('top_a2').href="";
parent.document.getElementById('top_bt2').className="";
parent.document.getElementById('top_bt2').innerHTML="";
parent.document.getElementById('top_a3').href="";
parent.document.getElementById('top_bt3').className="";
parent.document.getElementById('top_bt3').innerHTML="";
parent.document.getElementById('top_a4').href="";
parent.document.getElementById('top_bt4').className="";
parent.document.getElementById('top_bt4').innerHTML="";
};
</script>
  <head>
 <body><center>
  <table width="400" border="1" cellspacing="0">
    <tr> 
      <td width="132"><div align="center">File name</div></td>
      <td width="258"><? echo $fupload_name ?></td>
    </tr>
    <tr> 
      <td width="132"><div align="center">File size</div></td>
      <td width="258"><? echo $fupload_size ?></td>
    </tr>
    <tr> 
      <td width="132"><div align="center">File Type</div></td>
      <td width="258"><? echo $fupload_type ?></td>
    </tr>
    <tr> 
      <td width="132"><div align="center">Temp Name</div></td>
      <td width="258"><? echo $fupload_tmp ?></td>
    </tr>
    <tr> 
      <td width="132"><div align="center">Ans</div></td>
      <td width="258"><? echo $fupload_name ?></td>
    </tr>
  </table>
<a href="upload.php">Back</a>
 </center></body></html>
