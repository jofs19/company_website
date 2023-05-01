@extends('user.main_master')
@section('content')


@section('title')
Business Resource Manager
@endsection


      <!-- Hero section with search-->
      <section class="position-relative bg-dark bg-size-cover bg-position-center-x position-relative py-5 mb-5" style="background-image: url(https://recruitshop.co.nz/wp-content/uploads/sites/2/2017/09/AdobeStock_300933223.jpeg);"><span class="position-absolute top-0 start-0 w-100 h-100 bg-darker" style="opacity: .65;"></span>
        <div class="container position-relative zindex-5 py-4 my-3">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <h1 class="text-light text-center">BUSINESS RESOURCE MANAGER</h1>
              <p class="pb-3 text-light text-center">Because your business matters to us, we designed <b>ASCII</b> based on industry best practices using world-class technology. The <b>Business Resource Manager (BRM)</b> is a simple yet powerful tool that is built to support your decision making by providing you with critical and relevant information. Now you have a reliable partner in managing your business.</p>
              {{-- <div class="input-group input-group-lg mb-3"><i class="ci-search position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="search" placeholder="Ask your question...">
              </div>
              <div class="fs-sm"><span class="text-light opacity-50 me-1">Suggestions:</span><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#"> Dashboard,</a><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#">Payment,</a><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#"> Refunds,</a><a class="nav-link-style nav-link-light me-1 pb-1 border-bottom border-light" href="#"> Delivery</a></div> --}}
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
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-book h2 mt-2 mb-4 text-primary"></i>
                <h6>ORDER BOOKING & INVOICING</h6>
                <p class="fs-sm text-muted pb-2">Capture customer purchase orders and convert it to revenue by always staying on top of the status of your orders. Prepare your invoices as soon as the job is done or when an order is fulfilled, anytime, and anywhere. Manage and fulfill your customer orders in a single platform to ensure that nothing is missed out.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#book">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="
                ci-check-circle h2 mt-2 mb-4 text-primary"></i>
                <h6>RECEIVABLES & COLLECTIONS</h6>
                <p class="fs-sm text-muted pb-4 mb-3">Because Cash is King, we want to significantly reduce the time and effort to record customer payments, and issue receipts. Effectively manage your receivables by utilizing the system tools and analytics to ensure that you always have a healthy cash-flow.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" data-bs-toggle="modal" data-bs-target="#receivable">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-arrows-horizontal h2 mt-2 mb-4 text-primary"></i>
                <h6>
                    MANAGE SUPPLIER ORDERS</h6>
                <p class="fs-sm text-muted pb-5 mb-3">We’ll help you centralize your procurement process, optimize your supply chain management, and be fully informed of every step of your orders by accessing your data anytime and anywhere.</p> <br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-currency-exchange h2 mt-2 mb-4 text-primary"></i>
                <h6>MANAGE BILLS</h6>
                <p class="fs-sm text-muted pb-2">Let us eliminate time-consuming and error-prone activities by automating your accounts payable process. Extract relevant data to make better decisions in managing your payables, expenses, credit terms, and cash flow.</p><br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-money-bag h2 mt-2 mb-4 text-primary"></i>
                <h6>
                    PAY BILLS</h6>
                <p class="fs-sm text-muted pb-2">Streamline your payment process by centralizing all payments into a single platform. By automating your workflow, your team can spend less time on manual processing and focus on other essential tasks while staying confident that bills are paid on time, every time.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-document h2 mt-2 mb-4 text-primary"></i>
                <h6>INVENTORY MODULE</h6>
                <p class="fs-sm text-muted pb-2">Track your inventory movement, utilization, and consumption. Create your orders, check stock turns, and reorder as necessary based on your ideal lead time. With a simplified inventory and warehousing workflow, you can take advantage of various analytics to boost efficiency and drive business performance.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-filter-alt h2 mt-2 mb-4 text-primary"></i>
                <h6>
                    GENERAL LEDGER</h6>
                <p class="fs-sm text-muted pb-2">Track your inventory movement, utilization, and consumption. Create your orders, check stock turns, and reorder as necessary based on your ideal lead time. With a simplified inventory and warehousing workflow, you can take advantage of various analytics to boost efficiency and drive business performance.</p><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 mb-grid-gutter">
            <div class="card border-0 shadow">
              <div class="card-body text-center"><i class="ci-calculator h2 mt-2 mb-4 text-primary"></i>
                <h6>TAX REPORTING</h6>
                <p class="fs-sm text-muted pb-1">We know that tax preparation and reporting can be tedious and time consuming, that  is why we’d be happy to do it for you. With the Tax Calculator, you can automate your tax preparation so you could spend more time on high-value work that matters.</p><br><a class="btn btn-outline-primary btn-sm stretched-link mb-2" href="help-single-topic.html">Learn more</a>
              </div>
            </div>
          </div>
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
      <section class="container text-center pt-1 pb-5 mb-2">
        <h2 class="h4 pb-3">Haven't found the answer? We can help.</h2><i class="ci-help h3 text-primary d-block mb-4"></i><a class="btn btn-primary" href="help-submit-request.html">Submit a request</a>
        <p class="fs-sm pt-4">Contact us and we’ll get back to you as soon as possible.</p>
      </section>


@endsection
