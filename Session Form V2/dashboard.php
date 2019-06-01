<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>This is dashboard page <?php echo $_SESSION['user']; ?></h1>
	<a href="logout.php">Logout</a>
	<?php
		if (!isset($_SESSION['login'])) {
			echo "<script>alert('Please login first...');document.location.href = 'index.php';</script>";
		}
?>
</body>
</html>
