<?php
if(empty($_GET['usr'])){
	header("location:policy");
}
include "int/db.php";
$idFile = $_GET['usr'];
$idFileFix = str_replace(' ', '_', $idFile);  
$dataGambar = mysql_fetch_array(mysql_query("select * from banner where user='$idFileFix'"));  
$filename = $dataGambar['gambar'];  
$mime_type = $dataGambar['type'];  
$filedata = $dataGambar['data'];  
header("content-disposition: inline; filename=$filename");  
header("content-type: $mime_type");  
header("content-length: ".strlen($filedata));  
echo ($filedata); 
?> 