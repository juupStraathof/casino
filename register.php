<?php
include("connection.php");

$username = $_POST['newuname'];

$con = ConnectDatabase();
    $query="INSERT INTO users ('username','password',) 
    VALUES (";
    $resultaat=mysqli_query($con,$query);




?>