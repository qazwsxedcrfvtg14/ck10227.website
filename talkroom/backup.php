<?php include("../include.php"); ?><?php

if($P_Backup_Talks)
	if((@file_exists("data/list.txt"))){
		$fileopen = fopen("data/list.txt","r");
		$fb = fopen("backup.dat","w");
		fwrite($fb,"##LIST##\n");
		for($a=0;$a<100;$a++){
			$room = fgets($fileopen,1000) ;
			if($room==""){break;}
			if($room!=".\n"){
			fwrite($fb,$room);
				$na=trim($room);
				fwrite($fb,"##List##\n");
				$fi = fopen("data/".$na."/list.txt","r");
				for($t=0;$t<100;$t++){
					$nn = fgets($fi,100);
					if($nn==""){break;}
					if($nn!=".\n"){
					$fil = fopen("data/".$na."/data/".$t.".txt","r");
					$nann = fread($fil,100000);
						fwrite($fb,"\n##Lstar##\n".$nann."\n##Lend##\n");
						fclose($fil);	
						}
					}
				fclose($fi);	
				fwrite($fb,"##Listend##\n");
				}		
			}
		fwrite($fb,"##LISTend##\n");
		fclose($fileopen);
		fclose($fb);
		}
else
	$e=1;
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>打包回家</title><script type='text/javascript'>
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
