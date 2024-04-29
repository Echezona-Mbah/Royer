<footer>
 <div class="footer__area-two">

  <div class="footer__top-two">
   <div class="container">
    <div class="row">
     <div class="col-xl-4 col-lg-5 col-md-6">
      <div class="footer-widget">
       <div class="footer__content-two">
        <div class="fw-logo mb-25">
         <a href='./'><img src="{{asset('assets/img/logo/w_logo.png')}}" alt=""></a>
        </div>
        <p>At <?php print $siteName; ?>, our mission is to provide a platform for entrepreneurial growth and financial prosperity. </p>
        <div class="footer-info-list footer-info-two">
         <ul class="list-wrap">
          <li>
           <div class="icon">
            <i class="flaticon-phone-call"></i>
           </div>
           <div class="content">
            <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
           </div>
          </li>
          <li>
           <div class="icon">
            <i class="flaticon-envelope"></i>
           </div>
           <div class="content">
            <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
           </div>
          </li>
          <li>
           <div class="icon">
            <i class="flaticon-pin"></i>
           </div>
           <div class="content">
            <p>{{$contact->address}}</p>
           </div>
          </li>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-2 col-lg-3 col-sm-6">
      <div class="footer-widget">
       <h4 class="fw-title">Information</h4>
       <div class="footer-link-list">
        <ul class="list-wrap">
         <li><a href='./'>Home</a></li>
         <li><a href='{{ route('about-us') }}'>About us</a></li>
         <li><a href='{{ route('team') }}'>Meet our team</a></li>
         <li><a href='{{ route('blog') }}'>Latest news</a></li>
         <li><a href='{{ route('contact') }}'>Contact us</a></li>
        </ul>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-4 col-sm-6">
      <div class="footer-widget">
       <h4 class="fw-title">Top Links</h4>
       <div class="footer-link-list">
        <ul class="list-wrap">
         <li><a href='{{ route('services') }}'>Services</a></li>
         {{-- <li><a href='{{ route('partners') }}'>Partners</a></li> --}}
         <li><a href='{{ route('projects') }}'>Projects</a></li>
         <li><a href='{{ route('gallery') }}'>Gallery</a></li>
         <li><a href='{{ route('team') }}'>Executives</a></li>
        </ul>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-4 col-md-6">
      <div class="footer-widget">
       <h4 class="fw-title">Socials</h4>
       <div class="footer-instagram">
        <div class="social-links">
         <ul class="list-wrap">
            <li><a href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="{{$contact->twitter}}"><i class="fab fa-twitter"></i></a></li>
            <li><a href="{{$contact->instagram}}"><i class="fab fa-instagram"></i></a></li>
            <li><a href="{{$contact->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="footer__bottom-two">
   <div class="container">
    <div class="row">
     <div class="col-lg-12">
      <div class="copyright-text-two">
       <p>Copyright © 2023 - <?php print $siteYear; ?> <a href='./'><?php print $siteName; ?></a> | All Right Reserved</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</footer>
<!-- footer-area-end -->
<!-- JS here -->
<script src="{{asset('new/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('new/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('new/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('new/assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('new/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('new/assets/js/gsap.js')}}"></script>
<script src="{{asset('new/assets/js/ScrollTrigger.js')}}"></script>
<script src="{{asset('new/assets/js/SplitText.js')}}"></script>
<script src="{{asset('new/assets/js/gsap-animation.js')}}"></script>
<script src="{{asset('new/assets/js/jquery.parallaxScroll.min.js')}}"></script>
<script src="{{asset('new/assets/js/swiper-bundle.js')}}"></script>
<script src="{{asset('new/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('new/assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
 const text = document.querySelector('.circle');
 text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
 const element = document.querySelectorAll('.circle span');
 for (let i = 0; i < element.length; i++) {
  element[i].style.transform = "rotate(" + i * 17 + "deg)"
 }
</script>
</body>

</html>