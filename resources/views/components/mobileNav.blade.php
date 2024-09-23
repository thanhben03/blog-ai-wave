        <!-- End Header Area  -->
        <div class="popup-mobile-menu">
            <div class="inner-popup">
                <div class="header-top">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img class="logo-light w-100" src="{{ asset('assets/images/logo/logo_top_2.svg') }}" alt="ChatBot Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="fa-sharp fa-regular fa-x"></i>
                        </button>
                    </div>
                </div>

                <div class="content">
                    <x-nav-menu-mobile />

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
                                <x-menu-left-item
                                    text="Thuật ngữ tài chính"
                                    path="assets/images/generator-icon/text.png"
                                    route="tools.text.generator"
                                />

                                <x-menu-left-item
                                    text="Công cụ kỹ thuật"
                                    path="assets/images/generator-icon/photo.png"
                                    route="tools.image.generator"
                                />

                                <x-menu-left-item
                                    text="Quản lý vốn"
                                    path="assets/images/generator-icon/photo.png"
                                    route="tools.code.generator"
                                />


                                <x-menu-left-item
                                    text="Sử dụng MT5"
                                    path="assets/images/generator-icon/photo.png"
                                    route="tools.image.editor"
                                />
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
