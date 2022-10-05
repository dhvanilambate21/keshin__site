@extends('layout.main')

@section('main-container')

<div class="container">
    <div class="row project__kl">
        <div class="col-lg-12">
            <div class="project">
                <p class="brand">Projects<span class="dot">.</span></p>
                <h6 class="f2">A small selection of projects I’ve worked on</h6>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="container">
        <div class="row project__view">
            <div class="col-md-12">
                <div class="countries_slider design__ks">
                    <div class="design__tabs__ks">
                        <h6 class="f2">What: </h6>
                        <ul class="nav nav-tabs tabs__group" id="myTab" role="tablist">
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link active tabs__btn" id="all-tab" data-bs-toggle="tab"
                                    data-bs-target="#all-tab-pane" type="button" role="tab" aria-controls="all-tab-pane"
                                    aria-selected="true">All</button>
                            </li>
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link tabs__btn" id="mobile-tab" data-bs-toggle="tab"
                                    data-bs-target="#mobile-tab-pane" type="button" role="tab"
                                    aria-controls="mobile-tab-pane" aria-selected="false">Mobile</button>
                            </li>
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link tabs__btn" id="web-tab" data-bs-toggle="tab"
                                    data-bs-target="#web-tab-pane" type="button" role="tab" aria-controls="web-tab-pane"
                                    aria-selected="false">Web</button>
                            </li>
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link tabs__btn" id="other-tab" data-bs-toggle="tab"
                                    data-bs-target="#other-tab-pane" type="button" role="tab"
                                    aria-controls="other-tab-pane" aria-selected="false">Other</button>
                            </li>
                        </ul>
                    </div>
                    <div class="design__tabs__ks">
                        <h6 class="f2">How: </h6>
                        <ul class="nav nav-tabs tabs__group" id="myTab" role="tablist">
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link tabs__btn" id="design-tab" data-bs-toggle="tab"
                                    data-bs-target="#design-tab-pane" type="button" role="tab"
                                    aria-controls="design-tab-pane" aria-selected="true">Design</button>
                            </li>
                            <li class="nav-item tabs__unique" role="presentation">
                                <button class="nav-link link tabs__btn" id="development-tab" data-bs-toggle="tab"
                                    data-bs-target="#development-tab-pane" type="button" role="tab"
                                    aria-controls="development-tab-pane" aria-selected="false">Development</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="design">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="s1__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
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
                        <div class="col-md-6">
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
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="s1__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="s2__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="design">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="s1__page">
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
                        <div class="col-md-6">
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
                <div class="design">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="s1__page">
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
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="s2__page">
                                <div class="web__ex__ds place__bg">
                                    <div class="android__apps">
                                        <div class="android__apps">
                                            <p class="app__text">UI Design <span class="box__ks"></span> Mobile app
                                            </p>
                                            <h3>Heart Rate Monitor</h3>
                                            <p class="mobile__content">The Heart Rate Measuring App for ios devices
                                                (UI,
                                                App Icon, App Store Screenshots)
                                            </p>
                                            <a class="mobile__view" href="view more">View more<img
                                                    src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <img src="{{ asset('frontend/images/video-editor-images.png') }}"
                                        class="img-fluid" />
                                </div>
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
        </div>
    </div>
</section>
<section class="playground">
    <div class="container">
        <div class="row exploration__ks">
            <div class="col-lg-12">
                <div class="play__exploation">
                    <p class="small__brand">Playground<br />
                        & Exploration<span class="dot">.</span></p>
                    <h6 class="f2">Driven by a immance love of exploring new <br />knowledge around design and more.
                    </h6>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row mockup__m2">
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dribbble__mockup">
                            <div class="mockup__v0">
                                <img src="{{ asset('frontend/images/title-dribbble-img.png') }}" class="img-fluid" />
                            </div>
                            <div class="dribbble__text">
                                <h6 class="f2">Dribbble</h6>
                                <h6 class="footer__mockup">Podcaster's Editor Onboarding</h6>
                            </div>
                            <a href="#"><img src="{{ asset('frontend/images/icons-arrow-cross-arrow.svg') }}"
                                    class="img-fluid" /></a>
                        </div>
                    </div>
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
</section>
@endsection