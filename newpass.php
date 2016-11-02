<?php include("include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>註冊會員</title><script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
</head>
<body>
<p>

<?php if($CookieUser!=""){echo"你已經有帳號了!";return; }?>

<form name="form1" method="post" action="set_pass.php">
  　　　　　　帳　　號：
  <input name="code" type="text" id="code" size="10">（需全英文小寫和數字）<br>
<br>
  　　　　　　密　　碼：<input name="passss" type="password" id="passss" size="10"><br><br>
  　　　　　　密碼確認：<input name="passsss" type="password" id="passsss" size="10"><br><br>
  　　　　　　電子郵件：<input name="email" type="text" id="email" size="20"><br><br>
  　　　　　　暱　　稱：<input name="name" type="text" id="name" size="10">
  <strong>請勿亂寫，違者砍帳！</strong><br><br>
  　　　　　　(如果為科學班同學，請使用夢駝林的帳號(密碼任意)，不然會沒有權限)<br><br><br>
  　　　　　　<input type="submit" name="button" id="button" value="送出">(按下按鈕後會寄一封信到信箱去，請等一下，約20秒鐘)
</form>
</body>
</html>
