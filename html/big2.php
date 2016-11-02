<?php include("../include.php"); ?><?php 
if($CookieUser!=""){
	$fupload_name=$fupload['name'];
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
			copy($fupload_tmp,"../pic/web/member/".$fupload_name);
			$nam=$CookieUser;
			if($P_Power_Change_Pic){
				$nam=$name;
				}
			$fileopen = fopen("../user/".$nam.".txt","r");
			$pass = fgets($fileopen,1000) ;
			$name = fgets($fileopen,1000) ;
			$mail = fgets($fileopen,1000) ;
			$web = fgets($fileopen,1000) ;
			$phone = fgets($fileopen,1000) ;
			$tell = fgets($fileopen,1000) ;

			$pass = trim($pass);
			$name = trim($name);
			$mail = trim($mail);
			$web = trim($web);
			$phone = trim($phone);
			$tell = trim($tell);

			fclose($fileopen);
			$fileopen = fopen("../user/".$nam.".txt","w");
			fwrite($fileopen, $pass."\n");
			fwrite($fileopen, $name."\n");
			fwrite($fileopen, $mail."\n");
			fwrite($fileopen, $web."\n");
			fwrite($fileopen, $phone."\n");
			fwrite($fileopen, $tell."\n");
			fwrite($fileopen, $fupload_name."\n");
			fclose($fileopen);echo"完成";
			}
		}
	else{
		echo"已有此檔案！";
		}
	}
else{
	echo"請登入";
	}
?>
<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">

<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>上傳大頭貼中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script></head>
 <body><FONT color="Blue"><center>
 </center></body></html>
