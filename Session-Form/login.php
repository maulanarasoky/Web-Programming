<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Session Form</title>
</head>
<body>
	<?php
	session_start();
	if (isset($_SESSION['name'])) {
		echo '<h2>Welcome ' . $_SESSION['name'] . ' ( ' . $_SESSION['id'] . ' ),</h2>';
		echo '<h3>This page can only be accessed if you have logged in<br/>';
		echo "Click <a href = 'logout.php'>here</a> to log out</h3>";
	}
	if (!isset($_SESSION['name'])) {
		echo "You are not logged in! You have no right to enter this field. Please login <a href = 'index.php'>here</a>";
	}
?>
</body>
</html>
