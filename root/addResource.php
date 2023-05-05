<?php

// connection
$conn = mysqli_connect("localhost","root","root","acetraining");

$name = $_POST[''];
$from = $_POST[''];
$until = $_POST[''];
$ow = $SESSION['userId'];
$file = $_POST['']; 



$sql = "INSERT INTO resource (name, dateFrom, dateUntil, ownerId, filename) 
VALUES ('$name', '$from', '$until', '$ow','$file')";

mysqli_query($conn,$sql);



?>