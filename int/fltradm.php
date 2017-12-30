<?php
session_start();
if(!$_SESSION['adminmasuk'])
{
	header("location:http://xvideos.com");
}else{
include "db.php";
$lihat_data=mysql_query("SELECT * FROM adm WHERE adm='$_SESSION[admin]'");
}
?>