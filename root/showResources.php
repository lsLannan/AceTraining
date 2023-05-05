<?php

include('checkStudent.php');

$conn = mysqli_connect("localhost","root","root","acetraining");

$sql = "SELECT * FROM resource";
$result = mysqli_query($conn,$sql);

while ($record = mysqli_fetch_array($result)) {
    echo ("<li><a href='resources/" . $record['filename'] . "' download >" . $record['name'] . "</a></li>" );
     }


?>