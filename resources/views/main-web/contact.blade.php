@include('main-web.includes.links')

<body id="contact" class="blog">
    <header>

        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="/door_shop2">
                        <img class="logo-mobile img-fluid" src="img/home/logo-mobie.png" alt="="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">

                        <input type="text" name="s" value="" placeholder="Search">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="/product-detail">
                                                    <img src="{{asset('img/product/5.jpg" alt="="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="/product-detail">Organic Strawberry Fruits</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">£28.98</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£92.96</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="/product-cart" title="View Cart">View Cart</a>
                                                    <a href="/product-checkout" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="/door_shop2">
                                <img src="img/home/logo.png" alt="="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="col-sm-5 col-md-5 align-items-center justify-content-center navbar-expand-md main-menu">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li>
                                    <a href="#" class="parent">Home</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="item">
                                                <a href="/door_shop2" title="Home Page 1">Home Page 1</a>
                                            </li>
                                            <li class="item">
                                                <a href="home2.blade.php" title="Home Page 2">Home Page 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="/home3" title="Home Page 3">Home Page 3</a>
                                            </li>
                                            <li class="item">
                                                <a href="/home4" title="Home Page 4">Home Page 4</a>
                                            </li>
                                            <li class="item">
                                                <a href="/home5" title="Home Page 5">Home Page 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="parent">Blog</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li class="item">
                                                <a href="/blog-list-sidebar-left" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                            </li>
                                            <li class="item">
                                                <a href="/blog-list-sidebar-left2" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="/blog-list-sidebar-right" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                            </li>
                                            <li class="item">
                                                <a href="/blog-list-no-sidebar" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                            </li>
                                            <li class="item">
                                                <a href="/blog-grid-no-sidebar" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                            </li>
                                            <li class="item">
                                                <a href="/blog-detail" title="Blog Detail">Blog Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="parent">Page</a>
                                    <div class="dropdown-menu drop-tab">
                                        <ul>
                                            <li class="item container group">
                                                <div class="dropdown-menu dropdown-tab">
                                                    <ul>
                                                        <li class="item col-md-4 float-left">
                                                            <span class="menu-title">Category Style</span>
                                                            <div class="menu-content">
                                                                <ul class="col">
                                                                    <li>
                                                                        <a href="/product-grid-sidebar-left">Product Grid (Sidebar Left)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/product-grid-sidebar-right">Product Grid (Sidebar Right)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/product-list-sidebar-left">Product List (Sidebar left) </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="item col-md-4 html float-left">
                                                            <span class="menu-title">Product Detail Style</span>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li>
                                                                        <a href="/product-detail">Product Detail (Sidebar Left)</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Product Detail (Sidebar Right)</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="item col-md-4 html float-left">
                                                            <span class="menu-title">Bonus Page</span>
                                                            <div class="menu-content">
                                                                <ul>
                                                                    <li>
                                                                        <a href="404.html">404 Page</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/about-us">About Us Page</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-link">
                                    <a href="contact.html" class="parent">Contact US</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search and acount -->
                    <div class="col-sm-5 col-md-5 d-flex align-items-center justify-content-end" id="search_widget">
                        <form method="get" action="#">

                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" name="s" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title ">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Account</span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>

                            </div>

                            <div id="acount" class="collapse">

                                <div class="account-list-content">

                                    <div>
                                        <a class="login" href="/user-account" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="login" href="/user-login" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Sign in</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="register" href="/user-register" rel="nofollow" title="Register Account">
                                            <i class="fa fa-user"></i>
                                            <span>Register Account</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="check-out" href="/product-checkout" rel="nofollow" title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                    <div class="link_wishlist">
                                        <a href="/user-wishlist" title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>
                                    <div id="desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li>
                                                <a title="Euro" rel="nofollow" href="#">EUR</a>
                                            </li>
                                            <li class="current list-inline-item">
                                                <a title="British Pound Sterling" rel="nofollow" href="#">GBP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="desktop_language_selector" class="language-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li class="list-inline-itemcurrent">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas.jpg" alt="="English" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas2.jpg" alt="="Italiano" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas3.jpg" alt="="Français" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas4.jpg" alt="="Español" width="16" height="11">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="/product-detail">
                                                            <img src="{{asset('img/product/5.jpg" alt="="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="/product-detail">Organic Strawberry Fruits</a>
                                                        </div>
                                                        <div>
                                                            2 x
                                                            <span class="product-price">£28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>£92.96</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="/product-cart" title="View Cart">View Cart</a>
                                                            <a href="/product-checkout" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main content -->
    <div class="main-content">
        <div id="wrapper-site">
            <div id="content-wrapper">

                <!-- breadcrumb -->
                <nav class="breadcrumb-bg">
                    <div class="container no-index">
                        <div class="breadcrumb">
                            <ol>
                                <li>
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <div id="main">
                    <div class="page-home">
                        <div class="container">
                            <h1 class="text-center title-page">Contact Us</h1>
                            <div class="row-inhert">
                                <div class="header-contact">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-email"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Email:</div>
                                                    <div class="contact-content">
                                                        <a href="mailto:support@domain.com">support@domain.com</a>
                                                        <br>
                                                        <a href="mailto:contact@domain.com">contact@domain.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-home"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Address:</div>
                                                    <div class="contact-content">
                                                        23 Suspendis matti, Visaosang Building
                                                        <br>District, NY Accums, North American
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4 col-md-4">
                                            <div class="item d-flex justify-content-end  last">
                                                <div class="item-left">
                                                    <div class="icon">
                                                        <i class="zmdi zmdi-phone"></i>
                                                    </div>
                                                </div>
                                                <div class="item-right d-flex">
                                                    <div class="title">Hotline:</div>
                                                    <div class="contact-content">
                                                        0123-456-78910
                                                        <br>0987-654-32100
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-map">
                                    <div id="map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3785754726428!2d105.78134315594316!3d21.01753304734255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam+Hanoi+Landmark+Tower!5e0!3m2!1svi!2s!4v1530175498947" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="input-contact">
                                    <p class="text-intro text-center">“Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin, lorem quis bibendum
                                        auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                                        amet nibh vultate cursus a sit amet mauris. Proin gravida nibh vel velit auctor aliquet.”
                                    </p>

                                    <p class="icon text-center">
                                        <a href="#">
                                            <img src="img/other/contact_mess.png" alt="="img">
                                        </a>
                                    </p>

                                    <div class="d-flex justify-content-center">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="contact-form">
                                                <form action="#" method="post" enctype="multipart/form-data">
                                                    <div class="form-fields">
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <input class="form-control" name="name" placeholder="Your name">
                                                            </div>
                                                            <div class="col-md-6 margin-bottom-mobie">
                                                                <input class="form-control" name="from" type="email" value="" placeholder="Your email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12 margin-bottom-mobie">
                                                                <input class="form-control" name="from" type="email" value="" placeholder="Subject">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <textarea class="form-control" name="message" placeholder="Message" rows="8"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button class="btn" type="submit" name="submitMessage">
                                                            <img class="img-fl" src="img/other/contact_email.png" alt="="img">Send message
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class=" row">
                        <div class="nov-html col-lg-4 col-sm-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="img/home/logo.png" alt="="img">
                                    </p>
                                    <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        <img class="img-fluid" src="img/home/payment-footer.png" alt="="img">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="nov-html col-lg-4 col-sm-6">
                            <div class="block m-top">
                                <div class="title-block">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p>123 Suspendis matti, Visaosang Building VST District NY Accums, North American
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                            <p>support@domain.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Hotline :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                            <p>+0012-345-67890</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p>Monday - Sunday / 08.00AM- 19.00</p>
                                            <span>(Except Holidays)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes direct
                                        to your inbox
                                    </div>
                                    <div class="block-newsletter">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="action" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="img/home/payment.png" alt="="img">
                                        </div>
                                    </div>
                                    <!-- Popup newsletter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tiva-copyright">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-12 ">
                        <span>
                            <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- menu mobie left -->
    <div class="mobile-top-menu d-md-none">
        <button type="button" class="close" aria-label="Close">
            <i class="zmdi zmdi-close"></i>
        </button>
        <div class="tiva-verticalmenu block" data-count_showmore="17">
            <div class="box-content block-content">
                <div class="verticalmenu" role="navigation">
                    <ul class="menu level1">
                        <li class="item  parent">
                            <a href="#" class="hasicon" title="SIDE TABLE">
                                <img src="img/home/table-lamp.png" alt="="img">SIDE TABLE</a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#SIDE-TABLE" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="SIDE-TABLE" aria-expanded="true" role="status">
                                <ul>
                                    <li class="item">
                                        <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                    </li>
                                    <li class="item  parent-submenu">
                                        <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                        <span class="arrow collapsed" data-toggle="collapse" data-target="#sub-Category" aria-expanded="false" role="status">
                                            <i class="zmdi zmdi-minus"></i>
                                            <i class="zmdi zmdi-plus"></i>
                                        </span>
                                        <div class="subCategory collapse" id="sub-Category" aria-expanded="true" role="status">
                                            <ul>
                                                <li class="item">
                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Voluptate">Voluptate</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Tongue Est">Tongue Est</a>
                                                </li>
                                                <li class="item">
                                                    <a href="#" title="Venison Andouille">Venison Andouille</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Voluptate">Voluptate</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Tongue Est">Tongue Est</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" title="Venison Andouille">Venison Andouille</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="item  parent group">
                            <a href="#" class="hasicon" title="FI">
                                <img src="img/home/fireplace.png" alt="="img">FIREPLACE
                            </a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#fi" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="fi" aria-expanded="true" role="status">
                                <div class="item">
                                    <div class="menu-content">
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>DINNING ROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>BATHROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier Media</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Gee</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Digimart</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Vitivaa</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sanaky</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sunshine</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>LIVING ROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">Media</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Gee</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Digimart</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Vitivaa</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sanaky</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sunshine</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Toshiba</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Samsung</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>BEDROOM</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>KITCHEN</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tags d-flex d-xs-flex-inherit">
                                            <div class="title">
                                                <b>Blender</b>
                                            </div>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#">LG</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Sharp</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Electrolux</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Hitachi</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Panasonic</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Mitsubishi Electric</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Daikin</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#">Haier</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item group-category-img parent group">
                            <a href="#" class="hasicon" title="TABLE LAMP">
                                <img src="img/home/table-lamp.png" alt="="img">TABLE LAMP</a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#table-lamp" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="table-lamp" aria-expanded="true" role="status">
                                <div class="item">
                                    <div class="menu-content">
                                        <div class="col-xs-12">
                                            <span class="menu-title">Coventry dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Amara stools</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Kingston dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12">
                                            <span class="menu-title">Ellinger dining</span>
                                            <ul>
                                                <li>
                                                    <a href="#">Accessories</a>
                                                </li>
                                                <li>
                                                    <a href="#">Activewear</a>
                                                </li>
                                                <li>
                                                    <a href="#">ASOS Basic Tops</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bags &amp; Purses</a>
                                                </li>
                                                <li>
                                                    <a href="#">Beauty</a>
                                                </li>
                                                <li>
                                                    <a href="#">Coats &amp; Jackets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Curve &amp; Plus Size</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="OTTOMAN">
                                <img src="img/home/ottoman.png" alt="="img">OTTOMAN
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="ARMCHAIR">
                                <img src="img/home/armchair.png" alt="="img">ARMCHAIR
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CUSHION">
                                <img src="img/home/cushion.png" alt="="img">CUSHION
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="COFFEE TABLE">
                                <img src="img/home/coffee_table.png" alt="="img">COFFEE TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SHELF">
                                <img src="img/home/shelf.png" alt="="img">SHELF
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SOFA">
                                <img src="img/home/sofa.png" alt="="img">SOFA
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="DRESSING TABLE">
                                <img src="img/home/dressing.png" alt="="img">DRESSING TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                <img src="img/home/windown.png" alt="="img">WINDOWN CURTAIN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CHANDELIER">
                                <img src="img/home/chandelier.png" alt="="img">CHANDELIER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CEILING FAN">
                                <img src="img/home/ceiling_fan.png" alt="="img">CEILING FAN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WARDROBE">
                                <img src="img/home/wardrobe.png" alt="="img">WARDROBE
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="FLOOR LAMP">
                                <img src="img/home/floor_lamp.png" alt="="img">FLOOR LAMP</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="VASE-FLOWER ">
                                <img src="img/home/vase-flower.png" alt="="img">VASE-FLOWER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED">
                                <img src="img/home/bed.png" alt="="img">BED
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED GIRL">
                                <img src="img/home/bed.png" alt="="img">BED GIRL</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED BOY">
                                <img src="img/home/bed.png" alt="="img">BED BOY</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- menu mobie right -->
    <div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up active d-md-none">
        <div class="content-boxpage col">
            <div class="box-header d-flex justify-content-between align-items-center">
                <div class="title-box">Menu</div>
                <div class="close-box">Close</div>
            </div>
            <div class="box-content">
                <nav>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div id="megamenu" class="nov-megamenu clearfix">
                        <ul class="menu level1">
                            <li class="item home-page has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#home1" aria-expanded="true" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="/door_shop2" title="Home">
                                    <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                                <div class="subCategory collapse" id="home1" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="/door_shop2" title="Home Page 1">Home Page 1</a>
                                        </li>
                                        <li class="item">
                                            <a href="home2.blade.php" title="Home Page 2">Home Page 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="/home3" title="Home Page 3">Home Page 3</a>
                                        </li>
                                        <li class="item">
                                            <a href="/home4" title="Home Page 4">Home Page 4</a>
                                        </li>
                                        <li class="item">
                                            <a href="/home5" title="Home Page 5">Home Page 5</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#blog" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Blog">
                                    <i class="fa fa-address-book" aria-hidden="true"></i>Blog</a>

                                <div class="subCategory collapse" id="blog" aria-expanded="true" role="status">
                                    <ul>
                                        <li class="item">
                                            <a href="/blog-list-sidebar-left" title="Blog List (Sidebar Left)">Blog List (Sidebar Left)</a>
                                        </li>
                                        <li class="item">
                                            <a href="/blog-list-sidebar-left2" title="Blog List (Sidebar Left) 2">Blog List (Sidebar Left) 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="/blog-list-sidebar-right" title="Category Blog (Right column)">Blog List (Sidebar Right)</a>
                                        </li>
                                        <li class="item">
                                            <a href="/blog-list-no-sidebar" title="Blog List (No Sidebar)">Blog List (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="/blog-grid-no-sidebar" title="Blog Grid (No Sidebar)">Blog Grid (No Sidebar)</a>
                                        </li>
                                        <li class="item">
                                            <a href="/blog-detail" title="Blog Detail">Blog Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item group has-sub">
                                <span class="arrow collapsed" data-toggle="collapse" data-target="#page" aria-expanded="false" role="status">
                                    <i class="zmdi zmdi-minus"></i>
                                    <i class="zmdi zmdi-plus"></i>
                                </span>
                                <a href="#" title="Page">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i>page</a>
                                <div class="subCategory collapse" id="page" aria-expanded="true" role="status">
                                    <ul class="group-page">
                                        <li class="item container group">
                                            <div>
                                                <ul>
                                                    <li class="item col-md-4 ">
                                                        <span class="menu-title">Category Style</span>
                                                        <div class="menu-content">
                                                            <ul class="col">
                                                                <li>
                                                                    <a href="/product-grid-sidebar-left">Product Grid (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/product-grid-sidebar-right">Product Grid (Sidebar Right)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/product-list-sidebar-left">Product List (Sidebar Left) </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Product Detail Style</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="/product-detail">Product Detail (Sidebar Left)</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Product Detail (Sidebar Right)</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="item col-md-4 html">
                                                        <span class="menu-title">Bonus Page</span>
                                                        <div class="menu-content">
                                                            <ul>
                                                                <li>
                                                                    <a href="404.html">404 Page</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/about-us">About Us Page</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="item has-sub">
                                <a href="contact.html" title="Contact us">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>Contact us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Page Loader -->
    <div id="page-preloader">
        <div class="page-loading">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <!-- Vendor JS -->
@include('main-web.includes.script')
</body>


<!-- contact11:10-->
</html>
