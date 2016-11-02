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
	if(!is_array($fupload['name'])){
		$fupload_name=$fupload['name'];
		$fupload_name=get_basename($fupload_name);
		if(!(@file_exists($file_src."/".$fupload_name2))){
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
				copy($fupload_tmp,$file_src."/".$fupload_name);
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
		$fil_s=count($fupload['name']);
		for($i=0;$i<$fil_s;$i++){
			$fupload_name2=$fupload['name'][$i];
			$fupload_name2=get_basename($fupload_name2);
			if(!(@file_exists($file_src."/".$fupload_name2))){
				$fupload_name2=$fupload['name'][$i];
				$fupload_type=$fupload['type'][$i];
				$fupload_size.=$fupload['size'][$i].",";
				$fupload_error=$fupload['error'][$i];
				$fupload_tmp=$fupload['tmp_name'][$i];
				if($fupload_error>0){
					$fupload_name.="None,";
					$fupload_size="None";
					$fupload_type="None";
					$fupload_tmp="None";
					echo $fupload_error;
					}
				else{
					copy($fupload_tmp,$file_src."/".$fupload_name2);
					$fupload_name.="$fupload_name2,";
					}
				}
			else{
				$fupload_name.="None,";
				$fupload_size2="None";
				$fupload_type="None";
				$fupload_tmp="None";
				echo"There is a same file in the server!!!";
				}
			}
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
  <title>網路硬碟</title>
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
<?php
/*
    <tr> 
      <td width="132"><div align="center">File Type</div></td>
      <td width="258"><? echo $fupload_type ?></td>
    </tr>
    <tr> 
      <td width="132"><div align="center">Temp Name</div></td>
      <td width="258"><? echo $fupload_tmp ?></td>
    </tr>
*/
?>
    <tr> 
      <td width="132"><div align="center">Ans</div></td>
      <td width="258"><? echo $fupload_name ?></td>
    </tr>
  </table>
<a href="upload.php">Back</a>
 </center></body></html>
