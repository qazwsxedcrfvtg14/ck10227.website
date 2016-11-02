<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>學區查詢</title>
    <link rel="stylesheet" type="text/css" href="../BS.css" />
    <style type="text/css"></style>
  </head>
  <body>
    <center>
      <?php
function untag($ut){
  $ut=str_replace("*","",$ut);
  $ut=str_replace("&#29792;","瑠",$ut);
  $ex=explode("<",$ut);
  $ret="";
  foreach($ex as $tx){
    if(stripos($tx,">")!==false){
    	$tmp=explode(">",$tx);
      	$tx=($tmp[1]);
    	}
    if($tx!="")
      $ret.=trim($tx);
  }
  return $ret;
}
      $fil = fopen("school.txt","w");
        $stag=array("beitu","北投區",
      "shilin","士林區",
      "wanhua","萬華區",
      "wenshan","文山區",
      "nangang","南港區",
      "neihu","內湖區",
      "songshan","松山區",
      "datong","大同區",
      "zhongshan","中山區",
      "daan","大安區",
      "xinyi","信義區",
      "zhongzheng","中正區");
        $gov=array("http://www.tp.edu.tw/neighbor/tp_elementary/e_","http://www.tp.edu.tw/neighbor/tp_junior/j_");
        for($k=0;$k<2;$k++)
			for($i=1;$i<24;$i+=2){
				$curl = curl_init($gov[$k].$stag[$i-1].".jsp");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				$data=iconv("BIG5","UTF-8", curl_exec($curl));
				$now=0;
				while(1){
					$now=strpos($data,"<table width=\"85%\"  border=\"1\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" bordercolor=\"",$now);
					if($now===false)break;
					$nex=stripos($data,">",strpos($data,"</table",$now));
						  $fom=substr($data,$now/*+152*/,$nex-$now /*152*/ +8);
					$hre=stripos($fom,">",stripos($fom,"<a"))+1;
					fwrite($fil,substr($fom,$hre,trim(stripos($fom,"</a>",$hre)-$hre))."$");
                  	$hre=stripos($fom,"id=")+3;
					fwrite($fil,substr($fom,$hre,trim(stripos($fom,"\"",$hre)-$hre))."$");
					$now2=strpos($fom,"共同學區",0);
					$prnow=-999;
					while(1){
						$now2=stripos($fom,"<tr",$now2);
						if($now2===false)break;
						$now2=strpos($fom,">",strpos($fom,">",$now2)+1);
						$nex2=stripos($fom,"</td",$now2);
						$dt=substr($fom,$now2+1,$nex2-$now2-1);
						if($now2<=$prnow)break;
						$prnow=$now2;
						$now2=$nex2;
						fwrite($fil,untag(trim($dt))."$");
						$now2=strpos($fom,">",stripos($fom,"<td",$now2));
						$nex2=stripos($fom,"</td",$now2);
						$cls=trim(str_replace("鄰","", substr($fom,$now2+1,$nex2-$now2-1)));
						fwrite($fil,untag($cls)."$");
						}
					fwrite($fil,"\n");
					$now=$nex;
				}
			curl_close($curl);
			}
      ?>
    </center>
  </body>
</html>
