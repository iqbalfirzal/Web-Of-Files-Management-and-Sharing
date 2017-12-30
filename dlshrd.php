<header><title>Menghapus...</title></header>
<?php
	include "int/fltradm.php";
if(empty($_GET['del'])){
	header("location:policy");
}
  $dir = 'dt/shared_/';
  $file_to_delete = $_GET['del'];
  if (is_file($dir.$file_to_delete)){
    unlink($dir.$file_to_delete);
	echo 	"<script language='JavaScript'>
				alert('File Berhasil Dihapus')
				window.location = 'int/dnldshrd';
			</script>";
  }else {
		echo 	"<script language='JavaScript'>
					alert('File Gagal Dihapus')
					window.location = 'int/dnldshrd';
				</script>";
	}	
?>