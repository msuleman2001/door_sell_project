@include('includes.header');
@include('includes.navbar');

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Products Feature</h1>
    <div class="container-fluid">
        <form method="post" id="form" action="{{route('saveProductFeature')}}" enctype="multipart/form-data">
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
                    <input type="text" id="txtProductFeatureName" name="txtProductFeatureName" class="form-control">
                    <label for="txtProductFeatureTitle">Feature Title</label><br>
                    <input type="text" id="txtProductFeatureTitle" name="txtProductFeatureTitle" class="form-control">
                    <label for="fulProductFeatureImage">Feature Image</label><br>
                    <input type="file" id="fulProductFeatureImage" name="fulProductFeatureImage" class="form-control">
                    <label for="productFeaturePrice">Feature Price</label><br>
                    <input type="text" id="txtProductPrice" name="txtProductPrice" class="form-control">
                    <label for="txtProductFeatureDetails">Product Feature Details</label><br>
                    <div>
                        <textarea name="txtProductFeatureDetails" class="form-control" id="txtProductFeatureDetails" rows="4" style="background: #fff;"></textarea>
                    </div>
                    <div class=" mt-3">
                        <div class="col-4">
                            <button  type="submit" class="btn btn-primary">Add Feature</button>
                        </div>
                    </div>
                    </div>
                </div>
        </form>
            </div>


    </div>
    <table class="table table-stripped" id="table">
            <thead>
                <tr>
                    <th>Sr #</th>
                    <th>Name </th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Updated At</th>
                    <th>Updated By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_features as $product_feature)
                    <tr>
                        <?php
                            $sr=1;
                        ?>
                        <td>{{$sr++}}</td>
                        <td>{{ $product_feature->product_feature_parent_name }}</td>
                        <td>{{ $product_feature->product_feature_name }}</td>
                        <td>{{ $product_feature->product_feature_title }}</td>
                        <td>{{ $product_feature->product_feature_image }}</td>
                        <td>{{ $product_feature->product_feature_price }}</td>
                        <td class="d-flex">
                            <form action="{{ route('deleteCategory', ['id' => $product_feature->product_feature_id]) }}" method="POST" id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn" data-toggle="modal" data-target="#deleteModal"> <i class="btn fa fa-trash text-white bg-danger delete"></i></button>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete Category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" form="delete-form" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <a class="mt-2" href="{{route('editProductFeature',['id'=> $product_feature->product_feature_id])}}"><i class="btn fa fa-pencil text-white bg-success edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@include('includes.footer');
@include('includes.logout-Model');
@include('includes.script');

