<?php
session_start();
include('_config_inc.php');


if (isset($_GET["logout"])) {
    session_destroy();
    session_unset();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourWoof - listing</title>
    <link rel="icon" type="image/icon" sizes="16x16" href="./images/yourwoof16x16.png">
    <link rel="apple-icon" type="image/icon" href="./images/yourwoof180x180-apple.png">
    <link rel="icon" type="image/icon" href="./images/yourwoof512x512.png">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


    <!-- main css -->

    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap icons-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


</head>

<body>


    <div class="main-wrapper">

        <div class="nav-background">
            <div class="mobile-logo">
                <img src="./icons/logo.svg" alt="">
            </div>
            <div class="mobile-nav">

                <!-- <div class="nav-top">
                    <ul>
                        <li>
                            <a href="#">HOME</a>
                        </li>

                        <li>
                            <a href="#adopt">ADOPT</a>
                        </li>
                        <li>
                            <a href="#rescue">RESCUE</a>
                        </li>
                        <li>
                            <a href="#getinvolved">GET INVOLVED</a>
                        </li>

                        <li>
                            <a href="#donate">DONATE</a>
                        </li>
                        <li>
                            <a href="#contact">CONTACT US</a>
                        </li>
                        <li>
                            <a href="#">LOG IN</a>
                        </li>
                        <li>
                            <a href="#">REGISTER</a>
                        </li>

                    </ul>
                </div> -->
                <div class="contact flex items-center">
                    <img src="./icons/phone.svg" alt="">
                    <div>
                        <h5>Call us: (+855) 12 345 6789</h5>
                        <h6>E-mail : yourwoof@gmail.com</h6>
                    </div>
                </div>
                <div class="time flex items-center">
                    <img src="./icons/clock.svg" alt="">
                    <div>
                        <h5>Working Hours:</h5>
                        <h6>Mon - Sat (8.00am - 5.00pm)</h6>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-content-wrapper">
            <div class="nav-trigger">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart">
                    <line x1="12" y1="20" x2="12" y2="10" />
                    <line x1="18" y1="20" x2="18" y2="4" />
                    <line x1="6" y1="20" x2="6" y2="16" />
                </svg>
            </div>

            <div class="site-content">
                <header class="topbar">
                    <div class="container flex justify-between items-center">


                        <div class="icons">
                            <a href="#"><img src="./icons/facebook.svg" alt=""></a>
                            <a href="#"><img src="./icons/twitter.svg" alt=""></a>
                            <a href="#"><img src="./icons/google.svg" alt=""></a>
                            <a href="#"><img src="./icons/instagram.svg" alt=""></a>
                            <a href="#"><img src="./icons/search.svg" alt=""></a>
                        </div>


                        <div class="auth flex items-center">
                            <?php
                            if (isset($_SESSION['username'])) {
                            ?>
                                <div>

                                    <a href="#">
                                        <?php echo ($_SESSION['username']); ?>
                                    </a>
                                    <span class="divider">|</span>
                                    <a href="/woof/login.php?logout" class="btn-logout">
                                        <img src="./icons/edit.svg" alt="_blank">
                                        <span>Logout</span>
                                    </a>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div>
                                    <img src="./icons/user-icon.svg" alt="">
                                    <a href="/woof/login.php">Log in</a>

                                </div>
                                <span class="divider">|</span>

                                <div>
                                    <img src="./icons/edit.svg" alt="_blank">
                                    <a href="/woof/register.php">Register Now</a>
                                </div>
                            <?php
                            }
                            ?>


                        </div>
                    </div>

                </header>


                <nav>
                    <div class="top">
                        <div class="container flex justify-between">
                            <div class="contact flex items-center">
                                <img src="./icons/phone.svg" alt="">
                                <div>
                                    <h5>Call US: (+84) 123 456 789</h5>
                                    <h6>E-mail : yourwoof@gmail.com</h6>
                                </div>
                            </div>
                            <div class="branding">
                                <img src="./icons/logo.svg" alt="">
                            </div>
                            <div class="time flex items-center">
                                <img src="./icons/clock.svg" alt="">
                                <div>
                                    <h5>Working Hours:</h5>
                                    <h6>Mon - Sat (8.00am - 5.00pm)</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar magic-shadow">
                        <div class="container flex justify-center">

                            <a href="index.php" class="active">HOME</a>

                            <!-- <a href="#adopt">ADOPT</a>
                            <a href="#rescue">RESCUE</a>
                            <a href="#getinvolved">GET INVOLVED</a>
                            <a href="#donate">DONATE</a>
                            <a href="#contact">CONTACT US</a> -->
                        </div>
                    </div>
                </nav>


                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container px-4 px-lg-5">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <form class="d-flex">
                                <button class="btn btn-outline-dark" type="submit">

                                    <i class="bi-cart-fill me-1"></i>Cart

                                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>


                <section class="py-5">
                    <div class="container px-4 px-lg-5 my-5">
                        <div class="row gx-4 gx-lg-5 align-items-center">

                            <!-- fill here -->

                            <?php
                            $id = $_GET['product_id'];
                            $conn = mysqli_connect("localhost", "root", "", "yourwoofAdmin");
                            $select = "SELECT * FROM product WHERE product_id='" . $id . "'";
                            $query = mysqli_query($conn, $select);
                            while ($row = $query->fetch_assoc()) {

                            ?>
                                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../admin_panel/uploads/<?php echo $row['product_image']; ?>" alt="..." /></div>
                                <div class="col-md-6">
                                    <div class="small mb-1">Unavailable</div>
                                    <!-- dog name -->
                                    <h1 class="display-5 fw-bolder"><?php echo $row['product_name']; ?></h1>

                                    <p class="lead"><?php echo substr($row['product_desc'], 0, 1000); ?></p>
                                    <div class="d-flex">

                                        <button type="button" class="btn btn-primary btn-interest" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                                            <i class="bi-cart-fill me-1"></i>
                                            <a href="./payment.php" style="text-decoration: none;">Interest</a>
                                        </button>

                                    </div>

                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>

                <!-- Related items section-->
                <section class="py-5 bg-light">
                    <div class="container px-4 px-lg-5 mt-5">
                        <h2 class="fw-bolder mb-4">Other Dogs</h2>
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                            <!-- fill here -->

                            <?php
                            $conn = mysqli_connect("localhost", "root", "", "yourwoofAdmin");
                            $select = "SELECT * FROM product ORDER BY product_id DESC LIMIT 0,10";
                            $query = mysqli_query($conn, $select);
                            while ($row = $query->fetch_assoc()) {

                            ?>

                                <div class="col mb-5">
                                    <div class="card h-100">
                                        <!-- Sale badge-->
                                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Booked</div>

                                        <!-- Product image-->
                                        <img class="card-img-top" src="../admin_panel/uploads/<?php echo $row['product_image']; ?>" alt="..." />
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder"><?php echo $row['product_name']; ?></h5>
                                                <!-- Product price-->
                                                <p style="color: red;">Unavailable</p>
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View</a></div>
                                        </div>
                                    </div>
                                </div>


                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </section>



                <!-- welcome -->

                <footer>
                    <div class="container">
                        <div class="box">
                            <h3>About us</h3>
                            <p>Yourwoof was created by Veiy Sokheng and In Sothiry, sophomores(GEN8) of IT Engineering Department, RUPP
                                est. 2023 for their project practicum.
                            </p>
                            <button class="btn btn-primary">Read More</button>
                        </div>
                        <div class="box">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#adopt">Adopt</a>
                                </li>
                                <li>
                                    <a href="#getinvolved">Get Involved</a>
                                </li>

                                <li>
                                    <a href="#">Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Contact us</a>
                                </li>

                            </ul>
                        </div>
                        <div class="box">
                            <h3>Follow Us</h3>
                            <div>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/codersgyan">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/CoderGyan">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google +</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/codersgyan/">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </footer>
                <footer class="copyright">
                    <div>
                        Copyright © 2023 .All rights reserved by <a href="https://www.instagram.com/fromm_hengie/">Veiy Sokheng </a>
                        & <a href="https://www.instagram.com/insothiry/">In Sothiry </a>
                    </div>
                </footer>
            </div>
        </div>
    </div>





    <!-- Bootstrap core JS-->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Core theme JS-->
</body>



</html>