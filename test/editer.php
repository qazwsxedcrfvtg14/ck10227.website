<?php include("../include.php"); ?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>編輯器</title>
<link rel="stylesheet" type="text/css" href="../BS.css">
<!--<link rel=stylesheet href="cdm4-1/doc/docs.css">-->
<link rel="stylesheet" href="cdm4-1/lib/codemirror.css">
<script src="cdm4-1/lib/codemirror.js"></script>
<script src="cdm4-1/addon/fold/foldcode.js"></script>
<script src="cdm4-1/addon/fold/foldgutter.js"></script>
<script src="cdm4-1/addon/fold/brace-fold.js"></script>
<script src="cdm4-1/addon/fold/xml-fold.js"></script>
<script src="cdm4-1/addon/fold/comment-fold.js"></script>
<script src="cdm4-1/addon/edit/matchbrackets.js"></script>
<script src="cdm4-1/mode/javascript/javascript.js"></script>
<script src="cdm4-1/mode/xml/xml.js"></script>
<script src="cdm4-1/mode/css/css.js"></script>
<script src="cdm4-1/mode/htmlmixed/htmlmixed.js"></script>
<script src="cdm4-1/mode/clike/clike.js"></script>
<script src="cdm4-1/mode/php/php.js"></script>
<script src="cdm4-1/mode/python/python.js"></script>
<script src="cdm4-1/mode/vbscript/vbscript.js"></script>
<script src="cdm4-1/mode/shell/shell.js"></script>
<style>
.CodeMirror {height:85%;border-top: 1px solid black; border-bottom: 1px solid black;}
      .CodeMirror-foldmarker {
        color: blue;
        text-shadow: #b9f 1px 1px 2px, #b9f -1px -1px 2px, #b9f 1px -1px 2px, #b9f -1px 1px 2px;
        font-family: arial;
        line-height: .3;
        cursor: pointer;
      }
      .CodeMirror-foldgutter {
        width: .7em;
      }
      .CodeMirror-foldgutter-open,
      .CodeMirror-foldgutter-folded {
        color: #555;
        cursor: pointer;
      }
      .CodeMirror-foldgutter-open:after {
        content: "\25BE";
      }
      .CodeMirror-foldgutter-folded:after {
        content: "\25B8";
      }
</style>
</head>
<body>
<form method="post" action="write.php?file=<?php echo urlencode($file);?>&file_src=<?php echo urlencode($file_src);?>">
<article>
	<textarea id="thing" name="thing" style="width: 100%;height: 85%"><?php
function chk_dir($dir,$my_dir){
	if($P_Back_Edit)return 1;
	$dir=realpath($dir);
  if(strstr($dir,"public_edit_")!="")return 1;
	if($my_dir=="")return 0;
	for($a=0;;$a++){
		if($my_dir[$a]=="")break;
		if($my_dir[$a]!=$dir[$a])return 0;
		}
	return 1;
	}
if(chk_dir($file,$My_Dir))
echo htmlspecialchars(file_get_contents($file));
?></textarea></article><br>
	<INPUT TYPE=SUBMIT VALUE="送出!">
</form>
<script id="script">
      // Define an extended mixed-mode that understands vbscript and
      // leaves mustache/handlebars embedded templates in html mode
/*      var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                       mode: null},
                      {matches: /(text|application)\/(x-)?vb(a|script)/i,
                       mode: "vbscript"}]
      };
      var editor = CodeMirror.fromTextArea(document.getElementById("thing"), {mode: mixedMode, tabMode: "indent"});*/
window.onload = function() {
  var te = document.getElementById("thing");
  var sc = document.getElementById("script");
  //te.value = (sc.textContent || sc.innerText || sc.innerHTML).replace(/^\s*/, "");
  sc.innerHTML = "";
window.editor_html = CodeMirror.fromTextArea(te, {
    mode: "<?php
$ext =explode('.',$file);
$eext=strtolower(end($ext));
if($eext=="js"){echo"javascript";}
else if($eext=="php"){echo"application/x-httpd-php";}
else if($eext=="html"||$eext=="htm"){echo"text/html";}
else if($eext=="css"){echo"text/css";}
else if($eext=="c"){echo"text/x-csrc";}
else if($eext=="cpp"){echo"text/x-c++src";}
else if($eext=="sh"){echo"text/x-sh";}
else if($eext=="py"){echo"text/x-python";}
else{echo"text";}
?>",
    lineNumbers: true,
    lineWrapping: true,
    extraKeys: {"Ctrl-Q": function(cm){ cm.foldCode(cm.getCursor()); }},
    foldGutter: true,
    gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"]
  });
};
    </script>
</body>
</html>

