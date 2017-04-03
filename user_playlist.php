<?php
  require_once 'connection.php';
  $current_user = $_SESSION['loggedin_id'];
  $stmt = 'SELECT mname FROM ratings NATURAL JOIN moviesdata  WHERE username ="'.$current_user.'" and watch_later=1';
  $result = $conn->query($stmt);
  echo "<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align:center;
    }
  </style>";
  echo "<table style='width:50%'>";
    echo "<th>Movie added to Watch later</th>";
    while($row = $result->fetch_assoc()){
    echo"<tr>
    <td>".$row['mname']."</td>
    </tr>";
    }
    echo"</table>";

 ?>
