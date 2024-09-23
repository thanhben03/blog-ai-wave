@extends('layouts.app2')

@section('title')
    Text Generator
@endsection

@section('content')
    <div class="rbt-main-content">
        <div class="rbt-daynamic-page-content">

            <!-- Dashboard Center Content -->
            <div class="rbt-dashboard-content">
                <div class="content-page">

                    <!-- Text Generator -->
                    <div class="chat-box-section">
                        <div class="chat-top-bar">
                            <div class="section-title">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icons/document-file.png') }}" alt="">
                                </div>
                                <h6 class="title">Thuật ngữ tài chính</h6>
                            </div>
                            <div class="dropdown history-box-dropdown">
                                <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-regular fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu style-one">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-sharp fa-solid fa-tag"></i> Pin
                                            Chat</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-lines"></i>
                                            Rename</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-share-nodes"></i>
                                            Share</a></li>
                                    <li><a class="dropdown-item delete-item" href="#"><i
                                                class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="chat-box-list" id="chatContainer">
                            <div class="row row--15">
                                <div class="col-lg-6 col-md-6 col-12 mt--30">
                                    <div class="rainbow-card undefined">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a class="image" href="http://127.0.0.1:8000/blog-details"><img src="http://127.0.0.1:8000/assets/images/blog/blog-01.png" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="rainbow-meta-list">
                                                    <li><i class="fa-sharp fa-regular fa-calendar-days icon-left"></i> 10
                                                        Dec 2023</li>
                                                    <li class="separator"></li>
                                                    <li class="catagory-meta"><a href="#">Technology</a></li>
                                                </ul>
                                                <h4 class="title"><a href="http://127.0.0.1:8000/blog-details">Best
                                                        Corporate
                                                        Tips
                                                        You Will Read This Year.
                                                    </a>
                                                </h4>
                                                <p class="description">Implement user authentication to provide personalized
                                                    experiences </p>
                                                <a class="btn-read-more border-transparent" href="#"><span>Read More
                                                        <i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt--30">
                                    <div class="rainbow-card undefined">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a class="image" href="http://127.0.0.1:8000/blog-details"><img src="http://127.0.0.1:8000/assets/images/blog/blog-01.png" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="rainbow-meta-list">
                                                    <li><i class="fa-sharp fa-regular fa-calendar-days icon-left"></i> 10
                                                        Dec 2023</li>
                                                    <li class="separator"></li>
                                                    <li class="catagory-meta"><a href="#">Technology</a></li>
                                                </ul>
                                                <h4 class="title"><a href="http://127.0.0.1:8000/blog-details">Best
                                                        Corporate
                                                        Tips
                                                        You Will Read This Year.
                                                    </a>
                                                </h4>
                                                <p class="description">Implement user authentication to provide personalized
                                                    experiences </p>
                                                <a class="btn-read-more border-transparent" href="#"><span>Read More
                                                        <i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mt--30">
                                    <div class="rainbow-card undefined">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a class="image" href="http://127.0.0.1:8000/blog-details"><img src="http://127.0.0.1:8000/assets/images/blog/blog-01.png" alt="Blog Image">
                                                </a>
                                            </div>
                                            <div class="content">
                                                <ul class="rainbow-meta-list">
                                                    <li><i class="fa-sharp fa-regular fa-calendar-days icon-left"></i> 10
                                                        Dec 2023</li>
                                                    <li class="separator"></li>
                                                    <li class="catagory-meta"><a href="#">Technology</a></li>
                                                </ul>
                                                <h4 class="title"><a href="http://127.0.0.1:8000/blog-details">Best
                                                        Corporate
                                                        Tips
                                                        You Will Read This Year.
                                                    </a>
                                                </h4>
                                                <p class="description">Implement user authentication to provide personalized
                                                    experiences </p>
                                                <a class="btn-read-more border-transparent" href="#"><span>Read More
                                                        <i class="fa-sharp fa-regular fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rbt-static-bar">
                            <form class="new-chat-form border-gradient">
                                <textarea id="txtarea" rows="1" placeholder="Send a message..."></textarea>
                                <div class="left-icons">
                                    <div title="AiWave" class="form-icon icon-gpt">
                                        <i class="fa-sharp fa-regular fa-aperture"></i>
                                    </div>
                                </div>
                                <div class="right-icons">
                                    <div class="form-icon icon-plus" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip" data-bs-title="Choose File">
                                        <input type="file" class="input-file" name="myfile" multiple>
                                        <i class="fa-sharp fa-regular fa-plus"></i>
                                    </div>
                                    <button class="form-icon icon-mic" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip" data-bs-title="Voice Search">
                                        <i class="fa-regular fa-waveform-lines"></i>
                                    </button>
                                    <button class="form-icon icon-send" id="sendButton" onclick="sendMessage()"
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip" data-bs-title="Send message">
                                        <i class="fa-sharp fa-solid fa-paper-plane-top"></i>
                                    </button>
                                </div>
                            </form>
                            <p class="b3 small-text">AiWave can make mistakes. Consider checking important
                                information.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dashboard Right Content -->
            <div class="rbt-right-side-panel popup-dashboardright-section">

                <div class="right-side-top">
                    <a class="btn-default bg-solid-primary" data-bs-toggle="modal" data-bs-target="#newchatModal">
                        <span class="icon"><i class="fa-sharp fa-regular fa-circle-plus"></i></span>
                        <span>New Chat</span>
                    </a>
                </div>
                <div class="right-side-bottom">
                    <div class="small-search search-section mb--20">
                        <input type="search" placeholder="Search Here...">
                        <i class="fa-sharp fa-regular fa-search"></i>
                    </div>

                    <div class="chat-history-section">
                        <h6 class="title">Today</h6>
                        <ul class="chat-history-list">
                            <li class="history-box active">
                                AiWaveDefination
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Your last Question
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Business Shortcurt Methode
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Best way to maintain code Quality
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="chat-history-section has-show-more">
                        <h6 class="title">Yesterday</h6>
                        <ul class="chat-history-list has-show-more-inner-content">
                            <li class="history-box">
                                How to write a code
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Form Html CSS JS
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                HTML Shortcurt Methode
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Best way to maintain code Quality
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                AiWaveDefination
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Your last Question
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Unique Shortcurt Methode
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Generate a circle Image
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="rbt-show-more-btn">Show More</div>
                    </div>

                    <div class="chat-history-section has-show-more">
                        <h6 class="title">Previous 7 days</h6>
                        <ul class="chat-history-list has-show-more-inner-content">
                            <li class="history-box">
                                User Assistant Request
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Funtion Js
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Generate a Image
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Best way to maintain code Quality
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                AiWaveDefination
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Your last Question
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Business Shortcurt Methode
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Best way to maintain Remote Team
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="rbt-show-more-btn">Show More</div>
                    </div>

                    <div class="chat-history-section mb--100 has-show-more">
                        <h6 class="title">November</h6>
                        <ul class="chat-history-list has-show-more-inner-content">
                            <li class="history-box">
                                AI writing: Free Trial
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Your last Question
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Education Shortcurt Methode
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                1992 Environment Policy
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Senior UX/UI Design
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Your last Question
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Dark Mode Html CSS JS
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="history-box">
                                Best way to maintain code Quality
                                <div class="dropdown history-box-dropdown">
                                    <button type="button" class="more-info-icon dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-ellipsis"></i>
                                    </button>
                                    <ul class="dropdown-menu style-one">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i>
                                                Regenerate</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-file-lines"></i> Rename</a></li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-solid fa-share-nodes"></i> Share</a></li>
                                        <li><a class="dropdown-item delete-item" href="#"><i
                                                    class="fa-solid fa-trash-can"></i> Delete Chat</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <div class="rbt-show-more-btn">Show More</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
