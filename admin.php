<?php
include('admin_login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
	<div class="container" align="center" style="width: 25%"> <br> <br>
		
		<h1 align="center">Admin Login</h1>
	

		<form action="" method="post">
			<div class="form-group">
  				<label>Name:</label> <br>
  				<input type="text" name="a_username" class="form-control"  placeholder="Enter name" >
  		</div>
			<!-- <div class="form-group" >
				<label>Name :</label> <br>
				<input  class="form-group" name="a_username" placeholder="Enter name" type="text">
			</div> -->
		<!-- <div class="form-group" >
				<label>Password :</label> <br>
				<input type="password" name="a_password" class="form-group"  placeholder="Enter password" >
		</div> -->

		<div class="form-group">
  		<label>Password:</label> <br>
  		<input type="password" name="a_password" class="form-control" placeholder="Enter password">
  	</div>

	<input name="submit" class="btn btn-default" type="submit" value=" Login ">
	<span><?php echo $error; ?></span>
</form>
</div>


</body>
</html>