<?php include("include.php"); ?><?php
if($P_Add_News){
if($talk!=""){
    $file = "../data/news/news.txt";
	$news=file_get_contents($file);
	file_put_contents($file,$talk."\n".$news,LOCK_EX);
    }
  header("refresh:0;url=index9.php");
}
  ?>
<html>
  <head>

<link rel="stylesheet" type="text/css" href="./BS.css">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
   <title>送出中</title></head>
  
<body><center>
<?php
if(!$P_Add_News)echo"權限不足";
 ?>
  </center></body></html>
