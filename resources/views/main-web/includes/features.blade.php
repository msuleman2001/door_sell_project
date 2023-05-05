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
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            html: true,
            trigger: 'hover',
        });
    });


</script>

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
                    <div id="divLeatherLook" class="color-options " style="display: none;">
                        <h6>Choose Leather Look Color Required</h6>

                        @foreach($product_features as $product_feature)
                            @if($product_feature->product_feature_parent_name == 'Leather Look')
                                <div class="original-image color-options d-inline-block">
                                    <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div>
                    <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divGloss')">
                    <label for="color" class="form-check-label">High Gloss</label>
                    <div id="divGloss" class="color-options" style="display: none;">
                        <h6>Choose High Gloss Color Required</h6>

                    @foreach($product_features as $product_feature)
                            @if($product_feature->product_feature_parent_name == 'Gloss')
                                <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();"
                                        data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                            @endif
                        @endforeach
                    </div>
                </div>
                <div>
                    <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divWoodenGrain')">
                    <label for="color" class="form-check-label">Wood Grain</label>
                    <div id="divWoodenGrain" class="color-options" style="display: none;">
                        <h6>Choose Wooden Grain Color Required</h6>

                        @foreach($product_features as $product_feature)
                            @if($product_feature->product_feature_parent_name == 'Wooden Grain')
                                <div class="original-image">
                                    <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div>
                    <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divSolidColor')">Solid Color</input>
                    <label for="color" class="form-check-label"">Solid Color</label>
                    <div id="divSolidColor" class="color-options" style="display: none;">
                        <h6>Choose Solid Color Required</h6>

                    @foreach($product_features as $product_feature)
                            @if($product_feature->product_feature_parent_name == 'Solid Color')
                                <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="divDoorType" class="container" style="display: none;">
                <div class="row"><h5>Select Door Type</h5></div>
                <div>
                    <figure class="feature-option-container">
                        <img src="{{asset('/storage/img/single-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="single" onclick="showDoorSize('Single')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/single-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Single Door</figcaption>
                    </figure>
                    <figure class="feature-option-container">
                        <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double" onclick="showDoorSize('Double')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/double-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Double Door</figcaption>
                    </figure>
                    <figure class="feature-option-container">
                        <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double half" onclick="showDoorSize('DoubleHalf')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/double-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Double Half Door</figcaption>
                    </figure>
                </div>
            </div>
            <div id="divDoorSize">
                <div id="divSingle" class="door-size mt-3" style="display: none;">
                    <h6>Choose Single Door Type Size</h6>
                    @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'Single')
                            <div>   <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="feature-option product-feature" onclick="showTotalDoors();" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">{{$product_feature->product_feature_name}}</div>

                        @endif
                    @endforeach
                </div>
                <div id="divDouble" class="door-size mt-3" style="display: none;">
                    <h6>Choose Double Door Type Size</h6>

                @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'Double')
                            <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showTotalDoors()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">{{$product_feature->product_feature_name}}</div>

                        @endif
                    @endforeach
                </div>
                <div id="divDoubleHalf" class="door-size mt-3" style="display: none; ">
                    <h6>Choose Double Half Door Type Size</h6>

                @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'DoubleHalf')
                            <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showTotalDoors()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">{{$product_feature->product_feature_name}}</div>
                        @endif
                    @endforeach
                </div>
                <div id="divTotalDoors" style="display: none;">
                    <span>Total Doors: </span><input id="txtTotalDoors" name="txtTotalDoors" onchange="showSwingDirectionOption(); setOrderDetails('total doors', this.value, 0);" name="txtTotalDoors" type="number" style="width: 100;">
                </div>
                <div id="divSwingDirectionOption" style="display: none;">
                    <h6>Select Swing Option</h6><br/>
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
                        <img src="{{asset('/storage/img/Left-Hand-Side-Opening-Swing.png')}}" height="100px" width="100px" >
                    </div>
                    <div>
                        <span>Doors for Right: </span><input type="number" id="txtRightDoors" onchange="showArchitrave(); setOrderDetails('right', this.value, 0);">
                        <img src="{{asset('/storage/img/Right-Hand-Side-Opening-Swing.png')}}" height="100px" width="100px">
                    </div>
                </div>

                <div id="divArchitrave" style="display: none;">
                    <h6>Select Architrave</h6><br />
                    @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'Architrave')
                            <div> <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="product-feature feature-option" onclick="showDoorHandles()" data-featurecategory="architrave" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                                @endif
                                @endforeach
                            </div>
                </div>
            </div>

            <div id="divDoorHandles" style="display: none;">
                <h6>Select Door Handle</h6><br/>
                @foreach($product_features as $product_feature)
                    @if($product_feature->product_feature_parent_name == 'DoorHandles')
                        <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature feature-option" data-featurecategory="door handles" onclick="showDoorLocks()" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                            @endif
                            @endforeach
                        </div>
            </div>
        </div>
        <div id="divDoorLocks" style="display: none;">
            <h6>Select Lock</h6><br />
            @foreach($product_features as $product_feature)
                @if($product_feature->product_feature_parent_name == 'Locks')
                    <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature feature-option" data-featurecategory="door locks" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                        @endif
                        @endforeach
                    </div>
        </div>
</div>

<input type="hidden" id="hidOrderDetailJSON" name="hidOrderDetailJSON"
       value='[{"category": "color","feature_name": "NA","price": 0},{"category":"door type","feature_name":"NA","price": 0},{"category":"size","feature_name":"NA","price": 0},{"category":"total doors","feature_name":"NA","price": 0},{"category": "left","feature_name": "NA","price": 0},{"category": "right","feature_name": "NA","price": 0},{"category": "architrave","feature_name": "NA","price": 0},{"category": "door handles","feature_name": "NA","price": 0},{"category": "door locks","feature_name": "NA","price": 0 }]'>
<div class="total_price">Total Price: <span id="spanTotalPrice">{{$product_details->product_price}}</span></div>
<span class="add">
    <button type="submit" class="btn btn-primary add-to-cart add-item"  data-product-id="{{$product_details->product_id}}">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <span>  Add  to cart</span>

    </button></span>

</form>

