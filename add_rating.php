<?php
  session_start();
  $useri = $_SESSION['loggedin_id'];
  $movi = $_GET['mid'];
  $rat = $_POST['star'];
  require_once 'connection.php';
  $mysql = 'SELECT * FROM ratings WHERE username ="'.$useri.'" and mid= "'.$movi.'"  ';
  $myresult = $conn->query($mysql);
  if ($myresult->num_rows == 1){
    $query1 = 'UPDATE ratings SET rating='.$rat.'  WHERE username ="'.$useri.'" and mid= '.$movi.'  ';
    $result1=$conn->query($query1);

  }
  else{
    $query2 = 'INSERT INTO ratings(username,mid,rating) VALUES("'.$useri.'",'.$movi.','.$rat.')';
    $result2=$conn->query($query2);
  }
  header('Location:http://localhost/3/details.php?movie='.$movi.'');


 ?>
