<!DOCTYPE html>
<!--start session-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="liberty">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php include ('components/header.php'); ?>
        
        
            <?php
            if (!isset($_POST['email'])) {
                // showLogin
                showLogin();
            } else {
                // doLogin
                doLogin();
                if($_SESSION['userType'] == "tutor") {
                    header('Location: tutor-home.php');
                }
                if($_SESSION['userType'] == "student") {
                    header('Location: students.php');
                }
            }

            ?>
        

        <?php include('components/footer.php'); ?>
        <script src="" async defer></script>
    </body>
</html>

<?php
//TODO: TURN SHOWLOGIN AND DOLOGIN INTO FUNCTIONS BELOW THX

function showLogin() {
    // code
    echo ("
    <h1>Login</h1>
    <div class='container'>
        <div class='form-container'>
            <form action='login.php' method='post'>
                <label for='email' class='email-label'>Email: </label>
                <input type='text' id='email' name='email' placeholder='email pls' required><br>

                <label for='password' class='password-label'>Password: </label>
                <input type='text' id='password' name='password' placeholder='password pls' required><br>

                <input type='submit' value='Submit'>
            </form>
        </div>
    </div>
        ");
}

function doLogin() {
    // code
//connection
$conn = mysqli_connect("localhost", "root", "root", "acetraining");

$ea = $_POST['email'];
$pw = $_POST['password'];

// aunthenticate 
$sql = "SELECT * FROM users WHERE (email = '$ea' AND password = '$pw' )";

$result = mysqli_query ($conn,$sql) or die(mysqli_error($conn));
$record = mysqli_fetch_array ($result);

// check id field is set
if ($record['id'] == "") {
    echo ("Invalid LoginID or password");
} else {
    echo ("Welcome, login ok");

    if($record['authorised'] == 0) {
        echo("account not yet authorised");
    } else {
    $_SESSION['userId'] = $record['id'];
    $_SESSION['userType'] = $record['userType'];
    }
}

}
?>