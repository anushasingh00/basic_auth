<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>REGISTER FOR GAME</h2>
  </div>
  <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>NAME</label>
        <input type="text" name="NAME" value="<?php echo $NAME; ?>">
  	  </div>
  	  <div class="input-group">
        <label>EMAIL</label>
        <input type="email" name="EMAIL" value="<?php echo $EMAIL; ?>">
      </div>
      <div class="input-group">
        <label>USERNAME</label>
        <input type="text" name="USERNAME" value="<?php echo $USERNAME; ?>">
      </div>
      
      <div class="input-group">
        <label>PASSWORD</label>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label>CONFIRM PASSWORD</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p>
  </form>
</body>
</html>