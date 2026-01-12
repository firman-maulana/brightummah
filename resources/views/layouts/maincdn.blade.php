<!doctype html>
<html class="no-js" lang="id">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title', 'Bright Ummah - Platform Pendidikan Islami Modern')</title>
   <meta name="description" content="@yield('description', 'Platform pendidikan Islam modern yang mengintegrasikan kurikulum nasional dengan nilai-nilai Islam')">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

   <!-- CSS Here -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">        
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">     
   <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">   
   <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">              
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">      
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">          
   <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">

   <!-- WOW.js CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

   <!-- Theme / Main CSS -->
   <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">          
   <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">                
</head>

<body>
    <!-- pre loader area start -->
   <div id="it-loading">
      <div id="it-loading-center">
         <div id="it-loading-absolute">
            <div class="it-loading-content">
               <img class="it-loading-logo" src="{{ asset('assets/img/logo/pencil-upper.png') }}" alt="">
               <div class="it-loading-stroke">
                  <img class="it-loading-icon" src="{{ asset('assets/img/logo/pencil.png') }}" alt="">
               </div>
               <span>"Memuat Ilmu... Mohon Tunggu dengan Sabar!"</span>
            </div>
         </div>
      </div>  
   </div>
   <!-- pre loader area end -->

   <!-- back-to-top-start  -->
   <button class="scroll-top scroll-to-target" data-target="html">
      <i class="far fa-angle-double-up"></i>
   </button>
   <!-- back-to-top-end  -->

   <!-- search popup start -->
   <div class="search-popup">
        <button class="close-search"><span class="flaticon-multiply"><i class="fal fa-times"></i></span></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Cari di sini" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
   </div>
   <!-- search popup end -->

   <!-- it-offcanvus-area-start -->
   <div class="it-offcanvas-area">
      <div class="itoffcanvas">
         <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
        <div class="itoffcanvas__logo">
            <a href="{{ route('home') }}">
               <div class="text-2xl font-bold text-green-600 tracking-tight">Bright Ummah</div>
            </a>
         </div>
         <div class="itoffcanvas__text">
            <p>Platform pendidikan Islam modern yang mengintegrasikan kurikulum nasional dengan nilai-nilai Islam untuk membentuk generasi yang berkarakter.</p>
         </div>
         <div class="it-menu-mobile d-xl-none"></div>
         <div class="itoffcanvas__info">
            <h3 class="offcanva-title">Hubungi Kami</h3>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-envelope"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Email</span>
                  <a href="mailto:info@brightummah.com">info@brightummah.com</a>
               </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fal fa-phone-alt"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Telepon</span>
                  <a href="tel:+6281234567890">+62 812 3456 7890</a>
               </div>
            </div>
            <div class="it-info-wrapper mb-20 d-flex align-items-center">
               <div class="itoffcanvas__info-icon">
                  <a href="#"><i class="fas fa-map-marker-alt"></i></a>
               </div>
               <div class="itoffcanvas__info-address">
                  <span>Alamat</span>
                  <a href="#">Jakarta, Indonesia</a>
               </div>
            </div>
         </div>
         <div class="itoffcanvas__social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- it-offcanvus-area-end -->

   @include('layouts.header')

   <main>
      @yield('content')
   </main>

   <!-- footer-area-start -->
   <footer>
      <section class="it-footer-area z-index-2 pt-120 pb-60 it-footer-bg black-bg" data-background="{{ asset('assets/img/footer/footer-bg-1.png') }}">
      <div class="container">
         <div class="it-footer-wrap pb-30">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".3s">
                  <div class="it-footer-widget it-footer-col-1 footer-col-1-gap">
                     <div class="it-footer-logo pb-20">
                        <a href="{{ route('home') }}">
                           <div class="text-2xl font-bold text-white">Bright Ummah</div>
                        </a>
                     </div>
                     <div class="it-footer-text pb-5">
                        <p>Platform pendidikan Islam terpadu untuk generasi unggul dan berkarakter.</p>
                     </div>
                     <div class="it-footer-social">
                        <a href="#">
                           <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.5654 0.183594H18.5978L11.9747 7.75136L19.7656 18.0509H13.6671L8.88712 11.8058L3.42357 18.0509H0.386253L7.46894 9.9544L0 0.183594H6.25335L10.5697 5.89174L15.5654 0.183594ZM14.5006 16.2382H16.1798L5.33837 1.90156H3.53475L14.5006 16.2382Z" fill="#ffffff" />
                           </svg>
                        </a>
                        <a href="#">
                           <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                           <i class="fab fa-youtube"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".5s">
                  <div class="it-footer-widget it-footer-col-1-2">
                     <h4 class="it-footer-widget-title">Program Kami</h4>
                     <div class="it-footer-widget-menu">
                        <ul>
                           <li><a href="#">SD Islam</a></li>
                           <li><a href="#">SMP Islam</a></li>
                           <li><a href="#">SMA Islam</a></li>
                           <li><a href="#">Tahfidz Quran</a></li>
                           <li><a href="#">Bimbingan Belajar</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".7s">
                  <div class="it-footer-widget it-footer-col-1-3">
                     <h4 class="it-footer-widget-title">Tentang Kami</h4>
                     <div class="it-footer-widget-menu">
                        <ul>
                           <li><a href="#">Kontak</a></li>
                           <li><a href="#">Bergabung Jadi Guru</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Pengajar</a></li>
                           <li><a href="#">Event</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".9s">
                  <div class="it-footer-widget it-footer-col-1-4 d-flex justify-content-lg-end">
                     <div>
                        <h4 class="it-footer-widget-title">Hubungi</h4>
                        <div class="it-footer-widget-contact mb-25">
                           <ul>
                              <li><span>Telepon:</span><a href="tel:+6281234567890">+62 812 3456 7890</a></li>
                              <li><span>Email:</span><a href="mailto:info@brightummah.com">info@brightummah.com</a></li>
                              <li><span>Lokasi:</span><a href="#">Jakarta, Indonesia</a></li>
                           </ul>
                        </div>
                        <div class="it-footer-widget-social">
                           <a href="#">
                              <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15.5654 0.183594H18.5978L11.9747 7.75136L19.7656 18.0509H13.6671L8.88712 11.8058L3.42357 18.0509H0.386253L7.46894 9.9544L0 0.183594H6.25335L10.5697 5.89174L15.5654 0.183594ZM14.5006 16.2382H16.1798L5.33837 1.90156H3.53475L14.5006 16.2382Z" fill="#1F2432" />
                              </svg>
                           </a>
                           <a href="#">
                              <i class="fab fa-facebook-f"></i>
                           </a>
                           <a href="#">
                              <i class="fab fa-instagram"></i>
                           </a>
                           <a href="#">
                              <i class="fab fa-youtube"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- copyright-area-start -->
      <div class="it-copyright-area it-copyright-ptb it-copyright-bg z-index-1 black-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div class="it-copyright-left text-center">
                     <p class="mb-0">Copyright © 2025 <a href="#">Bright Ummah</a> All Rights Reserved</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright-area-end -->

   </section>
   <!-- footer-area-end -->

   </footer>

    <!-- JS Here -->
    <!-- jQuery (Required First) -->
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    
    <!-- Core Libraries -->
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
    
    <!-- Plugins - Try Local First, Fallback to CDN -->
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    
    <!-- Animation Libraries (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.5.0/dist/purecounter_vanilla.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    
    <!-- Layout Libraries (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"></script>
    
    <!-- Effects Library (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    
    <!-- Main JS (Must be last) -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>