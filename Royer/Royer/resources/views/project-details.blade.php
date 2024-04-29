<?php $title = 'Partners Details | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
  <section class="breadcrumb__area breadcrumb__bg" data-background="{{asset('img/image-cover.png')}}">
   <div class="container">
    <div class="row">
     <div class="col-lg-6">
      <div class="breadcrumb__content">
       <h2 class="title">Project Details</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item">
          <a href="./">Home</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">
          Project Details
         </li>
        </ol>
       </nav>
      </div>
     </div>
    </div>
   </div>
   <div class="breadcrumb__shape">
    <img src="assets/img/images/breadcrumb_shape01.png" alt="" />
    <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft" />
    <img src="assets/img/images/breadcrumb_shape03.png" alt="" />
    <img src="assets/img/images/breadcrumb_shape04.png" alt="" />
    <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown" />
   </div>
  </section>
  <!-- breadcrumb-area-end -->
  <!-- project-details-area -->
  <section class="blog__details-area">
   <div class="container">
    <div class="blog__inner-wrap">
     <div class="row">
        @foreach ($projects as $project)

      <div class="col-70">
       <div class="blog__details-wrap">
        <div class="blog__details-thumb">
         <img src="{{asset('uploads/' .$project->imgs)}}" alt="" />
        </div>
        <div class="blog__details-content">
         <h2 class="title">
            {{ $project->title }}
         </h2>
         <div class="blog-post-meta">
          {{-- <ul class="list-wrap">
           <li>
            <a class="blog__post-tag-two" href="projects">Business</a>
           </li>
           <li>
            <div class="blog-avatar">
             <div class="avatar-thumb">
              <img src="assets/img/blog/blog_avatar01.png" alt="" />
             </div>
             <div class="avatar-content">
              <p>
               By <a href="project-details">Doman Smith</a>
              </p>
             </div>
            </div>
           </li>
           <li><i class="fas fa-calendar-alt"></i>Oct 21, 2024</li>

          </ul> --}}
         </div>
         <p>
            {{ $project->discription }}
         </p>

 

        </div>


       </div>
      </div>

      @endforeach


      <div class="col-30">
       <aside class="blog__sidebar">

        <div class="sidebar__widget">
         <h4 class="sidebar__widget-title">Latest Posts</h4>
         <div class="sidebar__post-list">
            @foreach ($projectss as $projects)
    
          <div class="sidebar__post-item">
           <div class="sidebar__post-thumb">
            <a href="{{ route('project-details', ['id' => $projects->id]) }}"><img src="{{asset('uploads/' .$projects->imgs)}}" alt="" /></a>
           </div>
           <div class="sidebar__post-content">
            <h5 class="title"><a href="{{ route('project-details', ['id' => $projects->id]) }}">{{ $projects->title }}</a>
            </h5>
            {{-- <span class="date"><i class="flaticon-time"></i>Sep 15, 2024</span> --}}
           </div>
          </div>
          @endforeach

         </div>
        </div>

       </aside>
      </div>
     </div>
    </div>
   </div>
  </section>

 </main>

 @include('footer')
