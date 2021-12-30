<?php include('Header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Packages</title>
	<link rel="stylesheet" type="text/css" href="../View/CSS/packages.css">
</head>
<body>

<div class="main">


<?php
  	include 'config.php';
  	$pic = mysqli_query($con,"SELECT * FROM createpackage");
  	while($row = mysqli_fetch_array($pic)){

		?>

		<?php $_SESSION['pk']=$row['packageName']; ?>

	<div class="cards">
		<div class="image">
			<img src="<?php echo 'CRUD/'.$row['image']; ?>">
		</div>

		<div class="title">
			<h1><?php echo $row['packageName']; ?></h1>
		</div>

		<div class="desc">

			<ul>
				<li><?php echo $row['description']; ?></li>
			</ul><br><br>

			<p><h3>Only <?php echo $row['price']; ?></h3></p>


			
			<button><a href='task.php?pkId=<?php echo $row['id']?>'>Confirm</a></button>

			<!-- <form action="task.php" method="post">
				<input type="hidden" name="confirm">
				<input type="submit" name="confirm" value="confirm">
			</form> -->
			

		</div>
	</div>
	<?php
  	}
?>

</div>



</body>
</html>

<?php include('Footer.php');?>