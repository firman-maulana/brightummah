<!doctype html>
<html class="no-js" lang="id">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title', 'Bright Ummah Academy - Platform Pendidikan Islami Modern')</title>
   <meta name="description" content="@yield('description', 'Platform pendidikan Islam modern yang mengintegrasikan kurikulum nasional dengan nilai-nilai Islam')">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}">

   <!-- CSS Here -->
   <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">        
   <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">     
   <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">   
   <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">              
   <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">      
   <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">          
   <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">

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
               <div class="it-loading-logo-text">
                  <span class="logo-top">BRIGHT UMMAH</span>
                  <span class="logo-bottom">ACADEMY</span>
               </div>
               <div class="it-loading-stroke">
                  <img class="it-loading-icon" src="{{ asset('assets/img/logo/pencil.png') }}" alt="">
               </div>
               <span>"Please wait... Something good is coming"</span>
            </div>
         </div>
      </div>  
   </div>
   <!-- pre loader area end -->

   <a 
   href="https://wa.me/6281235040959?text=Halo%20Bright%20Ummah%20Academy%0A%0ATerima%20kasih%20atas%20informasi%20yang%20telah%20disediakan.%0A%0ASaya%20ingin%20memperoleh%20informasi%20lebih%20lanjut%20terkait%20layanan%20yang%20tersedia.%0A%0ATerima%20kasih"
   class="whatsapp-float"
   target="_blank"
   aria-label="Chat WhatsApp"
>
   <i class="fa-brands fa-whatsapp"></i>
</a>


   <!-- search popup start -->
   <div class="search-popup">
   <button class="close-search" type="button" aria-label="Tutup pencarian">
      <i class="fa-solid fa-xmark"></i>
   </button>

   <form method="post" action="#">
      <div class="form-group">
         <input
            type="search"
            name="search-field"
            placeholder="Cari di sini"
            required
         >
         <button type="submit" aria-label="Cari">
            <i class="fa-solid fa-magnifying-glass"></i>
         </button>
      </div>
   </form>
</div>
   <!-- search popup end -->

   <!-- it-offcanvus-area-start -->
   <div class="it-offcanvas-area">
      <div class="itoffcanvas">
         <div class="itoffcanvas__close-btn">
            <button class="close-btn"><i class="fa-solid fa-xmark"></i></button>
         </div>
        <div class="itoffcanvas__logo">
            <a href="{{ route('home') }}">
               <img src="{{ asset('assets/img/logo/logo.png') }}" style="height:55px; width:auto;" alt="Bright Ummah Academy">
            </a>
         </div>
         <div class="itoffcanvas__text">
            <p>Bimbingan belajar privat berkualitas dengan pendampinga personal dan fleksibel untuk meningkatkan prestasi dan karakter positif anak.</p>
         </div>
         <div class="it-menu-mobile d-xl-none"></div>
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

<footer>
      
   <!-- footer-area-start -->
   <section class="it-footer-wrap it-footer-style-3 fix">
      <div class="it-footer-area z-index-1 pt-200 pb-50" data-background="{{ asset('assets/img/bgprimary.jpeg') }}">
         <!-- <img class="it-footer-shape-1" src="{{ asset('assets/img/footer-1-1.png') }}" alt=""> -->
         <!-- <img class="it-footer-shape-2" data-parallax='{"y": -200, "smoothness": 30}' src="{{ asset('assets/img/blog-1-1.png') }}" alt=""> -->
         <div class="it-footer-border"><span></span></div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".3s">
                  <div class="it-footer-widget it-footer-col-1-1">
                     <div class="it-footer-widget-logo mb-30">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" style="height:90px;" alt=""></a>
                     </div>
                     <div class="it-footer-widget-text">
                        <p>Bimbingan belajar privat berkualitas dengan pendampinga personal dan fleksibel untuk meningkatkan prestasi dan karakter positif anak.</p>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".5s">
                  <div class="it-footer-widget it-footer-col-1-2">
                     <h4 class="it-footer-widget-title">Useful Links</h4>
                     <div class="it-footer-widget-menu">
                        <ul>
                           <li><a href="{{ route('faqs') }}">FAQs</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".7s">
                  <div class="it-footer-widget it-footer-col-1-3">
                     <h4 class="it-footer-widget-title">Our Company</h4>
                     <div class="it-footer-widget-menu">
                        <ul>
                           <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
                           <li><a href="{{ route('programs.index') }}">Courses</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow itfadeUp" data-wow-duration=".9s"
                  data-wow-delay=".9s">
                  <div class="it-footer-widget it-footer-col-1-4 d-flex justify-content-lg-end">
                     <div>
                        <h4 class="it-footer-widget-title">Get Contact</h4>
                        <div class="it-footer-widget-contact mb-25">
                           <ul>
                              <li><span>Phone:</span><a href="https://wa.me/6281235040959">+62 812-3504-0959</a></li>
                              <li><span>Email:</span><a href="mailto:brightummahacademy@gmail.com">brightummahacademy<br>@gmail.com</a></li>
                              <li><span>Location:</span><a target="_blank" href="https://www.google.com/maps/dir///@24.4503253,17.1644279,4.17z?entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D">Surabaya, Jawa Timur</a></li>
                           </ul>
                        </div>
                        <div class="it-footer-widget-social">
                           <a href="https://www.instagram.com/brightummahacademy?igsh=ZGdwdGQzOG1oY3Nu">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.6802 1.23535H6.03271C3.64478 1.23535 1.70898 3.17115 1.70898 5.55908V14.2065C1.70898 16.5945 3.64478 18.5303 6.03271 18.5303H14.6802C17.0681 18.5303 19.0039 16.5945 19.0039 14.2065V5.55908C19.0039 3.17115 17.0681 1.23535 14.6802 1.23535Z" stroke="#1F2432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M13.8122 9.33833C13.9189 10.058 13.796 10.793 13.4609 11.4388C13.1258 12.0846 12.5956 12.6083 11.9458 12.9354C11.2959 13.2625 10.5594 13.3763 9.8411 13.2608C9.12279 13.1452 8.45921 12.806 7.94476 12.2916C7.4303 11.7771 7.09116 11.1135 6.97557 10.3952C6.85999 9.67692 6.97384 8.94046 7.30094 8.29058C7.62804 7.64071 8.15173 7.11052 8.79752 6.77543C9.44331 6.44034 10.1783 6.31742 10.898 6.42414C11.6321 6.53299 12.3117 6.87507 12.8365 7.39984C13.3613 7.9246 13.7033 8.60423 13.8122 9.33833Z" stroke="#1F2432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M15.1094 5.12695H15.1221" stroke="#1F2432" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- copyright-area-start -->
      <div class="it-copyright-area it-copyright-ptb it-copyright-bg z-index-1 theme-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12">
                  <div class="it-copyright-left style-2 text-center">
                     <p class="mb-0">Copyright © 2026 <a href="#">Bright Ummah Academy</a> All Rights Reserved</p>
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
    <script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/purecounter.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Custom Script: Close mobile menu when submenu clicked -->
    <script>
    $(document).ready(function() {
        // Close offcanvas when any submenu link in mobile menu is clicked
        $('.it-menu-mobile .it-submenu a').on('click', function() {
            $('.itoffcanvas').removeClass('opened');
            $('.body-overlay').removeClass('apply');
        });
    });
    </script>

</body>

</html>