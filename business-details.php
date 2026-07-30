<?php

include "config.php";


if (!isset($_GET['id'])) {

    header("Location: business.php");
    exit;
}


$id = $_GET['id'];



$sql = "SELECT * FROM businesses WHERE id='$id'";


$result = mysqli_query($conn, $sql);



if (!$result) {

    die("Database Error : " . mysqli_error($conn));
}



if (mysqli_num_rows($result) == 0) {

    die("Business Not Found");
}



$row = mysqli_fetch_assoc($result);



$image = !empty($row['image'])

    ? "uploads/" . $row['image']

    : "assets/images/no-image.jpg";


?>



<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>

        <?php echo $row['name']; ?> | VadoCity

    </title>



    <link rel="stylesheet" href="assets/css/style.css">



    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">



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
                    <a href="business.php">Businesses</a>
                </li>


                <li>
                    <a href="contact.php">Contact</a>
                </li>


            </ul>


        </div>


    </header>




    <!-- DETAIL SECTION -->


    <section class="detail-page">


        <div class="container">


            <div class="detail-wrapper">



                <!-- IMAGE -->


                <div class="detail-image">


                    <img src="<?php echo $image; ?>" alt="<?php echo $row['name']; ?>">


                </div>




                <!-- CONTENT -->


                <div class="detail-content">


                    <span class="detail-category">

                        <?php echo $row['category']; ?>

                    </span>



                    <h1>

                        <?php echo $row['name']; ?>

                    </h1>



                    <p class="detail-location">

                        <i class="fa-solid fa-location-dot"></i>

                        <?php echo $row['location']; ?>

                    </p>
                    <!-- CONTACT INFO -->

                    <div class="detail-info">


                        <?php if (!empty($row['phone'])) { ?>

                            <p>

                                <i class="fa-solid fa-phone"></i>

                                <?php echo $row['phone']; ?>

                            </p>

                        <?php } ?>



                        <?php if (!empty($row['email'])) { ?>

                            <p>

                                <i class="fa-solid fa-envelope"></i>

                                <?php echo $row['email']; ?>

                            </p>

                        <?php } ?>


                    </div>



                    <!-- DESCRIPTION -->


                    <div class="detail-description">


                        <h2>

                            About Business

                        </h2>


                        <p>

                            <?php

                            echo nl2br(htmlspecialchars($row['description']));

                            ?>

                        </p>


                    </div>





                    <!-- BUTTONS -->


                    <div class="detail-buttons">



                        <?php if (!empty($row['phone'])) { ?>


                            <a href="tel:<?php echo $row['phone']; ?>" class="call-button">

                                <i class="fa-solid fa-phone"></i>

                                Call Now

                            </a>




                            <a href="https://wa.me/91<?php echo preg_replace('/[^0-9]/', '', $row['phone']); ?>"
                                target="_blank" class="whatsapp-button">

                                <i class="fa-brands fa-whatsapp"></i>

                                WhatsApp

                            </a>


                        <?php } ?>




                        <?php if (!empty($row['email'])) { ?>


                            <a href="mailto:<?php echo $row['email']; ?>" class="email-button">

                                <i class="fa-solid fa-envelope"></i>

                                Email

                            </a>


                        <?php } ?>


                    </div>



                </div>


            </div>


        </div>


    </section>





    <!-- GOOGLE MAP -->


    <section class="map-section">


        <div class="container">


            <h2>

                Business Location

            </h2>



            <div class="map-box">


                <iframe src="https://maps.google.com/maps?q=<?php echo urlencode($row['location']); ?>&output=embed"
                    loading="lazy">

                </iframe>



            </div>


        </div>


    </section>
    <!-- RELATED BUSINESSES -->


    <section class="related-section">


        <div class="container">


            <h2 class="related-title">

                Related Businesses

            </h2>



            <div class="related-grid">


                <?php


                $cat = $row['category'];


                $related_sql = "SELECT * FROM businesses 
WHERE category='$cat' 
AND id!='$id'
LIMIT 3";


                $related_result = mysqli_query($conn, $related_sql);



                while ($related = mysqli_fetch_assoc($related_result)) {



                    $related_image = !empty($related['image'])

                        ? "uploads/" . $related['image']

                        : "assets/images/no-image.jpg";

                ?>


                    <div class="related-card">


                        <img src="<?php echo $related_image; ?>">



                        <div class="related-content">


                            <h3>

                                <?php echo $related['name']; ?>

                            </h3>


                            <p>

                                📍 <?php echo $related['location']; ?>

                            </p>



                            <a href="business-details.php?id=<?php echo $related['id']; ?>">

                                Read More

                            </a>


                        </div>


                    </div>


                <?php } ?>


            </div>


        </div>


    </section>





    <!-- FOOTER -->


    <footer class="footer">


        <div class="container">


            <div class="footer-bottom">


                © <?php echo date("Y"); ?> VadoCity. All Rights Reserved.


            </div>


        </div>


    </footer>





</body>

</html>