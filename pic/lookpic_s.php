<?php include("../include.php"); ?>
<html>
	<head>

		<!--<script type="text/javascript" src="../jquery-1.9.1.min.js"></script> -->
		<!--<script type="text/javascript" src="./file/jquery.js"></script>
		<script type="text/javascript" src="./file/thickbox.js"></script>-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Language" content="zh-tw">
		<title>電子相簿</title><title>talk</title>
		<!--<link rel="stylesheet" href="./file/thickbox.css" type="text/css" media="screen">--> 
		<link rel="stylesheet" href="css/screen.css" media="screen"/>
		<link rel="stylesheet" href="css/lightbox.css" media="screen"/>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/lightbox-2.6-fix3.min.js"></script>
		<!--<script src="js/lightbox-2.7.1.min.js"></script>-->
		<link rel="stylesheet" type="text/css" href="./BS.css">
		<style type="text/css">
			.lb-outerContainer {
				/*max-width: 750px; */
				/*max-height: 10%;*/
			}
			.lb-dataContainer {
				/*max-width: 750px;*/ /* For the text below image */
			}
			.lb-image {
				/*max-width: 740px; */
				/*max-height: 470px;*/
				/*height:auto;*/
			}
			body {
	    		margin: 0px 0px 0px 0px;
  				}
		</style>
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

function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if((@file_exists("list.txt"))){
	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$choice;$a++){
		$s = fgets($fileopen,1000);
		}
	fclose($fileopen);
	$ss=trim($s);
	$file_src=$ss;
	if (!(@file_exists($ss."/list.txt"))){
		//echo "<table border='0'><td width=\"500\"><div align='center'><!--".$ss."/list.txt no found!--><div>";
      	$f=0;
    	$dirs=glob($ss.'/*',GLOB_ERR);
      	$cnt=0;
      	$t=0;
    	foreach($dirs as $fil){
              	$fil=get_basename($fil);
              	if($cnt==($page+1)*16){
                  	echo "</tr><tr><td>"; 
                 	}
              	if($cnt<$page*16||$cnt>=($page+1)*16){
                  	echo "<a href=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$fil)."&h=768&zc=1\" data-lightbox='example-set' title=\"(<a href='down.php?file_dir=".urlencode($ss)."&file_name=" .urlencode($fil)."'>下載</a>) <a href='".$ss."/" .$fil."'>" .$fil."</a>\"/>"; 
                 	}
              	if($cnt==$page*16){
      				echo"<table border='0'>";
              		}
              	if($cnt>=$page*16&&$cnt<($page+1)*16){
                	if($cnt==$page*16)echo "</td>";
          			if($cnt%4==0&&$cnt!=$page*16)echo"</tr>";
                  	if($cnt%4==0)echo "<tr>";
                  	echo "<td width='130'><a class='example-image-link' href=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$fil)."&h=768&zc=1\" data-lightbox='example-set' title=\"(<a href='down.php?file_dir=".urlencode($ss)."&file_name=" .urlencode($fil)."'>下載</a>) <a href='".$ss."/" .$fil."'>" .$fil."</a>\"><img class='example-image' src=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$fil)."&h=90&w=160&zc=1\"></a></td>"; 
                	}
              	$cnt++;
            	}
     	if($cnt<=($page+1)*16)$t=1;
		echo "</tr>";
		}
	else{    
		$fileopen = fopen($ss."/list.txt","r");
		$f=0;
		for($a=0;$a<($page*16);$a++){
			$Talk = fgets($fileopen,1000);
			if($Talk==""||$Talk=="\n"){break;}
			$Ntk=trim($Talk);
          echo "<a href=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$Ntk)."&h=768&zc=1\" data-lightbox='example-set' title=\"(<a href='down.php?file_dir=".urlencode($ss)."&file_name=" .urlencode($Ntk)."'>下載</a>) <a href='".$ss."/" .$Ntk."'>" .$Ntk."</a>\"/>"; 
			}
      	echo"<table border='0'>";
		for($a=0;$a<16;$a++){
			$Talk = fgets($fileopen,1000);
          	if($a!=0)echo"</td>";
          	if($a!=0&&$f%4==0)echo"</tr>";
			if($f%4==0){echo "<tr>";}
			if($Talk==""||$Talk=="\n"){$t=1;break;}
			$Ntk=trim($Talk);
          	if($a!=0)echo"</td>";
          //href='".$ss."/" .$Ntk."'
          //href=\"smallpic.php?src=".$ss."/" .$Ntk."&h=768&zc=1\"
			echo "<td width='130'><a class='example-image-link' href=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$Ntk)."&h=768&zc=1\" data-lightbox='example-set' title=\"(<a href='down.php?file_dir=".urlencode($ss)."&file_name=" .urlencode($Ntk)."'>下載</a>) <a href='".$ss."/" .$Ntk."'>" .$Ntk."</a>\"><img class='example-image' src=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$Ntk)."&h=90&w=160&zc=1\"></a>"; 
			$f++;
			}
      	$t=0;
		for($a=0;;$a++){
			$Talk = fgets($fileopen,1000);
			if($Talk==""||$Talk=="\n"){
              	if($a==0)$t=1;
              	break;
            	}
			$Ntk=trim($Talk);
          	echo "<a href=\"smallpic.php?src=".$ss."/" .str_replace("__highres","",$Ntk)."&h=768&zc=1\" data-lightbox='example-set' title=\"(<a href='down.php?file_dir=".urlencode($ss)."&file_name=" .urlencode($Ntk)."'>下載</a>) <a href='".$ss."/" .$Ntk."'>" .$Ntk."</a>\"/>";
        	}/*
		$Talk = fgets($fileopen,1000);
		if($Talk==""||$Talk=="\n"){$t=1;}*/
      	echo "</td></tr>";
		fclose($fileopen);
		}
	}
else{ echo "list.txt not found!";}
 echo"</table>";

		if($page>0){echo "<a href=\"lookpic.php?page=" . ($page-1) . "&choice=" . ($choice) . "\">上一頁 </a>";}
		if($page>0&&$t!=1)echo".......";
		if($t==0){echo "<a href=\"lookpic.php?choice=".($choice)."&page=".($page+1)."\">下一頁</a><br>";}
		if($page>0||$t==0)echo "<br>";
}
else{
echo"權限不足！";
}
if($P_Up_Pic==1)
  echo "<br><a href='uploader1.php?file_src=".urlencode($file_src)."'>上傳相片</a>　<a href=\"lookpic2.php?choice=".($choice)."\">總覽模式</a>";
?>
  </center>
  </body>
</html>
