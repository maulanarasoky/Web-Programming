<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<!DOCTYPE html>
<html>
<head>
	<title>D3IF-Cool</title>

	<!-- Load External CSS-->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/styles.css">

</head>

<body class="text-center" style="background-color: white;">


 	<form class="form-signin" method="POST">

	  <img class="mb-4" src="logo.jpg" alt="" width="100" height="100">
	  <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>

	  <label for="inputEmail" class="sr-only">Email address</label>
	  <input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus name="username">

	  <label for="inputPassword" class="sr-only">Password</label>
	  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">

	  <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In" name="login">

	  <br>

	  <p class="text-muted">Don't have an account ?
	  <a href="register.php">Register</a>
	  </p>

	  <!-- PHP Source code for LOGIN-->
	  <?php  
	  	include "connection.php";
	  	if(isset($_POST['login'])) {

	  		$username = $_POST['username'];
	  		$password = md5($_POST['password']);

	  		$getUser = mysqli_num_rows(
	  			mysqli_query($conn, 
	  			"SELECT * FROM user WHERE username='$username' AND password='$password'")
	  		);

	  		if($getUser > 0) {
	  			session_start();
	  			$_SESSION['login'] = $username;
	  			header('location:dashboard.php');
	  		} else {
	  			echo "
	  				<div class='alert alert-danger' role='alert'>
					  Username/Password not match!
					</div>
	  			";
	  		}

	  	}
	  ?>

	</form>


<!-- Load external javascript -->
<script type="text/javascript" src="assets/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.js"></script>
</body>
</html>
