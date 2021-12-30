<?php include('Header.php');?>
<hr>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "User Name: ". $_SESSION['user']; 
	echo"<br>";
	echo "User Password: ". $_SESSION['pass']; 
	}
?>

<?php include('Footer.php');?>