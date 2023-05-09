<head>

<style>

@media only screen and (max-width: 768px) {
        .pad-me {
            padding: 0%;
        }
        }

        @media only screen and (max-width: 1023px) {
      /* div .wrap{
      width: 210px;
      word-wrap: break-word;

    } */

    .pad-me {
            padding: 4%;
        }
}

</style>

</head>



<div class="modal fade" id="careers" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Be part of the team!</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <section class="row g-0">
                <div class="col-md-6 bg-position-center bg-size-cover bg-secondary order-md-2" style="min-height: 8rem; background-image: url({{ asset('frontend/assets/img/about/05.jpg') }});"></div>
                <div class="col-md-6 px-3 px-md-5 py-5 order-md-1">
                  <div class="mx-auto py-lg-5" style="max-width: 35rem;">
                    <h2 class="h3 mb-2">We are hiring new talents</h2>
                    <p class="fs-sm text-muted pb-2">If you want to be part of our team please submit you CV using the form below:</p>
                    <form class="needs-validation row g-4" method="post" novalidate>
                      <div class="col-sm-6">
                        <input class="form-control" type="text" placeholder="Your name" required>
                      </div>
                      <div class="col-sm-6">
                        <input class="form-control" type="email" placeholder="Your email" required>
                      </div>
                      <div class="col-12">
                        <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                      </div>
                      <div class="col-12">
                        <input class="form-control" type="file" required>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-info btn-shadow" type="submit">Submit your CV</button>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>





{{-- Support --}}
<div class="modal fade" id="support" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Reach out if you need help!</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container-fluid px-0" id="map">
                <div class="row g-0">
                  <div class="col-lg-6 iframe-full-height-wrap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.2647338357874!2d121.06035591052839!3d14.58398518584158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8114f83dee9%3A0xc02e72032ce07497!2s1605%20Do%C3%B1a%20Julia%20Vargas%20Ave%2C%20Ortigas%20Center%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682391751439!5m2!1sen!2sph" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
                    <h2 class="h4 mb-4">Drop us a line</h2>
                    <form class="needs-validation mb-3" novalidate="">
                      <div class="row g-3">
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" id="cf-name" placeholder="John Doe" required="">
                          <div class="invalid-feedback">Please fill in you name!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="email" id="cf-email" placeholder="johndoe@email.com" required="">
                          <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" id="cf-phone" placeholder="+1 (212) 00 000 000" required="">
                          <div class="invalid-feedback">Please provide valid phone number!</div>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label" for="cf-subject">Subject:</label>
                          <input class="form-control" type="text" id="cf-subject" placeholder="Provide short title of your request">
                        </div>
                        <div class="col-12">
                          <label class="form-label" for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
                          <textarea class="form-control" id="cf-message" rows="6" placeholder="Please describe in detail your request" required="" data-gramm="false" wt-ignore-input="true"></textarea>
                          <div class="invalid-feedback">Please write a message!</div>
                          <button class="btn btn-primary mt-4" type="submit">Send message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>







{{-- BRM --}}

<!-- Extra large modal-->
<div class="modal fade" id="book" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Book Orders & Invoicing</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Available payment methods when checkout</h2>
                <p class="fs-md">Easily book sales or job orders from customers, and create bills or invoices when the job is completed.</p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/bo.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Order Booking & Invoicing</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/bo.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Order Booking & Invoicing</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Sales Order & Invoicing Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Streamline your sales process from quotation to invoicing</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Be up-to-date with your order status and sales invoices on delivery fulfillments</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Define credit terms for customers</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Tag invoices to projects or jobs for better monitoring</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Can create individual customer account ledger to monitor each specific sales invoice of the customer</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Transact using multiple currencies</span></li>
                    </ul>
                  </div>
                </div>
                {{-- <h2 class="h4 pb-3">Methods detail</h2>
                <div class="accordion accordion-flush" id="methods">
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#methodOne" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="methodOne">Credit / debit cards</a></h3>
                    <div class="accordion-collapse collapse show" id="methodOne" data-bs-parent="#methods">
                      <div class="card-body fs-md">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#methodTwo" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="methodTwo">Pay with PayPal</a></h3>
                    <div class="accordion-collapse collapse" id="methodTwo" data-bs-parent="#methods">
                      <div class="card-body fs-md">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"></h3><a class="accordion-button collapsed" href="#methodThree" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="methodThree">Redeem reward points</a>
                    <div class="accordion-collapse collapse" id="methodThree" data-bs-parent="#methods">
                      <div class="card-body fs-md">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Submit request-->
                <section class="container text-center pt-5 mt-2">
                  <h2 class="h4 pb-3">Haven't found the answer? We can help.</h2><i class="ci-help h3 text-primary d-block mb-4"></i><a class="btn btn-primary" href="help-submit-request.html">Submit a request</a>
                  <p class="fs-sm pt-4">Contact us and we’ll get back to you as soon as possible.</p>
                </section> --}}
              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>


{{-- Receivable & Collections --}}
<!-- Extra large modal-->
<div class="modal fade" id="receivable" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Receive & Collect Payments</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Collection Module</h2>
                <p class="fs-md">Effectively manage customer collections and apply them to the specific invoices.</p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/cp.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Collection Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/cp.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Collection Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Collection Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>View real-time information on uncollected invoices</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of the status of post-dated checks</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Ensure that on-hand collections are deposited</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Minimize errors from manual processing of collections</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically create accounting entries for each collection</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Match paid sales invoices or Bills versus payment reference (OR or CR)</span></li>
                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- Manage Supplier Orders --}}
<!-- Extra large modal-->
<div class="modal fade" id="mso" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Manage Supplier Orders</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Procurement Module</h2>
                <p class="fs-md">Create and consolidate purchase requests, simplify purchase order preparation and keep track of your order status.
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/msp.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Procurement Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/msp.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Procurement Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Procurement Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Classify purchases according to goods, services, capital goods, or consumables</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Define VAT type of each item and automatically calculate VAT per order</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of orders that were sent, partially filled, and fully filled by suppliers</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Transact using multiple currencies</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Transact using multiple currencies</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Generates Purchase Orders</span></li>
                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- Manage Bills --}}
<!-- Extra large modal-->
<div class="modal fade" id="mbills" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Manage Bills</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Accounts Payable Module</h2>
                <p class="fs-md">Manage your payables from purchases and other supplier invoices.
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/mb.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Accounts Payable Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/mb.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Accounts Payable Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Accounts Payable Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Process accounts payable invoices, and credit memos anytime, anywhere</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically create accounting entries from supplier bills</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Increase efficiency by reducing time, effort, and errors from manual process</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Scale for growth by allowing your team to focus on more high-value work</span></li>

                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- Pay Bills --}}
<!-- Extra large modal-->
<div class="modal fade" id="pbills" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Pay Bills</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Disbursement Module</h2>
                <p class="fs-md">Settle supplier obligations and keep track of your check payments
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/pb.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Disbursement Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/pb.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Disbursement Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Disbursement Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of open invoices for settlement and select which bills to pay</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Access and approve payments anytime and anywhere</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Monitor the status of your check payments</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Save time by paying suppliers with multiple bills in a single go</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Capture tax and other details for fund reimbursements and liquidations</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Improve vendor relationship by paying all invoices accurately and on time</span></li>

                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- Inventory Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="minventory" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Manage Inventory</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Inventory Module</h2>
                <p class="fs-md">Seamless inventory management that allows you to stay on top of stock movements, levels, utilization and costs
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/09/mibweb-1536x1262.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Inventory Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/09/mibweb-1536x1262.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Inventory Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Inventory Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Monitor inventory levels across multiple warehouses and eliminate stock out events.</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Identify minimum, maximum stock and set reorder point for various items</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Create Bill of Materials and identify components to finished goods</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of all stock location via multiple level warehouse mapping</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Unit of Measure conversion provides more accuracy in recording inventory consumption and issuance</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically compute inventory costs in various transactions.

                      </span></li>

                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- General Ledger Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="ledger" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">General Accounting</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">General Ledger Module</h2>
                <p class="fs-md">Automated, accurate, and secure accounting applied to various transactions that can generate real-time reports for better decision-making
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/ga.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">General Ledger Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/ga.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">General Ledger Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our General Ledger Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Creation of chart of accounts, control books, and define report formats (balance sheet, income statement)</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Generate multi-dimensional profit and loss such as Revenue Types, Location, Principals, or Profit/Cost Centers for better decision making</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Capture business transactions for Sales or Purchases whether in local or foreign currency</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Prepare financial statements, generate subsidiary ledgers, and transaction registers</span></li>


                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- Tax Calculator Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="tax" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Tax Calculator</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Tax Module</h2>
                <p class="fs-md">Easy, automatic calculation of tax on various transactions that can generate reports using the prescribed BIR forms
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/tc.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Tax Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/tc.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Tax Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Tax Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Customize and set up various tax rates as needed

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Classify suppliers and customers according to tax type</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatic tax calculation for Sales Tax and Withholding Tax</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Detailed computation taxes for each line item of a transaction</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Auto-generate monthly, quarterly, annually, tax forms using the standard BIR forms</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Create supporting reports such as SLSP, SAWT</span></li>


                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>

{{-- end of BRM site modal --}}
{{-- ================================================================================================================================= --}}


{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="assetup" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Asset Setup</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Asset & Depreciation Setup</h2>
                <p class="fs-md">Capture complete asset information and automate asset depreciation
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/tc.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Asset & Depreciation Setup</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/tc.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Asset & Depreciation Setup</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Asset & Depreciation Setup</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Build up and maintain essential information such as asset classification, serial numbers, location in a single space

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span> Define the technical specifications and serial numbers for various assets</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Setup depreciation and automatically plot the depreciation schedule for assets</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically create accounting entries for depreciation</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Import/export data directly from spreadsheets to save time</span></li>


                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="assetracker" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Asset Issuance</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Asset Issuance & Accountability</h2>
                <p class="fs-md">Keep track of on-hand and issued assets including where they are located
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Asset Insurance & Accountability</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Asset Issuance & Accountability</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Asset Issuance & Accountability</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Request and Issue assets to various employees of your organization

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span> Monitor asset movement across multiple sites and locations</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of the current and historical issuance to employees for better accountability</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Fast and efficient physical audits of assets with real-time automated updates to the asset register</span></li>



                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>


{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="fxa" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Asset Repairs</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Asset Maintenance & Disposal</h2>
                <p class="fs-md">Gain complete visibility and control of your company’s assets through comprehensive reporting
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Asset Maintenance & Disposal</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Asset Maintenance & Disposal</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Asset Maintenance & Disposal</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Capture transactions for capitalizable major repairs and expendable minor repairs

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span> Monitor repair history  and accumulated costs to make better decisions on the true value of an asset</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Dispose and write-off assets that are no longer of use to the organization</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically create accounting entries for asset repairs and disposal</span></li>



                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>




{{-- end of Fixed Asset site modal --}}
{{-- ================================================================================================================================= --}}
{{-- time keeping & payroll --}}

{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="attendance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Time and Attendance</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Time Keeping Module</h2>
                <p class="fs-md">Monitor and process employee attendance in one seamless solution
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/05/ga.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Time Keeping Module</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/05/ga.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Time Keeping Module</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Time Keeping Module</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Integrated to biometric devices to capture statistics on time in/out of employees

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically calculate lates, overtimes, grace periods, and holidays based on set company policies</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Create various shifts or work schedules for all of your employees</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Generate incident reports for time in/out inconsistencies (no in, no out)</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Generate timekeeping statistics and reports per employee or department</span></li>


                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>



{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="assetracker" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Asset Issuance</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Asset Issuance & Accountability</h2>
                <p class="fs-md">Keep track of on-hand and issued assets including where they are located
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Asset Insurance & Accountability</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Asset Issuance & Accountability</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Asset Issuance & Accountability</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Request and Issue assets to various employees of your organization

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span> Monitor asset movement across multiple sites and locations</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Keep track of the current and historical issuance to employees for better accountability</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Fast and efficient physical audits of assets with real-time automated updates to the asset register</span></li>



                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>


{{-- ASSET SETUP Module --}}
<!-- Extra large modal-->
<div class="modal fade" id="fxa" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-faded-dark">
          <h4 class="modal-title">Asset Repairs</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>
                <h2 class="h4 pb-3">Asset Maintenance & Disposal</h2>
                <p class="fs-md">Gain complete visibility and control of your company’s assets through comprehensive reporting
                </p>
                <div class="row pt-3 pb-4 mb-2 mb-md-4">
                  <div class="col-md-6 pad-me">

                    <div class="gallery">
                        <a href="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" class="gallery-item rounded-3" data-sub-html='<h6 class="fs-sm text-light">Asset Maintenance & Disposal</h6>'>
                            <img class="w-100 img-thumbnail" src="https://info.asciidevsystem.com/wp-content/uploads/2022/10/adsweb-1.png" style="max-width: 508px;" alt="Product">
                          <span class="gallery-item-caption">Asset Maintenance & Disposal</span>
                        </a>
                      </div>
                </div>
                  <div class="col-md-6 pt-4 bg-faded-info pe-2 me-0">
                    <h3 class="h6">Pros of our Asset Maintenance & Disposal</h3>
                    <ul class="list-unstyled fs-sm pt-2">
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Capture transactions for capitalizable major repairs and expendable minor repairs

                      </span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span> Monitor repair history  and accumulated costs to make better decisions on the true value of an asset</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Dispose and write-off assets that are no longer of use to the organization</span></li>
                      <li class="d-flex align-items-center mb-2"><i class="ci-check text-success me-2"></i><span>Automatically create accounting entries for asset repairs and disposal</span></li>



                    </ul>
                  </div>
                </div>

              </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          {{-- <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button> --}}
        </div>
      </div>
    </div>
</div>

