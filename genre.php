<?php
  require_once 'connection.php';
  $para = $_GET['para'];
  $qu = 'SELECT mid,mname,avg_rating,actors FROM moviesdata WHERE genre LIKE "%'.$para.'%"';
  $rs = $conn->query($qu);

  echo "<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align:center;
    }
  </style>";
  echo"<br><br>";
  echo "<table style='width:80%'>";
    echo "
    <th>Sr.No</th>
    <th>Movie</th>
    <th>Rating</th>
    <th>Cast</th>
    ";
    $i =1;

    while( $roww = $rs->fetch_assoc()){
      $href ='details.php?movie='.$roww['mid'];
    echo"<tr >
    <td>".$i."</td>

    <td><a href ='$href'>".$roww['mname']."</a></td>
    <td>".$roww['avg_rating']."</td>
    <td>".$roww['actors']."</td>
    </tr>";
    $i = $i +1;
    }
    echo"</table>";



 ?>
