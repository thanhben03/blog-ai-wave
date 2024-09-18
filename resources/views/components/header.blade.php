<!-- Start Header Area  -->
<header class="rainbow-header header-default header-transparent header-sticky">
    <div class="container position-relative">
        <div class="row align-items-center row--0">
            <div class="col-lg-2 col-md-6 col-6">
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="ChatBot Logo">
                    </a>
                </div>
            </div>

            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu-nav d-none d-lg-flex justify-content-center">
                    <ul class="mainmenu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="has-dropdown has-menu-child-item position-relative"><a href="#">Tools
                                <i class="fa-regular fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li>
                                    <a href="{{ route('tools.text.generator') }}">
                                        <span>Text Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.image.generator') }}">
                                        <span>Image Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.code.generator') }}">
                                        <span>Code Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.image.editor') }}">
                                        <span>Image Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.video.generator') }}">
                                        <span>Vedio Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.email.generator') }}">
                                        <span>Email Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" class="disabled" aria-disabled="true"
                                        href="{{ route('tools.audio.generator') }}">
                                        <span>Audio Generator</span>
                                        <div class="rainbow-badge-card badge-sm ml--5">COMING</div>
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" class="disabled" aria-disabled="true"
                                        href="{{ route('tools.edu.feedback') }}">
                                        <span>Edu. feedback</span>
                                        <div class="rainbow-badge-card badge-sm ml--5">COMING</div>
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" class="disabled" aria-disabled="true"
                                        href="{{ route('tools.web.generator') }}">
                                        <span>Website Generator</span>
                                        <div class="rainbow-badge-card badge-sm ml--5">COMING</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="with-megamenu has-menu-child-item">
                            <a href="#!">Pages <i class="fa-regular fa-chevron-down"></i></a>
                            <div class="rainbow-megamenu">
                                <div class="wrapper">
                                    <div class="row row--0">
                                        {{-- Inner Pages --}}
                                        <div class="col-lg-3 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li>
                                                    <h3 class="rbt-short-title">Inner Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.style.guide') }}">
                                                        <span>Style Guide</span>
                                                        <div class="rainbow-badge-card badge-sm ml--5">
                                                            Hot</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.blog') }}">
                                                        <span>Blog</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.blog.details') }}">
                                                        <span>Blog Details</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.pricing') }}">
                                                        <span>Pricing</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.contact') }}">
                                                        <span>Contact</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.sign-in') }}">
                                                        <span>Sign In</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.sign-up') }}">
                                                        <span>Sign Up</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.team') }}">
                                                        <span>Team</span>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.terms.policy') }}">
                                                        <span>Terms & Policy</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.privacy.policy') }}">
                                                        <span>Privacy Policy</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        {{-- Dashboard Page --}}
                                        <div class="col-lg-3 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li>
                                                    <h3 class="rbt-short-title">DASHBOARD PAGES</h3>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.profile') }}">
                                                        <span>Profile</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.notification') }}">
                                                        <span>Notification</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.chat.export') }}">
                                                        <span>Chat Export</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.chat.export') }}">
                                                        <span>Apperance</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.plans.billing') }}">
                                                        <span>Plans and Billing</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.sessions') }}">
                                                        <span>Sessions</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.application') }}">
                                                        <span>Application</span>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.release.notes') }}">
                                                        <span>Release notes</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.help') }}">
                                                        <span>Help & FAQs</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        {{-- Upcomming Asvance Element --}}
                                        <div class="col-lg-3 single-mega-item">
                                            <ul class="mega-menu-item br--0">
                                                <li>
                                                    <h3 class="rbt-short-title">Upcoming Advance Elements
                                                    </h3>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Product Description</span>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Youtube Vedio to Post</span>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Grammar Check</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Generate From RSS</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Vedio Script</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Audio to Text</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Subscription</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Maintanence</span>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('tools.text.generator') }}" class="disabled">
                                                        <span>Coming Soon</span>

                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-3 single-mega-item">
                                            <div class="header-menu-img">
                                                <img src="{{ asset('assets/images/menu-img/menu-img-2.png') }}"
                                                    alt="Menu Split Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('pages.roadmap') }}">Roadmap</a></li>
                        <li><a href="{{ route('pages.how.to.use') }}">How to use</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-2 col-md-6 col-6 position-static">
                <div class="header-right">

                    <!-- Start Header Btn  -->
                    <div class="header-btn">
                        <a class="rainbow-gradient-btn" target="_blank" href="{{ route('tools.text.generator') }}">
                            <span>Get Start</span>
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
