@include('includes.header');
@include('includes.navbar');

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Products Feature</h1>
    <div class="container-fluid">
        <form method="post" id="form" action="{{route('saveProductFeature')}}">
            @csrf
            <div class="row">
                <div class="col-4">
                    <label for="parent_category">Select Feature Category</label>
                    <select class="form-control" name="parent_category">
                        <option value="">Select Parent Category</option>
                        <option value="">Leather Look</option>
                        <option value="">Gloss</option>
                        <option value="">Wooden Grain</option>
                        <option value="">Solid Colour</option>
                        <option value="">Single</option>
                        <option value="">Double</option>
                        <option value="">Double Half</option>
                        <option value="">Architrave</option>
                        <option value="">Door Handles</option>
                        <option value="">Locks</option>
                    </select>
                    <label for="name">Name</label>
                    <input type="text" id="txtFeatureName" name="txtFeatureName" class="form-control">
                    <label for="productFeatureName">Feature Name</label><br>
                    <input type="text" id="txtProductFeatureName" name="txtProductFeatureName" class="form-control">
                    <label for="productFeatureTitle">Feature Title</label><br>
                    <input type="text" id="txtProductFeatureTitle" name="txtProductFeatureTitle" class="form-control">
                    <label for="productFeatureImage">Feature Image</label><br>
                    <input type="file" id="txtProductFeatureImage" name="txtProductFeatureImage" class="form-control">
                    <label for="productFeaturePrice">Feature Price</label><br>
                    <input type="text" id="txtProductPrice" name="txtProductFeaturePrice" class="form-control">
                    <div class=" mt-3">
                        <div class="col-4">
                            <button  type="submit" class="btn btn-primary">Add Feature</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('includes.footer');
@include('includes.logout-Model');
@include('includes.script');

