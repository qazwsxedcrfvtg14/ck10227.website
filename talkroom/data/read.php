<?php include("../../include.php"); ?><html>
<head>  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<link rel="stylesheet" type="text/css" href="./BS.css">
<?php
if((@file_exists("list.txt"))){
	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$room;$a++){
		$roo=fgets($fileopen,1000) ;
		}
	for($a=0;$a<=10000;$a++){
		if($roo[$a]==''){$roo[$a-1]='';break;}
		}
	$ro=trim($roo);
	echo"
<title><a href=\"talkroom/data/read.php?room=".$room."#the_end\" target=\"main\">標題：「".$ro."」</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
</head>
<body><a name=\"the_top\"></a><a href=\"../talkroom.php\">上一頁</a>
<center><table width=\"90%\" border=\"0\" bgcolor=\"#2C2C2C\"  bordercolor=\"#2C2C2C\" cellspacing=\"0\" cellpadding=\"3\">
";
	if(!(@file_exists("power/power/".$ro.".txt"))){$This_power=100;}
	else{
		$Fil=file("power/power/".$ro.".txt");
		$This_power=(int)($Fil[0]);
		}
	if($P_Talk_Level<$This_power){
		echo"權限不足！";return;
		}
	if(!(@file_exists($ro."/list.txt"))){echo "此對話串消失了！!";}
	else{
		$fileopen = fopen($ro."/list.txt","r");
		$first=0;
		for($a=0;$a<10000;$a++){
			$id = fgets($fileopen,10) ;
			if($id==""){break;}
			$idd="?";
			$idd=trim($id);
			if($idd!='.'){
			$fil = fopen($ro."/data/".$idd.".txt","r");
			$n = fgets($fil,100);
			$no = fgets($fil,100);
			$us=trim($n);
			$no=trim($no);
			echo " ";
			if($CookieUser==$us&&$CookieUser!="guest"){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">刪除 </a><a href=\"edittalk.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			else if($P_Power_Del_Talk&&$P_Power_Edit_Talk){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">刪除 </a><a href=\"edittalk.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			else if($P_Power_Del_Talk){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"del.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">刪除</a></td></tr>";}
			else if($P_Power_Edit_Talk){echo "<tr><td colspan=\"2\" align=\"right\"><a href=\"edittalk.php?name=".urlencode($ro)."&idd2=".$idd."&room=".$room."\">編輯</a></td></tr>";}
			echo "";
			if($us[0]!='g'||$us[1]!='u'||$us[2]!='e'||$us[3]!='s'||$us[4]!='t'||$us[5]!=':'){
				$fi = fopen("../../user/".$us.".txt","r");
				$nn = fgets($fi,100);
				$nn = fgets($fi,100);
				$nn=trim($nn);
				$mail = fgets($fi,1000) ;	
				$web = fgets($fi,1000) ;	
				$phone = fgets($fi,1000) ;	
				$tell = fgets($fi,1000) ;		
				$pic = fgets($fi,1000) ;
				if($pic==""||$pic=="\n"||$pic==" "){$pic=$code."z.jpg";}
				if(!(@file_exists("../../pic/web/member/".$pic))){
					$nsp=trim($pic);
						if(!(@file_exists("../../pic/web/member/".$nsp))){$pic="adminz.jpg";}
						}
					echo "<tr><td align=\"center\" width=\"120\"><a href=\"../../html/file.php?code=".$us."\" target=\"_blank\"><img src=\"smallpic.php?src=../../pic/web/member/".$pic."&w=100&zc=1\" width=\"100\" border=\"0\"><br>".$nn."</a><br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
					}
				else{
					echo "<tr><td align=\"center\" width=\"120\"><img src=\"smallpic.php?src=../../pic/web/member/adminz.jpg&w=100&zc=1\" width=\"100\" border=\"0\"><br>".$us."<br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
					}
			$id=trim($id);
//id=" .$id. "&room=" . $room . 
				echo "<td height=\"120\" align=\"left\" ><table cellspacing=\"0\" cellpadding=\"3\" bgcolor=\"#2C2C2C\" border=\"0\" bordercolor=\"#3399ff\" border=\"0\" height=\"120\" width=\"100%\"><tr><td valign=\"top\">";
			$oprtom=intval($room);
				if(!(@file_exists("list.txt"))){
					echo "此段對話消失了！";
					}
				else{$first++;
//id=" .$id. "&room=" . $room . 
					echo "<iframe style=\"overflow-x:auto\" src=\"fr.php?idd2=" .$id. "&room=" . $room . "\" width=\"100%\" border=\"0\" frameborder=\"0\" id=\"frame".$id."\" name=\"framex".$id."\">載入中</iframe>";//scrolling=\\\"no\\\"
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
		}*/
					}
				echo"</td></tr></table></td></tr></table>";
				if($first==1)echo "<a href=\"newtalk.php?name=".$ro."&room=".$room."\"><font color=\"99ffff\">回覆</font></a><br>";
				echo"<br><table width=\"90%\" bordercolor=\"#2C2C2C\" cellspacing=\"0\" cellpadding=\"3\" border=\"0\"  bgcolor=\"#2C2C2C\">";
				fclose($fil);
				}
			}
		fclose($fileopen);
		}
	echo"</table>";
	}
else{echo "此段對話消失了！";}
?>
<a href="#the_top">Go to top</a>
<a name="the_end"></a>
</center>
</body>
</html>
