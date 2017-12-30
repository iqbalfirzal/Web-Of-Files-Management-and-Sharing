<html>
<title>Extention Suggested List</title>
<body>
<?php
error_reporting(0);
include "fltradm.php";
$myfile = fopen("extention.txt", "r") or die("can't open file");
echo fread($myfile,filesize("extention.txt"));
fclose($myfile);
?>
<br></br>
<?php
if ( isset ( $_POST [ 'buttonPressed' ] )){
$to = $_POST [ "too" ] ;
$subject = ' Confirmation ' ;
$message = $_POST [ "message" ] ;
$headers = 'From: ' . $_POST[ "from" ] . PHP_EOL ;
mail ( $to, $subject, $message, $headers ) ;
echo  "<script language='JavaScript'>
			alert('Your e-mail has been sent!')
			window.location = 'extsuggest';
		</script>";}

else{
?>
<hr>Confirmation for suggestion<hr/>
<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>" />
  <table>
    <tr>
      <td>Adm e-mail address: </td>
      <td><input name= "from" type= "text" required /></td>
    </tr>
	<tr>
      <td>User e-mail address: </td>
      <td><input name= "too" type= "text" required /></td>
    </tr>
    <tr>
      <td>Adm message: </td>
      <td><textarea name= "message" cols= "20" rows= "6"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input name= "buttonPressed" type= "submit" value= "Send E-mail!" /></td>
    </tr>
 </table>
</form>
<?php } ?>
</body>
<footer>
<a href='../admscssfll'><img draggable="false" onmousedown="return false;" src='../img/back.png' align='left' height='100px'></a>
</footer>
</html>