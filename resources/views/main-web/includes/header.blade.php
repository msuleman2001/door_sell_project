
<header class="navbar" style="opacity: 1;">
    <!-- navbar-sticky -->
    <div class="navigation" style="margin-top: 0px;">
        <!-- Site Logo -->
        <a href="index.html" class="site-logo">
            <img src="{{asset('storage/img/logo.png')}}" alt="logo">
        </a>
        <!-- site-logo.visible-desktop -->
        <!-- Toolbar -->
        <div class="toolbar">
            <div class="inner">
                <a href="#menu" class="toolbar-toggle">
                    <i class="ti-menu"></i>
                </a>
                <a href="#account" class="toolbar-toggle">
                    <i class="ti-user"></i>
                </a>
                <a href="#cart" class="toolbar-toggle">
                    <i class="ti-bag"></i>
                </a>
            </div>
        </div>
        <!-- .toolbar -->

        <!-- Toolbar Dropdown -->
        <div class="toolbar-dropdown">
            <!-- Menu -->
            <div class="toolbar-section" id="menu">
                <div class="inner">
                    <div class="menu-items">
                        <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">
                            <div class="sidebar-block">
                                <div class="title-block">Categories</div>
                                <div class="block-content">
                                    @foreach($categories as $category)
                                        <div class="cateTitle hasSubCategory open level1">
                    <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#collapse{{$category->category_id}}">
                        <i class="zmdi zmdi-minus"></i>
                        <i class="zmdi zmdi-plus"></i>
                    </span>
                                            <a class="cateItem" href="{{url('/',['category_id'=>$category->category_id])}}">{{$category->category_name}}</a>
                                            <div class="subCategory collapse" id="collapse{{$category->category_id}}" aria-expanded="false">
                                                <div class="cateTitle">
                                                    @foreach ($category['sub_categories'] as $sub_category)
                                                        <a class="cateItem" href="{{url('/',['sub_category_id'=>$sub_category->category_id])}}" title="{{ $sub_category->category_name }}">{{ $sub_category->category_name }}</a><br>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- .inner -->
            </div>
            <!-- .toolbar-section#menu -->
            <div class="toolbar-section" id="account">
                <div class="inner">
                    <div class="login-panel">
                        <h3>CUSTOMER LOGIN</h3>
                        <form action="" method="">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="Password">
                            <a href="#" id="forget-pass">Forgot your password?</a>
                            <div class="checkbox">
                                <label class="check">
                                    <input id="" type="checkbox" value="" />
                                    <div class="box"></div>
                                </label>
                                <span>Remember Me</span>
                                <button class="btn-submit" type="submit">Login</button>
                            </div>
                        </form>
                        <p>Don’t have an account?
                            <a href="">Signup</a> here</p>
                    </div>
                </div>
            </div>
            <!-- .toolbar-section#login -->
            <!-- Cart -->
            <div class="toolbar-section cart" id="cart">
                <div class="inner">
                    <!-- <div class="empty-page-content text-center">
                            <h1>Shopping Cart</h1>
                            <p class="cart-empty-message mb-5">Your cart is currently empty.</p>
                            <a href="/" class="btn btn-primary">Go To Shop</a>
                        </div> -->
                    <ul class="cart-list">
                        <li class="cart-item">
                            <div class="cart-item-image">
                                <img class="img-fluid" src="{{asset('storage/images/cart/item-1.jpg')}}" alt="product-image">
                            </div>
                            <div class="cart-item-details">
                                <h6>D9 White wooden chair</h6>
                                <p>Unit Price:
                                    <span>$189</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="ti-minus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-item-price">$289</div>
                            <div class="cart-item-cancel">
                                <a href="#">
                                    <i class="ti-close"></i>
                                </a>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="cart-item-image">
                                <img class="img-fluid" src="{{asset('storage/images/cart/item-2.jpg')}}" alt="product-image">
                            </div>
                            <div class="cart-item-details">
                                <h6>D8 Green wooden chair</h6>
                                <p>Unit Price:
                                    <span>$189</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="ti-minus"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="ti-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-item-price">$192</div>
                            <div class="cart-item-cancel">
                                <a href="#">
                                    <i class="ti-close"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary mr-3">view cart</a>
                    <a href="#" class="btn btn-secondary">checkout</a>
                </div>
                <!-- .inner -->
            </div>
            <!-- .toolbar-section#account -->
            <div class="toolbar-section search" id="search">
                <div class="inner">
                    <div class="search-panel">
                        <form action="/search" method="get" class="row" role="search">
                            <div class="col-lg-9 col-sm-9">
                                <input class="search-box" type="search" name="q" placeholder="Search our store" aria-label="Search our store">
                            </div>
                            <div class="col-lg-3 col-sm-3">
                                <button class="btn-submit" type="submit" value="send"> search </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- .shopping-cart -->
            </div>
            <!-- .toolbar-section#cart -->
            <!-- Cart -->
        </div>
        <!-- .toolbar-dropdown -->
    </div>
</header>
