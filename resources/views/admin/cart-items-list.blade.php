@include('includes.header');
@include('includes.navbar');

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <table class="table table-bordered m-0">

        <thead>
        <tr>

            <!-- Set columns width -->
            <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
            <th class="text-right py-3 px-4" style="width: 100px;">Username</th>
            <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
            <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
            <th class="text-right py-3 px-4" style="width: 100px;">Updated_at</th>

            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
        </tr>
        </thead>
        <tbody>
        @php
            $totalPrice = 0;
        @endphp
        @foreach($cart_items as $cart)
            @php
                $totalPrice += $cart->cart_price;
            @endphp
            <tr>
                <td class="p-4">
                    <div class="media align-items-center">
                        <img src="{{asset($cart->product_front_image)}}" class="d-block ui-w-40 ui-bordered mr-4 img img-fluid" alt="{{$cart->product_title}}" style="height: 100px; width: 100px">
                        <div class="media-body">
                            <a href="#" class="d-block text-dark">{{$cart->product_title}}</a>
                            <small>
                                <span class="text-muted">Color:</span>
                                <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp;
                                <span class="text-muted">Size: </span> EU 37 &nbsp;
                                <span class="text-muted">Ships from: </span> China
                            </small>
                        </div>
                    </div>
                </td>
                <td class="align-middle p-4">{{$cart->user_name}}</td>
                <td class="align-middle p-4">{{$cart->cart_quantity}}</td>
                <td class="text-right font-weight-semibold align-middle p-4">{{$cart->cart_price}}</td>
                <td class="text-right font-weight-semibold align-middle p-2">{{$cart->updated_at}}</td>


            </tr>
        @endforeach

        </tbody>
    </table>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('includes.logout-Model');
@include('includes.script');

</body>

</html>
