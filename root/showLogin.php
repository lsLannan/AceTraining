<!--THIS IS NOW A FUNCTION USE showLogin() instead-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MySQL Register</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="login-form-container-container">
            <h1>Login</h1>
            <div class="login-form-container">
                <form action="login.php" method="post">
                    <label for="email" class="email-label">Email: </label>
                    <input type="text" id="email" name="email" placeholder="email pls" required><br>

                    <label for="password" class="password-label">Password: </label>
                    <input type="text" id="password" name="password" placeholder="password pls" required><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>