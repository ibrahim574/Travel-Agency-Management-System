<?php include ("Header.php");?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

<link rel="stylesheet" type="text/css" href="../../View/CSS/tamsTable.css">
<link rel="stylesheet" type="text/css" href="../../View/CSS/crud.css">

<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "pkg_name_suggestion.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>

<script type="text/javascript" src="../../Controller/cp_pkg_validation.js"></script>


</head>
<body>
	<center>
		<div class="main">
		<form action="insert.php" method="post" onsubmit="return validation()" enctype="multipart/form-data"><br>
			<label for="">Package Name: </label>
			<input type="text" name="packageName" id="packageName" onkeyup="showHint(this.value)"><br><br>
			<p>Suggestions: <span id="txtHint"></span></p><br>
			<label for="">Description: </label>
			<textarea name="description" rows="10" cols="25" id="desc"></textarea><br><br>
			<label for="">Price: </label>
			<input type="text" name="price" id="price"><br><br>
			<label for="">Image: </label>
			<input type="file" name="image" id="img"><br><br>
			<button name="upload">Create Package</button><br><br>
		</form>
		
		</div>
		
<table class="tamsTable">
  <thead>
    <tr>
      <th>Package Name</th>
      <th>Package Description</th>
      <th>Price</th>
	  <th>Image</th>
	  <th>Update</th>
	  <th>Delete</th>
    </tr>
  </thead>
  <tbody>

  <?php
    
  	include 'config.php';

  	$pic = mysqli_query($con,"SELECT * FROM createpackage");

  	while($row = mysqli_fetch_assoc($pic)){
	$id = $row['id'];
	$pname = $row['packageName'];
	$pdescription = $row['description'];
	$pprice = $row['price'];
	$image = $row['image']; 
?>
	<tr>
		<td><?php echo $pname; ?></td>
		<td><?php echo $pdescription; ?></td>
		<td><?php echo $pprice; ?></td>
		<td><img src="<?php echo $image; ?>" height="120px" width="170px"></td>
		<td><a href="update.php?id=<?php echo $id; ?>"> Update </td>
		<td><a href="delete.php?id=<?php echo $id; ?>"> Delete </td>


	</tr>
  		
  <?php } ?>

  </tbody>
</table>

<form>
<input type="button" class="back" value="Back" onclick="history.back()">
</form>

</body>
</html>

<?php include('Footer.php');?> 