<!DOCTYPE html>
<html lang="en">
<head>
    <title>Enroll</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="author" content="LibertyL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php
session_start();
include('components/header.php');
include('components/tutor-navbar.php');
   
include('checkTutor.php');
?>
<h2>Register and enroll students manually</h2><hr>
<?php
    if (!isset($_POST['courseId']) AND !isset($_POST['id']))
    {
        if (!isset($_POST['forename']))
        {
        // showReg function
        showRegister();
        }
        else 
        {
        // doReg function
        doRegister();

        $studentID = getStudentID();
        $resource = getThisCourses();
        showThisCourses($resource, $studentID);
        }
    }
    else 
    {
        enrollStudent();
    }


    ?>
</body>
<?php include('components/footer.php'); ?>
</html>

<?php
// show register function
function showRegister(){
    // code below
        echo("     
           <div class='container'>
               <div class='item'>
            
                
                    
                        <form class='form' id='register-form' action='tutorAddStud.php' method='post'>
                            <label for='forename' class='forename-label'>Forename: </label>
                            <input type='text' id='forename' name='forename' placeholder='Jane' required><br><br>

                            <label for='surname' class='surname-label'>Surname: </label>
                            <input type='text' id='surname' name='surname' placeholder='Doe' required><br><br>

                            <label for='email' class='email-label'>Email: </label>
                            <input type='text' id='email' name='email' placeholder='doe.jane@mail.ac.uk' required><br><br>

                            <input type='submit' name='submit-button' id='submit-button' value='Submit'>
                        </form>
                
                </div>
            </div
            ");
}

function doRegister(){
    // code :)
    $fn = $_POST['forename'];
    $sn = $_POST['surname'];
    $ea = $_POST['email'];

    //connection

    //sql
    $sql = "INSERT INTO users (forename, surname, email, password, userType, authorised)
            VALUES ('$fn', '$sn', '$ea', '$ea', 'student', 1)";

    /*
    echo ("<p>SQL QUERY: <pre>" . $sql . "<pre></p>");

    if (mysqli_query($conn, $sql)) 
    {
        echo ("<p style='color:green'>SUCCESS</p>");
    }
    else
    {
        echo ("<p style='color:red'>FAIL:  ");
        echo (mysqli_error($conn) . "</p>");
    }
    */

    doThisSQL($sql);
   
}

function doThisSQL($sql) 
{
    //connection
    $conn = mysqli_connect("localhost", "root", "root", "acetraining");

    //echo ("<p>SQL QUERY: <pre>" . $sql . "</pre></p>");
    
    if ( $resource = mysqli_query($conn, $sql) )
    {
        echo("<p style='color:green'>SUCCESS</p>");
        return $resource;
    } 
    else 
    {
        echo("<p style='color:red'>FAIL: ");
        echo(mysqli_error($conn) . "</p>");
        return false;
    }
}

function getStudentID() {
    $ea = $_POST['email'];
    $sql = "SELECT id FROM users WHERE email = '$ea' ";
    $record = mysqli_fetch_array(doThisSQL($sql));
    $studentID = $record['id'];

    return $studentID;
}

function getThisCourses() {
    $tutorID = $_SESSION['userId'];
    $sql = "SELECT * FROM course WHERE owner = $tutorID";
    $resource = doThisSQL($sql);
    return $resource;
}

function showThisCourses($resource, $studentID) {
    echo ("
        <div class='container'>
            <h3>Select Courses</h3>
            <div class='item'>
                <form name='showCourses' method='POST' action='tutorAddStud.php' >");

    while ($currentLine = mysqli_fetch_array($resource)) 
    {
        echo ("<input type='checkbox' name='courseId[]' value='$currentLine[courseId]' />");
        echo ($currentLine['name'] . '<br />');
    }

echo ("<br />
        <input type='hidden' name='id' value='$studentID' />
        <input type='submit' onclick='submit' />
      </form>
</div></div>");
}

function enrollStudent() {
    $course = $_POST['courseId'];
    $studentID = $_POST['id'];
    $today = date("Ymd");

    foreach ($course as $currentCourse) 
    {
        $sql = "INSERT INTO studenttaking (courseId, id, dateRegistered, authorised)
                VALUES ('$currentCourse', '$studentID', '$today', 1)";
        doThisSQL($sql);
    }
}

?>