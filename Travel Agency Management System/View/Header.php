<?php 
session_start();
$role = $_SESSION['role'] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>

	<div class="navbar">
		<img src="images/logo.png" class="logo">
		<ul>
			<li><a href="Home.php"> Home </a></li>
			<li><a href="Gallery.php"> Gallery </a></li>
			<li><a href="Package.php"> Package </a></li>
			<li><a href="booking.php"> Manual Booking </a></li>
			<li><a href="See Previous Review.php"> See Previous Review </a></li>		
			<li><a href="Contact.php"> Contact Us </a></li>
			<?php if(isset($_SESSION['role']) && $role=="admin"){ ?>
			<li><a href="admin.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
			<?php } elseif($role == "customer"){ ?>
				<li><a href="customerview.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
			<?php
			} elseif($role == "manager"){ ?>

<li><a href="employee_Home.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
				<?php
			} else{ ?>
				<li><a href="Signup_Login.php"> Login </a></li>
				<?php } ?>
			<li><a href="Logout.php"> Logout </a></li>
		</ul>
	</div>

</head>
</html>