<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <!-- Config részben beállított linkre hivatkozás -->
    <base href="<?php print(base_url()) ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SportOnline - Az Ön sport katalógusa!</title>
    <meta name="description" content="Sporthírbörze a legfrissebb hírek kavalkádjában!">
    <meta name="keywords" content="Sport, sportOnline, Labdarugás, Kézilabda, Olimpia, Kosárlabda">
    <meta name="author" content="Barta Máté György">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: eBusiness - v4.7.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <h1><a href="http://localhost/myBlogMate/index.php"><span>sportonline</span>Katalógus</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">

                <?php
                if (isset($temakorok)) {
                    foreach ($temakorok as $tema) {

                ?>
                        <ul>
                            <li><a class="nav-link scrollto " href="http://localhost/myBlogMate/index.php"><?php print($tema['megnevezes'])  ?></a></li>
                            <ul>
                        <?php
                    }
                }
                        ?>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Blog Header ======= -->
        <div class="header-bg page-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer3">
                                    <h2 class="title3"><span>sportonline</span>Katalógus - Aktuális hírbörze</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="page-head-blog">
                            <div class="single-blog-page">
                                <!-- search option start -->
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- search option end -->
                            </div>

                            <div class="single-blog-page">
                                <!-- recent start -->
                                <div class="left-blog">
                                    <h4>Akutális tartalom</h4>
                                    <div class="recent-post">
                                        <?php
                                        if (isset($oldalsav)) {
                                            foreach ($oldalsav as $oldalCikk) {
                                        ?>
                                                <!-- start single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                        <a href="#">
                                                            <img src="<?php print($oldalCikk['image']) ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><a href="#"><?php print($oldalCikk['cim']) ?></a></p>
                                                    </div>
                                                </div>
                                                <!-- End single post -->
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- recent end -->
                            </div>
                            <div class="single-blog-page">
                                <div class="left-blog">
                                    <h4>Szerkesztőségünk</h4>
                                    <ul>
                                        <?php
                                        if (isset($szerzok)) {
                                            foreach ($szerzok as $szerzo) {
                                        ?>
                                                <li>
                                                    <a href="#"><?php print('- ' . $szerzo['vezeteknev'] . ' ' . $szerzo['utonev']) ?></a>
                                                </li>
                                        <?php
                                            }
                                        }

                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-page">
                                <div class="left-blog">
                                    <h4>Archívum</h4>
                                    <ul>
                                        <?php
                                        if (isset($evhonaplink)) {
                                            foreach ($evhonaplink as $evhonap) {
                                        ?>
                                                <li>
                                                    <a href="index.php/home/yearmonth/<?php print($evhonap['year'] . '/' . $evhonap['month']); ?>"><?php print($evhonap['year'] . " - " . month($evhonap['month']) . " " . "(" . $evhonap['count'] . ")") ?></a>
                                                </li>
                                                <!--<li>
                                            <a href="#">29 June 2016</a>
                                        </li>
                                        <li>
                                            <a href="#">13 May 2016</a>
                                        </li>
                                        <li>
                                            <a href="#">20 March 2016</a>
                                        </li>
                                        <li>
                                            <a href="#">09 Fabruary 2016</a>
                                        </li> -->
                                        <?php
                                            }
                                        }
                                        ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="single-blog-page">
                                <div class="left-tags blog-tags">
                                    <div class="popular-tag left-side-tags left-blog">
                                        <h4>Közkedvelt témák</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Foci</a>
                                            </li>
                                            <li>
                                                <a href="#">Kézilabda</a>
                                            </li>
                                            <li>
                                                <a href="#">Sakk</a>
                                            </li>
                                            <li>
                                                <a href="#">Ketrecharc</a>
                                            </li>
                                            <li>
                                                <a href="#">Olimpia</a>
                                            </li>
                                            <li>
                                                <a href="#">Fitnesz</a>
                                            </li>
                                            <li>
                                                <a href="#">Darts</a>
                                            </li>
                                            <li>
                                                <a href="#">Tenisz</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-blog-page">
                                <div class="left-tags blog-tags">
                                    <div class="popular-tag left-side-tags left-blog">
                                        <h4>Támogasd a sportOnline-t!</h4>
                                        <a href="#" class="ready-btn text-center"><img src="assets/img/favicon.png" class="w-100" alt="" srcset=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php
                                if (isset($bejegyzesek)) {
                                    foreach ($bejegyzesek as $cikk) {
                                ?>
                                        <div class="single-blog">
                                            <div class="single-blog-img">
                                                <a href="blog-details.html">
                                                    <img src="<?php print($cikk['image']) ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="blog-meta">
                                                <span class="date-type">
                                                    <i class="bi bi-calendar"><a href="index.php/home/topic/<?php print($cikk['szerzo_id']) ?>"> <?php print($cikk['vezeteknev'] . ' ' . $cikk['utonev']) ?></a></i><?php print($cikk['ev'] . '-' . $cikk['honap'] . '-' . $cikk['nap']) ?>
                                                </span>
                                            </div>
                                            <div class="blog-text">
                                                <h4 class="display-6">
                                                    <a href="#"><?php print($cikk['cim']) ?></a>
                                                </h4>
                                                <p><?php print($cikk['rovidtartalom']) ?> </p>
                                            </div>
                                            <span>
                                                <a href="index.php/home/author/<?php print($cikk['id']) ?>" class="ready-btn">Elolvasom</a>
                                            </span>
                                        </div>
                                    <?php

                                    }
                                } else if (isset($cikkOlvasas)) {
                                    ?>
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a>
                                                <img src="<?php print($cikkOlvasas['image']) ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="date-type">
                                                <i class="bi bi-calendar"><a href="index.php/home/topic/<?php print($cikkOlvasas['szerzo_id']) ?>"> <?php print($cikkOlvasas['vezeteknev'] . ' ' . $cikkOlvasas['utonev']) ?></a></i><?php print($cikkOlvasas['ev'] . '-' . $cikkOlvasas['honap'] . '-' . $cikkOlvasas['nap']) ?>
                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4 class="display-6">
                                                <a><?php print($cikkOlvasas['cim']) ?></a>
                                            </h4>
                                            <p><?php print($cikkOlvasas['tartalom']) ?> </p>
                                        </div>
                                    </div>


                                <?php
                                }
                                ?>
                            </div>

                            <!-- End single blog -->

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Blog Page -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <div class="footer-logo">
                                    <h2 style="font-size: 25px"><span>sportonline</span>Katalógus <span>&#169;</span></h2>
                                </div>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                                <div class="footer-icons">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="bi bi-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>information</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                </p>
                                <div class="footer-contacts">
                                    <p><span>Tel:</span> +123 456 789</p>
                                    <p><span>Email:</span> contact@example.com</p>
                                    <p><span>Working Hours:</span> 9am-5pm</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single footer -->
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="footer-head">
                                <h4>Instagram</h4>
                                <div class="flicker-img">
                                    <?php
                                    if (isset($instagram)) {
                                        foreach ($instagram as $kep) {

                                    ?>
                                            <a href="#"><img src="<?php print($kep['link']) ?>" alt="<?php print($kep['alt']) ?>"></a>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong><span>sportonline</span>Katalógus</strong>. All Rights Reserved
                            </p>
                        </div>
                        <div class="credits">
                            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <div id="preloader"></div>
    <a href="http://localhost/myBlogMate/index.php" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>