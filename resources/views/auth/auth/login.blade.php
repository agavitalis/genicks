<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Biafra | Dashboard &amp; </title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <link href="../../assets/css/theme.css" rel="stylesheet">
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center no-gutters">
                <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape"
                        src="../../assets/img/illustrations/bg-shape.png" alt="" width="250"><img
                        class="bg-auth-circle-shape-2" src="../../assets/img/illustrations/shape-1.png" alt=""
                        width="150">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row no-gutters h-100">
                                <div class="col-md-5 text-white text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7">
                                        <div class="bg-holder bg-auth-card-shape"
                                            style="background-image:url(../../assets/img/illustrations/half-circle.png);">
                                        </div>
                                        <!--/.bg-holder-->
                                        <div class="z-index-1 position-relative"><a
                                                class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block"
                                                href="../../index-2.html">Biafra</a>
                                            <p class="text-100">With the power of Biafra, you can now focus only on
                                                functionaries for your digital products, while leaving the UI design on
                                                us!</p>
                                        </div>
                                    </div>
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                                        <p>Don't have an account?<br><a class="text-white text-underline"
                                            href="/register">Get started!</a></p>
                                        <p class="mb-0 mt-4 mt-md-5 fs--1 font-weight-semi-bold text-300">Read our <a
                                                class="text-underline text-300" href="#!">terms</a> and <a
                                                class="text-underline text-300" href="#!">conditions </a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <h3>Account Login</h3>
                                        <form method="POST" action="/login">
                                            @csrf

                                            <div class="form-group"><label for="card-email">Email address</label>
                                                <input class="form-control @error('email') is-invalid @enderror" id="card-email" type="email" name="email" />
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between">
                                                    <label for="card-password">Password</label>
                                                    @if (Route::has('password.request'))
                                                        <a class="fs--1" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Password?') }}
                                                        </a>
                                                    @endif
                                                   
                                                </div>
                                                <input class="form-control @error('password') is-invalid @enderror" id="card-password" type="password" name='password' />
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="card-checkbox" checked="checked" />
                                                    <label class="custom-control-label" for="card-checkbox">Remember me</label>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Log in</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/lib/stickyfilljs/stickyfill.min.js"></script>
    <script src="../../assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="../../assets/lib/is_js/is.min.js"></script>
    <script src="../../assets/lib/%40fortawesome/all.min.js"></script>
    <script src="../../assets/lib/lodash/lodash.min.js"></script><!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122907869-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-122907869-1');
    </script>
    <script src="../../assets/js/theme.js"></script>
</body>

</html>