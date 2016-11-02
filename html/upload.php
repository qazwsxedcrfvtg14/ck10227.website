<?php include("../include.php"); ?><html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="./BS.css">
  <title>網路硬碟</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/upload.php";
parent.document.getElementById('top_bt1').className="top_bt_on";
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
</head>
 <body><center>
  	<FORM METHOD="post" ACTION="upload2.php" enctype="multipart/form-data">
  		～ 檔案上傳系統 ～<HR align="center" width="50%">
    	請選擇要上傳的檔案：<INPUT TYPE="file" NAME="fupload" value="選取檔案"><br>
    	備註：<INPUT TYPE="text" NAME="bac" ><br><br>
        ##檔名最好全部為英文字母。<br>
    	<INPUT TYPE="submit" VALUE="立即上傳">檔案大會需要較久的時間，請耐心等待。
  	</FORM></center>
 </body>
</html>
