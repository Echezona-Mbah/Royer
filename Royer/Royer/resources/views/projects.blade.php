<?php $title = 'Projects | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
       <h2 class="title">All Projects</h2>
       <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href='./'>Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Projects</li>
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
  <!-- blog-area -->
  <section class="blog__area">
   <div class="container">
    <div class="blog__inner-wrap">
     <div class="row">

      <div class="col-70">
       <div class="blog-post-wrap">
        <div class="row gutter-24">
            @foreach ($projects as $project)
                
         <div class="col-md-6">
          <div class="blog__post-two shine-animate-item">
           <div class="blog__post-thumb-two">
            <a class='shine-animate' href='project-details/{{ $project->id }}'><img src="{{('uploads/' .$project->imgs)}}" alt=""></a>
           </div>
           <div class="blog__post-content-two">
            {{-- <div class="blog-post-meta">
             <ul class="list-wrap">
              <li>
               <a class='blog__post-tag-two' href='projects'>Business</a>
              </li>
              <li><i class="fas fa-calendar-alt"></i>Oct 21, 2024</li>
             </ul>
            </div> --}}
            <h2 class="title"><a href='project-details/{{ $project->id }}'>{{$project->title}}</a></h2>
            <div class="blog-avatar">
             {{-- <div class="avatar-thumb">
              <img src="assets/img/blog/blog_avatar01.png" alt="">
             </div> --}}
             {{-- <div class="avatar-content">
              <p>By <a href='project-details'>Doman Smith</a></p>
             </div> --}}
            </div>
           </div>
          </div>
         </div>

         @endforeach

        </div>
        <div class="pagination-wrap mt-40">
            <nav aria-label="Page navigation example">
                <ul class="pagination list-wrap">
                    {{-- Previous Page Link --}}
                    @if ($projects->previousPageUrl())
                        <li class="page-item">
                            <a class="page-link" href="{{ $projects->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                        </li>
                    @endif
        
                    {{-- Pagination Elements --}}
                    @foreach ($projects as $key => $item)
                        <li class="page-item {{ $projects->currentPage() == $key+1 ? 'active' : '' }}">
                            <a class="page-link" href="{{ $projects->url($key+1) }}">{{ $key+1 }}</a>
                        </li>
                    @endforeach
        
                    {{-- Next Page Link --}}
                    @if ($projects->nextPageUrl())
                        <li class="page-item">
                            <a class="page-link" href="{{ $projects->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
       </div>
      </div>

          

      <div class="col-30">
       <aside class="blog__sidebar">

        <div class="sidebar__widget">
         <h4 class="sidebar__widget-title">Latest Project</h4>
         <div class="sidebar__post-list">
            @foreach ($projectss as $projects)
          <div class="sidebar__post-item">
           <div class="sidebar__post-thumb">
            <a href='project-details/{{ $projects->id }}'><img src="{{('uploads/' .$projects->imgs)}}" alt=""></a>
           </div>
           <div class="sidebar__post-content">
            <h5 class="title"><a href='project-details/{{ $projects->id }}'>{{$projects->title}}</a></h5>
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
 <!-- main-area-end -->
 @include('footer')
