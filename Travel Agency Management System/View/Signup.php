<?php include('Header.php');?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../View/CSS/Signup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../Controller/jquery.js"></script>

</head>
<body>

<div class="bg-img">
<div class="wrapper">
    <div class="registration_form">
        <div class="title"> SignUp Form </div>

        <form action="../Model/signup/signup_inc.php" method="post">
            <div class="form_wrap">
                <div class="input_wrap">
                    <label>Full name</label>
                    <input type="text" name="name" placeholder="Full Name">
                </div>
                <div class="input_wrap">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Email">
                </div>
                <div class="input_wrap">
                    <label>Username</label>
                    <input type="text" name="uid" placeholder="Username">
                </div>
                <div class="input_wrap">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password">
                </div>
                <div class="input_wrap">
                    <label>Confirm Password</label>
                    <input type="password" name="passConfirm" placeholder="Cofirm Password">
                </div>
                <div class="input_wrap">                  
                    <button type="submit" class="btn" name="submit">Create Account</button>
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

        else if($_GET["error"] == "passwordsodntmatch"){
            echo "<p>Password doesn't match</p>";
        }

        else if($_GET["error"] == "usernamealreadytaken"){
            echo "<p>Username is already taken</p>";
        }

        else if($_GET["error"] == "stmtfailed"){
            echo "<p>Something went wrong, pleae try again</p>";
        }

        else if($_GET["error"] == "none"){
            echo "<p>You have signed up</p>";      
            header("location: ../View/signup/Signup_Login.php");
        }
    }

?>


    </div>
</div>

</div>

</body>
</html>


<?php include('Footer.php');?>