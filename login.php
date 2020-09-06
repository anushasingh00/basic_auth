<?php include('server.php') ?>
<!DOCTYPE html>
<html>  
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login TO Play</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>USERNAME</label>
  		<input type="text" name="USERNAME" >
  	</div>
  	<div class="input-group">
  		<label>PASSWORD</label>
  		<input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
    Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>