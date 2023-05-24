<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> ASCII | @yield('title')
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('frontend/assets/img/ascii-logo2.png') }}" />

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/ascii-logo2.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/img/ascii-logo2.png') }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend/assets/vendor/simplebar/dist/simplebar.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend/assets/vendor/tiny-slider/dist/tiny-slider.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend/assets/vendor/drift-zoom/dist/drift-basic.min.css') }}" />
    <link rel="stylesheet" media="screen"
        href="{{ asset('frontend/assets/vendor/lightgallery/css/lightgallery-bundle.min.css') }}">

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('frontend/assets/css/theme.min.css') }}">



    <style>
        .modal-header {
            --cz-bg-opacity: 0.09;
            background-color: rgba(var(--cz-dark-rgb), var(--cz-bg-opacity)) !important;
        }

        .modal-open .blur-me {
            transition: 500ms;
            -webkit-filter: blur(5px) grayscale(90%);
            filter: blur(5px) grayscale(90%);
        }

        html {
            scroll-behavior: smooth;
        }

        .element {
            display: block;
        }

        @media only screen and (max-width: 768px) {
            .element {
                display: none;
            }
        }

        @media only screen and (max-width: 480px) {

            .image-container {
                position: relative;
                height: 6vh;
            }

            .center-me {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);

            }
        }


        @media only screen and (min-width: 768px) and (max-width: 1023px) {
            /* div .wrap{
      width: 210px;
      word-wrap: break-word;

    } */

            .image-container {
                position: relative;
                height: 100vh;
            }

            .center-me {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);

            }
        }



        @include('user.animation');
    </style>

</head>
<!-- Body-->


<body class="bg-secondary">



    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                        <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab"
                                data-bs-toggle="tab" role="tab" aria-selected="true"><i
                                    class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
                        <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab"
                                role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
                    </ul>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body tab-content py-4">
                    <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate
                        id="signin-tab">
                        <div class="mb-3">
                            <label class="form-label" for="si-email">Email address</label>
                            <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com"
                                required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="si-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="si-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3 d-flex flex-wrap justify-content-between">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="si-remember">
                                <label class="form-check-label" for="si-remember">Remember me</label>
                            </div><a class="fs-sm" href="#">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
                    </form>
                    <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                        <div class="mb-3">
                            <label class="form-label" for="su-name">Full name</label>
                            <input class="form-control" type="text" id="su-name" placeholder="John Doe"
                                required>
                            <div class="invalid-feedback">Please fill in your name.</div>
                        </div>
                        <div class="mb-3">
                            <label for="su-email">Email address</label>
                            <input class="form-control" type="email" id="su-email"
                                placeholder="johndoe@example.com" required>
                            <div class="invalid-feedback">Please provide a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password">Password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="su-password-confirm">Confirm password</label>
                            <div class="password-toggle">
                                <input class="form-control" type="password" id="su-password-confirm" required>
                                <label class="password-toggle-btn" aria-label="Show/hide password">
                                    <input class="password-toggle-check" type="checkbox"><span
                                        class="password-toggle-indicator"></span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view-demo" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title product-title">See how ASCII can help your business!</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Product gallery-->
                        <div class="col-lg-5 pe-lg-0">

                            <img src="https://www.10wallpaper.com/wallpaper/2560x1600/1606/internet_business_technology_hd_wallpaper_11_2560x1600.jpg"
                                class="rounded-3 pb-2 mb-2" alt="Rounded image">


                            <p class="fs-sm mb-1 mb-lg-2 pb-1">Our team of experts is always available to provide you
                                with a thorough walkthrough of our products so you can learn how ASCII can provide you
                                with greater insight and control in managing your company's operations.</p>


                            <div class="product-details ms-2 pb-1">
                                <ul class="list-unstyled fs-sm">
                                    <li class="d-flex align-items-center"><i
                                            class="ci-check-circle text-success me-1"></i><span
                                            class="fs-ms">Efficiently manage your workflows</span></li>
                                    <li class="d-flex align-items-center"><i
                                            class="ci-check-circle text-success me-1"></i><span class="fs-ms">Make
                                            faster decisions with better data</span></li>
                                    <li class="d-flex align-items-center"><i
                                            class="ci-check-circle text-success me-1"></i><span
                                            class="fs-ms">Automate your business with our solutions</span></li>
                                </ul>
                            </div>

                        </div>
                        <!-- Product details-->
                        <div class="col-lg-7 pt-4 pt-lg-0 image-zoom-pane py-3">


                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <h2 class="h4 mb-2">Book a Demo</h2>
                                    {{-- <div class="py-3">
                            <h3 class="d-inline-block align-middle fs-base fw-medium mb-2 me-2">With social account:</h3>
                            <div class="d-inline-block align-middle"><a class="btn-social bs-google me-2 mb-2" href="#" data-bs-toggle="tooltip" aria-label="Sign in with Google" data-bs-original-title="Sign in with Google"><i class="ci-google"></i></a><a class="btn-social bs-facebook me-2 mb-2" href="#" data-bs-toggle="tooltip" aria-label="Sign in with Facebook" data-bs-original-title="Sign in with Facebook"><i class="ci-facebook"></i></a><a class="btn-social bs-twitter me-2 mb-2" href="#" data-bs-toggle="tooltip" aria-label="Sign in with Twitter" data-bs-original-title="Sign in with Twitter"><i class="ci-twitter"></i></a></div>
                          </div> --}}
                                    <hr class="pt-3">
                                    {{-- <h3 class="fs-base pt-4 pb-2">Or using form below</h3> --}}
                                    <!-- Forms validation: status text -->
                                    <form class="needs-validation pt-3" novalidate>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01" class="form-label">First name</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="First name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02" class="form-label">Last name</label>
                                                <input class="form-control" type="text" id="validationCustom02"
                                                    placeholder="Last name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername"
                                                    class="form-label">Username</label>
                                                <input class="form-control" type="text"
                                                    id="validationCustomUsername" placeholder="Username" required>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03" class="form-label">Business Email
                                                    Address</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="Email address" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01" class="form-label">Phone
                                                    number</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="Phone number" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05" class="form-label">Company</label>
                                                <input class="form-control" type="text" id="validationCustom05"
                                                    placeholder="Company name" required>
                                                <div class="invalid-feedback">Please provide a valid input.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05" class="form-label">Position</label>
                                                <input class="form-control" type="text" id="validationCustom05"
                                                    placeholder="Company position" required>
                                                <div class="invalid-feedback">Please provide a valid city.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03" class="form-label">City</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="City name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                    required>
                                                <label class="form-check-label" for="invalidCheck">Please have an
                                                    ASCII representative contact me by phone</label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit Form</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view-quote" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title product-title">See how ASCII can help your business!</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Product details-->
                        <div class="col-lg-12 pt-4 pt-lg-0 image-zoom-pane py-3">

                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <h2 class="h4 mb-2">Request a Quote</h2>

                                    <hr class="pt-3">
                                    <!-- Forms validation: status text -->
                                    <form class="needs-validation pt-3" novalidate>
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01" class="form-label">First name</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="First name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom02" class="form-label">Last name</label>
                                                <input class="form-control" type="text" id="validationCustom02"
                                                    placeholder="Last name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername"
                                                    class="form-label">Username</label>
                                                <input class="form-control" type="text"
                                                    id="validationCustomUsername" placeholder="Username" required>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom03" class="form-label">Business Email
                                                    Address</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="Email address" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom01" class="form-label">Phone
                                                    number</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="Phone number" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05" class="form-label">Company</label>
                                                <input class="form-control" type="text" id="validationCustom05"
                                                    placeholder="Company name" required>
                                                <div class="invalid-feedback">Please provide a valid input.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationCustom05" class="form-label">Position</label>
                                                <input class="form-control" type="text" id="validationCustom05"
                                                    placeholder="Company position" required>
                                                <div class="invalid-feedback">Please provide a valid input.</div>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="validationCustom03" class="form-label">City</label>
                                                <input class="form-control" type="text" id="validationCustom01"
                                                    placeholder="City name" required>
                                                <div class="valid-feedback">Looks good!</div>
                                            </div>
                                        </div>

                                        <hr class="mt-2 mb-3">

                                        <h6 class="h6 mb-4">Other Solutions</h6>


                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">Business Resource Manager (Full ERP)</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">General Accounting & Tax Management</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">Procurement and Payable Management</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">Order Management and Invoicing</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">Time and Payroll</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">CRM Equipment Servicing Solution</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="invalidCheck"
                                                            >
                                                        <label class="form-check-label" for="invalidCheck">Property Management and Billing</label>
                                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <button class="btn btn-primary" type="submit">Submit Form</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Product gallery-->
                        {{-- <div class="col-lg-6 pe-lg-0">

                            <h2 class="h4 mb-2">Other Solutions</h2>

                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar-->

    @include('user.products.product_modals')
    @include('user.modals')


    <div class="blur-me">


        @include('user.body.header')


        <!-- Sidebar menu-->
        @include('user.body.sidebar')

        <!-- Page-->
        <main class="offcanvas-enabled" style="padding-top: 5rem;">

            <!-- Page content-->

            @yield('content')

            <!-- Footer-->

            @include('user.body.footer')
    </div>

    </main>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
        </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme scrip-->
    <script src="{{ asset('frontend/assets/js/theme.min.js') }}"></script>
</body>
<!-- Toolbar for handheld devices (Marketplace)-->
{{-- <aside class="offcanvas offcanvas-expand w-100 border-end zindex-lg-5 pt-lg-5" id="sideNav" style="max-width: 21.875rem;"> --}}
{{-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideNav"><span class="navbar-toggler-icon"></span></button> --}}
<div class="handheld-toolbar">
    <div class="d-table table-layout-fixed w-100">

        @if (request()->is('/') ? 'active' : '')
            <a class="d-table-cell handheld-toolbar-item" href="{{ url('/') }}"><span
                    class="handheld-toolbar-icon">
                    <i class="ci-home text-primary"></i></span><span
                    class="handheld-toolbar-label text-primary">Home</span>
            </a>
        @else
            <a class="d-table-cell handheld-toolbar-item" href="{{ url('/') }}"><span
                    class="handheld-toolbar-icon">
                    <i class="ci-home"></i></span><span class="handheld-toolbar-label">Home</span>
            </a>
        @endif



        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="offcanvas"
            data-bs-target="#sideNav" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i
                    class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a>

        <a class="d-table-cell handheld-toolbar-item" href="#quick-view-demo" data-bs-toggle="modal"><span
                class="handheld-toolbar-icon"><i class="ci-book"></i></span><span class="handheld-toolbar-label">Book
                Demo</span></a>




    </div>
</div>
<!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span
        class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">
    </i></a>
<!-- Vendor scrits: js libraries and plugins-->
{{-- change path --}}



<script src="{{ asset('frontend/assets/vendor/lightgallery/lightgallery.min.js') }}"></script>

<script src="{{ asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js') }}"></script>
<script src="{{ asset('frontend/assets/vendor/lightgallery/plugins/video/lg-video.min.js') }}"></script>
{{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script> --}}


<!-- Main theme script-->
<script src="{{ asset('frontend/assets/js/theme.min.js') }}"></script>
</body>

</html>
