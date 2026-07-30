<?php
// About Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | Vadodara Business Directory</title>

    <meta name="description"
        content="Learn more about Vadodara Business Directory and how we connect customers with trusted local businesses.">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <link rel="stylesheet" href="assets/css/style.css">


</head>


<body>



    <!-- NAVBAR -->

    <header class="navbar">

        <div class="nav-container">


            <a href="index.php" class="logo">

                Vado<span>City</span>

            </a>



            <ul class="nav-menu">

                <li>
                    <a href="index.php">Home</a>
                </li>


                <li>
                    <a href="about.php">About</a>
                </li>


                <li>
                    <a href="services.php">Services</a>
                </li>


                <li>
                    <a href="contact.php">Contact</a>
                </li>


                <li>
                    <a href="#" class="nav-btn">
                        Login
                    </a>
                </li>


            </ul>



            <div class="menu-toggle">

                <i class="fa-solid fa-bars"></i>

            </div>


        </div>

    </header>





    <!-- ABOUT HERO -->


    <section class="hero">


        <div class="container">


            <div class="hero-content fade-left">


                <h1>

                    About

                    <span>

                        VadoCity

                    </span>

                </h1>


                <p>

                    Your trusted platform to discover hotels,
                    restaurants, hospitals, schools and businesses
                    across Vadodara.

                </p>


                <a href="contact.php" class="btn">

                    Contact Us

                </a>


            </div>


        </div>


    </section>








    <!-- ABOUT SECTION -->


    <section>


        <div class="container">


            <div class="contact-wrapper">



                <div class="glass-card">


                    <h2>

                        Who We Are

                    </h2>


                    <p>

                        VadoCity is a modern business directory platform
                        designed to connect customers with trusted local
                        businesses in Vadodara.

                    </p>


                    <p>

                        Our goal is to make searching for local services
                        simple, fast and reliable.

                    </p>



                </div>





                <div class="glass-card">


                    <h2>

                        Our Mission

                    </h2>


                    <p>

                        To create a digital ecosystem where businesses
                        can grow and customers can easily find quality
                        services.

                    </p>


                </div>



            </div>


        </div>


    </section>









    <!-- VISION CARDS -->


    <section>


        <div class="container">


            <div class="section-title">

                <h2>

                    Our Values

                </h2>

            </div>




            <div class="services-grid">



                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-bullseye"></i>

                    </div>


                    <h3>
                        Our Mission
                    </h3>


                    <p>

                        Helping businesses get discovered
                        by the right customers.

                    </p>


                </div>





                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-eye"></i>

                    </div>


                    <h3>
                        Our Vision
                    </h3>


                    <p>

                        Building Vadodara's most trusted
                        business discovery platform.

                    </p>


                </div>





                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-handshake"></i>

                    </div>


                    <h3>
                        Trust
                    </h3>


                    <p>

                        Connecting people with verified
                        and reliable businesses.

                    </p>


                </div>



            </div>


        </div>


    </section>








    <!-- STATS -->


    <section>


        <div class="container">


            <div class="business-grid">


                <div class="glass-card">


                    <h2 class="text-orange">

                        500+

                    </h2>


                    <p>

                        Businesses Listed

                    </p>


                </div>





                <div class="glass-card">


                    <h2 class="text-orange">

                        50+

                    </h2>


                    <p>

                        Categories

                    </p>


                </div>





                <div class="glass-card">


                    <h2 class="text-orange">

                        1000+

                    </h2>


                    <p>

                        Happy Users

                    </p>


                </div>



            </div>


        </div>


    </section>








    <!-- CTA -->


    <section>


        <div class="container">


            <div class="cta-box">


                <h2>

                    Want To List Your Business?

                </h2>


                <p>

                    Join VadoCity and reach more customers online.

                </p>


                <br>


                <a href="contact.php" class="btn">

                    Get Started

                </a>


            </div>


        </div>


    </section>









    <!-- FOOTER -->


    <footer class="footer">


        <div class="container">


            <div class="footer-bottom">


                © 2026 VadoCity. All Rights Reserved.


            </div>


        </div>


    </footer>






    <script>
        const menuBtn =
            document.querySelector(".menu-toggle");


        const menu =
            document.querySelector(".nav-menu");



        menuBtn.onclick = function() {

            menu.classList.toggle("active");

        };
    </script>



</body>

</html>