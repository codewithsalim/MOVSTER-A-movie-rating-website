<?php
  session_start();
  include 'connection.php';
  $loggedin_status =False;

  $username_check = $_POST["uname"];
  $password_check = $_POST["upass"];
  echo $username_check.$password_check;
  $sq = 'select username from userdata where username ="'.$username_check .'" and password = "'.$password_check.'"' ;
  echo "<br>".$sq;
  $result = $conn->query($sq);

  if($result->num_rows <1){
      echo "Error loggin in.Wrong username or password";

  }
  else {

    //echo "Successfully logged in.<br>";
    while($row = $result->fetch_assoc()) {
        $_SESSION['loggedin_id'] = $row["username"];

        //echo "$loggedin_id" ;
        }

    $loggedin_status=True;
    header('Location:http://localhost/myproject/Homepage.php');
  }

 ?>
