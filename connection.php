<?php
  $user = "root";
  $pass = "";
  $host = "localhost";
  $database = "ratingsitedb";

  $conn = new mysqli($host,$user,$pass,$database);
  if ($conn->connect_error ){
    die("Connection could not be established");
  }
  else{
    echo "Successfully connected.";
  }


 ?>
