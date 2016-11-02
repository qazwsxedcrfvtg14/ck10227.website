<?php include("include.php"); ?><html>
 
<head>
<title>首頁</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css"> 
<!--
a:link {
	color: #ffffff;
}
a:visited {
	color: #ffffff;
}
a:hover {
	color: #ffffff;
}
a:active {
	color: #ffffff;
}
#apDiv1 {
	position:absolute;
	left:88px;
	top:29px;
	width:72px;
	height:98px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	right:12px;
	top:69px;
	width:27px;
	height:23px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	right:83px;
	top:18px;
	width:33px;
	height:31px;
	z-index:3;
}
#apDiv4 {
	position:absolute;
	left:71px;
	top:177px;
	width:73px;
	height:24px;
	z-index:3;
}
#apDiv5 {
	position:absolute;
	left:37px;
	top:54px;
	width:45px;
	height:69px;
	z-index:1;
}
#apDiv6 {
	position:absolute;
	right:55px;
	top:161px;
	width:45px;
	height:69px;
	z-index:1;
}
-->
</style>
 
<meta http-equiv="Content-Language" content="zh-tw">
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<base target="_top">
 
</head>
	
<body topmargin="3" leftmargin="3" style="text-align: left; background-attachment:fixed" onLoad="LoadFunctions()"  >
<!-- onUnload="window.alert('謝謝您的光臨！')" -->.
<!--
<SCRIPT language="JavaScript1.2"> 
function java(){
alert("家長如要新申請帳號，請按左邊“申請會員”按鈕，帳號將會自動產生（9909XXp），密碼則請自行設定（務必留下EMail，萬一密碼忘了，可幫您回傳密碼！）。");
}
function LoadFunctions(){
java();
}
</SCRIPT>
 -->
<div align="right"><font style="FONT-SIZE: 9pt" face="Arial" color="#ffffff">
<span id="yudan110"></span>
<script type="text/javascript"><!--
var sec=0; var min=0; var hou=0; flag=0;
function yudan_110(){sec++;
if(sec==60){sec=0;min+=1;}
if(min==60){min=0;hou+=1;}
if((min>0)&&(flag==0)){flag=1;}
document.getElementById("yudan110").innerHTML="你在本頁停留了 "+hou+" 小時 "+min+" 分 "+sec+" 秒";
setTimeout("yudan_110();",1000);}
yudan_110();
--></script>
<script> 
<!-- 
function channel(){ 
window.open("index.php","","channelmode,scrollbars") 
} 
//--> 
</script> 
網頁有時可能跑的較慢一點，請耐心等候。 螢幕解析度1024*768以上最好。
<?php
$Y=intval(date(Y));
$M=intval(date(n));
$D=intval(date(j));
$a=$M;$b=$D;$c=$Y;
while(1){
	if ((@file_exists("date/".$a."-".$b.".txt"))){$e=1;break;}
	if ((@file_exists("date/".$c."-".$a."-".$b.".txt"))){$e=0;break;}
	$b++;
	if($b>31){$a++;$b=1;}
	if($a>12){$a=1;$c++;}
	}
if($a==$M&&$b==$D){
	if($e==1){$fileopen = fopen("date/".$a."-".$b.".txt","r");}
	if($e==0){$fileopen = fopen("date/".$c."-".$a."-".$b.".txt","r");}
	$str=fgets($fileopen,50);
			$stt=trim($stt);
			}
	if($stt=="birth"){		
		echo"
			<div id=\"apDiv1\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>
			<div id=\"apDiv2\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>
			<div id=\"apDiv3\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>
			<div id=\"apDiv4\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>
			<div id=\"apDiv5\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>
			<div id=\"apDiv6\"><img src=\"pic/web/ball.gif\" height=\"60\" /></div>";
		}
	if($stt=="test"){		
		echo"
			<div id=\"apDiv1\"><img src=\"pic/web/era.png\" height=\"60\" /></div>
			<div id=\"apDiv2\"><img src=\"pic/web/test.png\" height=\"60\" /></div>
			<div id=\"apDiv3\"><img src=\"pic/web/pen.png\" height=\"60\" /></div>
			<div id=\"apDiv4\"><img src=\"pic/web/era.png\" height=\"60\" /></div>
			<div id=\"apDiv5\"><img src=\"pic/web/pen.png\" height=\"60\" /></div>
			<div id=\"apDiv6\"><img src=\"pic/web/test.png\" height=\"60\" /></div>";
		}
	}
    ?>
<SCRIPT language=JavaScript> 
var myfar;
var mytitle;
myfar="http://114.34.3.33";
mytitle="msjh9909";
function favority() {
if (navigator.appName!="Netscape"){
window.external.AddFavorite(myfar, mytitle);}
else{
window.location = myfar;
}}
</SCRIPT> 
 
<A HREF="javascript:favority()">加到我的最愛</A>
<A HREF="javascript:channel()">全螢幕瀏覽</A>
 
</font></div>
 
 
 
<div align="center">
<table border="4" width="980" cellspacing="0" cellpadding="2" id="table1" bgcolor="#FFFFFF" bordercolor="#999999" background="../pic/web/head-bg.gif">
 
<tr>
		<td bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
			<div align="center">
			  <img src="9909nhead.jpg" width="805" height="136" border="0" usemap="#Map">
			  <map name="Map">
			    <area shape="rect" coords="731,109,787,133" href="html/index7.php" target="main">
			    <area shape="rect" coords="482,111,553,133" href="pic/pic.html" target="main">
			    <area shape="rect" coords="334,112,406,136" href="homework/homework.php" target="main">
			    <area shape="rect" coords="251,112,324,134" href="html/index3.php" target="main">
			    <area shape="rect" coords="169,111,241,134" href="html/index6.php" target="main">
			    <area shape="rect" coords="102,111,160,134" href="talkroom/talkroom.php" target="main">
			    <area shape="rect" coords="18,111,92,134" href="html/index9.php" target="main">
			    <area shape="rect" coords="416,111,472,132" href="html/index10.php" target="main">
			    <area shape="rect" coords="562,112,639,133" href="html/class/class.php" target="main">
			    <area shape="rect" coords="647,112,719,131" href="html/us1.php" target="main">
		      </map>
			  <table border="0" >
			    <tr>
			      <script language="javascript1.2">
<!--
document.write("<td height=\""+(screen.height-768+420)+"\" width=\"100\" border=\"0\" >");

//-->
</script> 
			      
			      <p align="center">
			        <script language="javascript1.2">
<!--
document.write("<iframe name=\"left\" src=\"index8.php\" width=\"100\" scrolling=\"no\" border=\"0\" frameborder=\"0\" height=\""+(screen.height-768+420)+"\">");
//-->
</script> 
			        
			        您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
			        </iframe>
	            </td>
			    
			    <script language="javascript1.2">
<!--
document.write("<td height=\""+(screen.height-768+420)+"\" width=\"100\" border=\"0\" >");
//-->
</script> 
			    <p align="center">
			      <script language="javascript1.2">
<!--
document.write("<iframe name=\"main\" src=\"html/index7.php\" width=\"760\" border=\"0\" frameborder=\"0\" height=\""+(screen.height-768+420)+"\">");
//-->
</script> 
			      
			      您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
			      </iframe>
			      </td>
			      
			      <script language="javascript1.2">
<!--
document.write("<td height=\""+(screen.height-768+420)+"\" width=\"100\" border=\"0\" >");
//-->
</script> 							<p align="center">
  <script language="javascript1.2">
<!--
document.write("<iframe name=\"right\" src=\"html/wedget.php\" width=\"100\" scrolling=\"no\" border=\"0\" frameborder=\"0\" height=\""+(screen.height-768+420)+"\">");
//-->
</script> 
  
  您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
  </iframe>
  </td>
  
  <tr>
    <td colspan="3" bgcolor="#CC9900" background="../pic/web/d.gif">
      <p align="right">
        <font style="FONT-SIZE: 9pt" face="Arial" color="#303030">
          Copyright(c)2011. All Rights Reserved.　　　　(\ (\.<br></font>
        <font style="FONT-SIZE: 9pt" face="Arial" color="#303030">
          版權所有翻印必究；請勿拷貝或轉載於任何媒體。-by (^.^)</font>
        </td>
    </tr>
			    
</table>
</div>
</body>
	
</html>

