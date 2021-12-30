<?php

if(isset($_POST["submit"])){

	$username = $_POST['uname'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];


	require_once 'dbh_inc.php';
	require_once 'function_inc.php';

	if(emptyInputLogin($username, $pass) !== false){
		header("location: ../View/Signup_Login.php?error=emptyinput");
		exit();
	}

	loginUser($conn, $username, $pass);

}

else{
	header("location: ../View/Signup_Login.php?error=emptyinput");
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
	//echo $dBpass;
	//echo $uidExist;

	if($uidExists === false){
		header("location: ../View/Signup_Login.php?error=wronglogin");
		exit();
	}

	else if($pass !== $dBpass){
		header("location: ../View/Signup_Login.php?error=wronglogin");
		exit();
	}

	else if($pass === $dBpass){
		session_start();
		$_SESSION['useruid'] = $uidExists['usersUid'];
		$_SESSION['useremail'] = $uidExists['usersEmail'];
		if($_SESSION['useruid'] == "ibrahim"){
			header("location: ../View/admin.php");
		}
		elseif($_SESSION['useruid'] == "sobita"){
			header("location: ../View/employee_Home.php");
		}
		
		exit();
	}

}

?>
