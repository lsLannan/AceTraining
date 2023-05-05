<?php
session_start();

$conn = mysqli_connect("localhost","root","root","acetraining");

$cId = $_POST['course'];
$tId = $_SESSION['userId'];
   
$sql = "SELECT * FROM studenttaking WHERE courseId = $cId AND authorised = 0";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
$students = "";

while ($record = mysqli_fetch_array($result)) {
   $sql2 = "SELECT * FROM users WHERE id = $record[id]";
   $result2 = mysqli_query($conn,$sql2);
   $record2 = mysqli_fetch_array($result2);

   if ($record2['id'] != "") {
	    $students .= "<input type='checkbox' name='id[]' value='$record2[id]'  > " . 
        $record2['surname'] . " " . $record2['forename'] . "<br />";
      }
	  
   } //end

echo ('Select the students that you wish to authorise.');
echo ("<form name='form1' method='post' action='enrollStudents.php' >");
echo ($students);
echo ("<input type='hidden' name='courseId' value='$cId' /");
echo ("<br /><input type='submit' onclick='submit' value='Enroll' /></form> ");


?>