{{--Links--}}
@include('main-web.includes.links')
<body>

{{--Header--}}
<!-- main content -->
    <div id="checkout" class="main-content">
        <div class="wrap-banner">
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
                                    <span>Checkout</span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </nav>

            <!-- main -->
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div class="container px-3 my-5 clearfix">
                                <!-- Shopping cart table -->
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Shopping Cart</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered m-0">

                                                <thead>
                                                <tr>

                                                    <!-- Set columns width -->
                                                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                                                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                                                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                                                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                                                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $totalPrice = 0;
                                                @endphp
                                                @foreach($cart_items as $cart)
                                                    @php
                                                        $totalPrice += $cart->cart_price;
                                                    @endphp
                                                    <tr>
                                                        <td class="p-4">
                                                            <div class="media align-items-center">
                                                                <img src="{{asset($cart->product_front_image)}}" class="d-block ui-w-40 ui-bordered mr-4 img img-fluid" alt="{{$cart->product_title}}" style="height: 100px; width: 100px">
                                                                <div class="media-body">
                                                                    <a href="#" class="d-block text-dark">{{$cart->product_title}}</a>
                                                                    <small>
                                                                        <span class="text-muted">Color:</span>
                                                                        <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                                                        <span class="text-muted">Size: </span> EU 37 &nbsp;
                                                                        <span class="text-muted">Ships from: </span> China
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right font-weight-semibold align-middle p-4">{{$cart->product_price}}</td>
                                                        <td class="align-middle p-4"><input type="text" class="form-control text-center" value="{{$cart->cart_quantity}}"></td>
                                                        <td class="text-right font-weight-semibold align-middle p-4">{{$cart->cart_price}}</td>
                                                        <td class="text-center align-middle ">
                                                            <form action="{{route('delete.cart',['id'=>$cart->cart_id])}}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                            </form>

                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- / Shopping cart table -->

                                        <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                                            <div class="mt-4">
                                                <label class="text-muted font-weight-normal">Promocode</label>
                                                <input type="text" placeholder="ABC" class="form-control">
                                            </div>
                                            <div class="d-flex">
                                                <div class="text-right mt-4 mr-5">
                                                    <label class="text-muted font-weight-normal m-0">Discount</label>
                                                    <div class="text-large"><strong></strong></div>
                                                </div>
                                                <div class="text-right mt-4">
                                                    <label class="text-muted font-weight-normal m-0">Total price</label>
                                                    <div class="text-large"><strong>${{number_format($totalPrice, 2)}}</strong></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="float-right">
                                            <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3"><a href="{{route('doorShop')}}">Continue Shopping</a> </button>
                                            <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
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

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

@include('main-web.includes.footer');
    <!-- Vendor JS -->
@include('main-web.includes.script');

</body>


<!-- product-checkout07:13-->
</html>
