<?php
error_reporting(0);
include "int/db.php";
$fl = $_GET['file'];
$ow = $_GET['owner'];
$de = base64_decode($fl);
$own = str_replace('_', ' ', $ow);
$baseDir = "dt/";
$ownernya =  $_GET['owner'];
$empunya = str_replace('_', ' ', $ownernya);
$path = realpath($baseDir .'/'. $ownernya .'/'. $de);
?>
<html>
<head>
<title>Download <?php print $de; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Pacifico" type="text/css">
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<link rel="stylesheet" href="style/banner/view.css">
<link rel="stylesheet" href="style/pace/pace.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
h1 {
  font-size: 36px;
  font-size: 5.4vw;  
}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('<?php $imeg = array('img/6_1.jpg','img/7_1.jpg','img/8_1.jpg'); echo $imeg[array_rand($imeg)];?>');
    min-height: 100%;
}
.texting {
  font: 400 100px/1.5 'Pacifico', Helvetica, sans-serif;
  color: #2b2b2b;
  text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
}
</style>
<script src="script/pace.min.js"></script>
</head>
<body>
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:35%">
  <div class="bgimg">
	<text class="texting">Welcome.</text>
  </div>
</nav>
<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
    <a href="welcome" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Masuk / Daftar</a>
	<a href="data/shared_" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">File Publik</a>
    <a href="mailto:megonodev@gmail.com" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Hubungi Admin</a>
  </div>
</nav>
<div class="w3-main w3-padding-large" style="margin-left:35%">
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>
  <header class="w3-container w3-center" style="padding:128px 16px">
    <p class="w3-padding-16"><img draggable="false" onmousedown="return false;" src="gtbnnr.php?usr=<?php print $ow; ?>" onerror="this.src='img/blanx_banner.png'" height="auto" width="50%" /></p>
	<h1><?php print $de; ?></h1>
    <button class="w3-button w3-light-grey w3-padding-large w3-margin-top" onclick="window.location.href='data/<?php print $ow; ?>/share'">
      <i class="fa fa-folder" ></i> Folder Pengunggah
    </button>
	<button class="w3-button w3-light-grey w3-padding-large w3-margin-top" onclick="window.location.href='!!?o=<?php print $ow; ?>&f=<?php print $fl; ?>'">
      <i class="fa fa-download"></i> Unduh
    </button>
	<?php
		$basedata = mysql_fetch_array(mysql_query("SELECT * FROM files WHERE user = '$ow' AND filename = '$de'"));  
		$donlotdata = $basedata['count'];  
	?>
  </header>
  <div class="w3-content w3-justify w3-text-grey w3-padding-32">
    <h2>Rincian File</h2>
    <hr class="w3-opacity">
    <p>
		<ul>
			<li>Pengunggah <?php print $empunya ?></li>
			<li><?php echo "Diunggah pada " . date ("H:i:s | d F Y", filemtime($path)); ?></li>
			<li>Ukuran file <?php
				    $size = filesize($path);
					$units = array('B', 'KB', 'MB', 'GB', 'TB');
					$power = $size > 0 ? floor(log($size, 1024)) : 0;
					echo number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power]; ?></li>
			<li>Ekstensi file <?php echo pathinfo($path, PATHINFO_EXTENSION); ?></li>
			<li>Telah diunduh <?php print $donlotdata ?> kali</li>
		</ul>
	</p>
  </div>
  <footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin:-24px">
	<i class="fa fa-facebook-official w3-hover-text-indigo" onclick="window.location.href='http://facebook.com/megonorom'"></i>
	<p>&copy;2017, Megono Development Co Ltd.</p>
  </footer>
</div>
<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "65%";
    document.getElementById("mySidebar").style.display = "block";
}
function closeNav() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>