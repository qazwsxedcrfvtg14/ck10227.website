<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>檢視題目</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
 </head>
<body>
<?php
if((@file_exists("pdata/".$p."/ph.txt"))){
	$fileopen = fopen("pdata/".$p."/ph.txt","r");
	$ph=fgets($fileopen,1000);
	echo"<center><h1>".$ph."</h1></center><br><br>";
	fclose($fileopen);
	$fileopen = fopen("pdata/".$p."/p.txt","r");
	for($r=0;$r<10000;$r++){
	$pr=fgets($fileopen,100000);
	if($pr==""){break;}
	echo $pr."<br>";
	}
	fclose($fileopen);
	echo"<br><br><center><a href=code.php?p=".$p.">解題</a></center>";
	}
		else{echo"查無此題！";}
?>

</center>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
