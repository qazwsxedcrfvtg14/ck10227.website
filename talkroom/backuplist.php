<?php include("../include.php"); ?><?php
if($P_Backup_Talks){
	$fr=fopen("data/list.txt","r");
	$fw=fopen("backlist.dat","w+");
	$thing=fread($fr,1000000);
	fwrite($fw,$thing);
	fclose($fw);		
	fclose($fr);
	}
else
	$e=1;
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>還原list</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body>
<?php if($e)echo"權限不足！<br>"; ?>
<a href="back.php">上一頁</a>
<table border="1"></table>

    
 </body>
</html>
