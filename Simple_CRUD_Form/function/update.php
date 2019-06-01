<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php

	include '../connection/config.php';

	$id = $_GET['id'];
	$data = json_decode(file_get_contents('php://input'));


	$firstName = ucwords(strtolower($data->firstName));
	$lastName = ucwords(strtolower($data->lastName));
	$address = ucwords(strtolower($data->address));
	$age = $data->age;
	$nim = $data->nim;


	$array  = array($firstName, $lastName);
	$name = implode(' ', $array);

	$delete = mysqli_query($conn, "UPDATE data SET name = '$name', age = '$age', nim = '$nim', address = '$address' WHERE id = '$id'");
?>
