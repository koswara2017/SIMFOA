<!DOCTYPE html>

<?php
  require_once('inc/admin_auth.php');
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Page Editing</title>
<link href="css/admin_css/site.css" rel="stylesheet">
<style>
body {
  font-family: 'Palatino Linotype', serif;
}

h1 {
  font-size: large;
  margin-top: 20px;
  margin-bottom: 1px;
}

iframe {
  width: 1000px;
  height: 250px;
}

button {
  padding: 3px;
}


#editedHTML {
  width: 1000px;
  height: 250px;
  border: darkgray 2px solid;
  overflow: scroll;
  overflow-x: hidden;
}
</style>
<script>
function startEdit() {
  // Turn on design mode in the <iframe>.
  var editor = document.getElementById("pageEditor");
  editor.contentWindow.document.designMode = "on";
}

function stopEdit() {
  // Turn off design mode in the <iframe>.
  var editor = document.getElementById("pageEditor");
  editor.contentWindow.document.designMode = "off";

  // Display the edited HTML (just to prove it's there).
  var htmlDisplay = document.getElementById("editedHTML");
  htmlDisplay.textContent =   editor.contentWindow.document.body.innerHTML;
}
</script>
</head>
<body>
<h1><font color=red>Editable Page (Edit After Pressing Start Button)</h1>
<iframe id="pageEditor" src="admin_home.php"></iframe>
<div>
  <button onclick="startEdit()">Start Editing</button>
  <button onclick="stopEdit()">Stop Editing</button>
</div>

<h1>Edited HTML (Display After Pressing Stop Button)</h1>
<div id="editedHTML"></div>
</body>
</html>