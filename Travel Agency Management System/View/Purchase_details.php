<?php include('Header.php');
include('../Model/config.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<link rel="stylesheet" type="text/css" href="../View/CSS/purchase_details.css">

</head>
<body>
<br>
<h1>Purchase Details</h1><br>

<table class="tamsTable">
  <thead>
    <tr>
      <th>Customer name</th>
      <th>Customer email</th>
      <th>Package name</th>
      <th>package tk</th>
      <th>guideman name</th>
      <th>payment</th>
      <th>edit</th>
    </tr>
  </thead>
  <tbody>
  <?php

include 'config.php';


$pic = mysqli_query($con,"SELECT p.id AS id, u.usersName AS uname, u.usersEmail AS uemail, cp.packageName AS pname, cp.price, p.active AS active, g.name AS gname, p.guidename AS gn
FROM (((purchase p
JOIN users u ON u.usersId=p.userId)
JOIN createpackage cp ON cp.id=p.packageId)
JOIN guideman g ON g.id=p.guidemanId);");
while($row = mysqli_fetch_assoc($pic)){ 


    $id = $row['id'];
    $uname = $row['uname'];
    $uemail = $row['uemail'];
    $pname = $row['pname'];
    $pprice = $row['price'];
    $pkactive = $row['active'];
    $gname = $row['gname'];
    $gn = $row['gn'];
?>
    <tr>
    <td><?php echo $uname; ?></td>
    <td><?php echo $uemail; ?></td>
    <td><?php echo $pname; ?></td>
    <td><?php echo $pprice; ?></td>
    <td><?php echo $gn; ?></td>
    <td><?php echo (int)$pkactive==1 ? 'done' : 'pending'; ?></td>
    <td><a href="viewpurchase.php?id=<?php echo $id; ?>">edit</a></td>
  </tr>
   <?php } ?>
  
  </tbody>


</table>

<form>
<input type="button" class="back" value="Back" onclick="history.back()">
</form>


</body>
</html>

<?php include('Footer.php'); ?>