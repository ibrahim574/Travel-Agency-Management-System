<?php 
session_start();
$role = $_SESSION['role'] ?? "";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title> </title>
	<link rel="stylesheet" type="text/css" href="../../View/CSS/style.css">
</head>

	<div class="navbar">
		<img src="../images/logo.png" class="logo">
		<ul>
			<li><a href="../../View/Home.php"> Home </a></li>
			<li><a href="../../View/Gallery.php"> Gallery </a></li>
			<li><a href="../../View/Package.php"> Package </a></li>
			<li><a href="../../View/booking.php"> Manual Booking </a></li>
			<li><a href="../../View/See Previous Review.php"> See Previous Review </a></li>		
			<li><a href="../../View/Contact.php"> Contact Us </a></li>
			<!-- <li><a href="../../View/Signup_Login.php"> Login/SignUp </a></li>
			<li><a href="../../View/Logout.php"> Logout </a></li>
		</ul> -->
		<?php if(isset($_SESSION['role']) && $role=="admin"){ ?>
			<li><a href="../admin.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
			<?php } elseif($role == "customer"){ ?>
				<li><a href="../customerview.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
			<?php
			} elseif($role == "manager"){ ?>

<li><a href="../employee_Home.php"> <?php echo $_SESSION['useruid']; ?> </a></li>
				<?php
			} else{ ?>
				<li><a href="Signup_Login.php"> Login </a></li>
				<?php } ?>
			<li><a href="Logout.php"> Logout </a></li>
		</ul>
	</div>

</head>
</html>