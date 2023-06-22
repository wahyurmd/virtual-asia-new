<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Virtual Asia')

<!-- Main Content -->
@section('content')

<div class="hero_area" id="home">
    <!-- header section strats -->
    @include('template.header')
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="detail-box">
                        <h4>
                            VIRTUAL ASIA
                        </h4>
                        <h2>
                            We help your business virtually <br>
                            with our quality products
                        </h2>
                        <div>
                            <a href="#about">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/header-1.png') }}" alt="header-1" />
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/slider-img.png') }}" alt="header-2" />
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>

<!-- client section -->
<section class="subscribe_section layout_padding" id="client">
    <div class="container">
        <div class="heading_container">
            <h2>
                Our Clients
            </h2>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row p-2 text-center">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients1.jpg') }}" class="filter" alt="Intercontinental Bali Resort" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients2.jpg') }}" class="filter" alt="Amari" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients3.jpg') }}" class="filter" alt="Jumeirah Hotels & Resort" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients4.jpg') }}" class="filter" alt="GBK" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients5.jpg') }}" class="filter" alt="Alila" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients6.jpg') }}" class="filter" alt="Grandkemang Jakarta" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients7.jpg') }}" class="filter" alt="HYATT" width="150">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 p-3">
                <img src="{{ asset('assets/images/client/clients8.jpg') }}" class="filter" alt="Jakarta Stadium" width="150">
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<!-- feature section -->
<section class="feature_section">
    {{-- <div class="container">
        <div class="heading_container">
            <h2>
                Why Virtual Asia?
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="head-box-why">
                        <div class="bounce">
                            <i class="bi bi-arrow-down-short icon-custom"></i>
                        </div>
                        <h6 class="pt-2">
                            Skills
                        </h6>
                    </div>
                    <div class="detail-box-why">
                        <p>
                            We have what it takes to get the job done properly
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="head-box-why">
                        <div class="bounce">
                            <i class="bi bi-arrow-down-short icon-custom"></i>
                        </div>
                        <h6 class="pt-2">
                            Value
                        </h6>
                    </div>
                    <div class="detail-box-why">
                        <p>
                            We deliver more than you expectec
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="head-box-why">
                        <div class="bounce">
                            <i class="bi bi-arrow-down-short icon-custom"></i>
                        </div>
                        <h6 class="pt-2">
                            Experiences
                        </h6>
                    </div>
                    <div class="detail-box-why">
                        <p>
                            We've been arround for more than 10 years with passionate team
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VIDEO_ID?autoplay=1&mute=1&controls=0&showinfo=0&loop=1&playlist=ETpg1uuFdbg"></iframe>
    </div>
</section>
<!-- end feature section -->

<!-- about section -->
<section class="client_section layout_padding" id="about">
    <div class="container">
        <div class="heading_container">
            <h2>
                About Virtual Asia
            </h2>
        </div>
        <div class="client_container layout_padding2-top">
            <p>
                Hi! We are Virtual Asia, a virtual services company based in Bali, Indonesia. Our team are experienced and passionate people with more than 10 years experiences in photography and design industries. We combined our skills to help people and business owners in welcoming the future virtual era with our range of products and services. <br><br>
                Come and join us!
            </p>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- download section -->
<section class="download_section layout_padding-top layout_padding-bottom" id="values">
    <div class="container">
        <div class="heading_container">
            <h2>
                Why Our Product Are The Best
            </h2>
        </div>
        <div class="layout_padding2-top">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <div class="head-box">
                            <h6>
                                High-Quliaty
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>
                                You will get the best, high-quality images for your Interactive Virtual Tour that pleasing the eyes!
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="head-box">
                            <h6>
                                Connected to Google
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>
                                Your virtual tour is connected to your Google Business (Stree View)
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="" class="btn-1">
                            Ask about Virtual Tour
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-img-box">
                        <img src="{{ asset('assets/images/download-img.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <div class="head-box">
                            <h6>
                                Stunning 3D Render
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>
                                What you see is close to real-life! You will feel like you're being inside the real world with our stunning 3D Render quality
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="head-box">
                            <h6>
                                Interactive
                            </h6>
                        </div>
                        <div class="detail-box">
                            <p>
                                Implement interactive features in it! Open the door, play the TV, change the material and colors, turn the lights on, and many more!
                            </p>
                        </div>
                    </div>
                    <div>
                    <a href="" class="btn-2">
                        Ask about GoRound
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end download section -->

<!-- portfolio section -->
<section class="portfolio_section layout_padding" id="portfolio">
    <div class="container">
        <div class="heading_container">
            <h2>
                Our Portfolio
            </h2>
        </div>
    </div>
    <div class="container layout_padding2-top ">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 img-container">
                <img src="{{ asset('assets/images/360-1.jpg') }}" alt="Zen Ubud" class="img-fluid custom">
                <div class="middle">
                    <div class="text"><a href="https://virtual-tour.villazenubud.com/" target="_blank" class="color-custom">Zen Ubud</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 img-container">
                <img src="{{ asset('assets/images/360-2.jpg') }}" alt="Viji Resort" class="img-fluid custom">
                <div class="middle">
                    <div class="text"><a href="https://vijeboutiqueresort.com/tour/" target="_blank" class="color-custom">Viji Resorte</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 img-container">
                <img src="{{ asset('assets/images/360-3.jpg') }}" alt="Yucca Villa" class="img-fluid custom">
                <div class="middle">
                    <div class="text"><a href="https://www.virtualasia.id/yuccavilla" target="_blank" class="color-custom">Yucca Villa</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 img-container">
                <img src="{{ asset('assets/images/360-4.jpg') }}" alt="Horison Bhuvana Ciawi" class="img-fluid custom">
                <div class="middle">
                    <div class="text"><a href="https://www.virtualasia.id/horisonbhuvanaciawi/" target="_blank" class="color-custom">Horison Bhuvana Ciawi</a></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 img-container">
                <img src="{{ asset('assets/images/360-5.jpg') }}" alt="Jakarta International Stadium" class="img-fluid custom">
                <div class="middle">
                    <div class="text"><a href="https://www.virtualasia.id/jakartainternationalstadium/" target="_blank" class="color-custom">Jakarta International Stadium</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end portfolio section -->

<!-- contact section -->
<section class="contact_section layout_padding" id="contact">
    <div class="container">
        <div class="d-flex ">
            <h2>
                Contact Us
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('contact') }}" method="POST">
                    @csrf
                    <div class="contact_form-container">
                        <div>
                            <div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                            <div>
                                <input type="number" name="phone" placeholder="Phone Number">
                            </div>
                            <div>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div>
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="mt-5">
                                <input type="text" name="message" placeholder="Message">
                            </div>
                            <div class="mt-5">
                                <button type="submit">
                                    send
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact_img-box">
                    <img src="{{ asset('assets/images/contact-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

@endsection
