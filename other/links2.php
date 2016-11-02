<?php include("include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>工具箱</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
td{
line-height:24px;
}
</style>
 </head>
<body>
  <center><br>
<h1><font color="#FFFF99">工具箱</font></h1>
<br>
<table cellspacing="0" cellpadding="5">
<?php
if((@file_exists("linkslist.txt")))
{
	$fileopen = fopen("linkslist2.txt","r");
	$id = fgets($fileopen,1000) ;
	$thi = fgets($fileopen,1000) ;
	$thin = fgets($fileopen,1000) ;
	$id=trim($id);
	$thi=trim($thi);
	$thin=trim($thin);
	if($thi==""){echo"暫無資料";}
	else{
		if($id[0]=='1')$blank=" target=\"_blank\" ";
		else $blank="";
		echo "<tr><td onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><a  href=\"".$thi."\">　".$thin."　</a></td></tr>";
		for($a=0;$a<1000;$a++){
		$id = fgets($fileopen,1000) ;
		$thi = fgets($fileopen,1000) ;
		$thin = fgets($fileopen,1000) ;
		$id=trim($id);
		$thi=trim($thi);
		$thin=trim($thin);
		if($id[0]=='1')$blank=" target=\"_blank\" ";
		else $blank="";
		if($thi==""){break;}
		echo "<tr onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td><a href=\"".$thi."\"".$blank.">　".$thin."　</a><br></td></tr>";
		}
	}
	fclose($fileopen);
}else{echo"暫無資料";}
?>
 </center>
</body>
</html>
