<!--this needs to be its own page, replace enroll section-->
<!DOCTYPE html>
<?php 
session_start(); 
?>
<html lang="en">
    <head>
        <title>Authorise</title>
        <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>


        <?php
            include('components/header.php');
            include('components/tutor-navbar.php');
        ?>

        <div>
            <?php
            include('checkTutor.php');
            ?>

            <h1>Authorise Students</h1><hr>
            <p>Authroise your students based on course</p>

            <div class="container">
                <div class='item'>
                        <!--returns course that belong to the tutor-->
                        <?php 

                        if (!isset($_POST['studentID'])) 
                        {
                            if (!isset($_POST['courseId'])) 
                            {
                                getCourses();
                            } 
                            else 
                            {
                                getStudentTakingCourse();
                            }
                        }
                        else 
                        {
                            enrollStudents();
                        }
                      

                        ?>
                </div>
            </div>
        <?php include('components/footer.php'); ?>
        </div>
    </body>

</html>
<!--getCourses-->

<?php

function getCourses() {
    //echo("TEST: GETCOURSE\n");
    // get courses that belong to logged in tutor
    $userID = $_SESSION['userId'];

    // select all courses
    // added *
    $sql = "SELECT courseId, name FROM course WHERE owner = $userID";

    // call doSQL
    if ($resource = doSQL($sql)) 
    {
        showCourses($resource);
    }
}//end of getCourses

function showCourses($resource){
    //echo("TEST: SHOWCOURSES\n");
    // show courses n allow tutor to select

    // start form
    echo("<form name='showCourses' method='POST' action='tutorAuthoStud.php'>
            <select name='courseId' required autofocus > ");

            while ($currentLine = mysqli_fetch_array($resource)) 
                {
                //echo ("<option value='$currentLine[courseId]'>$currentLine[courseName]</option> ");
                echo ("<option value='$currentLine[courseId]'>$currentLine[name]</option> ");
                }
                
                echo ("</select>
                       <input type='submit' onclick='onclick' />
                 </form>   
                    ");
              
}


//moved doSQL

function getStudentTakingCourse() {
    //echo("TEST: GETSTUDENTTAKINGCOURSE\n");
    // takes posted value from showCourse form, places in local variable 
    $courseId = $_POST['courseId'];

    // gets all users on course selected by tutor
    $sql = "SELECT id FROM studenttaking WHERE courseId = $courseId AND authorised = 0";

    if ($resource = doSQL($sql)) 
    {
        getStudentDetails($resource);
    }
}

function getStudentDetails($resource) {
    //echo("TEST: GETSTUDENTDETAILS\n");

    // fetch user details from table using id
    $sql = "SELECT id, forename, surname FROM users WHERE ";

    while ($currentLine = mysqli_fetch_array($resource)) 
    {
        // concanates the sql statement for each user
        $sql .= "id = '$currentLine[id]' OR ";
    }
    $sql = rtrim($sql, " OR ");

    if ($resource = doSQL($sql)) 
    {
        showStudents($resource);
    }
}

function showStudents($resource) {
    //echo ("TEST: SHOWSTUDENTS\n");

    $courseId = $_POST['courseId'];

    echo ("<form name='showStudents' method='POST' action='tutorAuthoStud.php'>");
    echo ("<input type='hidden' name='courseId' value='$courseId' /> ");

    while ($currentLine = mysqli_fetch_array($resource)) 
        {
            echo ("<input type='checkbox' name='studentID[]' value='$currentLine[id]' />");
            echo ($currentLine['forename'] . ' ' . $currentLine['surname'] . '<br />');
        }
    echo ("<br /><input type='submit' onclick='submit' />
    </form>");
}//eof

function enrollStudents() {
    //echo ("TEST: ENROLLSTUDENTS\n");

    $courseId = $_POST['courseId'];

    foreach ($_POST['studentID'] as $userID) 
    {
        //$sql = "UPDATE studenttaking SET authorised = 1 WHERE id = $userID AND courseId = $courseId";
        $sql = "UPDATE studenttaking SET authorised = 1 WHERE id = $userID AND courseId = $courseId";
        doSQL($sql);
    }
}

function doSQL($sql) {
    /*
    echo ("<p> SQL QUERY: <pre>" . $sql . "</pre></p>");
    */
    // db connection
    $conn = mysqli_connect("localhost","root","root", "acetraining");

    //$resource  = mysqli_query($conn, $sql);
    if ($resource = mysqli_query($conn, $sql)) 
    {
        //echo("<p>SUCCESS</p>");
        return $resource;
    } 
    else 
    {
        echo ("<p>ERROR: ");
        echo (mysqli_error($conn) . "</p>");
        return false;
    }

}

?>
