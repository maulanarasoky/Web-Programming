<?php  
	include "connection.php";
	
	$id = $_GET['id'];
	$sql = "DELETE FROM post WHERE id_post='$id'";
	mysqli_query($conn, $sql);
?>

