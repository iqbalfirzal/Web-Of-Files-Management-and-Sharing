<header><title>Menghapus...</title></header>
<?php
include "int/fltrall.php";
if(empty($_GET['del'])){
	header("location:policy");
}
include "int/db.php";
$usr=$_SESSION['pengguna'];
$dirpengguna=str_replace(' ', '_', $usr);
$dir = "dt/$dirpengguna/";
$file_to_delete = $_GET['del'];
  if (is_file($dir.$file_to_delete)){
	mysql_query("DELETE FROM files WHERE user = '$dirpengguna' AND filename = '$file_to_delete'");
    unlink($dir.$file_to_delete);
		echo 	"<script language='JavaScript'>
						alert('File Berhasil Dihapus')
						window.location = 'int/dnld';
					</script>";
  }else {
		echo 	"<script language='JavaScript'>
						alert('File Gagal Dihapus')
						window.location = 'int/dnld';
					</script>";
	}	
?>