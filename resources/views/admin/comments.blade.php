@include('includes.header');
@include('includes.navbar');
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container mt-5">
                <table class="table table-stripped" id="table">
                    <div class="card">
                        <div class="card-body">
                            <h2>Manage Comments</h2>
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
                        <th>Comment Title</th>
                        <th>Comment Content</th>
                        <th>User</th>
                        <th>Product</th>
                        <th>Created At</th>
                        <th>Created By</th>
                        <th>Updated At</th>
                        <th>Updated By</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <?php
                        $sr=1;
                        ?>
                        @foreach ($comments as $comment)
                            <td>{{$sr++}}</td>
                            <td>{{ $comment->comment_title }}</td>
                            <td>{{ $comment->comment_content }}</td>
                            <td>{{ $comment->user_id }}</td>
                            <td>{{ $comment->comment_product_id }}</td>
                            <td>{{ $comment->created_at}}</td>
                            <td>{{ $comment->created_by_id }}</td>
                            <td>{{$comment->updated_at }}</td>
                            <td>{{ $comment->updated_by_id }}</td>
                            <td class="d-flex">
                                <i class="fas fa-check-circle"></i> <!-- Enabled -->
                                <i class="fas fa-times-circle"></i> <!-- Disabled -->
                            </td>


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
