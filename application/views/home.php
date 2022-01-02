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
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- HEADER -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between">

            <div class="logo">
                <a href="http://localhost/myBlogMate/index.php"></a>
                <h1><a href="http://localhost/myBlogMate/index.php"><span>sport</span>Online</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <?php
                if (isset($temakorok)) {
                    foreach ($temakorok as $tema) {
                ?>
                        <ul>
                            <li><a class="nav-link scrollto " href="index.php/home/topic/<?php print($tema['id']) ?>"><?php print($tema['megnevezes'])  ?></a></li>
                            <ul>
                        <?php
                    }
                }
                        ?>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- NAVBAR -->

        </div>
    </header><!-- HEADER -->

    <main id="main">
        <!-- ======= BLOG HEADER ======= -->
        <div class="header-bg page-area">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="slider-content text-center">
                            <div class="header-bottom">
                                <div class="layer3">
                                    <h2 class="title3"><img src="assets/img/favicon.png" alt="" class="img-fluid-mainPicture">Az <b><span style="font-size: 40px; text-transform:uppercase">ön</span></b> sportkatalógusa!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END BLOG HEADER -->

        <!-- ======= BLOG PAGE ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="page-head-blog">
                            <div class="single-blog-page">
                                <!-- search option start -->
                                <form action="index.php" method="POST">
                                    <div class="search-option">
                                        <input type="text" name="search" placeholder="Keresés">
                                        <button class="button" type="submit">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <?php

                            require_once './application/models/formModel.php';
                            if (isset($_POST['search'])) {

                                $inputName = filter_var($_POST["search"], FILTER_SANITIZE_SPECIAL_CHARS);

                                $con = mysqli_connect($host, $username, $password, $dbname);
                                if (!$con) {
                                    echo "Hiba a csatlakozás során: " . mysqli_connect_error();
                                    exit();
                                }

                                $sql = "SELECT id,cim,rovidtartalom,tartalom, image, megjelenesdatuma,szerzo_id,temakor_id 
                                    FROM bejegyzes
                                    WHERE cim LIKE '%$inputName%' OR rovidtartalom LIKE '%$inputName%' OR tartalom LIKE '%$inputName%'";

                                $result = mysqli_query($con, $sql);
                                $row = mysqli_fetch_assoc($result);
                            ?>
                                <!-- search option end -->
                                <div class="single-blog-page">
                                    <!-- recent start -->
                                    <div class="left-blog">
                                        <h4>Aktuális tartalom</h4>
                                        <?php
                                        if ($row == 0) {
                                        ?>
                                            <div class="recent-post">
                                                <!-- start single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                    </div>
                                                    <div class="pst-content">
                                                        <p><?php print('Nincs találat!') ?></p>
                                                    </div>
                                                </div>
                                            <?php
                                        } else {
                                            ?>
                                                <div class="recent-post">
                                                    <!-- start single post -->
                                                    <div class="recent-single-post">
                                                        <div class="post-img">
                                                            <a href="index.php/home/article/<?php print($row['id']) ?>">
                                                                <img src="<?php print($row['image']) ?>" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="pst-content">
                                                            <p><a href="index.php/home/article/<?php print($row['id']) ?>"><?php print($row['cim']) ?></a></p>
                                                        </div>
                                                    </div>
                                                    <!-- End single post -->
                                                <?php
                                                mysqli_free_result($result);

                                                mysqli_close($con);
                                            }
                                        } else {
                                            if (isset($oldalsav)) {
                                                ?>
                                                    <div class="single-blog-page">
                                                        <!-- recent start -->
                                                        <div class="left-blog">
                                                            <h4>Aktuális tartalom</h4>
                                                            <div class="recent-post">
                                                                <?php
                                                                $countOldalsav = count($oldalsav) - 3;
                                                                foreach ($oldalsav as $oldalCikk) {
                                                                    if ($oldalCikk['id'] < $oldalsav[1]['id'] - 3) {
                                                                ?>
                                                                        <!-- start single post -->
                                                                        <div class="recent-single-post">
                                                                            <div class="post-img">
                                                                                <a href="index.php/home/article/<?php print($oldalCikk['id']) ?>">
                                                                                    <img src="<?php print($oldalCikk['image']) ?>" alt="">
                                                                                </a>
                                                                            </div>
                                                                            <div class="pst-content">
                                                                                <p><a href="index.php/home/article/<?php print($oldalCikk['id']) ?>"><?php print($oldalCikk['cim']) ?></a></p>
                                                                            </div>
                                                                        </div>
                                                                        <!-- End single post -->
                                                        <?php
                                                                    }
                                                                }
                                                            }
                                                        }
                                                        ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END -->

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
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END -->

                                                    <div class="single-blog-page">
                                                        <div class="left-blog">
                                                            <h4>Szerkesztőségünk</h4>
                                                            <ul>
                                                                <?php
                                                                if (isset($szerzok)) {
                                                                    foreach ($szerzok as $szerzo) {
                                                                ?>
                                                                        <li>
                                                                            <a href="index.php/home/author/<?php print($szerzo['azonosito']) ?>"><?php print($szerzo['vezeteknev'] . ' ' . $szerzo['utonev']) ?></a>
                                                                        </li>
                                                                <?php
                                                                    }
                                                                }
                                                                ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!-- END -->

                                                    <div class="single-blog-page">
                                                        <div class="left-tags blog-tags">
                                                            <div class="popular-tag left-side-tags left-blog">
                                                                <h4>Támogasd a sportOnline-t!</h4>
                                                                <a href="https://www.nemzetisport.hu/egyeb_egyeni/tamogatas-ujabb-300-millio-forint-a-sportegyesuleteknek-2858327" class="ready-btn text-center"><img src="assets/img/favicon.png" class="w-100" alt="" srcset=""></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END LEFT SIDEBAR -->

                                            <!-- Start single blog -->
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <?php
                                                        if (isset($bejegyzesek)) {
                                                            foreach ($bejegyzesek as $bejegyzes) {
                                                        ?>
                                                                <div class="single-blog">
                                                                    <div class="single-blog-img">
                                                                        <a href="index.php/home/article/<?php print($bejegyzes['id']) ?>">
                                                                            <img src="<?php print($bejegyzes['image']) ?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="blog-meta">
                                                                        <span class="date-type">
                                                                            <i class="bi bi-calendar"><a href="index.php/home/author/<?php print($bejegyzes['szerzo_id']) ?>"> <?php print($bejegyzes['vezeteknev'] . ' ' . $bejegyzes['utonev']) ?></a></i><?php print($bejegyzes['ev'] . '-' . $bejegyzes['honap'] . '-' . $bejegyzes['nap']) ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="blog-text">
                                                                        <h4 class="display-6">
                                                                            <a href="index.php/home/article/<?php print($bejegyzes['id']) ?>"><?php print($bejegyzes['cim']) ?></a>
                                                                        </h4>
                                                                        <p><?php print($bejegyzes['rovidtartalom']) ?> </p>
                                                                    </div>
                                                                    <span>
                                                                        <a href="index.php/home/article/<?php print($bejegyzes['id']) ?>" class="ready-btn">Elolvasom</a>
                                                                    </span>
                                                                </div>
                                                            <?php
                                                            }
                                                        } else if (isset($olvas)) {
                                                            ?>
                                                            <div class="single-blog">
                                                                <div class="single-blog-img">
                                                                    <a>
                                                                        <img src="<?php print($olvas['image']) ?>" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="blog-meta">
                                                                    <span class="date-type">
                                                                        <i class="bi bi-calendar"><a href="index.php/home/author/<?php print($olvas['szerzo_id']) ?>"> <?php print($olvas['vezeteknev'] . ' ' . $olvas['utonev']) ?></a></i><?php print($olvas['ev'] . '-' . $olvas['honap'] . '-' . $olvas['nap']) ?>
                                                                    </span>
                                                                </div>
                                                                <div class="blog-text">
                                                                    <h4 class="display-6">
                                                                        <a><?php print($olvas['cim']) ?></a>
                                                                    </h4>
                                                                    <p><?php print($olvas['tartalom']) ?> </p>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        } else if (isset($temakorokOlvas)) {
                                                            foreach ($temakorokOlvas as $OlvasById) {
                                                            ?>
                                                                <div class="single-blog">
                                                                    <div class="single-blog-img">
                                                                        <a>
                                                                            <img src="<?php print($OlvasById['image']) ?>" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="blog-meta">
                                                                        <span class="date-type">
                                                                            <i class="bi bi-calendar"><a href="index.php/home/author/<?php print($OlvasById['szerzoid']) ?>"> <?php print($OlvasById['vezeteknev'] . ' ' . $OlvasById['utonev']) ?></a></i><?php print($OlvasById['ev'] . '-' . $OlvasById['honap'] . '-' . $OlvasById['nap']) ?>
                                                                        </span>
                                                                    </div>
                                                                    <div class="blog-text">
                                                                        <h4 class="display-6">
                                                                            <a><?php print($OlvasById['cim']) ?></a>
                                                                        </h4>
                                                                        <p><?php print($OlvasById['tartalom']) ?> </p>
                                                                    </div>
                                                                </div>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                    <!-- END -->
                                                </div>
                                            </div>
                                    </div>
                                </div>
                        </div>

                        <!-- End Blog Page -->
    </main><!-- END MAIN -->

    <!-- ======= FOOTER ======= -->
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
                                            <a href="https://www.facebook.com/nsonline/"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/nsonline"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/nso.hu/?hl=hu"><i class="bi bi-instagram"></i></a>
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
                                    <p><span>Email:</span> sportonline@katalogus.hu</p>
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
                                            <a href="https://www.instagram.com/nso.hu/?hl=hu"><img src="<?php print($kep['link']) ?>" alt="<?php print($kep['alt']) ?>"></a>
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