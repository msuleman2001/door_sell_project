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

{{--<script>--}}
{{--function  addToCart(product_id){--}}
{{--        // Get the selected adon data from the hidden input field--}}
{{--        var selectedAdonsJson = $('#selectedAdonsInput').val();--}}

{{--        // Get the total price from the `total_price` div--}}
{{--        var totalPrice = $('.total_price').text().trim().replace('Total Addon Price: $', '');--}}
{{--        // Get the product ID from the button's data attributes--}}
{{--        var productId = product_id;--}}
{{--console.log(productId)--}}
{{--        // Send the AJAX request--}}
{{--        $.ajax({--}}
{{--            type: 'POST',--}}
{{--            url: '/user/add-to-cart',--}}
{{--            dataType: 'json', //--}}
{{--            data: {--}}
{{--                selectedAdonsJson: selectedAdonsJson,--}}
{{--                totalPrice: totalPrice,--}}
{{--                productId: productId,--}}
{{--            },--}}
{{--            success: function(data) {--}}
{{--                alert('Data added to cart:', data);--}}
{{--            },--}}
{{--            error: function(xhr, textStatus, errorThrown) {--}}
{{--                console.log('Error:', errorThrown);--}}
{{--                alert('error')--}}
{{--            }--}}
{{--        });--}}
{{--}--}}

{{--</script>--}}

<style>
    .feature-option{
        height: 80px;
        width: 80px;
        border: solid 1px green;
        display: inline-block;
    }
</style>

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

<script>
    //adding data to json and calculatin

    function storeSelectedAdon() {
        var selectedAdons = {};

        // Get all the selected adon items
        var selectedAdonItems = document.querySelectorAll('.adon_item:checked');

        // Loop through the selected adon items and store their names and prices in the selectedAdons object
        selectedAdonItems.forEach(function(selectedAdonItem) {
            var adon_item_name = selectedAdonItem.getAttribute('data-item-name');
            var adon_item_price = selectedAdonItem.getAttribute('data-price');
            var adon_parent = selectedAdonItem.getAttribute('data-adon-parent');

            if (!selectedAdons[adon_parent]) {
                // Create an object for the adon item if it doesn't exist yet
                selectedAdons[adon_parent] = {
                    adon_item_name: adon_item_name,
                    adon_item_price: adon_item_price,
                };
            } else {
                // If the adon item object already exists, add the price and name to the existing object
                selectedAdons[adon_parent].adon_item_name += ', ' + adon_item_name;
                selectedAdons[adon_parent].adon_item_price += adon_item_price;
            }
        });

        // Convert the selectedAdons object to a JSON string and store it in a variable or send it to the server
        var selectedAdonsJson = JSON.stringify(selectedAdons);

        // Set the value of the hidden input field to the JSON string
        var selectedAdonsInput = document.getElementById('selectedAdonsInput');
        selectedAdonsInput.value = selectedAdonsJson;

        // Calculate and display the total price of checked adons
        var totalPrice = 0;
        selectedAdonItems.forEach(function(selectedAdonItem) {
            totalPrice += parseFloat(selectedAdonItem.getAttribute('data-price'));
        });

        var totalPriceDiv = document.querySelector('.total_price');
        if (totalPriceDiv) {
            totalPriceDiv.innerText = 'Total Addon Price: $' + totalPrice.toFixed(2);
            var totalPriceInput = document.getElementById('totalPriceInput');
            totalPriceInput.value = totalPrice.toFixed(2);
        }

    }

// adding to the product price
    function totalPrice(productPrice) {
        var total = parseFloat(productPrice);
        var adonTotal = 0;

        // Get all the checked adon items
        var checkedAdonItems = document.querySelectorAll('.adon_item:checked');

        // Loop through the checked adon items and add their prices to the total
        checkedAdonItems.forEach(function(checkedAdonItem) {
            var adon_item_price = parseFloat(checkedAdonItem.getAttribute('data-price'));
            adonTotal += adon_item_price;
        });

        // Add the adon total to the product price
        total += adonTotal;

        // Display the total price in a div
        var totalPriceDiv = document.getElementsByClassName('total_price')[0];
        totalPriceDiv.innerText = 'Total Product Price: $' + total.toFixed(2);

        // Set the value of the hidden input field to the total price
        var totalPriceInput = document.getElementById('totalPriceInput');
        totalPriceInput.value = total.toFixed(2);

        // Set the value of the hidden input field for product price
        var productPriceInput = document.getElementById('productPriceInput');
        productPriceInput.value = productPrice;

    }


    //updating the price accoring to the quantity
    function updateQuantity(change) {
        const quantityInput = $('#quantity_wanted');
        let quantity = parseInt(quantityInput.val());
        //add the value based on change value
        quantity += change;
        //block quantity to go below 1
        if (quantity < 1) {
            quantity = 1;
        }
        quantityInput.val(quantity);

        //adding to the hidden input
        $('#quantityInput').val(quantity);

//calculating total price of selected inputs
        const selectedItems = $('input[type="radio"]:checked');
        let totalPrice = 0;
        selectedItems.each(function() {
            if ($(this).data('price')) { // check if data-price attribute exists
                const price = parseFloat($(this).data('price'));
                totalPrice += price * quantity;
            }
        });
        $('.total_price').text('Total Product Price: $' + totalPrice.toFixed(2));
        // Set the value of the hidden input field to the total price
        var totalPriceInput = document.getElementById('totalPriceInput');
        totalPriceInput.value = totalPrice.toFixed(2);

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




</div>
</div>
</body>

</html>
