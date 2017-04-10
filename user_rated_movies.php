<?php
  require_once 'connection.php';
  $current_user = $_SESSION['loggedin_id'];
  $stmt = 'SELECT mname,rating FROM ratings NATURAL JOIN moviesdata  WHERE username ="'.$current_user.'" and rating != 0';
  //echo $stmt;
  $result = $conn->query($stmt);
  echo "<style>
   table, th, td {
    font-family: 'Titillium Web', sans-serif;
    border-radius: 15px;
    border: 1px solid inherit;
    border-collapse: collapse;
    padding: 20px;
    text-align: center;
    font-size:20px;
}
table#t01 tr:nth-child(even) {
    background-color: #c8c0c0;
    color:#4c0000;
}
table#t01 tr:nth-child(odd) {
   background-color:#d3d3d3;
   color:#990000;
}
table#t01 th {
    background-color: #302a2e;
    color: white;

}
  </style>";
  echo "<table id='t01' style='width:75%'>";
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
