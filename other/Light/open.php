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
<?php
if($err)echo "請登入！";
else{
	
echo "<table border='0' cellspacing='0' cellpadding='3'><tr bgcolor='#202020'><td>　檔名　</td><td>　開啟　</td><td>　刪除　</td></tr>";
	$dirs=glob("data/".$CookieUser."/*");
    foreach($dirs as $fil){
			echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td><a href=\"load.php?file=".urlencode(get_basename($fil))."\">　".get_basename($fil)."　</a></td>";
			echo "<td><a href=\"load.php?file=".urlencode(get_basename($fil))."\">　開啟　</a></td>";
			echo "<td><a href=\"del.php?file=".urlencode(get_basename($fil))."\">　刪除　</a></td>";
		echo"</tr>";
		}
    
}
?>
</form>  
</center>
<br>
<br>
<p></body>
</html>
