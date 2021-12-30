<?php include('Header.php');?>

<?php
session_start();
?>

<html>
    <section class="signup_form">
        <h2>Login</h2>
        <form action="../Model/login_inc.php" method="post">
            <input type="text" name="uname" placeholder="Username"><br><br>
            <input type="password" name="pass" placeholder="Password"><br><br>
            <button type="submit" name="submit">Login</button>
            <a href="Gallery.php"> Go Back </a>
        </form>
    </section>

    <a href="signup.php"> Signup </a>

<?php

if(isset($_SESSION['submit'])){
        header("location: ../View/logout.php");
    }

    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p>Fill all the fields</p>";
        }

        else if($_GET["error"] == "wronglogin"){
            echo "<p>Incorrect login credential</p>";
        }     
    }

    

?>

</html>

<?php include('Footer.php');?>