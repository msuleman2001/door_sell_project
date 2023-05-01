@include('includes.header');
@include('includes.navbar');
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
            <form id="add-product-form" method="post" action="{{route('addedProduct')}}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <select name="category_id" class="form-control col-md-6" id="categories">
                                        <option value="">--Select Product Category--</option>

                                        @foreach($categories as $category)
                                        <option value={{ $category->category_id}}>{{ $category->category_name}}</option>
                                        @endforeach
                                    </select><br>
                                    <label for="productName">Product Name</label>
                                    <input class="form-control col-md-6" value="" name="product_title" type="text" id="productName"><br>

                                    <label for="productPrice">Product Price</label>
                                    <input class="form-control col-md-6" value="" name="product_price" type="number" id="productPrice">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label for="productFrontImage">Front Image</label>
                                    <input class="form-control col-md-6" value="" name="product_front_image" type="file" id="productFrontImage"><br>
                                    <label for="productFrontImage">Back Image</label>
                                    <input class="form-control col-md-6" value="" name="product_back_image" type="file" id="productBackImage"><br>

                                    <label for="productsku">SKU</label>
                                    <input class="form-control col-md-6" value="" name="product_sku" type="text" id="productsku"><br>

                                    <label for="productDetails">Product Details</label>
                                    <div class="form-outline w-100">
                                     <textarea name="product_details" class="form-control" id="textAreaExample" rows="4"
                                                         style="background: #fff;"></textarea>


                                </div>
                            </div>

                        </div>
                        <br>
                        <button type="submit"  id="addProduct" class="btn btn-primary" >Add Products</button>
                    </div>
                </div>
                </div>
            </form>
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
