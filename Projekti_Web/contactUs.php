<?php
    require_once('php/contactUsCrud.php');
    if (isset($_POST['save'])){
    $regj= new ContactUs();
    $regj->setUsername($_POST['username']);
    $regj->setEmail($_POST['email']);
    $regj->setMessage($_POST['message']);

    $regj->insertoDhenat();
    }
    ?>

<!DOCTYPE html>
<html>

<head>
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactUs.css">

    <!-- <script src="js/nightMode.js"></script> -->
    <script src="js/script.js"></script>

</head>

<body>
    <!-- HEADER -->
    <?php include('header.php');?>



    <!-- BODY -->


    <div class="content-form">
    <form action="" method="POST" id="myForm" name="myForm">
            <h2 class="form-title">Contact us</h2>
            <div>
                <label>Username:</label>
                <input type="text" name="username" class="inputType" required autofocus>

            </div>
            <div>
                <label>Email:</label>
                <input type="text" name="email" class="inputType" required>
            </div>

            <label>Message:</label>
            <textarea rows="10" cols="53" type="text" name="message" class="inputType" required></textarea>

            <div>
                <br>
                <button type="submit" name="save" class="logIn-btn">Submit</button>
            </div>
    </div>
    </form>
    <br>
    </div>



    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section blog">
                    <h2>Latest From The Blog</h2>
                    <a href="blog.html" target="_blank">
                        <img src="images/cities/Thailand-Wat-Arun-Buddhist-temple-in-Bangkok-Yai-district-of-Bangkok-Wallpaper-Hd-For-Desktop-Mobile-And-Tablet-3840x2400-915x515.jpg"
                            alt="Thailand landscape" width="110px" height="110px">
                        <h4>Thailand - the most visited country</h4>
                        <p><span style="overflow-x: auto;">Due to researches made by statistical results Bangkok,
                                Thailand is one of the most visited cities of 2021. People chose to go there because of
                                its beautiful...</span></p>
                    </a>

                    <a href="blog.html" style="float: left; margin-top: 25px;" target="_blank">
                        <img src="images/vanGogh/Vincent_van_Gogh_-_Self-portrait_with_grey_felt_hat_-_Google_Art_Project.jpg"
                            alt="Van Gogh" width="110px" height="110px">

                        <h4>The art of Vincent van Gogh</h4>
                        <p><span style="overflow-x: auto;">Vincent Willem van Gogh the Dutch post-impressionist painter
                                who is among the most famous and influential figures in the history of Western art. The
                                Starry Night by him is one of the most known picture...</span></p>
                    </a>
                </div>

                <div class="footer-section details">
                    <h2>Company Details</h2>
                    <ul>
                        <li>Travel</li>
                        <li>
                            <address>N&#xeb;n&#xeb; Tereza, 105</address>
                        </li>
                        <li>Prishtin&#xeb;</li>
                        <li>10000</li>
                        <br>
                        <li>Tel:+383 44 129512</li>
                        <li>Fax: 029 3458487617</li>
                        <li>Email: <a href="mailto:contact@mydomain.com">travel@tr-pr.com</a></li>
                        <br>
                        <li>Office hours</li>
                        <li>Monday 08:00~16:00</li>
                        <li>Saturday 10:00~16:00</li>
                    </ul>
                </div>


            </div>
            <!-- <hr> -->
            <div class="footer-bottom">
                <p id="copy">Copyright &copy; 2022 - All rights reserved</p>
                <p id="template">Travel Company</p>
            </div>

        </div>

        <!-- <audio id="audio1" controls>
            <source id="audio2" src="audio/Haydn_Cello_Concerto_D-1.mp3" type="audio/mpeg">
            </audio> -->





    </footer>
    <!-- //footer -->


</body>

</html>