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
table{
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    font-size:15px;
    line-height:20px;
}
</style>
 </head>
<body>
  <center><br>

<table width="80%"><tr><td>
<?php
if(!$page)$page=0;

$url="http://210.71.78.2/ann/?myday=998&show=".$page*20.;
//if(isset($url)&&!empty($url)){

	$curl = curl_init($url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$ckfile = curl_exec($curl);
	curl_close($curl);
//echo $ckfile;
	//$ckfile=file_get_contents($url);
	$start=strpos($ckfile,"table",8000);
	$start=strpos($ckfile,"table",$start+10);
	//$end=strpos($ckfile,"table",$start+15000);
	$end=strpos($ckfile,"table",$start+10);
	$ckfile=substr($ckfile,$start-1,$end-$start+7);
	$ckfile=str_replace ("http://web.ck.tp.edu.tw/ann/show.php?","cknews2.php?page=$page&", $ckfile);
	$ckfile=str_replace ("<table","<table cellspacing=\"0\" cellpadding=\"3\"", $ckfile);
	$ckfile=str_replace ("<font color=\"blue\" size=\"3\">","", $ckfile);
	$ckfile=str_replace ("<font size=\"3\">","", $ckfile); 
	$ckfile=str_replace ("<font size=\"3\" color=\"#883322\">","", $ckfile); 
	$ckfile=str_replace ("<font size=\"3\" color=\"red\">","", $ckfile); 
	$ckfile=str_replace ("<font size=\"3\" color=\"#883322\">","", $ckfile); 
	$ckfile=str_replace ("<font color=\"black\">","", $ckfile); 
	$ckfile=str_replace ("<font size=\"3\" color=\"blue\">","", $ckfile); 
	$ckfile=str_replace ("</font>","", $ckfile); 
	$ckfile=str_replace ("\"red\">急件","\"#FF0066\">急件</font>", $ckfile); 
	$ckfile=str_replace ("\"green\">重要","\"#99FF00\">重要</font>", $ckfile);
	$ckfile=str_replace ("width=\"15%\"","", $ckfile); 
	$ckfile=str_replace ("width=\"62%\"","width=\"67%\"", $ckfile); 
	$ckfile=str_replace ("ffffff","373C38", $ckfile); 
	$ckfile=str_replace ("88c3ec","1E1E1E", $ckfile); 
	$ckfile=str_replace ("f6f6f6","2C2C2C", $ckfile);
	$ckfile=str_replace ("feb09d","3C3C3C", $ckfile);  
	$ckfile=str_replace ("bbceeb","242424", $ckfile);  
	$ckfile=str_replace ("f7cac9","323232", $ckfile);  
	$ckfile=str_replace ("style=\"cursor:hand\"","", $ckfile); 
	$ckfile=str_replace ("&nopart=1","", $ckfile);  
	$ckfile=str_replace ("&myday=999","", $ckfile);  
	$ckfile=str_replace ("&noyear=1","", $ckfile);  
	$ckfile=str_replace ("&mypartid=","", $ckfile);  
	$ckfile=str_replace ("&noday=","", $ckfile); 
	$ckfile=str_replace ("&nomonth=","", $ckfile); 
	$ckfile=str_replace ("&myyear=","", $ckfile); 
	$ckfile=str_replace ("&mymonth=","", $ckfile); 
	$ckfile=str_replace ("&mysearch=","", $ckfile);  
	$ckfile=str_replace ("&stxt=","", $ckfile); 
	//$ckfile=str_replace ("883322","E9E9E9", $ckfile);//單位
	//$ckfile=str_replace ("black","E9E9E9", $ckfile);//單位
    //	$ckfile=str_replace ("green","99FF00", $ckfile);//單位
	//$ckfile=str_replace ("red","E9E9E9", $ckfile);//單位
	//$ckfile=str_replace ("blue","E9E9E9", $ckfile);//單位
	echo $ckfile;
//	}
?>
</td></tr></table>
<?php
if($page!=0){
	echo "<a href=\"cknews.php?myday=999&page=".($page-1)."\">上一頁</a>.....";
	}
?>
<a href="cknews.php?page=<?php echo $page+1;?>">下一頁</a><br>
<!--	<a href="http://web.ck.tp.edu.tw/ann/" style="color:#E9E9E9">原本頁面</a>-->
 </center>
</body>
</html>
