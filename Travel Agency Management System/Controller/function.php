<?php

function emptyInputSignpu($name, $username, $email, $gender, $address, $phone, $pass){
	$result = "";
	if(empty($name) || empty($email) || empty($username) || empty($pass) || empty($address) || empty($gender) || empty($phone)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}


function invalidUid($username){
	$result = "";
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}


function invalidEmail($email){
	$result = "";
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}


?>