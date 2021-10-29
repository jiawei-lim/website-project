<?php
session_start();
require_once ('component.php');
require ('db.php');

if (isset($_POST['add']) ){
  if(@$_SESSION['logged_in'] == true){
  if(isset($_SESSION['cart'])){
    $product_array_id=array_column($_SESSION['cart'],"id");

    if(in_array($_POST['id'],$product_array_id)){
      echo "<script>alert(\"product is already in cart\")</script>";
      echo "<script>window.location='products.php'</script>";
    }else{
      $count = count($_SESSION['cart']);
      $item_array=array(
        'id'=>$_POST['id']
      );

      $_SESSION['cart'][$count]=$item_array;
    }
  }else{
    $item_array=array(
      'id'=>$_POST['id']
    );
    $_SESSION['cart'][0]=$item_array;
  }
}else{
  echo "<script>alert(\"To add cart,plase log in first.\")</script>";
  header('products.php');
}
};
 ?>

<html>
<head>
<link rel="javascript" href="http://localhost:35729/livereload.js">
<link rel="stylesheet" href="faradaystylesheet.css">
<title>Faraday Futuristics</title>
<link rel="icon" href="waves_876527.png">
<script src="https://kit.fontawesome.com/f458dc2338.js" crossorigin="anonymous"></script>
</head>
<body>
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

<div class="productheader">
  <div class="pheadertext">Products</div>  <div class="pheadertext carttext"><a href="cart.php"><i class="fas fa-shopping-cart zz"></i>
    <?php
      if(isset($_SESSION['username'])){
        echo "<span>".$_SESSION['username']."'s</span>";
      } else{
        echo null;
      }
    ?> Cart
    <?php
      if(isset($_SESSION['cart'])){
        $count= count($_SESSION['cart']);
        echo "<span id=\"ccount\">".$count."</span>";
      }else{
        echo "<span id=\"ccount\">0<span>";
      }
     ?>
  </a></div>
</div>
<div class="productcontent">
<?php

  $get = $mysqli->query("SELECT * FROM products ");
  if(mysqli_num_rows($get)>0){
  while($row=mysqli_fetch_assoc($get)){
    component($row['productimg'],$row['productname'],$row['price'],$row['id']);
  }
}else{
  echo "<p>There are no products avalible currently</p>";
}
 ?>
  </div>
</center>
<footer>
   <div class="infofooter">
   <div class="footerbranding">
     <br><br>
     <img src="white waves.png" alt="logo" width="15%" id="footerlogo">
     <h1 id="footerh1">FARADAY FUTURISTICS</h1>
   </div>
   <div class="footerhelp">
     <p id="footerheader">Questions?</p>
     <p id="footerhelp">Read our FAQ here.</p>
     <p id="footerheader">Need further help?</p>
     <p id="footerhelp">Contact our customer support at:<br>support@faraday.com<br>Contact - 04-111-7738<br> Submit a Customer Support ticket</p>
     <p id="footerheader">Privacy Policy | Terms & Conditions</p>
   </div>
 </footer>
</body>
</html>
