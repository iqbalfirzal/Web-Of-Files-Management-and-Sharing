<?php
include "int/fltrfrst.php";
?>
<html>
<title>Free Data File Host</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<link rel="stylesheet" href="style/banner/view.css">
<link rel="stylesheet" href="style/dialog/view.css">
<link rel="stylesheet" href="style/homealert/view.css">
<link rel="stylesheet" href="style/pace/pace.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<style>
body{
background: #ffffff url("img/bg.png") no-repeat fixed top;
}
</style>
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/dialog.js"></script>
<script type="text/javascript" src="script/homealert.js"></script>
<script src="script/pace.min.js"></script>
<body>
<div id="main">
<nav class="w3-sidenav w3-black w3-animate-top w3-center w3-xxlarge" style="display:none;padding-top:150px" id="mySidenav">
  <a href="javascript:void(0)" onclick="nav_close()" class="w3-closenav w3-jumbo w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="dt/shared_" class="w3-text-grey w3-hover-black">File Publik</a>
  <a href="mailto:megonodev@gmail.com" class="w3-text-grey w3-hover-black">Hubungi Admin</a>
</nav>
<div class="w3-content" style="max-width:1500px">
<header class="w3-container w3-padding-32 w3-center w3-opacity w3-margin-bottom">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" onclick="nav_open()"><i class="fa fa-bars"></i></span> 
  <div class="w3-clear"></div>
  <h1><b>Free Data File Host</b></h1>
  <p><b>Selamat Datang <?php print $_SESSION['pengguna'] ?></b></p>
  <p class="w3-padding-16"><button id="myBtn" class="banner bannerborder" onclick="window.location.href='#'"><img src="gtbnnr.php?usr=<?php print $_SESSION['pengguna']; ?>" onerror="this.src='img/logo.png'" height="auto" width="100%" /></button></p>
	<?php
		include "int/db.php";
		$singnganggo = $_SESSION['pengguna'];
		$query = mysql_query("SELECT status FROM shareall WHERE user='$singnganggo'");
		while ($row = mysql_fetch_assoc($query)) {
			$cekiki = $row['status'];
			if ($cekiki == "1") {
			   echo "<b> Link Berbagi Semua File Anda Dibuka Untuk Publik</b><p class='w3-padding-16'><form method='post' action=''><input class='w3-btn' type='submit' name='pateni' value='Tutup Link Berbagi Semua File'/></form></p>";
			}elseif ($cekiki == "0") {
			   echo "<b>Link Berbagi Semua File Anda Ditutup Untuk Publik</b><p class='w3-padding-16'><form method='post' action=''><input class='w3-btn' type='submit' name='uripke' value='Buka Link Berbagi Semua File'/></form></p>";
			}else{
				echo "database error";
			}
		}    
	?>
  <div id="dialog-overlay"></div>
  <div id="dialog-box">
	<div class="dialog-content">
		<div id="dialog-message"></div>
		<a class="button">Oke</a>
	</div>
  </div>
  <a href="javascript:popup('<p>Jika link berbagi semua file dibuka maka semua orang dapat melihat semua file Anda melalui link bawaan setiap pengguna. contoh : http://bagiin.ga/data/username_anda/share.</p><p>Sebaliknya jika ditutup maka hanya Anda yang dapat membuka link berisi semua file Anda.</p>')"><img draggable="false" onmousedown="return false;" src='img/help.png' width='50px' height='50px' /></a>
  <div id="alertoverlay">
	<div id="alertbox">
		<div id="alertboxhead"></div>
		<div id="alertboxbody"></div>
		<div id="alertboxfoot"></div>
	</div>
  </div>
	<?php
		require_once "script/lib/mobile-detect/Mobile_Detect.php";
		$detect = new Mobile_Detect();
		if($_POST['pateni'])
		{
			mysql_query("UPDATE shareall SET status='0' WHERE user='$singnganggo'");
			if ($detect->isMobile()){
				echo "<script language='JavaScript'>
						alert('Berhasil Ditutup')
						window.location = 'index.html';
					</script>";
			}
			else{
				echo "<script language='JavaScript'>
					Alert.render('Berhasl Ditutup');
				</script>";
			}
		}
		else if($_POST['uripke'])
		{
			mysql_query("UPDATE shareall SET status='1' WHERE user='$singnganggo'");
			if ($detect->isMobile()){
				echo "<script language='JavaScript'>
						alert('Berhasil Dibuka')
						window.location = 'index.html';
					</script>";
			}
			else{
				echo "<script language='JavaScript'>
					Alert.render('Berhasl Dibuka');
				</script>";
			}
		}
	?>
  <p class="w3-padding-16"><button class="w3-btn" onclick="window.location.href='int/lgot'">Keluar</button></p>
</header>
</div>
<div class="w3-row" id="myGrid" style="margin-bottom:128px">
  <div class="w3-third">
    <img draggable="false" onmousedown="return false;" src="img/upload.png" onclick="window.location.href='int/upl'" align="middle" style="width:100%;">
	<br></br>
	<p style="text-align:center;" onclick="window.location.href='int/upl'">Unggah File</p>
  </div>
  <div class="w3-third">
    <img draggable="false" onmousedown="return false;" src="img/manage.png" onclick="window.location.href='int/dnld'" align="middle" style="width:100%">
	<br></br>
	<p style="text-align:center;" onclick="window.location.href='int/dnld'">Kelola File</p>
  </div>
  <div class="w3-third">
    <img draggable="false" onmousedown="return false;" src="img/share.png" onclick="window.location.href='int/shr'" align="middle" style="width:100%">
	<br></br>
	<p style="text-align:center;" onclick="window.location.href='int/shr'">Link Berbagi Semua File Anda</p>
  </div>
</div>
<div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Unggah Gambar Banner</h2>
    </div>
    <div class="modal-body">
	<form enctype="multipart/form-data" action="bnnrupprcss" method="post">
	<table border="0" >
	<tbody>
		<tr><td>Pilih gambar :</td></tr>
		<tr>
			<td><input name="brkse" type="file" required/></td>
		</tr><td>__________________________
		</td>
		<tr>
			<td>
				<div id="formsubmitbutton">
					<input type="submit" value="Unggah" name="lebokke" onclick="SetWait()" />
				</div>
				<div id="buttonreplacement" style="margin-left:10px; display:none;">
					<img src="img/wait.gif" height="10%" width="10%" alt="loading..."/>
					<p>Please wait...</p>
				</div>
			</td>
		</tr>
	</tbody>
	</table>
	</form>
	<form action="bnnrupprcss" method="post">
	<table border="0" >
	<tbody>
	<td>__________________________
	</td>
	<tr>
		<td>
			<div id="dltbnr">
				<input type="submit" value="Banner bawaan" name="default" onclick="SetWait()" />
			</div>
		</td>
	</tr>
	</tbody>
	</table>
	</form>
    </div>
    <div class="modal-footer">
      <h3>Ini akan ditampilkan di setiap link unduhan file Anda.</h3>
    </div>
  </div>
</div>
</div>
</body>
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
	<i class="fa fa-facebook-official w3-hover-text-indigo" onclick="window.location.href='http://facebook.com/megonorom'"></i>
	<p>&copy;2017, Megono Development Co Ltd.</p>
</footer>
<script type="text/javascript" src="script/homefooter.js"></script>
</html>