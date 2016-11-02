<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>班上消息</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" href="../css/lightbox.css" media="screen"/>
<script src="../js/modernizr.custom.js"></script>
<script src="../js/jquery-1.10.2.min.js"></script>
  <script src="../pic/js/lightbox-2.6-fix3.min.js"></script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>

<body>
<center><!--<img src="../pic/web/t1.gif" height="40">-->

<br><br>
<?php
if($P_Add_News){
echo"
<form Action=\"talking.php\" Method=\"POST\">  
新增消息:<input type=\"text\" size=\"40\"  name=\"talk\" id=\"talk\">
		
	<INPUT TYPE=SUBMIT VALUE=\"送出!\"><br>
</form>
";
}
?>
<table width="80%" cellspacing="0" cellpadding="10">
<?php

if((@file_exists("../data/news/news.txt"))){
  $u=0;
  	$end=0;
	$fileopen = fopen("../data/news/news.txt","r");
	fseek($fileopen,0);
	for($a=0;$a<$page*12;$a++){
      	$Talk = fgets($fileopen,1000) ;
		$Talk=trim($Talk);
      if($Talk[0]=='#'){$u++;}
		if($Talk==""){$end=1;break;}
		$z[$a]=$Talk;
		}
    $colc="#E9E9B9";
	for($b=0;$b<12;$b++){
      	$Talk = fgets($fileopen,1000) ;
		$Talk=trim($Talk);
		if($Talk==""){$end=1;break;}
        if($colc=="#E9E9B9")$colc="#E9E9E9";
        else $colc="#E9E9B9";
		echo "<tr onmouseout=\"this.style.backgroundColor=''\" onmouseover=\"this.style.backgroundColor='#252525'\">";
		if($P_Del_News){echo "<td width=\"50\"><a href=\"delnews.php?id=".($b+$page*12)."\">刪除</a></td>";}
		if($Talk[0]!='#'){
          echo "<td valign=\"top\"><font color=\"".$colc."\">" . ($b-$u+1+$page*12) . ". </font></td><td><font color=\"".$colc."\">" . $Talk ."</font></td></tr>";
			}
		else{
			$u++;
			$Talk=substr($Talk,1,strlen($Talk)-1);
			echo "<td valign=\"top\"><font color=\"#FF0066\">##</font></td><td><font color=\"#FF0066\">" . $Talk . "##</font></td></tr>";
			}
		}
	fclose($fileopen);
	}
?></table><br>
  <?php 
	if($page>0){
  	echo "<a href=\"index9.php?page=".($page-1)."\">上一頁</a>";
      }
if($page>0&&$end==0){echo "....";}
	if($end==0){
	echo "<a href=\"index9.php?page=".($page+1)."\">下一頁</a>";
    }
  	?>
  </center>
<p><p></body>
</html>


