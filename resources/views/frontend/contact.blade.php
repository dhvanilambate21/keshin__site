@extends('layout.main')

@section('main-container')
<div class="container">
    <div class="row contact__for">
        <div class="col-lg-12">
            <div class="about__possion">
                <p class="brand">Contact<span class="dot">.</span></p>
                <h6 class="f2">Say hi, whenever you’re ready</h6>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="social__contact">
                <div class="social__bg">
                    <div class="social__icon">
                        <img src="{{ asset('frontend/images/dribbble-32.svg') }}" alt="">
                    </div>
                    <div class="social__info">
                        <p>Playground & Exploration</p>
                        <h6>Dribbble</h6>
                    </div>
                </div>
                <div class="social__bg">
                    <div class="social__icon">
                        <img src="{{ asset('frontend/images/1-icons-social-linkedin.svg') }}" alt="">
                    </div>
                    <div class="social__info">
                        <p>Work Experience</p>
                        <h6>Linkedin</h6>
                    </div>
                </div>
                <div class="social__bg">
                    <div class="social__icon">
                        <img src="{{ asset('frontend/images/1-icons-social-instagram.svg') }}" alt="">
                    </div>
                    <div class="social__info">
                        <p>What i’m up to</p>
                        <h6>Instagram</h6>
                    </div>
                </div>
                <div class="social__bg">
                    <div class="social__icon">
                        <img src="{{ asset('frontend/images/1-icons-social-behance.svg') }}" alt="">
                    </div>
                    <div class="social__info">
                        <p>Project Visuals</p>
                        <h6>Behance</h6>
                    </div>
                </div>
                <div class="social__bg">
                    <div class="social__icon">
                        <img src="{{ asset('frontend/images/google-icon.svg') }}" alt="">
                    </div>
                    <div class="social__info">
                        <p href="#">Keshin.javiya@gmail.com</p>
                        <h6>E Mail</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section>
    <div class="container">
        <div class="row project__mind">
            <div class="col-lg-12">
                <div class="mind__line">
                    <p class="small__brand">Got a project in mind?, drop me a line</p>
                    <h6 class="f2">It usually takes us up to 24-48h to get back to you.</h6>
                </div>
            </div>
        </div>

        <form class="contact__bg" method="post" action="store" enctype="multipart/form-data">
            @csrf
            @if(session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif
            <div class="row contact__block">
                <div class="col-md-6">
                    <div class="md__cotact">
                        <p>1. What should we call you?</p>
                        <div class="ks__form__group">
                            <input type="text" class="form-control" id="exampleFormControlInput1 formControlReadonly"
                                placeholder="keshin javya" name="name">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md__cotact">
                        <p>2. How shall i contact you?</p>
                        <div class="ks__form__group">
                            <input type="text" class="form-control" id="exampleFormControlInput2"
                                placeholder="email address" name="email">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md__cotact">
                        <p>3. What is the name of your company?</p>
                        <div class="ks__form__group">
                            <input type="text" class="form-control" id="exampleFormControlInput3"
                                placeholder="Hashvel inc" name="companyname">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md__cotact">
                        <p>4. When do you need this project completed?</p>
                        <div class="ks__form__group">
                            <input type="date" class="form-control" id="exampleFormControlInput4"
                                placeholder="Have date in mind?" name="complateddate">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md__cotact">
                        <p>5. I’m interested in…</p>
                        <div class="provider__ks">
                            <div class="provider__ks__list">
                                <input type="radio" id="radio1" name="intrest" id="size_1" class="selector-item_radio"
                                    value="Mobile App" checked>
                                <label for="radio1" for="size_1" class="selector-item_label">Mobile App</label>
                            </div>
                            <div class="provider__ks__list">
                                <input type="radio" id="radio2" name="intrest" id="size_2" class="selector-item_radio"
                                    value="Web App">
                                <label for="radio2" for="size_2" class="selector-item_label">Web app</label>
                            </div>
                            <div class="provider__ks__list">
                                <input type="radio" id="radio3" name="intrest" id="size_3" class="selector-item_radio"
                                    value="Digital Product">
                                <label for="radio3" for="size_3" class="selector-item_label">Digital product</label>
                            </div>
                            <div class="provider__ks__list">
                                <input type="radio" id="radio4" name="intrest" id="size_4" class="selector-item_radio"
                                    value="Ecommerce">
                                <label for="radio4" for="size_4" class="selector-item_label">Ecommerce</label>
                            </div>
                            <div class="provider__ks__list">
                                <input type="radio" id="radio5" name="intrest" id="size_5" class="selector-item_radio"
                                    value="Other">
                                <label for="radio5" for="size_5" class="selector-item_label">Other</label>
                            </div>

                            <!-- <ul class="provider__ks" name="intrest">
                            <li class="provider__ks__list">
                                <input type="radio" name="size" id="size_1" value="Mobile App" checked />
                                <label for="size_1">Mobile App</label>
                            </li>
                            <li class="provider__ks__list">
                                <input type="radio" name="size" id="size_2" value="Web App" checked />
                                <label for="size_2">Web app</label>
                            </li>
                            <li class="provider__ks__list">
                                <input type="radio" name="size" id="size_3" value="Digital Product" checked />
                                <label for="size_3">Digital product</label>
                            </li>
                            <li class="provider__ks__list">
                                <input type="radio" name="size" id="size_4" value="Ecommerce" checked />
                                <label for="size_4">Ecommerce</label>
                            </li>
                            <li class="provider__ks__list">
                                <input type="radio" name="size" id="size_5" value="Other" checked />
                                <label for="size_5">Other</label>
                            </li>
                        </ul> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md__cotact">
                        <p>6. What's your budget? (USD)</p>
                        <div class="ks__form__group answer__to__ks">
                            <select class="form-select" aria-label="Please Select budget" name="budget">
                                <option selected>Please Select budget</option>
                                <option value="100">$ 100</option>
                                <option value="200">$ 200</option>
                                <option value="300">$ 300</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md__cotact">

                        <p>7. Tell us about your project</p>
                        <div class="ks__form__group answer__to__ks">
                            <input type="text" class="form-control" id="exampleFormControlInput7"
                                placeholder="Requirments, Goal, target audience etc." name="description">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md__cotact">

                        <p>8. Attach any files you feel would be useful (Max 10mb)</p>
                        <div class="choose__ks">
                            <input type='file' placeholder="Attach File here" name="file" />
                            <span class="attech"> <img src="{{ asset('frontend/images/file-icon.svg') }}" name="image">
                                <span class="attech__button">Attach File
                                    here
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="md__cotact">
                    <!-- <a class="btn Send__ks" href="#">Send Message<img src="{{ asset('frontend/images/cross-arrow-white.svg') }}"></a> -->
                    <!-- <input class="btn Send__ks" value="Send Message" name=""submit><img src="{{ asset('frontend/images/cross-arrow-white.svg') }}"> -->
                    <button class="btn Send__ks" type="submit" name="submit">Send Message<img
                            src="{{ asset('frontend/images/cross-arrow-white.svg') }}"></button>
                </div>
            </div>
        </form>
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