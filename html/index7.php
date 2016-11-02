<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>某科學的超神奇網站</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" href="../pic/css/lightbox.css" media="screen"/>
<script src="../pic/js/modernizr.custom.js"></script>
<script src="../pic/js/jquery-1.10.2.min.js"></script>
<script src="../js/pace.min.js"></script>
<script src="../pic/js/lightbox-2.6-fix2.min.js"></script>
<link rel="stylesheet" type="text/css" href="./BS.css">
<script type="text/javascript">
//$(document).ready(function(){$("body").css("display", "none");$("body").fadeIn("fast");$("a[target],a[href*='javascript'],a.lightbox,a[href*='#']").addClass("speciallinks");$("a:not(.speciallinks)").click(function(){$("body").fadeOut("fast");$("object,embed").css("visibility", "hidden");});});
</script>

<style type="text/css">
html { 
overflow-y:hidden;
overflow-x:hidden;
}
  #tp img{
    height:30%;
  }
  #tp2 img{
    height:30%;
  }
</style>
</head>
<body>
<br>
<br>　歡迎光臨！ 
<br>　
<br>　

<?php
$Y=intval(date(Y,time()+$webdb['correctiontime']));
$M=intval(date(n,time()+$webdb['correctiontime']));
$D=intval(date(d,time()+$webdb['correctiontime']));
$m=intval(date(H,time()+$webdb['correctiontime']));
$i=intval(date(i,time()+$webdb['correctiontime']));
//echo $Y." ".$M." ".$D." ".$m." ".$i;
$a=$M;$b=$D;$c=$Y;
while(1){
	if ((@file_exists("../date/".$a."-".$b.".txt"))){$e=1;break;}
	if ((@file_exists("../date/".$c."-".$a."-".$b.".txt"))){$e=0;break;}
	$b++;
	if($b>31){$a++;$b=1;}
	if($a>12){$a=1;$c++;}
	}
if($a==$M&&$b==$D){
	if($e==1){$fileopen = fopen("../date/".$a."-".$b.".txt","r");}
	if($e==0){$fileopen = fopen("../date/".$c."-".$a."-".$b.".txt","r");}
	$str=fgets($fileopen,5000);
	$str=fgets($fileopen,5000);
	$str=trim($str);
  echo "<a href=\"date.php\"><font color=\"#FF0066\">今天</font>是『<font color=\"#99FF00\">".$str."</font>』</a>";
	}
else{
	$dat=$b-$D;
	if($e==1){$fileopen = fopen("../date/".$a."-".$b.".txt","r");}
	if($e==0){$fileopen = fopen("../date/".$c."-".$a."-".$b.".txt","r");}
	$str=fgets($fileopen,5000);
	$str=fgets($fileopen,5000);
	$str=trim($str);
	for($e=$M;$e<$a;$e++){
		if($e==1){$dat+=31;}
		if($e==2){
			if($Y%400==0){$dat+=29;}
			else if($Y%4==0&&$Y%100!=0){$dat+=29;}
			else{$dat+=28;}
			}
		if($e==3){$dat+=31;}
		if($e==4){$dat+=30;}
		if($e==5){$dat+=31;}
		if($e==6){$dat+=30;}
		if($e==7){$dat+=31;}
		if($e==8){$dat+=31;}
		if($e==9){$dat+=30;}
		if($e==10){$dat+=31;}
		if($e==11){$dat+=30;}
		if($e==12){$dat+=31;}
		}
	echo "<a href=\"date.php\">再 <font color=\"#FF0066\">".$dat."天</font> 就是『 <font color=\"#99FF00\">".$str."</font>』</a>";
	}
?>

<center>
<br>
<br>
<table width="80%" height="30%"><tr>
<td bgcolor="#252525" width="80%">
<!--<td bgcolor="#ffffff" width="80%">-->
<!--<a href="index9.php"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" height="150" loop="-1" direction="up" scrolldelay="5" scrollamount="2">-->
<a href="index9.php"><marquee onMouseOver="this.stop()" onMouseOut="this.start()" loop="-1" direction="up" scrolldelay="5" scrollamount="2">
<center>

<table width="80%" >
<?php
if((@file_exists("../data/news/news.txt"))){
	$u=0;
	$fileopen = fopen("../data/news/news.txt","r");
	fseek($fileopen,0);
	for($a=0;$a<5;$a++){
		$Talk = fgets($fileopen,1000) ;
		$Talk=trim($Talk);
		if($Talk==""){break;}
		$z[$a]=$Talk;
		}
    $colc="#E9E9B9";
	for($a=0;$a<5;$a++){
        if($colc=="#E9E9B9")$colc="#E9E9E9";
        else $colc="#E9E9B9";
		if($z[$a]==""){break;}
		if($z[$a][0]!='#'){
			echo "<a href=\"index9.php\"><tr><td valign=\"top\"><font color=\"".$colc."\">" . ($a+1-$u) . ". </font></td><td><font color=\"".$colc."\">" . $z[$a] . "</font></td></tr><tr><td> </td></tr></a>";
			//echo "<a href=\"index9.php\"><tr><td valign=\"top\"><font color=\"#000000\">" . ($a+1-$u) . " .</font></td><td><font color=\"#000000\">" . $z[$a] . "</font><br></td></tr><tr><td> </td></tr></a>";
			}
		else{
			$u++;
			$z[$a]=substr($z[$a],1,strlen($z[$a])-1);
			echo "<tr><td valign=\"top\"><font color=\"#FF0066\">##</font></td><td><font color=\"#FF0066\">" . $z[$a] . "##</font></td></tr><tr><td> </td></tr>";
			}
		}
	fclose($fileopen);
	}
?>
</table></center>
</marquee></a></td></tr></table></center>
<center>
<!--<br>
<br>
<br>
<table width="80%" bgcolor="#606060">-->

<?php
/*
$url="http://210.71.78.2/ann/";
if (isset($url) && !empty($url)) {
	$ckfile=file_get_contents($url);
	$start=strpos($ckfile,"table",8000);
	$start=strpos($ckfile,"table",$start+10);
	$end=strpos($ckfile,"table",$start+10);
	//$start+=432;
	$start=strpos($ckfile,"tr",$start+1);
	$start=strpos($ckfile,"tr",$start+1);
	$start=strpos($ckfile,"tr",$start+1);
	$ckfile=substr($ckfile,$start-1,$end-$start+7);
	$ckfile=str_replace ("ffffff","606060", $ckfile); 
	$ckfile=str_replace ("88c3ec","373C38", $ckfile); 
	$ckfile=str_replace ("f6f6f6","373C38", $ckfile);
	$ckfile=str_replace ("feb09d","373C38", $ckfile);  
	$ckfile=str_replace ("bbceeb","373C38", $ckfile);  
	$ckfile=str_replace ("f7cac9","373C38", $ckfile);  
	$ckfile=str_replace ("883322","E9E9E9", $ckfile);//單位
	$ckfile=str_replace ("black","E9E9E9", $ckfile);//單位
	$ckfile=str_replace ("green","99FF00", $ckfile);//單位
	$ckfile=str_replace ("red","E9E9E9", $ckfile);//單位
	$ckfile=str_replace ("blue","E9E9E9", $ckfile);//單位
	echo $ckfile;
	}*/
?>
<!--</td></tr></table>-->

<br>
   <div id="place" style="marting:0;padding:0;"></div>
  <div id="tp" style="marting:0;padding:0;"><img src="../pic/web/img.png"/></div>
  <div id="tp2" style="marting:0;padding:0;"><img src="../pic/web/img2.png"/></div></center>
  <script text="text/javascript">  
  var running = 0;
  function getElementPos(elementId) {
 var ua = navigator.userAgent.toLowerCase();
 var isOpera = (ua.indexOf('opera') != -1);
 var isIE = (ua.indexOf('msie') != -1 && !isOpera); // not opera spoof
 var el = document.getElementById(elementId);
 if(el.parentNode === null || el.style.display == 'none') {
  return false;
 }      
 var parent = null;
 var pos = [];     
 var box;     
 if(el.getBoundingClientRect)    //IE
 {         
  box = el.getBoundingClientRect();
  var scrollTop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
  var scrollLeft = Math.max(document.documentElement.scrollLeft, document.body.scrollLeft);
  return {x:box.left + scrollLeft, y:box.top + scrollTop};
 }else if(document.getBoxObjectFor)    // gecko    
 {
  box = document.getBoxObjectFor(el); 
  var borderLeft = (el.style.borderLeftWidth)?parseInt(el.style.borderLeftWidth):0; 
  var borderTop = (el.style.borderTopWidth)?parseInt(el.style.borderTopWidth):0; 
  pos = [box.x - borderLeft, box.y - borderTop];
 } else    // safari & opera    
 {
  pos = [el.offsetLeft, el.offsetTop];  
  parent = el.offsetParent;     
  if (parent != el) { 
   while (parent) {  
    pos[0] += parent.offsetLeft; 
    pos[1] += parent.offsetTop; 
    parent = parent.offsetParent;
   }  
  }   
  if (ua.indexOf('opera') != -1 || ( ua.indexOf('safari') != -1 && el.style.position == 'absolute' )) { 
   pos[0] -= document.body.offsetLeft;
   pos[1] -= document.body.offsetTop;         
  }    
 }              
 if (el.parentNode) { 
    parent = el.parentNode;
   } else {
    parent = null;
   }
 while (parent && parent.tagName != 'BODY' && parent.tagName != 'HTML') { // account for any scrolled ancestors
  pos[0] -= parent.scrollLeft;
  pos[1] -= parent.scrollTop;
  if (parent.parentNode) {
   parent = parent.parentNode;
  } else {
   parent = null;
  }
 }
 return {x:pos[0], y:pos[1]};
}
  
  var viewportwidth;
 var viewportheight;
    function view() {
 // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
 
 if (typeof window.innerWidth != 'undefined')
 {
      viewportwidth = window.innerWidth,
      viewportheight = window.innerHeight
 }
 
// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)

 else if (typeof document.documentElement != 'undefined'
     && typeof document.documentElement.clientWidth !=
     'undefined' && document.documentElement.clientWidth != 0)
 {
       viewportwidth = document.documentElement.clientWidth,
       viewportheight = document.documentElement.clientHeight
 }
 
 // older versions of IE
 
 else
 {
       viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
       viewportheight = document.getElementsByTagName('body')[0].clientHeight
 }
  //document.write('<p>Your viewport width is '+viewportwidth+'x'+viewportheight+'</p>');
    };
    const OUT_OPACITY = 0;  
    const OVER_OPACITY = 1.0;  
  $( document ).delay(500).ready(function() { 
    view();
    var pos=getElementPos("place");
    var h35=pos.y;
    var h30=viewportheight*0.3;
    var h100=viewportheight;
    
    var w30=h30*32.0/15.0;
    //var w35=pos.x;
    var w35=(viewportwidth-w30)/2.0+pos.x;
    var w100=h100*32.0/15.0+pos.x;
    var wx=0;//(viewportwidth)/2.0;
    $("div#tp img").css("height",h100); 
    $("div#tp img").css("width",w100);
    $("div#tp img").css("opacity",OUT_OPACITY); 
    $("div#tp").css("top",0); 
    $("div#tp").css("left",wx); 
    $("div#tp").css("position","absolute"); 
    
    $("div#tp2 img").css("height",h100); 
    $("div#tp2 img").css("width",w100); 
    $("div#tp2 img").css("opacity",OUT_OPACITY);
    $("div#tp2").css("top",0); 
    $("div#tp2").css("left",wx); 
    $("div#tp2").css("position","absolute"); 
    
    running=2;
    $("div#tp img").animate({opacity:OVER_OPACITY,height:h30,width:w30},1000,function(){
      	$("div#tp2 img").delay(100).animate({opacity:OVER_OPACITY,height:h30,width:w30},1000); 
    }); 
    $("div#tp").animate({top:h35,left:w35},1000,function(){
      $("div#tp2").delay(100).animate({top:h35,left:w35},1000,function(){running=1;}); 
    });
    //.delay(1500)
    //$("div#tp img").css("height", 50).animate({},1000); 
  });
function resetSize(){
  	view();
  	if(running){
  	var pos=getElementPos("place");
    var h35=pos.y;
    var h30=viewportheight*0.3;
    var h100=viewportheight;
    var w30=h30*32.0/15.0;
    var w35=(viewportwidth-w30)/2.0+pos.x;
    var w100=h100*32.0/15.0+pos.x;
    var wx=(viewportwidth)/2.0;
  	if(running==2){
    $("div#tp img").stop();
    $("div#tp2 img").stop();
    $("div#tp").stop();
    $("div#tp2").stop();
      $("div#tp img").animate({opacity:OVER_OPACITY,height:h30,width:w30},1000,function(){
      	$("div#tp2 img").delay(100).animate({opacity:OVER_OPACITY,height:h30,width:w30},1000); 
    }); 
    $("div#tp").animate({top:h35,left:w35},1000,function(){
      $("div#tp2").delay(100).animate({top:h35,left:w35},1000,function(){running=1;}); 
    });
      running=1;
    }
      else{
  	$("div#tp img").css("height",h30); 
    $("div#tp img").css("width",w30); 
    $("div#tp").css("top",h35); 
    $("div#tp").css("left",w35); 
    $("div#tp2 img").css("height",h30); 
    $("div#tp2 img").css("width",w30); 
    $("div#tp2").css("top",h35); 
    $("div#tp2").css("left",w35);
      }
    }
    else{
      setTimeout('resetSize()',10);
    }
  	}
    window.onresize=resetSize;
    </script>  
 
  <!--<img height="30%" src="../pic/web/img1.png">-->
  
  <?php
if((@file_exists("../ad/list.txt"))){
	$fileopen = fopen("../ad/list.txt","r");
	fseek($fileopen,0);
	$Talk = fread($fileopen,1000000);
	echo $Talk;
	fclose($fileopen);
	}
?>
</body>
</html>


