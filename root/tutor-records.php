<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tutor Home</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <meta name="description" content="">
         <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php include('components/header.php'); ?>
        <?php include('components/tutor-navbar.php'); ?>

        <?php 
		include('checkTutor.php'); 
		?>

        <!--dummy text-->
            <h1>Welcome Tutor</h1><hr>
        <main>
            <div>
                <h2>Student Records Hub</h2>
            </div>
        </main>
        <?php include('components/footer.php'); ?>
        
        <script src="" async defer></script>
    </body>
</html>
