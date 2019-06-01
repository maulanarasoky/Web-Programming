<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php

	include '../connection/config.php';

	$id = $_GET['id'];

	$delete = mysqli_query($conn, "DELETE FROM data WHERE id = '$id'");

?>
