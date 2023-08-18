{{-- <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Email</label>
    <input type="text" name="email" id="">
    <label for="">password</label>
    <input type="password" name="password" id="">
    <input type="submit" name="" id="" value="Login">
</form> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Basic Sign In | Front - Admin &amp; Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets\css\vendor.min.css">
    <link rel="stylesheet" href="assets\vendor\icon-set\style.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="assets\css\theme.min.css?v=1.0">
</head>

<body>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main">
        <div class="position-fixed top-0 right-0 left-0 bg-img-hero"
            style="height: 32rem; background-image: url(assets/svg/components/abstract-bg-4.svg);">
            <!-- SVG Bottom Shape -->
            <figure class="position-absolute right-0 bottom-0 left-0">
                <svg preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    viewbox="0 0 1921 273">
                    <polygon fill="#fff" points="0,273 1921,273 1921,0 "></polygon>
                </svg>
            </figure>
            <!-- End SVG Bottom Shape -->
        </div>

        <!-- Content -->
        <div class="container py-5 py-sm-7">
            <a class="d-flex justify-content-center mb-5" href="index.html">
                <img class="z-index-2" src="assets\svg\logos\logo.svg" alt="Image Description" style="width: 8rem;">
            </a>

            <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data"
                class="row justify-content-center">
                @csrf
                <div class="col-md-7 col-lg-5">
                    <!-- Card -->
                    <div class="card card-lg mb-5">
                        <div class="card-body">
                            <!-- Form -->
                            <form class="js-validate">
                                <div class="text-center">
                                    <div class="mb-5">
                                        <h1 class="display-4">Sign in</h1>
                                        <p>Don't have an account yet? <a href="authentication-signup-basic.html">Sign up
                                                here</a></p>
                                    </div>
                                </div>

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label">Your email</label>
                                    <input type="email" class="form-control form-control-lg" name="email"
                                        placeholder="Your Email">
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="input-label" for="signupSrPassword" tabindex="0">
                                        <span class="d-flex justify-content-between align-items-center">
                                            Password
                                        </span>
                                    </label>

                                    <div class="input-group input-group-merge">
                                        <input type="password" class="js-toggle-password form-control form-control-lg"
                                            name="password" id="signupSrPassword" placeholder="Your password"
                                            aria-label="Your password" required=""
                                            data-hs-toggle-password-options='{
                                    "target": "#changePassTarget",
                                    "defaultClass": "tio-hidden-outlined",
                                    "showClass": "tio-visible-outlined",
                                    "classChangeTarget": "#changePassIcon"
                                    }'>
                                        <div id="changePassTarget" class="input-group-append">
                                            <a class="input-group-text" href="javascript:;">
                                                <i id="changePassIcon" class="tio-visible-outlined"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <input type="submit" class="btn btn-lg btn-block btn-primary" value="Sign in">
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </form>
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->


    <!-- JS Implementing Plugins -->
    <script src="assets\js\vendor.min.js"></script>

    <!-- JS Front -->
    <script src="assets\js\theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SHOW PASSWORD
            // =======================================================
            $('.js-toggle-password').each(function() {
                new HSTogglePassword(this).init()
            });


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="./assets/vendor/babel-polyfill/polyfill.min.js"><\/script>');
    </script>
</body>

</html>
