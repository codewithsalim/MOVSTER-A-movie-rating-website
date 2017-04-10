<?php
  session_start();
  require_once 'connection.php';
  $mid = $_GET['id'];
  $user =$_SESSION['loggedin_id'];
  $sql ='SELECT mid,username,watch_later FROM ratings where mid='.$mid.' and username = "'.$user.'"';
  //echo $sql;
  $res = $conn->query($sql);
  if ($res->num_rows == 1){
    $rrow = $res->fetch_assoc();
    //added to watch later
    if($rrow['watch_later'] == 1){
      echo "<h2>Added to watch later</h2>";

    }
    //have to update record
    elseif ($rrow['watch_later'] == 0) {
      //echo $mid;
      //$hre = 'add_to_watchlater.php?task=insert&id=5';

      echo'<form action="add_to_watchlater.php?id='.$mid.'&task=update"  method="post" id="form1">
      <button type="submit" name="submit8" >Add to Watch Later</button>
      </form>';
      }
    }

  //insert the record
  else{
    echo'<form action="add_to_watchlater.php?id='.$mid.'&task=insert"  method="post" id="form2">
    <button type="submit" name="submit9" value="insert">Add to watch later</button>
    </form>';

}

?>
