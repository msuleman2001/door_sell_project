@include('main-web.includes.links');
{{--Showing messages for fail or success--}}
@if ($errors->any())
    <script>
        alert('Login First!')
    </script>
@endif

@if (session('success'))
    <script>
        alert('Review added!')
    </script>
@endif

<body id="product-detail">

@include('main-web.includes.header')

<!-- main content -->
<div class="main-content">
    <div id="wrapper-site">
        <div id="content-wrapper">
            <div id="main">
                <div class="page-home">

                    <!-- breadcrumb -->

                    <div class="container">
                        <div class="content">
                            <div class="row">
                                @include('main-web.includes.categories')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            INCLUDING FEATURES--}}

                             @include('main-web.includes.features');

                                            </div>
                                        </div>
                                        </div>


                                        {{--//showing the review data--}}

                                        <div class="container">
                                            <h4 class="mb-5">Reviews</h4>
                                            <div id="review-carousel" class="carousel slide mb-5" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    @foreach ($product_details->reviews as $index => $review)
                                                        <li data-target="#review-carousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                                                    @endforeach
                                                </ol>

                                                <!-- Reviews -->
                                                <div class="carousel-inner text-center">
                                                    @if ($product_details->reviews->count() > 0)
                                                        @foreach ($product_details->reviews as $index => $review)
                                                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                <p>{{ $review->review_content }}</p>
                                                                <small>By {{ $review->review_user }} <span>/</span> <span>{{ now() }}</span></small>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <p>There are no reviews yet</p>
                                                    @endif
                                                </div>

                                                <!-- Controls -->
                                                <a class="carousel-control-prev btn" href="#review-carousel" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only text-danger">Previous</span>
                                                </a>
                                                <a class="carousel-control-next btn" href="#review-carousel" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only ">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="review-section p-4 ">
                                            <form action="{{ route('addReview') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product_details->product_id }}">
                                                <label for="review-content"><strong>Your review*</strong></label><br>
                                                <textarea class="review-content" id="review-content" name="review_content"></textarea><br>
                                                @if(!session()->has('user'))
                                                    <div class="d-flex mt-3 mb-5">
                                                        <div class="mr-4">
                                                            <label for="review-email"><strong>Email*</strong></label><br>
                                                            <input class="form-control" type="email" id="review-email" name="review_email" size="25" required><br>
                                                        </div>
                                                        <div class="">
                                                            <label for="review-user"><strong>Name*</strong></label><br>
                                                            <input type="text"  class="form-control" id="review-user" name="review_user" size="25" required><br>
                                                        </div>
                                                    </div>
                                                @endif
                                                <input type="submit" class="submit-btn btn rounded-0" value="Submit">

                                            </form>
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

<!-- Vendor JS -->
@include('main-web.includes.script');

</body>


