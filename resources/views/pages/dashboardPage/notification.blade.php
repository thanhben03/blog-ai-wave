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
                        <h3 class="title">Settings</h3>
                        <ul class="user-nav">
                            <li>
                                <a href="{{ route('pages.profile') }}">
                                    <span>Profile Details</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.notification') }}" class="active">
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

                        <!-- AiWaveNotification Section -->
                        <div class="single-settings-box notification-box overflow-hidden">
                            <div class="form-check form-switch notification-box-switch">
                                <h4 class="title">Notification</h4>
                            </div>
                            <div class="rbt-sm-separator mt-0"></div>
                            <div class="rbt-checkbox-grp">
                                <h5 class="title">Rainbow Platform</h5>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-1">Generate Notification</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-2" name="rbt-checkbox-2" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-2">New Notificaton</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-3" name="rbt-checkbox-3" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-3">New Comment</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-4" name="rbt-checkbox-4" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-4">Random Message</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-5" name="rbt-checkbox-5" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-5">Mentioned</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-6" name="rbt-checkbox-6" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-6">Text Notification</label>
                                </div>
                            </div>
                            <div class="rbt-checkbox-grp">
                                <h5 class="title">From team</h5>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-7" name="rbt-checkbox-7" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-7">New Notificaton</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-8" name="rbt-checkbox-8" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-8">Random Message</label>
                                </div>
                            </div>
                            <div class="rbt-checkbox-grp">
                                <h5 class="title">From Synapse</h5>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-9" name="rbt-checkbox-9" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-9">Mentioned</label>
                                </div>
                                <div class="rbt-checkbox-wrapper">
                                    <input id="rbt-checkbox-11" name="rbt-checkbox-11" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-11">New Comment</label>
                                </div>
                            </div>
                            <div class="form-group mt--40 mb--0">
                                <a class="btn-default" href="#">Save Changes</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
