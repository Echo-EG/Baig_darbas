<?php
    require __DIR__ . '/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <link href="jquery_plugin/css/jquery.fancybox.min.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/7336d25165.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;700&family=Open+Sans&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/newStyle.css">
    <link rel="stylesheet" href="css/responsive.css">

    <title>IDEA studija</title>

</head>
<body>
 <!-- ========================================= -->
    <div>
        <section id="section1" class="section1">
            <div class="container">
                <div class="logo"><img src="images/ideja-studija2.png" alt="Idea studija" class="scale-img">
                </div>
                <h1>Interjero dizaino paslaugos</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <a href="#section2">Read more</a>
                <img class="arow" src="images/arrow-down.png" alt="arow down" >
            </div>   
        </section>
    </div>
<!-- ============================================== -->
    <div id="navbar" class="main-header">
        <div class="header-container flex-container container">
            <div class="onepage">I.D.E.A STUDIJA</div>
            <a href="#/" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </a>
            <nav class="main-nav">
                <ul class="flex-container">
                    <li><a href="#section1">HOME</a></li>
                    <li><a href="#section2">ABOUT US</a></li>
                    <li><a href="#section3">PORTFOLIO</a></li>
                    <li><a href="#section4">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
<!-- ========================================== -->
    <section id="section2" class="section2">
        <div class="container">
            <div class="section-heading">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, nostrum.</p>
            </div>
            <div class="section2-content flex-container">
                <div class="service">
                    <div class="circleOne"></div>
                    <h2>Responsive</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="service">
                    <div class="circleTwo"></div>
                    <h2>Minimalist</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="service">
                    <div class="circleThree"></div>
                    <h2>Freebies</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
    </section>
<!-- ===================================================== -->
    <section id="section3" class="section3 ">
        <div class="container">
            <div class="section-heading">
                <h2>Portfolio</h2>
            </div>
            <!-- FANCYBOX -->
          
            <div class="grid">
            
                <a data-fancybox="gallery" href="images/big-img/8 4.3.jpg"><img src="images/11.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/1.10.jpg"><img src="images/2.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/1.1.jpg"><img src="images/3.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/2.1.jpg"><img src="images/9.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/5.jpg"><img src="images/5.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/50.jpg"><img src="images/6.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/7.jpg"><img src="images/7.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/8.jpg"><img src="images/8.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/4.jpg"><img src="images/4.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/big-img/50.jpg"><img src="images/1.jpg" alt="gallery image 1"></a>
                <a data-fancybox="gallery" href="images/10.jpg"><img src="images/10.jpg" alt="gallery image 1"></a>

            </div> 
    
        </div>
     
<!-- ============================================ -->
    </section>
    <section class="partners ">
        <div class="container">
            <div class="partnersList">
                <h2>Thanks to our partners</h2>
                <ul class="partner-list flex-container">
                    <li class="grinducentras"><a href="https://grinducentras.lt/?gclid=Cj0KCQjwgtWDBhDZARIsADEKwgP7UzJkVOR5o3a-DxGO8-i4VH-FM4S-br9Aag9EykD1o5CogQ8CQRYaAjojEALw_wcB" target="blank"><img src="images/partners/image-1-1.png" alt="Grindu centras"></a></li>
                    <li class="trukme"><a href="https://www.trukme.lt/en/" target="_blank"><img src="images/partners/logo-top.png" alt="Trukme"></a></li>
                    <li class="lisota"><a href="https://www.prattandlambert.com/" target="_blank"><img src="images/partners/plskaidrus.png" alt="Pratt & Lambert Paints"></a></li>
                   
                </ul>

            </div>
            
        </div>
    </section>


 <!--=============================================================== -->
   <section id="section4" class="contacts">
       <div class="container">
           <div class="section-heading contacts-heading">
               <h2>Contact</h2>
           </div>
            <div class="section-content">
                <form class="contact-form css-grid" action="index.php" method="post">
                    <div class="contact-text" action="index.php" method="post">
                        <p class="contact-text1">To contact us please use the contact form visible
                        <br>
                        When sending files, please use
                        the following e-mail
                        <br>
                        <strong>Aistė Kundrotaitė</strong> 
                        <br>
                        e-mail: <strong>idea.studija@gmail.com</strong>
                        </p>
                    </div>
                    <div class="input1">
                        YOUR NAME
                        <br>
                        <input class="name" type="text" name="vardas" required>
                    </div>
                    <div class="input2">
                        YOUR E-MAIL
                        <br>
                        <input class="email" type="email" name="email" required>

                    </div>
                    <div class="textarea1">
                        MESSAGE
                        <br>
                        <textarea class="textarea"  name="message" rows="6" required></textarea>
                    </div>  
                    <div class="btn-form">
                    <button class="btn" type="submit" name="submit" >SEND</button>
                    </div>    
                </form>
           </div>
       </div>
   </section> 
 
 <!-- ================================================================ -->
   <div class="main-footer">
       <div class="container">
            <div class="footer-logo">
                <img src="images/ideja-studija2.png" alt="idea studija">
            </div>
            <div class="social-media">
                <ul class="flex-container">
                    <li><a href="https://www.facebook.com/ideastudija.lt" target="blank"><i class="fab fa-facebook-f fa-lg"></i></a></li>
                    <li><a href="https://www.instagram.com/idea.studija/" target="_blank"><i class="fab fa-instagram fa-lg"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest fa-lg"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter fa-lg"></i></a></li>
                </ul>
            </div>
            <div class="copyright"> &copy; <?php echo date("Y"); ?>. All rights reserved.

            </div>
        </div>
   
    </div>
 
 


<script src="jquery_plugin/js/jquery-3.6.0.min.js" type="text/javascript"></script>


<script src="jquery_plugin/js/jquery.fancybox.min.js"></script> 

<!-- <script src="jquery_plugin/js/jquery.nicescroll.min.js"></script> -->


<script src="jquery_plugin/js/script.js"></script>


</body>
</html>