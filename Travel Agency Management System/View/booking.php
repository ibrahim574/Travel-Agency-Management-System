<?php include('Header.php');?>


<hr>
<?php
$num_of_degree="";
$nameErr = $guestErr = $phoneErr ="";
$name = $guest = $phone ="";
    if(isset($_SESSION['user'])){
        //echo "User Name: ". $_SESSION['user']; 
    echo"<br>";}
//  echo "User Password: ". $_SESSION['pass']; 
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
        
       /* if(preg_match('/^\d+$/',$_GET['guest'])) {
            // valid input.
          } else {
            // invalid input.
          }*/
    
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
      } else {
          $phone = test_input($_POST["phone"]);  
          if(!preg_match("/^[0-9]{11}$/", $phone)) {
            // $phone is valid
            $phoneErr = "invalid number";
            $phone ="";
          }
      }
      //address
      if(isset($_POST["s"]))
      {
        if($name!=""  && $phone!="")
        
          {
         
          echo "Name : ".$name;
          echo "<br>";
          
          echo "Phone : ".$phone;
          echo "<br>";
         
          echo "Successlly done "; 
          }
        else
        echo "Error";
      }
  }
      function test_input($data) {
 
        return $data;
}
?>

<html>
<head>

<style>
   body, html {
	height: 100%;
  }

body{
	background-image: url('images/manualBg.jpg');
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<title>Booking page</title>
<h1 class="heading">
        <span>BOOK NOW</span>
    </h1>

    <div class="row">

        <form action="">
          <!--  <div class="inputBox">
                <h3>where to Travel</h3>
                <input type="text" placeholder="Place name">
            </div>-->
            <h3>Place name </h3>
            <input type="text" placeholder="Place name"name="name" value="<?php echo $name;?>" required >
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
            <div class="inputBox">
                <h3>How many Guest </h3>
                 <input type="number" min="1" placeholder="Number of guests" name="guest" value="<?php echo $guest;?>">
  <span class="error">* <?php echo $guestErr;?></span>
  <br>
               <!-- <input type="number" placeholder="Number of guests">-->
            </div>
           <!-- <div class="inputBox">
                <h3>Phone Number</h3>
                <input type="number" placeholder="Enter your mobile number">
            </div>-->
            <h3>Phone </h3>
            <input type="number"placeholder="Enter your mobile number" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br> 
  
            <div class="inputBox">
                <h3>Travel Date</h3>
                <input type="date">
            </div>
            
            <!--<a href="Gallery.php" class="btn">Confirm</a>-->
          <input type="submit" name="s" value="Confirm"> 
        </form>
        </form>

    </div>
    <?php

//Terms of service validation

?>
</body>
</html>


<?php include('Footer.php');?>