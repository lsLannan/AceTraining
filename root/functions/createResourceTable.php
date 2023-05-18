<?php
/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining");

$sql = "
    CREATE TABLE resource (
    resourceId INT AUTO_INCREMENT,
    name VARCHAR(50),	
    dateFrom DATE,
    dateUntil DATE,
    ownerId	INT,
    filename VARCHAR(100),
    FOREIGN KEY (ownerId) REFERENCES users(id)
    ON UPDATE CASCADE ON DELETE RESTRICT,
    PRIMARY KEY(resourceId)
    )";

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