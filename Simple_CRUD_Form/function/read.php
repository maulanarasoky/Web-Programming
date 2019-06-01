<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php 
	include '../connection/config.php';

	$array = array();

	$show = mysqli_query($conn, "SELECT id, name, age, nim, address FROM data");

	while($row = mysqli_fetch_array($show)) {
		array_push($array, array(
			'id' => $row['id'],
			'name' => $row['name'],
			'age' => $row['age'],
			'nim' => $row['nim'],
			'address' => $row['address']
		));
	}
	echo json_encode($array);
?>
