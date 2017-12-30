<html>
<head>
<title>Kelola Akun Pengguna</title>
<style type='text/css'>
.table{
	width:100%;
	text-align:center;
}
.table th{
	background-color:#848383;
	color:#FFFFFF;
}
.table tr td{
	border: #dedede solid thin;
}
</style>
</head>
<?php
include "fltradm.php";
include "db.php";
$lihat_usernya=mysql_query("SELECT * FROM user");
echo "<table class=table>";
echo "<tr>";
echo "<th>No.</th><th>Username</th><th>Email</th><th>Hapus Akun</th><th>Berkas</th>";
echo "</tr>";
$no=1;
while($tampil=mysql_fetch_array($lihat_usernya))
{
	$usr=$tampil[user];
	$usrfltr = str_replace(' ', '_', $usr);
	echo "<tr>";
	echo "<form>";
	echo "<td>$no</td><td>$tampil[user]</td><td><a href='mailto:$tampil[mail]'>$tampil[mail]</a></td>";
	echo "<td><a href='../dlusrprcss?id=$tampil[id_user]&fldr=$usrfltr'><img src='../img/delete.png' height='25px' align='center' title='hapus'/></a></td>";
	echo "<td><a href='mngusrdt?fldr=$usrfltr'>Klik_Disini</a></td>";
	echo "</form>";
	echo "</tr>";
	$no++;
}
echo "</table>";
?>
<a href='../admscssfll'><img src='../img/back.png' align='center' height='100px'></a>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>
</html>