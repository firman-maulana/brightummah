<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bright Ummah - Educational Platform</title>
    
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
    <!-- header-top-area-start -->
    <div class="it-header-top-area black-bg it-header-top-ptb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 col-md-4 col-sm-5">
                    <div class="it-header-top-contact-wrap d-flex justify-content-center justify-content-sm-start align-items-center">
                        <ul>
                            <li class="d-none d-lg-inline-block">
                                <div class="it-header-top-contact d-flex align-items-center">
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.74999 0.749977C9.74999 0.551065 9.82901 0.360299 9.96966 0.219647C10.1103 0.0789947 10.3011 -2.29774e-05 10.5 -2.29774e-05C12.4884 0.00216072 14.3948 0.793038 15.8009 2.19909C17.2069 3.60514 17.9978 5.51152 18 7.49998C18 7.69889 17.921 7.88966 17.7803 8.03031C17.6397 8.17096 17.4489 8.24998 17.25 8.24998C17.0511 8.24998 16.8603 8.17096 16.7197 8.03031C16.579 7.88966 16.5 7.69889 16.5 7.49998C16.4982 5.90923 15.8655 4.38414 14.7407 3.25931C13.6158 2.13448 12.0907 1.50176 10.5 1.49998C10.3011 1.49998 10.1103 1.42096 9.96966 1.28031C9.82901 1.13965 9.74999 0.948889 9.74999 0.749977ZM10.5 4.49998C11.2956 4.49998 12.0587 4.81605 12.6213 5.37866C13.1839 5.94127 13.5 6.70433 13.5 7.49998C13.5 7.69889 13.579 7.88966 13.7197 8.03031C13.8603 8.17096 14.0511 8.24998 14.25 8.24998C14.4489 8.24998 14.6397 8.17096 14.7803 8.03031C14.921 7.88966 15 7.69889 15 7.49998C14.9988 6.30687 14.5243 5.16297 13.6807 4.31931C12.837 3.47566 11.6931 3.00117 10.5 2.99998C10.3011 2.99998 10.1103 3.07899 9.96966 3.21965C9.82901 3.3603 9.74999 3.55106 9.74999 3.74998C9.74999 3.94889 9.82901 4.13965 9.96966 4.28031C10.1103 4.42096 10.3011 4.49998 10.5 4.49998ZM17.3197 12.5542C17.7544 12.9901 17.9984 13.5805 17.9984 14.196C17.9984 14.8115 17.7544 15.4019 17.3197 15.8377L16.6372 16.6245C10.4947 22.5052 -4.45276 7.56148 1.33724 1.39948L2.19974 0.649477C2.63607 0.226985 3.22119 -0.00673617 3.82852 -0.00112185C4.43585 0.00449248 5.01655 0.248991 5.44499 0.679477C5.46824 0.702727 6.85799 2.50798 6.85799 2.50798C7.27036 2.9412 7.49992 3.51667 7.49894 4.11478C7.49796 4.71288 7.26653 5.28761 6.85274 5.71948L5.98424 6.81148C6.46488 7.97931 7.17154 9.04066 8.06362 9.93455C8.9557 10.8284 10.0156 11.5372 11.1825 12.0202L12.2812 11.1465C12.7132 10.733 13.2878 10.5018 13.8857 10.501C14.4836 10.5002 15.0589 10.7297 15.492 11.142C15.492 11.142 17.2965 12.531 17.3197 12.5542ZM16.2877 13.6447C16.2877 13.6447 14.493 12.264 14.4697 12.2407C14.3152 12.0875 14.1065 12.0016 13.8889 12.0016C13.6713 12.0016 13.4625 12.0875 13.308 12.2407C13.2877 12.2617 11.775 13.467 11.775 13.467C11.673 13.5481 11.5517 13.6013 11.423 13.6213C11.2942 13.6413 11.1625 13.6274 11.0407 13.581C9.52908 13.0182 8.15604 12.137 7.01462 10.9973C5.87319 9.85754 4.99004 8.4858 4.42499 6.97498C4.37489 6.85157 4.35855 6.71704 4.37767 6.58523C4.39678 6.45342 4.45065 6.32907 4.53374 6.22498C4.53374 6.22498 5.73899 4.71148 5.75924 4.69198C5.91244 4.53747 5.9984 4.32869 5.9984 4.1111C5.9984 3.89351 5.91244 3.68474 5.75924 3.53023C5.73599 3.50773 4.35524 1.71148 4.35524 1.71148C4.19841 1.57086 3.99374 1.49555 3.78317 1.50099C3.57261 1.50643 3.3721 1.5922 3.22274 1.74073L2.36024 2.49073C-1.87126 7.57873 11.082 19.8135 15.5407 15.6L16.224 14.8125C16.3841 14.6642 16.4803 14.4594 16.4922 14.2415C16.5041 14.0236 16.4308 13.8096 16.2877 13.6447Z" fill="#F8C62F" />
                                        </svg>
                                    </span>
                                    <a class="border-line" href="tel:628123456789">+62 812-3456-7890</a>
                                </div>
                            </li>
                            <li>
                                <div class="it-header-top-contact d-flex align-items-center">
                                    <span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.25 0.75H3.75C2.7558 0.751191 1.80267 1.14666 1.09966 1.84966C0.396661 2.55267 0.00119089 3.5058 0 4.5L0 13.5C0.00119089 14.4942 0.396661 15.4473 1.09966 16.1503C1.80267 16.8533 2.7558 17.2488 3.75 17.25H14.25C15.2442 17.2488 16.1973 16.8533 16.9003 16.1503C17.6033 15.4473 17.9988 14.4942 18 13.5V4.5C17.9988 3.5058 17.6033 2.55267 16.9003 1.84966C16.1973 1.14666 15.2442 0.751191 14.25 0.75ZM3.75 2.25H14.25C14.6991 2.25088 15.1376 2.38614 15.5092 2.63835C15.8808 2.89057 16.1684 3.24821 16.335 3.66525L10.5915 9.4095C10.1688 9.83049 9.59656 10.0669 9 10.0669C8.40344 10.0669 7.83118 9.83049 7.4085 9.4095L1.665 3.66525C1.83161 3.24821 2.11921 2.89057 2.49079 2.63835C2.86236 2.38614 3.30091 2.25088 3.75 2.25ZM14.25 15.75H3.75C3.15326 15.75 2.58097 15.5129 2.15901 15.091C1.73705 14.669 1.5 14.0967 1.5 13.5V5.625L6.348 10.47C7.05197 11.1722 8.00569 11.5665 9 11.5665C9.99431 11.5665 10.948 11.1722 11.652 10.47L16.5 5.625V13.5C16.5 14.0967 16.2629 14.669 15.841 15.091C15.419 15.5129 14.8467 15.75 14.25 15.75Z" fill="#F8C62F" />
                                        </svg>
                                    </span>
                                    <a class="border-line" href="mailto:info@brightummah.com">info@brightummah.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-8 col-sm-7 d-none d-sm-block">
                    <div class="it-header-top-right-action d-flex align-items-center justify-content-end">
                        <div class="it-header-top-login-box d-none d-sm-block">
                            @auth('web')
                                <span class="me-2">{{ auth('web')->user()->name }}</span>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header2').submit();">Logout</a>
                                <form id="logout-form-header2" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                <span>/</span>
                                <a href="{{ route('register') }}">Register</a>
                            @endauth
                        </div>
                        <div class="it-header-top-social-box align-items-center d-none d-md-flex">
                            <span>Follow On:</span>
                            <a href="#" aria-label="Facebook">
                                <svg width="12" height="16" viewBox="0 0 12 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.82727 6.83333C1.14284 6.83333 1 6.96763 1 7.61111V8.77778C1 9.42126 1.14284 9.55556 1.82727 9.55556H3.48182V14.2222C3.48182 14.8657 3.62466 15 4.30909 15H5.96364C6.64807 15 6.79091 14.8657 6.79091 14.2222V9.55556H8.64871C9.1678 9.55556 9.30155 9.4607 9.44416 8.99145L9.7987 7.82478C10.043 7.02095 9.89246 6.83333 9.00326 6.83333H6.79091V4.88889C6.79091 4.45933 7.16129 4.11111 7.61818 4.11111H9.97273C10.6572 4.11111 10.8 3.97681 10.8 3.33333V1.77778C10.8 1.1343 10.6572 1 9.97273 1H7.61818C5.33373 1 3.48182 2.74111 3.48182 4.88889V6.83333H1.82727Z" stroke="currentcolor" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Twitter">
                                <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41177 0H0L5.23083 6.87316L0.334618 12.6389H2.59681L6.29998 8.27809L9.58823 12.5988H14L8.6172 5.52593L8.62673 5.53813L13.2614 0.0802914H10.9992L7.55741 4.13336L4.41177 0ZM2.43522 1.20371H3.80866L11.5648 11.395H10.1913L2.43522 1.20371Z" fill="currentcolor" />
                                </svg>
                            </a>
                            <a href="#" aria-label="Instagram">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.5 1H4.5C2.567 1 1 2.567 1 4.5V11.5C1 13.433 2.567 15 4.5 15H11.5C13.433 15 15 13.433 15 11.5V4.5C15 2.567 13.433 1 11.5 1Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.7963 7.55921C10.8827 8.14178 10.7832 8.73676 10.5119 9.25952C10.2407 9.78228 9.81148 10.2062 9.28542 10.471C8.75935 10.7358 8.16319 10.8279 7.58173 10.7344C7.00027 10.6408 6.46311 10.3663 6.04667 9.94982C5.63022 9.53338 5.35569 8.99622 5.26213 8.41476C5.16856 7.8333 5.26073 7.23714 5.52551 6.71107C5.79029 6.18501 6.21421 5.75583 6.73697 5.48458C7.25973 5.21333 7.85471 5.11382 8.43728 5.20021C9.03152 5.28833 9.58167 5.56524 10.0065 5.99003C10.4313 6.41482 10.7082 6.96496 10.7963 7.55921Z" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.8477 4.15039H11.8577" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" aria-label="LinkedIn">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.2579 4.73828C11.5141 4.73828 12.7188 5.2373 13.6071 6.12555C14.4954 7.01381 14.9944 8.21854 14.9944 9.47473V15.0006H11.8367V9.47473C11.8367 9.056 11.6704 8.65442 11.3743 8.35834C11.0782 8.06225 10.6767 7.89591 10.2579 7.89591C9.8392 7.89591 9.43762 8.06225 9.14154 8.35834C8.84545 8.65442 8.67911 9.056 8.67911 9.47473V15.0006H5.52148V9.47473C5.52148 8.21854 6.0205 7.01381 6.90876 6.12555C7.79701 5.2373 9.00174 4.73828 10.2579 4.73828Z" fill="currentcolor" />
                                    <path d="M3.15763 5.52734H0V15.0002H3.15763V5.52734Z" fill="currentcolor" />
                                    <path d="M1.57881 3.15763C2.45077 3.15763 3.15763 2.45077 3.15763 1.57881C3.15763 0.706859 2.45077 0 1.57881 0C0.706859 0 0 0.706859 0 1.57881C0 2.45077 0.706859 3.15763 1.57881 3.15763Z" fill="currentcolor" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top-area-end -->

    <!-- header-area-start -->
    <div id="header-sticky" class="it-header-area it-header-ptb p-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-5 col-6">
                    <div class="it-header-logo">
                        <a href="{{ route('home') }}">
                            <img src="assets/img/logo/logo-black.png" alt="Bright Ummah Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 d-none d-xl-block">
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
                <div class="col-xxl-5 col-xl-5 col-lg-8 col-md-7 col-6">
                    <div class="it-header-right-action d-flex justify-content-end align-items-center">
                        <a href="{{ route('programs.index') }}" class="it-btn-yellow d-none d-md-flex">
                            <span>
                                <span class="text-1">Apply Now</span>
                                <span class="text-2">Apply Now</span>
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