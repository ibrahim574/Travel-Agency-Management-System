<?php include('Header.php');?>

<?php
	if(isset($_SESSION['useruid'])){
		//echo "User Name: ". $_SESSION['user']; 
        $userName = $_SESSION['useruid'];
	echo"<br>";
	//echo "User Password: ". $_SESSION['pass']; 
	}
?>
<html>
<head>
<title>Manager</title>
<style>

</style>
</head>

<link rel="stylesheet" type="text/css" href="../View/CSS/purchase_details.css">

<body>
<br><br><br><br>
<div class="manager">
<h1> Wlcome Manager </h1></br><br><br><br><br>

<div class="options">
<ul>  
<li>
    <a href="../View/CRUD/index.php"> Manage Package </a> 
    </li></br>
    <a href="Purchase_details.php"> View Purchase Purchase </a>
    </li>
</ul>
</div>
</div>


           
</body>
</html>


<?php include('Footer.php');?>