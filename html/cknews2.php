<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title><a href="html/cknews.php?page=<?php echo $page;?>" target="main">建中消息</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>


<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
a{
/*    color:#1C1C1C;*/
}
a:hover{
/*    color:#1C1C1C;*/
}
</style>
 </head>
<body>
  <center><br>

<table width="80%" color="#000000"><tr><td>
<?php
if(!$page)$page=0;
$url="http://210.71.78.2/ann/show.php?mytid=$mytid";
if(isset($url) && !empty($url)) {
	$ckfile=file_get_contents($url);
	$start=strpos($ckfile,"table",0);
	$end=$start;
	while(1){
		$tmp=strpos($ckfile,"table",$end+10);
		if($tmp==false)break;
		$end=$tmp;
		}
	$ckfile=substr($ckfile,$start-1,$end-$start+7);
	$ckfile=str_replace ("#fdfcdf","#373C36", $ckfile); 
	$ckfile=str_replace("border=\"1\"","border=\"0\"",$ckfile);
	$ckfile=str_replace("bordercolordark=\"#FFFFFF\"","",$ckfile);
	$ckfile=str_replace("bordercolorlight=\"#FFFFFF\"","",$ckfile);
	$ckfile=str_replace ("FFFFFF","606060", $ckfile); 
	$ckfile=str_replace ("fef0ed","373C38", $ckfile); 
	$ckfile=str_replace ("#000000","#E9E9E9", $ckfile); 
	$ckfile=str_replace ("ffffff","E9E9E9", $ckfile); 
	$ckfile=str_replace ("88c3ec","373C38", $ckfile); 
	$ckfile=str_replace ("f6f6f6","373C38", $ckfile);
	$ckfile=str_replace ("feb09d","373C38", $ckfile);  
	$ckfile=str_replace ("bbceeb","373C38", $ckfile);  
	$ckfile=str_replace ("f7cac9","303030", $ckfile);  
	$ckfile=str_replace ("014898","373C36", $ckfile); 
	//http://web.ck.tp.edu.tw/ann/download.php?mytid=18801&dpid=16&duid=18&dfn=0
	//http%3A%2F%2Fweb.ck.tp.edu.tw%2Fann%2Fdownload.php%3Fmytid%3D18801%26dpid%3D16%26duid%3D18%26dfn%3D0
	//https://docs.google.com/viewer?url=http%3A%2F%2Fweb.ck.tp.edu.tw%2Fann%2Fdownload.php%3Fmytid%3D18801%26dpid%3D16%26duid%3D18%26dfn%3D0
	$start=strpos($ckfile,"http://web.ck.tp.edu.tw/ann/download.php?",0);
	while($start!=""){
		$end=strpos($ckfile,"dfn",$start);
		$old=substr($ckfile,$start,$end-$start+5);
		$new=$old; 
      /*$new=str_replace(":","%3A", $new);
		$new=str_replace("/","%2F", $new);
		$new=str_replace("?","%3F", $new);
		$new=str_replace("&","%26", $new);
		$new=str_replace("=","%3D", $new);*/
      $new=str_replace("http://web.ck.tp.edu.tw/ann/download.php?","", $new);
      //$ckfile=str_replace ($old,"https://docs.google.com/viewer?url=".$new."&embedded=true", $ckfile);
		$st=strpos($ckfile,"相關附件",$start+1);
		$st=strpos($ckfile,"：",$st+1);
		$ed=strpos($ckfile," (大小：",$st+1);
      	$fname=urlencode(substr($ckfile,$st+3,$ed-$st-3));
      //echo $fname;
      $ckfile=str_replace ($old,"ckdown.php?".$new."&fname=".$fname,$ckfile); 
		$start=strpos($ckfile,"http://web.ck.tp.edu.tw/ann/download.php?",$start+1);
	
	}
	echo $ckfile;
	}
?>
</td></tr></table>
<a href="cknews.php?page=<?php echo $page;?>">返回</a><br>
 </center>
</body>
</html>
