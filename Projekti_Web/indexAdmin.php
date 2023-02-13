<?php
    require_once('php/homePage.php');

    if (isset($_POST['save'])){
    $regj= new Home();
    $regj->setTitle($_POST['title']);
    $regj->setDescription($_POST['description']);
    $regj->insertoDhenat();
    }
    
    $dhenat=new Home();
    $all=$dhenat->lexoDhenat();

    ?>

<!DOCTYPE html>
<html lang="en">

<html>

<head>
   
    <title>Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/homePage.css" rel="stylesheet" type="text/css">
	<link href="css/indexAdmin.css" rel="stylesheet" type="text/css">
	<link href="css/mediaQueries.css" rel="stylesheet" type="text/css">


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
					
                    <li><a href="#">HOME</a></li>
                    <li><a href="about.php" target="_self">ABOUT</a></li>
                    <li><a href="blog.php" target="_self">BLOG</a></li>
                    <li><a href="destination.php" target="_self">DESTINATIONS</a></li>
                    <li><a href="contactUs.php" target="_self">CONTACT US</a></li>
                    <li><a href="loginPage.php?logout=1"><b>LOGOUT</b><a></button></li>
	                <?php
	                if(isset($_GET['logout'])){
	                session_unset();
                	session_destroy();
	                }
                        ?>
					<div class="vertical-menu">
                        <a href="#" class="active">Dashboard</a>
                        <a href="userListAdmin.php">User list</a>
                        <a href="contactUsMessages.php">Messages</a>
                    </div>
					

                </ul>
            </nav>
        </div>
		
    </header>

    <script src="js/slider.js"></script>
    <!-- BODY -->

</div>
    <p class="centered-text-style">
        “ It is not the destination where you end up but the mishaps and memories you create along the way „ ~ Penelope
        Riley
    </p>
    <!-- Slider 1 -->
    <div class="slider" style="position: relative; margin: auto; width: 75%;" id="slider">

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
    
<article class="serviset">
    <section class="services">
            <h4 class="redbox">OUR SERVICES</h4>
        <div>
            <form action="" method="POST" id="myForm" name="myForm">
                <label style="margin-left: 40px">Title:</label><br>
                <input style="margin-left: 40px" type="text" name="title" class="required"><br>           
                <label style="margin-left: 40px">Description:</label><br>
                <input type="text" name="description" class="required">
                <button type="submit" name="save">+</button>
                <img src="images/world-icon.PNG" alt="icon" width="30" height="30">
                
                <h3 id="title1"><?php echo $all[5]['title']?></h3>
                <p id="title_text1"><?php echo $all[5]['description']?></p>
            
            </form>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB">Read
                            more</a></summary>
                </details>
        </div>   
                    
            <div class = "service2">    
            <form action="" method="POST" id="myForm" name="myForm">
                <label style="margin-left: 40px">Title:</label><br>
                <input style="margin-left: 40px" type="text" name="title" class="required"><br>           
                <label style="margin-left: 40px">Description:</label><br>
                <input type="text" name="description" class="required">
                <button type="submit" name="save">+</button>
             <img src="images/persons-icon.PNG" alt="icon" width="30" height="30">
            <h3 id="title1"><?php echo $all[6]['title']?></h3>
            <p id="title_text1"><?php echo $all[6]['description']?></p>
                           
            </form>

                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB">Read
                            more</a></summary>
                </details>
            </div>  

            <div class = "service3">    
            <form action="" method="POST" id="myForm" name="myForm">
                <label style="margin-left: 40px">Title:</label><br>
                <input style="margin-left: 40px" type="text" name="title" class="required"><br>           
                <label style="margin-left: 40px">Description:</label><br>
                <input type="text" name="description" class="required">
                <button type="submit" name="save">+</button>
            <img src="images/settings-icon.PNG" alt="icon" width="30" height="30">
            <h3 id="title1"><?php echo $all[7]['title']?></h3>
            <p id="title_text1"><?php echo $all[7]['description']?></p>
            </form>
                <details class="reddetails">
                    <summary><a class="article"
                            href="https://www.bublup.com/go/travel/?gclid=Cj0KCQiAr8bwBRD4ARIsAHa4YyK-Tc4TcCkCWCXvjdn4VkljsKLULuB1auja3yYF9_ncUV1kddog8ZwaAoHzEALw_wcB">Read
                            more</a></summary>
                </details>

                        
            </div>
        </div>
    </form>
    </section>
</article>

<article>
    <form action="#" method="post" id="myForm" name="myForm">
        <section class="players">
            <h4 style="top:13px" class="redbox">OUR PLAYERS</h4>

            <figure>
                <img src="images/people/people1.jpg" alt="photo" width="175" height="175">
                <figcaption>
                <button type="submit" name='save'>+</button>

                <div>
                    <div>
                        <label>Title:</label>
                        <input type="text" name='title' class="required">
                    </div>
                    <div>
                        <label>Description:</label>
                        <input type="text" name='description' class="required">
                    </div>
                </div>

                        <h4>Name: <span id="name1" style="font-weight: lighter;"><?php echo $all[0]['title']?></span></h4>
                        <p id="text_person1"><?php echo $all[0]['description']?></p>
                        <a href="https://www.linkedin.com" class="reddetails">View profile</a>

                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people2.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <button type="submit" name="save">+</button>
                    <div>
                        <label>Title:</label>
                        <input type="text" name="title" class="required" >
                    </div>
                    <div>
                        <label>Description:</label>
                        <input type="text" name="description" class="required" >
                    </div>
                    <h4>Name: <span id="name2" style="font-weight: lighter;"><?php echo $all[1]['title']?></span></h4>
                    <p id="text_person2"><?php echo $all[1]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people3.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <button type="submit" name="save">+</button>

                    <div>
                        <label>Title:</label>
                        <input type="text" name="title" class="required" >
                    </div>
                    <div>
                        <label>Description:</label>
                        <input type="text" name="description" class="required" >
                    </div>
                    <h4>Name: <span id="name3" style="font-weight: lighter;"><?php echo $all[2]['title']?> </span></h4>
                    <p id="text_person3"><?php echo $all[2]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>
            <?php  ?>

            <figure>
                <img src="images/people/people4.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <button type="submit" name="save">+</button>
                    <div>
                        <label>Title:</label>
                        <input type="text" name="title" class="required" >
                    </div>
                    <div>
                        <label>Description:</label>
                        <input type="text" name="description" class="required" >
                    </div>
                    <h4>Name: <span id="name4" style="font-weight: lighter;"><?php echo $all[3]['title']?> </span></h4>
                    <p id="text_person4"><?php echo $all[3]['description']?></p>
                    <a href="https://www.linkedin.com" class="reddetails">View profile</a>
                </figcaption>
            </figure>

            <figure>
                <img src="images/people/people5.jpg" alt="photo" width="175" height="175">
                <figcaption>
                    <button type="submit" name="save">+</button>
                    <div>
                        <label>Title:</label>
                        <input type="text" name="title" class="required" >
                    </div>
                    <div>
                        <label>Description:</label>
                        <input type="text" name="description" class="required" >
                    </div>
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

    </footer>


</body>

</html>
