<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchase details</title>

<style>
.a{
    text-align: center;
    }
</style>
    
</head>
<body>

<?php $id = (int)$_GET['id'];

$uname = "";

include 'config.php';


$pic = mysqli_query($con,"SELECT p.id AS id, u.usersName AS uname, u.usersEmail AS uemail, cp.packageName AS pname, cp.price, p.active AS active, g.name AS gname, p.guidename AS gn
FROM (((purchase p
JOIN users u ON u.usersId=p.userId)
JOIN createpackage cp ON cp.id=p.packageId)
JOIN guideman g ON g.id=p.guidemanId)
WHERE p.id=$id;");
$row = mysqli_fetch_array($pic);


    $id = $row['id'];
    $uname = $row['uname'];
    $uemail = $row['uemail'];
    $pname = $row['pname'];
    $pprice = $row['price'];
    $pkactive = $row['active'];
    $gname = $row['gname'];
    $gn = $row['gn'];
?>
<div class="b">
    <h4>1 for payment done</h4><br>
    <h4>2 for payment pending</h4><br>
</div>

<div class="a">
<form action="updatepurchase.php" method="post">
<br><br><br><br><br>
    <label>Payment Confirmation</label>
    <input type="number" name="active" value="<?php echo $pkactive;?>"><br>

<br>
    <label>Tour Guide Assign</label>
    <input type="text" name="gnamee" value="<?php echo $gn; ?>"><br><br>

    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="submit">
</form>
<br>
<form>
<input type="button" class="back" value="Back" onclick="history.back()">
</form>

</div>





<!-- <input type="text" value=""> -->
</body>
</html>