<?php include("../include.php"); ?><?php
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
if($P_Cloud)
if(chk_dir($file_src,$My_Dir)){
  		$nam=get_basename($nam);
  		if($nam!=""){
          	echo"~~~";
          if(false !== ($rst = strpos($thing,"/file/"))) {
              	//echo 'find : '.$rst; // 印出 find : 6
              	$thi=substr($thing,$rst);
            
            
            exec("axel -n 5 -o \"".$file_src."/".$nam."\" \"http://d.pcs.baidu.com$thi\"" . " > \"".$file_src."/".$nam.".axel\" &");
            //exec("axel -n 5 -o \"".$file_src."/".$nam."\" \"http://hot.cdn.baidupcs.com$thi\"" . " > \"".$file_src."/".$nam.".axel\" &");
              	//return;
            	}
          if(false !== ($rst = strpos($thing,"qvod://"))) {
            	
              $thi=substr($thing,strpos($thing,"|")+1);
              $thi=str_replace("|","",$thi);
            //echo "\"$file_src/".$nam."_".$thi.".exe\"";
            file_put_contents("../chang/queue",file_get_contents("../chang/queue")."cp \"/var/www/joe59491/test/qvod.exe\" \"$file_src/".$nam."_".$thi.".exe\"\n",LOCK_EX);
      file_put_contents("../chang/queue",file_get_contents("../chang/queue")."wine \"$file_src/".$nam."_".$thi.".exe\"\n",LOCK_EX);
            file_put_contents("../chang/queue",file_get_contents("../chang/queue")."rm \"$file_src/".$nam."_".$thi.".exe\"\n",LOCK_EX);
          	}
          	else{
              	exec("axel -n 10 -o \"".$file_src."/".$nam."\" \"$thing\"" . " > \"".$file_src."/".$nam.".axel\" &");
				}
        		
          	}
          //exec("wget -c -O \"".$file_src."/".$nam."\" \"$thing\"" . " > /dev/null &");
		else
          return;
          //exec("wget -c --trust-server-names -P \"".$file_src."\" \"$thing\"" . " > /dev/null &");
		
		//exec("wget -t1 -O \"$nam\" \"$thing\"");
		}
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>寫入中</title>
<script type='text/javascript'>
  parent.hide();
//parent.reload();
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
</p>
<br>
</body>
</html>


