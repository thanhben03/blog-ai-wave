<!-- Start Header Area  -->

<!-- End Header Area  -->
<header class="rbt-dashboard-header rainbow-header header-default header-left-align rbt-fluid-header">
    <div class="container-fluid position-relative">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-3 col-md-6 col-6">
                <div class="header-left">
                    <div class="expand-btn-grp">
                        <button class="bg-solid-primary popup-dashboardleft-btn"><i
                                class="fa-sharp fa-regular fa-sidebar"></i></button>
                    </div>
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img class="logo-light fill-green" src="{{ asset('assets/images/logo/logo_top_2.svg') }}" alt="ChatBot Logo">

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block text-center">
                <!-- NAV MENU -->
                <x-nav-menu />
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div class="header-right">

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--10 d-block d-lg-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="fa-sharp fa-regular fa-bars"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                    <!-- Start Admin meta Group -->
                    <div class="rbt-admin-panel account-access rbt-user-wrapper right-align-dropdown">
                        <div class="rbt-admin-card grid-style">
                            <a class="d-flex align-items-center" href="#">
                                <div class="inner d-flex align-items-center">
                                    <div class="img-box">
                                        <img src="{{ asset('assets/images/team/team-01sm.jpg') }}" alt="Admin">
                                    </div>
                                    <div class="content">
                                        <span class="title ">Adam Milner</span>
                                        <p>adam@gmail.com</p>
                                    </div>
                                </div>
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-chevron-down"></i>
                                </div>
                            </a>
                        </div>
                        <div class="rbt-user-menu-list-wrapper">
                            <div class="inner">
                                <div class="rbt-admin-profile">
                                    <div class="admin-thumbnail">
                                        <img src="{{ asset('assets/images/team/team-01sm.jpg') }}" alt="User Images">
                                    </div>
                                    <div class="admin-info">
                                        <span class="name">Adam Milner</span>
                                        <a class="rbt-btn-link color-primary" href="{{ route('pages.profile') }}">
                                            View Profile
                                        </a>
                                    </div>
                                </div>
                                <ul class="user-list-wrapper user-nav">
                                    <li>
                                        <a href="{{ route('pages.profile') }}">
                                            <i class="fa-sharp fa-regular fa-user"></i>
                                            <span>Profile Details</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.notification') }}">
                                            <i class="fa-sharp fa-regular fa-shopping-bag"></i>
                                            <span>Notification</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.chat.export') }}">
                                            <i class="fa-sharp fa-regular fa-users"></i>
                                            <span>Chat Export</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.chat.export') }}">
                                            <i class="fa-sharp fa-regular fa-home"></i>
                                            <span>Apperance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.plans.billing') }}">
                                            <i class="fa-sharp fa-regular fa-briefcase"></i>
                                            <span>Plans and Billing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.sessions') }}">
                                            <i class="fa-sharp fa-regular fa-users"></i>
                                            <span>Sessions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.application') }}">
                                            <i class="fa-sharp fa-regular fa-list"></i>
                                            <span>Application</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr class="mt--10 mb--10">
                                <ul class="user-list-wrapper user-nav">
                                    <li>
                                        <a href="{{ route('pages.help') }}">
                                            <i class="fa-solid fa-comments-question"></i>
                                            <span>Help Center</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.profile') }}">
                                            <i class="fa-sharp fa-solid fa-gears"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                                <hr class="mt--10 mb--10">
                                <ul class="user-list-wrapper">
                                    <li>
                                        <a href="{{ route('pages.sign-in') }}">
                                            <i class="fa-sharp fa-solid fa-right-to-bracket"></i>
                                            <span>Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Admin meta Group -->

                    <div class="expand-btn-grp @@display-class">
                        <button class="bg-solid-primary popup-dashboardright-btn"><i
                                class="fa-sharp fa-regular fa-sidebar-flip"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
