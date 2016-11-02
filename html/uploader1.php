<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>網路硬碟</title>
 <script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
parent.document.getElementById('top_a1').href="html/upload.php";
parent.document.getElementById('top_bt1').className="top_bt";
parent.document.getElementById('top_bt1').innerHTML="網頁上傳";
parent.document.getElementById('top_a2').href="html/uploader1.php";
parent.document.getElementById('top_bt2').className="top_bt_on";
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
<style> 
	body{font-size:12px;}
	#box{width:350px; height:400px; overflow:hidden; margin:0 auto;}
	#drop {border: 10px dashed #ccc; width: 330px; height: 335px; margin: 10px auto;}
	#drop.hover { border: 10px dashed #333; }
	
	
	#status {
		position:relative;
		width: 350px;
		height: 25px;
		margin:0;
		text-align:left;
		line-height:25px;
		color:#fff;
		overflow:hidden;
	}
	#status_out {
		width: 350px;
		height: 25px;
		margin:0 auto;
		text-align:left;
		line-height:25px;
		color:#fff;
		background-color:#373C38;
	}
	
	.fail{background:red;}
	.success{background:#6C0;}
	
	#list {
		width: 210px;
		font-size: 10px;
		float: left;
		margin-left: 10px;
	}
	.addedIMG {
		width: 100px;
		height: 100px;
	}
</style> 
<script src="jquery.min-1.4.2.js"></script> 
<script src="html5uploader.js"></script>
<script>
	
</script> 

<link rel="stylesheet" type="text/css" href="./BS.css">
</head> 
 
<body onload="new uploader('drop', 'status', 'uploader.php', 'list');"> 
	<center></center><br>
	<div id="box"> 		 
		<div id="drop"></div> 		
	</div>
	<!--<center>
	<table><tr><td align="left" width="350" border="0">-->
	<div id="status_out">
    <div id="status">  此瀏覽器不支援拖拉上傳</div>
    </div>
	<!--</td></tr></table>-->
	<div id="list"></div> 
	<!--</center>-->

<!-- 偵測瀏覽是否支援拖拉上傳以及拖拉變框變色 -->  
<script language="javascript">
  var drop = document.getElementById('drop'),
   	  state = document.getElementById('status');

	if (typeof window.FileReader === 'undefined') {
	  state.className = 'fail';
	} else {
	  state.className = 'success';
	  state.innerHTML = '  拖拉上傳已啟動';
	}
	 
	drop.ondragover = function (){ this.className = 'hover'; return false; };
	drop.ondragend = function (){ this.className = ''; return false; };
	drop.ondragleave = function (){ this.className = ''; return false; };
  </script>  
</body> 
</html>
