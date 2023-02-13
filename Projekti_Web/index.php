<?php
    require_once('php/homePage.php');
    if (isset($_POST["save"])){
    $regj= new Home();
    $regj->setTitle($_POST['title']);
    $regj->setDescription($_POST['description']);
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
    <link rel="stylesheet" href="css/homePage.css">

    <!-- <script src="js/nightMode.js"></script> -->
    <!-- <script src="js/script.js"></script> -->

</head>

<body>
<script src="js/slider.js"></script>

  
<!---HEADER-->
<?php include('header.php');?>
    <!-- BODY -->

    <p class="centered-text-style">
        “ It is not the destination where you end up but the mishaps and memories you create along the way „ ~ Penelope
        Riley
    </p>
    <!-- Slider 1 -->
    <!-- <section id="slider"> -->
    <div class="slider" style="position: relative; margin: auto; width: 75%;" id="slider">
        <!-- Slideshow container -->
        <!-- <div class="slideshow-container"> -->

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="images/slideshow/JF7_101564.jpg" alt="Visitors enjoying the sunset" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/people-men-women-friends.jpg" alt="" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/person-on-mountain-top.jpg" alt="A person hiking!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/Sunset_in_the_Old_Town_-_Bucharest,_Romania_-_Travel_photography_(35031271856).jpg"
                alt="Sunset in Bucharest!!" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/through-the-lens.jpg" alt="A photography" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/traveling-people-airport-bridge.jpg" alt="People traveling" style="width:100%">
        </div>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <!-- </div> -->
    </div>

    <article>
        <section class="services">
            <h4 class="redbox">OUR SERVICES</h4>
            <div>
                <img src="images/world-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title1"></h3>
                <p id="title_text1"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB">Read
                            more</summary>
                            
                </details>
                
            </div>
            <div>
                <img src="images/persons-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title2"></h3>
                <p id="title_text2"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://cultureisking.net/home/backpackers-guide-to-switzerland">Read more</summary>
                </details>
            </div>
            <div>
                <img src="images/settings-icon.PNG" alt="icon" width="30" height="30">
                <h3 id="title3"></h3>
                <p id="title_text3"></p>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.globalcitizenyear.org/?utm_source=google&utm_medium=grant&utm_campaign=NonBrandGeneral&utm_content=places%20to%20travel&gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyJRwTzzExsongzw8YNKR__2M_yzZvv4-KCpc82uMk3k2GcLUCpjBUcaAsAeEALw_wcB">Read
                            more</summary>
                </details>
            </div>

        </section>
    </article> 

<?php
$dhenat=new Home();
    $all=$dhenat->lexoDhenat();
?>
<article>
    <form action="" method="POST" id="myForm" name="myForm">
        <section class="players">
            <h4 style="top:13px" class="redbox">OUR PLAYERS</h4>

            <figure>
                <img src="images/people/people1.jpg" alt="photo" width="175" height="175">

                <figcaption>
                        <h4>Name: <span id="name1" style="font-weight: lighter;"><?php echo $all[0]['title']?></span></h4>
                        <p id="text_person1"><?php echo $all[0]['description']?></p>
                        <a href="https://www.linkedin.com" class="reddetails">View profile</a>

                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people2.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name2" style="font-weight: lighter;"><?php echo $all[1]['title']?></span></h4>
                    <p id="text_person2"><?php echo $all[1]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people3.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <div>
                    <h4>Name: <span id="name3" style="font-weight: lighter;"><?php echo $all[2]['title']?> </span></h4>
                    <p id="text_person3"><?php echo $all[2]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>
            <?php  ?>

            <figure>
                <img src="images/people/people4.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name4" style="font-weight: lighter;"><?php echo $all[3]['title']?> </span></h4>
                    <p id="text_person4"><?php echo $all[3]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people5.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <h4>Name: <span id="name5" style="font-weight: lighter;"><?php echo $all[4]['title']?> </span></h4>
                    <p id="text_person5"><?php echo $all[4]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>
            
        </section>
    </form>

        <section class="work">
            <h4 class="redbox">PLACES</h4>

            <img src="images/newyork.jpg" alt="image" width="300px" height="160px">
            <img src="images/berlin.jpg" alt="image" width="300px" height="160px">
            <img src="images/paris.jpg" alt="image" width="300px" height="160px">
        </section>

    </article>


    <script type="text/javascript">
       
       

        function TitleText(title, titleText) {
            this.titleVal = title;
            this.titleTextVal = titleText;

        }


        var t_text1 = new TitleText("Plan your travel", "The most wonderful places"
            + " you can visit are displayed in our website.By breaking the country into smaller, more manageable areas, the site aims to create a virtual travel experience that allows the user to explore.");
        var t_text2 = new TitleText("Blog", "Activites and art works. See the rating of" + " people who visited the places before you and their thoughts on different experiences. This straightforward navigation setup makes it easy for users to access the information they need.");
        var t_text3 = new TitleText("Reservation", "Pick the best place to stay during" +
            " your travel. Also find other activities, organizations and participate or voulenteer to help others as long as you stay in touch with the world, you learn more about cultures.");

        document.getElementById("title1").innerHTML = t_text1.titleVal;
        document.getElementById("title2").innerHTML = t_text2.titleVal;
        document.getElementById("title3").innerHTML = t_text3.titleVal;
        document.getElementById("title_text1").innerHTML = t_text1.titleTextVal;
        document.getElementById("title_text2").innerHTML = t_text2.titleTextVal;
        document.getElementById("title_text3").innerHTML = t_text3.titleTextVal;

        try {
            document.getElementById("demo").innerHTML = localStorage.getItem("pass_word");

            if (document.getElementById("demo") == "") throw "is Empty";
            if (isNaN(document.getElementById("demo"))) throw "not a number";
            if (document.getElementById("demo") == "null") throw "is Null";
            if (document.getElementById("demo") == undefined) throw "undefined";
        }
        catch (e) {
            console.warn("Error thrown:\n" + e + " !")
        }

    </script>

</body>
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


</html>