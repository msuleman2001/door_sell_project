<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


<!-- product-cart07:06-->
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

    <!-- libs CSS -->
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick.css">
    <link rel="stylesheet" href="libs/slick-slider/css/slick-theme.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reponsive.css">
</head>

<body class="product-cart checkout-cart blog">
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
                                                    <a href="product-cart" title="View Cart">View Cart</a>
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
                                <img src="{{asset('img/home/logo.png')}}" alt= "">logo" class="img-fluid">
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
                                               / <a href="/home2.blade.php" title="Home Page 2">Home Page 2</a>
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
                                <li class="nav-link">
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
                                                            <a href="product-cart" title="View Cart">View Cart</a>
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
    <div class="main-content" id="cart">
        <!-- main -->
        <div id="wrapper-site">
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
                                    <span>Shopping Cart</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <section id="main">
                            <div class="cart-grid row">
                                <div class="col-md-9 col-xs-12 check-info">
                                    <h1 class="title-page">Shopping Cart</h1>
                                    <div class="cart-container">
                                        <div class="cart-overview js-cart">
                                            <ul class="cart-items">
                                                <li class="cart-item">
                                                    <div class="product-line-grid row justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-md-2">
                                                            <span class="product-image media-middle">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid" src="{{asset('img/product/3.jpg')}}" alt= "">Organic Strawberry Fruits">
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="product-line-grid-body col-md-6">
                                                            <div class="product-line-info">
                                                                <a class="label" href="/product-detail" data-id_customization="0">Organic Strawberry Fruits</a>
                                                            </div>
                                                            <div class="product-line-info product-price">
                                                                <span class="value">£20.00</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Size:</span>
                                                                <span class="value">S</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Color:</span>
                                                                <span class="value">Blue</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-5 col qty">
                                                                    <div class="label">Qty:</div>
                                                                    <div class="quantity">
                                                                        <input type="text" name="qty" value="1" class="input-group form-control">

                                                                        <span class="input-group-btn-vertical">
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                +
                                                                            </button>
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                -
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col price">
                                                                    <div class="label">Total:</div>
                                                                    <div class="product-price total">
                                                                        £20.00
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col text-xs-right align-self-end">
                                                                    <div class="cart-line-product-actions ">
                                                                        <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="1">
                                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="cart-item">
                                                    <div class="product-line-grid row justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-md-2">
                                                            <span class="product-image media-middle">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid" src="{{asset('img/product/2.jpg')}}" alt= "">Organic Strawberry Fruits">
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="product-line-grid-body col-md-6">
                                                            <div class="product-line-info">
                                                                <a class="label" href="/product-detail" data-id_customization="0">
                                                                    Etiam Congue Nisl Nec</a>
                                                            </div>
                                                            <div class="product-line-info product-price">
                                                                <span class="value">£30.00</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Size:</span>
                                                                <span class="value">S</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Color:</span>
                                                                <span class="value">Blue</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-5 qty col">
                                                                    <div class="label">Qty:</div>
                                                                    <div class="quantity">
                                                                        <input type="text" name="qty" value="2" class="input-group form-control">

                                                                        <span class="input-group-btn-vertical">
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                +
                                                                            </button>
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                -
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 price col">
                                                                    <div class="label">Total:</div>
                                                                    <div class="product-price total">
                                                                        £60.00
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 text-xs-right align-self-end col">
                                                                    <div class="cart-line-product-actions ">
                                                                        <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="1">
                                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="cart-item">
                                                    <div class="product-line-grid row justify-content-between">
                                                        <!--  product left content: image-->
                                                        <div class="product-line-grid-left col-md-2">
                                                            <span class="product-image media-middle">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid" src="{{asset('img/product/1.jpg')}}" alt= "">Organic Strawberry Fruits">
                                                                </a>
                                                            </span>
                                                        </div>
                                                        <div class="product-line-grid-body col-md-6">
                                                            <div class="product-line-info">
                                                                <a class="label" href="/product-detail" data-id_customization="0">Nulla Et Justo Non Augue</a>
                                                            </div>
                                                            <div class="product-line-info product-price">
                                                                <span class="value">£40.00</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Size:</span>
                                                                <span class="value">S</span>
                                                            </div>
                                                            <div class="product-line-info">
                                                                <span class="label-atrr">Color:</span>
                                                                <span class="value">Blue</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-5 col qty">
                                                                    <div class="label">Qty:</div>
                                                                    <div class="quantity">
                                                                        <input type="text" name="qty" value="3" class="input-group form-control">

                                                                        <span class="input-group-btn-vertical">
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                +
                                                                            </button>
                                                                            <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                -
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5 col price">
                                                                    <div class="label">Total:</div>
                                                                    <div class="product-price total">
                                                                        £120.00
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col text-xs-right align-self-end">
                                                                    <div class="cart-line-product-actions ">
                                                                        <a class="remove-from-cart" rel="nofollow" href="#" data-link-action="delete-from-cart" data-id-product="1">
                                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="/product-checkout" class="continue btn btn-primary pull-xs-right">
                                        Continue
                                    </a>
                                </div>
                                <div class="cart-grid-right col-xs-12 col-lg-3">
                                    <div class="cart-summary">
                                        <div class="cart-detailed-totals">
                                            <div class="cart-summary-products">
                                                <div class="summary-label">There are 3 item in your cart</div>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-products">
                                                <span class="label js-subtotal">
                                                    Total products:
                                                </span>
                                                <span class="value">£200.00</span>
                                            </div>
                                            <div class="cart-summary-line" id="cart-subtotal-shipping">
                                                <span class="label">
                                                    Total Shipping:
                                                </span>
                                                <span class="value">Free</span>
                                                <div>
                                                    <small class="value"></small>
                                                </div>
                                            </div>
                                            <div class="cart-summary-line cart-total">
                                                <span class="label">Total:</span>
                                                <span class="value">£200.00 (tax incl.)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="{{asset('img/product/check1.png')}}" alt= "">Security policy (edit with Customer reassurance module)">
                                                    <span>Security policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="{{asset('img/product/check2.png')}}" alt= "">Delivery policy (edit with Customer reassurance module)">
                                                    <span>Delivery policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="block-reassurance-item">
                                                    <img src="{{asset('img/product/check3.png')}}" alt= "">Return policy (edit with Customer reassurance module)">
                                                    <span>Return policy (edit with Customer reassurance module)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                                        <img src="{{asset('img/home/logo.png')}}" alt= "">
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
                                        <img class="img-fluid" src="{{asset('img/home/payment-footer.png')}}" alt= "">
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
                                            <span>  Add ress :</span>
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
                                            <img class="img-fluid" src="{{asset('img/home/payment.png')}}" alt= "">
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
                                           / <a href="/home2.blade.php" title="Home Page 2">Home Page 2</a>
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
    <script src="libs/slider-range/js/tmpl.js"></script>
    <script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="libs/slider-range/js/draggable-0.1.js"></script>
    <script src="libs/slider-range/js/jquery.slider.js"></script>
    <script src="libs/slick-slider/js/slick.min.js"></script>

    <!-- Template JS -->
    <script src="js/theme.js"></script>
</body>


<!-- product-cart07:12-->
</html>