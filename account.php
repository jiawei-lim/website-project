<?php
require 'db.php';
require_once 'component.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://kit.fontawesome.com/f458dc2338.js" crossorigin="anonymous"></script>
  <link rel="javascript" href="http://localhost:35729/livereload.js">
  <link rel="stylesheet" href="faradaystylesheet.css">
  <title>Faraday Futuristics</title>
  <link rel="icon" href="waves_876527.png">
  <script>

    function signupfunction(){
      document.getElementById("login").style.display = "none";
      document.getElementById("register").style.display = "block";
    }

    function loginfunction(){
      document.getElementById("register").style.display = "none";
      document.getElementById("login").style.display = "block";
    }

  </script>
  <?php if( @ $_SESSION['logged_in'] == true){
    echo "<style>".".account-container{display:none;} .logged-in-accounts-page{display:block;}"."</style>";
  }
  ?>
</head>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['login'])){
    require 'login.php';
  }
  elseif (isset($_POST['signup'])) {
    require 'signup.php';
  }
}
 ?>
<body id="loginbody">
  <header>
    <a href="index.html"><div class="branding">
      <img src="white waves.png" alt="logo" id="logo">
      <h1>FARADAY FUTURISTICS</h1>
    </div>
    </a>
    <div class="nav-menu">
      <nav>
        <a href="products.php" class="navitems">PRODUCTS<i class="fas fa-microchip"></i></a>
          <a href="projects.html" class="navitems">INITIATIVES<i class="fas fa-hands-helping"></i></a>
        <a href="help.html" class="navitems">HELP<i class="fas fa-info-circle"></i></a>
        <a href="account.php" class="navitems">ACCOUNT<i class="fas fa-user-circle"></i></a>
      </nav>
    </div>
  </header>
    <div class="headercolor"></div>
  <center>
  <div class="account-container">
    <div class="account-tabs">
      <div class="account-login" id="login">
        <p id="logintext">Login</p>
        <form action="account.php" method="post">
          Welcome back! <br>
          <table>
          <tr><td>E-Mail :</td><td><input type="text" name="email" placeholder="Type your username" autocomplete="off" required><br></td></tr>
          <tr><td>Password :</td><td><input type="password" name="password" placeholder="Type your password" autocomplete="off" required ><br></td></tr>
        </table>
          <button class="accountbutton loginbutton"type="submit" value="submit" name="login" onclick="window.location.reload();">Login</button><br>
        </form>
          <button class="accountbutton signupbutton" onclick="signupfunction()">Sign Up</button>
      </div>
      <div class="account-register" id="register">
          <p id="logintext">Sign Up</p>
          <form action="account.php" method="post">
            Create your new account here: <br>
            <table>
            <tr><td>E-mail : </td><td><input type="text" name="email" placeholder="Type your email" autocomplete="off" required><br> </td></tr>
            <tr><td>Username : </td><td><input type="text" name="username" placeholder="Type your username" autocomplete="off"required><br> </td></tr>
            <tr><td>Password : </td><td><input type="password" name="password" placeholder="Type your password" autocomplete="off"required><br> </td></tr>
            <tr><td></td><td><input type="password" name="password2" placeholder="Confirm your password" autocomplete="off"required><br></td>
              </table>
            <button class="accountbutton loginbutton" type="submit" value="submit" name="signup">Sign Up</button><br>
          </form>
            <button class="accountbutton signupbutton" onclick="loginfunction()">Login</button>
      </div>
    </div>
  </div>
</center>
<?php
  if(isset($_SESSION['logged_in'])){
    logininelement($_SESSION['username']);
  };
  ?>
</body>
</html>
