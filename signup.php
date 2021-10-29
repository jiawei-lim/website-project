<?php

$_SESSION['email'] = $_POST['email'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$email= $mysqli->escape_string($_POST['email']);
$Username= $mysqli->escape_string($_POST['username']);
$Password = $mysqli->escape_string(password_hash($_POST['password'],PASSWORD_BCRYPT));
echo $Password;
//check if email already exists
$check = $mysqli->query("SELECT* FROM users WHERE email='$email'") or die($mysqli->error());
if ($check->num_rows > 0){
  $_SESSION['message'] = 'The email has already been registered. Please Try again.';
  header("location:error.php");
}
else{
  $sql = "INSERT INTO users (email,username,password)". "VALUES('$email','$Username','$Password')";
  $mysqli->query($sql);
  $_SESSION['logged_in'] = true;
  header("location:account.php");
}

 ?>
