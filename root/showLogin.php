<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MySQL Register</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
            <div class="form-container">
                <form action="doLogin.php" method="post">
                    <label for="email" class="email-label">Email: </label>
                    <input type="text" id="email" name="email" placeholder="email pls"><br>

                    <label for="password" class="password-label">Password: </label>
                    <input type="text" id="password" name="password" placeholder="password pls"><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>