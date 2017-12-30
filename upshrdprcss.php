<html>
<head>
<title>Mengunggah...</title>
</head>
<body>
<?php
error_reporting(0);
set_time_limit(0);
include "int/fltradm.php";
$target_path = "dt/shared_/";
$nama=$_FILES['uploadfile']['name'];
$namabaru = str_replace(' ', '_', $nama);
$file_path = $target_path . basename($namabaru); 
if(move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file_path)) {
	echo "<script language='JavaScript'>
			alert('File berhasil diunggah')
			window.location = 'int/dnldshrd';
		</script>";
} else{
    echo "<script language='JavaScript'>
			alert('Terjadi kesalahan, file gagal diunggah')
			window.location = 'int/uplshrd';
		</script>";
}
?>
</body>
</html>