<?php
  $id =  $_SERVER['QUERY_STRING'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Description</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/841a2841ae.js"></script>
    <style media="screen">
      .btn-lg{
        width: 4rem;
        height: 2rem;
        background: #FFFFFF;
        border:1px solid black;
        font-size: 15px;
      }
      .scrollmenu{
        overflow-y: scroll;
        height: 5rem;
      }
      .scrollmenu::-webkit-scrollbar{
        display: none;
      }
      .fa-times-circle{
        position: absolute;
        color: black;
        font-size: 25px;
        opacity: 0.5;
        left: 10px;
        top: 10px;
      }
      .btn-favorite{
        position: absolute;
        color: black;
        font-size: 20px;
        opacity: 1;
        width: 90%;
      }
    </style>
  </head>
  <body>
    <a href="index.php"><i class="fas fa-times-circle"></i></a>
    <img src="images/crm_<?php echo $id;?>.jpg" style="width:100%;">
    <div class="container">
      <H2>DENIM</h2>
      <div>
        <strong>Description</strong>
        <div class="scrollmenu">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div>
        <h4>SIZE</h4>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">XS</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">S</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">M</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">L</button>
      </div>
      <div>
        <h4>Available At</h4>
        <?php
          $rand = rand(0,4);
          if ($rand == 0) {
            echo "Tunjungan Plaza";
          }
          else if ($rand == 1) {
            echo "Pakuwon Mall";
          }
          elseif ($rand == 2) {
            echo "Galaxy Mall";
          }
          else {
            echo "Coming Soon";
          }
         ?>
      </div>
      <div class="row">
        <div class="col-6">
          <button type="button" name="button" class="btn btn-outline-dark btn-favorite fas fa-heart">Favorite</button>
        </div>
        <div class="col-6">
          <button type="button" name="button" class="btn btn-outline-dark btn-favorite fas fa-bell">Notify Me</button>
        </div>
      </div>
    </div>
  </body>
</html>
