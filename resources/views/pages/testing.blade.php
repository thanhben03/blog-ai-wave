@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <!-- Imroz Preloader -->
    <div class="preloader">
        <div class='loader'>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
            <div class='circle'></div>
        </div>
    </div>

    <!-- Start Slider Area  -->
    <div style="height: 100vh; display: flex; align-items: center" class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1 slider-bg-shape"
         data-black-overlay="1">
        <!-- <div class="bg-blend-top bg_dot-mask"></div> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="inner text-center mt--140">
                        <h1 class="title display-one">Chào mừng bạn đến Blog của tôi
                            <br>
                            Ra mắt:
                            <span class="header-caption">
                                <span class="cd-headline rotate-1">
                                    <span class="cd-words-wrapper" style="width: 221px;">
                                        <b class="theme-gradient is-visible">01/12/2024</b>
                                        <b class="theme-gradient is-hidden">01/12/2024</b>
                                        <b class="theme-gradient is-hidden">01/12/2024</b>
                                    </span>
                                </span>
                            </span>
                        </h1>

                        <div class="inner-shape">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-one.png') }}" alt="Icon Shape"
                                 class="iconshape iconshape-one">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-two.png') }}" alt="Icon Shape"
                                 class="iconshape iconshape-two">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-three.png') }}" alt="Icon Shape"
                                 class="iconshape iconshape-three">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-four.png') }}" alt="Icon Shape"
                                 class="iconshape iconshape-four">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="bg-shape">
            <img class="bg-shape-one" src="{{ asset('assets/images/bg/bg-shape-four.png') }}" alt="Bg Shape">
            <img class="bg-shape-two" src="{{ asset('assets/images/bg/bg-shape-five.png') }}" alt="Bg Shape">
        </div>
    </div>
    <!-- End Slider Area  -->

@endsection
