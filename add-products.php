<?php

include 'config.php';

$code = (int)$_POST['code'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = (double)$_POST['price'];
$quantity = (int)$_POST['quantity'];
$filename = "";

if(isset($_FILES['image'])){
	$errors= array();
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

	$expensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$expensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}

	if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
	}

	$filename = $code . "_" . $name . "." . $file_ext;
	$pathToSave = "C:\\xampp\\htdocs\\online-shop\\images\\products\\" . $filename ;
	
	if(empty($errors)==true){
		move_uploaded_file($file_tmp, $pathToSave);
		echo "Success";
	}else{
		print_r($errors);
	}
}

if($mysqli->query("INSERT INTO products (product_code, product_name, product_desc, product_img_name, qty, price) VALUES('$code', '$name', '$description', '$filename', $quantity, '$price')")){
	echo 'Product inserted';
	echo '<br/>';
	header ("location:admin.php");
}

?>
