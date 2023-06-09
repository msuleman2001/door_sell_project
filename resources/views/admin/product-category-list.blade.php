@include('includes.header');
@include('includes.navbar')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="col-12">
                    <a href="{{route('addingCategory',$category_id)}}"><input name="category_name" type="" value="Add Category" class="btn btn-primary float-right"></a>
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
                    <th>Name </th>
                    <th>Created At</th>
                    <th>Created By</th>
                    <th>Updated At</th>
                    <th>Updated By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sr=1;
            ?>
            @foreach ($categories as $category)
                <tr>

                    <td>{{$sr++}}</td>
                    <td><a href="{{route('subCategory',$category->category_id)}}">{{ $category->category_name }}</a></td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->created_y_id }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>{{ $category->updated_by_id }}</td>
                    <td class="d-flex">
                        <form action="{{ route('deleteCategory', ['id' => $category->category_id]) }}" method="POST" id="delete-form-{{ $category->category_id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn" data-toggle="modal" data-target="#deleteModal-{{ $category->category_id }}"> <i class="btn fa fa-trash text-white bg-danger delete"></i></button>
                            <div class="modal fade" id="deleteModal-{{ $category->category_id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
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
                                            <button type="submit" form="delete-form-{{ $category->category_id }}" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <a class="mt-2" href="{{route('updateCategory', $category->category_id)}}"><i class="btn fa fa-pencil text-white bg-success edit"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
</div>

<!-- Logout Modal-->
@include('includes.logout-Model');
@include('includes.script');
