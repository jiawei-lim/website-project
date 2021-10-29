<?php

$email=$mysqli->escape_string($_POST['email']);
$check = $mysqli->query("SELECT * FROM users WHERE email='$email'");

if ($check ->num_rows == 0){
  $_SESSION['message'] = 'A user with that email does not exist.Please try again.';

}else{
  $user = $check->fetch_assoc();

  if(password_verify($_POST['password'],$user['password'])){

    $_SESSION['email'] = $user['email'];
    $_SESSION['username'] =$user['username'];
    $_SESSION['logged_in'] = true;

    header("location:account.php");

  }
else{
  $_SESSION['message'] = "You have entered the wrong password,plase try again.";
  header("location:error.php");
}

}













 ?>
