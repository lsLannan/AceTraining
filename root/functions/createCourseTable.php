<?php
/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));


$sql = "
CREATE TABLE course (
    courseId INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    creditValue VARCHAR(30) NOT NULL,
    owner INT,
    FOREIGN KEY(owner) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    PRIMARY KEY(courseId)
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