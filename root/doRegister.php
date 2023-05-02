<?php
echo ($_POST['forename'] . "<br />");
echo ($_POST['surname'] . "<br />");
echo ($_POST['email'] . "<br />");
echo ($_POST['password'] . "<br />");

// insert data into db
//connection
$conn = mysqli_connect("localhost", "root", "root", "acetraining");

$sql = "INSERT INTO user (forename, surname, email, password)
VALUES ('$_POST[forename]', '$_POST[surname]',
            '$_POST[email]', '$_POST[password]')";

mysqli_query($conn, $sql) or die(mysqli_error($conn));
?>