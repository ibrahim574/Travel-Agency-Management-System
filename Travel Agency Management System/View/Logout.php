<?php 
session_start();
session_destroy();

?>
<?php include('Header.php');
echo"<hr>";

$comment = "empty";

$myfile = fopen('C:\xampp\htdocs\Travel Agency Management System\Model\Comments.txt', "w") or die("Unable to open file!");
fwrite($myfile, $comment);
fclose($myfile);

header('location:Signup_Login.php');

?>