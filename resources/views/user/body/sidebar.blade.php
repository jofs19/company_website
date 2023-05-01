{{-- <div class="modal fade" id="modalLarge" tabindex="-1" style="display: block; padding-right: 17px;" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal title</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fs-sm">Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary btn-shadow btn-sm" type="button">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}
<aside class="offcanvas offcanvas-expand w-100 border-end zindex-lg-5 pt-lg-5" id="sideNav"
style="max-width: 21.875rem;">
<div class="pt-2 d-none d-lg-block"></div>
<ul class="nav nav-tabs nav-justified mt-4 mt-lg-5 mb-0" role="tablist" style="min-height: 3rem;">
    <li class="nav-item"><a class="nav-link fw-medium active" href="#categories" data-bs-toggle="tab"
            role="tab">Help</a></li>
    <li class="nav-item d-md-none"><a class="nav-link fw-medium" href="#menu" data-bs-toggle="tab"
            role="tab">Menu</a></li>
    <li class="nav-item d-lg-none"><a class="nav-link fs-sm" href="#" data-bs-dismiss="offcanvas"
            role="tab"><i class="ci-close fs-xs me-2"></i>Close</a></li>
</ul>
<div class="offcanvas-body px-0 pt-3 pb-0" data-simplebar>
    <div class="tab-content">
        <!-- Categories-->
        <div class="sidebar-nav tab-pane fade show active" id="categories" role="tabpanel">
            <div class="widget widget-categories">
                <div class="accordion" id="shop-categories">
                        {{-- <div class="bg-secondary px-4 py-3">
                          <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                        </div> --}}
                        <ul class="list-unstyled mb-0">
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" type="button" data-bs-toggle="modal" data-bs-target="#modalLarge"><i class="ci-book opacity-60 me-2"></i>Book a Demo<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.html"><i class="ci-support opacity-60 me-2"></i>Customer Support<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.html"><i class="ci-document opacity-60 me-2"></i>Request a Quote<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-2"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.html"><i class="ci-briefcase opacity-60 me-2"></i>Careers<span class="fs-sm text-muted ms-auto"></span></a></li>
                        </ul>

                </div>
            </div>
        </div>
        {{-- https://info.asciidevsystem.com/wp-content/uploads/2022/09/Slide-1-R.png --}}

        <!-- Menu-->
        <div class="sidebar-nav tab-pane fade" id="menu" role="tabpanel">
            <div class="widget widget-categories">
                <div class="accordion" id="shop-menu">
                    <!-- Homepages-->
                        {{-- <div class="bg-secondary px-4 py-3">
                          <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                        </div> --}}
                        <ul class="list-unstyled mb-0">
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-orders.html"><i class="ci-help opacity-60 me-2"></i>At A Glance<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="{{ route('user.about') }}"><i class="ci-help opacity-60 me-2"></i>About Us<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.html"><i class="ci-help opacity-60 me-2"></i>Contact Us<span class="fs-sm text-muted ms-auto"></span></a></li>
                          <li class="border-bottom mb-2"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.html"><i class="ci-help opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto"></span></a></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas-footer d-block px-grid-gutter pt-4 pb-4 mb-2">
    <div class="d-flex mb-3"><i class="ci-support h4 mb-0 fw-normal text-primary mt-1 me-1"></i>
        <div class="ps-2">
            <div class="text-muted fs-sm">Support</div><a class="nav-link-style fs-md"
                href="tel:+100331697720">634-4785</a><br>
            <a class="nav-link-style fs-md" href="tel:+100331697720">
                638-7026</a><br>
            <a class="nav-link-style fs-md" href="tel:+100331697720">635-7852</a>
        </div>
    </div>
    <div class="d-flex mb-3"><i class="ci-mail h5 mb-0 fw-normal text-primary mt-1 me-1"></i>
        <div class="ps-2">
            <div class="text-muted fs-sm">Email</div><a class="nav-link-style fs-md"
                href="mailto:customer@example.com">support@asciisolution.com</a>
        </div>
    </div>
    <h6 class="pt-2 pb-1">Follow us</h6><a class="btn-social bs-outline bs-twitter me-2 mb-2"
        href="#"><i class="ci-twitter"></i></a><a
        class="btn-social bs-outline bs-facebook me-2 mb-2" href="#"><i
            class="ci-facebook"></i></a><a class="btn-social bs-outline bs-instagram me-2 mb-2"
        href="#"><i class="ci-instagram"></i></a><a
        class="btn-social bs-outline bs-youtube me-2 mb-2" href="#"><i class="ci-youtube"></i></a>
</div>
</aside>


