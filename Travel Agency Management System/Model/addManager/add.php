
<?php

require 'config.php';

function addManager($con, $name, $username, $email, $gender, $address, $phone, $pass){

	mysqli_query($con, "INSERT INTO manager (userName, email, gender, address, phone, password)
	VALUES ('$username', '$email', '$gender', '$address', '$phone', '$pass')");

	$manager = "manager";
	mysqli_query($con, "INSERT INTO users (usersName, usersEmail, usersUid, usersPass, role)
	VALUES ('$name', '$email', '$username', '$pass', '$manager')");
	header("location: ../View/admin.php");

}

?>