<?php
if(isset($_POST['btnSubmit'])){
  if($_POST['user'] === 'claire'){
    setcookie('user','claire',time()+300);
    header('Location:index.php');
  }
  elseif ($_POST['user'] === 'brian' ) {
    setcookie('user','brian',time()+300);
    header('Location:index.php');
  }
  else{
    echo "<script>alert('User ID atau email salah')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <style media="screen">
      #logo{
        height: 70px;
        text-align: center;
      }
      .col-12{
        text-align: center;
        top: 20px;
        margin-bottom: 40px;
      }
    </style>
  </head>
  <body>
    <div class="col-12">
      <img src="images/logo.png" id="logo">
    </div>
    <div class="container">
      <form class="card form col-md-4 m-auto shadow-sm p-3 mb-5 bg-white rounded" method="post">
        <h4 class="text-center">Login</h4>
        <div class="form-group">
          <label>User ID</label>
          <input type="text" name="user" placeholder="User ID" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="btnSubmit" class="btn btn-primary">Login</button>
        </div>
        <div class="form-group">
          <a href="register.php"><button type="button" class="btn btn-clear btn-sm text-muted border border-dark">Register admin</button> </a>
        </div>
      </form>
    </div>
  </body>
</html>
