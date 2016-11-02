<?php include("../../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>通訊錄</title>
  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/class/class3.php";
parent.document.getElementById('top_bt1').className="top_bt";
parent.document.getElementById('top_bt1').innerHTML="班級幹部";
parent.document.getElementById('top_a2').href="html/class/class4.php";
parent.document.getElementById('top_bt2').className="top_bt";
parent.document.getElementById('top_bt2').innerHTML="通訊錄";
parent.document.getElementById('top_a3').href="html/class/class5.php";
parent.document.getElementById('top_bt3').className="top_bt_on";
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
<table border="0" bordercolor="#99CC00" cellspacing="0" cellpadding="5" >
<tr bgcolor="202020" cellspacing="0" cellpadding="10"><td align="left">　檔名</td><td>　下載　</td></tr>
<? 
	if($P_Class_Thing){
if((@file_exists("data/list3.txt")))
{
	$fileopen = fopen("data/list3.txt","r");
	//$thi = fgets($fileopen,1000) ;
	$thin = fgets($fileopen,1000) ;
	if($thin==""){echo"暫無資料";}
	$thin=str_replace("　","</font></td><td align=\"center\">",$thin);
	$thin=str_replace("\n","",$thin);
	echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td align=\"right\">　".$thin."</td></tr>";
	for($a=0;$a<1000;$a++){
		$thin = fgets($fileopen,1000) ;
		if($thin==""){break;}
		$thin=str_replace("\n","",$thin);
		if($a%2==0){
			$thin=str_replace("　","</font></td><td><font color=\"#FFFF99\">",$thin);
			$thin="<font color=\"#FFFF99\">".$thin."</font>";
			}
		else{
			$thin=str_replace("　","</td><td align=\"center\">",$thin);
			}
		echo "<tr bgcolor=\"2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\"><td align=\"right\">　".$thin."</td></tr>";
	}
	fclose($fileopen);
}else{echo"@>(⊙ω⊙)<@";}
	}else{echo "權限不足！";}
?>
</table>
 </body>
</html>
