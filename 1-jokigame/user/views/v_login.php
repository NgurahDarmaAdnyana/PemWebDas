<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Joki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container ">
    <nav class="navbar navbar-default" align="center">
      <h1>WELCOME TO JOKI.id</h1>
    </nav>
    <div class="row">
      <div class="col-md-offset-4 col-md-4 ">
        <h3 class="center">Halaman Login Pelanggan</h3>
        <br>
        <form action="" method="POST">
          <div class="form-group">
            <label for="email">Email/Username:</label>
            <input type="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control">
            <span><?= (isset($msg)) ? $msg : ''; ?></span>
            <hr>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default" name="login">Submit</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</body>

</html>