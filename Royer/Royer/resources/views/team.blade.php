
<?php $title = 'Team | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
       <h2 class="title">Our Team</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Team</li>
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

  <section class="team__area-two">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-xl-6 col-lg-8">
      <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
       <span class="sub-title">MEET OUR TEAM</span>
       <h2 class="title tg-element-title">Royal 10 Investors</h2>
       <p>At {{env ('siteName')}}, we believe in the power of collaboration and collective ambition. Join us on this journey towards financial success and global impact.</p>
      </div>
     </div>
    </div>
    <div class="row justify-content-center gutter-24">
        @foreach ($Teams as $Team)
        <div class="col-lg-3 col-md-6 col-sm-8">
            <div class="team__item-four shine-animate-item">
                <div class="team__thumb-four shine-animate">
                    <!-- Clickable image for Jone Cooper -->
                    <img src="{{('uploads/' .$Team->imgs)}}" alt="Jone Cooper" class="profile-image" data-target="jone-cooper">
                </div>
                <div class="team__content-four">
                    <!-- Add an ID to identify the profile content -->
                    <h4 class="title"><a href="#" class="profile-link" data-target="jone-cooper">{{$Team->fullname}}</a></h4>
                    <span>{{$Team->position}}</span>
                    <div class="team__social-two">
                        <ul class="list-wrap">
                            <li><a href="{{$Team->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$Team->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$Team->instagram}}"><i class="fab fa-instagram"></i></a></li>
                            {{-- <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>

     @endforeach

     {{-- <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img02.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Ralph Edwards</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img03.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Floyd Miles</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img04.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Eleanor Pena</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img02.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Ralph Edwards</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img03.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Floyd Miles</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img02.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Ralph Edwards</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img03.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Floyd Miles</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img02.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Ralph Edwards</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-8">
      <div class="team__item-four shine-animate-item">
       <div class="team__thumb-four shine-animate">
        <img src="assets/img/team/team_img03.jpg" alt="">
       </div>
       <div class="team__content-four">
        <h4 class="title"><a href='team-details'>Floyd Miles</a></h4>
        <span>Finance Advisor</span>
        <div class="team__social-two">
         <ul class="list-wrap">
          <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
          <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div> --}}
    </div>
   </div>
   <div class="team__shape">
    <img src="assets/img/team/team_shape01.png" alt="" data-parallax='{"y" : 100 }'>
    <img src="assets/img/team/team_shape02.png" alt="" class="alltuchtopdown">
   </div>
  </section>

 </main>
 @include('footer')
 