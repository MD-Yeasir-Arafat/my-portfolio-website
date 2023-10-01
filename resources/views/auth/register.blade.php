<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Admin </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend') }}/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
    
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="{{ asset('backend') }}/assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="{{ asset('backend') }}/assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>
    
                        <div class="p-3">
                            {{-- =============================== --}}
                            
                            <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
                                    @csrf
                                {{-- name --}}
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="name" name="name" type="text" required placeholder="Name">
                                    </div>
                                </div>

                                 {{-- username --}}
                                 <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" id="username" name="username" type="text" required placeholder="User Name">
                                    </div>
                                </div>

                                {{-- email --}}
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="email" name="email" type="email" required placeholder="Email">
                                    </div>
                                </div>
                                {{-- password --}}
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="password" name="password" required placeholder="Password">
                                    </div>
                                </div>

                                 {{--Confirm password --}}
                                 <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required placeholder="Confirm Password">
                                    </div>
                                </div>
    
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group text-center row mt-3 pt-1">
                                    <div class="col-12">
                                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                </div>
    
                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3 text-center">
                                        <a href="{{ route('login') }}" class="text-muted">Already have account?</a>
                                    </div>
                                </div>
                            </form>
                            <!-- end form -->
                            {{-- ============================================ --}}
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
        <script src="{{ asset('backend') }}/assets/libs/jquery/jquery.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{ asset('backend') }}/assets/libs/node-waves/waves.min.js"></script>

        <script src="{{ asset('backend') }}/assets/js/app.js"></script>

    </body>
</html>