<?php $title = 'Gallery | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
       <h2 class="title">Our Gallery</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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


  <section class="team__area-two">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
       <span class="sub-title">Gallery</span>
       <h2 class="title tg-element-title">Our Gallery</h2>

      </div>
     </div>
    </div>
    <div class="row justify-content-center gutter-24">
        @foreach ($gallerys as $gallery)

     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="{{('uploads/' .$gallery->imgs)}}" alt="">
       </div>
       <div class="team__content-four">
        <span>{{$gallery->title}}</span>
       </div>
      </div>
     </div>
     @endforeach

    </div>
   </div>
   <div class="team__shape">
    <img src="assets/img/team/team_shape01.png" alt="" data-parallax='{"y" : 100 }'>
    <img src="assets/img/team/team_shape02.png" alt="" class="alltuchtopdown">
   </div>
  </section>


 </main>

 @include('footer')
