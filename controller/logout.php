<?php session_start();
  include './db/connect.php';
  session_destroy();
  header('location:./login.html');



?>
