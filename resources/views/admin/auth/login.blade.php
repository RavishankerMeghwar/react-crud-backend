<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('./assets/img/stark-saas/stark-saas.jpg') }}" type="image/x-icon" />

    <!-- Title -->
    <title>Arcadian&nbsp;Coverage</title>

    <!-- Bootstrap css-->
    <link id="style" href="{{ asset('./assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('./assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('./assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('./assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('./assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="ltr main-body leftmenu error-1">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('./assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <img src="{{ asset('./assets/img/stark-saas/stark-saas.jpg') }}"
                                    class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light w-25"
                                    alt="logo">
                                <img src="{{ asset('./assets/img/stark-saas/stark-saas.jpg') }}"
                                    class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo w-25"
                                    alt="logo">
                                <div class="clearfix"></div>
                                <img src="{{ asset('./assets/img/svgs/user.svg') }}" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Create Your Account</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with
                                    the global community</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="main-container container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="{{ asset('./assets/img/stark-saas/stark-saas.jpg') }}"
                                            class=" d-lg-none header-brand-img text-start float-start mb-4"
                                            alt="logo">
                                        <div class="clearfix"></div>
                                        <form action="{{route('login.process')}}" method="post">
                                            @csrf
                                            <h5 class="text-start mb-2">Signin to Your Account</h5>
                                            <p class="mb-4 text-muted tx-13 ms-0 text-start">Signin to create, discover
                                                and connect with the global community</p>
                                            <div class="form-group text-start">
                                                <label>Email</label>
                                                <input class="form-control" placeholder="Enter your email"
                                                    type="email" name="email">

                                            </div>
                                            <div class="form-group text-start">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter your password"
                                                    type="password" name="password">

                                            </div>
                                            {{-- <a href="" type="submit"class="btn ripple btn-main-primary btn-block">Sign In</a> --}}
                                            <button type="submit" class="btn ripple btn-main-primary btn-block">Sign
                                                In</button>
                                        </form>
                                        @if (session('error'))
                                            <div id="error-alert" class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <!-- <div class="text-start mt-5 ms-0">
            <div class="mb-1"><a href="">Forgot password?</a></div>
            <div>Don't have an account? <a href="#">Register Here</a></div>
           </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->

    <!-- Jquery js-->
    <script src="{{ asset('./assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('./assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('./assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('./assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('./assets/js/select2.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('./assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('./assets/js/themeColors.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('./assets/js/custom.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        @if (session('success'))
            toastr.options = {
                "closeButton": true,
            }
            toastr.success("{{ session('success') }}");
        @endif

        @if ($errors->any())
            toastr.options = {
                "closeButton": true,
            }

            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

</body>

</html>
