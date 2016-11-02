<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
		<title><?php echo $choice;?></title>
		<link rel="stylesheet" type="text/css" href="./BS.css">
 	</head>
	<body>
 		<center>     
<?php$o=0;
  	$fileopen = fopen("../data/test/list.txt","r");
	for($a=0;$a<=$chocie;$a++){
		$Talk = fgets($fileopen,100) ;
		if($Talk==""){break;}
		}
	$choice="?";
	for($z=0;$z<100000;$z++){
		if($Talk[$z+2]!=''){$choice[$z]=$Talk[$z];}
		else{break;}
		}
	if (!(@file_exists("../data/test/".$choice.".txt"))) // 檢查檔案是否存在
	{echo "檔案不存在！".$choice.".txt<br>";$o=1;
	}
	else if($CookieUser==""){echo "你需要登入才能查看!<br>";$o=1;}
	if($CookieUser[0]!='9'
		|| $CookieUser[1]!='9'
		|| $CookieUser[2]!='0'
		|| $CookieUser[3]!='9'){
		if($CookieUser!="admin"){echo "你必須是本班的人!<br>";$o=1;}
		}
if($o!=1)
	{  if($CookieUser!=""){
		echo "
  <form name=\"form1\" method=\"post\" action=\"sign.php?form=".$choice."\">簽名：
      <input type=\"text\" name=\"name\" id=\"name\">
	<INPUT TYPE=SUBMIT VALUE=\"確定!\"><a href=\"signc.php?form=".$choice."\">簽名人數</a>
  <script language=\"Javascript1.2\">
<!--
var message = \"列印此頁\";

function printpage() {
window.print(); 
}

document.write(\"<center><form><input type=button \"
+\"value=\\\"\"+message+\"\\\" onClick=\\\"printpage()\\\"></form></center>\");
//-->
</script>
  </form>";
		echo "<table border=\"0\"><center>";
		$ss[0]=$CookieUser[4];$ss[1]=$CookieUser[5];
		if($CookieUser=="admin"){$ss[0]='0';$ss[1]='0';}}
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
		echo "					<td width=\"70\"><p align=center>";
		for($d=$c;$d<$b;$d++){	
			echo $Talk[$d] ;
			}
		echo "</p></td>";
		$c=$b;
		}
	}
echo "</tr>";
}

		for($a=0;$a<32;$a++){		//for($a=0;$a<22;$a++){
		$Talk = fgets($fileopen,1000) ;
if($Talk==""){break;}		
$e=0;
$c=0;$i=0;
echo "<tr";
$c=0;if($Talk[0]==$ss[0]&&$Talk[1]==$ss[1]){echo " bgcolor=\"#00CC99\">";$i=1;}
else if($ss[0]=='0'&&$ss[1]=='0'){echo " bgcolor=\"#33CCFF\">";$i=1;}
else{echo" bgcolor=\"#33CCFF\">";}
for($b=0;$b<1000;$b++){
	if($Talk[$b] == '	'){	
		$e++;
		if($e>2||$i==1){
		echo "					<td width=\"70\"><p align=center>";
		for($d=$c;$d<$b;$d++){	
			echo $Talk[$d] ;
			}
		echo "</p></td>";}
		else{
		echo "					<td width=\"70\"><p align=center> </p></td>";}
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
		echo "					<td width=\"70\"><p align=center>";
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
  </center><script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
</body>
</html>
