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
<?php $title = 'Service Details | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
@include('lib')
@include('head')

<body>
    @include('header')
 <main class="fix">
  <!-- breadcrumb-area -->
  <section class="breadcrumb__area breadcrumb__bg" data-background="{{asset('img/image-cover.png')}}">
   <div class="container">
    <div class="row">
     <div class="col-lg-6">
      <div class="breadcrumb__content">
       <h2 class="title">Services Details</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Services Details</li>
        </ol>
       </nav>
      </div>
     </div>
    </div>
   </div>
   <div class="breadcrumb__shape">
    <img src="{{asset('assets/img/images/breadcrumb_shape01.png')}}" alt="">
    <img src="{{asset('assets/img/images/breadcrumb_shape02.png')}}" alt="" class="rightToLeft">
    <img src="{{asset('assets/img/images/breadcrumb_shape03.png')}}" alt="">
    <img src="{{asset('assets/img/images/breadcrumb_shape04.png')}}" alt="">
    <img src="{{asset('assets/img/images/breadcrumb_shape05.png')}}" alt="" class="alltuchtopdown">
   </div>
  </section>
  <!-- breadcrumb-area-end -->

  @foreach ($services as $service)

  <section class="services__details-area" style="padding: 50px 0;">
   <div class="container">
    <div class="services__details-wrap">
     <div class="row">
      <div class="col-100 order-0 order-lg-2">
       <div class="services__details-thumb">
        <img src="{{asset('uploads/' .$service->imgs)}}" alt="">
       </div>
       <div class="services__details-content">
        <h2 class="title">{{$service->title}}</h2>
        <p>{{$service->discription}}</p>
       </div>
      </div>

     </div>
    </div>
   </div>
  </section>
  @endforeach


 </main>
 @include('footer')

