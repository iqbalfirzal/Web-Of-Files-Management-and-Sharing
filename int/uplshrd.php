<?php
include "fltradm.php";
?>
<html><head><title>Unggah</title></head>
<h2>Unggah File Publik</h2>
<form enctype="multipart/form-data" action="../upshrdprcss" method="post">
<table border="0" >
<tbody>
<tr><td>Pilih file untuk diunggah:</td></tr>
<tr>
<td><input name="uploadfile" type="file" /></td>
</tr>
<td>------------------------------------</td>
<tr>
<td><input type="submit" value="Unggah" name="submit" /></td>
</tr>
</tbody>
</table>
</form>
<a href='../admscssfll'><img src='../img/back.png' align='center' height='100px'></a>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>
</html>