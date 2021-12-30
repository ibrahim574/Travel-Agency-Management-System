<?php

$serverName = "localhost";  
$dBUsername = "root";  
$dBPasswrod = "";  
$dBName = "tasm";  

$conn = mysqli_connect($serverName, $dBUsername, $dBPasswrod, $dBName);

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

?>