<header>
    <button type="button" class="btn btn-outline-primary login-btn" data-toggle="modal" data-target="#exampleModal">
        Login
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mx-auto " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form  method="post" action="{{route('userLogin')}}">
                                @csrf
                                <h4>Login</h4>
                                <hr>
                                <div class="form-group text-sm">
                                    <label for="loginEmail">Username<sup>*</sup></label>
                                    <input name="user_name"  type="text" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="loginPassword">Password<sup>*</sup></label>
                                    <input type="password" class="form-control" id="loginPassword" placeholder="Password" name="user_password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-md rounded-0">Login</button>

                            </form>
                        </div>
                        <div class="col-md-6">
                            <form  method="post" action="{{route('userRegister')}}">
                                @csrf
                                <h4>Register</h4>
                                <hr>
                                <label for="registerName">Username<sup>*</sup></label>
                                <input name="user_name" type="text" id="form3Example1c" class="form-control" >

                                <label for="registerEmail">Email address<sup>*</sup></label>
                                <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp"
                                       placeholder="Enter email" name="user_email">


                                <label for="registerPassword">Password<sup>*</sup></label>
                                <input type="password" class="form-control" id="registerPassword" placeholder="Password" name="user_password">

                                <button type="submit" class="btn btn-primary btn-md rounded-0">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- header left mobie -->
    <div class="header-mobile d-md-none">
        <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

            <!-- menu left -->
            <div id="mobile_mainmenu" class="item-mobile-top">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            <!-- logo -->
            <div class="mobile-logo">
                <a href="/door-shop2">
                    <img class="logo-mobile img-fluid" src="{{asset('storage/img/home/logo-mobile.png')}}" alt="Prestashop_Furnitica">
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
                                    <td colspan="3" class="d-flex justify-content-center">
                                        <div class="cart-button">
                                            <a href="{{route('review.cart')}}" title="View Cart">View Cart</a>
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
                            <img class="img-fluid" src="{{asset('storage/img/home/logo.png')}}"alt= "">
                        </a>
                    </div>
                </div>

                <!-- menu -->
                <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">

                </div>

                <!-- search-->
                <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                    <form method="get" action="#">
                        @csrf
                        <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

                    <!-- acount  -->
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                        <div class="myaccount-title">
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                @if(session()->has('user'))
                                    <span>{{ session('user')->user_name }}</span>
                                @else
                                <span>Account</span>
                                @endif
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div id="acount" class="collapse">
                            <div class="account-list-content">
                                <div>
                                    <a class="login" href="/user-acount" rel="nofollow" title="Log in to your customer account">
                                        <i class="fa fa-cog"></i>

                                     <span>My Account</span>

                                    </a>
                                </div>
                                <div>
                                    <a class="login" href="{{route('userLogout')}}" rel="nofollow" title="Log out your customer account">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Sign out</span>
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
                                        <i class="fa fa-heart"></i>
                                        <span>My Wishlists</span>
                                    </a>
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
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="{{route('review.cart')}}" title="View Cart">View Cart</a>
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
