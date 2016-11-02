<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>自由廣場</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
table{
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    font-size:16px;
    line-height:24px;
}
</style>
 </head>
<body>
<br>
<br>
<br>
<center>
<table border="0" cellspacing="0" cellpadding="3">
<tr bgcolor="#202020">
<?php

if($P_Del_Talks){echo "<td>&nbsp;</td>";}
if($P_Save_Talks){echo "<td>&nbsp;</td>";}
echo "<td width=\"320\">&nbsp;標題</td><td >發表者</td><td>回覆數&nbsp;</td>";

?></tr>
<?php
if((@file_exists("./data/list.txt"))){
	$fileopen = fopen("./data/list.txt","r");
	for($a=0;$a<100;$a++){
		$room = fgets($fileopen,1000) ;
		if($room==""){break;}
		if($room!=".\n"){
			echo "<tr bgcolor=\"#2C2C2C\" onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\">";
			$ro=trim($room);
			if(!(@file_exists("data/power/power/".$ro.".txt"))){$This_power=100;}
			else{
				$Fil=file("data/power/power/".$ro.".txt");
				$This_power=(int)($Fil[0]);
				}
			if($P_Talk_Level>=$This_power){
				if($P_Del_Talks){echo "<td><a href=\"del.php?name=".urlencode($ro)."&room=".$a."\">&nbsp;刪除</a></td>";}
				if($P_Save_Talks){echo "<td><a href=\"data/save.php?name=".urlencode($ro)."&room=".$a."\">&nbsp;救援</a></td>";}
				echo "<td width=\"320\"><a href=\"data/read.php?room=".$a."\"><font color=\"#FFFF99\">&nbsp;" . $ro . "</font></a></td>";
				$na=$ro;
				$fi = fopen("./data/".$na."/data/0.txt","r");
				$nn = fgets($fi,100);
				fclose($fi);	
				$nan="?";
				$nan=trim($nn);
				$e=0;
				$fi = fopen("../user/".$nan.".txt","r");
				$nn = fgets($fi,100);
				$nn = fgets($fi,100);
				$nn=trim($nn);
				$fi = fopen("data/".$na."/list.txt","r");
				for($e=0;;$e++){
					$gts=fgets($fi,1000);
					if($gts=="")break;	
					if($gts==".\n")$e--;
					}
				fclose($fi);	
				echo "<td >".$nn."&nbsp;&nbsp;&nbsp;&nbsp;</td><td align=\"right\">". ($e-1) ."&nbsp;</td>";
				echo "</tr>";
				}
			}		
		}
	fclose($fileopen);
	}

?>
</table>
<?php

if($P_New_Talks)
	echo"<center><br><a href=\"newroom.php\"><font color=\"#99FFFF\">發表新話題</font></a></center>";
?>
</center>
 </body>
</html>
