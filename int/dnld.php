<html>
<title>Kelola File Anda</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style/lib/css/w3.css">
<link rel="stylesheet" href="../style/lib/css/google-font.css">
<link rel="stylesheet" href="../style/lib/css/cloudflare-font.css">
<link rel="stylesheet" href="../style/table/view.css">
<link rel="stylesheet" href="../style/switch/view.css">
<link rel="stylesheet" href="../style/pace/pace.css">
<script src="../script/jquery.js" type="text/javascript"></script>
<script src="../script/pace.min.js" type="text/javascript"></script>
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<div id="main"/>
<header class="w3-container w3-padding-8 w3-center w3-opacity w3-margin-bottom">
  <div class="w3-clear"></div>
  <p><b>Ini Daftar File Anda</b></p>
</header>
<body background="../img/bg.png" style="background-repeat:no-repeat;background-position:top;">
<?php
	include "fltrall.php";
	include "db.php";
	$umpetke_berkas = array('index.php','share.php');
	$umpetke_ext   = array('php, html');
	$usr=$_SESSION['pengguna'];
	$usrfltr = str_replace(' ', '_', $usr);
	$dir="../dt/$usrfltr/";
	$dh=opendir($dir) or die ('error');
	$no=1;
    echo "<table class='responsive-stacked-table'>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." && !in_array($file, $umpetke_berkas) && !in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
			$kata = "$file";
			$basedata = mysql_fetch_assoc( mysql_query("SELECT * FROM files WHERE user='$usrfltr' AND filename='$file'") );
			$cekiki = $basedata['protect'];
			$shortlink = $basedata['shortlink'];
			$en = base64_encode($kata);
			if ($cekiki=='1') {$privupdt = "<input type='checkbox' name='privpateni' onclick='this.form.submit();' checked/>";} else {$privupdt = "<input type='checkbox' name='privurepke' onclick='this.form.submit();' />";}
			if($_POST['privpateni'])
			{header ("location:privateupdate.php?switchto=2&filename=$file");}else if($_POST['privurepke']){header ("location:privateupdate.php?switchto=1&filename=$file");}
			echo"<thead><tr><th scope='col'>No.</th><th scope='col'>Nama File</th><th scope='col'>Link Unduhan</th><th scope='col'>Private</th><th scope='col'>Hapus</th></tr></thead><tbody><tr><td scope='row' data-label='No.'>$no</td><td data-label='Nama File' style='text-align:middle;'><text onclick=window.location.href='../download?owner=$usrfltr&file=$en'>$file</text></td><td data-label='Link Unduhan'><input type='text' onclick='this.focus();this.select();' value='http://bagiin.ga/$shortlink' readonly/></td><td data-label='Private'><label class='switch'><form method='post' action=''>$privupdt<span class='slider round'></span></label></td><td data-label='Hapus'><a href='../dl?del=$file'><img src='../img/delete.png' height='40px'></a></td></tr></tbody>";
			$no++;
		}
	}
    echo"</table>";
	echo"<p><b># Keterangan :</b> Private file berfungsi untuk mengunci file agar hanya Anda yang dapat mengakses & mengunduhnya.</p>";
	closedir($dh);
?>
</body>
<a href='../'><img draggable="false" onmousedown="return false;" src='../img/back.png' align='left' height='100px'></a>
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
	<i class="fa fa-facebook-official w3-hover-text-indigo" onclick="window.location.href='http://facebook.com/megonorom'"></i>
	<p>&copy;2017, Megono Development Co Ltd.</p>
</footer>
</html>