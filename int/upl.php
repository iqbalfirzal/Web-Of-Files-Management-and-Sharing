<?php
include "fltrall.php";
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style/lib/css/w3.css">
<link rel="stylesheet" href="../style/lib/css/google-font.css">
<link rel="stylesheet" href="../style/lib/css/cloudflare-font.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<link rel="stylesheet" href="../style/pace/pace.css">
<script src="../script/pace.min.js"></script>
<script type="text/javascript">
function ButtonClicked()
{
   document.getElementById("formsubmitbutton").style.display = "none";
   document.getElementById("buttonreplacement").style.display = "";
   return true;
}
var FirstLoading = true;
function RestoreSubmitButton()
{
   if( FirstLoading )
   {
      FirstLoading = false;
      return;
   }
   document.getElementById("formsubmitbutton").style.display = "";
   document.getElementById("buttonreplacement").style.display = "none";
}
</script>
</head>
<title>Unggah File</title>
<body class="w3-light-grey">
	<div class="w3-display-left w3-padding w3-col 16 m8">
		<div class="w3-container w3-white w3-padding-16">
			<form action="../upprcss" method="post" enctype="multipart/form-data">
			<div class="w3-row-padding" style="margin:0 -16px;">
				<h1>Unggah File</h1>
				<div class="w3-half w3-margin-bottom">
					<label>Pilih file untuk diunggah : </label>
					<input class="w3-input w3-border" name="brkse" type="file" required />
				</div>
			</div>
			<div id="formsubmitbutton">
				<input class="w3-btn w3-dark-grey" value="Unggah" type="submit" name="lebokke" onclick="ButtonClicked()" />
			</div>
			<div id="buttonreplacement" style="margin-left:10px; display:none;">
				<img src="../img/wait.gif" height="10%" width="10%" alt="loading...">
				<p>Please wait...<p>
			</div>
			</form>
			<a href='../'><img draggable="false" onmousedown="return false;" src='../img/back.png' align='left' height='100px'></a>
	</div>
</body>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>
</html>