<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Keshinjaviya</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/logo-keshin-javiya.png') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- silck CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}" />

    <!-- Style CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" type="text/css">

</head>

<body>


    <section class="header__ks background__ks">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand ks__logo" href="home"><img
                        src="{{ asset('frontend/images/logo-keshin-javiya.svg') }}" alt="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <div class="" onclick="myFunction(this)">
                        <div class="bar1"></div>
                        <div class="bar3"></div>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-lg-0 header__list header__list__block">
                        <li lass="nav-item header__manu">
                            <h5 class="title__manu d-block d-lg-none">Menu</h5>
                        </li>
                        <li class="nav-item header__manu">
                            <a class="nav-link active" aria-current="page" href="{{ Route('home') }}">Home</a>
                        </li>
                        <li class="nav-item header__manu">
                            <a class="nav-link" href="{{ Route('services') }}">Capabilities</a>
                        </li>
                        <li class="nav-item header__manu">
                            <a class="nav-link" href="{{ Route('projects') }}">Projects</a>
                        </li>
                        <li class="nav-item header__manu">
                            <a class="nav-link" href="{{ Route('about') }}">About me</a>
                        </li>
                        <li class="nav-item header__manu">
                            <a class="nav-link" href="{{ Route('contact') }}">Let's chat?</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav header__list header__sm__adm">
                        <li class="nav-item header__icon">
                            <a class="ks__linked" href="#"><img src="{{ asset('frontend/images/dribbble-24.svg') }}"
                                    alt="#"></a>
                        </li>
                        <li class="nav-item header__icon">
                            <a class="ks__linked" href="#"><img src="{{ asset('frontend/images/instagram-24.svg') }}"
                                    alt="#"></a>
                        </li>
                        <li class="nav-item header__icon">
                            <a class="ks__linked" href="#"><img src="{{ asset('frontend/images/linkedin-24.svg') }}"
                                    alt="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
