<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php

	include 'connection/config.php';
	$id = $_GET['id'];

	$data = mysqli_query($conn, "SELECT name, age, nim, address FROM data WHERE id = '$id'");
	while($row = mysqli_fetch_array($data)) {
		$explode = explode(' ', $row['name']);
		$age = $row['age'];
		$nim = $row['nim'];
		$address =  $row['address'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<script type="text/javascript" src="ajax/ajax.js"></script>
</head>
<body>
	<table>
			<tr>
				<td>First Name</td>
				<td> : <input type="text" name="firstName" placeholder="First Name" id="firstName" value="<?= $explode[0]; ?>"></td>
			</tr>
			<tr>

				<td>Last Name</td>
				<td> : <input type="text" name="lastName" placeholder="Last Name" id="lastName" value="<?= $explode[1]; ?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td> : <input type="number" name="age" placeholder="Age" id="age" value="<?= $age; ?>"></td>
			</tr>
			<tr>
			 	<td>NIM</td>
			  	<td> : <input type="number" name="nim" placeholder="NIM" id="nim" value="<?= $nim; ?>"></td>
			</tr>
			<tr>
				<td>Address</td>	
			 	<td> : <textarea name="address" placeholder="Address" id="address"><?= $address ?></textarea></td>
			</tr>		
			<tr>
				<td> <button onclick="updateData(this.value);" value="<?= $id; ?>">Update</button></td>
			</tr>
		</table>
</body>
</html>
