<?php include("../include.php"); ?><?php
if((@file_exists("../user/".$code.".txt"))){
	$file = fopen("../user/".$code.".txt","r");
	$pass = fgets($file,1000) ;	
	$name = fgets($file,1000) ;	
	$mail = fgets($file,1000) ;
	$pas=trim($pass);
	$nam=trim($name);
	$mai=trim($mail);
	$title="password";
	$th="你的密碼為： <b>".$pas."</b>";




include("../PHPMailer/class.phpmailer.php"); //匯入PHPMailer類別 
$mail= new PHPMailer(); //建立新物件 
$mail->IsSMTP(); //設定使用SMTP方式寄信 
$mail->SMTPAuth = true; //設定SMTP需要驗證 
$mail->Host = "smtp.gmail.com"; //這裡填入剛剛從「伺服器位置」中所抄錄的SMTP主機位置 
$mail->Port = 465; //設定SMTP埠位，預設為25埠。 
$mail->SMTPSecure = "ssl";  
$mail->CharSet = "utf-8"; //設定郵件編碼 
$mail->Username = "ck102class27"; //設定驗證帳號，也就是「PChome的會員帳號」。 
$mail->Password = "joe59491"; //設定驗證密碼，也就是「PChome的會員密碼」。 
$mail->From = "ck102class27@gmail.com"; //設定寄件者信箱 
$mail->FromName = "建中科學班"; //設定寄件者姓名 
$mail->Subject = "查詢密碼"; //設定郵件標題 
$mail->Body =$th."<br><br><HR width=\"500px\"><br>此為系統發出，請勿回信"; //設定郵件內容 
$mail->IsHTML(true); //設定郵件內容為HTML 
$mail->AddAddress($mai, $nam); //設定收件者郵件及名稱
if(!$mail->Send()){
	echo "無法寄出: " . $mail->ErrorInfo ."<br>";
	}
else
	echo "信件已送出"; 
}
?>
<html>
 	<head>
  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  	<meta http-equiv="Content-Language" content="zh-tw">
		<link rel="stylesheet" type="text/css" href="./BS.css">
  	<title>查詢中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
 	</head>
	<body>
<center>
<br>
<?php if($p==1)echo"查無此帳！"; ?>
</center>
</body>
</html>
