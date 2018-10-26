<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || Online Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
  </head>
  <body>

    <?php include('menu.php'); ?>

	<div class="row" style="margin-top: 20px">
			<h3><strong>Add new products</strong></h3><br/>
			<form method="POST" action="add-products.php" style="margin-top:30px;" enctype="multipart/form-data">
			  <div class="row">
				<div class="small-8">

				  <div class="row">
					<div class="small-2 columns">
					  <label for="code" class="right inline">Product Code</label>
					</div>
					<div class="small-10 columns">
					  <input type="number" id="code" placeholder="" name="code" required>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="small-2 columns">
					  <label for="name" class="right inline">Product name</label>
					</div>
					<div class="small-10 columns">
					  <input type="text" id="name" name="name" required>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="small-2 columns">
					  <label for="description" class="right inline">Description</label>
					</div>
					<div class="small-10 columns">
					  <textarea id="description" name="description" rows="5" required></textarea>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="small-2 columns">
					  <label for="quantity" class="right inline">Quantity</label>
					</div>
					<div class="small-10 columns">
					  <input type="number" id="quantity" name="quantity" min="1" step="1" required>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="small-2 columns">
					  <label for="price" class="right inline">Price</label>
					</div>
					<div class="small-10 columns">
					  <input type="number" id="price" name="price" required>
					</div>
				  </div>
				  
				  <div class="row">
					<div class="small-2 columns">
					  <label for="image" class="right inline">Image</label>
					</div>
					<div class="small-10 columns">
					  <input type="file" id="image" name="image" required>
					</div>
				  </div>

				  <div class="row">
					<div class="small-2 columns">
					</div>
					<div class="small-10 columns">
					  <input type="submit" value="Add product" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
					</div>
				  </div>
				</div>
			  </div>
			</form>
	</div>
	<hr/>
	
    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3><strong>Update quantities</strong></h3><br/>
        <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
				while($obj = $result->fetch_object()) {
					echo '<div class="large-12 columns" style="margin-bottom: 40px;">';
					echo '<p><h3>'.$obj->product_name.'</h3></p>';
					echo '<div class="large-4 columns">';
					echo '<img width="300px" width="300px" src="images/products/'.$obj->product_img_name.'"/>';
					echo '</div>';
					echo '<div class="large-8 columns">';
					echo '<p><strong>Product Code</strong>: '.$obj->product_code.'</p>';
					echo '<p><strong>Description</strong>: '.$obj->product_desc.'</p>';
					echo '<p><strong>Units Available</strong>: '.$obj->qty.'</p>';
					echo '<div class="large-6 columns" style="padding-left:0;">';
					echo '<form method="post" name="update-quantity" action="admin-update.php">';
					echo '<p><strong>New Qty</strong>:</p>';
					echo '</div>';
					echo '<div class="large-6 columns">';
					echo '<input type="number" name="quantity[]"/>';
					echo '</div>';
					echo '<button type="button" class="button alert" onclick="deleteProduct('.$obj->id.')".>Delete</button>';
					echo '</div>';
					echo '</div><hr/>';
            }
          }
        ?>
      </div>
    </div>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <center><p><input style="clear:both;" type="submit" class="button" value="Update"></p></center>
        </form>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Online Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
	  
	  function deleteProduct(productId){
        $.ajax({
            type: 'POST',
            url: 'delete-product.php',
            data: "productId=" + productId,
            success: function(result) {
				if(result){
					window.location.reload(true);
				}
            }
        });
	  }
    </script>
  </body>
</html>
