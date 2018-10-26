<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register || Online Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>

    <?php include('menu.php'); ?>

    <form method="POST" action="insert.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="fname" class="right inline">First Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="fname" placeholder="" name="fname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="lname" class="right inline">Last Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="lname" placeholder="" name="lname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="address" class="right inline">Address</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="address" placeholder="" name="address">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="city" class="right inline">City</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="city" placeholder="" name="city">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="pin-code" class="right inline">Pin Code</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="pin-code" placeholder="" name="pin">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="email" class="right inline">E-Mail</label>
            </div>
            <div class="small-8 columns">
              <input type="email" id="email" placeholder="" name="email">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="pwd" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="pwd" name="pwd">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" value="Register" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Online Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
