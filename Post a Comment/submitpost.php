<?php  
	session_start();
	include "connection.php";

	$post = $_POST['content'];
	$user = $_SESSION['login'];

	if (!empty($post)) {
		$sql = "INSERT INTO post VALUES (NULL, '$post', (select id_user from user where username='$user'), '0')";
		mysqli_query($conn, $sql);
	}
?>


