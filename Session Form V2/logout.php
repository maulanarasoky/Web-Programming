<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>alert('You have successfully logged out...');document.location.href = 'index.php';</script>";
?>
