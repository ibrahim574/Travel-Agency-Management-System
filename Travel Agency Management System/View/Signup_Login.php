

<?php include('Header.php');?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../View/CSS/signup_login.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../Controller/jquery.js"></script>

</head>

<div class="bg">
<body>
    <div class="login_box">
    <div class="signup_form">
        <img src="images/login_avatar.png">
        <h2>Login</h2><br>
        <form action="../Model/signup/login_inc.php" method="post">
            <input type="text" name="uname" placeholder="Username"><br><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <button type="submit" class="btn" name="submit">Login</button>
        </form><br>

<?php

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill all the fields</p>";
        }

        else if($_GET["error"] == "invalidUid"){
            echo "<p >Incorrect Username</p>";
        }  

        else if($_GET["error"] == "wronglogin"){
            echo "<p >Incorrect Credential</p>";
        }  

        else if($_GET["error"] == "none"){
            echo "<p>You have logged in</p>";
            
            if($_SESSION['role'] == "admin"){
              header("location: View/admin.php");
            } 
            else if($_SESSION['role'] == "manager"){
              header("location: ../View/manager.php");
            } 
            else if($_SESSION['role'] == "customer"){
                header("location: ../View/Home.php");
            }
            else{
              header("location: ../View/index.php");
            }   
              
        } 
    }
?>

<br>


<br>
<h3>Don't have an account</h3>
<a href="signup.php"> Signup </a>
</div>
</div>
</div>
</html>

<?php include('Footer.php');?>