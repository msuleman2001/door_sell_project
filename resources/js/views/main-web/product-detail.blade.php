@include('main-web.includes.links');


<body id="product-detail">
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
                <a href="/index-2">
                    <img class="logo-mobile img-fluid" src="{{asset('img/home/logo-mobie.png')}}" alt="Prestashop_Furnitica">
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
                                            <img src="{{asset('img/product/5.jpg')}}" alt="Product">
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
                                            <a href="product-checkout" title="Checkout">Checkout</a>
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
                        <a href="/index-2">
                            <img src="{{asset('img/home/logo.png')}}" alt="logo" class="img-fluid">
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
                                            <a href="/index-2" title="Home Page 1">Home Page 1</a>
                                        </li>
                                        <li class="item">
                                           / <a href="/home2" title="Home Page 2">Home Page 2</a>
                                        </li>
                                        <li class="item">
                                           / <a href="/home3" title="Home Page 3">Home Page 3</a>
                                        </li>
                                        <li class="item">
                                           / <a href="/home4" title="Home Page 4">Home Page 4</a>
                                        </li>
                                        <li class="item">
                                           / <a href="/home5" title="Home Page 5">Home Page 5</a>
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
                                    <a class="login" href="user-acount" rel="nofollow" title="Log in to your customer account">
                                        <i class="fa fa-cog"></i>
                                        <span>My Account</span>
                                    </a>
                                </div>
                                <div>
                                    <a class="login" href="user-login" rel="nofollow" title="Log in to your customer account">
                                        <i class="fa fa-sign-in"></i>
                                        <span>Sign in</span>
                                    </a>
                                </div>
                                <div>
                                    <a class="register" href="user-register" rel="nofollow" title="Register Account">
                                        <i class="fa fa-user"></i>
                                        <span>Register Account</span>
                                    </a>
                                </div>
                                <div>
                                    <a class="check-out" href="product-checkout" rel="nofollow" title="Checkout">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        <span>Checkout</span>
                                    </a>
                                </div>
                                <div class="link_wishlist">
                                    <a href="user-wishlist" title="My Wishlists">
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
                                                <img class="img-fluid" src="{{asset('img/home/home1-flas.jpg')}}" alt="English" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('img/home/home1-flas2.jpg')}}" alt="Italiano" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('img/home/home1-flas3.jpg')}}" alt="Français" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="{{asset('img/home/home1-flas4.jpg')}}" alt="Español" width="16" height="11">
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
                                                    <img src="{{asset('img/product/5.jpg')}}" alt="Product">
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
                                                    <a href="product-checkout" title="Checkout">Checkout</a>
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
            <div id="main">
                <div class="page-home">

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
                                            <span>Living Room</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span>Sofa</span>
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="content">
                            <div class="row">
                                <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                    <!-- category -->
                                    <div class="sidebar-block">
                                        <div class="title-block">Categories</div>
                                        <div class="block-content">
                                            <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                <a class="cateItem" href="#">Living Room</a>
                                                <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">Side Table</a>
                                                        <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">Side Table</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">FIREPLACE</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">FIREPLACE</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">floor lamp</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">ottoman</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">armchair</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">cushion</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">FIREPLACE</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">FIREPLACE</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">floor lamp</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">ottoman</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">armchair</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">cushion</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                <a class="cateItem" href="#">Bathroom</a>
                                                <div class="subCategory collapse" id="bathroom">
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">TOMATO</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">BROCCOLI</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">CABBAGE</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">CUCUMBER</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">EGGPLANT</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                <a class="cateItem" href="#">Dining Rooom</a>
                                                <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">DRY BREAD</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">BREAD SLICES</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">FRENCH BREAD</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">BLACK BREAD</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                <a class="cateItem" href="#">BedRoom</a>
                                                <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">ORANGE JUICES</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">TOMATO JUICES</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">APPLE JUICES</a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="cateTitle hasSubCategory open level1">
                                                    <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen">
                                                        <i class="zmdi zmdi-minus"></i>
                                                        <i class="zmdi zmdi-plus"></i>
                                                    </span>
                                                <a class="cateItem" href="#">Kitchen</a>
                                                <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">ORANGE JUICES</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">TOMATO JUICES</a>
                                                    </div>
                                                    <div class="cateTitle">
                                                        <a href="#" class="cateItem">APPLE JUICES</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- best seller -->
                                    <div class="sidebar-block">
                                        <div class="title-block">
                                            Best seller
                                        </div>
                                        <div class="product-content tab-content">
                                            <div class="row">
                                                <div class="item col-md-12">
                                                    <div class="product-miniature item-one first-item d-flex">
                                                        <div class="thumbnail-container border">
                                                            <a href="/product-detail">
                                                                <img class="img-fluid image-cover" src="{{asset('img/product/1.jpg')}}" alt="img">
                                                                <img class="img-fluid image-secondary" src="{{asset('img/product/22.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-title">
                                                                    <a href="/product-detail">Nulla et justo augue</a>
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item col-md-12">
                                                    <div class="product-miniature item-one first-item d-flex">
                                                        <div class="thumbnail-container border">
                                                            <a href="/product-detail">
                                                                <img class="img-fluid image-cover" src="{{asset('img/product/2.jpg')}}" alt="img">
                                                                <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-title">
                                                                    <a href="/product-detail">Nulla et justo augue</a>
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item col-md-12">
                                                    <div class="product-miniature item-one first-item d-flex">
                                                        <div class="thumbnail-container border">
                                                            <a href="/product-detail">
                                                                <img class="img-fluid image-cover" src="{{asset('img/product/3.jpg')}}" alt="img">
                                                                <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg')}}" alt="img">
                                                            </a>
                                                        </div>
                                                        <div class="product-description">
                                                            <div class="product-groups">
                                                                <div class="product-title">
                                                                    <a href="/product-detail">Nulla et justo augue</a>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- product tag -->
                                    <div class="sidebar-block product-tags">
                                        <div class="title-block">
                                            Product Tags
                                        </div>
                                        <div class="block-content">
                                            <ul class="listSidebarBlog list-unstyled">
                                                <li>
                                                    <a href="#" title="Show products matching tag Hot Trend">Hot Trend</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Jewelry">Jewelry</a>
                                                </li>

                                                <li>
                                                    <a href="man" title="Show products matching tag Man">Man</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Party">Party</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag SamSung">SamSung</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Shirt Dresses">Shirt Dresses</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Shoes">Shoes</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Summer">Summer</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Sweaters">Sweaters</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Winter">Winter</a>
                                                </li>

                                                <li>
                                                    <a href="#" title="Show products matching tag Woman">Woman</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-lg-9 col-md-9">
                                    <div class="main-product-detail">
                                        <h2>{{$product_details->product_title}}</h2>
                                        <div class="product-single row">
                                            <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                <div class="page-content" id="content">
                                                    <div class="images-container">
                                                        <div class="js-qv-mask mask tab-content border">
                                                            <div id="item1" class="tab-pane fade active in show">
                                                                <img src="{{asset($product_details->product_front_image)}}" alt="img">
                                                            </div>
                                                            <div id="item2" class="tab-pane fade">
                                                                <img src="{{asset('img/product/2.jpg')}}" alt="img">
                                                            </div>
                                                            <div id="item3" class="tab-pane fade">
                                                                <img src="{{asset('img/product/3.jpg')}}" alt="img">
                                                            </div>
                                                            <div id="item4" class="tab-pane fade">
                                                                <img src    ="{{asset('img/product/5.jpg')}}" alt="img">
                                                            </div>
                                                            <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                <i class="fa fa-expand"></i>
                                                            </div>
                                                        </div>
                                                        <ul class="product-tab nav nav-tabs d-flex">
                                                            <li class="active col">
                                                                <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                                    <img src="{{asset($product_details->product_front_image)}}" alt="img">
                                                                </a>
                                                            </li>
                                                            <li class="col">
                                                                <a href="#item2" data-toggle="tab">
                                                                    <img src="{{asset('img/product/2.jpg')}}" alt="img">
                                                                </a>
                                                            </li>
                                                            <li class="col">
                                                                <a href="#item3" data-toggle="tab">
                                                                    <img src="{{asset('img/product/3.jpg')}}" alt="img">
                                                                </a>
                                                            </li>
                                                            <li class="col">
                                                                <a href="#item4" data-toggle="tab">
                                                                    <img src="{{asset('img/product/5.jpg')}}" alt="img">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="modal fade" id="product-modal" role="dialog">
                                                            <div class="modal-dialog">

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <div class="modal-body">
                                                                            <div class="product-detail">
                                                                                <div>
                                                                                    <div class="images-container">
                                                                                        <div class="js-qv-mask mask tab-content">
                                                                                            <div id="modal-item1" class="tab-pane fade active in show">
                                                                                                <img src="{{asset('img/product/1.jpg')}}" alt="img">
                                                                                            </div>
                                                                                            <div id="modal-item2" class="tab-pane fade">
                                                                                                <img src="{{asset('img/product/2.jpg')}}" alt="img">
                                                                                            </div>
                                                                                            <div id="modal-item3" class="tab-pane fade">
                                                                                                <img src="{{asset('img/product/3.jpg')}}" alt="img">
                                                                                            </div>
                                                                                            <div id="modal-item4" class="tab-pane fade">
                                                                                                <img src="{{asset('img/product/5.jpg')}}" alt="img">
                                                                                            </div>
                                                                                        </div>
                                                                                        <ul class="product-tab nav nav-tabs">
                                                                                            <li class="active">
                                                                                                <a href="#modal-item1" data-toggle="tab" class=" active show">
                                                                                                    <img src="{{asset('img/product/1.jpg')}}" alt="img">
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#modal-item2" data-toggle="tab">
                                                                                                    <img src="{{asset('img/product/2.jpg')}}" alt="img">
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#modal-item3" data-toggle="tab">
                                                                                                    <img src="{{asset('img/product/3.jpg')}}" alt="img">
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="#modal-item4" data-toggle="tab">
                                                                                                    <img src="{{asset('img/product/5.jpg')}}" alt="img">
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
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                <div class="detail-description">
                                                    <div class="price-del">
                                                        <span class="price">{{$product_details->product_price}}$</span>
                                                        <span class="float-right">
                                                                <span class="availb">Availability: </span>
                                                                <span class="check">
                                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK</span>
                                                            </span>
                                                    </div>
                                                    <p class="description">{{$product_details->product_details}}</p>
                                                    <div class="option has-border d-lg-flex size-color">
                                                        <div class="size">
                                                            <span class="size">size :</span>
                                                            <select>
                                                                <option value="">Choose your size</option>
                                                                <option value="">M</option>
                                                                <option value="">l</option>
                                                                <option value="">xl</option>
                                                            </select>
                                                        </div>
                                                        <div class="colors">
                                                            <b class="title">Color : </b>
                                                            <span class="blue"></span>
                                                            <span class="yellow"></span>
                                                            <span class="pink"></span>
                                                            <span class="green"></span>
                                                            <span class="brown"></span>
                                                            <span class="red"></span>
                                                        </div>
                                                    </div>
                                                    <div class="has-border cart-area">
                                                        <div class="product-quantity">
                                                            <div class="qty">
                                                                <div class="input-group">
                                                                    <div class="quantity">
                                                                        <span class="control-label">QTY : </span>
                                                                        <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control">

                                                                        <span class="input-group-btn-vertical">
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                    +
                                                                                </button>
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                    -
                                                                                </button>
                                                                            </span>
                                                                    </div>
                                                                    <span class="add">
                                                                            <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                <span>  Add  to cart</span>
                                                                            </button>
                                                                            <a class="addToWishlist" href="#">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <p class="product-minimal-quantity">
                                                        </p>
                                                    </div>
                                                    <div class="d-flex2 has-border">
                                                        <div class="btn-group">
                                                            <a href="#">
                                                                <i class="zmdi zmdi-share"></i>
                                                                <span>Share</span>
                                                            </a>
                                                            <a href="#" class="email">
                                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                <span>SEN TO A FRIEND</span>
                                                            </a>
                                                            <a href="#" class="print">
                                                                <i class="zmdi zmdi-print"></i>
                                                                <span>Print</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="rating-comment has-border d-flex">
                                                        <div class="review-description d-flex">
                                                            <span>REVIEW : </span>
                                                            <div class="rating">
                                                                <div class="star-content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="read after-has-border">
                                                            <a href="#review">
                                                                <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                <span>READ REVIEWS (3)</span>
                                                            </a>
                                                        </div>
                                                        <div class="apen after-has-border">
                                                            <a href="#review">
                                                                <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                <span>WRITE A REVIEW</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="content">
                                                        <p>SKU :
                                                            <span class="content2">
                                                                    <a href="#">{{$product_details->product_sku}}</a>
                                                                </span>
                                                        </p>
                                                        <p>Categories :
                                                            <span class="content2">
                                                                    <a href="#">Clothing</a>,
                                                                    <a href="#">Men's Jackets</a>
                                                                </span>
                                                        </p>
                                                        <p>tags :
                                                            <span class="content2">
                                                                    <a href="#">Jacket</a>,
                                                                    <a href="#">Overcoat</a>,
                                                                    <a href="#">Luxury</a>,
                                                                    <a href="#">men</a>,
                                                                    <a href="#">summer</a>,
                                                                    <a href="#">autumn</a>
                                                                </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review">
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a data-toggle="tab" href="#description" class="active show">Description</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#tag">Product Tags</a>
                                                </li>
                                                <li>
                                                    <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div id="description" class="tab-pane fade in active show">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>

                                                <div id="review" class="tab-pane fade">
                                                    <div class="spr-form">
                                                        <div class="user-comment">
                                                            <div class="spr-review">
                                                                <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>Peter Capidal</strong> -
                                                                            <span>Apr 14, 2018</span>
                                                                        </span>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                        eu. Proin massa justo, eleifend fermentum varius
                                                                        quis, semper gravida quam. Cras nec enim sed
                                                                        lacus viverra luctus. Nunc quis accumsan mauris.
                                                                        Aliquam fermentum sit amet est id scelerisque.
                                                                        Nam porta risus metus.</p>
                                                                </div>
                                                            </div>
                                                            <div class="spr-review preview2">
                                                                <div class="spr-review-header">
                                                                        <span class="spr-review-header-byline">
                                                                            <strong>David James</strong> -
                                                                            <span>Apr 13, 2018</span>
                                                                        </span>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="spr-review-content">
                                                                    <p class="spr-review-content-body">In feugiat venenatis enim, non finibus metus bibendum
                                                                        eu. Proin massa justo, eleifend fermentum varius
                                                                        quis, semper gravida quam. Cras nec enim sed
                                                                        lacus viverra luctus. Nunc quis accumsan mauris.
                                                                        Aliquam fermentum sit amet est id scelerisque.
                                                                        Nam porta risus metus.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form method="post" action="#" class="new-review-form">
                                                        <input type="hidden" name="review[rating]" value="3">
                                                        <input type="hidden" name="product_id">
                                                        <h3 class="spr-form-title">Write a review</h3>
                                                        <fieldset>
                                                            <div class="spr-form-review-rating">
                                                                <label class="spr-form-label">Your Rating</label>
                                                                <fieldset class="ratings">
                                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                    <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                    <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                                    <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                    <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                    <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                    <input type="radio" id="starhalf" name="rating" value="half" />
                                                                </fieldset>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset class="spr-form-contact">
                                                            <div class="spr-form-contact-name">
                                                                <input class="spr-form-input spr-form-input-text form-control" value="" placeholder="Enter your name">
                                                            </div>
                                                            <div class="spr-form-contact-email">
                                                                <input class="spr-form-input spr-form-input-email form-control" value="" placeholder="Enter your email">
                                                            </div>
                                                        </fieldset>
                                                        <fieldset>
                                                            <div class="spr-form-review-body">
                                                                <div class="spr-form-input">
                                                                    <textarea class="spr-form-input-textarea" rows="10" placeholder="Write your comments here"></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="submit">
                                                            <input type="submit" name="addComment" id="submitComment" class="btn btn-default" value="Submit Review">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div id="tag" class="tab-pane fade in">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                        ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="related">
                                            <div class="title-tab-content  text-center">
                                                <div class="title-product justify-content-start">
                                                    <h2>Related Products</h2>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border border">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid image-cover" src="{{asset('img/product/1.jpg')}}" alt="img">
                                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/22.jpg')}}" alt="img">
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
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid image-cover" src="{{asset('img/product/2.jpg')}}" alt="img">
                                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/11.jpg')}}" alt="img">
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
                                                    <div class="item text-center col-md-4">
                                                        <div class="product-miniature js-product-miniature item-one first-item">
                                                            <div class="thumbnail-container border">
                                                                <a href="/product-detail">
                                                                    <img class="img-fluid image-cover" src="{{asset('img/product/3.jpg')}}" alt="img">
                                                                    <img class="img-fluid image-secondary" src="{{asset('img/product/14.jpg')}}" alt="img">
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
                                    <img src="{{asset('img/home/logo.png')}}" alt="img">
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
                                    <img class="img-fluid" src="{{asset('img/home/payment-footer.png')}}" alt="img">
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
                                        <img class="img-fluid" src="{{asset('img/home/payment.png')}}" alt="img">
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
    <div id="desktop_verticalmenu" class="tiva-verticalmenu block" data-count_showmore="17">
        <div class="box-content block-content">
            <div class="verticalmenu" role="navigation">
                <ul class="menu level1">
                    <li class="item  parent">
                        <a href="#" class="hasicon" title="SIDE TABLE">
                            <img src="{{asset('img/home/table-lamp.png')}}" alt="img">SIDE TABLE</a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#SIDE-TABLE">
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
                                    <span class="arrow collapsed" data-toggle="collapse" data-target="#sub-Category">
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
                            <img src="{{asset('img/home/fireplace.png')}}" alt="img">FIREPLACE
                        </a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#fi">
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
                            <img src="{{asset('img/home/table-lamp.png')}}" alt="img">TABLE LAMP</a>
                        <span class="arrow collapsed" data-toggle="collapse" data-target="#table-lamp">
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
                            <img src="{{asset('img/home/ottoman.png')}}" alt="img">OTTOMAN
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="ARMCHAIR">
                            <img src="{{asset('img/home/armchair.png')}}" alt="img">ARMCHAIR
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CUSHION">
                            <img src="{{asset('img/home/cushion.png')}}" alt="img">CUSHION
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="COFFEE TABLE">
                            <img src="{{asset('img/home/coffee_table.png')}}" alt="img">COFFEE TABLE</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="SHELF">
                            <img src="{{asset('img/home/shelf.png')}}" alt="img">SHELF
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="SOFA">
                            <img src="{{asset('img/home/sofa.png')}}" alt="img">SOFA
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="DRESSING TABLE">
                            <img src="{{asset('img/home/dressing.png')}}" alt="img">DRESSING TABLE</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="WINDOWN CURTAIN">
                            <img src="{{asset('img/home/windown.png')}}" alt="img">WINDOWN CURTAIN</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CHANDELIER">
                            <img src="{{asset('img/home/chandelier.png')}}" alt="img">CHANDELIER
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="CEILING FAN">
                            <img src="{{asset('img/home/ceiling_fan.png')}}" alt="img">CEILING FAN</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="WARDROBE">
                            <img src="{{asset('img/home/wardrobe.png')}}" alt="img">WARDROBE
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="FLOOR LAMP">
                            <img src="{{asset('img/home/floor_lamp.png')}}" alt="img">FLOOR LAMP</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="VASE-FLOWER ">
                            <img src="{{asset('img/home/vase-flower.png')}}" alt="img">VASE-FLOWER
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED">
                            <img src="{{asset('img/home/bed.png')}}" alt="img">BED
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED GIRL">
                            <img src="{{asset('img/home/bed.png')}}" alt="img">BED GIRL</a>
                    </li>
                    <li class="item">
                        <a href="#" class="hasicon" title="BED BOY">
                            <img src="{{asset('img/home/bed.png')}}" alt="img">BED BOY</a>
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
                            <a href="/index-2" title="Home">
                                <i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            <div class="subCategory collapse" id="home1" aria-expanded="true" role="status">
                                <ul>
                                    <li class="item">
                                        <a href="/index-2" title="Home Page 1">Home Page 1</a>
                                    </li>
                                    <li class="item">
                                       / <a href="/home2" title="Home Page 2">Home Page 2</a>
                                    </li>
                                    <li class="item">
                                       / <a href="/home3" title="Home Page 3">Home Page 3</a>
                                    </li>
                                    <li class="item">
                                       / <a href="/home4" title="Home Page 4">Home Page 4</a>
                                    </li>
                                    <li class="item">
                                       / <a href="/home5" title="Home Page 5">Home Page 5</a>
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

<!-- Template JS -->
<script src="js/theme.js"></script>
</body>


<!-- product-detail07:06-->
</html>