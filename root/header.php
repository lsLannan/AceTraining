<header>
    <ul>
        <li><a href="index.php">Ace Training</a></li>
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
</header>