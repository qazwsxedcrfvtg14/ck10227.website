<?php include("../include.php"); ?><?php
if(!(@file_exists("data/".$u))){
$err=1;	
}
else{
	header("refresh:0;url=".file_get_contents("data/".$u));
//echo file_get_contents("data/".$u);
}
?>
<html>
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="Content-Language" content="zh-tw">
   <title>Loading..</title>

<!--<link rel="stylesheet" type="text/css" href="../BS.css">-->
  </head>
  <body>
  <center><?php
	if($err==1){echo "查無網址！";}
?>
    </center>
  </body>
</html>
