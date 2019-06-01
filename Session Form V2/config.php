<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'database_user';
	$conn = mysqli_connect($server, $user, $pass, $database);

	if (!$conn) {
		die('Connection error : ' . mysqli_connect_error());
	}
?>
