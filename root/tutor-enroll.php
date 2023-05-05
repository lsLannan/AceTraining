<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/tutor-navbar.php'); ?>

        <!--dummy text-->
            <h1>Welcome Tutor</h1><hr>

            <div>
                <h2>Student Enrollment</h2>
                <?php include('showStudents.php'); ?>
            </div>
        
        

        <?php include('components/footer.php'); ?>

        <script src="" async defer></script>
    </body>
</html>