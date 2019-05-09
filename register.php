<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Account</title>
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

<?php

    if(isset($_POST['register'])){

        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $pNumber  = $_POST['pNumber'];
        $uType    = $_POST['uType'];
        $date     = date("Y/m/d");

        if($uType == "Customer"){

            $query  = "INSERT INTO customer(cust_Name, cust_Email, cust_Password, cust_PhoneNum, cust_DateAdd)
                    VALUES ('$name', '$email', md5('$password'), '$pNumber', '$date')";
            $stmt   = $conn->query($query);        
        } else {
            $query  = "INSERT INTO artist(artist_Name, artist_Email, artist_Password, artist_PhoneNum, artist_DateAdd)
                    VALUES ('$name', '$email', md5('$password'), '$pNumber', '$date')";
            $stmt   = $conn->query($query);
        }
    }

?>

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
    <!-- <section>
        <div class="pageintro">
            <div class="pageintro-bg">
                <img src="images/bg-page_01.jpg" alt="About Us">
            </div>
            <div class="pageintro-body">
                <h1 class="pageintro-title">Log In</h1>
                <nav class="pageintro-breadcumb">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Log In</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section> -->
    <!-- End Page Title -->

    <!-- Login & Register -->
    <div>
    <br><br>
        <section>
            <div class="container py-70 py-tn-40">
                <div class="row">
                    <!-- Login -->
                    <div class="col-lg-6 ">
                        <div class="au-form-body p-r-lg-15 p-r-xl-15">
                            <h2 class="au-form-title form-title-border">Register</h2>
                            <fieldset class="m-t-40">
                                <form method="POST" action="register.php">
                                    <div class="form-group au-form require">
                                        <label>Full Name</label>
                                        <input type="text" name="name" required>
                                    </div>
                                    <div class="form-group au-form require">
                                        <label>Email address</label>
                                        <input type="email" name="email" required>
                                    </div>
                                    <div class="form-group au-form require">
                                        <label>Password</label>
                                        <input type="password" name="password" required>
                                    </div>
                                    <!-- <div class="form-group au-form require">
                                        <label>Confirm password</label>
                                        <input type="password" name="">
                                    </div> -->
                                    <div class="form-group au-form require" required>
                                        <label>Phone Number</label>
                                        <input type="tel" name="pNumber" pattern="[0-9]{3}-[0-9]{3} [0-9]{4,5}" placeholder="000-000 0000">
                                    </div>
                                    <div class="form-group au-form require">
                                        <label>Register As</label>
                                        <select name="uType" required>
                                            <option>Customer</option>
                                            <option>Artist</option>
                                        </select>
                                    </div>
                                    <div class="form-group au-form">
                                        <button type="submit" name="register">Register</button>
                                    </div>
                                </form>
                            </fieldset>
                        </div>
                    </div>
                    <!-- End Login -->
                </div>
            </div>
        </section>
    </div>
    <!-- End Login & Register -->

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

    <!-- Plugin -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery-ui.min.js"></script>
    <script src="vendor/easing/jquery.easing.min.js"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/lightcase/lightcase.js"></script>
    <!-- Customize -->
    <script src="js/config-slick.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/config-wow.js"></script>
    <script src="js/config-lightcase.js"></script>
</body>

</html>