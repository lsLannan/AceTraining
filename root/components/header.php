<header>
    <ul>
        <li><a id="home-link" href="index.php">Ace Training</a></li>
        <li><a href="tutor-home.php">Tutor Page</a></li>
        <!--link to sabrina-->
	    <li><a href="me/studenthome.html">Student Page</a></li>
    </ul>

    <?php
        if(!isset($_SESSION['userId'])) {
            echo("
            <div class='split'>
                <a href='register.php'>register</a> |
                <a href='login.php'>log in</a>
            </div>
            ");
        } else {
            echo ("
            <div class='split'>
                <a href='logout.php'>logout</a>
            </div>
            ");
        }
    ?>

    <?php include('components/rightNav.php'); ?>
</header>