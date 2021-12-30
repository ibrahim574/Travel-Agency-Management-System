<?php include('Header.php');?>

<h1>Gallery</h1>
<hr>
<?php
	session_start();
	if(isset($_SESSION['useruid'])){
		//echo "User Name: ". $_SESSION['user']; 
        $userName=$_SESSION['useruid'];
       // $password=$_SESSION['Password'];



	
	echo"<br>";
	//echo "User Password: ". $_SESSION['pass']; 
	}
?>
<html>
<head>
<title>Employee profile</title>
<body>
<class style="float:right;color:blue;"><?php echo "Logged in as ".$userName; ?></class>
<h2 style="background-color:white;"><pre class="tab"> 
    <h1> Employee Page<h1>
        <h3> <?php echo "Hello ".$userName; ?>
        <fieldset>
						<legend> PROFILE:</legend>
                        <img src="images/employee.png" alt="employee" width="300" height="300">
						<br><br>
						<p>Name          : <?php echo $userName; ?></p>
						<p>Email         : <?php echo "employee@gmail.com"; ?></p>
                        <p>Contact Number: <?php echo "01928748381"; ?></p>
                        <p>Address        : <?php echo "Dhaka"; ?></p>
						<p>Gender        : <?php echo "Female"; ?></p>
						


		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>

        

           
</body>
</html>


<?php include('Footer.php');?>