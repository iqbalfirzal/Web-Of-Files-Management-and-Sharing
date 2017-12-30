<header><title>Menghapus...</title></header>
<?php
	include "int/fltradm.php";
	include "int/db.php";
	$folder_loc = $_GET['loc'];
	$file_to_delete = $_GET['del'];
	$dir = "dt/$folder_loc/";
	  if (is_file($dir.$file_to_delete)){
		unlink($dir.$file_to_delete);
		mysql_query("DELETE FROM files WHERE user='$folder_loc' AND filename = '$file_to_delete'");
			echo 	"<script language='JavaScript'>
						alert('File Berhasil Dihapus')
						window.location = 'int/mngusrdt?fldr=$_GET[loc]';
					</script>";
	  }else {
			echo 	"<script language='JavaScript'>
						alert('File Gagal Dihapus')
						window.location = 'int/mngusrdt?fldr=$_GET[loc]';
					</script>";
		}	
?>