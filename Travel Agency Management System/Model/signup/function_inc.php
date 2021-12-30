<?php

function emptyInputSignpu($name, $email, $username, $pass, $confirmPass){
	$result = "";
	if(empty($name) || empty($email) || empty($username) || empty($pass) || empty($confirmPass)){
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

function passMatch($pass, $confirmPass){
	$result = "";
	if($pass !== $confirmPass){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}

function uidExists($conn, $username){
	$sql = "SELECT * FROM users WHERE usersUid = ?;";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../View/Signup_Login.php?error=stmtfailed");
		exit();
	}

	mysqli_stmt_bind_param($stmt, "s", $username);
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);

	if($row = mysqli_fetch_assoc($resultData)){
		return $row;
	}

	else{
		$result = false;
		return $result;
	}


	mysqli_stmt_close($stmt);

}


function createUser($conn, $name, $email, $username, $pass){
	$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPass, role) VALUES (?, ?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		header("location: ../../View/Signup_Login.php?error=stmtfailed");
		exit();
	}

	header("Location: ../../View/Home.php");

	$role = "customer";

	mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $username, $pass, $role);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header('location: ../../View/Signup_Login.php?error=none');
	exit();

}

?>