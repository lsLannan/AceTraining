<!--THIS IS A FUNCTION NOW USE doLogin() INSTEAD -->
<?php session_start();
/*
* @author LibertyL
*/

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
?>