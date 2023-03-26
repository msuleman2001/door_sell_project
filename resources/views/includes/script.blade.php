{{--Bootstrap and Jquey Cdn--}}


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->
<script src="{{ asset('/dashboard/jquery/jquery.min.js') }}"></script>
<!-- Data Tables-->
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    // Initialize DataTable
    var table = $('table').DataTable({
        // DataTable options
    });
    // Destroy DataTable before reinitializing to resolve the warning of re-initializing
    table.destroy();

</script>

<script>

</script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('/dashboard/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages public directory-->
<script src="{{ asset('/dashboard/js/sb-admin-2.js') }}"></script>


