@extends('user.main_master')
@section('content')


@section('title')
Time Keeping & Payroll
@endsection


      <!-- Hero section with search-->
      <section class="position-relative bg-dark bg-size-cover bg-position-center-x position-relative py-5 mb-5" style="background-image: url(https://info.asciidevsystem.com/wp-content/uploads/2022/03/fc.jpg);"><span class="position-absolute top-0 start-0 w-100 h-100 bg-darker" style="opacity: .65;"></span>
        <div class="container position-relative zindex-5 py-4 my-3">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h1 class="text-light text-center scale-in-center">
                PROPERTY MANAGEMENT
</h1>
              <p class="pb-3 text-light text-center text-focus-in">An Industry-specific solution designed to streamline the major business processes on village/condominium management and homeowner association. These processes will automate and simplify the operation: Computation of charges such as association dues, water fees, and other charges. Manage owner profiles and property information.</p>

            </div>
          </div>
        </div>
      </section>
        <!-- Features section-->
      <section class="container py-3">
        <h2 class="h3 text-center">Features</h2>
        <div class="row pt-4 px-2">

          <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-loading h2 mt-2 mb-4 text-primary"></i>
                <h6>Manage Properties</h6>
                <p class="fs-sm text-muted pb-0 mb-1">From home owner profiles to property details spend less time manually keeping track of your data and enable your maintenance team to manage their information through this solution.</p><br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#m-properties">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-location h2 mt-2 mb-4 text-primary"></i>
                <h6>Bill Properties</h6>
                <p class="fs-sm text-muted pb-3 mb-2">Streamline your collection process and reduce the burden on your team to collect past due receivables while ensuring that fees are assessed accurately and on time according to your charge agreements.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#b-properties">Learn more</a>
              </div>
            </div>
          </div>
        </div>
      </section>


@endsection
