<?php
  $current_mid = $_GET['movie'];
  require_once 'connection.php';
  //echo $current_mid;
  $stm = 'SELECT * FROM moviesdata WHERE mid ="'.$current_mid.'" ';
  $result = $conn->query($stm);
  if ($result->num_rows == 1){
    $row = $result->fetch_assoc();
  }
   ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>
div.main {
    background-color: #302a2e;
    color: white;
    margin: 20px 0 20px 0;
    padding: 20px;
    border-radius: 30px;
}
p {
   background-color: black;
   color: white;
   white-space:pre;
   }
h2 {
  white-space:pre;
   border-radius: 5px;}

.nav {
    background: #f57722;
    height: 60px;
    display: inline-block;
    width:95%;
    border-radius: 50px
}
 
.nav li {
    float: right;
    list-style-type: none;
    position: relative;
   
}

.nav li a {
    font-size: 16px;
    color: white;
    display: block;
    line-height: 60px;
    padding: 0 26px;
    text-decoration: none;
    border-left: 1px solid #2e2e2e;
    font-family: Montserrat, sans-serif;
    text-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
	border-radius: 50px
}
.nav li a:hover {
    background-color: #ff9d2a;
}


#search {
    width: 357px;
    margin: 4px;
}
#search_text{
    width: 297px;
    padding: 15px 0 15px 20px;
    font-size: 16px;
    font-family: Montserrat, sans-serif;
    border: 0 none;
    height: 52px;
    margin-right: 0;
    color: rgb(43, 42, 42);
    outline: none;
    background: rgb(255, 255, 255);
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
    background: rgb(188, 193, 196);
	border-color: rgb(26, 5, 56);
}
#search_button {
    border: 0 none;
    background: #d3d3d3 url(search.png) center no-repeat;
    width: 60px;
    float: left;
    padding: 0;
    text-align: center;
    height: 52px;
    cursor: pointer;
	border-radius: 5px
}
#text2
{
width:260px;
transition:500ms all ease;
padding:3px 32px 3px 3px;
height: 31px;
width: 1000px;
}
</style>
</head>
<body style="background-color:#829db4">

<ul class="nav">
    <li>
        <a href="#home">HOME</a>
    </li>
    <li id="search">
        <form action="" method="get">
            <input type="text" name="search_text" id="search_text" placeholder="Search"/>
            <input type="button" name="search_button" id="search_button">
        </form>
    </li>
    
</ul>

<div class="main">
<h1 style="color:#e50000;font:Times New Roman Bold Italic"> <?php echo $row['mname'] ; ?> </h1>
<img src="images\<?php echo $row['mid']; ?>.jpg" alt="POSTER" style="float:left;width:150px;height:200px;margin: 0 20px 20px 15px">
<h2 style="color:#bba3d0;font:Times New Roman Bold Italic">  PLOT:</h2>
<h4 style="font-weight:normal; font-size:110%">
  <?php echo $row['plot'] ; ?>
</h4>
  <form>


  <input type="button" value="Click here to watch the trailer now!!!" onclick="window.location.href='<?php echo $row['trailer']; ?>' "/>

</form>

</div>
<p style="font-size:20px; background-color:#151515">         <br>          Rate this movie
<form>
  <input type="radio" name="rating" value="1">1
  <input type="radio" name="rating" value="2">2
   <input type="radio" name="rating" value="3">3
    <input type="radio" name="rating" value="4">4
	 <input type="radio" name="rating" value="5">5
</form>
</p>
<h2 style="color:#302a2e;font:Times New Roman Bold Italic; background-color:#c8c0c0">  STARRING:  <pre style="color:#4c0000"> <?php echo $row['actors'] ; ?></pre></h2>
<h2 style="color:black;font:Times New Roman Bold Italic; background-color:#d3d3d3">  DIRECTOR:<pre style="color:#990000"> <?php echo $row['director'] ; ?> </pre></h2>
 <h2 style="color:#302a2e;font:Times New Roman Bold Italic; background-color:#c8c0c0"> WRITER: <pre style="color:#4c0000"><?php echo $row['writer'] ; ?></pre></h2>
<h2 style="color:black;font:Times New Roman Bold Italic; background-color:#d3d3d3">  GENRE: <pre style="color:#990000"> <?php echo $row['genre'] ; ?></pre></h2>

<form action="">
<textarea name="COMMENTS" cols="100" rows="5" style="border:3px double #F7730E;" placeholder="ENTER YOUR REVIEWS HERE..">

</textarea>
<br />
<input type="submit" value="post" />
</form>



</textarea>

</body>
</html>