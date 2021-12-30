<?php
    include 'config.php';
if(isset($_POST['active'])){
    
    $active = (int)$_POST['active'];
    $id = $_POST['id'];

    if($_POST['gnamee'] != null){
        $gname=$_POST['gnamee'];
        mysqli_query($con, "UPDATE purchase p
SET p.guidename='$gname', p.active=$active
WHERE p.id=$id;");

header('Location: Purchase_details.php');
    }else{
        echo 'try';
    }
    

    
    





}