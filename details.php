<?php


  //$_GLOBALS['flag'] = False;
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

.txt-center {
  text-align: center;
}
.hide {
  display: none;
}

.clear {
  float: none;
  clear: both;
}

.rating {
    width: 90px;

    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}

.rating > label {
    float: right;
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1.1em;
    cursor: pointer;
    color: #000;
}

.rating > label:hover,
.rating > label:hover ~ label,
.rating > input.radio-btn:checked ~ label {
    color: transparent;

}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > input.radio-btn:checked ~ label:before,
.rating > input.radio-btn:checked ~ label:before {
    content: "\2605";
    position: absolute;
    left: 0;
    color: #FFD700;
}



</style>
</head>
<body style="background-color:#829db4">

<ul class="nav">
    <li>
        <a href="Homepage.php">HOME</a>
    </li>
    <li id="search">
        <form action="search.php" method="get">
            <input type="text" name="search_text" id="search_text" placeholder="Search"/>
            <input type="submit" value="" name="search_button" id="search_button">
        </form>
    </li>

</ul>

<div class="main">
<h1 style="color:#e50000;font:Times New Roman Bold Italic"> <?php echo $row['mname'] ; ?> </h1>
<img src="images\<?php echo $row['mid']; ?>.jpg" alt="POSTER" style="float:left;width:150px;height:200px;margin: 0 20px 20px 15px">
<?php
  $_GET['id'] = $current_mid;
  require_once 'watchlater.php';

?>
<h2 style="color:#bba3d0;font:Times New Roman Bold Italic">  PLOT:</h2>
<h4 style="font-weight:normal; font-size:110%">
  <?php echo $row['plot'] ; ?>
</h4>
  <form>


  <input type="button" value="Click here to watch the trailer now!!!" onclick="window.location.href='<?php echo $row['trailer']; ?>' "/>

</form>

</div>
<p style="font-size:20px; background-color:#151515">Rating : <?php echo $row['avg_rating']; ?> / 5    <br>Rate this movie
  <div class="txt-center">
    <form action ="add_rating.php?mid=<?php echo $current_mid; ?>" method ="post">
          <div class="rating">
              <input id="star5" name="star" type="radio" value="5" class="radio-btn hide"  />
              <label for="star5" >☆</label>
              <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
              <label for="star4" >☆</label>
              <input id="star3" name="star" type="radio" value="3" class="radio-btn hide"  />
              <label for="star3" >☆</label>
              <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
              <label for="star2" >☆</label>
              <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
              <label for="star1" >☆</label>
              <div class="clear"></div>
          </div>
          <button type="submit" name="tadap" style="float:left">Rate</button><br>
      </form>
  </div>




</p>
<h2 style="color:#302a2e;font:Times New Roman Bold Italic; background-color:#c8c0c0">  STARRING:  <pre style="color:#4c0000"> <?php echo $row['actors'] ; ?></pre></h2>
<h2 style="color:black;font:Times New Roman Bold Italic; background-color:#d3d3d3">  DIRECTOR:<pre style="color:#990000"> <?php echo $row['director'] ; ?> </pre></h2>
<h2 style="color:#302a2e;font:Times New Roman Bold Italic; background-color:#c8c0c0"> WRITER: <pre style="color:#4c0000"><?php echo $row['writer'] ; ?></pre></h2>
<h2 style="color:black;font:Times New Roman Bold Italic; background-color:#d3d3d3">  GENRE: <pre style="color:#990000"> <?php echo $row['genre'] ; ?></pre></h2>

<h2 style="color:black;font:Times New Roman Bold Italic; background-color:#d3d3d3">  COMMENTS:<pre style="color:#990000">
  <?php include_once 'comments.php';?></pre></h2>

<form action="addcomment.php?id=<?php echo $current_mid; ?>" method ="post">
<textarea name="added_comment" rows="4" cols="100" placeholder="Add your comment here..." style="border:3px solid black">
</textarea>
<br>
<input type="submit" value="Post" style="color:white;background-color:green" />

</form>



</textarea>

</body>
</html>
