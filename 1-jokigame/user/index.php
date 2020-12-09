<?php
include_once '../config/Config.php';
$con = new Config();
switch (@$_GET['mod']) {
  case 'user':
    include_once 'views/pesan.php';
    break;
  default:
    include_once 'controller/login.php';
}
