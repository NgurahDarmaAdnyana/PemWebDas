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
    <h2>Form Pemesanan Joki</h2>
    <div class="row">
      <div class="col-sm-6 col-lg-6">
        <form action="" method="post">
          <div class="form-group">
            <label for="nama">Nama pemesan</label>
            <input type="text" name="nama" id="nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="nickname">Nick name game</label>
            <input type="text" name="nickname" id="nickname" class="form-control">
          </div>
          <div class="form-group">
            <label for="jenis_layanan">Jenis layanan</label>
            <input type="text" name="jenis_layanan" id="jenis_layanan" class="form-control">
          </div>
          <div class="form-group">
            <label for="id_server_akun">ID/server akun</label>
            <input type="text" name="id_server_akun" id="id_server_akun" class="form-control">
          </div>
          <div class="form-group">
            <label for="no_telepon">No Telepon</label>
            <input type="text" name="no_telepon" id="no_telepon" class="form-control">
          </div>
        </form>
      </div>
    </div>
    <a href="controller/logout.php">Logout</a>
  </div>
</body>

</html>