<header class="navbar" style="opacity: 1;">
    <!-- navbar-sticky -->
    <div class="navigation" style="margin-top: 0px;">
        <!-- Site Logo -->
        <a href="/door/public" class="site-logo">
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
                <a href="#register" class="toolbar-toggle">
                    <i class="ti-pencil-alt"></i>
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
                      @include('main-web.includes.categories');
                    </div>
                </div>
                <!-- .inner -->
            </div>
            <!-- .toolbar-section#menu -->
            <div class="toolbar-section" id="account">
                <div class="inner">
                    <div class="login-panel">
                        <h3>CUSTOMER LOGIN</h3>
                        <form action="{{route('userLogin')}}" method="POST">
                            @csrf
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

                    </div>
                </div>
            </div>
            <!-- .toolbar-section#login -->
            <!-- Cart -->
            <div class="toolbar-section register" id="register">
                <div class="inner">
                    <div class="login-panel">
                        <h3>CUSTOMER REGISTER</h3>
                        <form action="{{route('userRegister')}}" method="POST">
                            @csrf
                            <input type="text" name="user_name" placeholder="Username">
                            <input type="email" name="user_email" placeholder="Email Address">
                            <input type="password" name="user_password" placeholder="Password">
                            <div class="checkbox">

                                </label>
                                <button class="btn-submit" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
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
