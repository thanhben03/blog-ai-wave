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
                                <a href="{{ route('pages.profile') }}" class="active">
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
                                <a href="{{ route('pages.sessions') }}">
                                    <span>Sessions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content-page pb--50">
                    <div class="chat-box-list">

                        <!-- AiWaveSettings Settings -->
                        <div class="single-settings-box profile-details-box overflow-hidden">
                            <div class="profile-details-tab">
                                <div class="advance-tab-button mb--30">
                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4"
                                        role="tablist">
                                        <li role="presentation">
                                            <a href="#" class="tab-button active" id="profile-tab"
                                                data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                                                aria-controls="profile" aria-selected="true">
                                                <span class="title">Profile</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab"
                                                data-bs-target="#password" role="tab" aria-controls="password"
                                                aria-selected="false">
                                                <span class="title">Password</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#" class="tab-button" id="del-account-tab" data-bs-toggle="tab"
                                                data-bs-target="#delaccount" role="tab" aria-controls="delaccount"
                                                aria-selected="false">
                                                <span class="title">Delete Account</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <!-- Start Profile Row  -->
                                        <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="firstname">First Name</label>
                                                    <input id="firstname" type="text" placeholder="Trent">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="lastname">Last Name</label>
                                                    <input id="lastname" type="text" placeholder="Adam">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="username">User Name</label>
                                                    <input id="username" type="text" placeholder="Adam Milner">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="phonenumber">Phone Number</label>
                                                    <input id="phonenumber" type="tel" placeholder="+1-202-555-0174">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="bio">Bio</label>
                                                    <textarea id="bio" cols="20" rows="5"
                                                        placeholder="I'm the Front-End Developer for #Rainbow IT in Bangladesh, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experienc"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mt--20">
                                                <div class="form-group mb--0">
                                                    <a class="btn-default" href="#">Update Info</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>

                                    <div class="tab-pane fade" id="password" role="tabpanel"
                                        aria-labelledby="password-tab">
                                        <!-- Start Profile Row  -->
                                        <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="currentpassword">Current Password</label>
                                                    <input id="currentpassword" type="password"
                                                        placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="newpassword">New Password</label>
                                                    <input id="newpassword" type="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="retypenewpassword">Re-type New Password</label>
                                                    <input id="retypenewpassword" type="password"
                                                        placeholder="Re-type New Password">
                                                </div>
                                            </div>
                                            <div class="col-12 mt--20">
                                                <div class="form-group mb--0">
                                                    <a class="btn-default" href="#">Update Password</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>
                                    <div class="tab-pane fade" id="delaccount" role="tabpanel"
                                        aria-labelledby="del-account-tab">
                                        <!-- Start Profile Row  -->
                                        <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                            <div class="col-11 text-Center">
                                                <p class="mb--20"> <strong>Warning: </strong>Deleting your account will
                                                    permanently erase all your data and cannot be reversed. This includes
                                                    your profile, conversations, comments, and any other info linked to your
                                                    account. Are you sure you want to go ahead with deleting your account?
                                                    Enter your password to confirm.</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="enterpassword">Your Password</label>
                                                    <input id="enterpassword" type="password"
                                                        placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-12 mt--20">
                                                <div class="form-group mb--0">
                                                    <a class="btn-default" href="#"><i
                                                            class="fa-solid fa-trash-can"></i> Delete Accont</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Profile Row  -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
