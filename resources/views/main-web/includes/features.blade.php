

<div class="product-info col-xs-12 col-md-7 col-sm-7">
    <form method="post" id="form" action="{{route('add-to-cart',['product_id' => $product_details->product_id])}}">
        @csrf
        <div class="detail-description">
            <div class="price-del text-left">
                <input type="hidden" id="hidTotalPrice" name="hidTotalPrice" value="{{$product_details->product_price}}"></input>
            </div>
            <p class="description">{{$product_details->product_details}}</p>
            <div id="divArchitrave" class="feature text-left" >
                <h6>Select Architrave</h6><br />
                @foreach($product_features as $product_feature)
                    @if($product_feature->product_feature_parent_name == 'Architrave')
                        <div class="d-inline-block"> <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="product-feature feature-option" onclick="showColorSelection()" data-featurecategory="architrave" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                        </div>
                    @endif
                @endforeach
            </div>
            <div id="divColorSelection" class="container feature text-left" style="display: none">
                <div class="row"><h5>Select Color</h5></div>
                <div>
                    <input class="form-check-input" type="radio" id="color" name="color" onchange="showColor('divLeatherLook')">
                    <label for="color" class="form-check-label">Leather Look</label>
                    <div id="divLeatherLook" class="color-options feature" style="display: none;">
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
                    <div id="divGloss" class="color-options feature" style="display: none;">
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
                    <div id="divWoodenGrain" class="color-options feature" style="display: none;">
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
                    <div id="divSolidColor" class="color-options feature" style="display: none;">
                        <h6>Choose Solid Color Required</h6>

                    @foreach($product_features as $product_feature)
                            @if($product_feature->product_feature_parent_name == 'Solid Color')
                                <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showDoorType();" data-featurecategory="color" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="divDoorType" class="container feature" style="display: none;">
                <div class="row"><h5>Select Door Type</h5></div>
                <div class="feature text-left">
                    <figure class="feature-option-container ">
                        <img src="{{asset('/storage/img/single-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="single" onclick="showDoorSize('Single')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/single-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Single Door</figcaption>
                    </figure>
                    <figure class="feature-option-container ">
                        <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double" onclick="showDoorSize('Double')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/double-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Double Door</figcaption>
                    </figure>
                    <figure class="feature-option-container ">
                        <img src="{{asset('/storage/img/double-door.png')}}" height="100px" width="100px" class="feature-option product-feature" data-featurecategory="door type" data-featureprice="0" data-featurename="double half" onclick="showDoorSize('DoubleHalf')" data-toggle="popover" data-content="<img src='{{asset('/storage/img/double-door.png')}}' height='150px' width='150px'>" data-placement="top">
                        <figcaption>Double Half Door</figcaption>
                    </figure>
                </div>
            </div>
            <div id="divDoorSize" class="text-left">
                <div id="divSingle" class="door-size mt-3 feature" style="display: none;">
                    <h6>Choose Single Door Type Size</h6>
                    @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'Single')
                             <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="feature-option product-feature" onclick="showWallframes();" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                            <figcaption>{{$product_feature->product_feature_name}}</figcaption>

                        @endif
                    @endforeach
                </div>
                <div id="divDouble" class="door-size mt-3 feature" style="display: none;">
                    <h6>Choose Double Door Type Size</h6>

                @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'Double')
                            <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature" onclick="showWallframes()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">{{$product_feature->product_feature_name}}</div>

                        @endif
                    @endforeach
                </div>
                <div id="divDoubleHalf" class="door-size mt-3 feature" style="display: none; ">
                    <h6>Choose Double Half Door Type Size</h6>

                @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'DoubleHalf')
                            <div>  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px" class="feature-option product-feature ml-3" onclick="showWallframes()" data-featurecategory="size" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">{{$product_feature->product_feature_name}}</div>
                        @endif
                    @endforeach
                </div><br>

                <div id="divDoorWallframes" style="display: none;" class="feature">
                    <h6>Select Door Wallframes</h6><br/>
                    @foreach($product_features as $product_feature)
                        @if($product_feature->product_feature_parent_name == 'DoorWallframes')
                            <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature feature-option" data-featurecategory="door handles" onclick="showDoorQuantity()" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                                @endif
                                @endforeach
                            </div>
                </div>
               <br><br> <div id="divTotalDoors" style="display: none;">
                    <span>Total Doors: </span><input id="txtTotalDoors" name="txtTotalDoors" onchange="showDoorLocks(); setOrderDetails('total doors', this.value, 0);" name="txtTotalDoors" type="number" style="width: 100;">
                </div>

        </div>

        <div id="divDoorLocks" style="display: none;" class="feature">
            <h6>Select Lock</h6><br />
            @foreach($product_features as $product_feature)
                @if($product_feature->product_feature_parent_name == 'Locks')
                    <div style="display: inline-block;">  <img src="{{asset($product_feature->product_feature_image)}}" height="100px" width="100px"class="product-feature feature-option" data-featurecategory="door locks" data-featureprice="{{$product_feature->product_feature_price}}" data-featurename="{{$product_feature->product_feature_name}}" data-toggle="popover" data-content="<img src='{{asset($product_feature->product_feature_image)}}' height='150px' width='150px'>" data-placement="top">
                        @endif
                        @endforeach
                    </div>
        </div>
</div>
        <!--  Total Price-->

<input type="hidden" id="hidOrderDetailJSON" name="hidOrderDetailJSON"
       value='[{"category": "color","feature_name": "NA","price": 0},{"category":"door type","feature_name":"NA","price": 0},{"category":"size","feature_name":"NA","price": 0},{"category":"total doors","feature_name":"NA","price": 0},{"category": "left","feature_name": "NA","price": 0},{"category": "right","feature_name": "NA","price": 0},{"category": "architrave","feature_name": "NA","price": 0},{"category": "door handles","feature_name": "NA","price": 0},{"category": "door locks","feature_name": "NA","price": 0 }]'>
<div class="total_price text-left">Total Price: <span id="spanTotalPrice">{{$product_details->product_price}}</span></div>

        <!-- Cart Button-->
        <span class="add" style="display: flex; align-items: center;">
    <button type="submit" class="btn btn-primary add-to-cart add-item" data-product-id="{{$product_details->product_id}}" style="margin-right: 10px;">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        <span>Add to Cart</span>
    </button>
</span>


</form>

