<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<form method="POST">
		<h1>Register</h1>
		<table>
			<tr>
				<td>Username</td>
				<td>: <input type="text" name="username" placeholder="Username" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: <input type="email" name="email" placeholder="Email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>: <input type="password" name="password" placeholder="Password" /></td>
			</tr>
			<tr>
				<td>Re-Type</td>
				<td>: <input type="password" name="re-password" placeholder="Re-Type Password" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="register" value="Register"></td>
			</tr>
		</table>
		<p>Already have account ? <a href="index.php">Login</a></p>
	</form>
	<?php
		if (isset($_POST['register'])){
			if (($_POST['password'] == $_POST['re-password']) && ($_POST['username'] && $_POST['email'] <> null)) {
				require "config.php";
				$user = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
				$email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
				$pass = password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_DEFAULT);
				$query = "INSERT INTO users (username, email, password) VALUES('$user', '$email', '$pass')";
				if (mysqli_query($conn, $query)) {
					echo "<script>alert('Registration is successful...');document.location.href = 'index.php';</script>";
				} else {
					echo 'Registration failed';
				}
			} else if (($_POST['password'] <> $_POST['re-password']) && ($_POST['username'] && $_POST['email'] <> null)){
					echo "<script>alert('Username / password doesn\'t match...');</script>";
			} else {
				echo "<script>alert('Enter your username / password first...');</script>";
			}
		}
	?>
</body>
</html>
