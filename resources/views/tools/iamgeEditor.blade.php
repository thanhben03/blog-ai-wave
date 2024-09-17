@extends('layouts.app2')

@section('title')
    Image Editor
@endsection

@section('content')
    <!-- Main content -->
    <div class="rbt-main-content">
        <div class="rbt-daynamic-page-content">

            <!-- Dashboard Center Content -->
            <div class="rbt-dashboard-content">
                <div class="content-page">

                    <div class="chat-box-section">
                        <div class="chat-top-bar">
                            <div class="section-title">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/icons/document-file.png') }}" alt="">
                                </div>
                                <h6 class="title">Website roadmap title write me</h6>
                            </div>
                            <div class="dropdown history-box-dropdown">
                                <button type="button" class="more-info-icon dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-regular fa-ellipsis"></i>
                                </button>
                                <ul class="dropdown-menu style-one">
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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

                        <div class="chat-box-list pt--30" id="chatContainer">

                            <!-- Image Editor -->
                            <div class="chat-box author-speech ">
                                <div class="inner">
                                    <div class="chat-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}"
                                                alt="Author">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title">You</h6>
                                            <p class="mb--20">Enhance this photograph and must have eye Glass.</p>
                                            <div class="img-box img-box-frame">
                                                <img class="w-50 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-1.png') }}"
                                                    alt="Image Generation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box ai-speech ">
                                <div class="inner">
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/icons/loader-one.gif') }}"
                                                alt="Loader Images">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-details-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}"
                                                alt="AiWave">
                                        </div>
                                        <div class="chat-content">
                                            <p class="mb--20">Sure, I autonomously fine-tune colors, eliminate
                                                imperfections, and amplify details also have Glass. Witness the outcome.:
                                            </p>
                                            <div class="img-box img-box-frame mb--20">
                                                <img class="w-100 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-2.png') }}"
                                                    alt="Image Generation">
                                                <button class="download-btn btn-default btn-small bg-solid-primary">
                                                    <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                </button>
                                            </div>
                                            <div class="reaction-section">
                                                <div class="btn-grp">
                                                    <div class="left-side-btn dropup">
                                                        <button data-bs-toggle="modal" data-bs-target="#likeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#dislikeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#shareModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-solid fa-share"></i></button>
                                                        <button type="button"
                                                            class="react-btn btn-default btn-small btn-border dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-regular fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu style-one">
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-copy"></i> Copy</a></li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                            <li><a class="dropdown-item delete-item" href="#"><i
                                                                        class="fa-solid fa-trash-can"></i> Delete Chat</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-side-btn">
                                                        <button class="react-btn btn-default btn-small btn-border">
                                                            <i
                                                                class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box author-speech ">
                                <div class="inner">
                                    <div class="chat-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}"
                                                alt="Author">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title">You</h6>
                                            <p>Change the Style of this Image and refine posture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box ai-speech ">
                                <div class="inner">
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/icons/loader-one.gif') }}"
                                                alt="Loader Images">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-details-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}"
                                                alt="AiWave">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title mb--20">Sure, Here the result:</h6>
                                            <div class="img-box img-box-frame mb--20">
                                                <img class="w-100 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-3.png') }}"
                                                    alt="Image Generation">
                                                <button class="download-btn btn-default btn-small bg-solid-primary">
                                                    <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                </button>
                                            </div>
                                            <div class="reaction-section">
                                                <div class="btn-grp">
                                                    <div class="left-side-btn dropup">
                                                        <button data-bs-toggle="modal" data-bs-target="#likeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#dislikeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#shareModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-solid fa-share"></i></button>
                                                        <button type="button"
                                                            class="react-btn btn-default btn-small btn-border dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-regular fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu style-one">
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-copy"></i> Copy</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                            <li><a class="dropdown-item delete-item" href="#"><i
                                                                        class="fa-solid fa-trash-can"></i> Delete Chat</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-side-btn">
                                                        <button class="react-btn btn-default btn-small btn-border">
                                                            <i
                                                                class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box author-speech ">
                                <div class="inner">
                                    <div class="chat-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}"
                                                alt="Author">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title">You</h6>
                                            <p>Please Remove the background and Adjust Blue Color for A Blue Colored Frame
                                                Image </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box ai-speech ">
                                <div class="inner">
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/icons/loader-one.gif') }}"
                                                alt="Loader Images">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-details-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}"
                                                alt="AiWave">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title mb--20">Sure, Here the result:</h6>
                                            <div class="img-box img-box-frame mb--20">
                                                <img class="w-100 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-4.png') }}"
                                                    alt="Image Generation">
                                                <button class="download-btn btn-default  btn-default btn-small btn-border">
                                                    <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                </button>
                                            </div>
                                            <div class="reaction-section">
                                                <div class="btn-grp">
                                                    <div class="left-side-btn dropup">
                                                        <button data-bs-toggle="modal" data-bs-target="#likeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#dislikeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#shareModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-solid fa-share"></i></button>
                                                        <button type="button"
                                                            class="react-btn btn-default btn-small btn-border dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-regular fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu style-one">
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-copy"></i> Copy</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                            <li><a class="dropdown-item delete-item" href="#"><i
                                                                        class="fa-solid fa-trash-can"></i> Delete Chat</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-side-btn">
                                                        <button class="react-btn btn-default btn-small btn-border">
                                                            <i
                                                                class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box author-speech ">
                                <div class="inner">
                                    <div class="chat-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}"
                                                alt="Author">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title">You</h6>
                                            <p>Oh! That's Awesome..<br>br>Please make a Facebook Cover Frame with this Image
                                                For Poster Edit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box ai-speech ">
                                <div class="inner">
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/icons/loader-one.gif') }}"
                                                alt="Loader Images">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-details-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}"
                                                alt="AiWave">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title mb--20">Sure, Here the result:</h6>
                                            <div class="img-box img-box-frame mb--20">
                                                <img class="w-100 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-5.png') }}"
                                                    alt="Image Generation">
                                                <button class="download-btn btn-default  btn-default btn-small btn-border">
                                                    <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                </button>
                                            </div>
                                            <div class="reaction-section">
                                                <div class="btn-grp">
                                                    <div class="left-side-btn dropup">
                                                        <button data-bs-toggle="modal" data-bs-target="#likeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#dislikeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#shareModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-solid fa-share"></i></button>
                                                        <button type="button"
                                                            class="react-btn btn-default btn-small btn-border dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-regular fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu style-one">
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-copy"></i> Copy</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                            <li><a class="dropdown-item delete-item" href="#"><i
                                                                        class="fa-solid fa-trash-can"></i> Delete Chat</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-side-btn">
                                                        <button class="react-btn btn-default btn-small btn-border">
                                                            <i
                                                                class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box author-speech ">
                                <div class="inner">
                                    <div class="chat-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/team-01sm.jpg') }}"
                                                alt="Author">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title">You</h6>
                                            <p>Please Retouch the Image and write this title on the Left "NEVER GIVE UP".
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-box ai-speech ">
                                <div class="inner">
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <i class="fa-sharp fa-solid fa-check"></i>
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Scanning the data...</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-section">
                                        <div class="author">
                                            <img src="{{ asset('assets/images/icons/loader-one.gif') }}"
                                                alt="Loader Images">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                        </div>
                                    </div>
                                    <div class="chat-section generate-details-section">
                                        <div class="author">
                                            <img class="w-100" src="{{ asset('assets/images/team/avater.png') }}"
                                                alt="AiWave">
                                        </div>
                                        <div class="chat-content">
                                            <h6 class="title mb--20">Sure, Here the result:</h6>
                                            <div class="img-box img-box-frame mb--20">
                                                <img class="w-100 radius"
                                                    src="{{ asset('assets/images/generator-img/photo-6.png') }}"
                                                    alt="Image Generation">
                                                <button class="download-btn btn-default  btn-default btn-small btn-border">
                                                    <i class="fa-sharp fa-regular fa-download"></i><span>Download</span>
                                                </button>
                                            </div>
                                            <div class="reaction-section">
                                                <div class="btn-grp">
                                                    <div class="left-side-btn dropup">
                                                        <button data-bs-toggle="modal" data-bs-target="#likeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-up"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#dislikeModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-regular fa-thumbs-down"></i></button>
                                                        <button data-bs-toggle="modal" data-bs-target="#shareModal"
                                                            class="react-btn btn-default btn-small btn-border"><i
                                                                class="fa-sharp fa-solid fa-share"></i></button>
                                                        <button type="button"
                                                            class="react-btn btn-default btn-small btn-border dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa-regular fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <ul class="dropdown-menu style-one">
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-copy"></i> Copy</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-sharp fa-solid fa-tag"></i> Pin Chat</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#"><i
                                                                        class="fa-solid fa-file-lines"></i> Rename</a></li>
                                                            <li><a class="dropdown-item delete-item" href="#"><i
                                                                        class="fa-solid fa-trash-can"></i> Delete Chat</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="right-side-btn">
                                                        <button class="react-btn btn-default btn-small btn-border">
                                                            <i
                                                                class="fa-sharp fa-solid fa-repeat"></i><span>Regenerate</span>
                                                        </button>
                                                    </div>
                                                </div>
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
                            <p class="b3 small-text">AiWave can make mistakes. Consider checking important information.</p>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
                                                    class="fa-sharp fa-solid fa-arrows-rotate"></i> Regenerate</a></li>
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
    <!-- main Main content -->
@endsection
