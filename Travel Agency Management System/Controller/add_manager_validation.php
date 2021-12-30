<?php


if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$username = $_POST['uname'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];

    

	require '../Model/addManager/config.php';
    require '../Model/addManager/add.php';
	require 'function.php';	

	if(emptyInputSignpu($name, $username, $email, $gender, $address, $phone, $pass) !== false){
		header("location: ../View/Add Manager CRUD/add_manager.php?error=emptyinput");
		exit();
	}

	if(invalidUid($username) !== false){
		header("location: ../View/Add Manager CRUD/add_manager.php?error=invalidUid");
		exit();
	}	

	if(invalidEmail($email) !== false){
		header("location: ../View/Add Manager CRUD/add_manager.php?error=invalidEmail");
		exit();
	}

    addManager($con, $name, $username, $email, $gender, $address, $phone, $pass);

}


?>