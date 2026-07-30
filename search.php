<?php

include "config.php";


if (isset($_GET['query'])) {

    $search = mysqli_real_escape_string($conn, $_GET['query']);
} else {

    $search = "";
}



$sql = "SELECT * FROM businesses 

WHERE name LIKE '%$search%'

OR category LIKE '%$search%'

OR location LIKE '%$search%'

ORDER BY id DESC";



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


    <title>
        Search Result | VadoCity
    </title>


    <link rel="stylesheet" href="assets/css/style.css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">


</head>


<body>



    <header class="navbar">


        <div class="nav-container">


            <a href="index.php" class="logo">

                Vado<span>City</span>

            </a>


        </div>


    </header>




    <section class="business-blog">


        <div class="container">


            <h1 style="color:white;text-align:center;margin-bottom:40px;">

                Search Result For:
                <?php echo htmlspecialchars($search); ?>

            </h1>


            <div class="blog-grid">
                <?php

                while ($row = mysqli_fetch_assoc($result)) {


                    $image = !empty($row['image'])

                        ? "uploads/" . $row['image']

                        : "assets/images/no-image.jpg";


                ?>


                    <!-- SEARCH RESULT CARD -->


                    <div class="blog-card">



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

                                echo substr(
                                    htmlspecialchars($row['description']),
                                    0,
                                    150
                                );

                                ?>...


                            </p>




                            <a href="business-details.php?id=<?php echo $row['id']; ?>" class="read-more">

                                Read More

                                <i class="fa-solid fa-arrow-right"></i>

                            </a>



                        </div>



                    </div>



                <?php

                }

                ?>



            </div>


        </div>


    </section>




    <footer class="footer">


        <div class="container">


            <div class="footer-bottom">


                © <?php echo date("Y"); ?> VadoCity. All Rights Reserved.


            </div>


        </div>


    </footer>



</body>

</html>