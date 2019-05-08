<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=ABOUT?></title>
    <link rel="icon" type="image/png" href="images/icon/favicon.ico">
    <!-- CSS -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
    <link rel="stylesheet" href="vendor/progressbar/bootstrap-progressbar.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="vendor/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-face.css">
    <!-- Customize -->
    <link rel="stylesheet" href="css/theme.css">
</head>

<body>

    <!-- Preloader -->
    <div class="loading">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!-- End Pre Loader -->

    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- End Heder -->

    <!-- Page Title -->
    <section>
        <div class="pageintro">
            <div class="pageintro-bg">
                <img src="images/banner_test.jpg" alt="About Us">
            </div>
            <div class="pageintro-body">
                <h1 class="pageintro-title">About Us</h1>
                <nav class="pageintro-breadcumb">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Why Choose Us -->
    <section id="why-choose">
        <div class="container py-70 py-tn-30">
            <div class="row p-t-46 p-b-32">
                <div class="col-lg-6">
                    <div class="port-title p-r-60 p-r-tn-0">
                        <h2 class="title">why choose us</h2>
                        <p class="title-detail">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give.</p>
                        <div class="title-border m-b-43"></div>
                    </div>
                    <div class="port-body">
                        <div class="icon-box icon-style-3">
                            <div class="icon-image wow fadeInLeft" data-wow-duration="1s">
                                <img src="images/icon/icon-box_04.png" alt="icon">
                            </div>
                            <div class="icon-body wow fadeInRight" data-wow-duration="1s">
                                <h4 class="icon__title">Purchasing utility</h4>
                                <p class="icon__text">There are many variations of passages of Lorem Ipsum available</p>
                            </div>
                        </div>
                        <div class="icon-box icon-style-3">
                            <div class="icon-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="images/icon/icon-box_05.png" alt="icon">
                            </div>
                            <div class="icon-body wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <h4 class="icon__title">FAST DELIVERY</h4>
                                <p class="icon__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                            </div>
                        </div>
                        <div class="icon-box icon-style-3">
                            <div class="icon-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <img src="images/icon/icon-box_06.png" alt="icon">
                            </div>
                            <div class="icon-body wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                                <h4 class="icon__title">2 YEARS WARRANTY</h4>
                                <p class="icon__text">It uses a dictionary of over 200 Latin words, combined with a handful of model sentence.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-l-lg-0 p-l-xl-0">
                    <div class="image-border p-t-8">
                        <img src="images/image_03.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us -->

    <!-- Skill -->
    <section>
        <div class="skill">
            <div class="skill-image">
                <img src="images/skill.jpg" alt="Lyrae">
            </div>
            <div class="skill-content">
                <h2 class="skill-content__title m-b-33">GREAT DESIGN
                    <br> AMAZING FEATURES</h2>
                <div class="au-progress m-b-35">
                    <span class="au-progress__title text-gray-3">Design</span>
                    <div class="au-progress__bar">
                        <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="80">
                            <span class="au-progress__value js-value text-gray-3"></span>
                        </div>
                    </div>
                </div>
                <div class="au-progress m-b-35">
                    <span class="au-progress__title text-gray-3">Marketing</span>
                    <div class="au-progress__bar">
                        <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="95">
                            <span class="au-progress__value js-value text-gray-3"></span>
                        </div>
                    </div>
                </div>
                <div class="au-progress m-b-35">
                    <span class="au-progress__title text-gray-3">Photography</span>
                    <div class="au-progress__bar">
                        <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="70">
                            <span class="au-progress__value js-value text-gray-3"></span>
                        </div>
                    </div>
                </div>
                <div class="au-progress">
                    <span class="au-progress__title text-gray-3">Development</span>
                    <div class="au-progress__bar">
                        <div class="au-progress__inner js-progressbar-simple" role="progressbar" data-transitiongoal="72">
                            <span class="au-progress__value js-value text-gray-3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Skill -->

    <!-- Our Team -->
    <section class="py-50 py-tn-30">
        <div class="port-title m-t-62 m-t-tn-20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="title">our design team</h2>
                        <p class="title-detail">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was
                            born and I will give you a complete account.</p>
                        <div class="title-border mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="port-body p-t-85 p-b-22 py-tn-20">
            <div class="container">
                <div class="our-team">
                    <div class="our-team__item">
                        <div class="our-team__image">
                            <div class="image">
                                <img src="images/our-team_01.png" alt="Our team">
                            </div>
                            <nav class="link_contact">
                                <ul>
                                    <li>
                                        <a href="#" class="media-button facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button  google-plus"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="our-team__name">
                            <p class="name text-black">Jerry Johnston</p>
                            <p class="job">Leader Design</p>
                        </div>
                    </div>
                    <div class="our-team__item ">
                        <div class="our-team__image">
                            <div class="image">
                                <img src="images/our-team_02.png" alt="Our team">
                            </div>
                            <nav class="link_contact">
                                <ul>
                                    <li>
                                        <a href="#" class="media-button facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button google-plus"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="our-team__name">
                            <p class="name text-black">Sara Gutierrez</p>
                            <p class="job">Design</p>
                        </div>
                    </div>
                    <div class="our-team__item">
                        <div class="our-team__image">
                            <div class="image">
                                <img src="images/our-team_03.png" alt="Our team">
                            </div>
                            <nav class="link_contact">
                                <ul>
                                    <li>
                                        <a href="#" class="media-button facebook"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button twitter"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="media-button google-plus"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="our-team__name">
                            <p class="name text-black">Timothy Morris</p>
                            <p class="job">Photographer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team -->

    <!-- Footer -->
    <?php include("footer.php"); ?>
    <!-- End Footer -->

    <!-- Page Sidebar -->
    <div class="sidebar">
        <div class="sidebar__body">
            <div class="sidebar__heading">
                <div class="logo">
                    <img src="images/icon/logo_02.png" alt="Lyrae">
                </div>
                <span class="sidebar__close">
                    <img src="images/icon/close_gray.png" alt="Close">
                </span>
            </div>
            <div class="sidebar__content">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                    at its layout.</p>
                <div class="sidebar__image my-51">
                    <div class="slick-item">
                        <img src="images/resume_01.jpg" alt="Image 1">
                    </div>
                    <div class="slick-item">
                        <img src="images/resume_02.jpg" alt="Image 2">
                    </div>
                    <div class="slick-item">
                        <img src="images/resume_03.jpg" alt="Image 3">
                    </div>
                </div>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                <div class="title-border mx-auto m-t-27 m-b-33"></div>
                <nav class="social-media style-2">
                    <ul>
                        <li>
                            <a href="#" class="facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="linkedin"></a>
                        </li>
                        <li>
                            <a href="#" class="google-plus"></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Page Sidebar -->

    <!-- back to top -->
    <div class="to-top">
        <span class="bounce">
            <img src="images/icon/to_top.png" alt="To top">
        </span>
    </div>
    <!-- End back to top -->
    <!-- __________JS__________ -->

    <!-- Plugin -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery-ui.min.js"></script>
    <script src="vendor/easing/jquery.easing.min.js"></script>
    <script src="vendor/isotope/isotope.js"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/lightcase/lightcase.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/progressbar/bootstrap-progressbar.min.js"></script>

    <!-- Customize -->
    <script src="js/config-pro.js"></script>
    <script src="js/config-slick.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/config-wow.js"></script>
    <script src="js/config-lightcase.js"></script>
</body>

</html>