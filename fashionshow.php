<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
    .menu{
      font-size: 1rem;
      left:15px;
      top:15px;
      position: absolute;
    }
    .fa-times{
      color: white;
    }
    .menubar{
      background: gray;
      opacity: 0.7;
    }
    .sidebar-nav {
    position: absolute;
    top: 0;
    left: -621px;
    width: 100%;
    height: 667px;
    margin: 0;
    padding: 0;
    list-style: none;
    background: black;
    z-index: 10000000;;
  }
  .sidebar-nav li {
      position: relative;
      line-height: 20%;
      top:0px;
      display: inline-block;
      width: 100%;
      font-size: 1rem;
      text-align: center;
  }

  .sidebar-nav li a {
      display: block;
      color: #FFFFFF;
      text-decoration: none;
      padding: 5px 15px 15px 30px;
  }

  .sidebar-nav li a:hover,
  .sidebar-nav li a:active,
  .sidebar-nav li a:focus,
  .sidebar-nav li.open a:hover,
  .sidebar-nav li.open a:active,
  .sidebar-nav li.open a:focus{
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      background-color: transparent;
  }

  .sidebar-nav > .sidebar-brand {
      height: 5px;
      font-size: 20px;
      line-height: 44px;
  }
  .sidebar-nav .dropdown-menu {
      position: relative;
      width: 100%;
      padding: 0;
      margin: 0;
      border-radius: 0;
      border: none;
      background-color: #222;
      box-shadow: none;
  }
  .fa-play{
    color: white;
    opacity: 0.9;
    position: absolute;
    top: 106px;
    left: 150px;
  }
  .card img{
    opacity: 0.5;
  }
  .card{
    border: none !important;
    margin-bottom: 15px;
  }
  .card .image-background{
    background: black;
  }
    </style>
  </head>
  <body>
    <i class="fa fa-bars menu hamburger is-closed" data-toggle="offcanvas"></i>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav py-3">
          <li class="sidebar-brand">
              <a href="index.php">
                 <img src="images/logo-white.png" style="width:5rem;">
              </a>
              <i class="fa fa-times menu" class="hamburger is-opened" data-toggle="oncanvas"></i>
          </li>
          <li>
              <a href="fashionshow.php">FASHION </a>
          </li>
          <li>
              <a href="#">NEW COLLECTION</a>
          </li>
          <li>
              <a href="#">WOMAN</a>
          </li>
          <li>
              <a href="#">MAN</a>
          </li>
          <li>
              <a href="#">KID</a>
          </li>
      </ul>
  </nav>
    <div class="text-center my-3">
      <a href="index.php">
        <img src="images/logo.png" style="height:3rem;" alt="">
      </a>
    </div>
    <div class="col-12">
      <?php
      $a=2019;
      for ($i=1; $i < 5; $i++) {
        ?>
        <div class="card" class="mb-3" style="width:20rem;">
          <div class="image-background">
            <img src="images/fashionshow/crm_<?php echo $i;?>.jpeg" style="width:100%;" >
            <i class="fas fa-play"></i>
          </div>
          <div class="card-text">
            Fashion Show <?php echo $a; ?>
          </div>
        </div>

        <?php
        $a--;
      } ?>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;

      trigger.click(function () {
        hamburger_cross();
      });

      function hamburger_cross() {

        if (isClosed == true) {
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
    }
    var a = true;
    $('[data-toggle="offcanvas"]').click(function(){
      $('.sidebar-nav').css({left:'0px',transition:'1s ease-in-out'});
      a=false;
    });
    $('[data-toggle="oncanvas"]').click(function(){
        $('.sidebar-nav').css({left:'-621px',transition:'1s ease-in-out'});
        a=true;
    });
  });
  </script>
</html>
