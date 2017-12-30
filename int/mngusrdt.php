<head><title>Kelola File <?php print $_GET[fldr]?></title></head>
<style type='text/css'>
.table{
	width:100%;
	text-align:center;
}
.table th{
	background-color:#848383;
	color:#FFFFFF;
}
.table tr td{
	border: #dedede solid thin;
}
</style>
<?php
	include "fltradm.php";
	$umpetke_berkas = array('index.php','share.php','dnldprcss.php');
	$umpetke_ext   = array('php, html');
	$dir="../dt/$_GET[fldr]/";
	$dh=opendir($dir) or die('error');
	$no=1;
	echo"<table class='table'>";
	echo"<tr><th>No.</th><th>Nama File</th><th>Link Unduhan</th><th>Hapus</th></tr>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." &&
			!in_array($file, $umpetke_berkas) &&
			!in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
$kata = "$file";
		$en = base64_encode($kata);
			echo"<tr><td>$no</td><td style='text-align:left;'>$file</td><td><a href='../download?owner=$_GET[fldr]&file=$en'>Disini</a></td><td><a href='../dlusrdt?del=$file&loc=$_GET[fldr]'><img src='../img/delete.png' height='20px'></a></td></tr>";
			$no++;
		}
	}
	echo"</table>";
	closedir($dh);
?>
<a href='mngusr'><img src='../img/back.png' align='center' height='100px'></a>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>