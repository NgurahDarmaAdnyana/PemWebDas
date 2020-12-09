<?php
if (isset($_POST['email'])) {
  $conn = $con->koneksi();
  $email = $_POST['email'];
  $psw = md5($_POST['password']);
  $sql = "SELECT * FROM data_login_user where password ='$psw' and email ='$email' and status='Y'";
  $user = $conn->query($sql);
  if ($user->num_rows > 0) {
    $sess = $user->fetch_array();
    session_start();
    $_SESSION['login']['email'] = $sess['email'];
    $_SESSION['login']['id'] = $sess['id'];
    header('Location: index.php?mod=user');
  } else {
    $msg = "Email dan Password tidak cocok";
    include_once 'views/v_login.php';
  }
} else {
  include_once 'views/v_login.php';
}
