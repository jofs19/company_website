<header class="bg-light shadow-sm fixed-top" data-fixed-element>
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid image-container">
                        <!-- Toolbar-->
                        <div class="navbar navbar-expand-lg navbar-light bg-light mt-n2 pt-2 pb-2 px-3 px-lg-0">
                            <div class="container">
                              <div class="collapse navbar-collapse" id="navbarCollapse">
                                <hr class="d-lg-none my-3">
                                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">

                                  <li class="nav-item dropdown">{{-- data-bs-toggle="dropdown" --}}<a class="nav-link dropdown-toggle ps-lg-0" href="{{ (request()->is('/')) ? '#product-section' : '/#product-section' }}" data-scroll ><i class="ci-view-grid me-2"></i>Products</a>
                                    <div class="dropdown-menu px-2 pb-4">
                                      <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{ route('user.brm') }}">
                                                <center>
                                                <img src="https://th.bing.com/th/id/OIG.yQzXRQcCnZYv03oYJaqI?pid=ImgGn" width="120px" alt="product"></center>
                                                </a>
                                              <h6 class="fs-base mb-2 text-center">Business Resource Manager</h6>

                                            </div>
                                          </div>
                                        <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="{{ route('user.fxa') }}"><center><img src="https://th.bing.com/th/id/OIG.TokjNXENpggh7GV1IE3Z?pid=ImgGn" width="120px" alt="product"></center></a>
                                            <h6 class="fs-base mb-2 text-center">Fixed Asset</h6>

                                          </div>
                                        </div>

                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><center><img src="https://th.bing.com/th/id/OIG.N1b6rJPcvGxjGvjTO0IL?pid=ImgGn" width="120px" alt="product"></center></a>
                                            <h6 class="fs-base mb-2 text-center">Time Keeping & Payroll</h6>

                                          </div>
                                        </div>
                                      </div>
                                      <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><center><img src="https://th.bing.com/th/id/OIG.TzTe2upsc7ui8KaE.xpY?pid=ImgGn" width="120px" alt="product"></center></a>
                                            <h6 class="fs-base mb-2 text-center">CRM - Equipment & Services</h6>

                                          </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><center><img src="https://th.bing.com/th/id/OIG.4fSB2l07Cejv.Dk.jld5?pid=ImgGn" width="120px" alt="product"></center></a>
                                            <h6 class="fs-base mb-2 text-center">Property Management</h6>

                                          </div>
                                        </div>
                                        {{-- <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><center><img src="https://th.bing.com/th/id/OIG.YWytmmnjneEMlqR0Co37?pid=ImgGn" width="280px" alt="product"></center></a>
                                            <h6 class="fs-base mb-2">Entertainment</h6>
                                            <ul class="widget-list">
                                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's toys</a></li>
                                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Video games</a></li>
                                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                                            </ul>
                                          </div>
                                        </div> --}}
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                                <ul class="navbar-nav">
                                  <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{ '/' }}">Home</a></li><div class="nav-link disabled text-border px-1">|</div>
                                  {{-- <li class="nav-item"><a class="nav-link" href="{{ (request()->is('/')) ? '#product-section' : '/#product-section' }}">Products</a></li><div class="nav-link disabled text-border px-1">|</div> --}}
                                  <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.about') }}">About Us</a></li><div class="nav-link disabled text-border px-1">|</div>
                                  <li class="nav-item {{ (request()->is('contact')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('user.contact') }}">Contact Us</a></li>
                                  {{-- <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                                  <li class="nav-item"><a class="nav-link" href="#">Components</a></li> --}}
                                </ul>
                              </div>
                            </div>
                          </div>
                          {{-- end toolbar --}}
            <a class="navbar-brand d-none d-sm-block me-3 me-xl-4 flex-shrink-0"
                href="{{ url('/') }}"><img src="{{ asset('frontend/assets/img/ascii-logo.png') }}" width="142"
                    alt="ASCII"></a><a class="navbar-brand d-sm-none me-2 center-me" href="{{ url('/') }}"><img
                    src="{{ asset('frontend/assets/img/ascii-logo.png') }}" width="114" alt="ASCII"></a>


        </div>
    </div>


    <!-- Search collapse-->
    {{-- <div class="collapse" id="searchBox">
        <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
                <div class="input-group"><i
                        class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="Search for products">
                </div>
            </div>
        </div>
    </div> --}}
</header>
