
<html> <head>
<meta http-equiv="Content-Type" content="text/html;charset=Big5">
<meta name="DC.Creator" content="Lu, Eric Jui-Lin">
<title>AJAX 入門：第二個範例</title>
<link rel="stylesheet" type="text/css" href="/jlu/css/handout.css">
</head>

<body>
<script type="text/javascript" language="javascript">
var mesg="";
  function makeRequest(url) {
    var http_request = false;

    if (window.XMLHttpRequest) { // IE7+, Chrome, Mozilla, Safari,...
      http_request = new XMLHttpRequest();
    } else if (window.ActiveXObject) { // IE
      try {
        http_request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
        try {
          http_request = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {}
      }
    }

    if (!http_request) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }

    http_request.onreadystatechange = function() {
                                      alertContents(http_request); };
    http_request.open('GET', url, true);
    http_request.send();
	setTimeout('makeRequest(\''+url+'\')',1000);
  }

  function alertContents(http_request) {
    if (http_request.readyState == 4) {
      var status = http_request.status;
      if(status == 200) {
		if(mesg!=http_request.responseText&&mesg!=""){
			//alert(http_request.responseText);
			}
		mesg = http_request.responseText;
        //alert(http_request.responseText);
        document.getElementById("taichung").innerHTML = mesg;
      } else {
        alert('There was a problem with the request.' + status);
      }
    }
  }
makeRequest('b.php');
//setTimeout('makeRequest(b.php)',1000);
</script>
<!--<div
    style="background-image: url(button.gif); background-repeat: no-repeat; font-size: 14px; width: 132px; height: 28px; padding: 5px 0 0 5px;"
    onclick="makeRequest('b.php')">
        取得台中行政區域
</div>-->
<div id="taichung"></div>
</body>
</html>

