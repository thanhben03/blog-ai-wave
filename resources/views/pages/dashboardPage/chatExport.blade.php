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
                                <a href="{{ route('pages.notification') }}">
                                    <span>Notification</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pages.chat.export') }}" class="active">
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
                        <div class="single-settings-box chatexpo-box overflow-hidden">
                            <div class="form-check form-switch notification-box-switch">
                                <h4 class="title">Chat export</h4>
                            </div>
                            <div class="rbt-sm-separator mt-0"></div>
                            <div class="rbt-checkbox-grp">
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input id="rbt-checkbox-1" name="rbt-checkbox-1" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-1">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/photo.png")}}" alt="Team">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Image Generator</span>
                                            <span class="radio-badge">25 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input checked id="rbt-checkbox-2" name="rbt-checkbox-2" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-2">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/video-camera.png")}}" alt="Icon">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Vedio Generator</span>
                                            <span class="radio-badge">56 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input id="rbt-checkbox-3" name="rbt-checkbox-3" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-3">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/photo.png")}}" alt="Icon">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Photo Editor</span>
                                            <span class="radio-badge">48 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input checked id="rbt-checkbox-4" name="rbt-checkbox-4" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-4">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/text-voice.png")}}" alt="Icon">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Text to voice</span>
                                            <span class="radio-badge">125 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input id="rbt-checkbox-5" name="rbt-checkbox-5" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-5">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/code-editor.png")}}" alt="Icon">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Code Generator</span>
                                            <span class="radio-badge">167 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="rbt-checkbox-wrapper style-2">
                                    <input id="rbt-checkbox-6" name="rbt-checkbox-6" type="checkbox" value="yes">
                                    <label for="rbt-checkbox-6">
                                        <span class="img-section">
                                            <img src="{{asset("assets/images/generator-icon/voice.png")}}" alt="Icon">
                                        </span>
                                        <span class="content-section">
                                            <span class="title">Speech to text</span>
                                            <span class="radio-badge">79 Conversations</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mt--40">
                                <a class="btn-default" href="#">Export Chat</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
