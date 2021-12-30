

<?php

include 'config.php';

if(isset($_POST["upload"])){
	$packageName = $_POST['packageName'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$image = $_FILES['image'];

	$img_location = $_FILES['image']['tmp_name'];
	$img_name = $_FILES['image']['name'];
	$img_des = "uploadImage/".$img_name;
	move_uploaded_file($img_location, 'uploadImage/'.$img_name);


	mysqli_query($con, "INSERT INTO createpackage(packageName, description, price, image) VALUES ('$packageName','$description','$price','$img_des')");
	header('Location: index.php');
}

?>