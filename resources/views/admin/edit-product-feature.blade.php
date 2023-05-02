@include('includes.header');
@include('includes.navbar');

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Products Feature</h1>
    <div class="container-fluid">
        <form method="post" id="form" action="{{route('updateProductFeature',['id'=>$product_feature->product_feature_id])}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="ddlCategoryFeature">Select Feature Category</label>
                    <select class="form-control" name="ddlCategoryFeature">
                        <option value="">Select Parent Category</option>
                        <option value="Leather Look">Leather Look</option>
                        <option value="Gloss">Gloss</option>
                        <option value="Wooden Grain">Wooden Grain</option>
                        <option value="Solid Colour">Solid Colour</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="DoubleHalf">DoubleHalf</option>
                        <option value="Architrave">Architrave</option>
                        <option value="DoorHandles">DoorHandles</option>
                        <option value="Locks">Locks</option>
                    </select>

                    <label for="txtProductFeatureName">Feature Name</label><br>
                    <input value="{{$product_feature->product_feature_name}}" type="text" id="txtProductFeatureName" name="txtProductFeatureName" class="form-control">
                    <label for="txtProductFeatureTitle">Feature Title</label><br>
                    <input value="{{$product_feature->product_feature_title}}" type="text" id="txtProductFeatureTitle" name="txtProductFeatureTitle" class="form-control">
                    <label for="productFeatureImage">Feature Image</label><br>
                    <input type="file" id="fulProductFeatureImage" name="fulProductFeatureImage" class="form-control">
                    <label for="productFeaturePrice">Feature Price</label><br>
                    <input value="{{$product_feature->product_feature_price}}" type="text" id="txtProductPrice" name="txtProductPrice" class="form-control">
                    <label for="txtProductFeatureDetails">Product Feature Details</label><br>
                    <div>
                        <textarea name="txtProductFeatureDetails" class="form-control" id="txtProductFeatureDetails" rows="4" style="background: #fff;"></textarea>
                    </div>
                    <div class=" mt-3">
                        <div class="col-4">
                            <button  type="submit" class="btn btn-primary">Update Feature</button>
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
@include('includes.logout-Model');
@include('includes.script');

