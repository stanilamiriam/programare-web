<?php

include 'config.php';
$id = $_REQUEST['productId'];

$result = $mysqli->query("DELETE FROM products where id=".$id);
if($result){
	echo true;
} else {
	echo false;
}
?>