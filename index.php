<?php
include "config.php";

// Search
$search = "";

if (isset($_GET['search'])) {
    $search = trim($_GET['search']);

    $search = mysqli_real_escape_string($conn, $search);

    $sql = "SELECT * FROM businesses
            WHERE name LIKE '%$search%'
            OR category LIKE '%$search%'
            OR location LIKE '%$search%'
            ORDER BY id DESC";
} else {

    $sql = "SELECT * FROM businesses ORDER BY id DESC LIMIT 6";
}

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vadodara Business Directory</title>

    <meta name="description" content="Find hotels, hospitals, restaurants, companies and local businesses in Vadodara.">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <header class="navbar">

        <div class="nav-container">

            <a href="index.php" class="logo">

                Vado<span>City</span>

            </a>

            <ul class="nav-menu">

                <li><a href="index.php">Home</a></li>

                <li><a href="about.php">About</a></li>

                <li><a href="services.php">Services</a></li>

                <li><a href="contact.php">Contact</a></li>

                <li><a href="admin/login.php" class="nav-btn">Admin Login</a></li>

            </ul>

            <div class="menu-toggle">

                <i class="fa-solid fa-bars"></i>

            </div>

        </div>

    </header>

    <section class="hero">

        <canvas id="three-canvas"></canvas>

        <div class="container">

            <div class="hero-content fade-left">

                <h1>

                    Discover Best

                    <span>Businesses</span>

                    in Vadodara

                </h1>

                <p>

                    Find trusted hotels, restaurants, hospitals,
                    schools, companies and local services near you.

                </p>

                <div class="hero-buttons">

                    <a href="#business" class="btn">

                        Explore Now

                    </a>

                    <a href="admin/login.php" class="hero-btn-outline">

                        Add Business

                    </a>

                </div>

                <form class="hero-search" method="GET">

                    <input type="text" name="search" placeholder="Search business, category or location..."
                        value="<?php echo htmlspecialchars($search); ?>">

                    <button type="submit">

                        <i class="fa fa-search"></i>

                        Search

                    </button>

                </form>

            </div>

        </div>

    </section>
    <!-- =========================
CATEGORY SECTION
========================= -->

    <section class="categories">

        <div class="container">

            <div class="section-title">

                <h2>Popular Categories</h2>

                <p>
                    Explore businesses by category
                </p>

            </div>

            <div class="category-grid">

                <div class="category-card">
                    <i class="fa-solid fa-hotel"></i>
                    <h3>Hotels</h3>
                    <p>Luxury & Budget Hotels</p>
                </div>

                <div class="category-card">
                    <i class="fa-solid fa-utensils"></i>
                    <h3>Restaurants</h3>
                    <p>Best Food Places</p>
                </div>

                <div class="category-card">
                    <i class="fa-solid fa-hospital"></i>
                    <h3>Hospitals</h3>
                    <p>Healthcare Services</p>
                </div>

                <div class="category-card">
                    <i class="fa-solid fa-school"></i>
                    <h3>Schools</h3>
                    <p>Top Education</p>
                </div>

                <div class="category-card">
                    <i class="fa-solid fa-store"></i>
                    <h3>Shops</h3>
                    <p>Local Shopping</p>
                </div>

                <div class="category-card">
                    <i class="fa-solid fa-building"></i>
                    <h3>Companies</h3>
                    <p>Industries & Offices</p>
                </div>

            </div>

        </div>

    </section>



    <!-- =========================
BUSINESS LISTING
========================= -->

    <section id="business" class="business-section">

        <div class="container">

            <div class="section-title">

                <h2>

                    Featured Businesses

                </h2>

                <p>

                    Recently Added Businesses

                </p>

            </div>

            <div class="business-grid">

                <?php

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        $image = "uploads/" . $row['image'];

                        if (empty($row['image'])) {

                            $image = "assets/images/no-image.jpg";
                        }

                ?>

                        <div class="business-card fade-up">

                            <img src="<?php echo $image; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">

                            <div class="business-content">

                                <h3>

                                    <?php echo htmlspecialchars($row['name']); ?>

                                </h3>

                                <p>

                                    <i class="fa-solid fa-layer-group"></i>

                                    <?php echo htmlspecialchars($row['category']); ?>

                                </p>

                                <p>

                                    <i class="fa-solid fa-location-dot"></i>

                                    <?php echo htmlspecialchars($row['location']); ?>

                                </p>

                                <p>

                                    <?php

                                    echo substr(

                                        htmlspecialchars($row['description']),

                                        0,

                                        100

                                    );

                                    ?>

                                    ...

                                </p>

                                <div class="card-buttons">

                                    <a href="business.php?id=<?php echo $row['id']; ?>" class="card-btn">

                                        View Details

                                    </a>

                                </div>

                            </div>

                        </div>

                    <?php

                    }
                } else {

                    ?>

                    <div class="no-business">

                        <h2>

                            No Businesses Found

                        </h2>

                        <p>

                            Please add your first business from the Admin Panel.

                        </p>

                        <a href="admin/login.php" class="btn">

                            Admin Login

                        </a>

                    </div>

                <?php

                }

                ?>

            </div>

        </div>

    </section>
    <!-- =========================
SERVICES SECTION
========================= -->

    <section class="services">

        <div class="container">

            <div class="section-title">

                <h2>Our Services</h2>

                <p>
                    Helping businesses grow and customers find trusted local services.
                </p>

            </div>

            <div class="services-grid">

                <div class="service-box">

                    <div class="service-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <h3>Business Search</h3>

                    <p>
                        Find trusted hotels, restaurants, hospitals,
                        schools, companies and local businesses instantly.
                    </p>

                </div>

                <div class="service-box">

                    <div class="service-icon">
                        <i class="fa-solid fa-building"></i>
                    </div>

                    <h3>Business Listing</h3>

                    <p>
                        List your business online and reach thousands
                        of potential customers across Vadodara.
                    </p>

                </div>

                <div class="service-box">

                    <div class="service-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <h3>Local Discovery</h3>

                    <p>
                        Explore nearby businesses with accurate
                        locations and contact information.
                    </p>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================
CTA SECTION
========================= -->

    <section class="cta">

        <div class="container">

            <div class="cta-box">

                <h2>

                    Ready To Grow Your Business?

                </h2>

                <p>

                    Join VadoCity today and connect your business
                    with thousands of local customers.

                </p>

                <div class="hero-buttons">

                    <a href="admin/login.php" class="btn">

                        Add Business

                    </a>

                    <a href="contact.php" class="hero-btn-outline">

                        Contact Us

                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- =========================
FOOTER
========================= -->

    <footer class="footer">

        <div class="container">

            <div class="footer-grid">

                <div>

                    <h3>

                        Vado<span>City</span>

                    </h3>

                    <p>

                        Vadodara Business Directory helping people
                        discover trusted local businesses quickly.

                    </p>

                </div>



                <div>

                    <h3>

                        Quick Links

                    </h3>

                    <ul class="footer-links">

                        <li><a href="index.php">Home</a></li>

                        <li><a href="about.php">About</a></li>

                        <li><a href="services.php">Services</a></li>

                        <li><a href="contact.php">Contact</a></li>

                    </ul>

                </div>



                <div>

                    <h3>

                        Categories

                    </h3>

                    <ul class="footer-links">

                        <li>Hotels</li>

                        <li>Restaurants</li>

                        <li>Hospitals</li>

                        <li>Schools</li>

                        <li>Companies</li>

                        <li>Shops</li>

                    </ul>

                </div>



                <div>

                    <h3>

                        Contact

                    </h3>

                    <p>

                        <i class="fa-solid fa-location-dot"></i>

                        Vadodara, Gujarat

                    </p>

                    <p>

                        <i class="fa-solid fa-envelope"></i>

                        info@vadocity.com

                    </p>

                    <p>

                        <i class="fa-solid fa-phone"></i>

                        +91 98765 43210

                    </p>

                    <div class="social-links">

                        <a href="#"><i class="fab fa-facebook-f"></i></a>

                        <a href="#"><i class="fab fa-instagram"></i></a>

                        <a href="#"><i class="fab fa-linkedin-in"></i></a>

                        <a href="#"><i class="fab fa-youtube"></i></a>

                    </div>

                </div>

            </div>

            <div class="footer-bottom">

                © <?php echo date("Y"); ?> VadoCity. All Rights Reserved.

            </div>

        </div>

    </footer>
    <!-- =========================
BACK TO TOP
========================= -->

    <div class="back-top">

        <i class="fa-solid fa-arrow-up"></i>

    </div>



    <!-- =========================
JAVASCRIPT
========================= -->

    <script>
        // Mobile Menu

        const menuBtn = document.querySelector(".menu-toggle");

        const menu = document.querySelector(".nav-menu");

        if (menuBtn) {

            menuBtn.onclick = function() {

                menu.classList.toggle("active");

            }

        }



        // Back To Top

        const topBtn = document.querySelector(".back-top");

        window.addEventListener("scroll", () => {

            if (window.scrollY > 300) {

                topBtn.classList.add("active");

            } else {

                topBtn.classList.remove("active");

            }

        });



        topBtn.onclick = function() {

            window.scrollTo({

                top: 0,

                behavior: "smooth"

            });

        }



        // Fade Animation

        const observer = new IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {

                    entry.target.classList.add("show");

                }

            });

        });



        document.querySelectorAll(".fade-up,.fade-left,.fade-right").forEach((el) => {

            observer.observe(el);

        });
    </script>




    <!-- =========================
THREE JS
========================= -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <script>
        const canvas = document.getElementById("three-canvas");



        if (canvas) {

            const scene = new THREE.Scene();



            const camera = new THREE.PerspectiveCamera(

                75,

                window.innerWidth / window.innerHeight,

                0.1,

                1000

            );



            const renderer = new THREE.WebGLRenderer({

                canvas: canvas,

                alpha: true,

                antialias: true

            });



            renderer.setPixelRatio(window.devicePixelRatio);

            renderer.setSize(

                window.innerWidth,

                window.innerHeight

            );



            const geometry = new THREE.BufferGeometry();

            const particles = 500;

            const positions = [];



            for (let i = 0; i < particles; i++) {

                positions.push(

                    (Math.random() - 0.5) * 20,

                    (Math.random() - 0.5) * 20,

                    (Math.random() - 0.5) * 20

                );

            }



            geometry.setAttribute(

                'position',

                new THREE.Float32BufferAttribute(

                    positions,

                    3

                )

            );



            const material = new THREE.PointsMaterial({

                color: 0xff6600,

                size: 0.05,

                transparent: true,

                opacity: 0.9

            });



            const points = new THREE.Points(

                geometry,

                material

            );



            scene.add(points);



            camera.position.z = 6;



            function animate() {

                requestAnimationFrame(animate);



                points.rotation.x += 0.0005;

                points.rotation.y += 0.001;



                renderer.render(

                    scene,

                    camera

                );

            }



            animate();



            window.addEventListener("resize", () => {

                camera.aspect =

                    window.innerWidth / window.innerHeight;

                camera.updateProjectionMatrix();

                renderer.setSize(

                    window.innerWidth,

                    window.innerHeight

                );

            });

        }
    </script>

</body>

</html>