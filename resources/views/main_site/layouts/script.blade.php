
  <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="{{asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/perfect-scrollbar.js')}}"> </script>
    <script src="{{asset('admin/assets/js/jquery-ui.min.js')}}"> </script>

    <!-- Global Required Scripts End -->
    <script src="{{asset('admin/assets/js/d3.v3.min.js')}}"> </script>
    <script src="{{asset('admin/assets/js/topojson.v1.min.js')}}"> </script>
    <script src="{{asset('admin/assets/js/datamaps.all.min.js')}}"> </script>





    <!-- medjestic core JavaScript -->
    <script src="{{asset('admin/assets/js/framework.js')}}"></script>
    <!-- Settings -->
    <script src="{{asset('admin/assets/js/settings.js')}}"></script>


    <script src="{{asset('admin/assets/js/toastr.min.js')}}"> </script>
    <script src="{{asset('admin/assets/js/toast.js')}}"> </script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


    <script>
        $(document).ready(function() {
            var success_message = "{{ Session::get('success') }}";
            if (success_message) {
                toastSuccess(success_message);
            }

            var error_message = "{{ Session::get('error') }}";
            if (error_message) {
                toastdanger(error_message);
            }

        });
        function toastSuccess(success_message) {
            toastr.remove();
            toastr.options.positionClass = "toast-top-right";
            toastr.success(success_message);
        }

        function toastdanger(error_message) {
            toastr.remove();
            toastr.options.positionClass = "toast-top-right";
            toastr.error(error_message);
        }
    </script>



@stack('scripts')
