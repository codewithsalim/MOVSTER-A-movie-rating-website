<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box}
body {font-family: 'Titillium Web', sans-serif}

/* Style the tab */

div.tab {
    float: left;

    background-color: #302a2e;
    width: 20%;
    height: 850px;
	border-radius:50px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: #d3d3d3;
    padding: 20px 10px;
    width: 100%;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
	border-radius:50px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #696969;

}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #c8c0c0;
	color:#4c0000;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 15px 12px;

    width: 70%;
    border-left: none;
    height: 300px;
}

/* other */
.container {
    position: relative;
    width: 50%;
		border-radius:50px;
}

.image {
  opacity: 1;
  padding: 25px 25px 25px 25px;

  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.5;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: inherit;

  color: black;
  font-size: 25px;
  padding: 16px 32px;

}
li a:hover {
    background-color: #ff9d2a;
}
</style>
</head>
<body style="background-color:#829db4">

<ul style="list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #f57722; border-radius: 50px">
  <li style="float: left"><a href="" style=" display: block; color: white; text-align: center; padding: 16px; text-decoration: none;">
  <?php
    if(isset($_SESSION['loggedin_id'])){
      echo "  Welcome ".$_SESSION['loggedin_id'];
    }
   ?>
 </a></li>

  <li style="float: right"><a href="logout.php" style=" display: block; color: white; text-align: center; padding: 16px; text-decoration: none;">Logout</a></li>
  <li style="float: right"><a href="#search" style=" display: block; color: white; text-align: center; padding: 16px; text-decoration: none;">Search</a></li>

</ul>


<div class="tab">
  <button class="tablinks" onclick="openC(event, 'Genre')" id="defaultOpen">Genre</button>
  <button class="tablinks" onclick="openC(event, 'Playlist')">Playlist</button>
  <button class="tablinks" onclick="openC(event, 'Rated')">Rated</button>
</div>




<div id="Genre" class="tabcontent">
<div class="container" style="float:right; background-color:#d3d3d3">

  <a href="genre.php?para=Action">
 <img src="action1.jpg" alt="Action" class="image" style="width:100% height:250px">

  <div class="middle">
    <div class="text">Action</div>
  </div>
</a>
 </div>

<div class="container" style="background-color:#c8c0c0">

  <a href="genre.php?para=Thriller">
 <img src="thriller.jpg" alt="Thriller" class="image" style="width:100%">

  <div class="middle">
    <div class="text">Thriller</div>

  </div>
</a>
</div>

 <div class="container" style="float:right; background-color:#d3d3d3">

  <a href="genre.php?para=Romance">
 <img src="romance.jpg" alt="Avatar" class="image" style="width:100%">

  <div class="middle">
    <div class="text">Romance</div>
  </div>
</a>
 </div>

 <div class="container" style="background-color:#c8c0c0">

  <a href="genre.php?para=Drama">
 <img src="drama.jpg" alt="Avatar" class="image" style="width:100%">

  <div class="middle">
    <div class="text">Drama</div>
  </div>
</a>
</div>

<div class="container" style=" background-color:#d3d3d3">

 <a href="genre.php?para=Comedy">
<img src="comedy.jpg" alt="Avatar" class="image" style="width:100%">

 <div class="middle">
   <div class="text">Comedy</div>
 </div>
</a>
</div>

</div>

<div id="Playlist" class="tabcontent">
  <h3>Movies added to watch later</h3>
  <?php
    include 'user_playlist.php';
    ?>

</div>

<div id="Rated" class="tabcontent">
  <h3>Movies that you rated</h3>
  <?php
    include 'user_rated_movies.php';
    ?>

</div>

<script>
function openC(evt, choice) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(choice).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
