<?php

session_start();

  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass =""; //pass login phpMyAdmin
  $db 	="db_tanjungdatuk"; //nama database
  $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>
