<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('logo/video-camera2.png') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="">
    <div class="bg-overlay"></div>
    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">
                    <div class="mt-4 text-center">
                        <div class="mb-3">
                            <a href="{{ route('dashboard') }}" class="auth-logo">
                                <img src="{{ asset('logo/video-camera2.png') }}" height="30" class="logo-dark mx-auto" alt="">
                                <img src="{{ asset('logo/video-camera2.png') }}" height="30" class="logo-light mx-auto" alt="">
                            </a>
                        </div>
                    </div>
                    <h4 class="text-muted font-size-18 text-center"><b>Register</b></h4>
                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control" id="name" type="text" name="name" required="" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control" id="username" type="text" name="username" required="" placeholder="UserName">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control" id="email" type="email" name="email" required="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control" id="password" type="password" name="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required=""
                                        placeholder="Password Confirmation">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3 pt-1 text-center">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                            <div class="form-group row mt-2 mb-0">
                                <div class="col-12 mt-3 text-center">
                                    <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>
    <!-- end -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
</body>

</html>
