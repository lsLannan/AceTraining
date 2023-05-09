<?php
// uploading file to folder

// specifies directory
$target_dir = "resources/";
// specifies the path 
$target_file = $target_dir . basename($_FILES["upload-file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

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