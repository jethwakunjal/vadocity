<?php
// Services Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Services | Vadodara Business Directory</title>

    <meta name="description"
        content="Explore VadoCity services including business listing, local search and digital business promotion.">


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
                    <a href="index.php">
                        Home
                    </a>
                </li>


                <li>
                    <a href="about.php">
                        About
                    </a>
                </li>


                <li>
                    <a href="services.php">
                        Services
                    </a>
                </li>


                <li>
                    <a href="contact.php">
                        Contact
                    </a>
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







    <!-- SERVICE HERO -->


    <section class="hero">


        <div class="container">


            <div class="hero-content fade-left">


                <h1>

                    Our

                    <span>
                        Services
                    </span>

                </h1>


                <p>

                    Helping customers find trusted businesses
                    and helping businesses grow digitally.

                </p>



                <a href="contact.php" class="btn">

                    Get Started

                </a>



            </div>


        </div>


    </section>









    <!-- MAIN SERVICES -->


    <section>


        <div class="container">



            <div class="section-title">

                <h2>
                    What We Provide
                </h2>

            </div>





            <div class="services-grid">





                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-building"></i>

                    </div>


                    <h3>

                        Business Listing

                    </h3>


                    <p>

                        Add your business profile with details,
                        images and location to reach more customers.

                    </p>


                </div>







                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-magnifying-glass"></i>

                    </div>


                    <h3>

                        Smart Search

                    </h3>


                    <p>

                        Users can quickly search hotels,
                        restaurants, hospitals and services.

                    </p>


                </div>







                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>


                    <h3>

                        Local Discovery

                    </h3>


                    <p>

                        Find nearby businesses and services
                        available in Vadodara.

                    </p>


                </div>







                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-chart-line"></i>

                    </div>


                    <h3>

                        Business Growth

                    </h3>


                    <p>

                        Improve online visibility and connect
                        with potential customers.

                    </p>


                </div>







                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-image"></i>

                    </div>


                    <h3>

                        Business Showcase

                    </h3>


                    <p>

                        Display your business images,
                        information and contact details.

                    </p>


                </div>







                <div class="service-box">


                    <div class="service-icon">

                        <i class="fa-solid fa-users"></i>

                    </div>


                    <h3>

                        Customer Reach

                    </h3>


                    <p>

                        Connect with thousands of people
                        looking for local services.

                    </p>


                </div>






            </div>


        </div>


    </section>









    <!-- WHY CHOOSE -->


    <section>


        <div class="container">


            <div class="section-title">

                <h2>

                    Why Choose Us

                </h2>

            </div>




            <div class="business-grid">



                <div class="glass-card">


                    <h3>

                        Verified Businesses

                    </h3>


                    <p>

                        Helping users discover reliable
                        local businesses.

                    </p>


                </div>





                <div class="glass-card">


                    <h3>

                        Easy Search

                    </h3>


                    <p>

                        Simple platform to find services
                        quickly.

                    </p>


                </div>





                <div class="glass-card">


                    <h3>

                        Better Visibility

                    </h3>


                    <p>

                        Give your business a strong
                        digital presence.

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

                    Ready To Grow Your Business?

                </h2>


                <p>

                    List your business with VadoCity today.

                </p>


                <br>


                <a href="contact.php" class="btn">

                    Add Business

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