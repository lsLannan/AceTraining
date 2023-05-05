<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Courses</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
    <?php include('components/header.php'); ?>
    <?php include('components/tutor-navbar.php'); ?>

    <div class="container">

    <?php
    if(!isset($_POST[''])){
        // showCourse function
        showCourse();

    } else {
        // doCourse function
        doCourse();
    }

    ?>

    <?php include('components/footer.php'); ?>
    </div>
        <script src="" async defer></script>
    </body>
</html>

<?php


function showCourse(){
    // code below
        echo("
        <div class='form-container'>
                <form id='course-form' action='addCourse.php' method='post'>
                    <label for='courseName' class='course-name-label'>Course Name: </label>
                    <input type='text' id='courseName' name='courseName' placeholder='Basic Rocket Science' required><br><br>

                    <label for='creditValue' class='credit-value-label'>Credit Value: </label>
                    <input type='text' id='creditValue' name='creditValue' required><br><br>

                    <input type='submit' name='submit-button' id='submit-button' value='Submit'>
                </form>
        </div>
            ");
}

function doCourse(){
    // code :)

    //connection
    $conn = mysqli_connect("localhost", "root", "root", "acetraining");

    $cn = $_POST['courseName'];
    $cv = $_POST['creditValue'];
    $ow = $_SESSION['userId'];

    $sql = "INSERT INTO course ( name, creditValue, owner)
            VALUES ('$cn', '$cv', '$ow')";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($result) {
        echo ("Course added successfully :D");
    } else {
        echo ("Issue adding course :(");
    }
}

?>