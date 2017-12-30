<html>
<head>
<title>Mengunggah...</title>
</head>
<body>
<?php
error_reporting(0);
set_time_limit(0);
include "int/fltrall.php";
if(empty($_POST['lebokke'])){
 echo "<script language='JavaScript'>
			alert('Tidak ada file yang diupload')
			window.location = 'policy/error404';
		</script>";
}
function ngarang($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
include "int/db.php";
$shortlink=ngarang();
$usr=$_SESSION['pengguna'];
$usrfltr = str_replace(' ', '_', $usr);
$my_path = "dt/$usrfltr/";
$boleh_boleh_boleh	= array('jpg','png','gif','zip','rar','tar','7z','gz','iso','bin','img','apk','exe','jar','psd','mp3','mp4','3gp','flv','mkv','avi','ogg','wav','amr','ktc','ehi','ovpn','doc','docx','xls','xlsx','ppt','pptx','pdf','txt','zw');
$nama = $_FILES['brkse']['name'];
$namabaru = str_replace(' ', '_', $nama);
$x = pathinfo($namabaru, PATHINFO_EXTENSION);
$ukuran	= $_FILES['brkse']['size'];
$file_path = $_FILES['brkse']['tmp_name'];
$fix_path= $my_path.basename($namabaru);
if($_POST['lebokke']){
		if(in_array($x,$boleh_boleh_boleh) === true){
		    if($ukuran < 9999999999){
			mysql_query("REPLACE INTO files (user, filename, count, protect, shortlink) VALUES ('$usrfltr', '$namabaru', '', '0', '$shortlink')");
			$upupom = move_uploaded_file($file_path, $fix_path);
			if($upupom){
			echo "<script language='JavaScript'>
							alert('FILE BERHASIL DI UPLOAD')
							window.location = 'int/dnld';
					  </script>";
			}else{
				echo "<script language='JavaScript'>
							alert('GAGAL MENGUPLOAD FILE')
							window.location = 'int/upl';
					  </script>";
			}
		    }else{
				echo "<script language='JavaScript'>
							alert('UKURAN FILE TERLALU BESAR')
							window.location = 'int/upl';
					  </script>";
		    }
	       }else{
				echo "<script language='JavaScript'>
							alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN, SILAHKAN SARANKAN EKSTENSI KEPADA ADMIN UNTUK DITAMBAHKAN')
							window.location = 'int/addext';
					  </script>";
	       }
	}
?>
</body>
</html>