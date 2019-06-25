<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fashion Show</title>
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
      font-size: 2rem;
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
    height: 1103px;
    margin: 0;
    padding: 0;
    list-style: none;
    background: black;
    z-index: 10000000;
  }

  .sidebar-nav li {
      position: relative;
      line-height: 20px;
      display: inline-block;
      width: 100%;
      font-size: 2rem;
      text-align: center;
  }

  /* .sidebar-nav li:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
      height: 100%;
      width: 3px;
      background-color: #1c1c1c;
      -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
         -ms-transition:  width .2s ease-in;
              transition: width .2s ease-in;

  }
  .sidebar-nav li:hover:before,
  .sidebar-nav li.open:hover:before {
      width: 100%;
      -webkit-transition: width .2s ease-in;
        -moz-transition:  width .2s ease-in;
         -ms-transition:  width .2s ease-in;
              transition: width .2s ease-in;

  } */

  .sidebar-nav li a {
      display: block;
      color: #FFFFFF;
      text-decoration: none;
      padding: 10px 15px 10px 30px;
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
      height: 65px;
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
    </style>
  </head>
  <body>
    <i class="fa fa-bars menu hamburger is-closed" data-toggle="offcanvas"></i>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav">
          <li class="sidebar-brand">
              <a href="#">
                 <img src="images/logo-white.png" style="width:8rem;">
              </a>
              <i class="fa fa-times menu" class="hamburger is-opened" data-toggle="oncanvas"></i>
          </li>
          <li>
              <a href="#">FASHION SHOW</a>
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
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="dropdown-header">Dropdown heading</li>
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
          <li>
              <a href="#">Services</a>
          </li>
          <li>
              <a href="#">Contact</a>
          </li>
          <li>
              <a href="https://twitter.com/maridlcrmn">Follow me</a>
          </li> -->
      </ul>
  </nav>
    <div class="text-center my-3">
      <img src="images/logo.png" style="height:3rem;" alt="">
    </div>
    <?php
      for ($i=1; $i < 5; $i++) {
        ?>
        <div class="card">
          <img src="images/fashionshow/crm_<?php echo $i;?>.jpg" alt="" style="width:100%;">
        </div>
        <?php
      }
     ?>
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
