<?php include("../../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>班級事務</title>
  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/class/class3.php";
parent.document.getElementById('top_bt1').className="top_bt_on";
parent.document.getElementById('top_bt1').innerHTML="班級幹部";
parent.document.getElementById('top_a2').href="html/class/class4.php";
parent.document.getElementById('top_bt2').className="top_bt";
parent.document.getElementById('top_bt2').innerHTML="通訊錄";
parent.document.getElementById('top_a3').href="html/class/class5.php";
parent.document.getElementById('top_bt3').className="top_bt";
parent.document.getElementById('top_bt3').innerHTML="其他";
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
};
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body><center>
<br>
<table border="0">
<tr><td>
<table border="0" bordercolor="#99CC00" cellspacing="0" cellpadding="5" >
<tr bgcolor="202020" cellspacing="0" cellpadding="10"><td>　新職位</td><td>新人選　</td></tr>
<? 
	if($P_Class_Thing){
if((@file_exists("data/list1.txt")))
{
	$fileopen = fopen("data/list1.txt","r");
	//$thi = fgets($fileopen,1000) ;
	$thin = fgets($fileopen,1000) ;
	if($thin==""){echo"暫無資料";}
	$thin=str_replace("　","</font></td><td>",$thin);
	$thin=str_replace("\n","",$thin);
	echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td>　<font color=\"FFFF99\">".$thin."　</td></tr>";
	for($a=0;$a<29;$a++){
		$thin = fgets($fileopen,1000) ;
		if($thin==""){break;}

	$thin=str_replace("\n","",$thin);
		$thin=str_replace("　","</font></td><td>",$thin);
		echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td>　<font color=\"FFFF99\">".$thin."　</td></tr>";
	}
	echo "</table></td><td width=\"20\"> </td><td><table border=\"0\" bordercolor=\"#99CC00\" cellspacing=\"0\" cellpadding=\"5\" ><tr bgcolor=\"202020\" cellspacing=\"0\" cellpadding=\"10\"><td>　職位</td><td>人選　</td></tr>";
	for($a=0;$a<100;$a++){
		$thin = fgets($fileopen,1000) ;
		if($thin==""){break;}
	$thin=str_replace("\n","",$thin);
		$thin=str_replace("　","</font></td><td>",$thin);
		echo "<tr onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\" bgcolor=\"2C2C2C\"><td>　<font color=\"#FFFF99\">".$thin."　</td></tr>";
	}
	fclose($fileopen);
}else{echo"暫無資料";}
	}else{echo "權限不足！";}
?>
</table>
</td></tr>
</table>
    
 </body>
</html>
