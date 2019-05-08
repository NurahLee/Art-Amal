<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop List No Sidebar</title>
    <link rel="icon" type="image/png" href="images/icon/favicon.ico">
    <!-- CSS -->

    <!-- Plugin -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/dist/css/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
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

    <section>
        <div class="container p-t-100 p-b-70">
            <div class="shop-list">
                <div class="shop-list-heading">
                    <div class="number-product">
                        Showing
                        <span>8</span>-
                        <span>20</span> of
                        <span>64</span> results
                    </div>
                    <div class="shop-view-layout">
                        <span>Show</span>
                        <span id="layout_grid">
                            <img src="images/icon/layout_grid.png" alt="Grid">
                        </span>
                        <span id="layout_list">
                            <img src="images/icon/layout_list.png" alt="List">
                        </span>
                    </div>
                </div>
                <div class="shop-list-body shop-grid">
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_31.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Nido Chair - White</a>
                            <p class="price">$35.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color gray"></span>
                            </p>
                            <p class="description">It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                containing Lorem Ipsum passages, and more recently with desktop publishing software like
                                Aldus PageMaker including.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_05.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Diamond Lamp</a>
                            <p class="price">$23.00</p>
                            <p class="product-color">
                                <span class="color red"></span>
                                <span class="color black"></span>
                            </p>
                            <p class="description">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                                magni dolores eos qui ratione.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="3"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_13.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">High Table</a>
                            <p class="price">$15.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color green"></span>
                            </p>
                            <p class="description">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                                a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                                word in classical literature, discovered the undoubtable source.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="4"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_08.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Aslesha Basket</a>
                            <p class="price">$27.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color gray"></span>
                            </p>
                            <p class="description">It is a long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal distribution of letters, as opposed to using 'Content here, content here', making
                                it look like readable English.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="4"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_09.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body ">
                            <a href="#" class="name">Driva Table Lamp</a>
                            <p class="price">$56.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color yellow"></span>
                            </p>
                            <p class="description">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                                text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                                Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="4"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_10.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Hanging Sphere</a>
                            <p class="price">$18.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color green"></span>
                            </p>
                            <p class="description">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                maxime placeat facere possimus.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="3"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_14.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Pendant Shade</a>
                            <p class="price">$20.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color gray"></span>
                            </p>
                            <p class="description">There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or randomised words which don't look even slightly
                                believable. If you are going to use a passage of Lorem Ipsum.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="3"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_11.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Portable Speaker</a>
                            <p class="price">$42.00</p>
                            <p class="product-color">
                                <span class="color beige"></span>
                                <span class="color blue"></span>
                            </p>
                            <p class="description">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat
                                predefined chunks as necessary, making this the first true generator on the Internet. It
                                uses a dictionary of over 200 Latin words.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="5"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_32.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Teako Teapot</a>
                            <p class="price">$28.00</p>
                            <p class="product-color">
                                <span class="color black"></span>
                                <span class="color beige"></span>
                            </p>
                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="4"></div>
                        </div>
                    </div>
                    <div class="shop-product">
                        <div class="product-image">
                            <a href="#">
                                <img src="images/product_33.png" alt="Product 1">
                            </a>
                        </div>
                        <div class="product-body">
                            <a href="#" class="name">Leaf Laundry Bag</a>
                            <p class="price">$18.00</p>
                            <p class="product-color">
                                <span class="color black"></span>
                                <span class="color yellow"></span>
                            </p>
                            <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                aut fugit, sed quia consequuntur.</p>
                            <div class="product-button">
                                <a href="#" class="add-to-cart">Add to cart</a>
                                <a href="#" class="add-to-wishlist"></a>
                            </div>
                            <div class="product-rating" data-star="3"></div>
                        </div>
                    </div>
                </div>
                <nav class="border-bottom-1 border-top-1">
                    <ul class="au-panigation">
                        <li class="panigation-item">
                            <a href="#" class="panigation-link">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="panigation-item">
                            <span>Pages:</span>
                        </li>
                        <li class="panigation-item active">
                            <a href="#" class="panigation-link">01</a>
                        </li>
                        <li class="panigation-item">
                            <a href="#" class="panigation-link">02</a>
                        </li>
                        <li class="panigation-item">
                            <span>...</span>
                        </li>
                        <li class="panigation-item">
                            <a href="#" class="panigation-link">06</a>
                        </li>
                        <li class="panigation-item">
                            <a href="#" class="panigation-link">07</a>
                        </li>
                        <li class="panigation-item">
                            <a href="#" class="panigation-link">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
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
    <script src="vendor/easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery/jquery-ui.min.js"></script>
    <script src="vendor/slick/slick.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/lightcase/lightcase.js"></script>
    <!-- Customize -->
    <script src="js/config-slick.js"></script>
    <script src="js/theme.js"></script>
    <script src="js/config-wow.js"></script>
    <script src="js/config-lightcase.js"></script>
    <script src="js/config-noUi.js"></script>
</body>

</html>