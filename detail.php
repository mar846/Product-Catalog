<?php
  $id =  $_SERVER['QUERY_STRING'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Description</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- <script src="https://kit.fontawesome.com/841a2841ae.js"></script> -->
    <!-- <script src="fontawesome/js/fontawesome.min.js" charset="utf-8"></script> -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <style media="screen">
    .scrollmenu {
    background-color: #FFF;
    overflow: auto;
    overflow-y: hidden;
    white-space: nowrap;
    }
    .card{
      display: inline-block;
    }
    body{
      font-size: 15px;
    }
      .btn-lg{
        width: 4rem;
        height: 2rem;
        background: #FFFFFF;
        border:1px solid black;
        font-size: 15px;
      }
      .description{
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
      <H2>Basic Knitware</h2>
      <div>
        <small><b>Description</b></small>
          <p class="description">Long sleeve knit sweater with a round neckline. Featuring side vents at the hem and ribbed trims.

HEIGHT OF MODEL: 177 cm. / 5′ 9″</p>
      </div>
      <div class="my-3">
        <h5>SIZE</h5>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">XS</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">S</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">M</button>
        <button type="button" class="btn btn-outline-dark btn-lg" name="button">L</button>
      </div>
      <div>
        <h5>Available At</h5>
        <?php
          $rand = rand(0,4);
          if ($rand == 0) {
            echo "<h5>Tunjungan Plaza</h5>";
          }
          else if ($rand == 1) {
            echo "<h5>Pakuwon Mall</h5>";
          }
          elseif ($rand == 2) {
            echo "<h5>Galaxy Mall</h5>";
          }
          else {
            echo "<h5>Coming Soon</h5>";
          }
         ?>
      </div>
      <div class="row mb-5">
        <div class="col-6">
          <button type="button" name="button" class="btn btn-outline-dark btn-favorite fas fa-heart">&nbsp;Favorite</button>
        </div>
        <div class="col-6">
          <button type="button" name="button" class="btn btn-outline-dark btn-favorite fas fa-bell">&nbsp;Notify Me</button>
        </div>
      </div>
      <h5>Recommended</h5>
      <div class="scrollmenu mt-3">
        <?php
        for ($i=1; $i < 6; $i++) {
          ?>
          <a href="detail.php?<?php echo $i; ?>">
            <div class="card" style="width: 50%;">
              <img src="images/crm_<?php echo $i;?>.jpg" class="card-img-top" style="width: 100%;">
            </div>
          </a>
          <?php
        }
         ?>
      </div>
    </div>
  </body>
</html>
