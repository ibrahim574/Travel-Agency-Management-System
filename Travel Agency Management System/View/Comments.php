<?php include('Header.php');?>

<html>
<body>
	
<?php 

$commentErr = "";
$comment = "";



if (empty($_POST["comment"])) {
   $commentErr = "Comment box is empty";
   $comment = "empty";
   echo $commentErr;
} 

  else {
   $comment = $_POST["comment"];
   echo "Your comment : " . $comment;
}



?>

<?php
$myfile = fopen('C:\xampp\htdocs\Travel Agency Management System\Model\Comments.txt', "w") or die("Unable to open file!");
fwrite($myfile, $comment);
fclose($myfile);
?>


</body>
</html>

<?php include('Footer.php');?>

