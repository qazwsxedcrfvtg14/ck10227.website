<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>檔案樹</title>
<script type="text/javascript" src="../jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../jquery.easing.1.3.js"></script>
<link rel="stylesheet" type="text/css" href="../BS.css">
<style>
html { 
    /*overflow-y:hidden;*/
white-space:nowrap; 
/*word-break:break-all;*/
}
</style>

<script type="text/javascript">
//$(document).ready(function(){$("body").css("display", "none");$("body").fadeIn("fast");$("a[target],a[href*='javascript'],a.lightbox,a[href*='#']").addClass("speciallinks");$("a:not(.speciallinks)").click(function(){$("body").fadeOut("fast");$("object,embed").css("visibility", "hidden");});});
</script>
<script language="javascript">
$(function(){
 $("li.lm:has(ul)").click(function(e){
  if(this==e.target){
	var link = $(this);
    window.open(link.attr("href"),"map");
   if($(this).children().is(":hidden")){
    //如果子項是隱藏的則顯示
    $(this).css("list-style-image","url(../pic/web/arror.png)").children().show();
   }else{
    //如果子項是顯示的則隱藏
    $(this).css("list-style-image","url(../pic/web/arror.png)").children().hide();
   }
  }
  return false; //避免不必要的事件混繞
 });
 $("li.lm:not(:has(ul))").click(function(e){
  if(this==e.target){
	var link = $(this);
    window.open(link.attr("href"),"map");
   
  }
  return false; //避免不必要的事件混繞
 });//加載時觸發點擊事件
  
 //對於沒有子項的選單，統一設置
 $("li.lm:not(:has(ul))").css({
  "cursor":"default",
  "list-style-image":"url(../pic/web/arror2.png)"
 });
});
</script>
</head>
<body>
<?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
function chk_dir($dir,$my_dir,$pbac=0){
	if($pbac)return 1;
	$dir=realpath($dir);
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
function listdirs($dir,$first,$share) {
	$now=get_basename($dir);
	//$now=get_basename($dir);
	echo "<ul class='um' style=\"display: $first\">";
	if($first=="block"){
		echo "<li class='lm' href=\"$share?file_src=$dir\" style=\"list-style-image: url(../pic/web/arror.png);\">$now";
		}
    else{
		echo "<li class='lm' href=\"$share?file_src=$dir\">$now";
		}
	static $alldirs = array();
    $dirs = glob($dir.'/*', GLOB_ONLYDIR);
    if(count($dirs)>0){
        foreach ($dirs as $d) $alldirs[] = $d;
	    }
    foreach ($dirs as $dir)listdirs($dir,"none",$share);
	echo "</li></ul>";
    return $alldirs;
	}
if($My_Dir!=""){
	if(!is_dir($My_Dir)){
		$oldmask=umask(0);
		mkdir($My_Dir);
		umask($oldmask);
		}
	listdirs($My_Dir,"block","map.php");
	if ((@file_exists("share/".$CookieUser))){
		$shfile=file("share/".$CookieUser);
		$sz=count($shfile);
		for($i=0; $i<$sz;$i++)
			if(chk_dir(trim($shfile[$i]),$My_Dir,$P_Back_Edit))
				listdirs(trim($shfile[$i]),"block","map.php");
			else if(chk_dir(trim($shfile[$i]),"/var/www/joe59491"))
				listdirs(trim($shfile[$i]),"block","map2.php");
		}
	}
?>

<!--
<ul>
<li>第1章 Javascript簡介</li>
<li>第2章 Javascript基礎</li>
<li>第3章 CSS基礎
  <ul>
<li>第3.1節 CSS的概念</li>
<li>第3.2節 使用CSS控制頁面
    <ul>
<li>3.2.1 行內樣式</li>
<li>3.2.2 內嵌式</li>
</ul>
</li>
<li>第3.3節 CSS選擇器</li>
</ul>
</li>
<li>第4章 CSS進階
  <ul>
<li>第4.1節 div標記與span標記</li>
<li>第4.2節 盒子模型</li>
<li>第4.3節 元素的定位
    <ul>
<li>4.3.1 float定位</li>
<li>4.3.2 position定位</li>
<li>4.3.3 z-index空間位置</li>
</ul>
</li>
</ul>
</li>
</ul>-->
</body>
</html>


