<?php
session_start();
if(empty($_SESSION['pengguna']))
{
	header("location:http://xvideos.com");
}else{
	include "db.php";
	$usr=$_SESSION['pengguna'];
	$usrfltr = str_replace(' ', '_', $usr);
    header("location:../data/$usrfltr/share");
}
?>