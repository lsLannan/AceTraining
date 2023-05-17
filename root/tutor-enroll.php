<!DOCTYPE html>
<?php session_start(); ?>
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

            
            <div class="container">
            <div class="item">
				<h2>Authorise Student Registrations</h2>

				<?php
				// db connection
				$conn = mysqli_connect("localhost", "root", "root", "acetraining");

					if (isset($_POST["id"])) {
						extract($_POST);

						$sql = "UPDATE users
								SET authorised='1'
								WHERE id='$id'";
						if (mysqli_query($conn, $sql)) {
							echo "<p style='color: green'>Student $id has been successfully authorised.</p>";
						}
						else {
							echo "<p style='color: red'>Student $id FAILED to be authorised.  Please try again or contact the administrator</p>";
						}

					} 
				?>	

				<table border="1">
					<tr>
						<th>ID</th>
						<th>Forename</th>
						<th>Surname</th>
						<th>Action</th>
					</tr>

					<?php
						
						$sql = "SELECT * FROM users 
								WHERE authorised='0'";
						$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));

						while ($row = mysqli_fetch_assoc($data)) {
							extract($row);
							echo "<tr>
									<td>$id</td>
									<td>$forename</td>
									<td>$surname</td>
									<td>
										<form method='POST' action='tutor-enroll.php'>
											<input type='hidden' name='id' value='$id'/>
											<input type='submit' class='btn' value='AUTHORISE'/>
										</form>
									</td>
								  </tr>";
						}
					?>
				</table>
                </div>
            </div>
        
        

         <?php include('components/footer.php'); ?>

        <script src="" async defer></script>
    </body>
</html>