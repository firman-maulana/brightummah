<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bright Ummah Academy - Educational Platform</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap_min.css">
    
    <!-- Font Awesome 6 CDN - SOLUSI UNTUK IKON TIDAK MUNCUL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <style>
        /* Font fallback jika Google Fonts gagal load */
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Urbanist', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>
<body>


<header class="it-header-height">
   <!-- header-area-start -->
   <div id="header-sticky" class="it-header-area it-header-transparent">
      <div class="container">
         <div class="it-header-style-2">
            <div class="row align-items-center">
               <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-5 col-6">
                  <div class="it-header-logo">
                     <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" style="height:55px;" alt="Bright Ummah Academy">
                     </a>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-7 d-none d-xl-block">
                  <div class="it-header-menu it-header-dropdown">
                     <nav class="it-menu-content">
                        <ul>
                           <li class="has-dropdown">
                                 <a href="{{ route('home') }}">Home</a>
                                 <ul class="it-submenu submenu">
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#visimisi">Vission & Mission</a></li>
                                    <li><a href="#whychoose">Why Choose BUA</a></li>
                                    <li><a href="#howitworks">How It Works</a></li>
                                    <li><a href="#learningsystem">Learning System</a></li>
                                    <li><a href="#categories">Categories</a></li>
                                    @if($hasTeachers)
                                    <li><a href="#teacher">Teachers</a></li>
                                    @endif
                                    @if($hasArticles)
                                    <li><a href="#articles">Articles</a></li>
                                    @endif
                                    @if($hasTestimonials)
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    @endif
                                    <li><a href="#contact">Contact</a></li>
                                 </ul>
                              </li>
                           <li>
                              <a href="{{ route('programs.index') }}">Courses</a>
                           </li>
                           <li>
                              <a href="{{ route('valuebasedroutine') }}">Value Based Routine</a>
                           </li>
                           <li>
                              <a href="{{ route('faqs') }}">FAQs</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-3 col-lg-8 col-md-7 col-6">
                  <div class="it-header-right-action d-flex justify-content-end align-items-center">
                     <a href="{{ route('programs.index') }}" class="it-btn-yellow d-none d-xl-flex">
                        <span>
                           <span class="text-1">Free Consultation</span>
                           <span class="text-2">Free Consultation</span>
                        </span>
                        <i>
                           <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                           </svg>
                        </i>
                     </a>
                     <div class="it-header-bar d-xl-none">
                            <button class="it-menu-bar" aria-label="Toggle Menu">
                                <span>
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                            </button>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- header-area-end -->
</header>

<!-- jQuery (harus load pertama) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle -->
<script src="assets/js/bootstrap_bundle_min.js"></script>

<!-- Custom JavaScript -->
<script src="assets/js/main.js"></script>
<script src="assets/js/countdown.js"></script>

</body>
</html>