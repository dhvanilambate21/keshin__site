@extends('layout.main')

@section('main-container')

<section class="vi__editor">
    <div class="container">
        <div class="row video__editor">
            <div class="col-md-12">
                <div class="vi__background">
                    <div class="video__maker">
                        <h1 class="fwhite">Video Editor & Maker</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="guidelines">
    <div class="container">
        <div class="row pletform">
            <div class="col-md-12">
                <div class="android__app">
                    <h2 class="fwhite">Designing an android app using google material design guidelines</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="android_text">
                    <p class="fwhite">Expertise</p>
                    <h6 class="fwhite">UI Design</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="android_text">
                    <p class="fwhite">Platform</p>
                    <h6 class="fwhite">Android</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="android_text">
                    <p class="fwhite">Industry</p>
                    <h6 class="fwhite">Video players & editors</h6>
                </div>
            </div>
            <div class="col-md-12">
                <div class="android__link">
                    <a href="#" class="app__text fwhite unline__btn">Text link<img
                            src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""
                            class="img-fluid arrow__side"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="beautiful__friendship">
    <div class="container">
        <div class="row friendship__ks">
            <div class="col-md-8">
                <div class="dot__grey">
                    <h6 class="f2">Maybe it’s the beginning of a beautiful friendship?</h6>
                    <h2>If you fancy a chat feel free to<br />
                        drop me a line.</h2>
                    <img src="{{ asset('frontend/images/illustration@3x.svg') }}"
                        class="img-fluid d-sm-none d-md-blocke" alt="#">
                    <a class="btn touch" href="#">Get in touch<img src="{{ asset('frontend/images/cross-arrow.svg') }}"
                            alt="#"></a>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row project__view__detail">
            <div class="col-lg-12">
                <div class="project">
                    <p class="small__brand">Similar Projects<span class="dot">.</span></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="design">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="s1__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <p class="app__text">UI Design <span class="box__ks"></span> Mobile app</p>
                                        <h3>Heart Rate Monitor</h3>
                                        <p class="mobile__content">The Heart Rate Measuring App for ios devices (UI,
                                            App Icon, App Store Screenshots)
                                        </p>
                                        <a class="mobile__view" href="view more">View more<img
                                                src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="s2__page">
                                <div class="web__ex__ds place__bg2">
                                    <div class="android__apps">
                                        <p class="app__text">UI Design <span class="box__ks"></span> Mobile app</p>
                                        <h3>Heart Rate Monitor</h3>
                                        <p class="mobile__content">The Heart Rate Measuring App for ios devices (UI,
                                            App Icon, App Store Screenshots)
                                        </p>
                                        <a class="mobile__view" href="view more">View more<img
                                                src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <img src="{{ asset('frontend/images/dribbble.png') }}" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="design">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="s1__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <p class="app__text">UI Design <span class="box__ks"></span> Mobile app</p>
                                        <h3>Heart Rate Monitor</h3>
                                        <p class="mobile__content">The Heart Rate Measuring App for ios devices (UI,
                                            App Icon, App Store Screenshots)
                                        </p>
                                        <a class="mobile__view" href="view more">View more<img
                                                src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="s2__page">
                                <div class="web__ex__ds place__bg2">
                                    <div class="android__apps">
                                        <p class="app__text">UI Design <span class="box__ks"></span> Mobile app</p>
                                        <h3>Heart Rate Monitor</h3>
                                        <p class="mobile__content">The Heart Rate Measuring App for ios devices (UI,
                                            App Icon, App Store Screenshots)
                                        </p>
                                        <a class="mobile__view" href="view more">View more<img
                                                src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                    </div>
                                    <img src="{{ asset('frontend/images/dribbble.png') }}" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="Similar__design">
                    <h5>
                        Want to see more? Check out more of my all projects!
                    </h5>
                    <a class="btn project case__project" href="#">See all case project <img
                            src="{{ asset('frontend/images/cross-arrow-white.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection