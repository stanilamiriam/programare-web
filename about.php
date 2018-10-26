<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || Online Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>

    <?php include('menu.php'); ?>

    <div class="row" style="margin-top: 20px;">
      <div class="bold-30">
		  <p style="color:red">Proiect Programare web 2018</p>
		</div>
	</div>
	
    <div class="row">
      <div class="bold-30">
		<br/>
		<p style="color:red">Echipa noastra:</p>
		<p>Miriam Roxana Stanila<br/>
		Larisa Maria Szatmari</p>
		<p>Anul III CTI</p>	
		</div>
	</div>
		
	<footer>
	   <p style="text-align:center; font-size:0.8em;">&copy; Online Shop. All Rights Reserved.</p>
	</footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
