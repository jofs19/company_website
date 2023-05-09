@extends('user.main_master')
@section('content')
@section('title')
Software Services & Solutions
@endsection



<section class="ps-lg-4 pe-lg-3 pt-4">
    <div class="px-3 pt-2">
        <!-- Page title + breadcrumb-->
        <!-- Content-->
        <!-- Slider-->
        <section class="tns-carousel mb-3 mb-md-5">
            <div class="tns-carousel-inner"
                data-carousel-options="{&quot;nav&quot;: false, &quot;items&quot;: 1, &quot;autoHeight&quot;: false, &quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;: {&quot;nav&quot;: true, &quot;controls&quot;: false}, &quot;576&quot;: {&quot;nav&quot;: false, &quot;controls&quot;: true}}}">
                <!-- Slide 1-->
                <div>
                    <div class="rounded-3 px-md-5 text-center text-xl-start  bg-repeat-0 bg-size-cover"
                        style="background-image: url(https://th.bing.com/th/id/R.eee55bc986beb44450058329b2d76ee2?rik=mqCBrQNlle9k%2fQ&riu=http%3a%2f%2factinsoft.com%2fwp-content%2fuploads%2f2017%2f01%2fbanner21.jpg&ehk=OXUTmvABvOepIZ4KDcGa9kCb2NI0zdyPCgwMIo2WO1M%3d&risl=&pid=ImgRaw&r=0)">
                        <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto"
                            style="max-width: 1226px;">
                            <div class="py-5 me-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                                <h2 class="h2 text-light from-top">Powering Businesses with Smarter Solutions
                                </h2>
                                <p class="text-light pb-4 from-bottom">Finally, there is a powerful, cloud
                                    solution, that will allow you to manage and control your business so you can
                                    focus on what matters most and just leave the rest to us.</p>
                                <h5 class="text-light pb-3 from-top">See how ASCII can help your business</h5>
                                <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                    <div class="row g-2 pb-2">
                                        <div class="col-12">
                                            <a class="btn btn-outline-info d-block w-100" href="#quick-view-quote" data-bs-toggle="modal">Get Started</a>
                                            <button type="button" style="visibility: collapse"
                                                class="btn btn-outline-primary d-block w-100 m-0 p-0">Request
                                                Quote</button>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            {{-- <div><img src="{{ asset('frontend/assets/img/ascii-logo.png') }}" width="300px" alt="Image"></div> --}}
                        </div>
                    </div>
                </div>
                <!-- Slide 2-->
                <div>
                    <!--don't repeat background image-->


                    <div class="rounded-3 px-md-5 text-center text-xl-start bg-repeat-0 bg-size-cover"
                        style="background-image: url(https://cdn.techieswiki.com/wp-content/uploads/2017/03/cropped-TECHNOLOGY-BANNER.jpg); ">
                        <div class="d-xl-flex justify-content-between align-items-center px-4 px-sm-5 mx-auto"
                            style="max-width: 1226px;">
                            <div class="py-5 me-xl-4 mx-auto mx-xl-0" style="max-width: 490px;">
                                <h2 class="h2 text-light from-start">We are your reliable business partner &
                                    IT provider</h2>
                                <p class="text-light pb-3 from-end">Because we care about your business. We
                                    know what it really takes and needs. We will help you integrate our
                                    Solutions with the whole business process without leaving you hanging.</p>
                                <h5 class="text-light from-start">On the go? Reach us now!</h5>
                                <div class="d-flex flex-wrap justify-content-center justify-content-xl-start">
                                    <div class="row g-3 pt-2 pb-5">
                                        <div class="col-xs-6 col-sm-6 col-lg-6">
                                            <a class="btn btn-outline-success d-block w-100" href="#quick-view-demo" data-bs-toggle="modal">Book
                                                Demo</a>
                                            <button type="button" style="visibility: hidden"
                                                class="btn btn-primary d-block w-100 m-0 p-0 element"></button>

                                        </div>
                                        <!-- Block outline button -->
                                        <div class="col-xs-6 col-sm-6 col-lg-6">

                                            <a class="btn btn-outline-primary d-block w-100" href="#quick-view-quote" data-bs-toggle="modal">Request Quote</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- <div><img src="{{ asset('frontend/assets/img/ascii-logo.png') }}" width="300px" alt="Image"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="pt-2 pt-md-3 pb-3 mb-3 " id="product-section">
            <!-- Heading-->
            <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4 ms-2">
                <h2 class="h3 mb-0 pt-3 me-3 ">Core Products</h2>
                <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="grocery-catalog.html">All products<i class="ci-arrow-right ms-1 me-n1"></i></a></div>
              </div>



            <div class="tns-carousel tns-controls-static tns-controls-outside tns-nav-enabled pt-2">
                <div class="tns-carousel-inner"
                    data-carousel-options="{&quot;items&quot;: 3, &quot;loop&quot;: false, &quot;gutter&quot;: 16, &quot;controls&quot;: true, &quot;autoHeight&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1}, &quot;480&quot;:{&quot;items&quot;:3}, &quot;720&quot;:{&quot;items&quot;:3}, &quot;991&quot;:{&quot;items&quot;:3}, &quot;1140&quot;:{&quot;items&quot;:3}, &quot;1300&quot;:{&quot;items&quot;:3}, &quot;1500&quot;:{&quot;items&quot;:3}}}">


                    <div>
                        <a class="card product-card h-100 border-0 shadow pb-2" href="{{ route('user.brm') }}"><img class="card-img-top" src="{{ asset('frontend/assets/img/brmm.png') }}" width="500" height="500" alt="Product">
                            <div class="bg-white rounded-3 pt-1 px-2 mx-auto mt-n5" style="width: 175px;"><img class="d-block rounded-3 mx-auto" src="https://th.bing.com/th/id/OIG.yQzXRQcCnZYv03oYJaqI?pid=ImgGn" width="150" alt="Brand"></div>
                            <div class="card-body text-center pt-3 pb-4">
                              <h6 class="h6 mb-2">BUSINESS RESOURCE MANAGER</h6>
                              <div class="fs-ms text-muted">End-to-end solution for your Major business processes.</div>
                            </div></a>
                    </div>
                    <!-- Product-->
                    <div>
                        <a class="card product-card h-100 border-0 shadow pb-2" href="{{ route('user.fxa') }}"><img class="card-img-top" src="{{ asset('frontend/assets/img/fas.png') }}" alt="Product">
                            <div class="bg-white rounded-3 pt-1 px-2 mx-auto mt-n5" style="width: 175px;"><img class="d-block rounded-3 mx-auto" src="https://th.bing.com/th/id/OIG.TokjNXENpggh7GV1IE3Z?pid=ImgGn" width="150" alt="Brand"></div>
                            <div class="card-body text-center pt-3 pb-4">
                                <h6 class="h6 mb-2">FIXED ASSET  </h6>
                                <div class="fs-ms text-muted">Manage your Organization’s Assets with complete end-to-end visibility.</div>
                            </div></a>
                    </div>
                    <!-- Product-->

                    <div>
                        <a class="card product-card h-100 border-0 shadow pb-2" href="{{ route('user.time') }}"><img class="card-img-top" src="{{ asset('frontend/assets/img/tandpy.png') }}" alt="Product">
                            <div class="bg-white rounded-3 pt-1 px-2 mx-auto mt-n5" style="width: 175px;"><img class="d-block rounded-3 mx-auto" src="https://th.bing.com/th/id/OIG.N1b6rJPcvGxjGvjTO0IL?pid=ImgGn" width="150" alt="Brand"></div>
                            <div class="card-body text-center pt-3 pb-4">
                              <h6 class="h6 mb-2">TIME KEEPING AND PAYROLL</h6>
                              <div class="fs-ms text-muted">Integrated solution to manage time and payroll of employees.</div>
                            </div></a>
                    </div>
                    <!-- Product-->
                    <div>
                        <a class="card product-card h-100 border-0 shadow pb-2" href="#"><img class="card-img-top" src="{{ asset('frontend/assets/img/crmm.png') }}" alt="Product">
                            <div class="bg-white rounded-3 pt-1 px-2 mx-auto mt-n5" style="width: 175px;"><img class="d-block rounded-3 mx-auto" src="https://th.bing.com/th/id/OIG.TzTe2upsc7ui8KaE.xpY?pid=ImgGn" width="150" alt="Brand"></div>
                            <div class="card-body text-center pt-3 pb-4">
                              <h6 class="h6 mb-2">CRM - EQUIPMENT SERVICING</h6>
                              <div class="fs-ms text-muted">Business Solution for equipment service monitoring & operations.</div>
                            </div></a>
                    </div>
                    <!-- Product-->
                    <div>
                        <a class="card product-card h-100 border-0 shadow pb-2" href="#"><img class="card-img-top" src="{{ asset('frontend/assets/img/ppp.png') }}" alt="Product">
                            <div class="bg-white rounded-3 pt-1 px-2 mx-auto mt-n5" style="width: 175px;"><img class="d-block rounded-3 mx-auto" src="https://th.bing.com/th/id/OIG.4fSB2l07Cejv.Dk.jld5?pid=ImgGn" width="150" alt="Brand"></div>
                            <div class="card-body text-center pt-3 pb-4">
                              <h6 class="h6 mb-2">PROPERTY MANAGEMENT</h6>
                              <div class="fs-ms text-muted">Industry Solution for village & condominium billing & operations.</div>
                            </div></a>
                    </div>

                    <!-- Product-->

                </div>
            </div>
        </section>
<hr>


        <!-- How it works-->
        <section class="pt-4 mb-4 mb-md-5">
            <h2 class="h3 text-center mb-grid-gutter pt-2 tracking-in-contract-bck text-accent">AT A GLANCE</h2>
            <p class="text-muted text-center mb-3 pb-4">Because your business matters to us, we designed ASCII based on industry best practices using world-class technology.</p>
            <div class="row g-0 bg-light rounded-3">
                <div class="col-xl-4 col-lg-12 col-md-4 border-end">
                    <div class="py-3">
                        <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                            <div class="me-4"><img class="d-block my-0 " src="https://th.bing.com/th/id/R.abdf7f2fa3d41f8a519b4b3421d01ae1?rik=b3Rwma9zSNNWzA&riu=http%3a%2f%2fclipart-library.com%2fnewhp%2f109-1093730_find-the-data-regulatory-compliance-icon-clipart.png&ehk=2qM4xadP4fk6lyo%2fWIq8wK3uCu%2fdYA0IDgwBZ%2b9DvH0%3d&risl=&pid=ImgRaw&r=0"
                                width="410px" alt="Order online"></div>
                            <div class="ps-2">
                                <dl class="mb-3 pt-1 text-justify">
                                    <dt>Compliant</dt>
                                    <dd>Compliant with BIR systems process flow for Computerized Books of Accounts, Computerized Accounting Systems, and Reporting Standards.</dd>

                                  </dl>
                            </div>
                        </div>
                        <hr class="d-md-none d-lg-block d-xl-none">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-4 border-end">
                    <div class="py-3">
                        <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                            <div class="me-4"><img class="d-block my-2 " src="https://th.bing.com/th/id/R.17100ba76e06eae3982e33571690979a?rik=MYdTS89ppwTr1g&riu=http%3a%2f%2fwww.aphixsoftware.com%2fwp-content%2fuploads%2f2016%2f08%2fscalability-icon.png%3fx22009&ehk=Tfsmt6ew65yJDZoUlZnUyoQr8hMQchiogsdYQbrrQ28%3d&risl=&pid=ImgRaw&r=0"
                                width="390px" alt="Order online"></div>
                            <div class="ps-2">
                                {{-- <p class="mb-3 pt-1">Can be deployed per module or as an integrated end-to-end solution depending on the needs of your business.
                                </p> --}}
                                <dl class="mb-3 pt-1 text-justify">
                                    <dt>Scalable</dt>
                                    <dd>Depending on the requirements of your organization, it can be implemented as a standalone module or as an integrated end-to-end solution.</dd>

                                  </dl>
                            </div>
                        </div>
                        <hr class="d-md-none d-lg-block d-xl-none">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="py-3">
                        <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                            <div class="me-4"><img class="d-block my-2 " src="https://cdn3.iconfinder.com/data/icons/miscellaneous-5-two-color-line/128/customizable_flexible_custom-512.png"
                                width="300px" alt="Order online"></div>
                            <div class="ps-2">
                                {{-- <p class="mb-3 pt-1">Can be deployed per module or as an integrated end-to-end solution depending on the needs of your business.
                                </p> --}}
                                <dl class="mb-3 pt-1 text-justify">
                                    <dt>Customizable</dt>
                                    <dd>Locally created and with the ability to be adjusted to extract particular data from your business operations.</dd>

                                  </dl>
                            </div>
                        </div>
                        <hr class="d-md-none d-lg-block d-xl-none">
                    </div>
                </div>
            </div>
            <div class="row g-0 bg-light rounded-3">
                <div class="col-xl-6 col-lg-12 col-md-6 border-end">
                    <div class="py-3">
                        <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                            <div class="me-4"><img class="d-block my-0 " src="https://udelstudentrentals.com/assets/images/5c62f81e45b00.png"
                                width="400px" alt="Order online"></div>
                            <div class="ps-2">
                                <dl class="mb-3 pt-1 text-justify">
                                    <dt>Secured</dt>
                                    <dd>Ensures the presence of internal controls in system functions such as Access Rights, Validations and Approvals, Backups, and Audit Trails.</dd>

                                  </dl>
                            </div>
                        </div>
                        <hr class="d-md-none d-lg-block d-xl-none">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-6 border-end">
                    <div class="py-3">
                        <div class="d-flex align-items-center mx-auto py-3 px-3" style="max-width: 362px;">
                            <div class="me-4"><img class="d-block my-2 " src="https://th.bing.com/th/id/R.afa327fd1fd89dfdc3876427b6e5fdc0?rik=HNta912NzaQfLw&riu=http%3a%2f%2fwww.pngmart.com%2ffiles%2f7%2fSupport-PNG-HD.png&ehk=L8hcmonxD55ZA0sbdmCr2kwW8roZXMUy8I9veoEHVEw%3d&risl=&pid=ImgRaw&r=0"
                                width="420px" alt="Order online"></div>
                            <div class="ps-2">
                                {{-- <p class="mb-3 pt-1">Can be deployed per module or as an integrated end-to-end solution depending on the needs of your business.
                                </p> --}}
                                <dl class="mb-3 pt-1 text-justify">
                                    <dt>Support-ready</dt>
                                    <dd>Availability of knowledgeable technical personnel that are constantly prepared to help you.</dd>

                                  </dl>
                            </div>
                        </div>
                        <hr class="d-md-none d-lg-block d-xl-none">
                    </div>
                </div>

            </div>
        </section>





{{-- careers --}}



        <section class="bg-accent bg-size-cover bg-position-center pt-5 pb-4 pb-lg-5 px-4 pb-3 mb-3" style="background-image: url(img/marketplace/features/features-bg.jpg);">
            <div class="container pt-lg-3">
              <h2 class="h3 mb-3 pb-4 text-light text-center">We are here to help you!</h2>
              <div class="row pt-lg-2 text-center">
                <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                  <div class="d-inline-flex align-items-center text-start"><img src="{{ asset('frontend/assets/img/demo-2.svg') }}" width="52" alt="Quality Guarantee">
                    <div class="ps-3">
                      <h6 class="text-light fs-base mb-1">Book a Demo</h6>
                      <p class="text-light fs-ms opacity-70 mb-0">Learn more about how our products can help your business.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                  <div class="d-inline-flex align-items-center text-start"><img src="{{ asset('frontend/assets/img/marketplace/features/support.png') }}" width="52" alt="Customer Support">
                    <div class="ps-3">
                      <h6 class="text-light fs-base mb-1">Customer Support</h6>
                      <p class="text-light fs-ms opacity-70 mb-0">We offer multiple ways for you to get in touch with our support team.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                  <div class="d-inline-flex align-items-center text-start"><img src="{{ asset('frontend/assets/img/request.svg')}}" width="52" alt="Free Updates">
                    <div class="ps-3">
                      <h6 class="text-light fs-base mb-1">Request a Quote</h6>
                      <p class="text-light fs-ms opacity-70 mb-0">We’d like to hear more about your business requirements.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-grid-gutter">
                  <div class="d-inline-flex align-items-center text-start"><img src="{{ asset('frontend/assets/img/careers-4.svg')}}" width="52" alt="Secure Payments">
                    <div class="ps-3">
                      <h6 class="text-light fs-base mb-1">Careers</h6>
                      <p class="text-light fs-ms opacity-70 mb-0">We offer career opportunities! Be a part of our growing team.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </section>

        <div class="pb-3"></div>
    </div>






</section>




@endsection
