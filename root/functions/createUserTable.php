<?php
/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining");


$sql = "
    CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    forename VARCHAR(50) NOT NULL, 
    surname VARCHAR(50) NOT NULL, 
    email VARCHAR(50) NOT NULL, 
    password VARCHAR(50) NOT NULL, 
    userType VARCHAR(50) NOT NULL, 
    authorised BOOLEAN NOT NULL
)
";

if (mysqli_query($conn, $sql)) 
    {
        echo("<p style='color:green'>SUCCESS</p>");
    } 
else 
    {
        echo ("<p style='color:red'>FAIL: ");
        echo (mysqli_error($conn) . "</p>");
    }  


?>