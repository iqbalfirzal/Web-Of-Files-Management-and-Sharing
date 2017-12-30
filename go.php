<?php
include "int/db.php";
$de = mysql_real_escape_string($_GET["to"]);
$result=mysql_fetch_array(mysql_query("SELECT * FROM files WHERE shortlink = '$de'"));
$owner = $result['user'];
$file = $result['filename'];
$filename = base64_encode($file);
if(!empty($_GET['to'])){
	header("location:download?owner=$owner&file=$filename");
}else{
        header("location:policy/error403");
}
?>