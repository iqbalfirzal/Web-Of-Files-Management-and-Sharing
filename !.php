<?php
set_time_limit(0);
error_reporting(0);
if(empty($_GET['o'])){
echo "<script language='JavaScript'>
	alert('Mau ngapain gan?, klik ok aja ya.')
	window.location = 'policy/error404';
</script>";
}elseif(empty($_GET['f'])){
echo "<script language='JavaScript'>
	alert('Mau ngapain gan?, klik ok aja ya.')
	window.location = 'policy/error404';
</script>";}
include "int/db.php";
$basedir = "dt/";
$filepath = $_GET['o'];
$own = str_replace('_', ' ', $filepath);
$filename=$_GET['f'];
$file=realpath($basedir .'/'. $filepath .'/'. $filename );
$len = filesize($file);
if(!empty($file) && file_exists($file)){
$sql = "SELECT protect FROM files WHERE user='$filepath'";
$row1 = mysql_fetch_assoc( mysql_query($sql) );
$cekiki = $row1['protect'];
if($cekiki == "1"){
session_start();
if($_SESSION['telahmasuk'] && $_SESSION['pengguna']==$own){
$query = mysql_query("SELECT * FROM files WHERE user = '$filepath' AND filename = '$filename'");
$row = mysql_fetch_array($query);
$count = ++$row['count'];
mysql_query("UPDATE files SET count = '$count' WHERE user = '$filepath' AND filename = '$filename' ");
ob_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public"); 
header("Content-Description: File Transfer");
header("Content-Type:application/octet-stream");
$header="Content-Disposition: attachment; filename=$filename;";
header("Accept-Ranges: bytes");
header($header );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".$len);
@readfile($file);
exit;}else{
echo "<script language='JavaScript'>
	alert('File Diprivate Oleh Pemilik!')
	window.location = 'int/dnld';
</script>";
}}elseif($cekiki == "0"){
$query = mysql_query("SELECT * FROM files WHERE user = '$filepath' AND filename = '$filename'");
$row = mysql_fetch_array($query);
$count = ++$row['count'];
mysql_query("UPDATE files SET count = '$count' WHERE user = '$filepath' AND filename = '$filename' ");
ob_clean();
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: public"); 
header("Content-Description: File Transfer");
header("Content-Type:application/octet-stream");
$header="Content-Disposition: attachment; filename=$filename;";
header("Accept-Ranges: bytes");
header($header );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".$len);
@readfile($file);
exit;
}}else{
echo "<script language='JavaScript'>
	alert('File Tidak Ditemukan')
	window.location = 'policy/error404';
</script>";}
?>