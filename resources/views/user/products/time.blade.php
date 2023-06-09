@extends('user.main_master')
@section('content')


@section('title')
Time Keeping & Payroll
@endsection


      <!-- Hero section with search-->
      <section class="position-relative bg-dark bg-size-cover bg-position-center-x position-relative py-5 mb-5" style="background-image: url(https://info.asciidevsystem.com/wp-content/uploads/2022/03/timekeeping-1.jpg);"><span class="position-absolute top-0 start-0 w-100 h-100 bg-darker" style="opacity: .65;"></span>
        <div class="container position-relative zindex-5 py-4 my-3">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h1 class="text-light text-center scale-in-center">
                TIMEKEEPING & PAYROLL
</h1>
              <p class="pb-3 text-light text-center text-focus-in">The ASCII Time and Payroll is a simplified multi-user solution that streamlines the timekeeping and payroll process for businesses of all sizes and industries and is compliant with the latest regulations on labor and taxation, can generate all types of reports using government prescribed forms.</p>

            </div>
          </div>
        </div>
      </section>
      <!-- Topics grid-->

      {{-- <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalXL">
        Extra large modal
      </button> --}}


      <section class="container py-3">
        <h2 class="h3 text-center">Features</h2>
        <div class="row pt-4 px-2">

          <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-loading h2 mt-2 mb-4 text-primary"></i>
                <h6>Time & Attendance</h6>
                <p class="fs-sm text-muted pb-0 mb-1">We implement real-time attendance to keep your payroll in sync with data your biometric device which allows you to track employee performance for better employee management. ASCII Timekeeping System saves you hours of time and money by automating the essentials so you can focus on your business.</p><br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#attendance">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-location h2 mt-2 mb-4 text-primary"></i>
                <h6>Payroll Calculation</h6>
                <p class="fs-sm text-muted pb-4 mb-4">We give you the tools to streamline and reduce the time it takes to finish your payroll processing by 90%, so you can spend less time worrying how take care of your employees’ benefits, compensations, and reports, and more time running your company.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#payroll-calcu">Learn more</a>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-security-check h2 mt-2 mb-4 text-primary"></i>
                <h6>
                    FIXED ASSETS</h6>
                <p class="fs-sm text-muted pb-2">Stay on top of your asset’s conditions by capturing information, history, and cost accumulation on capitalizable major repairs and expendable minor repairs.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#fxa">Learn more</a>
              </div>
            </div>
          </div> --}}


        </div>
      </section>
      <!-- FAQ-->
      {{-- <section class="container pt-4 pb-5">
        <h2 class="h3 text-center">F.A.Q.</h2>
        <div class="row pt-4">
          <div class="col-sm-6">
            <ul class="list-unstyled">
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>How long will delivery take?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>What payment methods do you accept?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>Do you ship internationally?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>Do I need an account to place an order?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>How can I track my order?</span></a></li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="list-unstyled">
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>What are the product refund conditions?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>Do you have discounts for returning customers?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>How do your referral program work?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>Where I can view and download invoices for my orders?</span></a></li>
              <li class="mb-0"><a class="nav-link-style d-flex align-items-center border-bottom pb-3 mb-3" href="#"><i class="ci-book opacity-60 me-2"></i><span>Do you provide technical support after the purchase?</span></a></li>
            </ul>
          </div>
        </div>
      </section> --}}
      <!-- Submit request-->
      {{-- <section class="container text-center pt-1 pb-5 mb-2">
        <h2 class="h4 pb-3">Haven't found the answer? We can help.</h2><i class="ci-help h3 text-primary d-block mb-4"></i><a class="btn btn-primary" href="help-submit-request.html">Submit a request</a>
        <p class="fs-sm pt-4">Contact us and we’ll get back to you as soon as possible.</p>
      </section> --}}



@endsection
