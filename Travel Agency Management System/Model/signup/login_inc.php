<?php

if(isset($_POST["submit"])){

	$username = $_POST['uname'];
	//$role = $_POST['role'];
	$pass = $_POST['pass'];


	require_once 'dbh_inc.php';
	require_once 'function_inc.php';

	if(emptyInputLogin($username, $pass) !== false){
		header("location: ../../View/Signup_Login.php?error=emptyinput");
		exit();
	}

	loginUser($conn, $username, $pass);

}

else{
	header("location: ../../View/Signup_Login.php?error=emptyinput");
	exit();
}


function emptyInputLogin($username, $pass){
	$result = "";
	if(empty($username) || empty($pass)){
		$result = true;
	}
	else{
		$result = false;
	}

	return $result;
}


function loginUser($conn, $username, $pass){
	$uidExists = uidExists($conn, $username, $pass);
	$dBpass = $uidExists['usersPass'];
	$dBrole = $uidExists['role'];
	$dBUserId = $uidExists['usersId'];
	//echo $dBpass;
	//echo $uidExist;

	if($uidExists === false){
		header("location: ../../View/Signup_Login.php?error=wronglogin");
		exit();
	}

	else if($pass !== $dBpass){
		header("location: ../../View/Signup_Login.php?error=wronglogin");
		exit();
	}

	else if($pass === $dBpass){
		session_start();
		//echo $uidExists['usersUid'];
		$_SESSION['useruid'] = $uidExists['usersUid'];
		$_SESSION['useremail'] = $uidExists['usersEmail'];
		$_SESSION['userpass'] = $uidExists['usersPass'];
		$_SESSION['role'] = $uidExists['role'];
		$_SESSION['userId'] = $uidExists['usersId'];
		if($_SESSION['role'] == "admin"){
			header("location: ../../View/admin.php");
		}
		elseif($_SESSION['role'] == "manager"){
			header("location: ../../View/employee_Home.php");
		}
		elseif($_SESSION['role'] == "customer"){
			header("location: ../../View/Home.php");
		}
		
		
		exit();
	}

}

?>
