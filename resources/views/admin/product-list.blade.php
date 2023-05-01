@include('includes.header')
@include('includes.navbar')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="container mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12">
                            <a href="{{route('addingProduct')}}"><input name="product_name" type="" value="Add Products" class="btn btn-primary float-right"></a>
                        </div>
                    </div>
                </div>
                <div id="example_wrapper">
                    <div class="col-md-6 mb-4">
                        <!-- The buttons container will be appended here -->
                    </div>
                </div>
                <table class="table table-stripped" id="table">
                    <thead>
                        <tr>
                            <th>Sr #</th>
                            <th> Name </th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Updated At</th>
                            <th>Updated By</th>
                            <th>Price</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sr=1
                        ?>
                        <tr>
                            @foreach ($products as $product)
                                <td>{{$sr++}}</td>
                                <td>{{ $product->product_title }}</td>
                                <td>{{$product->created_at }}</td>
                                <td>{{ $product->created_by_id}}</td>
                                <td>{{ $product->updated_at}}</td>
                                <td>{{ $product->updated_by_id}}</td>
                                <td>{{ $product->product_price}}</td>
                                <td>{{$product->category_name}}</td>
                                <td class="d-flex">
                                    <form action="{{ route('deleteProduct', ['id' => $product->product_id]) }}" method="POST" id="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn" data-toggle="modal" data-target="#deleteModal"> <i class="btn fa fa-trash text-white bg-danger delete"></i></button>
                                        <!-- Confirmation Modal -->
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
                                    <a class="mt-2" href="{{route('updateProduct',['id'=>$product->product_id] )}}"><i class="btn fa fa-pencil text-white bg-success edit"></i></a>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('includes.logout-Model')
@include('includes.script')
@include('includes.footer')
