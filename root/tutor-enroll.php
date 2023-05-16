<!DOCTYPE html>
<!--removed session start here-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor</title>
        <meta name="description" content="">
        <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/tutor-navbar.php'); ?>

        <!--dummy text-->
            <h1>Student Enrollment</h1><hr>

            

            <div>

                <h3>Which course are you enrolling for?</h3>
                <!--drop down of courses? -->

                <?php include('showStudents.php'); ?>
            </div>
        
        

         <?php include('components/footer.php'); ?>

        <script src="" async defer></script>
    </body>
</html>