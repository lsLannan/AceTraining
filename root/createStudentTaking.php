<?php

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));

$sql = "
CREATE TABLE studenttaking (
    courseID INT NOT NULL, 
    userID INT NOT NULL, 
    dateRegistered DATE NOT NULL, 
    authorised BOOLEAN, 
    FOREIGN KEY (courseID) REFRENCES course(courseId)
    ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (userID) REFERENCES users(id)
    ON UPDATE CASCADE ON DELETE RESTRICT
    )
    ";





?>