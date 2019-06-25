<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
    </style>
  </head>
  <body>
    <div class="text-center my-3">
      <img src="images/logo.png" style="height:3rem;" alt="">
    </div>
    <h4>NEW</h4>
    <div class="scrollmenu mt-3">
      <?php
      for ($i=1; $i < 10; $i++) {
        ?>
        <a href="detail.php?<?php echo $i; ?>">
          <div class="card" style="width: 10rem;">
            <img src="images/crm_<?php echo $i;?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">

            </div>
          </div>
        </a>
        <?php
      }
       ?>
    </div>
    <?php
    for ($i=1; $i < 5; $i++) {
      ?>
      <div class="card">
        <img src="images/crm_<?php echo $i;?>.jpg" class="card-img-top" alt="...">
        <div class="card-body">

        </div>
      </div>
      <?php
    }
     ?>
  </body>
</html>
