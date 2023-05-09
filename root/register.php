<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
    <?php include('components/header.php'); ?>

    <!--<div class="container">-->

    <?php
    if(!isset($_POST['forename'])){
        // showReg function
        showRegister();

    } else {
        // doReg function
        doRegister();
    }

    ?>

    <?php include('components/footer.php'); ?>
    
        <script src="" async defer></script>
    </body>
</html>

<?php

// show register function
function showRegister(){
    // code below
        echo("     
        <h1>Register</h1>   
            <div class='container'>
            
                <div class='form'>
                    
                    <form class='form' id='register-form' action='register.php' method='post'>
                        <label for='forename' class='forename-label'>Forename: </label>
                        <input type='text' id='forename' name='forename' placeholder='Inigo' required><br><br>

                        <label for='surname' class='surname-label'>Surname: </label>
                        <input type='text' id='surname' name='surname' placeholder='Montoya' required><br><br>

                        <label for='email' class='email-label'>Email: </label>
                        <input type='text' id='email' name='email' placeholder='roberts.dread@mail.com' required><br><br>

                        <label for='password' class='password-label'>Password: </label>
                        <input type='password' id='password' name='password' placeholder='PrepareToDie123' required><br><br>

                        <label for='confirm-password' class='confirm-password-label'>Confirm password: </label>
                        <input type='password' id='confirm-password' name='confirm-password' placeholder='PrepareToDie123' required><br><br>

                        <!--choose permission type-->
                        <label for='type' class='type-label'>Tutor/Student: </label>
                        <select name='type' id='type'>
                            <option value='tutor'>Tutor</option>
                            <option value='student'>Student</option>
                        </select><br><br>


                        <input type='submit' name='submit-button' id='submit-button' value='Submit'>
                    </form>
                </div>
            </div>
            ");
}

function doRegister(){
    // code :)
    $fn = $_POST['forename'];
    $sn = $_POST['surname'];
    $ea = $_POST['email'];
    $pw = $_POST['password'];

    $ut = $_POST['userType'];

    // insert data into db
    //connection
    $conn = mysqli_connect("localhost", "root", "root", "acetraining");

    if ($ut == 'student') {
    $sql = "INSERT INTO users (forename, surname, email, password, userType, authorised)
            VALUES ('$fn', '$sn', '$ea', '$pw', '$ut', 1)";
    } else {
        $sql = "INSERT INTO users (forename, surname, email, password, userType, authorised)
            VALUES ('$fn', '$sn', '$ea', '$pw', '$ut', 0)";
    }
    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    echo("User has been registered, try logging in");
    echo("If you are a student you may have to wait to be authorised first");
}

?>