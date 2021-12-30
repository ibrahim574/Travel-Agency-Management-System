
<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tasm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$pkId = $_GET['pkId'];
$userId = $_SESSION['userId'] ?? "";


if($userId != null){
    $sql = "INSERT INTO purchase (userId, packageId, guidemanId, active)
    VALUES ($userId, $pkId, 1, 0)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: customerview.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}else{
    header('Location: Signup_Login.php');
}



$conn->close();
?>