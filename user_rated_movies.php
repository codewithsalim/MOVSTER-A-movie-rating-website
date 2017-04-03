<?php

  require_once 'connection.php';
  $current_user = $_SESSION['loggedin_id'];
  $stmt = 'SELECT mname,rating FROM ratings NATURAL JOIN moviesdata  WHERE username ="'.$current_user.'"';
  //echo $stmt;
  $result = $conn->query($stmt);
  echo "<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align:center;
    }
  </style>";
  echo "<table style='width:50%'>";
    echo "<th>Movie</th>";
    echo "<th>Your Rating</th>";
    while($row = $result->fetch_assoc()){
    echo"<tr>
    <td>".$row['mname']."</td>
    <td>".$row['rating']."</td>
    </tr>";
    }
    echo"</table>";

 ?>
