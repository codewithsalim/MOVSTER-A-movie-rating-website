<html >
<head>
  <meta charset="UTF-8">
  <title>Welocome</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="style.css">


</head>


<body>
  <br><br>
  <h2>MovieManiac</h2>
 <body>
  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
		<li class="tab "><a href="#signup">Sign Up</a></li>

      </ul>


      <div class="tab-content">

        <div id="login">


          <form  method="post">

            <div class="field-wrap">
            <label>
              User ID<span class="req">*</span>
            </label>
            <input type="text" name="uname" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name = "upass" required autocomplete="off"/>
          </div>



          <input type="submit" name="button_login" value = "login" class="button button-block"/>

          </form>

        </div>

        <div id="signup">
          <h1>Sign Up for Free</h1>

          <form  method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name = 'firstname' required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name ='lastname'required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              User ID<span class="req">*</span>
            </label>
            <input type="text" name = 'usernam' required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name = 'userpasswor' required autocomplete="off"/>
          </div>

          <input type="submit" name = "button_signup" value='Get Started' class="button button-block"/>

          </form>

        </div>



      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="index.js"></script>

    <?php
    //writing function to check login
    if(isset($_POST["button_login"])){
      include 'check_login.php';
    }
    elseif (isset($_POST["button_signup"])) {
      include 'signup.php';

    }
    ?>

</body>
</html>
