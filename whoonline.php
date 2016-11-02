<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>帳號清單</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
if(!$P_Who_Online){
	$err=1;	
	}
else{
  //$LineArray = file("IPs/list.txt");
  $LineArray = file("/tmp/ck10227list.txt");
    $HowManyLines = count($LineArray);
	$DY=intval(date(Y,time()+$webdb['correctiontime']));
	$DM=intval(date(n,time()+$webdb['correctiontime']));
	$DD=intval(date(d,time()+$webdb['correctiontime']));
	$Dm=intval(date(H,time()+$webdb['correctiontime']));
	$Di=intval(date(i,time()+$webdb['correctiontime']));
	$Ds=intval(date(s,time()+$webdb['correctiontime']));
	for ($i=0; $i<$HowManyLines; $i++){
      	$AllData = $LineArray[$i];
      	$Data_S = explode("@",$AllData);
		$Gap=0;
		$Gap+= $DY-intval($Data_S[2]);$Gap*=12;
		$Gap+= $DM-intval($Data_S[3]);$Gap*=31;
		$Gap+= $DD-intval($Data_S[4]);$Gap*=24;
		$Gap+= $Dm-intval($Data_S[5]);$Gap*=60;
		$Gap+= $Di-intval($Data_S[6]);$Gap*=60;
		$Gap+= $Ds-intval($Data_S[7]);
		echo "Who:".$Data_S[1]."<br>IP:".$Data_S[0]."<br>".$Data_S[2]."年".$Data_S[3]."月".$Data_S[4]."號".$Data_S[5]."點".$Data_S[6]."分".$Data_S[7]."秒<br><br>";
        $HowManyUser++;
    	}
	}
 if($err==1){echo"權限不足！";}
?>
<br><br><a href="index8.php">Back</a>
</html>


