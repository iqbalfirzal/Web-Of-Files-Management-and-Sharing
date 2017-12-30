<?php include("policy/admscre.php"); ?>
<?php
echo "This page needs to be secured. Admins area. Only admins should be able to access it";
?>
<html>
<head>
<title>Selamat Datang Admin</title>
</head>
<body>
<section>
<div>
<h1>ADMIN</h1>
<form method="post" action="admlgnprcss">
<p><input type="text" name="admin" value="" placeholder="Nama" required></p>
<p><input type="password" name="kunci" value="" placeholder="Kata Sandi" required></p>
<p class="submit">
	<td><input type="submit" value="Masuk" ></td>
</p>
</form>
</div>
</section>
</body>
<footer><p>&copy;2017, Megono Development Co Ltd.</p></footer>
</html>