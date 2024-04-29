<?php $title = 'Contact | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
<link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
<script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

<body>
    @include('sweetalert::alert')
    @include('header')
    @include('sweetalert::alert')
    <main class="fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="img/image-cover.png">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Contact With Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='./'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.071848025353!2d7.400086575019183!3d9.05721119100523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e75006e93ef89%3A0xf740d476dbf82309!2sEfab%20City%20Estate%20Lifecamp!5e0!3m2!1sen!2sng!4v1712209455228!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact__content">
                            @foreach ($contacts as $contact)

                            <div class="section-title mb-35">
                                <h2 class="title">{{$contact->title}}</h2>
                                <p>{{$contact->discription}}</p>
                            </div>
                            <div class="contact__info">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Address</h4>
                                            <p>{{$contact->address}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Phone</h4>
                                            <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-mail"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">E-mail</h4>
                                            <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact__form-wrap">
                            <h2 class="title">Give Us a Message</h2>
                            {{-- <p>Your email address will not be published. Required fields are marked *</p> --}}
                            <form action="{{ route('submit-form') }}" method="POST">
                                @csrf
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="tel" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>                            </form>
                            
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    @if ($errors->any())
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    Swal.fire({
        icon: 'error',
        title: 'Validation Error',
        html: `{!! implode('<br>', $errors->all()) !!}`,
        confirmButtonText: 'OK',
    });
</script>
@endif
    <!-- main-area-end -->
    @include('footer')
