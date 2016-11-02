<?php include("include.php"); ?><?php
  $err=0;
  if($err==0){
	  $q=0;
	  for($z=0;$z<100;$z++){
		  if($code[$z]==''){break;}
		  if(($code[$z]<'a'||$code[$z]>'z')&&($code[$z]<'0'||$code[$z]>'9')){$q=1;break;}
		  }
	  if($q){$err=5;}
	  else{
		  if($passss!=$passsss||$passss==""){$err=3;}
		  else{
			  if($code==""){$err=6;}
			  else{
				  if (!(@file_exists("user/".$code.".txt"))){
					$pasword=$passss;
					$whoare=$code;
					$fname=$name;
					}
				  else{$err=4;}
				  }
			  }
		  }
	  }
  else{$err=1;}
  
  if($err==0){
		$name=urlencode(authcode($name,'ENCODE'));
		$pass=urlencode(authcode($pasword,'ENCODE'));
		$to=$email;
		$email=urlencode(authcode($email,'ENCODE'));
		$code=urlencode(authcode($code,'ENCODE'));
		$sethref="http://ck10227.twbbs.org/setpass.php?name=$name&code=$code&pass=$pass&email=$email";
		//$mes="請按連結來確定註冊:<a href=\"".$sethref."\">".$sethref."</a><br><table><tr><td>您的帳號：</td><td>".$whoare."</td></tr><tr><td>您的密碼：</td><td>".$pasword."</td></tr></table>";
		$mes="請按連結來確定註冊:<a href=\"".$sethref."\">".$sethref."</a><br>";
		include("PHPMailer/class.phpmailer.php"); //匯入PHPMailer類別 
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
		$mail->Subject = "密碼確認信"; //設定郵件標題 
		$mail->Body =$mes."<br><br><HR width=\"500px\"><br>此為系統發出，請勿回信"; //設定郵件內容 
		$mail->IsHTML(true); //設定郵件內容為HTML 
		$to=trim($to);
		$towho = explode(",",$to);
		for($i=0;;$i++){
			if($towho[$i]=="")break;
			$mail->AddAddress($towho[$i],"You"); //設定收件者郵件及名稱 
			}
		if(!$mail->Send()){
			$err=7;
			$ercode="信件無法寄出: " . $mail->ErrorInfo ."<br>";
			}
		}
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>註冊中</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>
<?php
  if($err==0){echo"現在已經寄信出去了，請收信來確定註冊。";}
  if($err==3){echo"你密碼跟確認密碼不一或密碼為空！";}
  if($err==4){echo"已有此帳號！?";}
  if($err==5){echo"帳號不符合規定（全英文小寫和數字）！";}
  if($err==6){echo"暱稱不可為空！";}
  if($err==7){echo $ercode;}
?>
<a href="http://tw.webmaster.yahoo.com"><br>
<br>
<img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
</html>


