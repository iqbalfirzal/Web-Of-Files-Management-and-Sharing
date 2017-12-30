<head><title>Kelola File Publik</title></head>
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
	$umpetke_berkas=array('index.php','dnldprcss.php');
	$umpetke_ext=array('html','css','js','php');
	$dir='../dt/shared_';
	$dh=opendir($dir) or die('error');
	$no=1;
	echo"<table class='table'>";
	echo"<tr><th>No.</th><th>Nama File</th><th>Hapus</th></tr>";
	while (false !== ($file = readdir($dh))) {
		if ($file != "." && $file != ".." &&
			!in_array($file, $umpetke_berkas) &&
			!in_array(pathinfo($file, PATHINFO_EXTENSION), $umpetke_ext)) 
		{
			echo"<tr><td>$no</td><td style='text-align:left;'>$file</td><td><a href='../dlshrd?del=$file'><img src='../img/delete.png' height='20px'></a></td></tr>";
			$no++;
		}
	}
	echo"</table>";
	closedir($dh);
?>
<a href='../admscssfll'><img src='../img/back.png' align='center' height='100px'></a>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>