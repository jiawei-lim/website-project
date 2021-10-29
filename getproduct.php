<?php

function getData(){

  $get = $mysqli->query("SELECT * FROM products ");
  if(mysqli_num_rows($get)>0){
    return $get;
  }
}


 ?>
