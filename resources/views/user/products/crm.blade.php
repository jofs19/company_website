@extends('user.main_master')
@section('content')


@section('title')
CRM - Equipment Servicing
@endsection


      <!-- Hero section with search-->
      <section class="position-relative bg-dark bg-size-cover bg-position-center-x position-relative py-5 mb-5" style="background-image: url(https://info.asciidevsystem.com/wp-content/uploads/2022/03/manage.jpg);"><span class="position-absolute top-0 start-0 w-100 h-100 bg-darker" style="opacity: .65;"></span>
        <div class="container position-relative zindex-5 py-4 my-3">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h1 class="text-light text-center scale-in-center">
                CRM- EQUIPMENT SERVICING SOLUTION
</h1>
              <p class="pb-3 text-light text-center text-focus-in">A web solution designed to capture processes for equipment services operation, thereby improving customer service request and response time and productivity.
            </p>

            </div>
          </div>
        </div>
      </section>
      <!-- Topics grid-->

      <section class="container py-3">
        <h2 class="h3 text-center">Features</h2>
        <div class="row pt-4 px-2">

          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-help h2 mt-2 mb-4 text-primary"></i>
                <h6>CUSTOMER PORTAL</h6>
                <p class="fs-sm text-muted pb-0 mb-0">Streamlining communications between the customer and service provider is essential in order to bring out the best service. The customer portal will make it easier for customers to manage their information, make inquiries and requests, and keep track of their request status.</p><br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#c-portal">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-settings h2 mt-2 mb-4 text-primary"></i>
                <h6>SERVICE EQUIPMENTS</h6>
                <p class="fs-sm text-muted pb-3 mb-2">Streamlining communications between the customer and service provider is essential in order to bring out the best service. The customer portal will make it easier for customers to manage their information, make inquiries and requests, and keep track of their request status.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#eservice">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-package h2 mt-2 mb-4 text-primary"></i>
                <h6>
                    MANAGE INVENTORY</h6>
                <p class="fs-sm text-muted pb-2">Track your inventory movement, utilization, and consumption. Create your orders, check stock turns, and reorder as necessary based on your ideal lead time. With a simplified inventory and warehousing workflow, you can take advantage of various analytics to boost efficiency and drive business performance.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#m-inventory">Learn more</a>
              </div>
            </div>
          </div>


        </div>
      </section>

@endsection
