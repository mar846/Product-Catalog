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
        margin-bottom: 30px;
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
          <label>Email</label>
          <input type="email" name="email" placeholder="Email" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label>User ID</label>
          <input type="text" name="user" placeholder="User ID" class="form-control" autofocus>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Password" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" name="btnSubmit" class="btn btn-primary">Register</button>
        </div>
        <div class="form-group">
          <a href="login.php"><button type="button" class="btn btn-clear btn-sm text-muted border border-dark">Login</button> </a>
        </div>
      </form>
    </div>
  </body>
</html>
