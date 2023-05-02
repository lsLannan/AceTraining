<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MySQL Register</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1>Ace Training</h1>

        <div class="container">
            <h2>Registration Form</h2>
            <div class="form-container">
                <form action="doRegister.php" method="post">
                    <label for="forename" class="forename-label">Forename: </label>
                    <input type="text" id="forename" name="forename" placeholder="name pls" required><br><br>

                    <label for="surname" class="surname-label">Surname: </label>
                    <input type="text" id="surname" name="surname" placeholder="surname pls" required><br><br>

                    <label for="email" class="email-label">Email: </label>
                    <input type="text" id="email" name="email" placeholder="email pls" required><br><br>

                    <label for="password" class="password-label">Password: </label>
                    <input type="text" id="password" name="password" placeholder="password pls" required><br><br>

                    <label for="confirm-password" class="confirm-password-label">Confirm password: </label>
                    <input type="text" id="confirm-password" name="password" placeholder="password again pls" required><br><br>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </body>
</html>