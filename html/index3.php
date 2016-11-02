<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>網路硬碟</title>
  <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/upload.php";
parent.document.getElementById('top_bt1').className="top_bt";
parent.document.getElementById('top_bt1').innerHTML="網頁上傳";
parent.document.getElementById('top_a2').href="html/uploader1.php";
parent.document.getElementById('top_bt2').className="top_bt";
parent.document.getElementById('top_bt2').innerHTML="拖曳上傳";
parent.document.getElementById('top_a3').href="html/download.php";
parent.document.getElementById('top_bt3').className="top_bt";
parent.document.getElementById('top_bt3').innerHTML="檔案下載";
parent.document.getElementById('top_a4').href="test/file_map.html";
parent.document.getElementById('top_bt4').className="top_bt";
parent.document.getElementById('top_bt4').innerHTML="個人空間";
window.onbeforeunload = function(){
parent.document.getElementById('top_a1').href="";
parent.document.getElementById('top_bt1').className="";
parent.document.getElementById('top_bt1').innerHTML="";
parent.document.getElementById('top_a2').href="";
parent.document.getElementById('top_bt2').className="";
parent.document.getElementById('top_bt2').innerHTML="";
parent.document.getElementById('top_a3').href="";
parent.document.getElementById('top_bt3').className="";
parent.document.getElementById('top_bt3').innerHTML="";
parent.document.getElementById('top_a4').href="";
parent.document.getElementById('top_bt4').className="";
parent.document.getElementById('top_bt4').innerHTML="";
};
</script>


<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body>
  <center>
  <br><br>
  請從上面選擇服務項目
<h2>
<?php/*
if($P_Upload){
	echo"<b>網頁式檔案上傳：<a href=\"upload.php\"><font color=\"99FFFF\">按我</font></a></b><br><br>";
	echo"<b>拖曳式檔案上傳：<a href=\"uploader1.php\"><font color=\"99FFFF\">按我</font></a></b><br><br>";
	}
if($P_DownLoad){
echo"<b>網頁式檔案下載：<a href=\"download.php\"><font color=\"99FFFF\">按我</font></a></b>";
}
if(!$P_Upload&&!$P_DownLoad){
echo"權限不足";
}*/
?>
</h2>
<!--
<p>如果您是要進入9909網路硬碟的資料夾，請在網址列輸入:ftp://114.34.3.33</p>
<P>P.S.記得要用檔案總管開啟，而不要用瀏覽器進入ftp，謝謝您的光臨！<br>
<h2>密碼為：-->
<?php
/*
if($CookieUser=="admin"||($CookieUser[0] == "9"&&$CookieUser[1] == "9"&&$CookieUser[2] == "0"&&$CookieUser[3] == "9")){echo "<b>52709</b>";}
else{echo"<b>你不是本班的人，無法查看密碼</b>";}
*/
?>
<!--</h2>
<P>
<img src="../pic/web/p1.jpg" height="380" >
<img src="../pic/web/p2.jpg" height="380" >
<img src="../pic/web/p3.jpg" height="380">
<img src="../pic/web/p4.jpg" height="380">
<img src="../pic/web/p5.jpg" height="380">
 -->
 </center>
</body>
</html>
