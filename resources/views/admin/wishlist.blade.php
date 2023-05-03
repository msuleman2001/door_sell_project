@include('includes.header');
@include('includes.navbar');
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container mt-5">
                <table class="table table-stripped" id="table">
                    <div class="card">
                        <div class="card-body">
                            <h2>Manage Wishlist</h2>
                        </div>
                    </div>
                    <div id="example_wrapper">
                        <div class="col-md-6 mb-4">
                            <!-- The buttons container will be appended here -->
                        </div>
                    </div>
                    <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>Product</th>
                        <th>User</th>
                        <th>Created At</th>

                        <th>Updated At</th>


                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php
                        $sr=1;
                        ?>
                        @foreach ($wish_list as $wish)
                            <td>{{$sr++}}</td>
                            <td><img src="{{asset($wish->product_front_image)}}" class="img-fluid" ></td>
                            <td class="align-middle">{{ $wish->user_name }}</td>
                            <td class="align-middle">{{ $wish->created_at}}</td>
                            <td class="align-middle">{{$wish->updated_at }}</td>



                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            {{--To Add the Copy data tables buttons--}}

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
