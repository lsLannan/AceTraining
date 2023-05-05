<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor Courses</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php include('header.php'); ?>
        <?php include('tutor-navbar.php'); ?>
        <tutor-navbar-component></tutor-navbar-component>
        <main>
            <h1>Tutor Courses</h1><hr>

            <?php 
            include('checkTutor.php');
            showMenu();
            ?>
        
            <!--Uploading documents-->
            <h2>Uploading documents</h2>
            <form method="post" action="addResource.php" enctype="multipart/form-data">
                <label for="upload">Select a file:</label>
                <input type="file" id="upload">

                <input type="submit" name="Submit">
            </form>
        </main>    
        <?php include('footer.php'); ?>
        <script src="" async defer></script>
    </body>
</html>


<?php
function showMenu() {
    echo ("
    <a href='addCourse.php' class='btn'>Add a course</a>
    <br /><br />
    ");
}

?>