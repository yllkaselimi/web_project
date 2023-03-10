<?php
    require_once('php/user.php');
    if (isset($_POST['save'])){
    $regj= new User();
    $regj->setEmri($_POST['emri']);
    $regj->setEmail($_POST['email']);
    $regj->setPassword($_POST['password']);
    $regj->setGender($_POST['gender']);
    $regj->insertoDhenat();
    }
    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signUp.css">
    <script type="text/javascript" src="js/signUp.js"></script>

</head>

<body>
    <!-- HEADER -->
       <header>
        <div class="navigation">
            <nav>
                <div class="header-text">
                    <span class="composition-text">
                        Travel
                    </span>

                    <span class="left-text">
                        Dare to live outside your box!
                    </span>
                </div>
                <i class="fa fa-bars menu-toggle"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html" target="_self">ABOUT</a></li>
                    <li><a href="blog.html" target="_self">BLOG</a></li>

                    <li><a href="loginPage.php" target="_self">LOG IN</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <!-- //HEADER -->

    <!-- CONTENT -->
    <div class="content-form">
        <form action="" method="POST" id="myForm"  onsubmit="return checkMatching(this)" name="myForm">
            <!-- onsubmit="return checkMatching(this)" -->
            <h2 class="form-title">Sign Up</h2>

            <div>
                <label>Email:</label>
                <input type="email" name="email" class="required" required>
            </div>
            <div>
                <label>Username:</label>
                <input type="text" name="emri" class="required" required>
            </div>
            <div>
                <!-- Use regex for password validation -->
                <label>Password:</label>
                <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$" 
                    class="required" required>
                <span toggle="#password" class="fa fa=fw fa eye field-icon toggle-password"></span>
                <p style="font-size: 12px; text-align: left; padding-left: 1em; color: #ff442a;"> Your password must
                    contain 8-20 characters (at least one upper case letter, one lower case letter and one number).</p>
            </div>
            <div>
                <label>Confirm Password:</label>
                <input type="password" id="password2" name="password2" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$"
                    class="required" required>
            </div>
            <div>
                <label>Gender:</label>
                <div class="gender">
                    <label>M</label>
                    <input type="radio" name="gender"  value="M">
                    <label>F</label>
                    <input type="radio" name="gender" value="F">
                    <label> Other</label>
                    <input type="radio" name="gender" value="O">
                </div>
            </div>
            

            <div>
                <button type="submit" name="save">Sign Up</button>
            </div>
            <p>Already have an account, <a href="logInPage.php">Log In</a> </p>
        </form>
        
    </div>

</body>

</html>
