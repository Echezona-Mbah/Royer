
@php
    use Illuminate\Support\Str;
@endphp
<?php $title = 'Service | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
       <h2 class="title">Our Services</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Services</li>
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

  <section class="services__area-five services__bg-five" data-background="assets/img/bg/inner_services_bg02.jpg">
   <div class="container">

    <div class="row justify-content-center">
     <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center mb-40">
       <span class="sub-title">WHAT WE OFFER</span>
       <h2 class="title">We Offer An Effective Wide Area Business Partnership</h2>
      </div>
     </div>
    </div>

    <div class="services-item-wrap">
     <div class="row justify-content-center">

        @foreach ($services as $service)

      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
       <div class="services-item shine-animate-item">
        <div class="services-thumb">
         <a class='shine-animate' href='services-details/{{ $service->id }}'><img src="{{('uploads/' .$service->imgs)}}" alt=""></a>
        </div>
        <div class="services-content">
         <div class="icon">
          <i class="flaticon-profit"></i>
         </div>
         <h4 class="title"><a href="services-details/{{ $service->id }}">{{$service->title}}</a></h4>
         <p>
            {{ Str::words($service->discription, 20) }} 
        </p>
        <a class='btn' href='services-details/{{ $service->id }}'>Read More</a>
      </div>
       </div>
      </div>

      @endforeach

     </div>
    </div>
   </div>
  </section>

 </main>
 @include('footer')