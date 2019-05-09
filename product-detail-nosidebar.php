<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Detail</title>
    <link rel="icon" type="image/png" href="images/icon/favicon.ico">
    <!-- CSS -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
    <link rel="stylesheet" href="vendor/slide100/slide100.css">

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
                <img src="images/bg-page_03.jpg" alt="About Us">
            </div>
            <div class="pageintro-body">
                <h1 class="pageintro-title">Shop</h1>
                <nav class="pageintro-breadcumb">
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Page Title -->

    <!-- Product Detail -->
    <?php 
        // $query = "SELECT * FROM art";
        // $result = $conn->query($query);
    ?>
    <section>
        <div class="container p-b-90 p-t-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-detail">
                        <div class="shop-product p-t-25">
                            <div class="slide100-01" id="slide100-01">
                                <div class="main-wrap-pic">
                                    <div class="main-frame">
                                        <div class="wrap-main-pic">
                                            <div class="main-pic">
                                                <img src="images/pro-detail-01.jpg" alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-thumb-100 d-flex justify-content-between p-t-10">
                                    <div class="wrap-arrow-slide-100 s-full ab-t-l trans-04">
                                        <span class="my-arrow back prev-slide-100">
                                            <img src="images/icon/pro-left-black.png" alt="Prev">
                                        </span>
                                        <span class="my-arrow next next-slide-100">
                                            <img src="images/icon/pro-right-black.png" alt="Next">
                                        </span>
                                    </div>
                                    <div class="thum-100">
                                        <div class="sub-frame sub-1">
                                            <div class="wrap-main-pic">
                                                <div class="main-pic">
                                                    <img src="images/pro-detail-thumb-01.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="btn-sub-frame"></div>
                                        </div>
                                    </div>
                                    <div class="thum-100">
                                        <div class="sub-frame sub-2">
                                            <div class="wrap-main-pic">
                                                <div class="main-pic">
                                                    <img src="images/pro-detail-thumb-02.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="btn-sub-frame"></div>
                                        </div>
                                    </div>
                                    <div class="thum-100">
                                        <div class="sub-frame sub-3">
                                            <div class="wrap-main-pic">
                                                <div class="main-pic">
                                                    <img src="images/pro-detail-thumb-03.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="btn-sub-frame"></div>
                                        </div>
                                    </div>
                                    <div class="thum-100">
                                        <div class="sub-frame sub-4">
                                            <div class="wrap-main-pic">
                                                <div class="main-pic">
                                                    <img src="images/pro-detail-thumb-04.jpg" alt="image">
                                                </div>
                                            </div>
                                            <div class="btn-sub-frame"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-body">
                                <h3 class="name">wwwwww</h3>
                                <p class="price">$35.00</p>
                                <p class="product-color">
                                    <span class="color beige"></span>
                                    <span class="color black"></span>
                                </p>
                                <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                    containing including.</p>
                                <div class="product-button">
                                    <div class="quantity">
                                        <span class="sub">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                        <input type="number" value="2">
                                        <span class="add">
                                            <i class="fa fa-angle-up"></i>
                                        </span>
                                    </div>
                                    <a href="#" class="add-to-cart">Add to cart</a>
                                    <a href="#" class="add-to-wishlist"></a>
                                </div>
                                <div class="product-available">
                                    <span>Available :</span>
                                    <a href="#">In stock</a>
                                </div>
                                <div class="product-sku">
                                    <span class="text-black">SKU: </span>
                                    2305
                                </div>
                                <div class="product-categories">
                                    <span class="text-black">Categories:</span>
                                    <a href="#">Furniture</a>
                                    <a href="#">Decor</a>
                                </div>
                                <div class="product-share">
                                    <span class="text-black">Share: </span>
                                    <ul class="social-media style-3">
                                        <li>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="twiiter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="google-plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-rating" data-star="5"></div>
                            </div>
                        </div>
                        <div class="au-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#description-tab" class="active show">Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#additional-tab">additional information </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#review-tab">review (0)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="description-tab" class="tab-pane active">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                                        voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia.</p>
                                </div>
                                <div id="additional-tab" class="tab-pane">
                                    <table class="product-additionnal">
                                        <tr>
                                            <th>Weight</th>
                                            <td>3,1 kg</td>
                                        </tr>
                                        <tr>
                                            <th>Dimensions</th>
                                            <td>60 x 60 x 60 cm</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="review-tab" class="tab-pane">
                                    <h5 class="title">REVIEWS</h5>
                                    <p>There are no reviews yet.</p>
                                    <p class="text-bigger">Be the first to review “Cloud Wall Clock”</p>
                                    <div class="comment-rating">
                                        <strong>Your Rating </strong>
                                        <div class="au-rating">
                                            <form>
                                                <input id="star-1" type="radio" name="star" />
                                                <label for="star-1"></label>
                                                <input id="star-2" type="radio" name="star" />
                                                <label for="star-2"></label>
                                                <input id="star-3" type="radio" name="star" />
                                                <label for="star-3"></label>
                                                <input id="star-4" type="radio" name="star" />
                                                <label for="star-4"></label>
                                                <input id="star-5" type="radio" name="star" />
                                                <label for="star-5"></label>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="comment-place">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <textarea cols="30" rows="7">Your Message</textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Your Name">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" placeholder="Your Email">
                                                </div>
                                                <div class="col-md-12 m-t-40">
                                                    <button>Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="port-title justify-content-center text-center">
                            <h2 class="title">related products</h2>
                            <div class="title-border mx-auto m-b-70"></div>
                        </div>
                        <div class="related-products">
                            <div class="owl-carousel row" data-responsive='{"0":{"items":"1"},"576":{"items":"1"},"768":{"items":"2"}, "992":{"items":"3"} }'>
                                <div class="col-md-12">
                                    <div class="grid-product">
                                        <div class="image bg-lightblue">
                                            <a href="#">
                                                <img src="images/product_07.png" alt="Chair">
                                            </a>
                                            <div class="addcart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                        <a href="#" class="name">Pendant Shade</a>
                                        <div class="price">$20.00</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-product">
                                        <div class="image bg-lightblue">
                                            <a href="#">
                                                <img src="images/product_11.png" alt="Chair">
                                            </a>
                                            <div class="addcart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                        <a href="#" class="name">Portable Speaker</a>
                                        <div class="price">$42.00</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="grid-product">
                                        <div class="image bg-lightblue">
                                            <a href="#">
                                                <img src="images/product_34.png" alt="Chair">
                                            </a>
                                            <div class="addcart">
                                                <a href="#">Add to cart</a>
                                            </div>
                                        </div>
                                        <a href="#" class="name">Teako Teapot</a>
                                        <div class="price">$28.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Detail -->

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
    <script src="vendor/easing/jquery.easing.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/slide100/slide100.js"></script>
    <script src="vendor/lightcase/lightcase.js"></script>
    <script src="vendor/owlcarousel/dist/owl.carousel.min.js"></script>
    <!-- Customize -->
    <script src="js/config-slick.js"></script>
    <script src="js/config-owl-carousel.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/config-lightcase.js"></script>
    <script src="js/config-slide100.js"></script>
</body>

</html>