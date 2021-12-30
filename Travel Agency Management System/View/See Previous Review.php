<?php include('Header.php');?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../View/CSS/See_previous_rev.css">
</head>
<body>

<br><br><br><br>
<h1>Reviews</h1><br><br><br>
<h2>Name : 
<?php
	if(isset($_SESSION['useruid'])){
		echo $_SESSION['useruid'];
	}
?>
</h2> 


<h2>Comment : 
<?php

$comment = "";
$flag = "";
$myfile = fopen('C:\xampp\htdocs\Travel Agency Management System\Model\Comments.txt', "r"); 
	if(isset($myfile)){
		$comment = fread($myfile,filesize('C:\xampp\htdocs\Travel Agency Management System\Model\Comments.txt'));
		if($comment == "empty"){
			$flag = "There is no Comments";
			fclose($myfile);
		}

		else{
			echo $comment;
			fclose($myfile);
		}	

	}
?>
</h2>
<br>
<p><?php echo $flag ?></p>

</body>
</html>

<?php include('Footer.php');?>
