<?php
/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));


$sql = "
    CREATE TABLE user (
    userID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    userForename VARHCAR(50) NOT NULL, 
    usersUname VARHCAR(50) NOT NULL, 
    userEmail VARHCAR(50) NOT NULL, 
    userPassword VARHCAR(50) NOT NULL, 
    userType VARHCAR(50) NOT NULL, 
    userActive BOOLEAN NOT NULL,
)";

if (mysqli_query($conn, $sql)) 
    {
        echo("SUCCESS");
    } 
else 
    {
        echo ("FAILURE");
        echo (mysqli_error($conn) . "</p>");
    }
    


?>