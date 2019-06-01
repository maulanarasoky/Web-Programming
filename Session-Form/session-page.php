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
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['id'] = $_POST['id'];
		echo "<h1>Enter <a href = 'login.php'>this page</a> to go to the session check page";
	?>
</body>
</html>
