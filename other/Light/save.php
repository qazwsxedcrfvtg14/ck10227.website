<?php include("../../include.php"); ?><?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($CookieUser!=""){

if ((!(@file_exists("data/".$CookieUser)))){
	mkdir("data/".$CookieUser);
}
	$file=get_basename($file);
  	file_put_contents("data/$CookieUser/$file",$textarea1,LOCK_EX);
	//header("refresh:0;url=light.php");
}
else{
$err=1;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>存檔</title>
<script type='text/javascript'>
parent.hid();
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body>
<center>
  <br><br>
<?php
if($err)echo "請登入！";
?>
<br>
<br>
<br>
<a href="light.php">返回</a>
</center>
<br>
<br>
<p></body>
</html>
