<?php include('Header.php');?>

<br>

<?php

	if(isset($_SESSION['name'])){
		echo "User's Name: ". $_SESSION['name']; 
	echo"<br>";
	   echo "User Email: ". $_SESSION['email']; 
	}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../View/CSS/home.css">
</head>

<body>
	<br><br><br><br><br>
	<h1>Welcome To IMS Agency</h1>

</body>
</html>

<?php include('Footer.php');?>