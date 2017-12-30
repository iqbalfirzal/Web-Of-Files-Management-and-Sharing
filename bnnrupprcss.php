<html>
<head>
<title>Mengunggah...</title>
</head>
<body>
<?php
include "int/fltrall.php";
include "int/db.php";
$usr=$_SESSION['pengguna'];
$usrfltr = str_replace(' ', '_', $usr);
$boleh_boleh_boleh	= array('gif','jpg','jpeg','png','JPG','JPEG','PNG');
$nama = $_FILES['brkse']['name'];
$namabaru = str_replace("$nama", "$usrfltr.png", "$nama");
$x = pathinfo($namabaru, PATHINFO_EXTENSION);
$ukuran	= $_FILES['brkse']['size'];
$filedata = addslashes(fread(fopen($_FILES['brkse']['tmp_name'], 'r'), $_FILES['brkse']['size']));
if($_POST['lebokke']){
		if(in_array($x,$boleh_boleh_boleh) === true){
		    if($ukuran < 999999){			
			$upupom = "REPLACE INTO banner (gambar, user, data, type, size) VALUES ('$namabaru', '$usrfltr', '$filedata', 'image/png', '$ukuran')";
			$omteloletom = mysql_query($upupom);
			if($omteloletom){
			echo "<script language='JavaScript'>
							alert('GAMBAR BERHASIL DIGANTI')
							location = 'index.html';
					  </script>";
			}else{
				echo "<script language='JavaScript'>
							alert('GAGAL MENGUPLOAD GAMBAR')
							location = 'index.html';
					  </script>";
			}
		    }else{
				echo "<script language='JavaScript'>
							alert('UKURAN GAMBAR TERLALU BESAR')
							window.location = 'index.html';
					  </script>";
		    }
	       }else{
				echo "<script language='JavaScript'>
							alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN')
							location = 'index.html';
					  </script>";
	       }
	}
else if($_POST['default']){
		$deldelom = "DELETE FROM banner WHERE user='$usrfltr'";
		$deldelomwoy = mysql_query($deldelom);
		if($deldelomwoy){
		echo "<script language='JavaScript'>
						alert('GAMBAR BANNER DIKEMBALIKAN KE BAWAAN')
						location = 'index.html';
				  </script>";
		}
}
?>
</body>
</html>