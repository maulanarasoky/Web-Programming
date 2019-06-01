<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="" method="POST">
		<h1>Login</h1>
		<table>
			<tr>
				<td>Username</td>
				<td>: <input type="text" name="username" placeholder="Username" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>: <input type="password" name="password" placeholder="Password" /></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
		<p>Doesn't have account yet ? <a href="register.php">Register</a></p>
	</form>
	<?php
		if (isset($_POST['login'])) {
			require 'config.php';
			$user = $_POST['username'];
			$query = "SELECT password FROM users WHERE username = '$user' or email = '$user' and status = '1'";
			$result = mysqli_query($conn, $query);
			if (mysqli_num_rows($result) === 1) {
				$hasil = mysqli_fetch_assoc($result);
				if (password_verify($_POST['password'], $hasil['password'])) {
					$_SESSION['user'] = $user;
					$_SESSION['email'] = $email;
					$_SESSION['login'] = true;
					echo "<script>alert('Login is successful...');document.location.href = 'dashboard.php';</script>";
				} else {
					echo "<script>alert('Username / Password doesn\'t match...');</script>";
				}
			} else {
				echo "<script>alert('Username / Password doesn\'t match...');</script>";
			}
		}
?>
</body>
</html>
