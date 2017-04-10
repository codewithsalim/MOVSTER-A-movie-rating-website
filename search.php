<?php
  require_once 'connection.php';
  $elem = $_GET['search_text'];
  $sql = 'SELECT mid,mname,avg_rating,genre,actors FROM moviesdata WHERE mname LIKE "%'.$elem.'%"
  OR actors LIKE "%'.$elem.'%"
  OR director LIKE "%'.$elem.'%"
  OR writer LIKE "%'.$elem.'%"
  OR genre LIKE "%'.$elem.'%"
  OR avg_rating LIKE "%'.$elem.'%"
  OR plot LIKE "%'.$elem.'%"

  ';
$rs = $conn->query($sql);
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
    <th>Genre</th>
    <th>Cast</th>

    ";
    $i =1;

    while( $roww = $rs->fetch_assoc()){
      $href ='details.php?movie='.$roww['mid'];
    echo"<tr >
    <td>".$i."</td>

    <td><a href ='$href'>".$roww['mname']."</a></td>
    <td>".$roww['avg_rating']."</td>
    <td>".$roww['genre']."</td>
    <td>".$roww['actors']."</td>
    </tr>";
    $i = $i +1;
    }
    echo"</table>";

 ?>
