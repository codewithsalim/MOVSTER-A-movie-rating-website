<?php
  session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
<style>
.nav {
    background: green;
    height: 50px;
    display: inline-block;
    width:100%;
    border-radius: 0px
}

.nav li {
    float: right;
    list-style-type: none;
    position: relative;

}

.nav li a {
    font-size: 15px;
    color: white;
    display: block;
    line-height: 50px;
    padding: 0 50px;
    text-decoration: none;

    font-family: Montserrat, sans-serif;

	border-radius: 0px
}
.nav li a:hover {
    background-color: #03a403;
}


#search {
    width: 260px;
    margin: 2.5px;
}
#search_text{
    width: 200px;
    padding: 15px 0 15px 20px;
    font-size: 15px;
    font-family: Montserrat, sans-serif;
    border: 0 none;
    height: 45px;
    margin-right: 0;
    color: rgb(43, 42, 42);
    outline: none;
    background: #ffffcc;
    float: left;
    box-sizing: border-box;
    transition: all 0.15s;
}
::-webkit-input-placeholder { /* WebKit browsers */
    color: rgb(43, 42, 42);
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color: rgb(43, 42, 42);
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color: rgb(43, 42, 42);
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color: rgb(43, 42, 42);
}
#search_text:focus {
    background: #ffffb3;
	border-color: rgb(26, 5, 56);
}
#search_button {
    border: 0 none;
    background: #302a2e url(ic.jpg) ;
    width: 45px;
    float: left;
    padding: 0;
    text-align: center;
    height: 45px;
    cursor: pointer;
	border-radius: 0px
}

* {box-sizing: border-box}
body {font-family: 'Titillium Web', sans-serif}
/* Style the tab */
div.tab {
    float: left;
    background-color: #cecfcd;
    width: 18%;
    height: 1600px;
	  border-radius:0px;

}
/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 20px 10px;
    width: 100%;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 15px;

}
/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #d9dad8;
}
/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #008000;
	color:white;
}
/* Style the tab content */
.tabcontent {
    float:left;
    padding: 0px 100px;
    width: 80%;
    border-left: none;

}
/* other */
.container {
    position:relative;
    width:100%;

		border-radius:0px;
    background:  #cecfcd;
}
.image {
  opacity: 1;
  padding: 5px 5px 5px 5px;
  display: block;
  max-width: 100%;

  height: 250px;
  transition: .5s ease;
  backface-visibility: hidden;

}
.middle {
  transition: .5s ease;
  opacity: 1;
  position: absolute;
  top: 50%;
  right: 0%;
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
<body style="background-color:white">

<ul class="nav">
   <li style="float: left"><a href="" style=" display: block; color: white; text-align: center; padding:0 25px; text-decoration: none;">
  <?php
    if(isset($_SESSION['loggedin_id'])){
      echo "  Welcome ".$_SESSION['loggedin_id'];
    }
   ?>
 </a></li>

   <li>
        <a href="logout.php">Logout</a>
    </li>
    <li id="search">
        <form action="search.php" method="get">
            <input type="text" name="search_text" id="search_text" placeholder="Search"/>
            <input type="submit" value="" name="search_button" id="search_button"></a>
        </form>
    </li>

</ul>


<div class="tab">
  <button class="tablinks" onclick="openC(event, 'Genre')" id="defaultOpen">Genre</button>
  <button class="tablinks" onclick="openC(event, 'Playlist')">Playlist</button>
  <button class="tablinks" onclick="openC(event, 'Rated')">Rated</button>
</div>




<div id="Genre" class="tabcontent">
<div class="container" >

  <a href="genre.php?para=Action">
 <img src="images/ac.jpg" alt="Action" class="image" >

  <div class="middle">
    <div class="text">Action</div>
  </div>
</a>
 </div>
<br>
<div class="container" >

  <a href="genre.php?para=Thriller">
 <img src="images/th.jpg" alt="Thriller" class="image"  >

  <div class="middle">
    <div class="text">Thriller</div>

  </div>
</a>
</div>
<br>
<div class="container">

 <a href="genre.php?para=Comedy">
<img src="images/co.jpg" alt="Avatar" class="image" >

 <div class="middle">
   <div class="text">Comedy</div>
 </div>
</a>


</div>
<br>
<div class="container" >

 <a href="genre.php?para=Drama">
<img src="images/dra.jpg" alt="Avatar" class="image" >

 <div class="middle">
   <div class="text">Drama</div>
 </div>
</a>
</div>
<br>
<div class="container" >

 <a href="genre.php?para=Romance">
<img src="images/ro.jpg" alt="Avatar" class="image" >

 <div class="middle">
   <div class="text">Romance</div>
 </div>
</a>
</div>
<br>
<div class="container" >

 <a href="genre.php?para=Horror">
<img src="images/ho.jpg" alt="Avatar" class="image" >

 <div class="middle">
   <div class="text">Horror</div>
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
