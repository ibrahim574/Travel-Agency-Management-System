<?php include ("Header.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../View/CSS/crud.css">
	<script type="text/javascript" src="../../Controller/cp_pkg_validation.js"></script>
</head>
<body>


<?php

include 'config.php';
$Id = $_GET['id'];
$record = mysqli_query($con, "SELECT * FROM createpackage WHERE id = $Id");
$data = mysqli_fetch_array($record);


?>


	<center>
		<div class="main">
		<form action="update1.php" method="post" onsubmit="return validation()" enctype="multipart/form-data">
			<label for="">Package Name: </label>
			<input type="text" value="<?php echo $data['packageName'] ?>" name="packageName" id="packageName"><br><br>
			<label for="">Description: </label>
			<input type="text" name="description" rows="10" cols="25" id="desc" value="<?php echo $data['description'] ?>"><br><br>
			<label for="">Price: </label>
			<input type="text" value="<?php echo $data['price'] ?>" name="price" id="price"><br><br>
			<label for="">Image: </label>
			<td><input type="file" value="<?php echo $data['image'] ?>" name="image" id="img"><br><br> <img src="<?php echo $data['image'] ?>"  width = '120px' height = '70px'> </td><br><br>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
			<button type="submit" name="update">Update</button>
		</form>
		</div>
	</center>




</body>
</html>

<?php include('Footer.php');?>