<?php include("../include.php"); ?><?php
if(!$P_Run_C)return ;
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><a href="crun/cppuser.php" target="main">C++執行器</a></title>
<script type='text/javascript'>
parent.document.getElementById('title').innerHTML=document.title;
</script>
<link rel="stylesheet" type="text/css" href="../BS.css">
<link rel=stylesheet href="../test/mdc/doc/docs.css">
<link rel="stylesheet" href="../test/cdm/lib/codemirror.css">
<script src="../test/cdm/lib/codemirror.js"></script>
<script src="../test/cdm/addon/fold/foldcode.js"></script>
<script src="../test/cdm/addon/fold/foldgutter.js"></script>
<script src="../test/cdm/addon/fold/brace-fold.js"></script>
<script src="../test/cdm/addon/fold/xml-fold.js"></script>
<script src="../test/cdm/addon/fold/comment-fold.js"></script>
<script src="../test/cdm/addon/edit/matchbrackets.js"></script>
<script src="../test/cdm/mode/javascript/javascript.js"></script>
<script src="../test/cdm/mode/xml/xml.js"></script>
<script src="../test/cdm/mode/css/css.js"></script>
<script src="../test/cdm/mode/htmlmixed/htmlmixed.js"></script>
<script src="../test/cdm/mode/clike/clike.js"></script>
<script src="../test/cdm/mode/php/php.js"></script>
<script src="../test/cdm/mode/vbscript/vbscript.js"></script>
<script src="../test/cdm/mode/shell/shell.js"></script>

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
<form method="post" action="crun.php">
<article>
	<textarea id="thing" name="thing" style="width: 100%;height: 55%"><?php
	echo htmlspecialchars(file_get_contents("main.cpp"));
	?></textarea><br>
	<textarea id="in" name="in" style="width: 100%;height: 35%"><?php
	echo htmlspecialchars(file_get_contents("in.txt"));
	?></textarea>
	</article><br>
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
    mode: "text/x-c++src",
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
