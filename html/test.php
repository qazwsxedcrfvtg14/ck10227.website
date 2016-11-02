<!DOCTYPE html>
 
    <html>
 
    <head>
 
<script type="text/javascript" src="../jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../jquery.easing.1.3.js"></script>
    </head>
 
    <body>
 <div id="serverData">HAHAHA</div>
<script type="text/javascript">
	function ref(){
		$.get("send_see", function(data) {
			document.getElementById("serverData").innerHTML = data;
			});
		//setTimeout('ref()', 10);
		}
 ref();
</script>
    </body>
 
    </html>
