<?php include("include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>其他連結</title>
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
<h1><font color="#FFFF99"><?php
$rnd=rand(0,13);
if($rnd==0)
echo"好連結，不連嗎？";
if($rnd==1)
echo"阿不就好連結？";
if($rnd==2)
echo"完全沒有連結！";
if($rnd==3)
echo"有病就該連結！";
if($rnd==4)
echo"你不要那麼連結好不好！";
if($rnd==5)
echo"有這款情形請按免費連結！";
if($rnd==6)
echo"換煞車皮一定要先點連結！";
if($rnd==7)
echo"你在連結什麼拉！";
if($rnd==8)
echo"你製杖嗎？不，我連結！";
if($rnd==9)
echo"不要起連結拉！";
if($rnd==10)
echo"你當我店家都連結就對了啦！";
if($rnd==11)
echo"讓我連結！";
if($rnd==12)
echo"連結不要！連結！";
if($rnd==13)
echo"說好不提連結的";
?></font></h1><br>
<table cellspacing="0" cellpadding="5">
<?php
if((@file_exists("linkslist.txt")))
{
	$fileopen = fopen("linkslist.txt","r");
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
