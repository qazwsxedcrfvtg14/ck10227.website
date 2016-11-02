<html>
    <head>
        <meta name="generator"
        content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>學區查詢</title>
        <link rel="stylesheet" type="text/css" href="../BS.css" />
        <style type="text/css"></style>
        <!-- Include Google Maps API (Google Maps API v3 已不需使用 API Key) -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <!-- Require jQuery v1.7.0 or newer -->
        <script type="text/javascript" src="/jquery-1.9.1.min.js"></script>
        <script src="jquery.tinyMap-2.9.9.min.js"></script>
    </head>
    <body>
        <center><font size="5">
            <?php
            $toURL = "http://www.houseno.tcg.gov.tw/ASP_FRONT_END/main_.asp";
            $post = $_POST;
            //echo http_build_query($post);
            $arr= array("ttrarea","ttrshi","ttrlo","ttrtemp","ttrnum","ttrg");
            foreach ($arr as $val) {
                    $post[$val]=str_replace ("0","０", $post[$val]); 
                    $post[$val]=str_replace ("1","１", $post[$val]); 
                    $post[$val]=str_replace ("2","２", $post[$val]); 
                    $post[$val]=str_replace ("3","３", $post[$val]); 
                    $post[$val]=str_replace ("4","４", $post[$val]); 
                    $post[$val]=str_replace ("5","５", $post[$val]); 
                    $post[$val]=str_replace ("6","６", $post[$val]); 
                    $post[$val]=str_replace ("7","７", $post[$val]); 
                    $post[$val]=str_replace ("8","８", $post[$val]); 
                    $post[$val]=str_replace ("9","９", $post[$val]); 
            }
            $post["ttrstreet"]=str_replace ("舘前","館前", $post["ttrstreet"]); 
            $post["ttrstreet"]=str_replace ("温州","溫州", $post["ttrstreet"]); 
            $post["ttrstreet"]=str_replace ("廈","厦", $post["ttrstreet"]); 
            $post["ttrstreet"]=str_replace ("貓","猫", $post["ttrstreet"]); 
            $post["ttrstreet"]=str_replace ("恒","恆", $post["ttrstreet"]); 
            //echo "ttrstyle=2&yy=103&mm=10&dd=21&s_yy=&s_mm=&s_dd=&e_yy=&e_mm=&e_dd=&ttrarea=&ttrstreet=%E4%B8%AD%E5%B1%B1%E5%8C%97%E8%B7%AF&ttrsection=%E4%B8%89&ttrshi=&ttrlo=&ttrtemp=&ttrnum=%EF%BC%93%EF%BC%99&ttrfloor=%E5%8D%81%E4%BA%8C&ttrg=%EF%BC%91&ttryear=&ttrmonth=&ttrday=&ettryear=&ettrmonth=&ettrday=";
            //return 0;
            $ch = curl_init();
            $options = array(
              CURLOPT_URL=>$toURL,
              CURLOPT_HEADER=>0,
              CURLOPT_VERBOSE=>0,
              CURLOPT_RETURNTRANSFER=>true,
              CURLOPT_USERAGENT=>"Mozilla/4.0 (compatible;)",
              CURLOPT_POST=>true,
              CURLOPT_POSTFIELDS=>http_build_query($post),
            );
            curl_setopt_array($ch, $options);
            // CURLOPT_RETURNTRANSFER=true 會傳回網頁回應,
            // false 時只回傳成功與否
            $result = curl_exec($ch); 
            //echo $result;
            curl_close($ch);
            //return 0;

            $start=strpos($result,"<font color=\"#880000\">",0);
            if($start===false){
            echo "查無資料";//.http_build_query($post).$result;    
            return 0;       
            }
            else{
                    //echo substr($result,$start,strpos($result,"</font>",strpos($result,"</font>",strpos($result,"</font>",strpos($result,"</font>",$start+22)+22)+22)+22)-$start+99);
                    $next=strpos($result,"</font>",$start);
                    //echo substr($result,$start+22,$next-$start-22)."<br>";
              $data1=substr($result,$start+22,$next-$start-22);
              $start=strpos($result,"<font color=",$start+22);
                    $next=strpos($result,"</font>",$start);
                    //echo substr($result,$start+22,$next-$start-22)."<br>";
              $data2=str_replace("里","", substr($result,$start+22,$next-$start-22));;
              $start=strpos($result,"<font color=",$start+22);
                    $next=strpos($result,"</font>",$start);
                    //echo substr($result,$start+22,$next-$start-22)."<br>";
              $data3=(int)str_replace("鄰","", substr($result,$start+22,$next-$start-22));;
              $start=strpos($result,"<font color=",$start+22);
                    $next=strpos($result,"</font>",$start);
                    //echo substr($result,$start+22,$next-$start-22)."<br>";
              $data4=substr($result,$start+22,$next-$start-22);
              echo "查詢之地址:".$data4."<br>位於".$data1.$data2."里".$data3."鄰<br>且屬於以下學校的學區:<br>";
			  
			  
			$fil=fopen("school.txt","r");
			while(1){
				$sch=trim(fgets($fil,1000));
				if(feof($fil))break;
				$sc=explode("$",$sch);
				$sz=count($sc);
				$ok=0;
				for($i=2;$i<$sz&&(!$ok);$i+=2){
					if(strpos($sc[$i],$data2,0)!==false){
						if(strpos($sc[$i+1],"全部")!==false)$ok=1;
                        else{
                            $epa=explode("、",$sc[$i+1]);
							foreach($epa as $rng){
								$ep=explode("-",$rng);
								if(count($ep)==1){
                                    if((int)$ep[0]==$data3)$ok=1;
                                }
								if(count($ep)==2){
                                    if((int)$ep[0]<=$data3&&(int)$ep[1]>=$data3)$ok=1;
                                }
                            }
                        }
					}
				}
				if($ok){
					echo "<a href=\"http://www.tp.edu.tw/neighbor/school_detail.jsp?id=".$sc[1]."\">".$sc[0]."</a><br>";
				}
			}
		}
        ?></font>
            <div id="map-google" style="width:500px;height:500px;"></div>
            <script>
                    
                    
                    $('#map-google').tinyMap({
                      center: '台北市<?php echo $data4; ?>',
                      zoom: 13,
    marker: [
        {
            addr: '台北市<?php echo $data4; ?>',
            text: '台北市<?php echo $data4; ?>',
                lable: '台北市<?php echo $data4; ?>',
            // 自訂圖示
            icon: {
                url: 'mapicon.png',
                size: [128, 128]
            },
            loading: '地圖載入中...',
            // 動畫效果
            animation: 'DROP|BOUNCE'
        },
      <?php
//foreach($school as $sch){
//echo "{addr: '台北市".$sch."', text: '".$sch."'},";
//}
                ?>
    ]
});
//若需顯示大量 marker ，建議以陣列方式傳入經緯座標，避免無法一次全部顯示。
/*$('#map').tinyMap({
    marker: [
        {addr: ['25.037467', '121.564077'], text: '台北市政府'},
        {addr: ['25.100295', '121.549494'], text: '國立故宮博物院'}
    ]
});
                    
                    
                    var fir=true;
                    $('#map-google').tinyMap({
                      center: '台北市<?php echo $data4; ?>',
                      zoom: 16,
                      scrollwheel: false,
                      //disableDefaultUI: true,
                      loading: '地圖載入中...',
                      marker: [{
                        addr: '台北市<?php echo $data4; ?>',
                        icon: 'mapicon.png',
                      }],
                    });*/

                  
</script>
        </center>
    </body>
</html>
