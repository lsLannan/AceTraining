<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor Courses</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">-->
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/tutor-navbar.php'); ?>
        <div>
        
        
            <h1>Manage your courses</h1><hr>
            <h2>Add Course</h2>
             <div class="container">
            <?php 
                include('checkTutor.php');
                
                showMenu();
            ?>
            </div>
        
            <!--Uploading documents-->
            <h2>Uploading Resources</h2>
            <div class="container-row">
        
            <div class="item">
                 
                    <form method="POST" class="form" action="addResource.php" enctype="multipart/form-data">
                        <!--select file for upload-->
                        <label for="upload-file">Select a file:</label>
                        <input type="file" value="upload-file" id="upload-file" required>

                        <!--Name for file-->
                        <label for="file-name">File Name: </label>
                        <input type="text" value="" id="file-name" placeholder="file-name" required>


                        <!--Accessable from date-->
                        <label for="date-from">Available From: </label>
                        <input type="date" value="date-from" id="date-from" required>

                        <!--Accessable Unit date-->
                        <label for="date-until">Available Until: </label>
                        <input type="date" value="date-until" id="date-until" required>


                        <!--submit button-->
                        <input type="submit" name="Submit">
                    </form>
                
             </div>

             <div class="item">
                <h2>QUIZZES</h2>
             </div>
             </div>

        

        </div> 
        <?php include('components/footer.php'); ?>
        <script src="" async defer></script>
    </body>
</html>


<?php
function showMenu() {
    echo ("

<div class='item'>
    <a href='addCourse.php' class='btn btn-secondary'>Add a course</a>
    <br /><br />
</div>

    ");
}

?>