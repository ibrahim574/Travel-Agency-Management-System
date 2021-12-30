<?php include('Header.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../CSS/view_manager.css">
	<link rel="stylesheet" type="text/css" href="../../View/CSS/tamsTable.css">

</head>
<body>
	<br><br>
	<h1>Manager List</h1>
<br>
<table class="tamsTable">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Gender</th>
	  <th>Address</th>
	  <th>Phone</th>
	  <th>Password</th>
    </tr>
  </thead>
  <tbody>

  <?php
    
  	include 'config.php';

  	$data = mysqli_query($conn,"SELECT * FROM manager");

  	while($row = mysqli_fetch_assoc($data)){
	$userName = $row['userName'];
	$email = $row['email'];
	$gender = $row['gender'];
	$address = $row['address'];
	$phone = $row['phone']; 
    $password = $row['password']; 
?>
	<tr>
		<td><?php echo $userName; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $gender; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $phone; ?></td>
        <td><?php echo $password; ?></td>

	</tr>
  		
  <?php } ?>

  </tbody>
</table>

<form>
<input type="button" class="back" value="Back" onclick="history.back()">
</form>

</body>
</html>

<?php include('../../View/Footer.php');?>
