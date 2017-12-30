<?php
session_start();
if(!$_SESSION['telahmasuk'])
{
	header("location:http://xvideos.com");
}else{
include "db.php";
$lihat_data=mysql_query("SELECT * FROM user WHERE user='$_SESSION[pengguna]'");
}
?>