<?php  
	include "connection.php";
	
	
	session_start();
	
	$activeUser = $_SESSION['login'];

	$getPostQuery = mysqli_query($conn, "SELECT * FROM post");
	

	foreach($getPostQuery as $value) {
		$post = $value['post'];
		$id = $value['id_post'];
		$likes = $value['likes'];
?>
<div class='box' id='content-container'>
	<div class='row'>

		<!-- this is for profile picture -->
		<div class='col-md-1'>
			<img src='profile.png' width='30' height='30' class='d-inline-block align-top'>
		</div>

		<!-- this is for username -->
		<div class='col-md-11' style='padding-left:5px;'>
			<b><p class='text-muted'> <?php echo $activeUser; ?> </p></b>
		</div>
	</div>

	<!-- this is for post content -->
	<div class='row'>
		<div class='col-md-1'></div>
		<div class='col-md-11' style='padding-left:5px;'>
			<p class='text-muted' id='post-text'> <?php echo $post; ?> </p>
			<p class="text-muted" id="post-text"><?php echo 'Like : ' . $likes; ?></p>
		</div>
	</div>

	<!-- this is for like and delete button -->
	<div class='row' style='margin-top: 10px;'>
		<div class='col-md-1'></div>
		
		<div class='col-md-1' style='padding-left:5px;'>
		<button id="like<?= $id ?>" style='width:80px;' class='btn btn-success btn-sm' onclick="like(this.value)" value="<?php echo $id; ?>">Like</button>
		<button id="unlike<?= $id ?>" style='width:80px; display:block;
		margin-top: 20%; background-color: orange; color: white;' class='btn btn-error btn-sm' onclick="unlike(this.value)" value="<?php echo $id; ?>">Unlike</button>
		</div>

		<div class='col-md-10' style='padding-left:40px;'>
			<button style='width:80px;' class='btn btn-danger btn-sm' onclick="hapusPost(this.value)" value="<?php echo $id; ?>">Delete</button>
		</div>
	</div>
</div>
<?php
	}
?>

