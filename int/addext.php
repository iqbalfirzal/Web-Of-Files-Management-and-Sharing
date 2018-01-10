<?php
include "fltrall.php";
$myFile="extention.txt";
if(isset($_POST['manjiengne']) and !empty($_POST['manjiengne'])) {
      $fileWrite=$_POST['manjiengne'];
	  $tanggal=date("l Y-m-d");
	  $wonge=$_POST['wuonge'];
	  $isi="$fileWrite - $tanggal by $wonge ||" ;
}
if($fileWrite) {
    $fh=fopen($myFile, 'a') or die("can't open file");
    fwrite($fh, $isi);
    fclose($fh);
	echo	"<script language='JavaScript'>
				alert('Berhasil disarankan, konfirmasi penambahan saran ekstensi dari Anda akan dikirim ke email Anda yang digunakan untuk mendaftar akun di web ini')
				window.location = '../index.html';
			</script>";
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style/lib/css/w3.css">
<link rel="stylesheet" href="../style/lib/css/google-font.css">
<link rel="stylesheet" href="../style/lib/css/cloudflare-font.css">
<style>body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}</style>
<link rel="stylesheet" href="../style/pace/pace.css">
<script src="../script/pace.min.js"></script>
</head>
<title>Suggesting Extention</title>
<body class="w3-light-grey">
	<div class="w3-display-left w3-padding w3-col 16 m8"/>
	<div class="w3-container w3-white w3-padding-16">
		<h1>Sarankan Ekstensi File</h1>
		<p><b>Silahkan masukkan format ekstensi (contoh : file.jpg, maka masukkan jpg)</b></p>
		<form name="adext" method="post" action="">
		   <input type="text" placeholder="isi sini" value="" name="manjiengne"/>
		   <input type="hidden" value="<?php print $_SESSION[pengguna]; ?>" name="wuonge"/>
		   <input type="submit" value="Sarankan"/>
		</form>
	</div>
</body>
<footer><p>&copy;2017, Megono Development Co Ltd.</p><a href='../'><img draggable="false" onmousedown="return false;" src='../img/back.png' align='left' height='100px'></a></footer>
</html>