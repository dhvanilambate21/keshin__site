@extends('layout.main')

@section('main-container')
<div class="container">
    <div class="row digital__interface">
        <div class="col-lg-12">
            <div class="experience__interface__picture">
                <p class="experience__ks brand">Hello ! I'm Keshin</p>
                <p class="crafting__digital brand">
                    I'm Crafting Digital<span class="ticket"></span>
                    Experience & Interface<span class="dot">.</span></p>
            </div>
        </div>
    </div>
    <div class="row working__ks">
        <div class="col-lg-5 col-md-12 order-lg-1 order-md-2 order-2">
            <div class="working__ks__text">
                <p class="working__based">I’m Keshin Javiya, a Freelance
                    Product / UI UX Designer Working remotely, based in📍Rajkot, India.</p>
                <p class="digital_design_text">
                    I specialize in Creating enhanced visual design, UX, Interface design, and design systems for web
                    and
                    mobile apps that thrive in 0 → 1 work. It doesn't matter which industry your business is based in;
                    experience in simple, human-centric, and relatable designing will add genuine value to the
                    application
                    used by your target audience.
                    <br /> <br />
                    I also code for the web, focusing on Front-End development, HTML, CSS framework bootstrap,
                    animation.
                </p>
                <div class="working__ks__button">
                    <a class="btn project" href="#">Estimate project<img
                            src="{{ asset('frontend/images/cross-arrow-white.svg') }}" alt="#"></a>
                    <a class="btn resume" href="#">My Resume<img src="{{ asset('frontend/images/cross-arrow.svg') }}"
                            alt="#"></a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 ordr-lg-2 order-md-1 order-1">
            <div class="design__systems">
                <div class="systems__picture">
                    <img src="{{ asset('frontend/images/keshin-javiya-ui-ux-designer.png') }}" alt="#"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section class="expt__design">
    <div class="slider__mockup__design">
        <div class="ks__mockup__view expt__design__item">
            <img src="{{ asset('frontend/images/1_design.png') }}" class="img-fluid">
        </div>
        <div class="ks__mockup__view expt__design__item">
            <div class="ks__mockup__listing">
                <div class="expt__design__subitem">
                    <img src="{{ asset('frontend/images/2_design.png') }}" class="img-fluid">
                </div>
                <div class="mockup__sk1">
                    <img src="{{ asset('frontend/images/3_design.png') }}" class="img-fluid">
                    <img src="{{ asset('frontend/images/4_design.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="ks__mockup__view expt__design__item">
            <img src="{{ asset('frontend/images/5_design.png') }}" class="img-fluid">
        </div>
        <div class="ks__mockup__view expt__design__item">
            <div class="ks__mockup__listing">
                <div class="expt__design__subitem">
                    <img src="{{ asset('frontend/images/2_design.png') }}" class="img-fluid">
                </div>
                <div class="mockup__sk1">
                    <img src="{{ asset('frontend/images/3_design.png') }}" class="img-fluid">
                    <img src="{{ asset('frontend/images/4_design.png') }}" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="project__ks">
                    <p class="small__brand">my Projects<span class="dot">.</span></p>
                    <h6 class="f2">Here are some of my favorites…</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile__ks">
        <div class="mobile__picture">
            <img src="{{ asset('frontend/images/Heart-Rate-Monitor-app-design.png') }}" alt="">
        </div>
        <div class="mobile__email">
            <div class="mobile__app__management">
                <p class="app__text">UI Design <span class="box__ks"></span> Mobile app</p>
                <h4>Heart Rate Monitor</h4>
                <p class="mobile__content">The Heart Rate Measuring App for ios devices (UI, App Icon, App Store
                    Screenshots)
                    scale.</p>
                <a class="mobile__view" href="view more">View more<img
                        src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="non__home">
        <div class="mobile__home">
            <div class="mobile__app__management">
                <p class="app__text">Ed-Tech <span class="box__ks"></span> Web UI</p>
                <h4>Nona Home<br />
                    E-commerce Website</h4>
                <p class="mobile__content">Minimalistic UI/UX design with clean and easy interface for Nona home website
                </p>
                <a class="mobile__view" href="view more">View more <img
                        src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
            </div>
        </div>
        <div class="mobile__picture">
            <img src="{{ asset('frontend/images/E-commerce-Website-image.png') }}" alt="">
        </div>
    </div>
    <div class="mobile__ks domingo__web">
        <div class="mobile__picture">
            <img src="{{ asset('frontend/images/Domingo-Web-UI-image.png') }}" alt="">
        </div>
        <div class="mobile__email Domingo">
            <div class="mobile__app__management ">
                <p class="app__text">Mobile app</p>
                <h4>Domingo<br />
                    Web UI</h4>
                <p class="mobile__content">The landing page design concept for the email management platform helps to
                    contextual email marketing at
                    scale.</p>
                <a class="mobile__view" href="view more">View more<img
                        src="{{ asset('frontend/images/cross-arrow.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>
<section class="slider__for__client">
    <div class="container">
        <div class="row  client__review">
            <div class="col-md-12">
                <div class="happy__ks">
                    <p class="working__based small__brand">Happy Clients<span class="dot">.</span></p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="happy__client">
                    <div class="client__box">
                        <img src="{{ asset('frontend/images/quote-icons.svg') }}" alt="">
                        <h4>“Thanks for delivering so quickly on short notice. Plus no iterations, impressed with your
                            design
                            skill. Will work again for sure!”</h4>
                        <div class="mindriser__employee">
                            <img src="{{ asset('frontend/images/user-profile.png') }}" alt="">
                            <div class="employee__text">
                                <h6>Graham Griffiths 🇩🇰</h6>
                                <p>CEO at Mindriser</p>
                            </div>
                        </div>
                    </div>
                    <div class="client__box">
                        <img src="images/quote-icons.svg" alt="">
                        <h4>“Thanks for delivering so quickly on short notice. Plus no iterations, impressed with your
                            design
                            skill. Will work again for sure!”</h4>
                        <div class="mindriser__employee">
                            <img src="{{ asset('frontend/images/user-profile.png') }}" alt="">
                            <div class="employee__text">
                                <h6>Graham Griffiths 🇩🇰</h6>
                                <p>CEO at Mindriser</p>
                            </div>
                        </div>
                    </div>
                    <div class="client__box">
                        <img src="{{ asset('frontend/images/quote-icons.svg') }}" alt="">
                        <h4>“Thanks for delivering so quickly on short notice. Plus no iterations, impressed with your
                            design
                            skill. Will work again for sure!”</h4>
                        <div class="mindriser__employee">
                            <img src="{{ asset('frontend/images/user-profile.png') }}" alt="">
                            <div class="employee__text">
                                <h6>Graham Griffiths 🇩🇰</h6>
                                <p>CEO at Mindriser</p>
                            </div>
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
@endsection