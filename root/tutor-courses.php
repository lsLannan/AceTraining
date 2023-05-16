<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor Courses</title>
        <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/tutor-navbar.php'); ?>
        <main>
            <h1>Tutor Courses</h1><hr>

            <?php 
            include('checkTutor.php');
            showMenu();
            ?>
        
            <!--Uploading documents-->
            <h2>Uploading documents</h2>
             
            <form method="post" action="addResource.php" enctype="multipart/form-data">
                
                <label for="upload-file">Select a file:</label>
                <input type="file" value="upload-file" id="upload-file">

                <input type="submit" name="Submit">
            </form>

        </main>    
        <?php include('components/footer.php'); ?>
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