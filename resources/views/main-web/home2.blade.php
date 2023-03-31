@include('main-web.includes.links')
<body id="home2">
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
                    <a href="/home2">
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
                                                <div class="cart-button d-flex justify-content-center">
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
        <div class="header-top d-xs-none">
            <div class="row margin-0">

                <!-- menu -->
                <div class="d-flex icon-menu align-items-center justify-content-center">
                    <i class="fa fa-bars" aria-hidden="true" id="icon-menu"></i>
                </div>
                <div class="main-menu d-flex align-items-center justify-content-start navbar-expand-md">
                    <div class="menu navbar collapse navbar-collapse">
                        <ul class="menu-top navbar-nav">
                            <li class="nav-link">
                                <a href="#" class="parent">Home</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li class="item">
                                            <a href="/door_shop2" title="Home Page 1">Home Page 1</a>
                                        </li>
                                        <li class="item">
                                            <a href="/home2" title="Home Page 2">Home Page 2</a>
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
                                                    <li class="item col-md-4 html  float-left">
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
                                                    <li class="item col-md-4 html  float-left">
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
                            <li>
                                <a href="/contact-us" class="parent">Contact US</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- logo -->
                <div class="flex-2 d-flex align-items-center justify-content-center">
                    <div id="logo">
                        <a href="/home2">
                            <img src="img/home/logo.png" alt="="logo">
                        </a>
                    </div>
                </div>

                <!-- search and acount -->
                <div id="search_widget" class="d-flex align-items-center justify-content-end">
                    <div class="search-header-top d-flex align-items-center justify-content-center">
                        <i class="search fa fa-search"></i>
                    </div>
                    <div id="block_myaccount_infos">
                        <div class="myaccount-title hidden-sm-down dropdown d-flex align-items-center justify-content-center">
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>
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
                                <div>
                                    <a href="/user-wishlist" title="My Wishlists">
                                        <i class="fa fa-heart"></i>My Wishlists
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
                                        <li class="list-inline-item current">
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
                    <div class="desktop_cart d-flex align-items-center">
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
    </header>

    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- menu category -->
            <div class="menu-banner d-xs-none">
                <div class="tiva-verticalmenu block" data-count_showmore="17">
                    <div class="box-content block_content">
                        <div class="verticalmenu" role="navigation">
                            <ul class="menu level1">
                                <li class="item parent">
                                    <a href="#" class="hasicon" title="SIDE TABLE">
                                        <img src="img/home/table-lamp.png" alt="="img">SIDE TABLE</a>
                                    <div class="dropdown-menu">
                                        <div class="menu-items">
                                            <ul>
                                                <li class="item">
                                                    <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                                </li>
                                                <li class="item parent-submenu parent">
                                                    <a href="#" title="Duis Reprehenderit">Duis Reprehenderit</a>
                                                    <span class="show-sub fa-active-sub"></span>
                                                    <div class="dropdown-submenu">
                                                        <div class="menu-items">
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
                                    </div>
                                </li>
                                <li class="item parent group">
                                    <a href="#" class="hasicon" title="FI">
                                        <img src="img/home/fireplace.png" alt="="img">FIREPLACE
                                    </a>
                                    <div class="dropdown-menu menu-2">
                                        <div class="menu-items">
                                            <div class="item">
                                                <div class="menu-content">
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                                    <div class="tags">
                                                        <div class="title float-left">
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
                                    </div>
                                </li>
                                <li class="item group-category-img parent group">
                                    <a href="#" class="hasicon" title="TABLE LAMP">
                                        <img src="img/home/table-lamp.png" alt="="img">TABLE LAMP
									</a>
                                    <div class="dropdown-menu menu-3">
                                        <div class="menu-items">
                                            <div class="item">
                                                <div class="menu-content">
                                                    <div class="group-category row">
                                                        <div class="mt-20">
                                                            <div class="d-flex">
                                                                <div class="col">
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
                                                                <div class="col">
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
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="col">
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
                                                                <div class="col">
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
                                                        <div class="ml-15">
                                                            <a>
                                                                <img class="img-fluid" src="img/home/img-menu.jpg" alt="="img">
                                                            </a>
                                                        </div>
                                                    </div>
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
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="CEILING FAN">
                                        <img src="img/home/ceiling_fan.png" alt="="img">CEILING FAN
									</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="WARDROBE">
                                        <img src="img/home/wardrobe.png" alt="="img">WARDROBE
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="FLOOR LAMP">
                                        <img src="img/home/floor_lamp.png" alt="="img">FLOOR LAMP</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="VASE-FLOWER">
                                        <img src="img/home/vase-flower.png" alt="="img">VASE-FLOWER
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED">
                                        <img src="img/home/bed.png" alt="="img">BED
                                    </a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED GIRL">
                                        <img src="img/home/bed.png" alt="="img">BED GIRL</a>
                                </li>
                                <li class="item toggleable menu-hidden">
                                    <a href="#" class="hasicon" title="BED BOY">
                                        <img src="img/home/bed.png" alt="="img">BED BOY</a>
                                </li>
                                <li class="more item">Show More</li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center align-items-center header-top-left pull-left">
                            <div class="toggle-nav act">
                                <div class="btnov-lines-large">
                                    <i class="zmdi zmdi-close"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <!-- SHOP THE LOOK -->
                        <div class="section spacing-10 groupbanner-special">
                            <div class="title-block">
                                <span>Shop The LookBook 2018</span>
                                <span>LookBook</span>
                                <span>HAND-PICKED ARRIVALS FROM THE BEST DESIGNER</span>
                            </div>

                            <div class="row">
                                <div class="lookbook owl-carousel owl-theme owl-loaded owl-drag">
                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook defaul">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="img/home/home1-tolltip1.jpg" alt="="lookbook">

                                                    <div class="item-lookbook item1">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook lookbook-custom">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip2.jpg" alt="="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Lorem ipsum dolor</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £52.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item2">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip1.jpg" alt="="contrary-to-popular-belief">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £68.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook default">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="img/home/home1-tolltip2.jpg" alt="="lookbook">

													<div class="item-lookbook item3">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip5.jpg" alt="="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Lorem ipsum dolor sit</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £45.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item4">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip6.jpg" alt="="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Lorem ipsum dolor</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £21.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item5">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook lookbook-custom">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip4.jpg" alt="="mug-the-adventure-begins">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £11.90
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <!-- Module Lookbooks -->
                                        <div class="tiva-lookbook default">
                                            <div class="items col-lg-12 col-sm-12 col-xs-12">
                                                <div class="tiva-content-lookbook">
                                                    <img class="img-fluid img-responsive" src="img/home/home1-tolltip3.jpg" alt="="lookbook">

													<div class="item-lookbook item6">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip4.jpg" alt="="mug-the-adventure-begins">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Sed vel malesuada lorem</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £11.90
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

													<div class="item-lookbook item7">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="{{asset('img/product/13.jpg" alt="="brown-bear-vector-graphics">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Orci varius natoque penatibus</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £9.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="item-lookbook item8">
                                                        <span class="number-lookbook">+</span>
                                                        <div class="content-lookbook">
                                                            <div class="main-lookbook d-flex align-items-center">
                                                                <div class="item-thumb">
                                                                    <a href="/product-detail">
                                                                        <img src="img/home/icon-tolltip6.jpg" alt="="lorem-ipsum-dolor-sit-amet">
                                                                    </a>
                                                                </div>
                                                                <div class="content-bottom">
                                                                    <div class="item-title">
                                                                        <a href="/product-detail">Etiam congue nisl nec</a>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-price">
                                                                        £16.00
                                                                    </div>
                                                                    <div class="readmore">
                                                                        <a href="/product-detail">View More</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="info-lookbook">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product living room -->
                        <div class="section living-room background-none">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="col-md-12 col-xs-12 groupcategoriestab-vertical">
                                        <div class="grouptab">
                                            <div class="product-tab categoriestab-left flex-9">
                                                <div class="title-tab-content d-flex">
                                                    <!-- tab product -->
                                                    <div class="dropdown-toggle toggle-category tab-category-none">Select Category</div>
                                                    <ul class="nav nav-tabs wibkit row">
                                                        <li class="col-xs-6">
                                                            <a href="#all" data-toggle="tab" class="active">ALL PRODUCTS</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#table" data-toggle="tab">SIDE TABLE</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#armchair" data-toggle="tab">ARMCHAIR</a>
                                                        </li>
                                                        <li class="col-xs-6">
                                                            <a href="#cushion" data-toggle="tab">CUSHION</a>
                                                        </li>
                                                    </ul>

                                                    <!-- Sort by -->
                                                    <div class="filter-sortby open ">
                                                        <select>
                                                            <option value="">Sort by</option>
                                                            <option value="">Name, A to Z</option>
                                                            <option value="">Name, Z to A</option>
                                                            <option value="">Price, low to high</option>
                                                            <option value="">Price, high to low</option>
                                                        </select>

                                                        <div class="toggle-filter btn ml-3 dropdown-toggle" data-label="Filter" data-label-hidden="Hide Filter">Filter</div>
                                                        <div class="hide-filter toggle-filter btn" data-label="Filter" data-label-hidden="Hide Filter">
                                                            <i class="fa fa-times-circle" aria-hidden="true"></i>Hide Filter</div>
                                                    </div>
                                                </div>

                                                <!-- filter -->
                                                <div class="content-filter">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center">
                                                                Choose Color
                                                            </div>
                                                            <ul class="active">
                                                                <li data-id_attribute="5">
                                                                    <span class="color grey"></span>
                                                                    <span>Grey</span>
                                                                </li>
                                                                <li data-id_attribute="6">
                                                                    <span class="color taupe"></span>
                                                                    <span>Taupe</span>
                                                                </li>
                                                                <li data-id_attribute="7">
                                                                    <span class="color beige"></span>
                                                                    <span>Beige</span>
                                                                </li>
                                                                <li data-id_attribute="9">
                                                                    <span class="color white"></span>
                                                                    <span>Off White</span>
                                                                </li>
                                                                <li data-id_attribute="10">
                                                                    <span class="color red"></span>
                                                                    <span>Red</span>
                                                                </li>
                                                                <li data-id_attribute="11">
                                                                    <span class="color black"></span>
                                                                    <span>Black</span>
                                                                </li>
                                                                <li data-id_attribute="12">
                                                                    <span class="color camel"></span>
                                                                    <span>Camel</span>
                                                                </li>
                                                                <li data-id_attribute="13">
                                                                    <span class="color orange"></span>
                                                                    <span>Orange</span>
                                                                </li>
                                                                <li data-id_attribute="14">
                                                                    <span class="color blue"></span>
                                                                    <span>Blue</span>
                                                                </li>
                                                                <li data-id_attribute="15">
                                                                    <span class="color green"></span>
                                                                    <span>Green</span>
                                                                </li>
                                                                <li data-id_attribute="16">
                                                                    <span class="color yellow"></span>
                                                                    <span>Yellow</span>
                                                                </li>
                                                                <li data-id_attribute="17">
                                                                    <span class="color brown"></span>
                                                                    <span>Brown</span>
                                                                </li>
                                                                <li data-id_attribute="18">
                                                                    <span class="color pink"></span>
                                                                    <span>Pink</span>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center m-top">
                                                                Choose Manufacture
                                                            </div>
                                                            <ul class="manufacture filter_product list-unstyled active">
                                                                <li>Delce</li>
                                                                <li>Gabbana</li>
                                                                <li>Hermes</li>
                                                                <li>Hug Boss</li>
                                                                <li>Lorem Ipsum</li>
                                                                <li>louis vuitton</li>
                                                                <li>variations</li>
                                                                <li>Popular</li>
                                                                <li>Standard</li>
                                                                <li>Versace</li>
                                                            </ul>
                                                        </div>

                                                        <div class="tiva-filter-price col-md-4">
                                                            <div class="tiva-filter-title d-flex align-items-center m-top">
                                                                Choose Price
                                                            </div>
                                                            <div id="block_price_filter" class="block">
                                                                <div class="block-content">
                                                                    <div id="slider-range" class="tiva-filter">
                                                                        <div class="filter-itemprice-filter">
                                                                            <div class="layout-slider">
                                                                                <input id="price-filter" name="price" value="0;100" />
                                                                            </div>
                                                                            <div class="layout-slider-settings"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- tab product content -->
                                                <div class="tab-content">
                                                    <div id="all" class="tab-pane fade in active show">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/1.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/5.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/3.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/9.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/2.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/17.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/13.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/26.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>
                                                    <div id="table" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/1.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/2.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/3.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/4.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/5.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/6.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/7.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
																				<a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/8.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>

                                                    <div id="armchair" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/9.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/10.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/11.jpg" alt="="img">

                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/12.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/12.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/13.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/14.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/15.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>

                                                    <div id="cushion" class="tab-pane fade">
                                                        <div class="item text-center row">
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/1.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/2.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/3.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/4.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/5.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/6.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/7.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 col-xs-12">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="/product-detail">
                                                                            <img class="img-fluid" src="{{asset('img/product/8.jpg" alt="="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="/product-detail">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="token">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="content-showmore text-center has-showmore">
                                                            <button type="button" class="btn btn-default novShowMore" name="novShowMore" data-loading="Loading..." data-loadmore="Load More Products">
                                                                <span>Load More Products</span>
                                                            </button>
                                                            <input type="hidden" value="0" class="count_showmore">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner -->
                        <div class="section spacing-10 group-image-special">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effect5.jpg" alt="="banner-1" title="banner-1">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effect6.jpg" alt="="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effect7.jpg" alt="="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effect8.jpg" alt="="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 banner1">
                                    <div class="effect">
                                        <a href="#">
                                            <img class="img-fluid width-100" src="img/home/effect9.jpg" alt="="banner-2" title="banner-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="section new-arrivals col-lg-6 col-xs-6">
                                    <div class="tab-content">
                                        <div class="title-product">
                                            <h2>New Arrivals</h2>
                                            <p>Discover our new products</p>
                                        </div>
                                        <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/6.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/4.jpg" alt="="img">
                                                        </a>
                                                        <div class="product-flags discount">-30%</div>

                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/10.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg" alt="="img">
                                                        </a>
                                                        <div class="product-flags discount">-10%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/16.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg" alt="="img">
                                                        </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section best-sellers col-lg-6 col-xs-6">
                                    <div class="tab-content">
                                        <div class="title-product">
                                            <h2>Best Sellers</h2>
                                            <p>Discover our best sellers</p>
                                        </div>
                                        <div class="category-product owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/26.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/24.jpg" alt="="img">
                                                        </a>
                                                        <div class="product-flags discount">-30%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/13.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg" alt="="img">
                                                        </a>
                                                        <div class="product-flags discount">-10%</div>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                    <del class="regular-price">£28.68</del>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item text-center">
                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                    <div class="thumbnail-container">
                                                        <a href="/product-detail">
                                                            <img class="img-fluid image-cover" src="{{asset('img/product/12.jpg" alt="="img">
                                                            <img class="img-fluid image-secondary" src="{{asset('img/product/4.jpg" alt="="img">
                                                        </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <div class="product-groups">
                                                            <div class="product-title">
                                                                <a href="/product-detail">Nulla et justo non augue</a>
                                                            </div>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                            <div class="product-group-price">
                                                                <div class="product-price-and-shipping">
                                                                    <span class="price">£20.08</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-buttons d-flex justify-content-center">
                                                            <form action="#" method="post" class="formAddToCart">
                                                                <input type="hidden" name="token">
                                                                <input type="hidden" name="id_product" value="1">
                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                </a>
                                                            </form>
                                                            <a class="addToWishlist wishlistProd_1" href="#" data-rel="1" onclick="">
                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                            </a>
                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- newsletter -->
                        <div class="section newsletter">
                            <div class="container">
                                <div class="row">
                                    <div class="news-content">
                                        <div class="tiva-modules">
                                            <div class="block">
                                                <div class="title-block">Newsletter</div>
                                                <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes
                                                    direct to your inbox</div>
                                                <div class="block-newsletter">
                                                    <form action="#" method="post">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                            <span class="input-group-btn">
                                                                <button class="effect-btn btn btn-secondary" name="submitNewsletter" type="submit">
                                                                    <span>subscribe</span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <input type="hidden" name="action" value="0">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="block">
                                                <div class="social-content">
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

                                            <!-- Popup newsletter -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer background-none">
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="tiva-html col-lg-3 col-md-3 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        WHO WE ARE
                                    </div>
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
                                        <li>
                                            <a href="#">Cookies & privacy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-3 col-md-3">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        CUSTOMER SERVICES
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Help and advice</a>
                                        </li>
                                        <li>
                                            <a href="#">Delivery</a>
                                        </li>
                                        <li>
                                            <a href="#">Terms and conditions</a>
                                        </li>
                                        <li>
                                            <a href="#">Refund Policy</a>
                                        </li>
                                        <li>
                                            <a href="#">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-html col-lg-6 col-md-6">
                            <div class="block">
                                <div class="block-content">
                                    <div class="title-block">
                                        CONTACT US
                                    </div>
                                    <div class="contact-content">
                                        <div class="data align-self-stretch d-flex">
                                            <i class="fa fa-home float-left" aria-hidden="true"></i>
                                            <div class="content-data">
                                                <b class="mr-2">Showroom:</b>123 Suspendis matti, Visaosang Building, VST District NY Accums,
                                                Kansas City, North American
                                            </div>
                                        </div>
                                        <div class="data align-self-stretch d-flex">
                                            <i class="fa fa-clock-o float-left" aria-hidden="true"></i>
                                            <div class="content-data">
                                                <b class="mr-2">Opening Hours:</b>Monday - Sunday / 08.00AM - 19.00 (Except Holidays)</div>
                                        </div>
                                        <div class="support align-self-stretch d-flex">
                                            <div class="data d-flex align-self-stretch mail-support">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <div class="email">support@domain.com</div>
                                            </div>
                                            <div class="data d-flex align-self-stretch phone-support">
                                                <div class="title-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </div>
                                                <div>+0012-345-67890</div>
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

        <!-- delivery form -->
        <div class="policy-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="policy-item">
                                    <div class="policy-content iconpolicy1">
                                        <img src="img/home/home1-policy.png" alt="="img">
                                        <div class="policy-name mb-5">FREE DELIVERY FROM $ 250</div>
                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-html col-lg-4 col-md-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="policy-item">
                                    <div class="policy-content iconpolicy2">
                                        <img src="img/home/home1-policy2.png" alt="="img">
                                        <div class="policy-name mb-5">FREE INSTALLATION</div>
                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tiva-html col-lg-4 col-md-4">
                        <div class="block">
                            <div class="block-content">
                                <div class="policy-item">
                                    <div class="policy-content iconpolicy3">
                                        <img src="img/home/home1-policy3.png" alt="="img">
                                        <div class="policy-name mb-5">MONEY BACK GUARANTEED</div>
                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                    </div>
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
                    <div class="payment-image col-md-6 align-items-center justify-content-md-start justify-content-sm-center d-flex flex-center">
                        <span>
                            <a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
                        </span>
                    </div>
                    <div class="col-md-6 align-items-center justify-content-md-end justify-content-sm-center d-flex pb-xs-max-20 flex-center">
                        <img src="img/home/payment.jpg" alt="="img">
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
                                <div class="menu-items">
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
                                                <div class="meni-items">
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
                    <div id="megamenu" class="clearfix">
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
                                            <a href="/home2" title="Home Page 2">Home Page 2</a>
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
                                <a href="/contact-us" title="Contact us">
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

    <!-- search -->
    <div id="tiva-searchBox" class="d-flex align-items-center text-center active">
        <div class="container">
            <span class="tiva-seachBoxClose">
                <i class="zmdi zmdi-close"></i>
            </span>
            <div class="tiva-seachBoxInner">
                <div class="title-search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span>Search</span>
                </div>
                <div class="description">
                    Find your product with fast search. Enter some keyword such as dress, shirts, shoes etc. Or can search by product sku.
                </div>
                <!-- Block search module TOP -->
                <div id="search" class="search-widget d-flex justify-content-center">
                    <form method="get" action="#">
                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        <input type="text" name="s" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off">
                        <button type="button">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
@include('main-web.includes.script')
</body>


<!-- home207:34-->
</html>