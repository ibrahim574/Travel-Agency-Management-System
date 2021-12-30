<?php include('Header.php');?>

<h1>Add Package</h1>
<hr>
<?php
$num_of_degree="";
$nameErr = $phoneErr ="";
$name  = $phone ="";
	session_start();
	if(isset($_SESSION['user'])){
		echo "User Name: ". $_SESSION['user']; 
	echo"<br>";
	//echo "User Password: ". $_SESSION['pass']; 
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) { 
          $nameErr = "Name is required";
      
        } 
        else {
            $name = test_input($_POST["name"]);
          
           
          if (!preg_match("/^[a-zA-Z- ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            $name="";}
      
          $num_of_length =str_word_count($_POST["name"]);
         
        
        
        }

       


    //if(isset($_POST['submit'])){
		$fiel1name = $_FILES['file1']['name'];
		$file1type = $_FILES['file1']['type'];
		$file1size = $_FILES['file1']['size'];
		$file1tmpLoc = $_FILES['file1']['tmp_name'];
		$file1targetLoc = "../Model/uploads/";

		if(!empty($fiel1name)){
			if(($file1type == 'image/jpeg' || $file1type == 'image/png') && $file1size < 6291456){
				move_uploaded_file($file1tmpLoc, $file1targetLoc.$fiel1name);
				//echo "Successfully uploade";
			}
			else{
				$fiel1name=="";
				echo "Select jpeg/png";
			}
		}

		else{
			$fiel1name=="";
			echo "Select a file";
		}
	//}
		if($name!=""&& $fiel1name!="")
		{
			echo "Successfully created";
		}
 
}
function test_input($data) {
 
	return $data;
}


?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Package Creation</title>


</head> 



<body>
<form action="" method="post" enctype="multipart/form-data" align="center">
  <h3 align="center">New Package</h3>
  <br>
  <br>

	<label>Package Name</label>
	<br>
	<input type="text"  name="name" id="packagename" placeholder="Create Package" >
	<span class="error">* <?php echo $nameErr;?></span>
  <br>

  <label>Package Type</label>
  <br>
									
	<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family Package / Couple Package" required>
	<br>

	<label>Package Location</label>
     <br>
								
	<input type="text"  name="packagelocation" id="packagelocation" placeholder=" Package Location" required>
    <br>
								
	 <label>Package Price</label>
      <br>
	<input type="text" name="packageprice" id="packageprice" placeholder=" Package Price" required>
							
    <div class="form-group">
	 <label>Package Details</label>
      <br>
	<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required></textarea> 
								

 
 <p> <input type="file" name="file1"> </p>
 <p> <input type="submit" name="submit" value="Create"> </p>



				
<!--<button type="submit" name="submit" class="btn-primary btn">Create</button>-->

<button type="reset" class="btn-inverse btn">Reset</button>			
					
	
</form>

</body>
</html>


<?php include('Footer.php');?>
