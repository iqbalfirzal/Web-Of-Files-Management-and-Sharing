<html>
<head>
<title>File Not Found | Free Data File Host</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/lib/css/w3.css">
<link rel="stylesheet" href="style/lib/css/google-font.css">
<link rel="stylesheet" href="style/lib/css/cloudflare-font.css">
<link rel="stylesheet" href="style/pace/pace.css">
<script src="script/pace.min.js"></script>
<script language="JavaScript">
var randnum = Math.random();
var inum = 7;
var rand1 = Math.round(randnum * (inum-1)) + 1;
images = new Array
images[1] = "img/1.jpg"
images[2] = "img/2.jpg"
images[3] = "img/3.jpg"
images[4] = "img/4.jpg"
images[5] = "img/5.jpg"
images[6] = "img/6.jpg"
images[7] = "img/7.jpg"
var image = images[rand1]
</script>
<style>
</head>
body,h1 {font-family: "Montserrat", sans-serif}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>
<script language="JavaScript">
document.write('<body background="' + image + '" text="white" style="background-repeat:no-repeat;background-position:center center;background-attachment:fixed;background-size: cover;">')
</script>
<nav class="w3-sidenav w3-black w3-animate-top w3-center w3-xxlarge" style="display:none;padding-top:150px" id="mySidenav">
  <a href="javascript:void(0)" onclick="nav_close()" class="w3-closenav w3-jumbo w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <a href="welcome" class="w3-text-grey w3-hover-black">Masuk / Daftar</a>
  <a href="data/shared_" class="w3-text-grey w3-hover-black">File Publik</a>
  <a href="mailto:megonodev@gmail.com" class="w3-text-grey w3-hover-black">Hubungi Admin</a>
</nav>
<div class="w3-content" style="max-width:1500px">
<header class="w3-container w3-padding-32 w3-center w3-opacity w3-margin-bottom">
  <span class="w3-opennav w3-xxlarge w3-right w3-margin-right" onclick="nav_open()"><i class="fa fa-bars"></i></span> 
  <div class="w3-clear"></div>
  <h1><b>File Yang Anda Minta Tidak Ditemukan</b></h1>
  <p><b>Kami tidak menemukan file untuk tautan yang Anda tuju. Hubungi <a href="mailto:megonodev@gmail.com">Admin</a></b></p>
  <p class="w3-padding-16"><button class="w3-btn" onclick="window.location.href='index.php'">Homepage</button></p>
</header>
</div>
</body>
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:128px">
	<i class="fa fa-facebook-official w3-hover-text-indigo" onclick="window.location.href='http://facebook.com/megonorom'"></i>
	<p>&copy;2017, Megono Development Co Ltd.</p>
</footer>
<script>
function nav_open() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("mySidenav").style.display = "block";
}
function nav_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>
</html>