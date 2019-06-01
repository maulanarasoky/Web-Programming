<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
	<script type="text/javascript" src="ajax/ajax.js"></script>
</head>
<body onload="getData();">
	<form method="POST">	
		<table>
			<tr>
				<td>First Name</td>
				<td> : <input type="text" name="firstName" placeholder="First Name" id="firstName"></td>
			</tr>
			<tr>

				<td>Last Name</td>
				<td> : <input type="text" name="lastName" placeholder="Last Name" id="lastName"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td> : <input type="number" name="age" placeholder="Age" id="age"></td>
			</tr>
			<tr>
			 	<td>NIM</td>
			  	<td> : <input type="number" name="nim" placeholder="NIM" id="nim"></td>
			</tr>
			<tr>
				<td>Address</td>	
			 	<td> : <textarea name="address" placeholder="Address" id="address"></textarea></td>
			</tr>		
			<tr>
				<td> <button onclick="inputData();">Send</button> </td>
			</tr>
		</table>
	</form>
	<table id="show" border="1" style="margin-top: 20px;"></table>
</body>
</html>
