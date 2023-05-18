<?php include("header.php")
?>
    <head>
        <title>Ace Training | Student | Courses</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="studentCourses.js" async></script>
    </head>
    <body>
        
        <section class="container content-section">
            <h2 class="section-header">Courses</h2>
            <div class="No Classes Enrolled">
                <h1 id="MyHeading">
                    <p> Uh Oh!</p>
                    <p>Looks like you haven't been enrolled in any courses as yet. </p>
                    <p>Choose Course and Click on "Enrol Now" to get started!</p>
                    <br>
                    <br>
                    <form action="/action_page.php">
                        <label for="courses">Choose a Course:</label>
                        <select name="courses" id="courses">
                          <option value="lamTraining">Leadership and Management</option>
                          <option value="samTraining">Sales and Marketing</option>
                          <option value="csTraining">Customer Service</option>
                          <option value="tbacTraining">Team Building and Communication</option>
                          <option value="itTraining">Information Technology</option>
                          <option value="fmTraining">Financial Management</option>
                        </select></h1>
                      </form>
                      <br>
                      <br>
                     <!-- My Button -->
                    <button id="MyButton">Enrol Now</button>
            </div>
                    <p>You are currently enrolled in the following courses:</p>
                    <div class="shop-items">
                        <div class="shop-item">
                            <img class="shop-item-image" src="Images/lam.jpg">
                            <div class="shop-item-details">
                                <button onclick = "window.location.href='lamTraining.php';">Leadership & Management</button>
                            </div>
                        </div>
                </div>
                <div class="shop-items">
                    <div class="shop-item">
                        <img class="shop-item-image" src="Images/sam.jpg">
                        <div class="shop-item-details">
                            <button onclick = "window.location.href='samTraining.php';">Sales & Marketing</button>
                        </div>
                    </div>
            </div>
            <div class="shop-items">
                    <div class="shop-item">
                        <img class="shop-item-image" src="Images/cs.jpg">
                        <div class="shop-item-details">
                            <button onclick = "window.location.href='cstraining.php';">Customer Service</button>
                        </div>
                    </div>
            </div>
            <div class="shop-items">
                <div class="shop-item">
                    <img class="shop-item-image" src="Images/tbac.jpg">
                    <div class="shop-item-details">
                        <button onclick = "window.location.href='tbactraining.php';">Team Building & Communication</button>
                    </div>
                </div>
            <div class="shop-items">
                    <div class="shop-item">
                        <img class="shop-item-image" src="Images/it.jpg">
                        <div class="shop-item-details">
                            <button onclick = "window.location.href='ittraining.php';">Information Technology</button>
                        </div>
                    </div>
        </div>
        <div class="shop-items">
            <div class="shop-item">
                <img class="shop-item-image" src="Images/fm.jpg">
                <div class="shop-item-details">
                    <button onclick = "window.location.href='fmtraining.php';">Financial Management</button>
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
<script>
   //Select button by id
   const MyButton = document.getElementById('MyButton');
    //Add on click listener for button
    MyButton.addEventListener('click', function() {
        //Select (h1) heading by id, and then change it's value to (bananas)
        document.getElementById('MyHeading').innerText = "Your request to enrol has been received. \r\n \r\nThe course will be displayed here once your tutor verifies the request.\r\n \r\nClick below if you'd like to enrol in another course."
    })
</script>