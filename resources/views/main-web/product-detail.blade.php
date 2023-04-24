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


<script>
    var radios = new Array();

    function loadItems(addon_id,addon_title, radio){
        var parent_div;
        if(!radio.id.startsWith('childAddonContainer'))
            parent_div = radio.nextSibling.nextSibling;
        else
            parent_div = radio;

        if (parent_div.id == '')
            blankAllOthers(parent_div);
        parent_div.innerHTML = '';
        var baseUrl = "{{ url('/') }}";
        var WebURL = {!! json_encode(url('/')) !!}
        $.ajax({
            url: WebURL+'/adon/items/' + addon_id,
            type: 'GET',
            success: function (data) {
                if (data.length > 0) {
                    // If the response contains adon items, load them directly
                    var divItems = '<div>';
                    var uniqueNameItems = 'adon_item_' + addon_id; // Generate unique name for items
                    for (var i = 0; i < data.length; i++) {
                        var itemsChildAdon = '<input type="radio" class="adon-items-container   adon_item" id="adon_item_'
                            + i + '" name="' + uniqueNameItems + '" data-price="' + data[i].adon_item_price + '"' +
                            '  data-item-name="' + data[i].adon_item_name + '" data-adon-parent="'+addon_title+'">'; // Update name attribute

                        itemsChildAdon += '<label for="adon_item_' + i + '">';
                        itemsChildAdon += '<img src="'  +data[i].adon_item_image+'" style="max-width: 100px; height: 100px">';
                        itemsChildAdon += '</label>';
                        divItems += itemsChildAdon;

                    }
                    divItems += '</div>';
                    parent_div.innerHTML += divItems;
                }
            }
        });
    }//end loadItem function

    function loadChildAddons(addon_id, addon_title, span) {
        var parent_div = span.nextSibling;
        parent_div.innerHTML = '';

        var uniqueName = 'child_adons_' + addon_id;
        var WebURL = {!! json_encode(url('/')) !!}


        $.ajax({
            url: WebURL+'/adon/' + addon_id,
            type: 'GET',
            success: function (data) {
                if (data != "0") {
                    var uniqueNameItems = 'adon_item_' + addon_id;
                    for (var i = 0; i < data.length; i++) {
                        var divChildAddons = '<div>';
                        var child_addons = '<input type="radio" class="child-adons-container child-adons" ' +
                            'id="child_adons_' + i + '" name="' + uniqueName +
                            '" onclick="loadItems(' + data[i].adon_id + ',\'' + addon_title + '\', this)" ' + ' data-adon-child="' + data[i].adon_title + '"  >';
                        child_addons += '<label for="child_adons_' + i + '" >';
                        child_addons += data[i].adon_title;
                        child_addons += '</label><div></div>';

                        divChildAddons += child_addons + '</div>';
                        parent_div.innerHTML += divChildAddons;
                    }
                } else {
                    loadItems(addon_id, addon_title, parent_div);
                }
            }
        });
    } // added this closing brace

    function blankAllOthers(radio){
        // const childElements = radio.parentElement.parentElement.querySelectorAll('div'); // get all the child elements
        //
        // for (let i = 0; i < childElements.length; i++) {
        //     const childElement = childElements[i]; // get the current child element
        //     childElement.innerHTML = '';
        // }
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
                                                <div class="detail-description">
                                                    <div class="price-del">
                                                        <span class="price  text-secondary" data-initial-price="{{$product_details->product_price}}"><sup>₦</sup>{{$product_details->product_price}}</span>

                                                    </div>
                                                    <p class="description">{{$product_details->product_details}}</p>

                                                    <div class="adon_item_container">

                                                        @foreach($addons as $addon)

                                                            <div class="parent-adon" id="parent-adon-{{$addon->adon_id}}">
                                                                <span onclick="loadChildAddons({{$addon->adon_id}}, '{{$addon->adon_title}}', this);">{{$addon->adon_title}}</span><div id="childAddonContainer{{$addon->adon_id}}"></div>
                                                            </div>

                                                        @endforeach
                                                    </div>

                                                    <button class="btn-outline-primary" onclick="storeSelectedAdon()">Save selected items</button>
                                                    <button class="btn-outline-primary" onclick="totalPrice({{$product_details->product_price}})">Total Price</button>

                                                    <div class="total_price"></div>

                                                    <div class="has-border cart-area">
                                                        <div class="product-quantity">

                                                            <div class="qty">
                                                                <div class="input-group">
                                                                    <div class="quantity">
                                                                        <span class="control-label">QTY : </span>
{{--                                                                        updating price according to quantity--}}
                                                                        <div class="input-group">
                                                                            <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control">
                                                                            <span class="input-group-btn-vertical">
                                                                             <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up"
                                                                            type="button" onclick="updateQuantity(1)">+</button>
                                                                             <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down"
                                                                             type="button" onclick="updateQuantity(-1)">-</button>
                                                                    </span>
                                                                        </div>

                                                                    </div>
                                                                    <form method="post" action="{{ route('add-to-cart', ['id' => $product_details->product_id]) }}">
                                                                        @csrf
                                                                        {{--//storing json--}}
                                                                        <input type="hidden" id="selectedAdonsInput" name="selectedAdons" value="">
                                                                        {{-- Storing the total price--}}
                                                                        <input type="hidden" id="totalPriceInput" name="total_price" value="">
{{--                                                                        Storing the quantity of the product--}}
                                                                        <input type="hidden" name="quantity" id="quantityInput" value="1">

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
                                                        <div class="clearfix"></div>

                                                        <p class="product-minimal-quantity">
                                                        </p>
                                                    </div>

                                                    <div class="content">
                                                        <p>SKU :
                                                            <span class="content2">
                                                                    <a href="#">{{$product_details->product_sku}}</a>
                                                                </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

{{--




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
