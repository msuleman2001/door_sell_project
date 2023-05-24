{{--Links--}}
@include('main-web.includes.links')
<body>

{{--Header--}}
@include('main-web.includes.header')

<section class="product-single mt-5">
    <div class="container-fluid product-feature">
        <div class="row">
            <div class="col-lg-5 mt-5" >
                <h3 class="price text-secondary" data-doorprice="{{$product_details->product_price}}">
                    <span class="red">Price :</span>
                    <sup class="">₦</sup>
                    {{$product_details->product_price}}
                </h3>
                <div class="col-12 col-lg-6" id="productGallery">
                    <div class="swiffy-slider slider-item-ratio slider-item-ratio-1x1 slider-nav-round slider-nav-nodelay" id="pgallery">
                        <ul class="slider-container p-3 ">
                            <li><img class="mr-2" src="{{asset($product_details->product_front_image)}}" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(0)"></li>
                            <li><img class="mr-2" src="{{asset($product_details->product_back_image)}}" loading="lazy" alt="..." data-bs-toggle="modal" data-bs-target="#productGalleryModal" onclick="imageClick(1)"></li>
                        </ul>

                        <button type="button" class="slider-nav" aria-label="Go previous"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
                    </div>

                    <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-chevron slider-item-show4 slider-item-snapstart slider-item-ratio slider-item-ratio-1x1 slider-nav-visible slider-nav-page slider-nav-outside-expand pt-3 d-none d-lg-block">
                        <ul class="slider-container" id="pgallerythumbs" style="cursor:pointer">
                            <li><img src="{{asset($product_details->product_front_image)}}" loading="lazy" alt="..." onmouseover="thumbHover(0)"></li>
                            <li><img src="{{asset($product_details->product_back_image)}}" loading="lazy" alt="..." onmouseover="thumbHover(1)"></li>
                        </ul>
                    </div>

                    <div class="modal  fade" id="productGalleryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="swiffy-slider h-100 slider-nav-dark" id="pgalleryModal">
                                        <ul class="slider-container" tabindex="-1">
                                        </ul>

                                        <button type="button" class="slider-nav" aria-label="Go previous"></button>
                                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go next"></button>
                                        <ul class="slider-indicators slider-indicators-dark slider-indicators-highlight slider-indicators-round">
                                            <li class="active"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 features-container" >
                @include('main-web.includes.features')
            </div>
        </div>
    </div>
</section>
{{--footer--}}
    {{--JavaScript files--}}
@include('main-web.includes.script')

    </body>
</html>
