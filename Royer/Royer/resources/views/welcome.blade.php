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
<?php $title = 'Home | Committed to investment orientation, profit growth, and extensive global business penetration.';?>
@include('lib')
@include('head')
<style>
/* Styles for modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 500px;
    background-color: #fefefe;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    color: #aaa;
    font-size: 30px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<body>
    @include('header')
    <main class="fix">
        <!-- slider-area -->
        <section class="slider__area">
            <div class="swiper-container slider__active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slider__single">
                        <div class="slider__bg" data-background="img/business-team.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider__content">
                                        <span class="sub-title">Welcome to <?php print $siteName; ?></span>
                                        <h2 class="title">Transforming Dreams into Financial Reality</h2>
                                        <p>Extensive global business penetration and awareness.</p>
                                        <a class='btn' href='contact'>Join Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__shape">
                            <img src="assets/img/slider/slider_shape01.png" alt="">
                            <img src="assets/img/slider/slider_shape02.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide slider__single">
                        <div class="slider__bg" data-background="img/businesspeople.jpg"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="slider__content">
                                        <span class="sub-title">Building Wealth, Together</span>
                                        <h2 class="title">Dedicated to Your Financial Success</h2>
                                        <p>our Journey to Financial Independence Begins Now.</p>
                                        <a class='btn' href='contact'>Free Consulting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider__shape">
                            <img src="assets/img/slider/slider_shape01.png" alt="">
                            <img src="assets/img/slider/slider_shape02.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->
        <!-- features-area -->
        <section class="features__area">
            <div class="container-fluid p-0">
                <div class="features__item-wrap">
                    <h4 class="title" style="text-align: center;margin-bottom: 20px;margin-top: 20px"><a href='#'>WELCOME TO ROYAL 10 INVESTMENT LIMITED</a></h4>
                    <div class="row g-0">
                        @foreach ($aims as $aim)
                        <div class="col-lg-3 col-md-6">
                            <div class="features__item">
                                <div class="features__icon">
                                    <img src="{{('uploads/' .$aim->imgs)}}" alt="">
                                </div>
                                <div class="features__content">
                                    <h4 class="title"><a href='#'>{{$aim->title}}</a></h4>
                                    <p>{{$aim->discription}}</p>
                                </div>
                            </div>
                        </div> 
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!-- features-area-end -->
        <!-- about-area -->
        <section class="about__area-two about__bg" data-background="assets/img/bg/about_bg.jpg">
            <div class="container">
                @foreach ($abouts as $about)
                    
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="about__img-wrap-two">
                            <img src="img/business-people-blue-background.jpg" alt="">
                            <div class="shape">
                                <img src="assets/img/images/h2_about_img_shape.png" alt="" class="alltuchtopdown">
                            </div>
                            <div class="experience__box-two">
                                <div class="experience__shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82 295" fill="none" preserveAspectRatio="none">
                                        <path d="M70.7685 260.479C77.6405 257.127 82 250.15 82 242.503L82 44.8205C82 36.5032 76.8524 29.054 69.0724 26.1128L-3.51784e-06 9.7784e-07L0 295L70.7685 260.479Z" fill="currentcolor" />
                                    </svg>
                                </div>
                                <div class="experience__content">
                                    <h4 class="title">2+</h4>
                                    <p> Of <br> Existance</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-two">
                            <div class="section-title mb-20 tg-heading-subheading animation-style3">
                                <span class="sub-title">About <?php print $siteName; ?></span>
                                <h2 class="title tg-element-title">{{$about->title}}</h2>
                            </div>
                            <p>{{$about->discription}}</p>
                            <div class="about__content-inner">
                                <div class="about__list-box">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-arrow-button"></i>Challenge Business Growth</li>
                                        <li><i class="flaticon-arrow-button"></i>Building Wealth, Together</li>
                                        <li><i class="flaticon-arrow-button"></i>Finance Security Solutions</li>
                                        <li><i class="flaticon-arrow-button"></i>100% Money Growth</li>
                                    </ul>
                                </div>
                                <div class="about__list-img">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>
                            <div class="about-bottom">
                                <!-- <div class="author-wrap">
                                    <div class="thumb">
                                        <img src="assets/img/images/author_img.png" alt="">
                                    </div>
                                    <div class="content">
                                        <img src="assets/img/images/sign.png" alt="">
                                        <h4 class="title">Martinaze <span>, CEO</span></h4>
                                    </div>
                                </div> -->
                                <a class='btn btn-two' href='about-us'>Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="about__shape-wrap-two">
                <img src="assets/img/images/h2_about_shape01.png" alt="" data-parallax='{"x" : -80 , "y" : 80 , "rotateZ":80}'>
                <img src="assets/img/images/h2_about_shape02.png" alt="" data-parallax='{"y" : 100 }'>
                <img src="assets/img/images/h2_about_shape03.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- about-area-end -->
        <!-- services-area -->
        <section class="services__area-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title white-title mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">Why <?php print $siteName; ?></span>
                            <h2 class="title tg-element-title">Let’s Discover Our Service Features Charter</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    @foreach ($services as $service)
                        
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__item-two">
                            <div class="services__icon-two">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <div class="services__content-two">
                                <h2 class="title"><a href='#'>{{$service->title}}</a></h2>
                                <p>{{ substr($service->discription, 0, 100) }}</p>
                                <a class='btn' href='services-details/{{ $service->id }}'>Let’s Partner</a>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
            <div class="services__shape-wrap">
                <img src="assets/img/images/h2_services_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="assets/img/images/h2_services_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- services-area-end -->
        <!-- choose-area -->
        <section class="choose__area-two">
            <div class="choose__bg" data-background="assets/img/bg/choose_bg.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-8 col-md-10">
                        <div class="choose__content-two">
                            <div class="section-title mb-20 tg-heading-subheading animation-style3">
                                <span class="sub-title">Why Join Us</span>
                                <h2 class="title tg-element-title">Where your financial dreams become reality</h2>
                            </div>
                            <p>Membership at <?php print $siteName; ?> is currently limited to the founding members, but we are open to welcoming new individuals who share our vision. Regardless of gender, race, nationality, disability, sexual preference, religion, or belief, we invite those willing to abide by our rules and contribute to our collective success.</p>
                            <div class="choose__tab">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="goal-tab" data-bs-toggle="tab" data-bs-target="#goal-tab-pane" type="button" role="tab" aria-controls="goal-tab-pane" aria-selected="true">Our Mission</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="management-tab" data-bs-toggle="tab" data-bs-target="#management-tab-pane" type="button" role="tab" aria-controls="management-tab-pane" aria-selected="false"> Management</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="goal-tab-pane" role="tabpanel" aria-labelledby="goal-tab" tabindex="0">
                                        <div class="choose__tab-content">
                                            <p>At <?php print $siteName; ?>, our mission is to provide a platform for entrepreneurial growth and financial prosperity. We aim to foster a community of like-minded individuals dedicated to achieving success through strategic investments and collaborative efforts.</p>
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check"></i>Empowering Entrepreneurs Worldwide</li>
                                                <li><i class="fas fa-check"></i>Global Reach, Local Impact</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="management-tab-pane" role="tabpanel" aria-labelledby="management-tab" tabindex="0">
                                        <div class="choose__tab-content">
                                            <p>Our organization is governed by a Management Committee comprising elected officers responsible for overseeing our operations. With regular meetings and transparent decision-making processes, we ensure accountability and efficiency in all our endeavors.</p>
                                            <ul class="list-wrap">
                                                <li><i class="fas fa-check"></i>Discover the Power of Strategic Investing</li>
                                                <li><i class="fas fa-check"></i>Transform Your Future with <?php print $siteName; ?></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="operating__box">
                                <div class="icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div class="content">
                                    <p>Since 2023 operating <br> globaly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose__shape-wrap-two">
                <img src="assets/img/images/h2_choose_shape01.png" alt="" data-parallax='{"x" : -80 , "y" : 80 , "rotateZ":80}'>
                <img src="assets/img/images/h2_choose_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- choose-area-two -->
        <!-- counter-area -->
        <section class="counter-area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-trophy"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="45"></span>+</h2>
                                <p>Successfully <br> Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-time"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="2"></span>+</h2>
                                <p>Years of Experiences <br> To Run This Company</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-happy"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="20"></span>+</h2>
                                <p>Partners <br> and investors </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item">
                            <div class="icon">
                                <i class="flaticon-china"></i>
                            </div>
                            <div class="content">
                                <h2 class="count"><span class="odometer" data-count="19"></span>+</h2>
                                <p>All Over The World <br> We Are Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-shape-two">
                <img src="assets/img/images/h2_counter_shape.png" alt="" class="rotateme">
            </div>
        </section>
        <!-- counter-area-end -->
        <!-- request-area -->
        <section class="request__area-two">
            <div class="request__bg-two" data-background="img/group-international-business-people.jpg"></div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-5 col-lg-6">
                        <div class="request__content-two">
                            <h2 class="title">Offering The Best <span>Experience Of</span> Finance Services</h2>
                            <div class="request__phone">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Toll Free Call</span>
                                    <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                </div>
                            </div>
                            <a href="tel:{{$contact->phone}}" class="btn">Request a Free Call</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request-area-end -->
        <!-- project-area -->
        <section class="project__area-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-6">
                        <div class="section-title mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">OUR PROJECTS</span>
                            <h4 class="title tg-element-title">At <?php print $siteName; ?>, we believe in the power of collaboration and collective ambition.</h4>
                        </div>
                    </div>
                </div>
                <div class="row gutter-24">
                    @foreach ($projects as $project)
                        
                    <div class="col-lg-4 col-md-6">
                        <div class="project__item-two">
                            <div class="project__thumb-two">
                                <img src="{{('uploads/' .$project->imgs)}}" alt="">
                            </div>
                            <div class="project__content-two">
                                <h2 class="title"><a href='project-details/{{ $project->id }}'>{{$project->title}}</a></h2>
                                <span>{{ substr($project->discription, 0, 20) }}</span>
                                <div class="link-arrow link-arrow-two">
                                    <a href='project-details/{{ $project->id }}'>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27956C17.7117 2.80339 17.4427 2.34761 17.0096 2.17811C16.9477 2.15384 16.8824 2.13551 16.8144 2.12375L6.96087 0.419136C6.4166 0.325033 5.89918 0.689841 5.80497 1.23409C5.71085 1.77828 6.0757 2.29576 6.61988 2.38991L14.0947 3.68293L1.3658 12.6573C0.914426 12.9756 0.806485 13.5994 1.12473 14.0508C1.44298 14.5022 2.06688 14.6101 2.51825 14.2919L15.2471 5.31752L13.954 12.7923C13.8599 13.3365 14.2248 13.854 14.7689 13.9481C15.3132 14.0422 15.8306 13.6774 15.9248 13.1332L17.6293 3.27956Z" fill="currentcolor" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6293 3.27956C17.7117 2.80339 17.4427 2.34761 17.0096 2.17811C16.9477 2.15384 16.8824 2.13551 16.8144 2.12375L6.96087 0.419136C6.4166 0.325033 5.89918 0.689841 5.80497 1.23409C5.71085 1.77828 6.0757 2.29576 6.61988 2.38991L14.0947 3.68293L1.3658 12.6573C0.914426 12.9756 0.806485 13.5994 1.12473 14.0508C1.44298 14.5022 2.06688 14.6101 2.51825 14.2919L15.2471 5.31752L13.954 12.7923C13.8599 13.3365 14.2248 13.854 14.7689 13.9481C15.3132 14.0422 15.8306 13.6774 15.9248 13.1332L17.6293 3.27956Z" fill="currentcolor" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    <center>
                        <div class="col-lg-3"><a href="projects" class="btn">Explore More</a></div>
                    </center>
                </div>
            </div>
            <div class="project__shape-wrap-two">
                <img src="assets/img/project/h2_project_shape.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section>
        <!-- project-area-end -->

        <!-- team-area -->
        <section class="team__area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">MEET OUR TEAM</span>
                            <h2 class="title tg-element-title">Royal 10 Investors</h2>

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

                    
                    <!-- Modal for displaying larger image -->
                    <div id="imageModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="modalImage">
                    </div>
                
                </div>
                <center>
                    <div class="col-lg-3"><a href="{{ route('team') }}" class="btn">More Team</a></div>
                </center>
            </div>
            <div class="team__shape">
                <img src="assets/img/team/team_shape01.png" alt="" data-parallax='{"y" : 100 }'>
                <img src="assets/img/team/team_shape02.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- team-area-end -->
        <!-- testimonial-area -->
        <section class="testimonial__area-two">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title white-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">Testimonial</span>
                            <h2 class="title tg-element-title">What Our Members Are Saying</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center gutter-24">
                    @foreach ($Testimonials as $Testimonial)
                        
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial__item-two">
                            <div class="testimonial__avatar">
                                <img src="{{('uploads/' .$Testimonial->imgs)}}" alt="">
                            </div>
                            <div class="testimonial__info-two">
                                <h2 class="title">{{$Testimonial->title}}</h2>
                                {{-- <span>CEO,JAKS Shans</span> --}}
                            </div>
                            <div class="testimonial__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>{{$Testimonial->discription}}</p>
                            <div class="icon">
                                <img src="assets/img/icon/quote.svg" alt="">
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
            <div class="testimonial__shape-two">
                <img src="assets/img/images/h2_testimonial_shape.png" alt="" data-aos="fade-up" data-aos-delay="400">
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- blog-post-area -->
        {{-- <section class="blog__post-area-two blog__post-bg-two" data-background="assets/img/bg/blog_post_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                            <span class="sub-title">OUR NEWS UPDATE</span>
                            <h2 class="title tg-element-title">Featured News And Insights</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two shine-animate-item">
                            <div class="blog__post-thumb-two">
                                <a class='shine-animate' href='blog-details'><img src="assets/img/blog/h2_blog_post01.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <a class='blog__post-tag-two' href='blog'>Business</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>Oct 21, 2024</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href='blog-details'>Marketing your area business downturn</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-thumb">
                                        <img src="assets/img/blog/blog_avatar01.png" alt="">
                                    </div>
                                    <div class="avatar-content">
                                        <p>By <a href='blog-details'>Doman Smith</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two shine-animate-item">
                            <div class="blog__post-thumb-two">
                                <a class='shine-animate' href='blog-details'><img src="assets/img/blog/h2_blog_post02.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <a class='blog__post-tag-two' href='blog'>Audit</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>Oct 21, 2024</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href='blog-details'>Improving The Double Diamond Design Process</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-thumb">
                                        <img src="assets/img/blog/blog_avatar01.png" alt="">
                                    </div>
                                    <div class="avatar-content">
                                        <p>By <a href='blog-details'>Doman Smith</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog__post-two shine-animate-item">
                            <div class="blog__post-thumb-two">
                                <a class='shine-animate' href='blog-details'><img src="assets/img/blog/h2_blog_post03.jpg" alt=""></a>
                            </div>
                            <div class="blog__post-content-two">
                                <div class="blog-post-meta">
                                    <ul class="list-wrap">
                                        <li>
                                            <a class='blog__post-tag-two' href='blog'>Investment</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i>Oct 21, 2024</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href='blog-details'>Revealing Images With CSS Mask Animations</a></h2>
                                <div class="blog-avatar">
                                    <div class="avatar-thumb">
                                        <img src="assets/img/blog/blog_avatar01.png" alt="">
                                    </div>
                                    <div class="avatar-content">
                                        <p>By <a href='blog-details'>Doman Smith</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-shape-wrap">
                <img src="assets/img/images/blog_shape01.png" alt="" data-aos="fade-right" data-aos-delay="400">
                <img src="assets/img/images/blog_shape02.png" alt="" data-aos="fade-left" data-aos-delay="400">
            </div>
        </section> --}}
        <!-- blog-post-area-end -->
    </main>
    <!-- main-area-end -->
    <!-- footer-area -->
<script>
    // Get the modal
var modal = document.getElementById("imageModal");

// Get the image and insert it inside the modal
var images = document.querySelectorAll(".profile-image");
var modalImg = document.getElementById("modalImage");

// Loop through each image and attach click event
images.forEach(function(image) {
    image.addEventListener("click", function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    });
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
};

</script>
    
    @include('footer')