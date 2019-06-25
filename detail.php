<?php
  $id =  $_SERVER['QUERY_STRING'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Description</title>
    <style media="screen">
      .btn-lg{
        width: 4rem;
        height: 2rem;
        background: #FFFFFF;
        border:1px solid black;
      }
    </style>
  </head>
  <body>
    <img src="images/crm_<?php echo $id;?>.jpg" style="width:100%;">
    <strong>DENIM</strong>
    <div class="mt-3">
      <strong>Description</strong>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="">
      <h4>SIZE</h4>
      <button type="button" class="btn btn-outline-dark btn-lg" name="button">XS</button>
      <button type="button" class="btn btn-outline-dark btn-lg" name="button">S</button>
      <button type="button" class="btn btn-outline-dark btn-lg" name="button">M</button>
      <button type="button" class="btn btn-outline-dark btn-lg" name="button">L</button>
    </div>
  </body>
</html>
