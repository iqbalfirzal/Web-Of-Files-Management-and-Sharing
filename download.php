<?php
error_reporting(0);
$fl = $_GET['file'];
$ow = $_GET['owner'];
$de = base64_decode($fl);
$own = str_replace('_', ' ', $ow);
if(empty($ow)){
	header("location:download_fail?error=noownername");
}else if(empty($fl)){
	header("location:download_fail?error=nofilename");
}
$baseDir = "dt/";
$ownernya =  $_GET['owner'];
$empunya = str_replace('_', ' ', $ownernya);
$path = realpath($baseDir .'/'. $ownernya .'/'. $de);
if(!file_exists("$path")){
    header("location:download_fail?error=filenotfound");
}
include "int/db.php";
$query = mysql_query("SELECT protect FROM files WHERE user='$ow'");
while ($row = mysql_fetch_assoc($query)) {
	session_start();
	$cekiki = $row['protect'];
	if ($cekiki == "1"){
		session_start();
		if($_SESSION['telahmasuk'] && $_SESSION['pengguna']==$own){
			include_once("trstdwnld.php");
		}else{
			include_once("fllckd.php");
		}
	}
	else if($cekiki == "0"){
		include_once("trstdwnld.php");
	}
}
?>