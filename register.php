<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container pt-5 mt-5">
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
  </body>
</html>
