        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner-popup">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img class="logo-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="ChatBot Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="fa-sharp fa-regular fa-x"></i>
                        </button>
                    </div>
                </div>

                <div class="content">
                    <ul class="mainmenu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="has-dropdown has-menu-child-item position-relative"><a href="#">Tools <i
                                    class="fa-regular fa-chevron-down"></i></a>
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
                                    <a tabindex="-1" class="disabled"
                                        aria-disabled="true"href="{{ route('tools.audio.generator') }}">
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
                        <li class="with-megamenu has-menu-child-item"><a href="#">Pages <i
                                    class="fa-regular fa-chevron-down"></i></a>
                            <div class="rainbow-megamenu">
                                <div class="wrapper">
                                    <div class="row row--0">
                                        <div class="col-lg-3 single-mega-item">
                                            <ul class="mega-menu-item">
                                                <li>
                                                    <h3 class="rbt-short-title">Inner Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="{{ route('pages.style.guide') }}">
                                                        <span>Style Guide</span>
                                                        <div class="rainbow-badge-card badge-sm ml--5">Hot</div>
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
                                                    <a href="{{ route('pages.blog.details') }}">
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
                                                    <a href="{{ route('pages.chat.export') }}">
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

                                        <div class="col-lg-3 single-mega-item">
                                            <ul class="mega-menu-item br--0">
                                                <li>
                                                    <h3 class="rbt-short-title">Upcoming Advance Elements</h3>
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

                    <div class="rbt-sm-separator"></div>
                    <div class="rbt-default-sidebar-wrapper">
                        <nav class="mainmenu-nav">
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li>
                                    <a href="{{ route('tools.text.generator') }}">
                                        <i class="fa-sharp fa-regular fa-monitor"></i><span>Welcome</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.pricing') }}">
                                        <i class="fa-sharp fa-regular fa-briefcase"></i><span>ManageSubsription</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="rbt-sm-separator"></div>
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li>
                                    <a href="{{ route('tools.text.generator') }}">
                                        <img
                                            src="{{ asset('assets/images/generator-icon/text.png') }}"alt="AI Generator">
                                        <span>Text Generator</span>
                                    </a>
                                </li>
                                <li><a href="{{ route('tools.image.generator') }}">
                                        <img src="{{ asset('assets/images/generator-icon/photo.png') }}"
                                            alt="AI Generator">
                                        <span>Image Generator</span>
                                        <div class="rainbow-badge-card badge-sm ml--10">Hot</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.code.generator') }}">
                                        <img src="{{ asset('assets/images/generator-icon/code-editor.png') }}"
                                            alt="AI Generator"><span>Code Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.image.editor') }}">
                                        <img src="{{ asset('assets/images/generator-icon/photo.png') }}"
                                            alt="AI Generator"><span>Image Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.video.generator') }}">
                                        <img src="{{ asset('assets/images/generator-icon/video-camera.png') }}"
                                            alt="AI Generator">
                                        <span>Vedio Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('tools.email.generator') }}">
                                        <img src="{{ asset('assets/images/generator-icon/email.png') }}"
                                            alt="AI Generator">
                                        <span>Email Generator</span>
                                    </a>
                                </li>
                                <li>
                                    <a tabindex="-1" class="disabled" aria-disabled="true" role="button">
                                        <img src="{{ asset('assets/images/generator-icon/website-design.png') }}"
                                            alt="AI Generator">
                                        <span>Website Generator</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <div class="rbt-sm-separator"></div>

                        <nav class="mainmenu-nav">
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li class="has-submenu">
                                    <a class="collapse-btn collapsed" data-bs-toggle="collapse"
                                        href="#collapseExampleMenu" role="button" aria-expanded="false"
                                        aria-controls="collapseExampleMenu">
                                        <i class="fa-sharp fa-solid fa-circle-plus"></i>
                                        <span>Setting</span>
                                    </a>
                                    <div class="collapse" id="collapseExampleMenu">
                                        <ul class="submenu rbt-default-sidebar-list">
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
                                                <a href="{{ route('pages.appearance') }}">
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
                                    </div>
                                </li>
                                <li><a href="#"><i class="fa-sharp fa-regular fa-award"></i><span>Help &
                                            FAQ</span></a>
                                </li>
                            </ul>
                            <div class="rbt-sm-separator"></div>
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li>
                                    <a href="{{ route('pages.release.notes') }}">
                                        <i class="fa-sharp fa-regular fa-bell"></i>
                                        <span>Release notes</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.terms.policy') }}">
                                        <i class="fa-sharp fa-regular fa-briefcase"></i>
                                        <span>Terms & Policy</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Start Header Btn  -->
                <div class="header-btn d-block d-md-none">
                    <a class="btn-default @@btnClass" target="_blank"
                        href="{{ route('tools.text.generator') }}">
                        Get Started Free
                    </a>
                </div>
                <!-- End Header Btn  -->
            </div>
        </div>
