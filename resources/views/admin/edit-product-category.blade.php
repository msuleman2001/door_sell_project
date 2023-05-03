@include('includes.header');
@include('includes.navbar');
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><Update></Update> Product Category</h1>
            <div class="container-fluid">

                <form method="post" id="form" action="{{route('updatingCategory',$category->category_id)}}"  enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="category_name" class="form-control" value="{{$category->category_name}}">
                            <label for="image">Category Image</label>
                            <input type="file" id="image" name="category_image" class="form-control">
                            <label for="productCatDetails">Product Details</label><br>
                            <div>
                                     <textarea  name="category_details" class="form-control" id="textAreaExample" rows="4"
                                               style="background: #fff;"></textarea>
                            </div>
                            <div class=" mt-3">
                                <div class="col-4">
                                    <button  type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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


