<?php include("../../include.php"); ?><html>
<head>  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<title>Reads</title>
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
		$fileopen = fopen("database/".$ro."-list.txt","r");
		for($a=0;$a<10000;$a++){
			$id = fgets($fileopen,10) ;
			if($id==""){break;}
			$idd="?";
			for($z=0;$z<100;$z++){
			if($id[$z+1]!=''){$idd[$z]=$id[$z];}
			else{break;}
			}
			if($idd!='.'){
			$fil = fopen("database/".$ro."-data-".$idd.".txt","r");
			$n = fgets($fil,100);
			$no = fgets($fil,100);
			$us="?";
			for($z=0;$z<100;$z++){
			if($n[$z+1]!=''){$us[$z]=$n[$z];}
			else{break;}
			}
			echo "<tr><td colspan=\"2\" align=\"right\"> ";
			if($CookieUser==$us&&$CookieUser!="guest"){echo "<a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除 </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a>";}
			else if($CookieUser[4]=='0'&&$CookieUser[5]=='0'){echo "<a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除</a> </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a>";}
			else if($CookieUser[0]=='a'){echo "<a href=\"del.php?name=".$ro."&id=".$idd."&room=".$room."\">刪除</a> </a><a href=\"edittalk.php?name=".$ro."&id=".$idd."&room=".$room."\">編輯</a>";}
			echo "</td></tr>";

			if($us[0]!='g'||$us[1]!='u'||$us[2]!='e'||$us[3]!='s'||$us[4]!='t'||$us[5]!=':'){
			$fi = fopen("../../user/".$us.".txt","r");
			$nn = fgets($fi,100);
			$nn = fgets($fi,100);
			echo "<tr><td  align=\"center\" width=\"120\">".$nn."<br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
}			else{			echo "<tr><td  align=\"center\" width=\"120\">".$us."<br><font style=\"FONT-SIZE: 7pt\" face=\"Arial\" color=\"#666666\">Time:".$no."</font></td>";
}
			echo "<td><iframe name=\"main\" src=\"fr?id=" .$id. "&room=" . $room . "\" width=\"600\" border=\"1\" frameborder=\"1\" height=\"120\">
                            您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
							</iframe></tr></td>";
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
