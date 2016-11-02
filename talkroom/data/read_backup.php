<?php include("../../include.php"); ?><html>
<head>  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<title>Read</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body><a href="../talkroom.php">上一頁</a>
<center><table border="1">
<?php	
if((@file_exists("list.txt")))
{
	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$room;$a++){
		$roo=fgets($fileopen,1000) ;
		}
	for($a=0;$a<=10000;$a++){
		if($roo[$a]==''){$roo[$a-1]='';break;}
		}$ro="?";
	for($b=0;$b<=($a-2);$b++){
		$ro[$b]=$roo[$b];
		}
	echo "<tr><td><a href=\"newtalk.php?name=".$ro."&room=".$room."\">回覆</a></td></tr>";
	if(!(@file_exists($ro."/list.txt"))){echo "此段對話消失了！!";}
	else{
		$fileopen = fopen($ro."/list.txt","r");
		for($a=0;$a<10000;$a++){
			$id = fgets($fileopen,10) ;
			if($id==""){break;}
			$idd="?";
			for($z=0;$z<100;$z++){
			if($id[$z+1]!=''){$idd[$z]=$id[$z];}
			else{break;}
			}
			if($idd!='.'){
			$fil = fopen($ro."/data/".$idd.".txt","r");
			$n = fgets($fil,100);
			$no = fgets($fil,100);
			$us="?";
			for($z=0;$z<100;$z++){
			if($n[$z+1]!=''){$us[$z]=$n[$z];}
			else{break;}
			}
			echo " ";
			if($CookieUser==$us&&$CookieUser!="guest"){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除 </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			else if($CookieUser[4]=='0'&&$CookieUser[5]=='0'){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除</a> </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			else if($CookieUser[0]=='a'&&$CookieUser[1]=='d'&&$CookieUser[2]=='m'&&$CookieUser[3]=='i'&&$CookieUser[4]=='n'&&$CookieUser[5]==0){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除</a> </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			echo "";

			if($us[0]!='g'||$us[1]!='u'||$us[2]!='e'||$us[3]!='s'||$us[4]!='t'||$us[5]!=':'){
			$fi = fopen("../../user/".$us.".txt","r");
			$nn = fgets($fi,100);
			$nn = fgets($fi,100);
			$mail = fgets($fi,1000) ;	
			$web = fgets($fi,1000) ;	
			$phone = fgets($fi,1000) ;	
			$tell = fgets($fi,1000) ;		
			$pic = fgets($fi,1000) ;
			if($pic==""||$pic=="\n"||$pic==" "){$pic=$code."z.jpg";}
			if(!(@file_exists("../../pic/web/member/".$pic))){
				$nsp="?";
				for($sd=0;$sd<1000;$sd++){
					if($pic[$sd+1]!=''){$nsp[$sd]=$pic[$sd];}
					else{break;}
					}
			if(!(@file_exists("../../pic/web/member/".$nsp))){$pic="adminz.jpg";}
				}
			
			echo "<tr>
			<script language=\"javascript1.2\">document.write(\"<td  align=\\\"center\\\" width=\\\"120\\\">\");</script> 
			<a href=\"../../html/file.php?code=".$us."\" target=\"_blank\">
			<img src=\"../../pic/web/member/".$pic."\" height=\"50\" border=\"0\"><br>
			".$nn."</a><br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
}			else{			echo "<tr>
<script language=\"javascript1.2\">document.write(\"<td  align=\\\"center\\\" width=\\\"120\\\">\");</script> 
".$us."<br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
}

$orp="?";
for($rty=0;$rty<100;$rty++){
	if($id[$rty+1]!=""){$orp[$rty]=$id[$rty];}
	else{break;}
	}//id=" .$orp. "&room=" . $room . 
		
			echo "
			<script language=\"javascript1.2\">
			document.write(\"<td width=\\\"\" +(screen.width-1024+600)+\"\\\" height=\\\"120\\\" align=\\\"left\\\" >\");
			document.write(\"<table bordercolor=\\\"#3399ff\\\" border=\\\"1\\\" height=\\\"120\\\" width=\\\"\" +(screen.width-1024+600)+\"\\\" >\");
			</script> 
			<tr><td valign=\\\"top\\\">
			";
	$id=$orp;
	$oprtom=intval($room);
	if(!(@file_exists("list.txt"))) // 檢查檔案是否存在
	{echo "此段對話消失了！";}
	else{

	/*

	$fop = fopen("list.txt","r");
	for($oiu=0;$oiu<=$oprtom;$oiu++){
		$oprto=fgets($fop,1000) ;
		}
	for($oiu=0;$oiu<=10000;$oiu++){
		if($oprto[$oiu]==''){$oprto[$oiu-1]='';break;}
		}$oprt="?";
	for($oiud=0;$oiud<=($oiu-2);$oiud++){
		$oprt[$oiud]=$oprto[$oiud];
		}
	fclose($fop);
	if(!(@file_exists($oprt."/data/".$id.".txt"))) // 檢查檔案是否存在
	{echo $oprt."/data/".$id.".txt";}
	else{
		for($oiu=0;$oiu<=10000;$oiu++){
			if($id[$oiu]==''){break;}
			}$i="?";
		for($oiud=0;$oiud<=($oiu-1);$oiud++){
			$i[$oiud]=$id[$oiud];
			}
		$fop = fopen($oprt."/data/".$i.".txt","r");
		$tkkk = fgets($fop,1000) ;
		$tkkk = fgets($fop,1000) ;
		for($oiu=0;$oiu<10000;$oiu++){
			$tkkk = fgets($fop,1000) ;
			if($tkkk==""){break;}
			for($z=0;$z<1000000;$z++){
				if($tkkk[$z]!='\\'||$tkkk[$z+1]!='"'){echo $tkkk[$z];}
				if($tkkk[$z]==''){break;}
				}
			}	
		fclose($fop);
		}
	}
	*/	
		
			echo"</td></tr></table></td></tr></table><br><table border=\"1\">";
			fclose($fil);
			}	}
		fclose($fileopen);
	}
}
else{echo "此段對話消失了！";}

?>
</table></sscenter>
</body>
</html>
