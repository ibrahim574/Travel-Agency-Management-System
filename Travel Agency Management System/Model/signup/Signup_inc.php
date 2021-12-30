<?php

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['uid'];
	$pass = $_POST['pass'];
	$confirmPass = $_POST['passConfirm'];

	require_once 'dbh_inc.php';
	require_once 'function_inc.php';	

	if(emptyInputSignpu($name, $email, $username, $pass, $confirmPass) !== false){
		header("location: ../../View/signup.php?error=emptyinput");
		exit();
	}

	if(invalidUid($username) !== false){
		header("location: ../../View/signup.php?error=invalidUid");
		exit();
	}	

	if(invalidEmail($email) !== false){
		header("location: ../../View/signup.php?error=invalidEmail");
		exit();
	}		

	if(passMatch($pass, $confirmPass) !== false){
		header("location: ../../View/signup.php?error=passwordsodntmatch");
		exit();
	}	

	if(uidExists($conn, $username, $email) !== false){
		header("location: ../../View/signup.php?error=usernamealreadytaken");
		exit();
	}	

	createUser($conn, $name, $email, $username, $pass);

}

else{
	header("location: ../../Home.php");
}

?>