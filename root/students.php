<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <?php include('header.php'); ?>

        <!--dummy text-->
            <h1>Welcome Student</h1><hr>
        <main>
            <div class="info">
                <h2>Welcome to Ace Training</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>View your courses</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>Enroll on Courses</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>

                <?php 
                include('checkStudent.php');
                showMenu();
                ?>

                <h3>Download documents and quizzess</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam nisi, accusamus consequuntur vitae sunt exercitationem porro id, fugit eum laborum nemo quia. Dolore autem architecto voluptatibus illum perspiciatis, quas nisi.</p>
            
                <h3>And more probably!</h3>
            </div>
        </main>
        <div>
            <?php include('footer.php'); ?>
        </div>
        <script src="" async defer></script>
    </body>
</html>




<?php
function showMenu()
{
echo ("
<a href='selectCourse.php' class='btn'>Course Enrol</a> <br /><br />
");
}
?>