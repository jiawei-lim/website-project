<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    session_start();
      echo $_SESSION['email'].'<br>';
      echo $_SESSION['username'].'<br>';

      if (isset($_POST['logout'])){
        session_destroy();
        echo '<p>You r logged out</p>';
        header ("location:account.php");
      }
     ?>
<form action="profile.php" method="post">
  <button name="logout">Log Out</button>
</form>
  </body>
</html>
