<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- home408:14-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furnitica - Minimalist Furniture HTML Template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reponsive.css">
</head>

<body id="home4">
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
                   / <a href="/home4">
                        <img class="logo-mobile img-fluid" src="{{asset('img/home/logo-mobie.png')}}" alt= "">Prestashop_Furnitica">
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
                                                    <img src="{{asset('img/product/5.jpg')}}" alt= "">Product">
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
        <div class="header-top d-xs-none">
            <div class="container">
                <div class="row margin-0">
                    <!-- menu -->
                    <div class="d-flex icon-menu align-items-center justify-content-center">
                        <div class="has-showmore dropdown vertical-dropdown">
                            <div data-toggle="collapse" data-target="#show-menu" aria-expanded="true" role="status">
                                <div id="nav_icon3">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
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
                                               / <a href="/home2.blade.php" title="Home Page 2">Home Page 2</a>
                                            </li>
                                            <li class="item">
                                                <a href="/home3" title="Home Page 3">Home Page 3</a>
                                            </li>
                                            <li class="item">
                                               / <a href="/home4" title="Home Page 4">Home Page 4</a>
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
                                                                        <a href="/404">404 Page</a>
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
                    <div class="flex-2 d-flex  align-items-center justify-content-center">
                        <div id="logo">
                           / <a href="/home4">
                                <img src="{{asset('img/home/logo.png')}}" alt= "">logo" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <!-- search -->
                    <div id="search_widget" class="d-flex align-items-center justify-content-end float-right">
                        <form method="get" action="#">
                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                            <input type="text" name="s" value="" placeholder="Search" class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>

                        <div id="block_myaccount_infos">
                            <div class="myaccount-title hidden-sm-down dropdown d-flex align-items-center justify-content-center">
                                <a href="#acount" data-toggle="collapse" class="acount" aria-expanded="true">
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
                                                    <img class="img-fluid" src="{{asset('img/home/home1-flas.jpg')}}" alt= "">English" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('img/home/home1-flas2.jpg')}}" alt= "">Italiano" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('img/home/home1-flas3.jpg')}}" alt= "">Français" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('img/home/home1-flas4.jpg')}}" alt= "">Español" width="16" height="11">
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
                                                            <img src="{{asset('img/product/5.jpg')}}" alt= "">Product">
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
        <div class="wrap-banner">
            <!-- category menu  -->
            <div class="container">
                <div class="menu-banner-container">
                    <div id="show-menu" class="menu-banner d-xs-none dropdown-menu collapse">
                        <div class="tiva-verticalmenu block">
                            <div class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    <li class="item parent">
                                        <a href="#" class="hasicon" title="SIDE TABLE">
                                            <img src="{{asset('img/home/table-lamp.png')}}" alt= "">SIDE TABLE</a>
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
                                            <img src="{{asset('img/home/fireplace.png')}}" alt= "">FIREPLACE
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
                                            <img src="{{asset('img/home/table-lamp.png')}}" alt= "">TABLE LAMP
										</a>
                                        <div class="dropdown-menu menu-3">
                                            <div class="menu-items">
                                                <div class="item">
                                                    <div class="menu-content">
                                                        <div class="row group-category">
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
                                                                <a href="#">
                                                                    <img class="img-fluid" src="{{asset('img/home/img-menu.jpg')}}" alt= "">
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
                                            <img src="{{asset('img/home/ottoman.png')}}" alt= "">OTTOMAN
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="ARMCHAIR">
                                            <img src="{{asset('img/home/armchair.png')}}" alt= "">ARMCHAIR
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="CUSHION">
                                            <img src="{{asset('img/home/cushion.png')}}" alt= "">CUSHION
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="COFFEE TABLE">
                                            <img src="{{asset('img/home/coffee_table.png')}}" alt= "">COFFEE TABLE</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="SHELF">
                                            <img src="{{asset('img/home/shelf.png')}}" alt= "">SHELF
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="SOFA">
                                            <img src="{{asset('img/home/sofa.png')}}" alt= "">SOFA
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="DRESSING TABLE">
                                            <img src="{{asset('img/home/dressing.png')}}" alt= "">DRESSING TABLE</a>
                                    </li>
                                    <li class="item">
                                        <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                            <img src="{{asset('img/home/windown.png')}}" alt= "">WINDOWN CURTAIN</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="CHANDELIER">
                                            <img src="{{asset('img/home/chandelier.png')}}" alt= "">CHANDELIER
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="CEILING FAN">
                                            <img src="{{asset('img/home/ceiling_fan.png')}}" alt= "">CEILING FAN</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="WARDROBE">
                                            <img src="{{asset('img/home/wardrobe.png')}}" alt= "">WARDROBE
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="FLOOR LAMP">
                                            <img src="{{asset('img/home/floor_lamp.png')}}" alt= "">FLOOR LAMP</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="VASE-FLOWER">
                                            <img src="{{asset('img/home/vase-flower.png')}}" alt= "">VASE-FLOWER
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED">
                                            <img src="{{asset('img/home/bed.png')}}" alt= "">BED
                                        </a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED GIRL">
                                            <img src="{{asset('img/home/bed.png')}}" alt= "">BED GIRL</a>
                                    </li>
                                    <li class="item toggleable menu-hidden">
                                        <a href="#" class="hasicon" title="BED BOY">
                                            <img src="{{asset('img/home/bed.png')}}" alt= "">BED BOY</a>
                                    </li>
                                    <li class="more item">Show More</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- slide show -->
                <div class="tab-content">
                    <div class="category-product-item owl-carousel owl-theme">
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide1.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide2.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide3.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide4.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide5.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide6.jpg')}}" alt= "">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="{{asset('img/home/home4-slide3.jpg')}}" alt= "">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- policy -->
                <div class="row">
                    <div class="policy-home col-lg-12">
                        <div class="row">
                            <div class="block col-lg-4 col-md-4 col-xs-12 d-flex justify-content-center">
                                <div class="block-content">
                                    <div class="policy-item">
                                        <div class="policy-content iconpolicy1">
                                            <img src="{{asset('img/home/home1-policy.png')}}" alt= "">
                                            <div class="policy-name mb-5">FREE DELIVERY FROM $ 250</div>
                                            <div class="policy-des">Lorem ipsum dolor Sed ut perspiciatis unde omnis</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block tiva-html col-lg-4 col-md-4 col-xs-12 d-flex  justify-content-center">
                                <div class="block-content">
                                    <div class="policy-item">
                                        <div class="policy-content iconpolicy2">
                                            <img src="{{asset('img/home/home1-policy2.png')}}" alt= "">
                                            <div class="policy-name mb-5">FREE INSTALLATION</div>
                                            <div class="policy-des">Lorem ipsum dolor Sed ut perspiciatis unde omnis</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block tiva-html col-lg-4 col-md-4 col-xs-12 d-flex justify-content-center">
                                <div class="block-content">
                                    <div class="policy-item">
                                        <div class="policy-content iconpolicy3">
                                            <img src="{{asset('img/home/home1-policy3.png')}}" alt= "">
                                            <div class="policy-name mb-5">MONEY BACK GUARANTEED</div>
                                            <div class="policy-des">Lorem ipsum dolor Sed ut perspiciatis unde omnis</div>
                                        </div>
                                    </div>
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
                        <!-- FEATURED CATEGORIES -->
                        <div class="featured-category">
                            <div class="container">
                                <div class="tab-content text-center">
                                    <div class="title-product">
                                        <h2>FEATURED CATEGORIES</h2>
                                        <p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR</p>
                                    </div>
                                    <div class="featured owl-carousel owl-theme">
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/27.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Side Table</a>
                                                </h3>
                                                <p>Discover 120 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/28.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Arm Chair</a>
                                                </h3>
                                                <p>Discover 35 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/29.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Dinner Table</a>
                                                </h3>
                                                <p>Discover 127 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/30.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Pillow</a>
                                                </h3>
                                                <p>Discover 130 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/31.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Wall Clock</a>
                                                </h3>
                                                <p>Discover 47 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/32.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Lamp</a>
                                                </h3>
                                                <p>Discover 20 Products </p>
                                            </div>
                                        </div>
                                        <div class="content-category">
                                            <div class="content-img">
                                                <a href="/product-grid-sidebar-left">
                                                    <img class="img-fluid" src="{{asset('img/product/33.jpg')}}" alt= "">Side Table" title="Side Table">
                                                </a>
                                            </div>
                                            <div class="info-category">
                                                <h3>
                                                    <a href="/product-grid-sidebar-left">Soffa</a>
                                                </h3>
                                                <p>Discover 12 Products </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner -->
                        <div class="group-image-special">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 pa-right">
                                        <div class="block">
                                            <div class="effect">
                                                <div class="content">
                                                    <span>Side tablet</span>
                                                    <p>Collections</p>
                                                </div>
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('img/home/effect13.jpg')}}" alt= ""> title="banner-1">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 pa-left">
                                        <div class="block">
                                            <div class="effect ">
                                                <div class="content content2">
                                                    <span>wall shelves</span>
                                                    <p>Collections</p>
                                                </div>
                                                <a href="#">
                                                    <img class="img-fluid" src="{{asset('img/home/effect12.jpg')}}" alt= ""> title="banner-2">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--FEATURED PRODUCTS -->
                        <div class="featured-product">
                            <div class="container">
                                <div class="title-tab-content  text-center">
                                    <div class="title-product justify-content-between">
                                        <h2>FEATURED PRODUCTS</h2>
                                        <p>LOREM IPSUM DOLOR SIT AMET CONSECTETUR </p>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/1.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/22.jpg')}}" alt= "">
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
                                                            <span class="price">£28.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/2.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg')}}" alt= "">
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
                                                            <span class="price">£31.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/3.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg')}}" alt= "">
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
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/5.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg')}}" alt= "">
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
                                                            <span class="price">£32.98</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/8.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg')}}" alt= "">
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
                                                            <span class="price">£34.54</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/11.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/12.jpg')}}" alt= "">
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
                                                            <span class="price">£21.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/13.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/23.jpg')}}" alt= "">
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
                                                            <span class="price">£36.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/18.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg')}}" alt= "">
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
                                                            <span class="price">£56.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/26.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg')}}" alt= "">
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
                                                            <span class="price">£66.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item text-center col-20">
                                        <div class="product-miniature js-product-miniature item-one first-item">
                                            <div class="thumbnail-container">
                                                <a href="/product-detail">
                                                    <img class="img-fluid image-cover" src="{{asset('img/product/25.jpg')}}" alt= "">
                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/20.jpg')}}" alt= "">
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
                                                            <span class="price">£26.08</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center">
                                                    <form action="#" method="post" class="formAddToCart">
                                                        <input type="hidden" name="id_product" value="1">
                                                        <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </form>
                                                    <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                    </a>
                                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
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
                    <div class="no-gutters row">
                        <div class="col-lg-4 col-md-4 contact-box">
                            <div class="block">
                                <div class="block-content">
                                    <p class="text-center">
                                        <img src="{{asset('img/home/footer-icon1.png')}}" alt= "">icon phone">
                                    </p>
                                    <h2 class="text-center">Phone number</h2>
                                    <p class="text-center">+0012-345-67890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 contact-box">
                            <div class="block">
                                <div class="block-content">
                                    <p class="text-center">
                                        <img src="{{asset('img/home/footer-icon2.png')}}" alt= "">icon map">
                                    </p>
                                    <h2 class="text-center">Address</h2>
                                    <p class="text-center">123 Suspendis matti, Visaosang Building VST District NY Accums</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 contact-box">
                            <div class="block">
                                <div class="block-content">
                                    <p class="text-center">
                                        <img src="{{asset('img/home/footer-icon3.png')}}" alt= "">icon map">
                                    </p>
                                    <h2 class="text-center">Email</h2>
                                    <p class="text-center">support@domain.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="no-padding col-md-12 col-sm-12 col-xs-12">
                            <div class="block block-map">
                                <div class="toggle-map">
                                    <div class="label-map label-map-show">Show Map
                                        <p>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div class="label-map label-map-close">Close Map
                                        <p>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </p>
                                    </div>
                                    <div id="click-map">
                                        <button class="btn-showmap"></button>
                                        <button class="btn-showmap-close">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3785754726428!2d105.78134315594316!3d21.01753304734255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ab43c0c4db%3A0xdb6effebd6991106!2sKeangnam+Hanoi+Landmark+Tower!5e0!3m2!1svi!2s!4v1530175498947" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                            <div class="block m-top">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img src="{{asset('img/home/logo.png')}}" alt= "">
                                    </p>
                                    <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incidi
                                        dunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                                    <span>Duis aute irure dolor in reprehenderit in voluptate velit exercitation ullamco</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="block m-top">
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
                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                            <div class="block m-top">
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
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
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
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept:
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="{{asset('img/home/payment.png')}}" alt= "">
                                        </div>
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
                <div class="border-copyright">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<span class="f-left">
								<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
							</span>
						</div>

						<div class="col-lg-6 col-md-6">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-list">
                <div class="list-item">
                    <div class="block">
                        <div class="block-content">
                            <ul class="list-inline">
                                <li class="name-list list-inline-item">
                                    <span>LIVING ROOM</span> :</li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SIDE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">FIREPLACE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">ARMCHAIR </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CUSHION</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">COFFEE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SHELF</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SOFA</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">DRESSING TABLE</a>
                                </li>
                                <li class="list-inline-item views">
                                    <a href="/product-grid-sidebar-left">VIEW ALL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="block">
                        <div class="block-content">
                            <ul class="list-inline">
                                <li class="name-list list-inline-item">
                                    <span>KITCHEN</span> :</li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">WINDOW CURTAIN</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CHANDELIER</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CEILING FAN </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">WARDROBE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">FLOOR LAMP</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">VASE FLOWER</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SIDE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">FIREPLACE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">TABLE LAMP</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">ARMCHIRM</a>
                                </li>
                                <li class="list-inline-item views">
                                    <a href="/product-grid-sidebar-left">VIEW ALL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="block">
                        <div class="block-content">
                            <ul class="list-inline">
                                <li class="name-list list-inline-item">
                                    <span>BEDROOM</span> :</li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SIDE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">FIREPLACE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">ARMCHAIR </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CUSHION</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">COFFEE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SHELF</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SOFA</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">DRESSING TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">WINDOW CURTAIN</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CHANDELIER</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CEILING FAN</a>
                                </li>
                                <li class="list-inline-item views">
                                    <a href="/product-grid-sidebar-left">VIEW ALL</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="block">
                        <div class="block-content">
                            <ul class="list-inline">
                                <li class="name-list list-inline-item">
                                    <span>BATHROOM</span> :</li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SIDE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">FIREPLACE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">ARMCHAIR </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">CUSHION</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">COFFEE TABLE</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SHELF</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">SOFA</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="/product-grid-sidebar-left">DRESSING TABLE</a>
                                </li>
                                <li class="list-inline-item views">
                                    <a href="/product-grid-sidebar-left">VIEW ALL</a>
                                </li>
                            </ul>
                        </div>
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
                                <img src="{{asset('img/home/table-lamp.png')}}" alt= "">SIDE TABLE</a>
                            <span class="arrow collapsed" data-toggle="collapse" data-target="#SIDE-TABLE" aria-expanded="false" role="status">
                                <i class="zmdi zmdi-minus"></i>
                                <i class="zmdi zmdi-plus"></i>
                            </span>
                            <div class="subCategory collapse" id="SIDE-TABLE" aria-expanded="true" role="status">
                                <ul>
                                    <li class="item">
                                        <a href="#" title="Aliquam lobortis">Aliquam lobortis</a>
                                    </li>
                                    <li class="item  parent-submenu parent">
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
                                <img src="{{asset('img/home/fireplace.png')}}" alt= "">FIREPLACE
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
                                <img src="{{asset('img/home/table-lamp.png')}}" alt= "">TABLE LAMP</a>
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
                                <img src="{{asset('img/home/ottoman.png')}}" alt= "">OTTOMAN
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="ARMCHAIR">
                                <img src="{{asset('img/home/armchair.png')}}" alt= "">ARMCHAIR
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CUSHION">
                                <img src="{{asset('img/home/cushion.png')}}" alt= "">CUSHION
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="COFFEE TABLE">
                                <img src="{{asset('img/home/coffee_table.png')}}" alt= "">COFFEE TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SHELF">
                                <img src="{{asset('img/home/shelf.png')}}" alt= "">SHELF
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="SOFA">
                                <img src="{{asset('img/home/sofa.png')}}" alt= "">SOFA
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="DRESSING TABLE">
                                <img src="{{asset('img/home/dressing.png')}}" alt= "">DRESSING TABLE</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                                <img src="{{asset('img/home/windown.png')}}" alt= "">WINDOWN CURTAIN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CHANDELIER">
                                <img src="{{asset('img/home/chandelier.png')}}" alt= "">CHANDELIER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="CEILING FAN">
                                <img src="{{asset('img/home/ceiling_fan.png')}}" alt= "">CEILING FAN</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="WARDROBE">
                                <img src="{{asset('img/home/wardrobe.png')}}" alt= "">WARDROBE
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="FLOOR LAMP">
                                <img src="{{asset('img/home/floor_lamp.png')}}" alt= "">FLOOR LAMP</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="VASE-FLOWER ">
                                <img src="{{asset('img/home/vase-flower.png')}}" alt= "">VASE-FLOWER
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED">
                                <img src="{{asset('img/home/bed.png')}}" alt= "">BED
                            </a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED GIRL">
                                <img src="{{asset('img/home/bed.png')}}" alt= "">BED GIRL</a>
                        </li>
                        <li class="item">
                            <a href="#" class="hasicon" title="BED BOY">
                                <img src="{{asset('img/home/bed.png')}}" alt= "">BED BOY</a>
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
                                           / <a href="/home2.blade.php" title="Home Page 2">Home Page 2</a>
                                        </li>
                                        <li class="item">
                                            <a href="/home3" title="Home Page 3">Home Page 3</a>
                                        </li>
                                        <li class="item">
                                           / <a href="/home4" title="Home Page 4">Home Page 4</a>
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
                                                                    <a href="/404">404 Page</a>
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

    <!-- Vendor JS -->
    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/popper/popper.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="js/theme.js"></script>
</body>


<!-- home409:49-->
</html>
