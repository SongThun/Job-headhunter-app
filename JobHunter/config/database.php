<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $hostname = '';
  $username = '';
  $password = '';
  $database = '';
  $conn = mysqli_connect('', '', '', '');

  if (!$conn){
    die('Connection error: ' . mysqli_connect_error());
  }

?>