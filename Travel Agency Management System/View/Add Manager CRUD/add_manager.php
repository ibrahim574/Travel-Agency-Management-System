<?php include ("Header.php");?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/add_manager.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../../Controller/jquery.js"></script>

</head>
<body>
<div class="bg-img">
<div class="wrapper">
    <div class="registration_form">
        <div class="title"> Add manager </div>

        <form action="../../Controller/add_manager_validation.php" method="post">
            <div class="form_wrap">
                <div class="input_wrap">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="input_wrap">
                    <label>Username</label>
                    <input type="text" name="uname" placeholder="Username">
                </div>
                <div class="input_wrap">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Email">
                </div>          
                <div class="input_wrap">
                     <label for="">Gender</label>
                    <select name="gender">
                    <option value="">--Select Gender--</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     </select>
                </div>
                <div class="input_wrap">
                    <label>Address</label>
                    <input type="text" name="address" placeholder="Address">
                </div>
                <div class="input_wrap">
                    <label>Phone Number</label>
                    <input type="number" name="phone" placeholder="Phone Number">
                </div>
                <div class="input_wrap">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="input_wrap">
                    <input type="submit" class="btn" value="Add Manager" name="submit">
                </div>
            </div>
        </form><br>
        


<?php

if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo "<p>Fill all the fields</p>";
    }

    else if($_GET["error"] == "invalidName"){
        echo "<p>Please choose a valid name</p>";
    }

    else if($_GET["error"] == "invalidUid"){
        echo "<p>Please choose a valid username</p>";
    }

    else if($_GET["error"] == "invalidEmail"){
        echo "<p>Please choose a valid email</p>";
    }

    else if($_GET["error"] == "none"){
        header("location: admin.php");              
    }
}

?>
<form>
<input type="button" class="back" value="Back" onclick="history.back()">
</form>

    </div>
</div>



</div>



</body>
</html>


<?php include("../../View/Footer.php");?>