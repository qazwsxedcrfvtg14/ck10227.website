<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>結果</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
</head>
<body>
<center>
<?php
function get_basename($filename){
    return preg_replace('/^.+[\\\\\\/]/', '',rtrim($filename, '/'));
	}
function utf8_str_split($str, $split_len = 1)
{
    if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
        return FALSE;
 
    $len = mb_strlen($str, 'UTF-8');
    if ($len <= $split_len)
        return array($str);
 
    preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);
 
    return $ar[0];
}
if($P_Little_Talk){	
  $tal=utf8_str_split($pid,8);
$user=get_basename($user);
if((@file_exists("../user/".$user.".txt"))){
  $mesg="<p name=\"bt\" id=\"bt\" class=\"bt\">　送出者：<br>　　$WhoUser<br>　內容：";
  $many=count($tal);
  for($i=0;$i<$many;$i++){
  	$mesg.="<br>　　".$tal[$i];
  }
  file_put_contents("../judge/userdata/$user",$mesg."</p>".file_get_contents("../judge/userdata/$user"),LOCK_EX);
  echo "成功!";
  //echo "../judge/userdata/$user";
  //echo $mesg."</p>".file_get_contents("../judge/userdata/$user");
	}
  else{
  echo "查無使用者!";
  }
}
else{
echo "權限不足!";
}
?>
  <br><br>
  <a href="st.php">Back</a>
</center>
<br>
<br>
<p></body>
</html>