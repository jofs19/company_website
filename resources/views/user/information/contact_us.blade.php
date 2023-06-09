@extends('user.main_master')
@section('content')

@section('title')
Contact Us
@endsection

<head>


    <style>

        .photo{
            visibility: collapse;

        }


            @media only screen and (max-width: 480px) {

                .photo{
                    display: none;
                }


            }



    </style>


</head>

<div class="px-2">

<div class="bg-secondary py-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
      <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb flex-lg-nowrap justify-content-center justify-content-lg-start">
            <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
            <li class="breadcrumb-item text-nowrap active" aria-current="page">Contacts</li>
          </ol>
        </nav>
      </div>
      <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
        <h1 class="h3 mb-0">Contacts</h1>
      </div>
    </div>
</div>
  <!-- Contact detail cards-->
  <section class="container-fluid pt-grid-gutter">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-grid-gutter"><a class="card h-100" href="#map" data-scroll>
          <div class="card-body text-center"><i class="ci-location h3 mt-2 mb-4 text-primary"></i>
            <h3 class="h6 mb-2">Company address</h3>
            <p class="fs-sm text-muted">1605 Doña Julia Vargas Ave., Ortigas Center, Pasig, Metro Manila</p>
            <div class="fs-sm text-primary">Click to see map<i class="ci-arrow-right align-middle ms-1"></i></div>
          </div></a></div>
      <div class="col-xl-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100">
          <div class="card-body text-center"><i class="ci-time h3 mt-2 mb-4 text-primary"></i>
            <h3 class="h6 mb-3">Working hours</h3>
            <ul class="list-unstyled fs-sm text-muted mb-0">
              <li>Mon - Fri: 8AM - 6PM</li>
              <li class="mb-0">Sta: 11AM - 5PM</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100">
          <div class="card-body text-center"><i class="ci-phone h3 mt-2 mb-4 text-primary"></i>
            <h3 class="h6 mb-3">Phone numbers</h3>
            <ul class="list-unstyled fs-sm mb-0">
              {{-- <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style" href="tel:+108044357260">+1 (080) 44 357 260</a></li> --}}
              <li class="mb-0"><span class="text-muted me-1">Tech support:</span><a class="nav-link-style" href="tel:+100331697720">+63 917 175 4663</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-grid-gutter">
        <div class="card h-100">
          <div class="card-body text-center"><i class="ci-mail h3 mt-2 mb-4 text-primary"></i>
            <h3 class="h6 mb-3">Email addresses</h3>
            <ul class="list-unstyled fs-sm mb-0">
              {{-- <li><span class="text-muted me-1">For customers:</span><a class="nav-link-style" href="mailto:+108044357260">customer@example.com</a></li> --}}
              <li class="mb-0"><span class="text-muted me-1">Tech support:</span><a class="nav-link-style" href="mailto:support@example.com">support@asciisolution.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Outlet stores-->
  <!--<section class="container pt-4 mt-md-4 mb-5">-->
  <!--  <h2 class="h3 text-center mb-3">Company Address</h2>-->
  <!--  <div class="row pt-4">-->
  <!--    <div class="col-md-3 col-sm-6 mb-grid-gutter photo">-->
  <!--      <div class="card border-0 shadow"><img class="card-img-top" src="img/contacts/orlando.jpg" alt="Orlando">-->
  <!--        <div class="card-body">-->
  <!--          <h6>Orlando, USA</h6>-->
  <!--          <ul class="list-unstyled mb-0">-->
  <!--            <li class="d-flex pb-3 border-bottom"><i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">514 S. Magnolia St. Orlando, FL 32806, USA</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2 pb-3 border-bottom"><i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+178632256040">+1 (786) 322 560 40</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2"><i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:orlando@example.com">orlando@example.com</a></div>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-md-6 col-sm-6 mb-grid-gutter">-->
  <!--      <div class="card border-0 shadow">        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2647338357874!2d121.06035591052839!3d14.58398518584158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8114f83dee9%3A0xc02e72032ce07497!2s1605%20Do%C3%B1a%20Julia%20Vargas%20Ave%2C%20Ortigas%20Center%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682391751439!5m2!1sen!2sph" width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
  <!--        <div class="card-body">-->
  <!--          <h6>ANTEL GLOBAL CORPORATE CENTER</h6>-->
  <!--          <ul class="list-unstyled mb-0">-->
  <!--            <li class="d-flex pb-3 border-bottom"><i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">1605 Doña Julia Vargas Ave., Ortigas Center, Pasig, Metro Manila</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2 pb-3 border-bottom"><i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+184725276533">+63 917 175 4663</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2"><i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:chicago@example.com">support@asciisolution.com</a></div>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="col-md-2 col-sm-12 mb-grid-gutter" style="visibility: collapse; display:none">-->
  <!--      <div class="card border-0 shadow"><img class="card-img-top" src="img/contacts/newyork.jpg" alt="New York">-->
  <!--        <div class="card-body">-->
  <!--          <h6>New York, USA</h6>-->
  <!--          <ul class="list-unstyled mb-0">-->
  <!--            <li class="d-flex pb-3 border-bottom"><i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">396 Lillian Blvd, Holbrook, NY 11741, USA</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2 pb-3 border-bottom"><i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+1212477690000">+63 000 0000 000</a></div>-->
  <!--            </li>-->
  <!--            <li class="d-flex pt-2"><i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>-->
  <!--              <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:newyork@example.com">newyork@example.com</a></div>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- Split section: Map + Contact form-->
  <div class="container-fluid px-0" id="map">
    <div class="row g-0">
      <div class="col-lg-6 iframe-full-height-wrap">
        <div class="card border-0 shadow">        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2647338357874!2d121.06035591052839!3d14.58398518584158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8114f83dee9%3A0xc02e72032ce07497!2s1605%20Do%C3%B1a%20Julia%20Vargas%20Ave%2C%20Ortigas%20Center%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682391751439!5m2!1sen!2sph" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="card-body">
            <h6>ANTEL GLOBAL CORPORATE CENTER</h6>
            <ul class="list-unstyled mb-0">
              <li class="d-flex pb-3 border-bottom"><i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>
                <div class="ps-3"><span class="fs-ms text-muted">Find us</span><a class="d-block text-heading fs-sm" href="#">1605 Doña Julia Vargas Ave., Ortigas Center, Pasig, Metro Manila</a></div>
              </li>
              <li class="d-flex pt-2 pb-3 border-bottom"><i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>
                <div class="ps-3"><span class="fs-ms text-muted">Call us</span><a class="d-block text-heading fs-sm" href="tel:+184725276533">+63 917 175 4663</a></div>
              </li>
              <li class="d-flex pt-2"><i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>
                <div class="ps-3"><span class="fs-ms text-muted">Write us</span><a class="d-block text-heading fs-sm" href="mailto:chicago@example.com">support@asciisolution.com</a></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
        <h2 class="h4 mb-4">Drop us a line</h2>
        <form class="needs-validation mb-3" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label" for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
              <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required>
              <div class="invalid-feedback">Please fill in you name!</div>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
              <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required>
              <div class="invalid-feedback">Please provide valid email address!</div>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
              <input class="form-control" type="text" id="cf-phone" placeholder="+63 000 0000 000" required>
              <div class="invalid-feedback">Please provide valid phone number!</div>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="cf-subject">Subject:</label>
              <input class="form-control" type="text" id="cf-subject" placeholder="Provide short title of your request">
            </div>
            <div class="col-12">
              <label class="form-label" for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
              <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required></textarea>
              <div class="invalid-feedback">Please write a message!</div>
              <button class="btn btn-primary mt-4" type="submit">Send message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  @endsection
