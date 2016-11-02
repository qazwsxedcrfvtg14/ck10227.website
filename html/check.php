<?php include("../include.php"); ?>
<html>
 	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
		<link rel="stylesheet" type="text/css" href="./BS.css">
		<title><?php echo $choice;?></title>
 	</head>
	<body>
		<center> 
<?php
  	$fileopen = fopen("../data/test/lis.txt","r");
	for($a=0;$a<=$choce;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){break;}
		}
	$choice=trim($Talk);
	if (!(@file_exists("../data/test/".$choice.".txt"))){
		echo "檔案不存在！".$choice.".txt<br>";$o=1;
		}
	else if($CookieUser==""){
		echo "你需要登入才能查看!<br>";$o=1;
		}
	if($CookieUser!="admin"){echo "權限不足!<br>";$o=1;}
	if($o!=1){
		if($CookieUser!=""){echo "<form name=\"form1\" method=\"post\" action=\"sign.php?form=".$choice."\">簽名：<input type=\"text\" name=\"name\" id=\"name\"><INPUT TYPE=SUBMIT VALUE=\"確定!\"><a href=\"signc.php?form=".$choice."\">簽名人數</a></form>";
		echo "<table border=\"1\"><center>";
		$ss[0]=$CookieUser[4];$ss[1]=$CookieUser[5];
		if($CookieUser=="admin"){$ss[0]='0';$ss[1]='0';}
		}
	$fileopen = fopen("../data/test/".$choice.".txt","r");
	fseek($fileopen,0);
	for($a=0;$a<2;$a++){
		$Talk = fgets($fileopen,1000) ;
		if($Talk==""){break;}
		echo "<tr";
		$c=0;if($Talk[0]==$ss[0]&&$Talk[1]==$ss[1]){echo " bgcolor=\"#00CC99\">";}
		else if($ss[0]=='0'&&$ss[1]=='0'){echo " bgcolor=\"#33CCFF\">";}
		else{echo" bgcolor=\"#33CCFF\">";}
		for($b=0;$b<1000;$b++){
			if($Talk[$b] == '	'){	
				echo "<td width=70><p align=center>";
				for($d=$c;$d<$b;$d++){	
					echo $Talk[$d] ;
					}
				echo "</p></td>";
				$c=$b;
				}
			}
		echo "</tr>";
		}
	for($a=0;$a<32;$a++){
	$Talk = fgets($fileopen,1000) ;
	if($Talk==""){break;}		
	$e=0;
	$c=0;$i=0;
	echo "<tr";
	$c=0;
	if($Talk[0]==$ss[0]&&$Talk[1]==$ss[1]){echo " bgcolor=\"#00CC99\">";$i=1;}
	else if($ss[0]=='0'&&$ss[1]=='0'){echo " bgcolor=\"#33CCFF\">";$i=1;}
	else{echo" bgcolor=\"#33CCFF\">";}
	for($b=0;$b<1000;$b++){
		if($Talk[$b] == '	'){	
			$e++;
			if($e>2||$i==1){
				echo "					<td width=70><p align=center>";
				for($d=$c;$d<$b;$d++){	
					echo $Talk[$d] ;
					}
				echo "</p></td>";
				}
			else{
				echo "					<td width=70><p align=center> </p></td>";}
				$c=$b;
				}
			}
		echo "</tr>";
		}
	$Talk = fgets($fileopen,1000) ;
	echo "<tr bgcolor=\"#33CCFF\">";
	$c=0;
	for($b=0;$b<1000;$b++){
		if($Talk[$b] == '	'){	
			echo "					<td width=70><p align=center>";
			for($d=$c;$d<$b;$d++){	
				echo $Talk[$d] ;
				}
			echo "</p></td>";
			$c=$b;
			}
		}
	echo "</tr></center>";
	fclose($fileopen);
	}
?>
	</table>
	<a href="index6">回上一頁</a>
  </center>
  </body>
</html>
