<!-- Start Header Area  -->
<header class="rainbow-header header-default header-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-2 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-light" src="{{ asset('assets/images/logo/logo_top_2.svg') }}" alt="ChatBot Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-8 d-none d-lg-block">
                <x-nav-menu />
            </div>

            <div class="col-lg-2 col-md-6 col-6 position-static">
                <div class="header-right">

                    <!-- Start Header Btn  -->
                    <div class="header-btn">
                        <a class="rainbow-gradient-btn" target="_blank" href="{{ route('tools.text.generator') }}">
                            <span>Hỗ trợ TenTrade</span>
                        </a>
                    </div>
                    <!-- End Header Btn  -->

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-flex justify-content-end d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="fa-sharp fa-regular fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area  -->
