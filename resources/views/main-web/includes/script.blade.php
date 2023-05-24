<!-- jQuery -->
<script src="{{asset('libs/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('libs/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('libs/slick/slick.min.js')}}"></script>
<!-- mixitup filter -->
<script src="{{asset('libs/mixitup/mixitup.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('libs/Magnific-Popup-master/jquery.magnific-popup.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<script  src="{{asset('libs/google-map/gmap.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('main_website_assets/js/script.js')}}"></script>
<!-- Swiffy Slider -->
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
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



    function selectItem(item){
        var item_value = item.dataset.itemprice;
    }
    function showArchitrave(){
        $('#divArchitrave').show();
    }
    function showColor(div){
        $('.color-options').hide();
        $('#' + div).show();
    }
    function showColorSelection(){
        $('#divColorSelection').show();
    }
    function showDoorType(){
        $('#divDoorType').show();
    }

    function showDoorSize(door_size){
        $('.door-size').hide();
        $('#div' + door_size).show();
    }
    function showWallframes(){
        $('#divDoorWallframes').show();
    }
    function showDoorQuantity(){
        $('#divTotalDoors').show();
    }
    function showDoorLocks(){
        $('#divDoorLocks').show();
    }
    function showTotalDoors(){
        $('#divTotalDoors').show();
    }


</script>
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover({
            html: true,
            trigger: 'hover',
        });
        $(document).ready(function() {
            $('.product-feature').on('click', function() {
                var productDiv = $(this).closest('.feature'); // get the closest feature div
                productDiv.find('.product-feature').removeClass('active'); // remove "active" class from all features within the same feature div
                $(this).addClass('active'); // add "active" class to clicked feature
            });
        });

    });


</script>
{{--swiffy slider for the product image--}}
<script>
    function imageClick(imageNumber) {
        setTimeout(() => {
            //Find the slider element
            const sliderElement = document.getElementById('pgalleryModal');
            //Slide to he right image
            swiffyslider.slideTo(sliderElement, imageNumber);
            //Listen to slide end and set focus to the container to enable keyboard navigation
            swiffyslider.onSlideEnd(sliderElement, () => sliderElement.querySelector(".slider-container").focus());
        }, 300)
    }

    function thumbHover(imageNumber) {
        //Find the slider element
        const sliderElement = document.getElementById('pgallery');
        //Slide to he right image
        swiffyslider.slideTo(sliderElement, imageNumber)
    }
</script>

