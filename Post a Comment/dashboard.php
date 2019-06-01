<!--
Author	: Maulana Rasoky Nasution
Website	: https://mul-code.blogspot.com/
-->
<?php
	session_start();
	if (empty($_SESSION['login'])) {
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>D3IFCOOL - Timeline</title>

	<!-- Load external css -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.css" />
	<style type="text/css">

		body {
			background-color: #F0F0F0;
		}

		img.glyph-icon {
			width:16px;
			height:16px;
		}

		.box {
			width: 600px;
			height: 150px;
			background-color: white;
			box-shadow: 0px 0px 2px #95a5a6;
			margin-left: auto;
			margin-right: auto;
			margin-top: 30px;
			padding: 15px;
		}

		.box#content-container {
			height: auto;
		}

		a:hover {
			text-decoration: none;
		}
	</style>

	<!-- Load external ajax file -->
	<script type="text/javascript" src="ajax.js"></script>
</head>

<body onload="ambilPost()">

<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">
  	<a class="navbar-brand" href="dashboard.php">
  		<img src="logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    	D3IFCOOL
  	</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  	<ul class="navbar-nav mr-auto"></ul>

    	<form class="form-inline my-2 my-lg-0">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item dropdown">

	        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

	        		  <!-- PHP code echo username -->
			          <?php 
			          	$activeUser = $_SESSION['login'];
			          	echo $activeUser;
			          ?>
	        		</a>

			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="logout.php">
			          	Log out
			          	<img class="glyph-icon" src="icon.png"/>
			          </a>
			        </div>

      			</li>
     		</ul>
    	</form>

  </div>
  
  </div>
</nav>

<!-- Box for input post content -->
<div class="container" id="container">
	<div class="box">
		<form >
			<textarea id="content" name="content" class="form-control" placeholder="Write Something..." maxlength="140"></textarea>
			<br>
			<button onclick="buatPost(this.value);" type="button" style="float:right;" class="btn btn-info btn-sm">POST</button>
		</form>
</div>

<!-- div for load post list -->
<div id="post-content">  </div>

</div>

<!-- load external javascript -->
<script type="text/javascript" src="assets/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap.js"></script>
</body>
</html>