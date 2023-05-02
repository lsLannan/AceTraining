<?php
echo ($_POST['id'] . "<br />");
echo ($_POST['password'] . "<br />");

//connection?
$conn = mysqli_connect("localhost", "root", "root", "acetraining");

// aunthenticate 
$sql = ("SELECT * FROM user WHERE id = '$_POST[id]' AND password = '$_POST[password]' ");

$resource = mysqli_query ($conn,$sql)
or die(mysqli_error($conn));
$record1 = mysqli_fetch_array ($resource);

// check id field is set
if (!isset($record1['id'])) {
    echo ("Invalid LoginID or password");
} else {
    echo ("Welcome back" . $record1['forename'] );
}
?>