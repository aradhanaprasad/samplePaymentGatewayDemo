
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Sample Payment Gateway Demo</title>

    <meta name="description" content="Sample Payment Gateway Demo">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Sample Payment Gateway Demo">
    <meta property="og:site_name" content="Sample Payment Gateway Demo">
    <meta property="og:description" content="Sample Payment Gateway Demo">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">
    <!-- <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css"> -->

    <link href="{{ asset('css/dashmix.min.css') }}" rel="stylesheet" type="text/css" >

    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/
     4.0.0/css/bootstrap.min.css">
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<style>

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}


</style>
<body>


<div id="page-container">
    <main id="main-container">
        <div class="bg-image" style="background-image: url({{url('assets/media/photos/photo19@2x.jpg')}}")>
            <div class="row no-gutters justify-content-center bg-primary-dark-op">
                <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
                    <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                        <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                            <div class="mb-2 text-center">
                                <a class="link-fx font-w700 font-size-h1" href="index.html">
                                    <span class="text-dark">Payment</span><span class="text-primary">Gateway</span>
                                </a>
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Register</p>
                            </div>
                            <form id="basic-form" method="POST" action="{{ route('saveUser') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="test" class="form-control form-control-alt" id="firstName" name="firstName" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="test" class="form-control form-control-alt" id="lastName" name="lastName" placeholder="Last Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="test" class="form-control form-control-alt" id="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-alt" id="password"
                                    name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="mobile" class="form-control form-control-alt" id="mobile"
                                    name="mobile" placeholder="mobile" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-alt" id="address"
                                    name="address" placeholder="Address" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="agreetc" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">
                                      I Agree to Terms and Condition.
                                    </label>
                                  </div>
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-block btn-hero-primary">
                                         <a style="color: white">Sign Up </a>
                                    </button>

                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between" style=" float: left;">
                                        <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('login') }}">
                                            Login
                                        </a>
                                    </p>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>




<script src="{{asset('assets/js/dashmix.core.min-3.0.js')}}"></script>

<!--
    Dashmix JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="{{asset('assets/js/dashmix.app.min-3.0.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>

    <!-- jQuery (required for Select2 + jQuery Validation plugins) -->
    <script src="assets/js/lib/jquery.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets/js/plugins/jquery-validation/additional-methods.js"></script>

    <!-- Page JS Helpers (Select2 plugin) -->
    <script>Dashmix.helpersOnLoad(['jq-select2']);</script>

    <!-- Page JS Code -->
    <script src="assets/js/pages/be_forms_validation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#basic-form").validate();
        });
    </script>
</body>
</html>


