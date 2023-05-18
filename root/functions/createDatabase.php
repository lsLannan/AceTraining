<?php
/*
* @author LibertyL
*/

// store n test the connection
$conn = mysqli_connect("localhost","root","root");

$sql = "CREATE DATABASE acetraining";

echo ("<p>SQL QUERY: <pre>" . $sql . "</pre></p>");

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