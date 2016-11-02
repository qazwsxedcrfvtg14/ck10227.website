<?php include("include.php"); ?>
<?php
if((@file_exists("tul/data/".$u))&&$u!=""){
	header("refresh:0;url=".file_get_contents("tul/data/".$u));
	return;
	}
else{
	if($lock==1){
		if($link=="")
			header("refresh:0;url=index_lock.php");
		else
			header("refresh:0;url=index_lock.php?link=".urlencode($link));
		return;
		}
	}
?>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="X-UA-Compatible" content="IE=10"/>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="pic/web/48.ico" type="image/x-icon" />
<script type="text/javascript">
/*$(window).load(function(){
      $("#loading").hide();
})*/
</script>
<title>某科學的超神奇網站</title>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<!--<script type="text/javascript" src="jqtscrollbar.js"></script>-->
<script type="text/javascript">
var oldleft="";
var ncnt=0;
function resetIframeSize(){
	var viewportwidth;
	var viewportheight;
	if(typeof window.innerWidth != 'undefined'){
  		viewportwidth = window.innerWidth,
  		viewportheight = window.innerHeight
		}
 	else if (typeof document.documentElement != 'undefined'
 		&& typeof document.documentElement.clientWidth !=
     	'undefined' && document.documentElement.clientWidth != 0){
       	viewportwidth = document.documentElement.clientWidth,
       	viewportheight = document.documentElement.clientHeight
		}
 	else{
   		viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
       	viewportheight = document.getElementsByTagName('body')[0].clientHeight
 		}
    var a=viewportheight-32;
	document.getElementById("main").style.height=a+"px";
	makeRequest('judge/b.php');
    }
window.onload=resetIframeSize;
window.onresize=resetIframeSize;
</script>
<style type="text/css">
::-webkit-scrollbar {
    width: 12px;
    background-color: #707070;
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 50px 50px 6px #101010;
}
html{
	height:100%;
}
body{
	/*height:100%;*/
    color:#E9E9E9;
    background-color:#373C38;
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    overflow-y:hidden;
}
button{
    height:32px;
    margin:0px 0px;
    padding:0px 16px 0px 16px;
    font-size:16px;
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    color:#E9E9E9;
    background-color:#00896C;
    border:none;
    cursor:pointer;
}
button:hover{
    background-color:#24936E;
}
a{
    color:#E9E9E9;
    text-decoration:none;
}
a:hover{
    color:#E9E9E9;
/*    text-decoration:underline;*/
	text-decoration:none
}
input{
    height:32px;
    font-size:16px;
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    padding:0px 6px 0px 6px;
    border-width:0px;
    display:block;
}
select{
    height:32px;

    font-size:16px;
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    border-width:0px;
    display:block;
}
#index_head{
    font-size:16px;
}
#top_head{
    background-color:#000000;
    margin:0;
    padding:0;
    /*text-top:0;*/
}
p.bt{
	transition: background-color .3s;document.getElementById(sid)
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
p.bt:hover{
	background-color:#4C4C4C;
}
div.index_head_box{
    width:100%;
    height:32px;
    font-size:16px;
    line-height:32px;
    background-color:#1C1C1C;
    color:#E9E9E9;
    /*position:absolute;*/
	position:fixed;
    top:0px;
    left:0px;
    z-index:100;
}
div.index_head{
/*    width:1224px;*/
    height:100%;
    margin:0px 20px 0px 20px;
}
div.title{
	font-size:18px;
}
div.start{
    /*position:absolute;*/
	position:fixed;
	right:0px;
	top:0px;
	width:80px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#1C1C1C;
	direction:rtl;
	transition: background-color .3s;
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
div.start:hover{
	background-color:#101010;
}
div.now_bt{
    /*position:absolute;*/
	position:fixed;
	left:0px;
	top:0px;
	width:10px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#1C1C1C;
	direction:rtl;
	transition: background-color .3s;
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
div.now_bt:hover{
	background-color:#101010;
}
div.msg{
    /*position:absolute;*/
	position:fixed;
	right:120px;
	top:0px;
	width:80px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#1C1C1C;
	direction:rtl;
	transition: background-color .3s;
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
div.msg:hover{
	background-color:#101010;
}
div.msg_on{
    /*position:absolute;*/
	position:fixed;
	right:120px;
	top:0px;
	width:80px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#DD0000;
	direction:rtl;
	transition: background-color .3s;
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
div.msg_on:hover{
	background-color:#990000;
}
div.top_bt{
    /*position:absolute;*/
	position:fixed;
	/*left:200px;*/
	top:0px;
	width:100px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#1C1C1C;
    /*background-color:#000000;*/
	direction:rtl;
	transition: background-color .3s;
	-o-transition: background-color .3s;
	-ms-transition: background-color .3s;
	-moz-transition: background-color .3s;
	-webkit-transition: background-color .3s;
}
div.top_bt:hover{
	background-color:#008888;
}
div.top_bt_on{
    /*position:absolute;*/
	position:fixed;
	/*left:200px;*/
	top:0px;
	width:100px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#009999;
	direction:rtl;
}
div.top_bt_on:hover{
	background-color:#008888;
}
div.lock{
    /*position:absolute;*/
	position:fixed;
	right:90px;
	top:4px;
	width:40px;
	height:32px;
	text-align:right;
}
div.main{
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
    /*position:absolute;*/
	position:fixed;
	top:32px;
	left:0px;
	width:100%;
	height:100%;
	/*padding-top:32px;*/
}
div.left{
	position:absolute;
	top:0;
	right:0;
	width:0px;
	/*height:100%;*/
    background:#1C1C1C;
    background-color:#1C1C1C;
	overflow:hidden;
	white-space: nowrap;
	opacity:0;
    }
div.msg_left{
	position:absolute;
	top:0;
	right:0;
	width:0px;
	/*height:100%;*/
    background:#1C1C1C;
    background-color:#1C1C1C;
	overflow:hidden;
	white-space: nowrap;
	opacity:0;
    }
p{
    font-size:18px;
	padding-top:12px;
	padding-bottom:12px;
	margin-top:0px;
	margin-bottom:0px;
}
</style>
<script type='text/javascript'>
var moving=0;
var btc=new Array();
var offing=new Array();
function open_left(sid){
    bs=document.getElementById(sid);
    bo=bs.style;
	if(moving!=1&&moving!=0)return;
	ison=1;
	var viewportwidth;
	var viewportheight;
	// the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight
	if (typeof window.innerWidth != 'undefined'){
		viewportwidth = window.innerWidth,
		viewportheight = window.innerHeight
		}
	// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)
	else if (typeof document.documentElement != 'undefined'
	&& typeof document.documentElement.clientWidth !=
	'undefined' && document.documentElement.clientWidth != 0){
		viewportwidth = document.documentElement.clientWidth,
		viewportheight = document.documentElement.clientHeight
		}
	// older versions of IE
	else{
		viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
		viewportheight = document.getElementsByTagName('body')[0].clientHeight
		}
 	var mh;
  
  	if(sid=='left')
      mh=document.getElementById("left").scrollHeight;
  	else
      mh=document.getElementById("msg_left").scrollHeight;
	if(viewportheight<mh){
		document.body.style['overflow-y'] = 'scroll';
		bo.height="";
		}
	else{
		document.body.style['overflow-y'] = 'hidden';
		bo.height="100%";
		}
	moving=1;
	for(var i=0; i < 1; i++){
	    var px=parseInt(bo.width);
		if(px>=200){moving=0;return;}
		px=px+10;
		bo.opacity=px/200;
		bo.width=px+'px';
		}
	setTimeout('open_left(\''+sid+'\')', 7);
	}
function off_left(sid){
    //alert(sid);
	//if(moving!=2&&moving!=0)return;
	ison=0;
	moving=2;
	//DivRef.style.display = "none";
	//IfrRef.style.display = "none";
    bs=document.getElementById(sid);
    bo=bs.style;
	for(var i=0; i < 1; i++){
	    var px=parseInt(bo.width);
		if(px<=0){
			document.body.style['overflow-y'] = 'hidden';
			moving=0;
			return;
			}
		px=px-10;
		bo.opacity=px/200;
	    bo.width=px+'px';
		}
	setTimeout('off_left(\''+sid+'\')', 7);
	}
function set(sid){
    bs=document.getElementById(sid);
    bo=bs.style;
	bo.width=0;
	}
    var mesg="";
  function makeRequest(url) {
    var http_request = false;

    if (window.XMLHttpRequest) { // IE7+, Chrome, Mozilla, Safari,...
      http_request = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE
      try {
        http_request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        try {
          http_request = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {}
      }
    }

    if (!http_request) {
      //alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    http_request.onreadystatechange = function() {
                                      alertContents(http_request); };
    http_request.open('GET', url, true);
    http_request.send();
	setTimeout('makeRequest(\''+url+'\')',3000);
  }

  function done_s() {
    ncnt=0;
    var start_bt=document.getElementById("msg");
	//start_bt.innerHTML = "開始";
	//start_bt.style.backgroundColor = "#1C1C1C";
	start_bt.setAttribute("class", "msg");
    start_bt.innerHTML = "["+ncnt+"]";
	start_bt.onclick = function oc1(){
		if(moving==0)if(ison==1){off_left('msg_left');}else{open_left('msg_left');}
		};
	}
  function alertContents(http_request) {
    if (http_request.readyState == 4) {
      var status = http_request.status;
      if(status == 200) {
		if(mesg!=http_request.responseText&&mesg!=""&&http_request.responseText!=""){
			mesg = http_request.responseText;
	        var start_bt=document.getElementById("msg");
	        ncnt++;
			start_bt.innerHTML = "["+ncnt+"]";
			start_bt.setAttribute("class", "msg_on");
			start_bt.onclick = function oc(){
				if(moving==0)if(ison==1){off_left('msg_left');}else{open_left('msg_left');}
				done_s();
				};
            mesg = http_request.responseText;
            bs=document.getElementById("msg_left");
            bs.innerHTML="<p style=\"margin:0px;padding:5px;\">　</p>"+mesg;
			}
        
		if(mesg!=http_request.responseText){
          mesg = http_request.responseText;
          bs=document.getElementById("msg_left");
          bs.innerHTML="<p style=\"margin:0px;padding:5px;\">　</p>"+mesg;
        	}
        //alert(http_request.responseText);
        //document.getElementById("left").innerHTML = mesg;
      } else {
        //alert('There was a problem with the request.' + status);
      }
    }
  }
</script>

</head>
<body style="margin:0px;padding:0px;">

<div class="index_head_box" >
    <div id="index_head" class="index_head">
	<div class="title" id="title">某個神奇的網站</div>
    <!--<a href="" target="_blank" id="main_a"><div class="now_bt" id="now_bt"></div></a>-->
    <div class="start" id="start" onMouseover="if(ison!=1)open_left('left');" onclick="if(moving==0)if(ison==1){off_left('left');}else{open_left('left');}">開始</div>
    <div class="msg" id="msg" onclick="if(moving==0)if(ison==1){off_left('msg_left');}else{open_left('msg_left');}">[0]</div>
    <div class="lock" id="lock"><a href="setlock.php?slock=1"><img onMouseover="this.src='pic/web/lock';" onMouseout="this.src='pic/web/unlock';" src="pic/web/unlock" height="20" style="border:0"></a></div>
    <a id="top_a1" target="main"><div id="top_bt1" style="left:150px;"></div></a>
    <a id="top_a2" target="main"><div id="top_bt2" style="left:250px;"></div></a>
    <a id="top_a3" target="main"><div id="top_bt3" style="left:350px;"></div></a>
    <a id="top_a4" target="main"><div id="top_bt4" style="left:450px;"></div></a>
    </div>
</div>

<div id="main" class="main">
<iframe id="main_iframe" onMouseover="off_left('left');off_left('msg_left');" name="main" src="<?php
if($link=="")
	echo "html/index7.php";
else
	echo $link;
                                                                                               ?>" border="0" frameborder="0" width="100%" height="100%"  onload="window.history.replaceState(null,'某科學的超神奇網頁','http://ck10227.twbbs.org/?link='+encodeURIComponent((this.contentWindow.location).toString().replace('http://ck10227.twbbs.org/','')));/*document.getElementById('main_a').href='http://ck10227.twbbs.org/?link='+encodeURIComponent((this.contentWindow.location).toString().replace('http://ck10227.twbbs.org/',''))*/">
您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
</iframe>
</div>


<div id="left" class="left">
<p style="margin:0px;padding:5px;">　</p>
<a href="html/index7.php" target="main"><p name="bt" id="bt" class="bt">　首頁</p></a>
<a href="test/file_map.html" target="main"><p name="bt" id="bt" class="bt">　網路硬碟</p></a>
<a href="other/links.php" target="main"><p name="bt" id="bt" class="bt">　其他連結</p></a>
<!--<p>　</p>-->
<br>
<br>
<a href="index8.php" target="main"><p name="bt"  id="bt_login" class="bt">　<?php if($CookieUser!="")echo"我的帳號"; else echo"登入";?></p></a>
</div>
<div id="msg_left" class="msg_left">

</div>
<script type='text/javascript'>
//bs=document.getElementById("left");
//bo=bs.style;
var ison=0;


function now_bt(){  
  	alert(document.getElementById("main_iframe").src);
  	setTimeout('now_bt');
	}
//botn=document.getElementsByName("bt");
  //bsooo=document.getElementById("left");
  //var minh=bsooo.scrollHeight;
  //document.getElementById("msg_left");
  //var minh2=document.getElementById("msg_left").scrollHeight;
set('left');
set('msg_left');
//$("div#left").bind("mouseleave",off_left);
</script>




</body>

</html>
