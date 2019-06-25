<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
