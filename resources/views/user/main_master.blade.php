<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>    ASCII | @yield('title')
</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords"
        content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" media="screen" href="{{ asset('frontend/assets/vendor/lightgallery/css/lightgallery-bundle.min.css') }}">

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('frontend/assets/css/theme.min.css') }}">



    <style>

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
          <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title product-title"><p>See how ASCII can help your business!</p></h4>
                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <!-- Product gallery-->
                    <div class="col-lg-7 pe-lg-0">
                      <!-- Forms validation: status text -->
<form class="needs-validation" novalidate>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationCustom01" class="form-label">First name</label>
        <input class="form-control" type="text" id="validationCustom01" placeholder="First name" value="John" required>
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input class="form-control" type="text" id="validationCustom02" placeholder="Last name" value="Doe" required>
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <input class="form-control" type="text" id="validationCustomUsername" placeholder="Username" required>
        <div class="invalid-feedback">Please choose a username.</div>
        <div class="valid-feedback">Looks good!</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="validationCustom03" class="form-label">City</label>
        <select class="form-select" id="validationCustom03" required>
          <option value="">Choose city...</option>
          <option value="Dallas">Dallas</option>
          <option value="Houston">Houston</option>
          <option value="Los Angeles">Los Angeles</option>
          <option value="Miami">Miami</option>
          <option value="New York">New York</option>
        </select>
        <div class="invalid-feedback">Please provide a valid city.</div>
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom04" class="form-label">State</label>
        <select class="form-select" id="validationCustom04" required>
          <option value="">Choose state...</option>
          <option value="Arizona">Arizona</option>
          <option value="Colorado">Colorado</option>
          <option value="Florida">Florida</option>
          <option value="Indiana">Indiana</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Texas">Texas</option>
        </select>
        <div class="invalid-feedback">Please provide a valid state.</div>
        <div class="valid-feedback">Looks good!</div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationCustom05" class="form-label">Zip</label>
        <input class="form-control" type="text" id="validationCustom05" placeholder="Zip" required>
        <div class="invalid-feedback">Please provide a valid zip.</div>
        <div class="valid-feedback">Looks good!</div>
      </div>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
        <div class="invalid-feedback">You must agree before submitting.</div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit Form</button>
  </form>
                    </div>
                    <!-- Product details-->
                    <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                      <div class="product-details ms-auto pb-3">
                        <div class="mb-2">
                          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                          </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span>
                        </div>
                        <div class="h3 fw-normal text-accent mb-3 me-1">$124.<small>99</small></div>
                        <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span class="text-muted" id="colorOptionText">Dark blue/Orange</span></div>
                        <div class="position-relative me-n4 mb-3">
                          <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOptionText" value="Dark blue/Orange" checked>
                            <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-color: #f25540;"></span></label>
                          </div>
                          <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOptionText" value="Dark gray/Green">
                            <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-color: #65805b;"></span></label>
                          </div>
                          <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOptionText" value="White">
                            <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-color: #f5f5f5;"></span></label>
                          </div>
                          <div class="form-check form-option form-check-inline mb-2">
                            <input class="form-check-input" type="radio" name="color" id="color4" data-bs-label="colorOptionText" value="Black">
                            <label class="form-option-label rounded-circle" for="color4"><span class="form-option-color rounded-circle" style="background-color: #333;"></span></label>
                          </div>
                          <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Product available</div>
                        </div>
                        <div class="d-flex align-items-center pt-2 pb-4">
                          <select class="form-select me-3" style="width: 5rem;">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                          </select>
                          <button class="btn btn-primary btn-shadow d-block w-100" type="button"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                        </div>
                        <div class="d-flex mb-4">
                          <div class="w-100 me-3">
                            <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-heart fs-lg me-2"></i><span class='d-none d-sm-inline'>Add to </span>Wishlist</button>
                          </div>
                          <div class="w-100">
                            <button class="btn btn-secondary d-block w-100" type="button"><i class="ci-compare fs-lg me-2"></i>Compare</button>
                          </div>
                        </div>
                        <h5 class="h6 mb-3 py-2 border-bottom"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product info</h5>
                        <h6 class="fs-sm mb-2">General</h6>
                        <ul class="fs-sm pb-2">
                          <li><span class="text-muted">Model: </span>Amazfit Smartwatch</li>
                          <li><span class="text-muted">Gender: </span>Unisex</li>
                          <li><span class="text-muted">OS campitibility: </span>Android / iOS</li>
                        </ul>
                        <h6 class="fs-sm mb-2">Physical specs</h6>
                        <ul class="fs-sm pb-2">
                          <li><span class="text-muted">Shape: </span>Rectangular</li>
                          <li><span class="text-muted">Body material: </span>Plastics / Ceramics</li>
                          <li><span class="text-muted">Band material: </span>Silicone</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <!-- Navbar-->

    @include('user.products.product_modals')


    @include('user.body.header')


    <!-- Sidebar menu-->
    @include('user.body.sidebar')

    <!-- Page-->
    <main class="offcanvas-enabled" style="padding-top: 5rem;">

        <!-- Page content-->

        @yield('content')

        <!-- Footer-->

        @include('user.body.footer')

    </main>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll data-fixed-element><span
            class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i
            class="btn-scroll-top-icon ci-arrow-up"> </i></a>
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
    <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item"
            href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i
                    class="ci-help"></i></span><span class="handheld-toolbar-label">Help</span></a>

        <a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="offcanvas"
            data-bs-target="#sideNav" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i
                    class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a>


        {{-- <a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span
                class="handheld-toolbar-icon"><i class="ci-cart"></i><span
                    class="badge bg-primary rounded-pill ms-1">3</span></span><span
                class="handheld-toolbar-label">$56.00</span></a> --}}
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


<!-- Main theme script-->
<script src="{{ asset('frontend/assets/js/theme.min.js') }}"></script>
</body>

</html>
