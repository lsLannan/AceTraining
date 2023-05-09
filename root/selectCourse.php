<!-- shows list of available courses, allows for enrollment-->
<h1>Under construction</h1>
<a href="students.php">Go back to student home</a>
<?php
function showCourses() {
    // db connection
    $conn = mysqli_connect("localhost","root","root","acetraining");
    $sql = "SELECT * from course";	   
    $result = mysqli_query($conn,$sql);   
    echo ("<form id='form1' name='form1' method='post' action='selectCourse.php'>");

    while ($record = mysqli_fetch_array($result)) {  
        echo ("<input type='checkbox' name='courseID[]' 
		value='$record[courseId]'>  $record[name] <br />");
	}

echo ("<br /><input type='submit' name='button' id='button' value='Submit' /></form>");

}

function doEnrollment() {
    // enroll
    $conn = mysqli_connect("localhost","root", "root","aceTraining");

    $dateEnroled = date("Y-m-d");
    $userId = $_SESSION['userId'];

    foreach ($_POST['courseID'] as $courseId) {
        $sql = "INSERT INTO studentTaking (id, courseId, dateEnrolled, authorised) 
        VALUES ('$userId','$courseId','$dateEnroled',0)";

    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

   if ($result) {
      echo ("Successfully registered for course id " . $courseId . "<br />");
      }
   }
}
?>