<?php include("../../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>班級事務</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<script type="text/javascript">
   function resetIframeSize()
    {
    var a=document.body.clientHeight-65;
    	document.getElementById("look").style.height=a+"px";
    }
	window.onload=resetIframeSize;
	window.onresize=resetIframeSize
    </script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head><body>


<div style="position:absolute;margin:0;top:0px;left:0;width:100%;">
<iframe name="pic" src="class1.php" border="0" frameborder="0" width="100%">
您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
</iframe>
     </div>
<div style="position:absolute;margin:0;top:65px;left:0;width:100%;"><iframe  name="look" id="look" src="class2.php" border="0" frameborder="0" width="100%">
您的瀏覽器不支援內置框架或目前的設定為不顯示內置框架。
</iframe>
    </div>

</body>
</html>
