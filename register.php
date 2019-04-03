<?php include('connection.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container" align="center" style="width: 25%"> <br> <br>
  <h2 align ="center">REGISTER</h2>
  
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="form-group">
  	  <label>Username:</label> <br>
  	  <input type="text" name="username" class="form-control" placeholder="Enter name" value="<?php echo $username;  ?>">
  	</div>
  	<div class="form-group">
  	  <label>Email:</label> <br>
  	  <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo $email; ?>">
  	</div>
  	<div class="form-group">
  	  <label>Password:</label> <br>
  	  <input type="password" class="form-control" placeholder="Enter password" name="password_1">
  	</div>
  	<div class="form-group">
  	  <label>Confirm password:</label> <br>
  	  <input type="password" class="form-control" placeholder="Re-enter password" name="password_2">
  	</div>
  	<div class="form-group">
  	  <button type="submit" class="btn btn-default" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</body>
</html>