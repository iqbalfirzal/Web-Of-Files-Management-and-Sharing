<?php
	include "fltrall.php";
	include "db.php";
	$usr = $_SESSION['pengguna'];
	$usrfltr = str_replace(' ', '_', $usr);
	$protect = $_GET['switchto'];
	$file = $_GET['filename'];
	if (!empty($protect) && !empty($file)){mysql_query("UPDATE files SET protect='$protect' WHERE user='$usrfltr' AND filename='$file'");sleep(3);header("location:dnld");}else{echo "nginx";}
?>