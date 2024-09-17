@extends('layouts.app2')

@section('title')
    Profile Detaile
@endsection

@section('content')
    <!-- Main content -->
    <div class="rbt-main-content mb--0">
        <div class="rbt-daynamic-page-content center-width">
            <!-- Dashboard Center Content -->
            <div class="rbt-dashboard-content">
                <div class="banner-area">
                    <!-- AiWavesmall Slider -->
                    <div class="settings-area">
                        <h3 class="title">Profile Details</h3>
                        <ul class="user-nav">
                            <li>
                                <a href="{{ route('pages.profile') }}">
                                    <span>Profile Details</span>
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
                                <a href="{{ route('pages.appearance') }}">
                                    <span>Apperance</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.plans.billing') }}">
                                    <span>Plans and Billing</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.sessions') }}" class="active">
                                    <span>Sessions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content-page pb--50">
                    <div class="chat-box-list">

                        <!-- AiWaveNotification Section -->
                        <div class="single-settings-box sessions-box overflow-hidden">
                            <div class="section-title">
                                <h4 class="title mb--0">Your Seasons</h4>
                                <p class="description">Terminate any unauthorized sessions from the roster of devices
                                    accessing your account. </p>
                            </div>
                            <div class="rbt-sm-separator mt-0"></div>
                            <div class="list-card-grp">
                                <div class="toolbar d-flex">
                                    <div class="icon"><i class="fa-regular fa-circle-info"></i></div>
                                    <p class="desc">You accessed the system from two distinct devices utilizing separate
                                        web browsers...</p>
                                </div>
                                <div class="list-card">
                                    <div class="inner">
                                        <div class="left-content">
                                            <div class="img-section">
                                                <img src="{{ asset('assets/images/sign-up/firefox.png') }}"
                                                    alt="Browser Icon">
                                            </div>
                                            <div class="content-section">
                                                <h6 class="title">Firefox on Macbook Pro</h6>
                                                <p class="desc">222.225.225.222</p>
                                                <p class="date">Signed in Dec 05, 2023</p>
                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <button class="btn-default btn-border">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card">
                                    <div class="inner">
                                        <div class="left-content">
                                            <div class="img-section">
                                                <img src="{{ asset('assets/images/sign-up/firefox.png') }}"
                                                    alt="Browser Icon">
                                            </div>
                                            <div class="content-section">
                                                <h6 class="title">Firefox on IPhone 15</h6>
                                                <p class="desc">222.225.225.222</p>
                                                <p class="date">Signed in Dec 02, 2023</p>
                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <button class="btn-default btn-border">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card">
                                    <div class="inner">
                                        <div class="left-content">
                                            <div class="img-section">
                                                <img src="{{ asset('assets/images/sign-up/chrome.png') }}"
                                                    alt="Browser Icon">
                                            </div>
                                            <div class="content-section">
                                                <h6 class="title">Chorome on Macbook Pro</h6>
                                                <p class="desc">222.225.225.222</p>
                                                <p class="date">Signed in Dec 02, 2023</p>
                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <button class="btn-default btn-border">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-card">
                                    <div class="inner">
                                        <div class="left-content">
                                            <div class="img-section">
                                                <img src="{{ asset('assets/images/sign-up/chrome.png') }}"
                                                    alt="Browser Icon">
                                            </div>
                                            <div class="content-section">
                                                <h6 class="title">Chorome on IPhone X Pro</h6>
                                                <p class="desc">222.225.225.222</p>
                                                <p class="date">Signed in Dec 02, 2023</p>
                                            </div>
                                        </div>
                                        <div class="right-content">
                                            <button class="btn-default btn-border">
                                                <i class="fa-solid fa-trash-can"></i> Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="btn-group mt--20">
                                    <a class="btn-default" href="#"><i class="fa-sharp fa-regular fa-log-out"></i>
                                        Sign out All devices</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
