<?php include("../include.php"); ?>
<html>
	<head>

		<link rel="stylesheet" type="text/css" href="./BS.css">
		<!--<script type="text/javascript" src="../jquery-1.9.1.min.js"></script> -->
		<script type="text/javascript" src="./file/jquery.js"></script>
		<script type="text/javascript" src="./file/thickbox.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
		<title>電子相簿</title><title>talk</title>
		<link rel="stylesheet" href="./file/thickbox.css" type="text/css" media="screen"> 
	</head> 
	<body>
	<br>
<center>
<?php
/*
if((@file_exists("list.txt"))){
	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$choice;$a++){
		$s = fgets($fileopen,1000) ;
		}
	fclose($fileopen);
	$ss=trim($s);	
	if((@file_exists($ss."/list.txt"))){
		$fileopen = fopen($ss."/list.txt","r");
		$f=0;
		$Talk = fgets($fileopen,1000) ;
		for($a=0;$a<($page*20);$a++){
			$Talk = fgets($fileopen,1000) ;
			if($Talk==""||$Talk=="\n"){$t=1;break;}	
			}
		for($a=0;$a<20;$a++){
			$Talk = fgets($fileopen,1000) ;
			if($Talk==""||$Talk=="\n"){$t=1;break;}	
			$f++;
			}
		$Talk = fgets($fileopen,1000) ;
		if($Talk==""||$Talk=="\n"){$t=1;}
		fclose($fileopen);
		}
	}*/
$file_src="";
if($P_See_Photo){
$orz=0;
echo"<table border=\"1\">";
if((@file_exists("list.txt"))){
	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$choice;$a++){
		$s = fgets($fileopen,1000);
		}
	fclose($fileopen);
	$ss=trim($s);
	$file_src=$ss;
	if (!(@file_exists($ss."/list.txt"))){
		echo " <td width=\"500\"><div align=\"center\"><!--".$ss."/list.txt no found!--><div></td>";
		}
	else{    
		$fileopen = fopen($ss."/list.txt","r");
		$f=0;
		echo "<tr>";
		for($a=0;$a<($page*20);$a++){
			$Talk = fgets($fileopen,1000);
			if($Talk==""||$Talk=="\n"){break;}
			}
		for($a=0;$a<20;$a++){
			$Talk = fgets($fileopen,1000);
			if($Talk==""||$Talk=="\n"){$t=1;break;}
			$Ntk=trim($Talk);
			echo "<td width=130>";
			if(!(@file_exists($ss."z/".$Ntk))){
				//echo "<p align=center><a href=\"".$ss."/" .$Ntk."\" class=\"thickbox\" rel=\"pic\"><img height=80 src=\"" . $ss . "/" . $Ntk ."\"></a></p></td>";		
		echo "<p align=center><a href=\"".$ss."/" .$Ntk."\" class=\"thickbox\" rel=\"pic\"><img style=\"border:0\" src=\"smallpic.php?src=".$ss."/" .$Ntk."&h=90&w=160&zc=1\"></a></p></td>";
				}
			else{
				echo "<p align=center><a href=\"".$ss."/" .$Ntk."\" class=\"thickbox\" rel=\"pic\"><img style=\"border:0\" height=80 src=\"" . $ss . "z/" . $Ntk ."\"></a></p></td>";	
//echo "<p align=center><a href=\"".$ss."/" .$Ntk."\" class=\"thickbox\" rel=\"pic\"><img height=80 src=\"" . $ss . "z/" . $Ntk ."\"></a></p></td>";
				}
			$f++;
			if($f%4==0){echo "</tr><tr>";}
			}
		$Talk = fgets($fileopen,1000);
		if($Talk==""||$Talk=="\n"){$t=1;}
		echo "</tr>";
		fclose($fileopen);
		}
	}
else{ echo "list.txt not found!";}
  ?>
 </table>
<?php

		if($page>0){echo "<a href=\"lookpic.php?page=" . ($page-1) . "&choice=" . ($choice) . "\">上一頁 </a>";}
		if($page>0&&$t!=1)echo".......";
		if($t!=1){echo "<a href=\"lookpic.php?choice=".($choice)."&page=".($page+1)."\">下一頁</a><br>";}
}
else{
echo"權限不足！";
}
if($P_Up_Pic==1)
	echo "<br><a href='uploader1.php?file_src=".urlencode($file_src)."'>上傳相片</a>";
?>
    
  </center>
  </body>
</html>
