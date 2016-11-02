<?php include("../include.php"); ?>
<html>
	<head>
	  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
		<link rel="stylesheet" type="text/css" href="./BS.css">
		<title>網路硬碟</title>
<script type='text/javascript'>

parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/upload.php";
parent.document.getElementById('top_bt1').className="top_bt";
parent.document.getElementById('top_bt1').innerHTML="網頁上傳";
parent.document.getElementById('top_a2').href="html/uploader1.php";
parent.document.getElementById('top_bt2').className="top_bt";
parent.document.getElementById('top_bt2').innerHTML="拖曳上傳";
parent.document.getElementById('top_a3').href="html/download.php";
parent.document.getElementById('top_bt3').className="top_bt_on";
parent.document.getElementById('top_bt3').innerHTML="檔案下載";
parent.document.getElementById('top_a4').href="test/file_map.html";
parent.document.getElementById('top_bt4').className="top_bt";
parent.document.getElementById('top_bt4').innerHTML="個人空間";
window.onbeforeunload = function(){
parent.document.getElementById('top_a1').href="";
parent.document.getElementById('top_bt1').className="";
parent.document.getElementById('top_bt1').innerHTML="";
parent.document.getElementById('top_a2').href="";
parent.document.getElementById('top_bt2').className="";
parent.document.getElementById('top_bt2').innerHTML="";
parent.document.getElementById('top_a3').href="";
parent.document.getElementById('top_bt3').className="";
parent.document.getElementById('top_bt3').innerHTML="";
parent.document.getElementById('top_a4').href="";
parent.document.getElementById('top_bt4').className="";
parent.document.getElementById('top_bt4').innerHTML="";
};
</script>
	</head>
 	<body>
		<center>在想要的檔案旁按下「下載」，即可下載回自己的電腦。<BR>
  			<table border="0" cellspacing="0" cellpadding="4">
				<tr bgcolor="#202020" ><td>檔名</td><td>上傳時間</td><td>上傳者</td><td>備註</td><td>&nbsp;</td></tr>
<?php
	if($P_DownLoad){
	$fileopen = fopen("../data/list.txt","r");
	for($a=0;$a<1000;$a++){
	$s=fgets($fileopen,1000);
	$ss=fgets($fileopen,1000);
	$sss=fgets($fileopen,1000);
	$ssss=fgets($fileopen,1000);
	$s=trim($s);
	$ss=trim($ss);
	$sss=trim($sss);
	$ssss=trim($ssss);
	if($ss==""){break;}
	echo "<tr bgcolor=\"#2C2C2C\"><td>".$ss."</td><td>".$s."</td><td>".$ssss."</td><td>".$sss."</td><td><a href=\"down.php?file_name=".$ss."\">下載</a></td></tr>";
	}
	fclose($fileopen);
	}
	else{
	echo"<tr><td>權限不足</td></tr>";
	}
?>
	  		</table>
		</center>
	</body>
</html>
