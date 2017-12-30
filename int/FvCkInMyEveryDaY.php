<?php 
		$to = urldecode($_POST['name']);
		$subject = urldecode($_POST['subject']);
		$message = urldecode($_POST['email']);
		$headers = 'From: ' . urldecode($_POST['user']) . PHP_EOL ;
		mail ( $to, $subject, $message, $headers ) ;
 ?>