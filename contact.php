<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Online Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>

    <?php include('menu.php'); ?>

    <div class="row" style="margin-top: 20px;">
		<div class="small-20">        
			<p style="color:red">Suport 24/7</p>
			<ul>
				<li><strong>Telefon fix:</strong> 021 200.52.00</li>
				<li><strong>Telefon mobil:</strong> 0722.25.00.00</li>
				<li><strong>Program: L-D:</strong> 24/24</li>
			</ul>
		</div>
	</div>

	<div class="row" style="margin-top: 20px;">
		<div class="small-20">        
			<p style="color:red">Contact service</p>
			<ul>
				<li><strong>Telefon fix:</strong> 021 200.52.00</li>
				<li><strong>Telefon mobil:</strong> 0742.726.843</li>
				<li><strong>Program:</strong> L-V: 09-18</li>
			</ul>
		</div>
	</div>

	<div class="row" style="margin-top: 20px;">
		<div class="small-20">        
			<p style="color:red">Contact asigurari</p>
			<ul>
				<li><strong>Telefon fix:</strong> 021 200.52.00</li>
				<li><strong>Telefon mobil:</strong> 0722.25.00.00</li>
				<li><strong>Program:</strong> L-V: 09-18</li>
				<li><strong>Email:</strong> asigurari@emag.ro</li>
				<li><strong>Program:</strong> 
					<ul>
						<li>L-V: 09-18</li>
						<li>L - 28 mai – Liber</li>
						<li>V - 01 iunie – Liber</li>
					</ul>
				</li>
			</ul>
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
