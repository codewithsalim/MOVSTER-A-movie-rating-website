<?php
  session_start();
  include_once 'connection.php';
  $com = $_POST['added_comment'];
  $user = $_SESSION['loggedin_id'];
  $cmid =$_GET['id'];
  $st = 'INSERT INTO comments(mid,username,comment) VALUES("' .$cmid. '","' .$user. '","' .$com. '")';

  if($conn->query($st)){

    header('Location:details.php?movie='.$cmid.'');
  }


 ?>
