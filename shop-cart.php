<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Cart</title>
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

    <!-- Page Title -->
    <section>
        <div class="pageintro">
            <div class="pageintro-bg">
                <img src="images/bg-page_02.jpg" alt="About Us">
            </div>
            <div class="pageintro-body">
                <h1 class="pageintro-title">Shop cart</h1>
                <nav class="pageintro-breadcumb">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Shop Cart</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Table -->
    <section>
        <div class="container p-t-100 p-b-30 py-tn-30">
            <div class="row m-t-20">
                <div class="col-md-12">
                    <table class="table-shop">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="table-shop-product">
                                        <div class="image">
                                            <img src="images/wishlist_product_01.png" alt="Product 1">
                                        </div>
                                        <div class="name">Crackle Plates</div>
                                    </div>
                                </td>
                                <td>
                                    $22.00
                                </td>
                                <td>
                                    <div class="quantity">
                                        <span class="sub">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <input type="number" value="2">
                                        <span class="add">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    $44.00
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="images/icon/close.png" alt="Close">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-shop-product">
                                        <div class="image">
                                            <img src="images/wishlist_product_02.png" alt="Product 1">
                                        </div>
                                        <div class="name">Crackle Plates</div>
                                    </div>
                                </td>
                                <td>
                                    $36.00
                                </td>
                                <td>
                                    <div class="quantity">
                                        <span class="sub">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <input type="number" value="5">
                                        <span class="add">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    $180.00
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="images/icon/close.png" alt="Close">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-shop-product">
                                        <div class="image">
                                            <img src="images/wishlist_product_03.png" alt="Product 1">
                                        </div>
                                        <div class="name">Crackle Plates</div>
                                    </div>
                                </td>
                                <td>
                                    $17.00
                                </td>
                                <td>
                                    <div class="quantity">
                                        <span class="sub">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <input type="number" value="8">
                                        <span class="add">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    $144.00
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="images/icon/close.png" alt="Close">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="table-shop-product">
                                        <div class="image">
                                            <img src="images/wishlist_product_04.png" alt="Product 1">
                                        </div>
                                        <div class="name">Crackle Plates</div>
                                    </div>
                                </td>
                                <td>
                                    $21.00
                                </td>
                                <td>
                                    <div class="quantity">
                                        <span class="sub">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <input type="number" value="7">
                                        <span class="add">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    $147.00
                                </td>
                                <td>
                                    <a href="#">
                                        <img src="images/icon/close.png" alt="Close">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <div class="table-button">
                                        <a href="#">clear Shopping Cart</a>
                                        <a href="#">update shopping cart </a>
                                        <a href="#">continue shopping</a>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </section>
    <!-- End Table -->

    <section>
        <div class="container p-b-100">
            <div class="row">
                <div class="col-md-6 p-r-lg--30 p-r-xl-30 m-t-30">
                    <div class="shop-total">
                        <div class="shop-total-heading">
                            <h3 class="title">Cupond Code</h3>
                            <div class="title-border-3 m-b-30"></div>
                        </div>
                        <div class="shop-total-body">
                            <p>Enter your coupon code if you have one.</p>
                            <form>
                                <div class="form-group au-form m-b-40">
                                    <input type="text" placeholder="Coupon code">
                                </div>
                                <div class="form-group au-form m-b-0">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-l-lg-30 p-l-xl-30 m-t-30">
                    <div class="shop-total">
                        <div class="shop-total-heading">
                            <h3 class="title">cart total</h3>
                            <div class="title-border-3 m-b-30"></div>
                        </div>
                        <div class="shop-total-body">
                            <p class="sub-total">Subtotal
                                <span>$515.00</span>
                            </p>
                            <p class="total">Grandtotal
                                <span>$515.00</span>
                            </p>
                            <form>
                                <div class="form-group au-form m-b-0">
                                    <button type="submit">Apply coupon</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Wishlist -->

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