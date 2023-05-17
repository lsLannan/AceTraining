
<?php
/*
 * @author LibertyL
*/

// uploading file to folder

// specifies directory
$target_dir = "resources/";
// specifies the path 
$target_file = $target_dir . basename($_FILES["upload-file"]["file-name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

//

// connection
$conn = mysqli_connect("localhost","root","root","acetraining");

$name = $_POST['file-name'];
$from = $_POST['date-from'];
$until = $_POST['date-until'];
$ow = $SESSION['userId']; // tutor that is logged in is owner 
$file = $_POST[$target_file]; 



$sql = "INSERT INTO resource (name, dateFrom, dateUntil, ownerId, filename) 
VALUES ('$name', '$from', '$until', '$ow','$file')";

mysqli_query($conn,$sql);



?>