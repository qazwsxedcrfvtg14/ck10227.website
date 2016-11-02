<?php include("include.php"); ?><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Language" content="zh-tw">
  <title>變更音樂</title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>

<link rel="stylesheet" type="text/css" href="./BS.css">
 </head>
<body>
<form Action="set.php" Method="POST">
  <label>
	<table border="1">
        <tr><td><input type="radio" name="radio" id="mus" value="amz.flv" />奇異恩典(直笛)</td><td><input type="radio" name="radio" id="mus2" value="w16"/>
      Heal the world</td></tr>
        <tr><td><input type="radio" name="radio" id="mus" value="musics" />奇異恩典(海莉)</td><td><input type="radio" name="radio" id="mus3" value="w22"/>
        鏡中人</td></tr>
        <tr><td><input type="radio" name="radio" id="mus" value="friend.flv"/>朋友</td><td><input type="radio" name="radio" id="mus4" value="tel.flv"/>
        唸你</td></tr>        <tr><td><input type="radio" name="radio" id="mus" value="ch17_23"/>魯冰花</td><td><input type="radio" name="radio" id="mus5" value="birth"/>
          生日快樂!</td></tr>        <tr><td><input type="radio" name="radio" id="mus" value="ch21_20"/>我只在乎你</td><td><input type="radio" name="radio" id="mus6" value="that.flv" />
            那些年</td></tr> <tr><td><input type="radio" name="radio" id="mus" value="td"/>小叮噹</td><td><input type="radio" name="radio" id="mus7" value="si.flv" />
              賽德克巴萊</td></tr>
        <tr><td><input type="radio" name="radio" id="mus" value="radio"/>iradio</td>
        <td> <a href="http://www.bcc.com.tw/about/help.asp">使用方法</a></td></tr>
        <tr><td><input type="radio" name="radio" id="mus" value="ch21_27"/>龍的傳人</td>
        <td><input type="radio" name="radio" id="mus" value="nat.flv"/>國歌</td></tr>
        <tr><td><input type="radio" name="radio" id="mus" value="musp.xml"/>不知道會聽到啥</td>
        <td> p.s.如果已上傳，請把檔名寫在下面框框內，然後案確定</td></tr>
        
      <tr><td><input type="radio" name="radio" id="mus" value="no" />
      關閉</td><td><a href="html/m1">自己上傳：</a>
        <label>
          <input name="dadio" type="text" id="dadio" size="30">
        </label></td></tr>
  	</table>
  </label>
	<INPUT TYPE=SUBMIT VALUE="確定!">
</form>
<script type="text/javascript" src="http://tw.js.webmaster.yahoo.com/481638/ystat.js"></script><noscript><a href="http://tw.webmaster.yahoo.com"><img src=http://tw.img.webmaster.yahoo.com/481638/ystats.gif></a></noscript>
    
 </body>
</html>
