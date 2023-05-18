<?php include("header.php")
?>
    <head>
        <title>Ace Training | Student| Home</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="studentHome.js" async></script>
    </head>
    <body>
        <section class="container content-section">
            <h2 class="section-header">Student Dashboard</h2>

            <div class="shop-items">
                <div class="shop-item">
                    <img class="shop-item-image" src="Images/Courses Photo.jpg">
                    <div class="shop-item-details">
                        <button onclick = "window.location.href='studentCourses.php';">Courses</button>
                    </div>
                </div>
                <div class="shop-item">
                    <img class="shop-item-image" src="Images/Grades Photo.jpg">
                    <div class="shop-item-details">
                        <button onclick = "window.location.href='studentGrades.php';">Grades</button>
                    </div>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Ace Training</h3>
            </div>
        </footer>
    </body>