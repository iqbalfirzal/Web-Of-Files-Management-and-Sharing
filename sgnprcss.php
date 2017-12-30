<?php
error_reporting(0);
session_start();
if($_POST["ver_code"] != $_SESSION["capcay"] OR $_POST["ver_code"] == "")
{
		echo '<script language="javascript">';
        echo 'alert("Incorrect verification code")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=welcome" />';
}
else{
$user=$_POST['pengguna'];
$pass1=$_POST['kunci'];
$mail=$_POST['email'];
$pass=MD5(MD5($pass1));
$newdstname = str_replace(' ', '_', $user);
$newdst="./dt/$newdstname/";
$smplfile="./dt/_KyuvHKGVuyvhgvhtChjyv/share.php";
$emptyfile="$newdst/_YOUR_FILE_PLACED_HERE_";
$scridxfile="./dt/_KyuvHKGVuyvhgvhtChjyv/securing_index.php";
$scrtyfile="$newdst/index.php"; 
$shrfile="$newdst/share.php";
include "int/db.php";
$cek=mysql_query("SELECT * FROM user WHERE user='$user'");
$jumlah=mysql_num_rows($cek);
if ($jumlah==0 && $user!=="shared_")
{
	mysql_query("INSERT INTO user (user,password,mail)
	VALUES('$user','$pass','$mail')");
	mysql_query("INSERT INTO shareall (user,status)
	VALUES('$user','1')");
	mkdir($newdst);
	touch($emptyfile);
	$m=fopen("$scrtyfile", "w") or die("Unable to open file!");
	$n="<html><head><title>It Works!</title></head><body>Silent & Deadly.</body></html>";
	fwrite($m, $n);
	fclose($m);
	touch($shrfile);
	$fs=fopen("$smplfile", "r");
	$ft=fopen("$shrfile", "w");
	if ($fs==NULL)
	{
		echo "Can't Open Source File ...";
		exit(0);
	}
	if ($ft==NULL)
	{
		echo "Can't Open Destination File ...";
		fclose ($fs);
		exit(1);
	}
	else
	{
		while ($ch=fgets($fs))
			fputs($ft, $ch);

		fclose ($fs);
		fclose ($ft);
	}
	$fk=fopen("$scridxfile", "r");
	$fl=fopen("$scrtyfile", "w");
	if ($fk==NULL)
	{
		echo "Can't Open Source File ...";
		exit(0);
	}
	if ($fl==NULL)
	{
		echo "Can't Open Destination File ...";
		fclose ($fk);
		exit(1);
	}
	else
	{
		while ($ch=fgets($fk))
			fputs($fl, $ch);

		fclose ($fk);
		fclose ($fl);
	}
	echo "	Akun Berhasil Dibuat.
		Nama	:	$user 
		Sandi	:	*
		Email	:	$mail";
	echo 	"<script language='JavaScript'>
						alert('Berhasil dibuat, silahkan masuk dahulu')
						window.location = 'welcome';
					</script>";
}
else
{
	echo 	"<script language='JavaScript'>
						alert('Nama pengguna sudah ada')
						window.location = 'welcome';
					</script>";
	}
}
?>