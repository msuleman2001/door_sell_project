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


<script>

    $(document).ready(function(){
        $('.product-feature').click(function(){
            var category = $(this).attr('data-featurecategory');
            var feature_name = $(this).attr('data-featurename');
            var price = $(this).attr('data-featureprice');

            setOrderDetails(category, feature_name, price);
        });
    });

    function setOrderDetails(category, feature_name, price){
        var order_json = $('#hidOrderDetailJSON').val();
        var total_price = parseInt($('#hidTotalPrice').val());
        var door_price = parseInt($('.price').attr('data-doorprice'));
        var quantity = parseInt($('#txtTotalDoors').val());

        if (isNaN(quantity))
            quantity = 1;

        var order_detail_json = JSON.parse(order_json);

        var selected_index = order_detail_json.findIndex(obj => obj.category === category);

        order_detail_json[selected_index].feature_name = feature_name;
        order_detail_json[selected_index].price = price;

        total_price = door_price;
        for(var feature in order_detail_json){
            total_price += parseInt(order_detail_json[feature].price);
        }

        total_price = total_price * quantity;
        $('#hidTotalPrice').val(total_price);
        $('#spanTotalPrice').text(total_price);
        $('#hidOrderDetailJSON').val(JSON.stringify(order_detail_json));
    }

    function showColor(div){
        $('.color-options').hide();
        $('#' + div).show();
    }

    function selectItem(item){
        var item_value = item.dataset.itemprice;
    }

    function showDoorLocks(){
        $('#divDoorLocks').show();
    }

    function showDoorHandles(){
        $('#divDoorHandles').show();
    }

    function showArchitrave(){
        $('#divArchitrave').show();
    }

    function showSwingDirectionOption(){
        $('#divSwingDirectionOption').show();
    }

    function showLeftRightSwingOption(warning){
        if (warning == 1){
            $('#divDoorDirectionWarning').hide();
        }

        if (warning == 2){
            $('#divDoorDirectionWarning').show();
        }
        $('#divLeftRightSwingOption').show();

        if (warning == 3){
            $('#divDoorDirectionWarning').hide();
            $('#divLeftRightSwingOption').hide();
        }


    }

    function showDoorType(){
        $('#divDoorType').show();
    }

    function showTotalDoors(){
        $('#divTotalDoors').show();
    }

    function showDoorSize(door_size){
        $('.door-size').hide();
        $('#div' + door_size).show();
    }
</script>




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

                                            <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                <form method="post" id="form" action="{{route('add-to-cart',['product_id' => $product_details->product_id])}}">
                                                    @csrf
                                                    <div class="detail-description">
                                                        <div class="price-del">
                                                            <input type="hidden" id="hidTotalPrice" name="hidTotalPrice" value="{{$product_details->product_price}}"></input>
                                                            <span class="price text-secondary" data-doorprice="{{$product_details->product_price}}"><sup>₦</sup>{{$product_details->product_price}}</span>
                                                        </div>
                                                        <p class="description">{{$product_details->product_details}}</p>
                                                        <div id="divColorSelection" class="container">
                                                            <div class="row"><h5>Select Color</h5></div>
                                                            <div>
                                                                <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divLeatherLook')">
                                                                <label for="color" class="form-check-label">Leather Look</label>
                                                                <div id="divLeatherLook" class="color-options" style="display: none;">
                                                                    @foreach($product_features as $product_feature)
                                                                        @if($product_feature->product_feature_parent_name == 'Leather Look')
                                                                            <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divGloss')">
                                                                <label for="color" class="form-check-label">High Gloss</label>
                                                                <div id="divGloss" class="color-options" style="display: none;">
                                                                    @foreach($product_features as $product_feature)
                                                                        @if($product_feature->product_feature_parent_name == 'Gloss')
                                                                            <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divWoodenGrain')">
                                                                <label for="color" class="form-check-label">Wood Grain</label>
                                                                <div id="divWoodenGrain" class="color-options" style="display: none;">
                                                                    @foreach($product_features as $product_feature)
                                                                        @if($product_feature->product_feature_parent_name == 'Wooden Grain')
                                                                            <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divSolidColor')">Solid Color</input>
                                                                <label for="color" class="form-check-label"">Solid Color</label>
                                                                <div id="divSolidColor" class="color-options" style="display: none;">
                                                                    @foreach($product_features as $product_feature)
                                                                        @if($product_feature->product_feature_parent_name == 'Solid Color')
                                                                            <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="divDoorType" class="container" style="display: none;">
                                                            <div class="row"><h5>Select Door Type</h5></div>
                                                            <div>
                                                                <img src="{{asset('/storage/img/single-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="single" onclick="showDoorSize('Single')">
                                                                <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double" onclick="showDoorSize('Double')">
                                                                <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double half" onclick="showDoorSize('DoubleHalf')">
                                                            </div>
                                                        </div>
                                                        <div id="divDoorSize">
                                                            <div id="divSingle" class="door-size" style="display: none;">
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'Single')
                                                                        <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="feature-option product-feature" onclick="showTotalDoors();" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div id="divDouble" class="door-size" style="display: none;">
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'Double')
                                                                        <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="product-feature" onclick="showTotalDoors()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">{{$product_feature->product_feature_name}}</div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div id="divDoubleHalf" class="door-size" style="display: none;">
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'DoubleHalf')
                                                                        <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="product-feature" onclick="showTotalDoors()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">{{$product_feature->product_feature_name}}</div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div id="divTotalDoors" style="display: none;">
                                                                <span>Total Doors: </span><input id="txtTotalDoors" name="txtTotalDoors" onchange="showSwingDirectionOption(); setOrderDetails('total doors', this.value, 0);" name="txtTotalDoors" type="number" style="width: 100;">
                                                            </div>
                                                            <div id="divSwingDirectionOption" style="display: none;">
                                                                <span>Select Swing Option</span><br/>
                                                                <input type="radio" onchange="showLeftRightSwingOption(1)" id="radSwingOption" name="radSwingOption">Yes</input><br>
                                                                <input type="radio" onchange="showLeftRightSwingOption(2)" id="radSwingOption" name="radSwingOption">No/Not Sure</input><br>
                                                                <input type="radio" onchange="showLeftRightSwingOption(3)" id="radSwingOption" name="radSwingOption">No. Not applied</input><br>
                                                            </div>
                                                            <div id="divLeftRightSwingOption" class="door-swing-option" style="display: none;">
                                                                <div id="divDoorDirectionWarning" style="display: none; color: red;">
                                                                    All the doors in this Order will be delivered as Left Hand Swing Opening Doors
                                                                </div>
                                                                <div>
                                                                    <span>Doors for Left: </span><input type="number" id="txtLeftDoors" onchange="showArchitrave(); setOrderDetails('left', this.value, 0);">
                                                                    <img src="{{asset('/storage/img/Left-Hand-Side-Opening-Swing.png')}}" height="100px" width="100px">
                                                                </div>
                                                                <div>
                                                                    <span>Doors for Right: </span><input type="number" id="txtRightDoors" onchange="showArchitrave(); setOrderDetails('right', this.value, 0);">
                                                                    <img src="{{asset('/storage/img/Right-Hand-Side-Opening-Swing.png')}}" height="100px" width="100px">
                                                                </div>
                                                            </div>

                                                            <div id="divArchitrave" style="display: none;">
                                                                <span>Select Architrave</span><br />
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'Architrave')
                                                                        <div> <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="product-feature" onclick="showDoorHandles()" data-featurecategory="architrave" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            </div>
                                                        </div>

                                                            <div id="divDoorHandles" style="display: none;">
                                                                <span>Select Door Handle</span><br/>
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'DoorHandles')
                                                                        <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature" data-featurecategory="door handles" onclick="showDoorLocks()" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            </div>
                                                    </div>
                                                            <div id="divDoorLocks" style="display: none;">
                                                                <span>Select Lock</span><br />
                                                                @foreach($product_features as $product_feature)
                                                                    @if($product_feature->product_feature_parent_name == 'Locks')
                                                                        <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature" data-featurecategory="door locks" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                            </div>

                                                <input type="hidden" id="hidOrderDetailJSON" name="hidOrderDetailJSON" value='[{"category": "color","feature_name": "NA","price": 0},{"category":"door type","feature_name":"NA","price": 0},{"category":"size","feature_name":"NA","price": 0},{"category":"total doors","feature_name":"NA","price": 0},{"category": "left","feature_name": "NA","price": 0},{"category": "right","feature_name": "NA","price": 0},{"category": "architrave","feature_name": "NA","price": 0},{"category": "door handles","feature_name": "NA","price": 0},{"category": "door locks","feature_name": "NA","price": 0 }]'>
                                                        <div class="total_price">Total Price: <span id="spanTotalPrice">{{$product_details->product_price}}</span></div>
                                                        <span class="add">
                                                            <button type="submit" class="btn btn-primary add-to-cart add-item"  data-product-id="{{$product_details->product_id}}">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                <span>  Add  to cart</span>
                                                            </button>
                                                        </span>

                                                    </form>

                                                </div>
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


