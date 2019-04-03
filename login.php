<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body >
  <div class="container" align="center" style="width: 25%"> 
  <h2 align ="center">Please Login your credentials to proceed!</h2> <br> <br>
  
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  		<label>Username:</label> <br>
  		<input type="text" name="username" class="form-control"  placeholder="Enter name" >
  	</div>


  	<div class="form-group">
  		<label>Password:</label> <br>
  		<input type="password" name="password" class="form-control" placeholder="Enter password">
  	</div>
  	<div class="form-group">
  		<button type="submit" class="btn btn-default" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>