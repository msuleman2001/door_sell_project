@include('main-web.includes.links')
@if (session('success'))
    <script>
        alert('Login Successful')
    </script>
@endif
@if(session('wishlist'))
    <div class="alert alert-success">
        {{ session('wishlist') }}
    </div>
@endif

@if ($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

{{--Adding the product to wishlist--}}

<body id="home">

@include('main-web.includes.header')
<!-- main content -->
<!-- main -->
<div id="wrapper-site">
    <div id="content-wrapper" class="full-width">
        <div id="main">
            <section class="page-home">
                <!-- product living room -->
                <div class="section living-room">
                    <div class="container mt-5 ">
                        <div class="tiva-row-wrap row">
                            <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                <div class="grouptab row">
                                    @include('main-web.includes.categories')
                                    <div class="categoriestab-left product-tab col-md-9 flex-9">
                                        <div class="title-tab-content d-flex justify-content-start"></div>
                                            <div class="tab-content">
                                                <div id="new" class="tab-pane fade in active show">
                                                    @if(count($sub_categories) > 0)
                                                        <div class="row">
                                                            @foreach ($sub_categories as $sub_category)
                                                                <div class="col-sm-4 mt-4">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <a href="{{url('/',['sub_category_id'=>$sub_category->category_id])}}">
                                                                                <h5 class="card-title">{{$sub_category->category_name}}</h5>
                                                                            </a>
                                                                            <p class="card-text">{{$sub_category->created_at}}</p>

                                                                            @if($sub_category->category_image)
                                                                                <img src="{{asset($sub_category->category_image)}}" class="img-fluid">
                                                                            @endif                                                                            <!-- <div><a href="#" class="btn btn-primary"></a></div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                    @if(count($products) > 0)
                                                        <div class="row">
                                                            @foreach ($products as $product)
                                                                <div class="col-sm-4 mt-4">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <a href="{{url('/product-details',['product_id' => $product->product_id])}}">
                                                                                <h5 class="card-title">{{$product->product_title}}</h5>
                                                                            </a>
                                                                            <p class="card-text">{{$product->product_details}}</p>
                                                                            <form method="post" action="{{route('addToWishlist',['id'=>$product->product_id])}}" >
                                                                                @csrf
                                                                            <button type="submit" style="background: none; border: none" >

                                                                                    <i class="fa fa-heart"></i>

                                                                            </button>
                                                                            </form>
                                                                            <img src="{{asset($product->product_front_image)}}" class="img-fluid">
                                                                            <!-- <div><a href="#" class="btn btn-primary"></a></div> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
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
<!-- back top top -->
<div class="back-to-top">
    <a href="#">
        <i class="fa fa-long-arrow-up"></i>
    </a>
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
@include('main-web.includes.script');
<script>

    // STORING THE STATE OF THE DROPDOWN TO SESSION

    $('.subCategory').on('shown.bs.collapse', function () {
        var subCategoryId = $(this).attr('id');
        sessionStorage.setItem(subCategoryId, 'expanded');
    });
    $(document).ready(function () {
        $('.subCategory').each(function () {
            var subCategoryId = $(this).attr('id');
            var isExpanded = sessionStorage.getItem(subCategoryId);
            if (isExpanded === 'expanded') {
                $(this).addClass('show');
            }
        });
    });

    // CHANGING THE TEXT OF THE SUBCATEGORY TO BOLD WHEN CLICKED

    $('.cateItem').on('click', function() {
        // Remove bold text from all other subcategories
        $('.cateItem').css('font-weight', 'normal');

        // Add bold text to the clicked subcategory
        $(this).css('font-weight', 'bold');

        // Store the selected subcategory in local storage
        localStorage.setItem('selectedSubcategory', $(this).text());
    });

    // Retrieve the selected subcategory from local storage on page load
    $(document).ready(function() {
        var selectedSubcategory = localStorage.getItem('selectedSubcategory');
        if (selectedSubcategory) {
            // Add bold text to the selected subcategory
            $('.cateItem:contains(' + selectedSubcategory + ')').css('font-weight', 'bold');
        }
    });
</script>

</body>
