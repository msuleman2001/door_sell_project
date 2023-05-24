{{--Links--}}
@include('main-web.includes.links')
<body>

{{--Header--}}
@include('main-web.includes.header')

{{--Main Content--}}


{{--Hero Slider--}}

<section class="hero-slider ">
    @foreach($categories as $category)
    <div class="hero-slider-item">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 align-self-center order-2 order-lg-1">
                    <div class="hero-slider-content">
                        <h3>{{$category->category_name}}</h3>
                        <p>{{$category->category_details}}</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img class=" rounded-pill" height="500px" width="500px" src="{{asset($category->category_image)}}" alt="banner-image">
                </div>

            </div>
        </div>
    </div>
@endforeach
</section>

{{--Collection--}}

<section class="collection section pb-0">
    <div class="container-fluid">
        @if(count($sub_categories) > 0)
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Collections</h2>
                    <p class="section-title-content">Lorem ipsum dolor sit amet, simply dummy text for web and print media.</p>
                </div>
                @foreach ($sub_categories as $sub_category)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <a href="{{url('/',['sub_category_id'=>$sub_category->category_id])}}">
                        <div class="collection-item">
                            @if($sub_category->category_image)
                                <img src="{{asset($sub_category->category_image)}}" class="img-fluid">
                            @endif
                                <div class="collection-item-overlay">
                                <div class="collection-item-content">
                                        <h3 class="">{{$sub_category->category_name}}</h3>
                                </div>
                            </div>
                            <div class="collection-item-title">
                                <a href="#">
                                    <h3>{{$sub_category->category_name}}</h3>
                                </a>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
            @if(count($products) > 0)
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-title">Collections</h2>
                        <p class="section-title-content">Lorem ipsum dolor sit amet, simply dummy text for web and print media.</p>
                    </div>
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="{{url('/product-details',['product_id' => $product->product_id])}}">
                            <div class="collection-item">
                                <img src="{{asset($product->product_front_image)}}" class="img-fluid">
                                <div class="collection-item-overlay">
                                    <div class="collection-item-content">
                                            <h5 class="card-title">{{$product->product_title}}</h5>
                                    </div>
                                </div>

                                <div class="collection-item-title">
                                    <a href="#">
                                        <h3>{{$product->product_title}}</h3>
                                    </a>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
    </div>
</section>

    {{--Footer--}}
@include('main-web.includes.footer');

    {{--JavaScript files--}}
@include('main-web.includes.script')

</body>
</html>
