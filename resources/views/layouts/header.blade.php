<header class="it-header-height">
   <!-- header-area-start -->
   <div id="header-sticky" class="it-header-area it-header-transparent">
      <div class="container">
         <div class="it-header-style-2">
            <div class="row align-items-center">
               <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-5 col-6">
                  <div class="it-header-logo">
                     <a href="{{ route('home') }}">
                        <div class="text-2xl font-bold text-green-600 tracking-tight">Bright Ummah</div>
                     </a>
                  </div>
               </div>
               <div class="col-xxl-6 col-xl-7 d-none d-xl-block">
                  <div class="it-header-menu it-header-dropdown">
                     <nav class="it-menu-content">
                        <ul>
                           <li>
                              <a href="{{ route('home') }}">Beranda</a>
                           </li>
                           <li>
                              <a href="{{ route('programs.index') }}">Program</a>
                           </li>
                           <li>
                              <a href="{{ route('about') }}">About</a>
                           </li>
                           <li>
                              <a href="{{ route('contact') }}">Contact</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-4 col-xl-3 col-lg-8 col-md-7 col-6">
                  <div class="it-header-right-action d-flex justify-content-end align-items-center">
                     <div class="it-header-search-2 d-none d-md-block">
                        <button class="search-box-outer">
                           <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0 13.6469C0 10.0275 1.43772 6.55637 3.99689 3.99708C6.55605 1.43779 10.027 0 13.6462 0C17.2654 0 20.7364 1.43779 23.2956 3.99708C25.8547 6.55637 27.2925 10.0275 27.2925 13.6469C27.2925 17.2663 25.8547 20.7374 23.2956 23.2967C20.7364 25.856 17.2654 27.2938 13.6462 27.2938C10.027 27.2938 6.55605 25.856 3.99689 23.2967C1.43772 20.7374 0 17.2663 0 13.6469ZM13.6462 2.21301C10.6139 2.21301 7.70581 3.41765 5.56164 5.56192C3.41748 7.70619 2.2129 10.6144 2.2129 13.6469C2.2129 16.6794 3.41748 19.5876 5.56164 21.7319C7.70581 23.8761 10.6139 25.0808 13.6462 25.0808C16.6785 25.0808 19.5866 23.8761 21.7308 21.7319C23.875 19.5876 25.0796 16.6794 25.0796 13.6469C25.0796 10.6144 23.875 7.70619 21.7308 5.56192C19.5866 3.41765 16.6785 2.21301 13.6462 2.21301Z" fill="#6C757D" />
                              <path d="M8.6908 7.95356C9.341 7.30206 10.1135 6.78539 10.9639 6.43322C11.8142 6.08104 12.7258 5.9003 13.6462 5.90136C15.5803 5.90136 17.3344 6.68624 18.6017 7.95356C18.7971 8.16332 18.9035 8.44075 18.8984 8.72741C18.8934 9.01407 18.7773 9.28758 18.5745 9.49031C18.3718 9.69304 18.0983 9.80916 17.8117 9.81422C17.525 9.81928 17.2476 9.71287 17.0379 9.51742C16.593 9.07147 16.0643 8.71793 15.4822 8.47713C14.9001 8.23634 14.2761 8.11305 13.6462 8.11437C12.3214 8.11437 11.1235 8.64992 10.2561 9.5189C10.0463 9.71435 9.7689 9.82075 9.48225 9.8157C9.1956 9.81064 8.92211 9.69451 8.71939 9.49178C8.51667 9.28905 8.40055 9.01554 8.39549 8.72888C8.39043 8.44222 8.49683 8.16479 8.69228 7.95503L8.6908 7.95356ZM21.8782 21.8793C21.981 21.7765 22.103 21.6949 22.2373 21.6393C22.3716 21.5836 22.5155 21.555 22.6609 21.555C22.8062 21.555 22.9501 21.5836 23.0844 21.6393C23.2187 21.6949 23.3407 21.7765 23.4435 21.8793L29.703 28.1392C29.8985 28.3489 30.0049 28.6264 29.9998 28.913C29.9948 29.1997 29.8786 29.4732 29.6759 29.6759C29.4732 29.8786 29.1997 29.9948 28.9131 29.9998C28.6264 30.0049 28.349 29.8985 28.1393 29.703L21.8797 23.4446C21.6725 23.2372 21.5561 22.9559 21.5561 22.6627C21.5561 22.3695 21.6725 22.0882 21.8797 21.8808L21.8782 21.8793Z" fill="#6C757D" />
                           </svg>
                        </button>
                     </div>
                     <div class="it-header-login d-none d-xxl-block">
                        @auth('web')
                            <span class="me-2">{{ auth('web')->user()->name }}</span>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">Logout</a>
                            <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                        @else
                            <a href="{{ route('login') }}">Masuk</a>
                            <span>/</span>
                            <a href="{{ route('register') }}">Daftar</a>
                        @endauth
                     </div>
                     <a href="{{ route('programs.index') }}" class="it-btn-yellow d-none d-xl-flex">
                        <span>
                           <span class="text-1">Daftar Sekarang</span>
                           <span class="text-2">Daftar Sekarang</span>
                        </span>
                        <i>
                           <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.0544 8.1364C15.4058 7.78492 15.4058 7.21508 15.0544 6.8636L9.3268 1.13604C8.97533 0.784567 8.40548 0.784567 8.05401 1.13604C7.70254 1.48751 7.70254 2.05736 8.05401 2.40883L13.1452 7.5L8.05401 12.5912C7.70254 12.9426 7.70254 13.5125 8.05401 13.864C8.40548 14.2154 8.97533 14.2154 9.3268 13.864L15.0544 8.1364ZM0.417969 7.5V8.4H14.418V7.5V6.6H0.417969V7.5Z" fill="currentcolor" />
                           </svg>
                        </i>
                     </a>
                     <div class="it-header-bar d-xl-none">
                        <button class="it-menu-bar">
                           <span>
                              <svg width="24" height="20" viewBox="0 0 24 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 18.3333C10 17.4128 10.7462 16.6667 11.6667 16.6667H21.6667C22.5872 16.6667 23.3333 17.4128 23.3333 18.3333C23.3333 19.2538 22.5872 20 21.6667 20H11.6667C10.7462 20 10 19.2538 10 18.3333ZM0 1.66667C0 0.746183 0.746183 0 1.66667 0H21.6667C22.5872 0 23.3333 0.746183 23.3333 1.66667C23.3333 2.58713 22.5872 3.33333 21.6667 3.33333H1.66667C0.746183 3.33333 0 2.58713 0 1.66667ZM0 10C0 9.07953 0.746183 8.33333 1.66667 8.33333H21.6667C22.5872 8.33333 23.3333 9.07953 23.3333 10C23.3333 10.9205 22.5872 11.6667 21.6667 11.6667H1.66667C0.746183 11.6667 0 10.9205 0 10Z"
                                    fill="currentcolor" />
                              </svg>
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