<?php include("../include.php"); ?>
<html>
	<head>
  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
	 	<title>電子相簿</title><title>talk</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

		<link rel="stylesheet" type="text/css" href="./BS.css">
	</head>
	<body><br>
<?php
if($P_See_Photo){
if((@file_exists("clist.txt"))){    
	$fileopen = fopen("clist.txt","r");
	fseek($fileopen,0);
	for($a=0;$a<$page*15;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){$t=1;break;}
		}		
	for($a=0;$a<15;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){$t=1;break;}
		$Talk=trim($Talk);
		echo  "<a href=\"lookpic.php?choice=" . ($a+($page*15)) . "\" target=\"look\">" . $Talk ."</a><br><br>";
		}
	$Talk = fgets($fileopen,100);
	if($Talk==""){$t=1;}
	echo"<p><b>";
	if($page>0){echo "<a href=\"pic.php?page=" . ($page-1) . "\">『上一頁』</a>";$orz++;}
	if($t!=1){echo "<a href=\"pic.php?page=".($page+1)."\">『下一頁』</a>";$orz++;}
	echo"</b>";
	fclose($fileopen);
	}
}
else{echo"權限不足！";}
?>
  <br>
<?php
if($P_Add_Book)
	echo "<a href='add_book.php' target='look'>+新增相簿</a>";
?>
  <!--這裡的圖為縮圖，如要原圖，請使用ftp下載。-->
	</body>
</html>




