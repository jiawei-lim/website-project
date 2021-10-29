<?php

function component($productimg,$productname,$price,$id){
  $element = "

  <div class=\"box no\">
    <form action=\"products.php\" method=\"post\">
      <div class=\"boximages\">
        <img src=\"$productimg\" alt=\"\" height=\"100%\" width=\"100%\">
      </div>
      <div class=\"boxtext\">
          <p>$productname</p>

          <p>MYR$price</p>
          <button type=\"submit\" name=\"add\">Add to Cart<i class=\"fas fa-cart-plus\"></i></button>
          <input type=\"hidden\" value=\"$id\" name=\"id\">
      </div>
    </form>
  </div>

  ";
echo $element;
};

function cartelement($productimg,$productname,$price,$id){
  $element="
  <form action=\"cart.php?action=remove&id=$id\" method=\"post\">
  <div class=\"display-inline-block  cartitems\">
    <div class=\"display-inline-block imgspace\">
      <img src=\"$productimg\" alt=\"\" width=\"100%\" height=\"100%\">
    </div>
    <div class=\"display-inline-block cartinfo\">
      <p>$productname</p>
      <p>MYR$price</p>
      <button class=\"btnsmall\" name=\"remove\" type=\"submit\">Remove<i class=\"far fa-trash-alt\"></i></button>
    </div>
    <div class=\"display-inline-block cartnumber\">
    </div>
  </div>
  </form>
  ";
  echo $element;
}

function logininelement($user){
  $element="
  <div class=\"logged-in-accounts-page\" >
    <div class=\"sidebar\" id=\"div1\">
      <table class=\"sidebartable\">
        <tr><td><h4>WELCOME,$user</h4></td></tr>
        <tr><td class=\"side navitems\"><p>ORDERS</p></td></tr>
        <tr><td class=\"side navitems\"><p>MY PROGRESS</p></td></tr>
        <tr><td class=\"side navitems\"><p>ADDRESS</p></td></tr>
        <tr><td class=\"side navitems\"><p><a href=\"logout.php\">LOG OUT</a></p></td></tr>
      </table>
    </div>
    <div class=\"maincontent\">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
         culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  ";

  echo $element;
}


 ?>
