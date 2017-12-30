<?php
error_reporting(0);
$penggunamasuk=$_POST['pengguna'];
$pass1=$_POST['kunci'];
$pass=(MD5(MD5($pass1)));
include "int/db.php";
$cek_terdaftar=mysql_query("SELECT * FROM user WHERE ( user='$penggunamasuk' OR mail='$penggunamasuk' ) && password='$pass'");
$jumlah=mysql_num_rows($cek_terdaftar);
$cekyangmasuk=mysql_fetch_array($cek_terdaftar);  
$useryangmasuk=$cekyangmasuk['user'];  
if($jumlah==1)
{
	session_start();
	$_SESSION['telahmasuk']=true;
	$_SESSION['pengguna']=$useryangmasuk;
	header("location:index.html");
}else{
	echo 	"<script language='JavaScript'>
						alert('Nama pengguna atau kata sandi salah')
						window.location = 'welcome';
					</script>";
}
?>