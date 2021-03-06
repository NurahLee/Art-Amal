<header>
        <div class="header-wrapper">
            <!-- Desktop Menu -->
            <div class="header-wrapper-desktop d-none d-lg-block">
                <div class="header header-style-4">
                    <div class="container">
                        <div class="header-main">
                            <div class="header__logo">
                                <img src="images/icon/logo_02.png" alt="Art Amal">
                            </div>
                            <nav class="header__navbar">
                                <ul class="navbar-menu">
                                    <li <?php if(basename($_SERVER['PHP_SELF'])=="index.php") echo 'class="active"'; ?>>
                                        <a href="index.php">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li>
                                                <a href="index.php">HomePage</a>
                                            </li>
                                            <li>
                                                <a href="index_ori.html">HomePage_v1</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">HomePage_v2</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">HomePage_v3</a>
                                            </li>
                                            <li>
                                                <a href="index4.html">HomePage_v4</a>
                                            </li>
                                            <li>
                                                <a href="index5.html">HomePage_v5</a>
                                            </li>
                                            <li>
                                                <a href="index6.html">HomePage_v6</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li <?php if(basename($_SERVER['PHP_SELF'])=="shop-list-nosidebar.php") echo 'class="active"'; ?>>
                                        <a href="shop-list-nosidebar.php">Gallery</a>
                                        <ul class="sub-menu">
                                            <!-- <li>
                                                <a href="shop-list.php">Shop 1</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-nosidebar.php">Shop 2</a>
                                            </li> -->
                                            <li>
                                                <a href="product-detail.php">Product Detail 1</a>
                                            </li>
                                            <li>
                                                <a href="product-detail-nosidebar.php">Product Detail 2</a>
                                            </li>
                                            <li>
                                                <a href="shop-cart.php">Shop Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.php">Wish List</a>
                                            </li>
                                            <li>
                                                <a href="checkout.php">Check Out</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li <?php if(basename($_SERVER['PHP_SELF'])=="about.php") echo 'class="active"'; ?>>
                                        <a href="about.php">About</a>
                                    </li>
                                    <li <?php if(basename($_SERVER['PHP_SELF'])=="contact.php") echo 'class="active"'; ?>>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    <li>
                                        <a href="login.php">Log in</a>
                                        <!-- <ul class="sub-menu">
                                            <li>
                                                <a href="my-account.php">Register</a>
                                            </li>
                                            <li>
                                                <a href="forget-password.php">Forget Password</a>
                                            </li>
                                            <li>
                                                <a href="coming-soon.php">Cooming Soon</a>
                                            </li>
                                            <li>
                                                <a href="404.php">404 Error</a>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li <?php if(basename($_SERVER['PHP_SELF'])=="register.php" || basename($_SERVER['PHP_SELF'])=="registerArtist.php") echo 'class="active"'; ?>>
                                        <a href="#">Register</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="register.php">Customer</a>
                                            </li>
                                            <li>
                                                <a href="registerArtist.php">Artist</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- <li>
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog-grid-1.php">Blog Grid 1</a>
                                            </li>
                                            <li>
                                                <a href="blog-grid-2.php">Blog Grid 2</a>
                                            </li>
                                            <li>
                                                <a href="blog-list.php">Blog List</a>
                                            </li>
                                            <li>
                                                <a href="blog-detail.php">Blog Single</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </nav>
                            <div class="header__button m-l-35">
                                <ul>
                                    <li class="header-search">
                                        <div class="search-button">
                                            <img src="images/icon/header-search.png" alt="Search">
                                        </div>
                                        <div class="search-input">
                                            <input type="text" placeholder="Start typing here...">
                                            <a href="#"></a>
                                        </div>
                                    </li>
                                    <li class="header-shop-cart">
                                        <div class="shop-cart-button">
                                            <img src="images/icon/header-cart.png" alt="Cart">
                                            <span class="amount">3</span>
                                        </div>
                                        <div class="shop-cart">
                                            <ul class="shop-cart__list">
                                                <li class="item">
                                                    <div class="item-image">
                                                        <img src="images/product_01.png" alt="Item 1">
                                                    </div>
                                                    <div class="item-detail">
                                                        <p class="name">Crackle Plates</p>
                                                        <p class="price">$22.00</p>
                                                        <p class="amount">x2</p>
                                                    </div>
                                                    <span class="remove"></span>
                                                </li>
                                                <li class="item">
                                                    <div class="item-image">
                                                        <img src="images/product_02.png" alt="Item 1">
                                                    </div>
                                                    <div class="item-detail">
                                                        <p class="name">Teako Teapot</p>
                                                        <p class="price">$21.00</p>
                                                        <p class="amount">x7</p>
                                                    </div>
                                                    <span class="remove"></span>
                                                </li>
                                                <li class="item">
                                                    <div class="item-image">
                                                        <img src="images/product_03.png" alt="Item 1">
                                                    </div>
                                                    <div class="item-detail">
                                                        <p class="name">Floor Lamp</p>
                                                        <p class="price">$36.00</p>
                                                        <p class="amount">x5</p>
                                                    </div>
                                                    <span class="remove"></span>
                                                </li>
                                            </ul>
                                            <div class="checkout m-t-26">
                                                <p>Subtotal
                                                    <span class="sub-total">$481.000</span>
                                                </p>
                                                <p>Total
                                                    <span class="total">$481.000</span>
                                                </p>
                                                <a href="#">Checkout</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- <li class="header-bar">
                                        <div class="bar-button">
                                            <img src="images/icon/header-bar.png" alt="Bar">
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Desktop Menu -->

            <!-- Mobile Menu -->
            <div class="header-wrapper-mobile mobile-style-2  d-block d-lg-none">
                <div class="header-mobile__bar">
                    <div class="header-mobile__logo">
                        <img src="images/icon/logo_02.png" alt="Art Amal">
                    </div>
                    <div class="header-mobile__button">
                        <span class="humburger-box">
                            <span class="hamburger__inner"></span>
                        </span>
                    </div>
                </div>
                <nav class="header-mobile__navbar">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                            <!-- <ul class="sub-menu">
                                <li>
                                    <a href="index.html">Homepage_v1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Homepage_v2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Homepage_v3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Homepage_v4</a>
                                </li>
                                <li>
                                    <a href="index5.html">Homepage_v5</a>
                                </li>
                                <li>
                                    <a href="index6.html">Homepage_v6</a>
                                </li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="#">Page</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="forget-password.html">Forget Password</a>
                                </li>
                                <li>
                                    <a href="coming-soon.html">Cooming Soon</a>
                                </li>
                                <li>
                                    <a href="404.html">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="shop-list.html">Shop 1</a>
                                </li>
                                <li>
                                    <a href="shop-list-nosidebar.html">Shop 2</a>
                                </li>
                                <li>
                                    <a href="product-detail.html">Product Detail 1</a>
                                </li>
                                <li>
                                    <a href="product-detail-nosidebar.html">Product Detail 2</a>
                                </li>
                                <li>
                                    <a href="shop-cart.html">Shop Cart</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wish List</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Check Out</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">blog</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog-grid-1.html">Blog Grid 1</a>
                                </li>
                                <li>
                                    <a href="blog-grid-2.html">Blog Grid 2</a>
                                </li>
                                <li>
                                    <a href="blog-list.html">Blog List</a>
                                </li>
                                <li>
                                    <a href="blog-detail.html">Blog Single</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </div>
    </header>
