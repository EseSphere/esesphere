<?php include_once 'dbconnection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EseSphere Limited | Design. Develop. Delight.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="EseSphere Ltd, Web Design, Mobile App Development, UI/UX Design, Digital Marketing, E-commerce Development, Print & Graphics, SEO, App Maintenance, Responsive Design, Software Development, Technology Services">
    <meta name="description" content="EseSphere Ltd delivers world-class web and mobile solutions. We design, develop, and delight with websites, apps, digital marketing, and innovative technology services tailored to your business.">
    <meta name="author" content="EseSphere Ltd">
    <meta property="og:title" content="EseSphere Ltd | Design. Develop. Delight.">
    <meta property="og:description" content="World-class web and mobile solutions, digital marketing, and design services to elevate your business.">
    <meta property="og:image" content="./img/favicon.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.esesphere.com">
    <meta name="twitter:card" content="./img/favicon.png">
    <meta name="twitter:title" content="EseSphere Ltd | Design. Develop. Delight.">
    <meta name="twitter:description" content="World-class web and mobile solutions, digital marketing, and design services to elevate your business.">
    <meta name="twitter:image" content="./img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0d6efd">
    <link href="./img/favicon.png" rel="icon">
    <link href="./img/favicon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
    <header id="header" class="header fixed-top">
        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@esesphere.com">info@esesphere.com</a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span><a href="tel:+44 7984 863164">+44 7984 863164</a></span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="https://x.com/eseSphereEnt" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/ese.sphere" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ese.sphere/" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <div class="branding d-flex align-items-cente">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="./" class="text-decoration-none">
                    <img src="./img/logo-bg.png" style="width: 200px; height:60px;" alt="">
                </a>
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="./" class="active">Home<br></a></li>
                        <li><a href="./about?ulen_ru74=<?= $encrypted ?>">About</a></li>
                        <li><a href="./services?ulen_ru74=<?= $encrypted ?>">Services</a></li>
                        <li><a href="./courses?ulen_ru74=<?= $encrypted ?>">Courses</a></li>
                        <li><a href="./portfolio?ulen_ru74=<?= $encrypted ?>">Portfolio</a></li>
                        <li><a href="./blog?ulen_ru74=<?= $encrypted ?>">Blog</a></li>
                        <li><a href="./get-a-quote?ulen_ru74=<?= $encrypted ?>">Get a Quote</a></li>
                        <!--<li class="dropdown"><a href="#"><span>Our Websites</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://staffscroll.co.uk/">Staff Scroll</a></li>
                            </ul>
                        </li>-->
                        <li><a href="./contact?ulen_ru74=<?= $encrypted ?>">Contact</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">