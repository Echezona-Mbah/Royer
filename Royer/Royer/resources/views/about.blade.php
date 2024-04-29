<?php $title = 'About | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
<?php
$siteName = 'Royal 10 Investment Limited'?>
<?php $sitePhone = '+123 9898 500'?>
<?php $siteAddress = '256 Avenue, Mark Street, NewYork City'?>
<?php $siteEmail = 'info@royal10investmentltd.com'?>
<?php $siteFacebook = 'https://www.facebook.com/'?>
<?php $siteTwitter = 'https://twitter.com/home'?>
<?php $siteInstagram = 'https://www.instagram.com/'?>
<?php $siteLinkedin = 'https://www.linkedin.com/'?>
<?php $siteYear = date('Y')?>
@include('lib')
@include('head')

<body>
    @include('header')
    <main class="fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="img/image-cover.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">About Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='./'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
                <img src="assets/img/images/breadcrumb_shape03.png" alt="">
                <img src="assets/img/images/breadcrumb_shape04.png" alt="">
                <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- about-area -->
        <section class="about__area-five">
            @foreach ($about as $abouts )
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about__content-five">
                            <div class="section-title mb-30">
                                <h2 class="title">{{$abouts->title}}</h2>
                            </div>
                            <div class="about__img-wrap-five">
                                <img src="{{('uploads/' .$abouts->imgs)}}" alt="">
                                <div class="experience-year">
                                    <div class="icon">
                                        <i class="flaticon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h6 style="font-size: 10px;" class="circle rotateme">Royal 10 - Investment Ltd -</h6>
                                    </div>
                                </div>
                            </div>
                            <h3>About Us</h3>
                            <p>{{$siteName}} is a forward-thinking, cloud-based establishment founded in 2023 by a group of ten visionary entrepreneurs. Committed to investment orientation, profit growth, and extensive global business penetration, we strive to create opportunities and maximize returns for our members.</p>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>
        <!-- about-area-end -->

        <!-- request-area -->
        <section class="request-area request-bg" data-background="img/succesfull-mans-suit-rich-black-business-mans.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="request-content text-center">
                            <h2 class="title">At {{$siteName}}, we believe in the power of collaboration and collective ambition. </h2>
                            <div class="content-bottom">
                                <a href="tel:{{$contact->phone}}" class="btn">Request a Free Call</a>
                                <div class="content-right">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span>Toll Free Call</span>
                                        <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-shape">
                <img src="assets/img/images/request_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="assets/img/images/request_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>

    </main>

    @include('footer')
