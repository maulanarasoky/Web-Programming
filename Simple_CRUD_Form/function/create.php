<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php 
	include '../connection/config.php';
	$data = json_decode(file_get_contents('php://input'));

	$firstName = ucwords(strtolower($data->firstName));
	$lastName = ucwords(strtolower($data->lastName));
	$address = ucwords(strtolower($data->address));
	$age = $data->age;
	$nim = $data->nim;

	$array  = array($firstName, $lastName);
	$name = implode(' ', $array);

	$insert = mysqli_query($conn, "INSERT INTO data (name, age, nim, address) VALUES ('$name', '$age', '$nim', '$address')");
?>
