<?php include("../include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title><a href="html/cknews.php?page=<?php echo $page;?>" target="main">建中消息</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>


<link rel="stylesheet" type="text/css" href="./BS.css">
<style type="text/css">
a{
/*    color:#1C1C1C;*/
}
a:hover{
/*    color:#1C1C1C;*/
}
</style>
<frameset cols="*" framespacing="0" border="0">
  <frame src="<?php
if($fname!=""){
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
	$mytid=(int)$mytid;
    $dpid=(int)$dpid;
    $duid=(int)$duid;
    $dfn=(int)$dfn;
//$fname=EscapeShellCmd($fname);
	$fname=get_basename($fname);
  $fname=str_replace(";","", $fname);//#&;`|*?~<>^()[]{}$\, \x0A and \xFF
$fname=str_replace("#","", $fname);
$fname=str_replace("`","", $fname);
$fname=str_replace("|","", $fname);
if(!(@file_exists("../ckdata/".$fname))){
  exec("wget -t1 -N -O \"../ckdata/".$fname."\" \"http://web.ck.tp.edu.tw/ann/download.php?mytid=".$mytid."&dpid=".$dpid."&duid=".$duid."&dfn=".$dfn."\"");}
//echo "wget -t1 -N -O \"../ckdata/".$fname."\" \"http://web.ck.tp.edu.tw/ann/download.php?mytid=".$mytid."&dpid=".$dpid."&duid=".$duid."&dfn=".$dfn."\"";
//system("wget -t1 -N --trust-server-names \"http://web.ck.tp.edu.tw/ann/download.php?mytid=".$mytid."&dpid=".$dpid."&duid=".$duid."&dfn=".$dfn."\"");
//echo "yes";
$ext =explode('.',$fname);
			$eext=strtolower(end($ext));
if($eext=="doc"||$eext=="ppt"||$eext=="docx"||$eext=="pptx"||$eext=="xlsx"||$eext=="xls"){		$fil_url=urlencode("http://ck10227.twbbs.org/ckdata/".$fname);
              //echo "<td align=\"center\"><a href=\"javascript:void(0);\" onclick=\"show2('https://docs.google.com/viewer?url=".$fil_url."&embedded=true');\">檢視</a></td>";
              	echo "http://view.officeapps.live.com/op/view.aspx?src=".$fil_url."";
				}
          else if($eext=="zip"||$eext=="pdf"||$eext=="rar"){
				$fil_url=urlencode("http://ck10227.twbbs.org/ckdata/".$fname);
              echo "https://docs.google.com/viewer?url=".$fil_url."&embedded=true";
              	
          }
          else{
			$fil_url="http://ck10227.twbbs.org/ckdata/".$fname;
              echo $fil_url;
          }

}
?>">
</frameset>
 </head>
<body>
</body>
</html>
