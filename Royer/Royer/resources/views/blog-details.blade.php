<?php $title = 'Blog Detail | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
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
              <h2 class="title">Blog Details</h2>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="./">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Blog Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="breadcrumb__shape">
        <img src="{{asset('assets/img/images/breadcrumb_shape01.png')}}" alt="" />
        <img src="{{asset('assets/img/images/breadcrumb_shape02.png')}}" alt="" class="rightToLeft" />
        <img src="{{asset('assets/img/images/breadcrumb_shape03.png')}}" alt="" />
        <img src="{{asset('assets/img/images/breadcrumb_shape04.png')}}" alt="" />
        <img src="{{asset('assets/img/images/breadcrumb_shape05.png')}}" alt="" class="alltuchtopdown" />
      </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- blog-details-area -->
    <section class="blog__details-area">
      <div class="container">
        <div class="blog__inner-wrap">
          <div class="row">
            @foreach ($news as $new)
            <div class="col-70">
              <div class="blog__details-wrap">
                <div class="blog__details-thumb">
                  <img src="{{asset('uploads/' .$new->imgs)}}" alt="" />
                </div>
                <div class="blog__details-content">
                  <h2 class="title">
                    {{$new->title}}
                  </h2>
                  <div class="blog-post-meta">
                    <ul class="list-wrap">
                      <li>
                        <a class="blog__post-tag-two" href="blog">New</a>
                      </li>
                      <li>
                        <div class="blog-avatar">
                          @if ($getUsers->image == NULL)
                          <div class="avatar-thumb">
                              <img src="{{ asset('images/download.png') }}" alt="default-avatar" />
                           </div>
                          @else

                          <div class="avatar-thumb">
                              <img src="{{('uploads/' .$getUsers->image)}}" alt="">
                          </div>
                              
                          @endif
                          <div class="avatar-content">
                            <p>
                              By {{$getUsers->name}}
                            </p>
                          </div>
                        </div>
                      </li>{{ \Carbon\Carbon::parse($new->dob)->format('M d, Y') }}</li>

                    </ul>
                  </div>
                  <p>
                    {{$new->discription}}
                  </p>
                  <blockquote>

                  </blockquote>

                </div>


              </div>
            </div>
            @endforeach
{{-- 
            @foreach ($evens as $even)
            <div class="col-70">
              <div class="blog__details-wrap">
                <div class="blog__details-thumb">
                  <img src="{{asset('assets/img/blog/blog_details01.jpg')}}" alt="" />
                </div>
                <div class="blog__details-content">
                  <h2 class="title">
                    {{$even->title}}
                  </h2>
                  <div class="blog-post-meta">
                    <ul class="list-wrap">
                      <li>
                        <a class="blog__post-tag-two" href="blog">Even</a>
                      </li>
                      <li>
                        <div class="blog-avatar">
                          @if ($getUserseven->image == NULL)
                          <div class="avatar-thumb">
                              <img src="{{ asset('images/download.png') }}" alt="default-avatar" />
                           </div>
                          @else

                          <div class="avatar-thumb">
                              <img src="{{('uploads/' .$getUserseven->image)}}" alt="">
                          </div>
                              
                          @endif
                          <div class="avatar-content">
                            <p>
                              By <a href="blog-details">{{$getUserseven->name}}</a>
                            </p>
                          </div>
                        </div>
                      </li>{{ \Carbon\Carbon::parse($even->dob)->format('M d, Y') }}</li>

                    </ul>
                  </div>
                  <p>
                    {{$even->discription}}
                  </p>
                  <blockquote>

                  </blockquote>

                </div>


              </div>
            </div>
            @endforeach --}}



            <div class="col-30">
              <aside class="blog__sidebar">

                <div class="sidebar__widget">
                  <h4 class="sidebar__widget-title">Latest Posts</h4>
                  <div class="sidebar__post-list">

                    @foreach ($newss as $news)


                    <div class="sidebar__post-item">
                        <div class="sidebar__post-thumb">
                            <a href="{{ route('blog-details', ['id' => $news->id]) }}"><img src="{{asset('uploads/' .$news->imgs)}}" alt=""></a>
                        </div>
                        <div class="sidebar__post-content">
                          <h5 class="title"><a href="{{ route('blog-details', ['id' => $news->id]) }}">{{ $news->title }}</a></h5>
                          <span class="date"><i class="flaticon-time"></i>{{ \Carbon\Carbon::parse($news->dob)->format('M d, Y') }}</span>
                        </div>
                    </div>
                    @endforeach

                    @foreach ($evenss as $evens)


                    <div class="sidebar__post-item">
                        <div class="sidebar__post-thumb">
                            <a href="{{ route('blog-details2', ['id' => $evens->id]) }}"><img src="{{asset('uploads/' .$evens->imgs)}}" alt=""></a>
                        </div>
                        <div class="sidebar__post-content">
                          <h5 class="title"><a href="{{ route('blog-details2', ['id' => $evens->id]) }}">{{ $evens->title }}</a></h5>
                            <span class="date"><i class="flaticon-time"></i>{{ \Carbon\Carbon::parse($evens->dob)->format('M d, Y') }}</span>
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
