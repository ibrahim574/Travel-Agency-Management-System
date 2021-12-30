<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($con, "DELETE FROM createpackage WHERE id=$id ");

header('Location: index.php');

?>