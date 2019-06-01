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
		session_unset();
		echo '<h2>You have successfully logged out</h2>';
		echo "<h3>Click <a href = 'index.php'>here</a> to log in again<br/>";
		echo 'You cannot enter the page now anymore</h3>';
	?>
</body>
</html>
