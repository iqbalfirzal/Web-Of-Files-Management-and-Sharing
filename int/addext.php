<?php
include "fltrall.php";
$myFile="extention.txt";
if(isset($_POST['fileWrite']) && !empty($_POST['fileWrite'])) {
      $fileWrite=$_POST['fileWrite'];
	  $tanggal=date("l Y-m-d");
	  $wonge=$_POST['orangNya'];
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
<title>Suggesting Extention</title>
<body>
<form name="adext" method="post" action="">
   <input type="text" placeholder="Ekstensi file (Nama-file.iniekstenisi)" value="" name="fileWrite"/>
   <input type="hidden" value="<?php print $_SESSION[pengguna]; ?>" name="orangNya"/>
   <input type="submit" value="Sarankan"/>
</form>
</body>
<footer>
<a href='../'><img draggable="false" onmousedown="return false;" src='../img/back.png' align='left' height='100px'></a>
</footer>
</html>