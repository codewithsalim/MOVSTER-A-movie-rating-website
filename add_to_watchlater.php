<?php
  session_start();
  require_once 'connection.php';
  $mid = $_GET['id'];
  $user = $_SESSION['loggedin_id'];
  $tas = $_GET['task'];
  if ($tas == 'update'){

    $stm1 = 'UPDATE ratings SET watch_later = 1 WHERE mid='.$mid.' and username = "'.$user.'"';
    echo $stm1.'<br>';
    if($conn->query($stm1) === TRUE ){
      header('Location:http://localhost/3/details.php?movie='.$mid.'');
    }

  }

  elseif ($tas == 'insert'){
    $stm2 = 'INSERT INTO ratings (mid,username,watch_later) VALUES("'.$mid.'","'.$user.'",1)';
    echo $stm2.'<br>';
    if($conn->query($stm2)){
      header('Location:http://localhost/3/details.php?movie='.$mid.'');
    }
  }

 ?>
