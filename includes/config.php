<?php
  db_start();

  $timezone = date_default_timezone_set('Asia/Tokyo');
  
  $con = mysqli_connect("mysql", "root", "pass" ,"spotify_clone");

  if (mysqli_connect_errno()) {
    echo "Failed to connect:" . mysqli_connect_errno();
  }
  
?>