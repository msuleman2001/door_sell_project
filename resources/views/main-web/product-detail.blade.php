@include('main-web.includes.links');

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
                                                    <div class="form-group">
                                                        <label for="adon-color"><h6>Color:</h6></label>
                                                        @foreach ($color_items as $item)
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="adon_color" value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                    {{ $item->adon_item_name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>

{{--                                                    <div class="form-group" id="color-images" style="display: none;">--}}
{{--                                                        <strong>Select Colors</strong>--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-4">--}}
{{--                                                                <label>--}}
{{--                                                                    <input type="radio" name="color" value="black">--}}
{{--                                                                    <img src="black.jpg" alt="Black" class="img-fluid">--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-4">--}}
{{--                                                                <label>--}}
{{--                                                                    <input type="radio" name="color" value="blue">--}}
{{--                                                                    <img src="blue.jpg" alt="Blue" class="img-fluid">--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-4">--}}
{{--                                                                <label>--}}
{{--                                                                    <input type="radio" name="color" value="red">--}}
{{--                                                                    <img src="red.jpg" alt="Red" class="img-fluid">--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    SHOWING THE DOOR TYPES--}}
                                                    <div class="form-group" id="door-types" style="display: none;">
                                                        <strong>Select Door Type</strong>
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                @foreach ($door_type_items as $item)
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="door_type" value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                            {{ $item->adon_item_name }}
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>

                                                    <div class="door-sizes" id="door-sizes-single" style="display: none;">
                                                        <strong>Select Door Size</strong>

                                                        <div class="form-check">
                                                            @foreach ($dimention_items as $item)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input class="form-check-input" type="radio" name="door_size" id="door_size"
                                                                               value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                        {{ $item->adon_item_name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

{{--                                                    <div class="door-sizes" id="door-sizes-single_half" style="display: none;">--}}
{{--                                                        <strong>Select Size</strong>--}}
{{--                                                        <div class="form-check">--}}
{{--                                                            <input class="form-check-input" type="radio" name="door_size" id="door_size_3" value="36x80">--}}
{{--                                                            <label class="form-check-label" for="door_size_3">--}}
{{--                                                                <img src="36x80.jpg" alt="36x80" class="img-fluid">--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-check">--}}
{{--                                                            <input class="form-check-input" type="radio" name="door_size" id="door_size_4" value="42x80">--}}
{{--                                                            <label class="form-check-label" for="door_size_4">--}}
{{--                                                                <img src="42x80.jpg" alt="42x80" class="img-fluid">--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="door-sizes" id="door-sizes-double" style="display: none;">--}}
{{--                                                        <strong>Select Size</strong>--}}
{{--                                                        <div class="form-check">--}}
{{--                                                            <input class="form-check-input" type="radio" name="door_size" id="door_size_5" value="72x80">--}}
{{--                                                            <label class="form-check-label" for="door_size_5">--}}
{{--                                                                <img src="72x80.jpg" alt="72x80" class="img-fluid">--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="form-check">--}}
{{--                                                            <strong>Select Size</strong>--}}
{{--                                                            <input class="form-check-input" type="radio" name="door_size" id="door_size_6" value="96x80">--}}
{{--                                                            <label class="form-check-label" for="door_size_6">--}}
{{--                                                                <img src="96x80.jpg" alt="96x80" class="img-fluid">--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}



                                                    {{--SELECTING THE SWING TYPR--}}
                                                                <div class="swing-type-selection" id="swing-type-selection" style="display: none;">
                                                                    <div class="form-group">

                                                                        <label for="swing-type-selection"><strong>Select Door Swing Type</strong></label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="swing_type_selection" id="swing-type-yes" value="yes">
                                                                            <label class="form-check-label" for="swing-type-yes">Yes</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="swing_type_selection" id="swing-type-not-sure" value="not_sure">
                                                                            <label class="form-check-label" for="swing-type-not-sure">Not Sure</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" name="swing_type_selection" id="swing-type-no" value="no">
                                                                            <label class="form-check-label" for="swing-type-no">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{--Images to show w=if we want to select the door type--}}
                                                    <div class="swing-type" id="door-sizes-double" style="display: none;">
                                                        <strong>Swing Type Select</strong>
                                                        <div class="form-check">
                                                            @foreach ($swing_type_items as $item)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input class="form-check-input" type="radio" name="swing_type_items" id="swing_type_items"
                                                                               value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                        {{ $item->adon_item_name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                        <!-- Text Area for Not Sure Option -->




                                                    {{--Architrave Design--}}
                                                    <div class="architrave-design form-group" style="display: none;">
                                                        <label><strong>Select Architrave Design</strong></label>

                                                        <div class="form-check">
                                                            @foreach ($architrave_design_items as $item)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input class="form-check-input" type="radio" name="architrave_design" id="architrave_design"
                                                                               value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                        {{ $item->adon_item_name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>


                                                        <!-- HANDLE TYPE -->
                                                    <div class="handle-type " id="handle-type" style="display: none">

                                                        <strong>Select Double Handle Type</strong>
                                                        <div class="form-check">
                                                            @foreach ($handle_type_items as $item)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input class="form-check-input" type="radio" name="handle" id="handle"
                                                                               value="{{ $item->adon_item_id }}" data-price="{{ $item->adon_item_price }}">
                                                                        {{ $item->adon_item_name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>




                                                        <!-- LOCK TYPE -->

                                                    <div class="lock-type" id="lock-type" style="display: none;">
                                                        <strong>Select Lock Type</strong>
                                                        <div class="form-check">
                                                            @foreach ($lock_type_items as $item)
                                                                <div class="radio">
                                                                    <label>
                                                                        <input class="form-check-input" type="radio" name="lock-1" id="lock" value="{{ $item->adon_item_id }}"
                                                                               data-price="{{ $item->adon_item_price }}">

                                                                        {{ $item->adon_item_name }}
                                                                    </label>
                                                                </div>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                    </div>


                                                    <p>Total Price: <span class="total-price">0</span></p>


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

{{--                                        DETAILS CARD FOR PRODUCT ADONS--}}




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


                                        <div class="related mt-5">
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
@include('main-web.includes.script');
<script>

    $(document).ready(function() {
        $('input[name="adon_color"]').click(function() {

// Hide the div if it's currently visible
                $('#door-types').hide();
// Show the div if it's currently hidden
                $('#door-types').show();
        });

    //SELECTING THE DOOR TYPE AFTER COLOR
    // $('input[name="color"]').click(function() {
    //     // Hide all other door type divs that may be visible
    //     $('.door-types').hide();
    //     // Show the door types div that corresponds to the clicked image
    //     $('#door-types').show();

//SELECTINF THE SIZE AGAINST THE DOOR TYPE SEPCIC!
        $('input[name="door_type"]').click(function() {
            // Get the value of the selected door type
            // Hide all door sizes sections
            $('.door-sizes').show();
            // Show the door sizes section for the selected door type

        });


        //SHOWING WHETHER TO SELECT SWING TYPE OR NOT
        $('input[name="door_size"]').click(function() {

            $('#swing-type-selection').show();
        });

            // Show architrave design section when any swing type option is selected
            $('input[name="swing_type_selection"]').on('change', function() {
                $('.architrave-design').show();
            });

            // Show  images when "Yes" is selected
            $('input[name="swing_type_selection"][value="yes"]').on('change', function() {
                $('.swing-type').show();
                $('.text-area').hide();
            });

            // Show  text when "Not Sure" is selected
            $('input[name="swing_type_selection"][value="not_sure"]').on('change', function() {
                $('.text-area').show();
                $('.text-area textarea').val('Left');
                $('.swing-type').hide();
            });

            // Hide images and red text when "No" is selected
            $('input[name="swing_type_selection"][value="no"]').on('change', function() {
                $('.swing-type, .text-area').hide();
            });
            $('.architrave-design').click(function(){
                $('.handle-type').show();
            });
        $('.handle-type').click(function(){
            $('.lock-type').show();
        });
//Calculating the total price after Checking the All radio buttons
        $('.add-to-cart').click(function() {
            const selectedItems = $('input[type="radio"]:checked');
            let totalPrice = 0;
            selectedItems.each(function() {
                if ($(this).data('price')) { // check if data-price attribute exists
                    const price = parseFloat($(this).data('price'));
                    totalPrice += price;
                }
            });
            $('.total-price').text(totalPrice.toFixed(2));
        });




    });

</script>

</div>
</div>
</body>

</html>
