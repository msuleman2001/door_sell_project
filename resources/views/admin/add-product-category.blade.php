@include('includes.header');
@include('includes.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
<div class="container-fluid">

        <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Products Category</h1>
    <div class="container-fluid">
        <form method="post" id="form" action="{{route('addedCategory')}}"  enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">

                    <label for="name">Name</label>
                    <input type="text" id="name" name="category_name" class="form-control">
                    <input name="hidParentCategory" id="hidParentCategory" type="hidden" value="{{$category_id}}">
                    <label for="image">Category Image</label>
                    <input type="file" id="image" name="category_image" class="form-control">
                    <label for="back_image">Back Image</label>
                    <input type="file" id="back_image" name="category_back_image" class="form-control">
                    <label for="productCatDetails">Product Details</label><br>
                    <div>
                        <textarea name="category_details" class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                    </div>
                    <div class=" mt-3">
                        <div class="col-4">
                            <button  type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </div>
                    </div>
                </div>
        </form>
            </div>

    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('includes.footer');
<!-- Logout Modal-->
@include('includes.logout-Model');
@include('includes.script');

