<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="icon" type="image/png" href="images/icon/favicon.png">
    <!-- CSS -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">

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

    <!-- Coming soon -->
    <section>
        <div class="container-fuild">
            <div class="coming-soon">
                <div class="coming-time">
                    <div class="coming-time-body">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/icon/logo_02.png" alt="Lyrae">
                            </a>
                        </div>
                        <h2 class="coming-time-title">coming soon</h2>
                        <div class="coming-down cd100">
                            <div>
                                <span data-weeks="36">8</span>weeks
                            </div>
                            <div>
                                <span data-days="17">21</span>days
                            </div>
                            <div>
                                <span data-hours="17">20</span>hours
                            </div>
                            <div>
                                <span data-minutes="50">46</span>mins
                            </div>
                            <div>
                                <span data-seconds="50">46</span>secs
                            </div>
                        </div>
                        <a href="#" class="coming-button">
                            contact us
                        </a>
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
                <div class="coming-image">
                    <img src="images/coming-soon.jpg" alt="Lyrae">
                </div>

            </div>
        </div>
    </section>
    <!-- End Coming Soon -->

      <!-- Footer -->
    <?php include("footer.php"); ?>
    <!-- End Footer -->

    <!-- __________JS__________ -->

    <!-- Plugin -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery-ui.min.js"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/countdowntime/moment.min.js"></script>
    <script src="vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>

    <script src="js/config-slick.js"></script>
    <script src="js/config-countdown.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>