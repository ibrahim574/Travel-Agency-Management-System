<?php include('Header.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../View/CSS/purchase_details.css">
    <title>Document</title>
    
</head>
<body>
    <br>
    <h1 style="text-align: center;"> Welcome To Customer Dashboard </h1><br>

<table class="tamsTable">
  <thead>
    <tr>
      <th>Customer name</th>
      <th>Customer email</th>
      <th>Package name</th>
      <th>Package tk</th>
      <th>Guideman name</th>
      <th>Payment</th>
    </tr>
  </thead>
  <tbody>
  <?php

include 'config.php';

$idu = $_SESSION['userId'];


$pic = mysqli_query($con,"SELECT p.id AS id, u.usersName AS uname, u.usersEmail AS uemail, cp.packageName AS pname, cp.price, p.active AS active, g.name AS gname, p.guidename AS gn
FROM (((purchase p
JOIN users u ON u.usersId=$idu)
JOIN createpackage cp ON cp.id=p.packageId)
JOIN guideman g ON g.id=p.guidemanId)

WHERE p.userId=$idu;");
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