<?php

include "config.php";


$sql = "SELECT * FROM businesses ORDER BY id DESC";

$result = mysqli_query($conn, $sql);


if (!$result) {

    die("Database Error : " . mysqli_error($conn));
}


?>


<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Vadodara Businesses | VadoCity</title>


    <link rel="stylesheet" href="assets/css/style.css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


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
                    <a href="index.php">
                        Home
                    </a>
                </li>


                <li>
                    <a href="business.php">
                        Businesses
                    </a>
                </li>


                <li>
                    <a href="contact.php">
                        Contact
                    </a>
                </li>


            </ul>


        </div>


    </header>




    <!-- PAGE TITLE -->


    <section class="page-header">


        <div class="container">


            <h1>

                Latest Businesses

            </h1>


            <p>

                Discover trusted businesses in Vadodara

            </p>


        </div>


    </section>





    <!-- BUSINESS BLOG SECTION -->


    <section class="business-blog">


        <div class="container">


            <div class="blog-grid">
                <?php

                while ($row = mysqli_fetch_assoc($result)) {


                    $image = !empty($row['image'])

                        ? "uploads/" . $row['image']

                        : "assets/images/no-image.jpg";


                ?>


                    <!-- BLOG CARD -->

                    <article class="blog-card">



                        <div class="blog-image">


                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">


                        </div>





                        <div class="blog-content">



                            <div class="blog-meta">


                                <span>

                                    <i class="fa-solid fa-layer-group"></i>

                                    <?php echo htmlspecialchars($row['category']); ?>

                                </span>


                                <span>

                                    <i class="fa-solid fa-location-dot"></i>

                                    <?php echo htmlspecialchars($row['location']); ?>

                                </span>


                            </div>





                            <h2>

                                <?php echo htmlspecialchars($row['name']); ?>

                            </h2>





                            <p>


                                <?php

                                $description = $row['description'];


                                echo substr($description, 0, 150);


                                ?>


                                ...


                            </p>





                            <a href="business-details.php?id=<?php echo $row['id']; ?>" class="read-more">


                                Read More


                                <i class="fa-solid fa-arrow-right"></i>


                            </a>




                        </div>


                    </article>



                <?php

                }

                ?>



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