<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="icon" type="image/png" href="images/icon/favicon.ico">
    <!-- CSS -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="vendor/fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-face.min.css">
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

    <!-- Map -->
    <section>
        <div id="map-canvas"></div>
    </section>
    <!-- End Map -->

    <!-- Contact Info -->
    <section>
        <div class="container">
            <div class="contact-info-wrapper d-none d-lg-block">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="images/icon/contact_location.png" alt="Location">
                        </div>
                        <div class="contact-text">
                            No 40 Baria Sreet 133/2,
                            <br> NewYork
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="images/icon/contact_phone.png" alt="phone">
                        </div>
                        <div class="contact-text">
                            (+300) 125-1365
                            <br>(683) 833 1660
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="images/icon/contact_email.png" alt="email">
                        </div>
                        <div class="contact-text">
                            isa-85@example.com
                            <br> jean-lee@example.com
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="images/icon/contact_web.png" alt="web">
                        </div>
                        <div class="contact-text">
                            www.Lyrae.com
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Info -->

    <section>
        <div class="container py-85 py-tn-50">
            <div class="port-title">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="title">contact us</h2>
                            <p class="title-detail">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                                was born and I will give you a complete account.</p>
                            <div class="title-border mx-auto m-b-55 m-b-tn-35"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="port-body">
                <div class="contact-form">
                    <div class="messages" id="status"></div>
                    <form id="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group au-form">
                                    <div class="help-block with-errors"></div>
                                    <input type="text" id="name" name="name" placeholder="Your Full Name *" required data-error="Name is required.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group au-form">
                                    <div class="help-block with-errors"></div>
                                    <input type="email" id="email" name="email" placeholder="Your Mail *" required data-error="Please, enter a valid email.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group au-form">
                                    <div class="help-block with-errors"></div>
                                    <input type="text" id="address" name="address" placeholder="Your Address" required data-error="Address is required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group au-form">
                                    <div class="help-block with-errors"></div>
                                    <input type="text" id="phone" name="phone" placeholder="Your Phone *" required data-error="Phone is required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group au-form">
                                    <div class="help-block with-errors"></div>
                                    <textarea rows="9" placeholder="Your Message" id="msg" name="msg" required data-error="Please, leave us a message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group au-form">
                                    <button type="submit" id="contactBtn" class="mx-auto">Send us now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/validator/validator.min.js"></script>
    <script src="vendor/lightcase/lightcase.js"></script>
    <!-- Customize -->
    <script src="js/config-slick.js"></script>
    <script src="js/config-map.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/config-lightcase.js"></script>
    <script src="js/config-contact.js"></script>
</body>

</html>