<?php
// connect to db
//mysqli_connect("localhost","root","root", "acetraining");

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));

// create table
$sqlA = "CREATE TABLE user (
    id int auto_increment,
    forename varchar(30),
    surname varchar(30),
    primary key(id)
    )";

    // execute query
    mysqli_query($conn, $sqlA);
?>