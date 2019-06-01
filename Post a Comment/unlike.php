<?php  
	include "connection.php";
	
	$id = $_GET['id'];
	$sql = "UPDATE post SET likes = likes - 1  WHERE id_post='$id'";
	mysqli_query($conn, $sql);
?>