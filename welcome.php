<?php
error_reporting(0);
session_start();
include "int/db.php";
if($_SESSION['telahmasuk'])
{
	header("location:index.html");
}
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<link rel="stylesheet" href="style/pace/pace.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<link rel="stylesheet" href="style/pace/pace.css">
<link rel="shortcut icon" href="img/mgn.svg">
<title>Selamat Datang | Free Data File Host</title>
<script src="script/dftr.js"></script>
<script src="script/jquery.js"></script>
<script src="script/pace.min.js"></script>
</head>
<body class="w3-light-grey">
<header style="margin:1000px;">
	<div class="w3-display-left w3-padding w3-col 16 m8">
		<div class="w3-container w3-white w3-padding-16">
			<form method="post" action="lgnprcss">
			<div class="w3-row-padding" style="margin:0 -16px;">
				<h1>Free Data File Host.</h1>
				<h2>Masuk / Daftar, <a href="#dftr" class="scroll">disini</a></h2>
				<div class="w3-half w3-margin-bottom">
					<label>Nama Pengguna atau Email Anda</label>
					<input class="w3-input w3-border" type="text" placeholder="Nama Pengguna atau Email" name="pengguna" required>
				</div>
				<div class="w3-half">
					<label>Kata Sandi</label>
					<input class="w3-input w3-border" type="password" placeholder="Kata Sandi" name="kunci" required>
				</div>
			</div>
			<button class="w3-btn w3-dark-grey" type="submit"> Masuk </button>
			</form>
		</div>
	</div>
</header>
<div style="background:white;width:100%;" align="center" id="dftr">
<h2>DAFTAR</h2>
<form method="post" action="sgnprcss" onsubmit='return validasi_isi(this)'>
	<p><input type="text" name="pengguna" value="" placeholder="Nama Pengguna" required></p>
	<p><input type="text" name="email" value="" placeholder="Email Anda" required></p>
	<p><input type="password" name="kunci" value="" placeholder="Kata Sandi" required></p>
	<p><input type="text" name="ver_code" value="" placeholder="Masukkan Kode" required></p>
	<p><img draggable="false" onmousedown="return false;" src="img/hph"></p>
	<p>
		<td><button class="w3-btn w3-dark-grey" type="submit"> Daftar </button></td>
	</p>
</form>
<br></br>
</div>
</body>
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h3>Share files with real free, simple, and easy!</h3>
  <p>Find Us On</p>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-text-indigo" onclick="window.location.href='http://facebook.com/megonorom'"></i>
  </div>
  <p>&copy;2017, Megono Development Co Ltd.</p>
  <p>______________________________________</p>
  <p><a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=bagiin.ga&digit=style/plain/31/&reloads=0" alt="" title="" border="0"></a><br /><a href="http://www.fabbly.com" target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">3d Printer Files</a></p>
  <p>total vsitors</p>
  <script type="text/javascript">
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
				$('html,body').animate({
				scrollTop: target.offset().top
				}, 1000);
				return false;
				}
			}
		});
	});
   </script>
</footer>
</html>