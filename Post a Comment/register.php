<!DOCTYPE html>
<html>
<head>
	<title>D3IF-Cool</title>

	<!-- Load external CSS -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body class="text-center" style="background-color: white;">


 	<form class="form-signin" method="POST">

	  <img class="mb-4" src="logo.jpg" alt="" width="100" height="100">
	  <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

	  <label for="inputEmail" class="sr-only">Email address</label>
	  <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>

	  <label for="inputPassword" class="sr-only">Password</label>
	  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

	  <input class="btn btn-lg btn-primary btn-block" type="submit" name="reg" value="Register">

	  <br>
	  <p class="text-muted">Already have an account ?
	  <a href="index.php">Login</a>
	  </p>

	  <!-- PHP Code for registration -->
	  <?php  

	  	include "connection.php";
	  	if(isset($_POST['reg'])) {

	  		$username = $_POST['username'];
	  		$password = md5($_POST['password']);
	  		$defaultPhoto = "profile.png";

	  		$register = mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password','$defaultPhoto')");

	  		if($register) {
	  			echo "
	  				<div class='alert alert-success' role='alert'>
					  Registered Successfully!
					</div>
	  			";
	  		} else {
	  			echo "
	  				<div class='alert alert-danger' role='alert'>
					  Register Failed
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