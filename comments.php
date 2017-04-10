<?php

  include_once 'connection.php';



  $sq = 'SELECT username,comment,timestamp FROM comments WHERE mid ='.$current_mid.' ORDER BY timestamp DESC';
  $re = $conn->query($sq);
  while($r = $re->fetch_assoc()){
    echo $r['username'].' : '.$r['comment'];
    echo '<br>';
    echo '<p style=" float:right; font-size:10pt">'.$r['timestamp'].'</p>';
    echo '<br>';
  }


 ?>
