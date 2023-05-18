<?php

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));

// create table
$sql = ("
    CREATE TABLE users (
    id INT AUTO_INCREMENT,
    forename VARCHAR(30) NOT NULL,
    surname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    userType VARCHAR(15) NOT NULL,
    authorised BOOLEAN,
    PRIMARY KEY(id)
    )");

    mysqli_query($conn, $sql);


?>