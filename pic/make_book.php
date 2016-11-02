<?php include("../include.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>開新相簿</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><center>
<br>
<br>
<br>
<?php
function get_basename($filename){
	return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($P_Add_Book){
	$ts=get_basename($ts);
	if(!(@file_exists($ts))){  
		$oldmask=umask(0);
		mkdir($ts);
		umask($oldmask);
		file_put_contents("list.txt",file_get_contents("list.txt").$ts."\n",LOCK_EX);
		file_put_contents("clist.txt",file_get_contents("clist.txt").$ts."\n",LOCK_EX);
		echo "完成！";
		}
	else{
		echo "已存在此相簿！";
		}
	}
else
echo "權限不足！";

?>
<script type='text/javascript'>
parent.document.getElementsByName("pic")[0].contentDocument.location.reload();
parent.document.getElementById('picf').contentDocument.location.reload();
//location.reload();
//parent.hide();
</script>
</center>
</body>
</html>



