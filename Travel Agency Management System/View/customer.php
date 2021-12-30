<?php include('navbar.php'); ?>
<h1>Customer Page</h1>
<hr>
<?php
session_start();
if (isset($_SESSION['username'])) {
	echo "Name: " . $_SESSION['firstName'] . " " . $_SESSION['lastName'] . "<br />";
	echo "Email: " . $_SESSION['email'] . "<br />";
	echo "Username: " . $_SESSION['username'] . "<br />";
	echo "User Password: " . $_SESSION['password'] . "<br />";
}
?>

<?php include('Footer.php');?>