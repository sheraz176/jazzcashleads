<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Login</title>
   <!-- Iconic Fonts -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="{{asset('admin/assets/icons/icons.js')}}" ></script>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{asset('admin/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{asset('admin/assets/css/slick.css')}}" rel="stylesheet">
    <!-- medjestic styles -->
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="{{asset('admin/assets/css/morris.css')}}" rel="stylesheet">

    <link href="{{asset('admin/assets/css/toastr.min.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar login-body">
   <!-- Preloader -->
   <div id="preloader-wrap">
      <div class="spinner spinner-8">
         <div class="ms-circle1 ms-child"></div>
         <div class="ms-circle2 ms-child"></div>
         <div class="ms-circle3 ms-child"></div>
         <div class="ms-circle4 ms-child"></div>
         <div class="ms-circle5 ms-child"></div>
         <div class="ms-circle6 ms-child"></div>
         <div class="ms-circle7 ms-child"></div>
         <div class="ms-circle8 ms-child"></div>
         <div class="ms-circle9 ms-child"></div>
         <div class="ms-circle10 ms-child"></div>
         <div class="ms-circle11 ms-child"></div>
         <div class="ms-circle12 ms-child"></div>
      </div>
   </div>
   <!-- login-form -->
   <div class="login-wrapper">
      <div class="row">
         <div class="col-md-5 pr-0">
            <div class="form-login-wrapper p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <h4 class="login-head">Login</h4>
                  <p class="login-text">To log in, enter your email address</p>
                  <div class="row">
                     <div class="col-md-12 ">
                        <label class="login-label">Email Address</label>
                        <div class="input-group custom-input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend1"><svg width="15" height="13"
                                    viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M1.125 3.6665L6.71417 7.39262C7.19003 7.70986 7.80997 7.70986 8.28583 7.39262L13.875 3.6665M2.54167 11.4582H12.4583C13.2407 11.4582 13.875 10.8239 13.875 10.0415V2.95817C13.875 2.17577 13.2407 1.5415 12.4583 1.5415H2.54167C1.75926 1.5415 1.125 2.17577 1.125 2.95817V10.0415C1.125 10.8239 1.75926 11.4582 2.54167 11.4582Z"
                                       stroke="#333333" stroke-opacity="0.5" stroke-width="1.4" stroke-linecap="round"
                                       stroke-linejoin="round" />
                                 </svg>
                              </span>
                           </div>
                           <input type="text" class="form-control @error('email') is-invalid @enderror"
                              placeholder="Enter your email address" id="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="inputGroupPrepend1" required="">
                              @error('email')
                              <div class="invalid-tooltip">
                              <strong>{{ $message }}</strong>
                            </div>
                           @enderror


                        </div>
                     </div>
                     <div class="col-md-12 ">
                        <label class="login-label">Password</label>
                        <div class="input-group custom-input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend1">
                                 <svg width="13" height="15" viewBox="0 0 13 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                       d="M6.50016 9.625V11.0417M2.25016 13.875H10.7502C11.5326 13.875 12.1668 13.2407 12.1668 12.4583V8.20833C12.1668 7.42593 11.5326 6.79167 10.7502 6.79167H2.25016C1.46776 6.79167 0.833496 7.42593 0.833496 8.20833V12.4583C0.833496 13.2407 1.46776 13.875 2.25016 13.875ZM9.3335 6.79167V3.95833C9.3335 2.39353 8.06497 1.125 6.50016 1.125C4.93536 1.125 3.66683 2.39353 3.66683 3.95833V6.79167H9.3335Z"
                                       stroke="#333333" stroke-opacity="0.5" stroke-width="1.4"
                                       stroke-linecap="round" />
                                 </svg>
                              </span>
                           </div>
                           <input type="password" class="form-control  @error('password') is-invalid @enderror"
                              placeholder="Create a password" id="password" aria-describedby="inputGroupPrepend1" name="password" required autocomplete="current-password">
                              @error('password')
                              <div class="invalid-tooltip">
                                <strong>{{ $message }}</strong>
                              </div>
                           @enderror


                        </div>
                     </div>
                     <div class="col-md-12 ">
                        <ul class="ms-list d-flex justify-content-between">
                           <li class="ms-list-item p-0">
                              <label class="ms-checkbox-wrap">
                                 <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                 <i class="ms-checkbox-check"></i>
                              </label>
                              <span class="text-white"> Remember password</span>
                           </li>

                        </ul>
                     </div>
                     <div class="col-md-12 ">
                        <button type="submit" class="btn btn-warning w-100 mt-1 py-2">Login</button>
                     </div>


                  </div>
            </div>
            </form>
         </div>
         <div class="col-md-7">
            <div class="img-wrapper py-3 pl-0 pr-3">
            <img src="https://cdn.pixabay.com/photo/2023/02/15/10/21/lead-magnet-7791403_1280.jpg">
         </div>
         </div>
      </div>
   </div>
   </div>

   <!-- MODALS -->
   <!-- Forgot Password Modal -->
   <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
      <div class="modal-dialog modal-dialog-centered modal-min" role="document">
         <div class="modal-content">
            <div class="modal-body text-center">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                     aria-hidden="true">×</span></button>
               <i class="flaticon-secure-shield d-block"></i>
               <h1>Forgot Password?</h1>
               <p> Enter your email to recover your password </p>
               <form method="post">
                  <div class="ms-form-group has-icon">
                     <input type="text" placeholder="Email Address" class="form-control" name="forgot-password"
                        value="">
                     <i class="material-icons">email</i>
                  </div>
                  <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
               </form>
            </div>
         </div>
      </div>
   </div>


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

</body>

</html>
