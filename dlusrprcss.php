<?php
include "int/fltradm.php";
include "int/db.php";
mysql_query("DELETE FROM user WHERE id_user='$_GET[id]'");
mysql_query("DELETE FROM files WHERE user='$_GET[fldr]'");
mysql_query("DELETE FROM banner WHERE user='$_GET[fldr]'");
function dlet($path) {
	$files = glob($path . '/*');
	foreach ($files as $file) {
		is_dir($file) ? removeDirectory($file) : unlink($file);
	}
	rmdir($path);
	return;
}
dlet("./dt/$_GET[fldr]/");
header("location:int/mngusr");
?>