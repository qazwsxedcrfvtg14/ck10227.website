<?php include("../../include.php"); ?><?php
if($CookieUser==""){
$err=1;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>存檔</title>
<script type='text/javascript'>
//parent.hid();
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body>
<center>
  <br><br>
<form Action="save.php" Method="POST">

<?php
if($err)echo "請登入！";
else{
echo "檔名：<input type='text' name='file' id='file'><INPUT TYPE=SUBMIT VALUE='確定'>";
echo "<div style='visibility: hidden;'><textarea id='textarea1' name='textarea1' type='hidden'>$textarea1</textarea></div>";
}
?>
</form>  
</center>
<br>
<br>
<p></body>
</html>
