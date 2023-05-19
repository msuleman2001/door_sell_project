{{--Links--}}
@include('main-web.includes.links');
<body>

{{--Header--}}
@include('main-web.includes.header')

<section class="product-single mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 mt-5" >
                <h3 class="price text-secondary" data-doorprice="{{$product_details->product_price}}">
                    <span class="red">Price :</span>
                    <sup class="">₦</sup>
                    {{$product_details->product_price}}
                </h3>
                <img class="img-fluid w-100" src="{{asset($product_details->product_front_image)}}" alt="product-image">
            </div>
            <div class="col-lg-7 features-container" >
                @include('main-web.includes.features')
            </div>
        </div>
    </div>
</section>

    {{--JavaScript files--}}
@include('main-web.includes.script')

    </body>
</html>
