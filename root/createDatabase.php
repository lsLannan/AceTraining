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

$sql = "
CREATE TABLE course (
    courseId INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    creditValue VARCHAR(30) NOT NULL,
    owner INT,
    FOREIGN KEY(owner) REFERENCES users(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    PRIMARY KEY(courseId)
    )";

    mysqli_query($conn, $sql);

    
$sql = "
CREATE TABLE studenttaking (
    id INT,
    courseId INT,
    dateEnrolled DATE,
    authorised BOOLEAN,
    FOREIGN KEY(id) REFERENCES user(id) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY(courseId) REFERENCES course(courseId) ON UPDATE CASCADE ON DELETE RESTRICT
    )";

    // execute query
    mysqli_query($conn, $sql);


$sql = "
    CREATE TABLE resource (
    resourceId INT AUTO_INCREMENT,
    name VARCHAR(50),	
    dateFrom DATE,
    dateUntil DATE,
    ownerId	INT,
    filename VARCHAR(100),
    FOREIGN KEY (ownerId) REFERENCES user(id)
    ON UPDATE CASCADE ON DELETE RESTRICT,
    PRIMARY KEY(resourceId)
    )";
    mysqli_query($conn, $sql);

?>