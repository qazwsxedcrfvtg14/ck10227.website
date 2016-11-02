<?php include("../include.php"); ?><?php
function chk_dir($dir,$my_dir){
  	$dir=realpath($dir);
  if(strstr($dir,"public_edit_")!="")return 1;
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
if(chk_dir($file_src,$My_Dir)){
	$qual="High quality and size";
	$fil=strtoupper($fil);
  	$nofac=0;
	if($fil=="MP4"){
		$qual="AVC High quality and size";
		}
	else if($fil=="MP3"||$fil=="WMA"||$fil=="APE"||$fil=="FLAC"||$fil=="AAC"||$fil=="MMF"||$fil=="AMR"||$fil=="M4A"||$fil=="M4R"||$fil=="OGG"||$fil=="WAV"||$fil=="MP2"){
		$qual="High quality";
		}
	else if($fil=="JPG"||$fil=="PNG"||$fil=="ICO"||$fil=="BMP"||$fil=="TIF"||$fil=="PCX"||$fil=="TGA"){
		$qual="Original Size";
		}
	else if($fil=="GIF"){
		$qual="240p";
		}
	else if($fil=="FLV"){
		$qual="640x480";
		}
	else if($fil=="UNRAR"){
		$nofac=1;
      	$file=get_basename($file);
		$ext =explode('.',$file);
		$new_f=$ext[0];
      file_put_contents("../chang/queue",file_get_contents("../chang/queue")."unrar x \"$file_src/$file\" \"$file_src/$new_f/\"\nchmod 777 \"$file_src/$new_f\" -R",LOCK_EX);
		}
  /*else if($fil=="RAR"){
		$nofac=1;
      	$file=get_basename($file);
		$ext =explode('.',$file);
		$new_f=$ext[0].".".strtolower($fil);
      	file_put_contents("../chang/queue",file_get_contents("../chang/queue")."rar e \"$file_src/$file\" \"$file_src/$new_f\"\n",LOCK_EX);
		}*/
	else if($fil=="UNZIP"){
		$nofac=1;
		$file=get_basename($file);
		$ext =explode('.',$file);
		$new_f=$ext[0];
      	file_put_contents("../chang/queue",file_get_contents("../chang/queue")."unzip -d \"$file_src/$new_f\" \"$file_src/$file\"\nchmod 777 \"$file_src/$new_f\" -R\n",LOCK_EX);
		}
	else if($fil=="PDF"){
		$nofac=1;
		$file=get_basename($file);
		$ext =explode('.',$file);
		$new_f=$ext[0];
      	//echo "pdflatex --output-directory=\"".$file_src."/\" \"".$file_src."/".$file."\" > \"".$file_src."/".$new_f.".out\" &";
      	exec("pdflatex --output-directory=\"".$file_src."/\" \"".$file_src."/".$file."\" &");
		}
  	if($nofac==0){
		$file=get_basename($file);
		$ext =explode('.',$file);
		$new_f=$ext[0].".".strtolower($fil);
      file_put_contents("../chang/queue",file_get_contents("../chang/queue")."wine /var/www/joe59491/FormatFactory/FormatFactory.exe \"-> $fil\" \"$qual\" \"Z:$file_src/$file\" \"Z:$file_src/$new_f\"\n",LOCK_EX);}
//echo "wine /var/www/joe59491/FormatFactory/FormatFactory.exe \"-> $fil\" \"High quality and size\" \"$file_src/$file\" \"$file_src/$new_f\"";
	}
	//header("refresh:0;url=map.php?file_src=$file_src");
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>寫入中</title>
<script type='text/javascript'>
parent.hide();
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
?>
<br>
</html>
