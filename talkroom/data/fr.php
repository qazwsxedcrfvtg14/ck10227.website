<?php include("../../include.php"); ?><html>
<head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
<title>Talk</title>
<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css"> 
<!--
body { 
  background-color:#2C2C2C;
}
-->
</style>
<style>
html { 
overflow-y:hidden;
/*white-space:nowrap; */
/*word-break:break-all;*/
}
</style>
  <script>
function resize(){
if (document.body.scrollWidth>(screen.width-1024+600)){
	parent.document.getElementById("frame<?php echo $idd2;?>").height=document.body.scrollHeight;
	}
else{
	parent.document.getElementById("frame<?php echo $idd2;?>").height=document.body.scrollHeight-12;
	}
}
window.onresize=resize;
</script>
</head>
<body onload="resize();">

<?php	
if(!(@file_exists("list.txt"))){
	echo "查無對話";
	}
else{

	$fileopen = fopen("list.txt","r");
	for($a=0;$a<=$room;$a++){
		$roo=fgets($fileopen,1000) ;
		}
	$ro=trim($roo);
	fclose($fileopen);
	if(!(@file_exists("power/power/".$ro.".txt"))){$This_power=100;}
	else{
		$Fil=file("power/power/".$ro.".txt");
		$This_power=(int)($Fil[0]);
		}
	if($P_Talk_Level<$This_power){
		echo"權限不足！";return;
		}
	//if(!$P_See_Talk){echo"權限不足！";return;}
	if(!(@file_exists($ro."/data/".$idd2.".txt"))){
		echo "查無對話".$ro."/data/".$idd2.".txt";
		}
	else{
		$i=trim($idd2);
		$fileopen = fopen($ro."/data/".$i.".txt","r");
		$talk = fgets($fileopen,1000);
		$talk = fgets($fileopen,1000);
		$talk = fread($fileopen,10000000) ;
		echo str_replace("script","s c r i p t",$talk);
		fclose($fileopen);
		}
	}
?>
</body>
</html>
