<?php include("include.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta http-equiv="X-UA-Compatible" content="IE=10"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="pic/web/48.ico" type="image/x-icon" />
<script language="text/javascript">
</script>
<title>某科學的超神奇網站</title>
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.easing.1.3.js"></script>
<!--<script type="text/javascript" src="jqtscrollbar.js"></script>-->
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
  	height: 100%;
    font-family:'Roboto','LiHei Pro','微軟正黑體';
    /*overflow-y:hidden;*/
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
	transition: background-color .3s;
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
div.main{
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
    /*position:absolute;*/
    position:fixed;
	/*top:32px;*/
	left:0px;
	width:100%;
	height:100%;
  	padding: 32px 130px 0px 0px;
  	margin:0px;
  	/*padding-top:32px;*/
}
div.lock{
    /*position:absolute;*/
	position:fixed;
	right:90px;
	top:4px;
	width:80px;
	height:32px;
	text-align:right;
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
	background-color:#009999;
}
div.top_bt_on{
    /*position:absolute;*/
	position:fixed;
	left:200px;
	top:0px;
	width:100px;
	height:32px;
	text-align:center;
	font-size:18px;
    background-color:#009999;
	direction:rtl; 
}
div.left{
	position:absolute;
	top:0;
	right:0;
	height:100%;
  	min-height: 660px;
	width:130px;
    	background:#1C1C1C;
    	background-color:#1C1C1C;
	overflow:hidden;
	white-space: nowrap;
    }
p{
    font-size:18px;
	padding-top:12px;
	padding-bottom:12px;
	margin-top:0px;
	margin-bottom:0px;
}
</style>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



</head>
<body style="margin:0px;padding:0px;">
<div class="index_head_box" >
    <div id="index_head" class="index_head">
	<div class="title" id="title">某個神奇的網站</div>
	<div class="lock" id="lock"><a href="setlock.php?slock=2"><img onMouseover="this.src='pic/web/unlock';" onMouseout="this.src='pic/web/lock';" src="pic/web/lock" height="20px" style="border:0"></a></div>
	
    <a id="top_a1" target="main"><div id="top_bt1" style="left:150px;"></div></a>
    <a id="top_a2" target="main"><div id="top_bt2" style="left:250px;"></div></a>
    <a id="top_a3" target="main"><div id="top_bt3" style="left:350px;"></div></a>
    <a id="top_a4" target="main"><div id="top_bt4" style="left:450px;"></div></a>
    </div>
</div>


<div id="main" class="main">
<iframe name="main" src="<?php
if($link=="")
	echo "html/index7.php";
else
	echo $link;
?>" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" height="100%" width="100%">
您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
</iframe></div>


<div id="left" class="left">
<p style="margin:0px;padding:5px;">　</p>
<a href="html/index7.php" target="main"><p name="bt" id="bt" class="bt">　首頁</p></a>
<a href="html/index9.php" target="main"><p name="bt" id="bt" class="bt">　班上消息</p></a>
<a href="html/cknews.php" target="main"><p name="bt" id="bt" class="bt">　建中消息</p></a>
<a href="homework/homework.php" target="main"><p name="bt" id="bt" class="bt">　回家作業</p></a>
<a href="talkroom/talkroom.php" target="main"><p name="bt" id="bt" class="bt">　自由廣場</p></a>
<a href="html/index3.php" target="main"><p name="bt" id="bt" class="bt">　網路硬碟</p></a>
<a href="html/index10.php" target="main"><p name="bt" id="bt" class="bt">　一週課表</p></a>
<a href="pic/picf.php" target="main"><p name="bt" id="bt" class="bt">　電子相簿</p></a>
<a href="html/us1.php" target="main"><p name="bt" id="bt" class="bt">　關於我們</p></a>
<a href="html/class/class3.php" target="main"><p name="bt" id="bt" class="bt">　班級事務</p></a>
<a href="other/links.php" target="main"><p name="bt" id="bt" class="bt">　其他連結</p></a>
<!--<p>　</p>-->
<br>
<br>
<a href="index8.php" target="main"><p name="bt"  id="bt_login" class="bt">　<?php if($CookieUser!="")echo"我的帳號"; else echo"登入";?></p></a>

</div>

<script type='text/javascript'>
var bs=document.getElementById("left");
var bo=bs.style;
var minh=bs.scrollHeight;
</script>


</body>
	
</html>

