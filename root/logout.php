<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bye</title>
        <meta name="description" content="">
         <meta name="author" content="LibertyL">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php include('components/header.php'); ?>

        <div>
            <p>You have been logged out</p>
            <?php session_destroy(); ?>
        </div>

        <?php include('components/footer.php'); ?>
        <script src="" async defer></script>
    </body>
</html>