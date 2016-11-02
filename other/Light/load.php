<?php include("../../include.php"); ?><?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($CookieUser==""){
	$err=1;
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>讀取</title>
<script type='text/javascript'>
//parent.hid();
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body>
<center>
  <br>
<?php
if($err)echo "請登入！";
else{	
	$file=get_basename($file);
	echo "<div style='visibility: hidden;'><textarea id='textarea1' name='textarea1' type='hidden'>".file_get_contents("data/".$CookieUser."/$file")."</textarea></div>";
}
?>
<script type='text/javascript'>
//parent.document.getElementById('textarea1').value=document.getElementById('textarea1').innerHTML;
parent.location.replace("light.php?link=<?php echo$file; ?>");
//parent.src="light.php?link=<?php echo$file; ?>";
//parent.hid();
</script>
</center>
<br>
<br>
<p></body>
</html>
