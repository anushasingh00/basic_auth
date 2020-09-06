<?php
session_start();
$NAME = "";
$EMAIL    = "";
$USERNAME = "";
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['reg_user'])) {
  $NAME = mysqli_real_escape_string($db, $_POST['NAME']);
  $EMAIL = mysqli_real_escape_string($db, $_POST['EMAIL']);
  $USERNAME = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  if (empty($NAME) || empty($EMAIL) || empty($USERNAME) || empty($password_1)) { 
    array_push($errors, "Please fill all the fields"); 
  }
  // if (empty($EMAIL)) { array_push($errors, "Email is required"); }
  // if (empty($USERNAME)) { array_push($errors, "Username is required"); }
  // if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query = "SELECT * FROM users WHERE USERNAME='$USERNAME' OR EMAIL='$EMAIL' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) { 
    if ($user['USERNAME'] === $USERNAME) {
      array_push($errors, "Username already exists");
    }

    if ($user['EMAIL'] === $EMAIL) {
      array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  	$password = hash('sha256',$password_1);

  	$query = "INSERT INTO users (NAME, USERNAME, EMAIL, password_1) 
  			  VALUES('$NAME','$USERNAME', '$EMAIL', '$password')";
  	mysqli_query($db, $query);
  	// $_SESSION['USERNAME'] = $USERNAME;
  	// $_SESSION['success'] = "You are now registered";
  	header('location: login.php');
  }
}
if (isset($_POST['login_user'])) {
  $USERNAME = mysqli_real_escape_string($db, $_POST['USERNAME']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  if (empty($USERNAME)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password_1)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = hash('sha256',$password_1);
  	$query = "SELECT * FROM users WHERE USERNAME ='$USERNAME' AND password_1='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) >= 1) {
  	  $_SESSION['USERNAME'] = $USERNAME;
      $_SESSION['success'] = "You are now logged in";
       //header('location: https://shivangi-ch.github.io/');
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>