<?php

// store n test the connection
$conn = mysqli_connect("localhost","root","root", "acetraining") or die(mysqli_error($conn));

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