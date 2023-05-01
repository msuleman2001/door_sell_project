@include('includes.header');
@include('includes.navbar')
@if ($errors->any())
    <script >
        alert('Something went wrong')
    </script>
@endif

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2>Manage Users</h2>
            </div>
        </div>
        <div id="example_wrapper">
            <div class="col-md-6 mb-4">
                <!-- The buttons container will be appended here -->
            </div>
        </div>
        <!-- Page Heading -->
        <div class="container mt-5">
            <table class="table table-stripped" id="table">
                <thead>
                    <tr>
                        <th>Sr #</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Created At</th>
                        <th>Created By</th>
                        <th>Updated At</th>
                        <th>Updated By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <?php
                                $sr=1;
                            ?>
                            <td>{{$sr++}}</td>
                            <td>{{ $user->user_name }}</td>
                            <td>{{ $user->user_email }}</td>
                            <td>{{ $user->created_at}}</td>
                            <td>{{ $user->created_by_id }}</td>
                            <td>{{$user->updated_at }}</td>
                            <td>{{ $user->updated_by_id }}</td>
                            <td>
                                <!-- Default switch -->
                                <!-- HTML code -->
                                <form method="post" id="toggle-form-{{ $user->user_id }}" action="{{ route('toggle', ['id'=>$user->user_id]) }}">
                                    @csrf
                                    @method('put')
                                    <label for="customSwitches{{ $user->user_id }}">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitches{{ $user->user_id }}" name="is_enabled" {{ $user->is_enabled ? 'checked' : '' }}>
                                            <span class="custom-control-label"></span>
                                        </div>
                                    </label>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
</div>

<!-- End of Page Wrapper -->

<!-- Logout Modal-->
@include('includes.footer');
@include('includes.logout-Model');
@include('includes.script');
<!-- jQuery code to change the value in database based on toggle button-->
@foreach($users as $user)
    <script>
        $(document).ready(function() {
            $('#customSwitches{{ $user->user_id }}').change(function() {
                var is_enabled = $(this).is(':checked') ? 1 : 0;
                $.ajax({
                    url: $('#toggle-form-{{ $user->user_id }}').attr('action'),
                    method: 'PUT',
                    data: {
                        _token: $('input[name=_token]').val(),
                        is_enabled: is_enabled
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endforeach
