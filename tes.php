<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>图片淡入淡出</title>
<style type="text/css">
<!--
body {
background:#000000;
}
-->
</style>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<style type="text/css"> 
  #tp img{
    /*height:100%;*/
    opacity:0;
  }
  #tp2 img{
    /*height:100%;*/
    opacity:0;
  }
  #tp{
    top:0%;
    left:0%;
    position:absolute;
  }
  #tp2{
    top:0%;
    left:0%;
    position:absolute;
  }
</style>
</head>
<body>
<script text="text/javascript">  
  
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
  
  
  
  
 
  $( document ).ready(function() { 
    const OUT_OPACITY = 0;  
    const OVER_OPACITY = 1.0;  
  	var pos=getElementPos("place");
    //viewportwidth-=30;
    //viewportheight-=30;
    var h35=viewportheight*0.35+pos.y;
    var h30=viewportheight*0.3;
    var h100=viewportheight+pos.y;
    var w30=h30*32.0/15.0;
    var w35=(viewportwidth-w30)/2.0+pos.x;
    var w100=h100*32.0/15.0+pos.x;
    $("div#tp img").css("height",h100); 
    $("div#tp img").css("width",w100); 
    $("div#tp img").css("opacity",OUT_OPACITY); 
    $("div#tp2 img").css("height",h100); 
    $("div#tp2 img").css("width",w100); 
    $("div#tp2 img").css("opacity",OUT_OPACITY);
    
    
    
    	$("div#tp img").animate({opacity:OVER_OPACITY,height:h30,width:w30},1000); 
    $("div#tp").animate({top:h35,left:w35},1000);
    $("div#tp2 img").delay(1500).animate({opacity:OVER_OPACITY,height:h30,width:w30},1000); 
    $("div#tp2").delay(1500).animate({top:h35,left:w35},1000); 
    
    
    //$("div#tp img").css("height", 50).animate({},1000); 
  })
    </script>  
  <div id="place" style="marting:0;padding:0;"></div>
  <div id="tp" style="marting:0;padding:0;"><img src="http://ck10227.twbbs.org/pic/web/img.png"/></div>
  <div id="tp2" style="marting:0;padding:0;"><img src="http://ck10227.twbbs.org/pic/web/img2.png"/></div>
</body>
</html>