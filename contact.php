<?php
// Contact Page
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact Us | Vadodara Business Directory</title>

    <meta name="description"
        content="Contact VadoCity for business listing, support and local business services in Vadodara.">


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








    <!-- CONTACT HERO -->


    <section class="hero">


        <div class="container">


            <div class="hero-content fade-left">


                <h1>

                    Contact

                    <span>
                        Us
                    </span>

                </h1>



                <p>

                    Have questions or want to list your business?
                    Get in touch with our team.

                </p>



                <a href="#contact" class="btn">

                    Send Message

                </a>


            </div>


        </div>


    </section>








    <!-- CONTACT INFO -->


    <section>


        <div class="container">


            <div class="section-title">

                <h2>

                    Get In Touch

                </h2>

            </div>





            <div class="category-grid">





                <div class="category-card">


                    <i class="fa-solid fa-location-dot"></i>


                    <h3>

                        Address

                    </h3>


                    <p>

                        Vadodara, Gujarat, India

                    </p>


                </div>







                <div class="category-card">


                    <i class="fa-solid fa-phone"></i>


                    <h3>

                        Phone

                    </h3>


                    <p>

                        +91 XXXXX XXXXX

                    </p>


                </div>







                <div class="category-card">


                    <i class="fa-solid fa-envelope"></i>


                    <h3>

                        Email

                    </h3>


                    <p>

                        info@vadocity.com

                    </p>


                </div>







                <div class="category-card">


                    <i class="fa-solid fa-clock"></i>


                    <h3>

                        Working Hours

                    </h3>


                    <p>

                        Mon - Sat : 9 AM - 7 PM

                    </p>


                </div>






            </div>


        </div>


    </section>









    <!-- CONTACT FORM + MAP -->


    <section id="contact">


        <div class="container">



            <div class="contact-wrapper">





                <!-- FORM -->


                <div class="contact-form">


                    <h2>

                        Send Message

                    </h2>


                    <br>



                    <form>


                        <div class="form-group">


                            <label>
                                Name
                            </label>


                            <input type="text" placeholder="Enter your name">


                        </div>





                        <div class="form-group">


                            <label>
                                Email
                            </label>


                            <input type="email" placeholder="Enter your email">


                        </div>





                        <div class="form-group">


                            <label>
                                Phone
                            </label>


                            <input type="text" placeholder="Enter phone number">


                        </div>






                        <div class="form-group">


                            <label>
                                Message
                            </label>


                            <textarea placeholder="Write your message"></textarea>


                        </div>





                        <button class="btn" type="submit">

                            Submit

                        </button>



                    </form>



                </div>








                <!-- MAP -->


                <div class="map-box">


                    <iframe src="https://www.google.com/maps?q=Vadodara%20Gujarat&output=embed" loading="lazy">

                    </iframe>


                </div>






            </div>


        </div>


    </section>









    <!-- CTA -->


    <section>


        <div class="container">


            <div class="cta-box">


                <h2>

                    List Your Business Today

                </h2>



                <p>

                    Connect with customers across Vadodara.

                </p>



                <br>



                <a href="#" class="btn">

                    Join Now

                </a>


            </div>


        </div>


    </section>









    <!-- FOOTER -->


    <footer class="footer">


        <div class="container">


            <div class="footer-grid">


                <div>


                    <h3>

                        VadoCity

                    </h3>


                    <p>

                        Vadodara's premium business directory platform.

                    </p>


                </div>



                <div>


                    <h3>

                        Quick Links

                    </h3>


                    <ul class="footer-links">


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


                    </ul>


                </div>




                <div>


                    <h3>

                        Services

                    </h3>


                    <ul class="footer-links">


                        <li>
                            Business Listing
                        </li>


                        <li>
                            Local Search
                        </li>


                        <li>
                            Business Promotion
                        </li>


                    </ul>


                </div>





                <div>


                    <h3>

                        Follow Us

                    </h3>


                    <div class="social-links">


                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>


                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>


                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>


                    </div>


                </div>




            </div>




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