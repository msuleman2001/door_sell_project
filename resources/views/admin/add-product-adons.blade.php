@include('includes.header');
{{--<h1>Hello</h1>--}}

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
                <div class="sidebar-brand-text mx-3">FUNDA <sup>WEB IT</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Add items
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link" href="{{route('addCategory')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Products Category</span></a>
    </li>



    <li class="nav-item">
        <a class="nav-link" href="{{route('addProduct')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Products</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href={{route('addColour')}}>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage  Colours</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('addColourType')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage  Colours Type</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('userList')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Users</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('wishList')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Wishlist</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('addingAdons')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Addons</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('commentList')}}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>  Manage Comments</span></a>
    </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{route('manageCart')}}">--}}
{{--                <i class="fas fa-fw fa-chart-area"></i>--}}
{{--                <span>  Manage Cart</span></a>--}}
{{--        </li>--}}
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60'}}" alt= "">">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                <div class="small text-gray-500">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60'}}" alt= "">">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                <div class="small text-gray-500">Jae Chun · 1d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60'}}" alt= "">">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60'}}" alt= "">">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                        <!--<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->

                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Manage Addons</h1>
            <form id="addon-form" action="{{route('add.Addon')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="form-group">
                                    <label for="addon_title">Add Title </label>
                                    <input type="text" class="form-control col-md-6" name="addon_title" id="addon_title"><br>
                                    <label for="addon_type">Addon Type </label>
                                    <input type="text" class="form-control col-md-4" name="adon_type" id="addon_type"><br>
                                    <label for="addon_image">Addon Image </label>
                                    <input type="file" class="form-control col-md-4" name="adon_image" id="addon_image"><br>
                                    <label for="addon_price">Addon Price </label>
                                    <input type="number" class="form-control col-md-4" name="adon_price" id="addon_price"><br>
                                    <button type="button" value="addAddonJson" id="addAddon" class="btn btn-primary">Add Addon</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



            <button id="submit-addons" name="addAddonItem" class="btn-success">Submit Addons</button>

            <div id="table-container"></div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


{{--Code to add data into json and show in the table--}}
<script>

    var addons = []; // Array to store addon objects in JSON format

    $(document).ready(function () {
        $("#addAddon").click(function () {
            // Create a JSON object with values from input fields
            var addon = {
                'title': $("#addon_title").val(),
                'type': $("#addon_type").val(),
                'image': $("#addon_image").val(),
                'price': $("#addon_price").val()
            };

            addons.push(addon); // Add the object to the addons array

            // Clear the input fields
            $("#addon_title").val("");
            $("#addon_type").val("");
            $("#addon_image").val("");
            $("#addon_price").val("");

            // Call the function to display the table
            displayTable();
        });


        $("#table-container").on("click", ".delete-addon", function() {
            var index = $(this).data("index");
            deleteAddon(index);
        });
    });

    function displayTable() {
        // Create the table HTML dynamically using jQuery
        var tableHTML = '<table class="table table-striped"><thead><tr><th>Title</th>' +
            '<th>Type</th>' +
            '<th>Image</th>' +
            '<th>Price</th>' +
            '<th>Action</th>' +
            '</tr></thead>' +
            '<tbody>';

        // Loop through the addons array and create a table row for each object
        for (var i = 0; i < addons.length; i++) {
            // Generate the HTML for the edit and delete buttons
            var editButtonHTML = '<button class="btn btn-primary btn-sm edit-addon" data-index="' + i + '" onclick="editAddon(' + i + ')">Edit</button>';
            var deleteButtonHTML = '<button class="btn btn-danger btn-sm delete-addon" data-index="' + i + '">Delete</button>';

            // Generate the HTML for the row with the data and buttons
            tableHTML += '<tr><td>' + addons[i].title + '</td><td>'
                + addons[i].type + '</td><td>' + addons[i].image +
                '</td><td>' + addons[i].price + '</td><td>' + editButtonHTML +
                ' ' + deleteButtonHTML + '</td></tr>';
        }

        tableHTML += '</tbody></table>';

        // Replace the HTML of the div with the new table
        $("#table-container").html(tableHTML);


    }

    function editAddon(index) {
        // Remove the addon from the array
        var addon = addons.splice(index, 1)[0];

        // Populate the form with the addon's data
        $("#addon_title").val(addon.title);
        $("#addon_type").val(addon.type);
        $("#addon_image").val(addon.image);
        $("#addon_price").val(addon.price);

        // Update the table

    }

    function deleteAddon(index) {
        // Use the splice() method to remove the addon at the given index
        addons.splice(index, 1);

        // Update the table with the new data
        displayTable();
    }
    $("#submit-addons").click(function () {

        // Create a JSON object with values from input fields
        var addon = {
            'addon_title': addons[0].title, // get the value from the adons object
            'addon_item': JSON.stringify(addons)
        };


        // Send the data to the server using ajax()
        $.ajax({
            url: '/add-data/',
            method: 'post',
            data: addon,
            success: function(response) {
                // Display a success message to the user
                alert("Addons added successfully!");
            },
            error: function(error) {
                // Display an error message to the user
                alert("Failed to add addons: " + error.message);
            }
        });
    });
</script>













</body>

</html>