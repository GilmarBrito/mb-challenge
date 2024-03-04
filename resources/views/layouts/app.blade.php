<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('template_assets/images/favicon.svg') }}" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ Vite::asset('resources/template_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/template_assets/css/lineicons.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/template_assets/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ Vite::asset('resources/template_assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @livewireStyles
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="{{ route('home') }}">
            <svg id="Layer_1" style="width:50%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1999.9 2000"><style>.st0{fill:#00206b}.st1{fill:#eba809}</style><path class="st0" d="M947 0h104.2C1159.9 7.2 1268 28.9 1369 69.7c250 98.3 456.3 302.2 557 551.4 138.6 331.8 79.1 736.5-152.3 1012.6-156.6 192.2-386.9 323.1-632.7 356.4-230.7 32.9-472.8-16.8-670.2-141.5-152.2-94.8-278.2-231.2-359.8-391C6.3 1256.9-25.5 1019.7 20.5 798.3c49.2-245.4 195.7-469.3 400-613.6C573.5 74 759 11.7 947 0m-62 45.3C580.8 80.2 301.2 271.8 156.2 541.2 58.1 720.3 18.9 931.5 48.5 1133.8c33.5 243.6 166 471.5 360 622.3 147.7 116.5 330.4 188 518 202 212.5 16.9 430.1-39.8 606.5-159.5 216.3-143.2 369.8-377.4 413.9-633.1 25.4-150.7 16.8-307.7-29.8-453.4-66.5-211.9-209-399.2-396-519.2C1335.2 70.9 1105.7 18 885 45.3z"/><path class="st0" d="M909.1 439.1C1083 410 1269.5 467 1394.6 591.8c111 104.8 175.8 257.1 172.6 409.8 2.2 151.9-62.9 303-173.4 406.9-120.3 119.6-297.2 176.7-464.9 154.6-158-19-305.9-108.8-395.7-240.3C433.8 1182 406.4 994.6 458 830.5c60.4-202 242.8-359.9 451.1-391.4m34.7 34.6c.1 49.7.2 99.4.1 149.1 24.8 0 49.6 0 74.4.1.1-51 .2-102 0-152.9-24.8.8-49.7 2-74.5 3.7m178.9 151.5c65.3 8.8 135.5 18.8 187.6 62.9 79.5 71.4 69.2 221.3-28.1 273.1 58.3 13.6 116 52.5 130.4 113.7 18.7 80.3 3.8 176.7-60.7 233.3-63.9 52.6-150.4 59.5-229.4 67 .4 46.5.2 93 .1 139.6 166.3-40.7 309.8-164.5 370.8-324.7 57.9-147.8 44.2-321.7-37.5-457.8-72.2-122.8-195-213-332.9-247.6-.4 46.8-.4 93.6-.3 140.5m-496.3-2c72 3.5 144.1 2.7 216.2 2.6 0-43.9.1-87.7-.2-131.6-80.7 26.2-152.6 73.2-216 129m-8.6 5.8c-19.1 23.5-54.5 67.9-75.5 107.2-84.7 144.3-94.3 329.5-23.6 481.3 61 136.1 182 242 323.7 287.6.2-43.8.1-87.6.1-131.3-72.3-.7-144.8 1.9-217-2 .8-40.3 10.3-79.7 24-117.7 35.4-.7 72.3 5.5 106.5-6.1 20-16.8 14.3-44.6 15.4-67.6-1.1-131.5.5-263-.7-394.4 1.3-21.2-12-44.1-34-48.3-36.3-7.3-73.7-4.4-110.4-4.7-4.3-29.6-4.8-59.5-5.2-89.4 0 0 .5-9.4-2.7-15.5l-.6.9zm329.1 113v193.8c64.7-1.2 136.5 6 193.1-31.6 47-30.8 44-108.7-4.5-136.4-56.7-33.5-125.8-24-188.6-25.8m0 298.1v215c79.9-6.4 169.5 7 239-41.2 49.7-33 43.7-114.7-7.5-143.3-69.6-41.6-154.2-28.4-231.5-30.5m-2.9 336.6c0 49.7-.1 99.5-.2 149.2 25.9 1.7 51.7 2.7 77.6 3.5.2-50.9.1-101.8.1-152.7H944z"/><path class="st1" d="M890.8 97.2c175.2-18.8 356.6 7.9 514 88.7 202.5 99.3 364.4 277.8 444.2 488.7 81.4 211.2 79.6 452.8-4.7 663-128.2 331.3-466.7 569.5-823.1 570-209.3 7.6-419.9-62.8-583.8-193-174.8-135.9-295.7-339-333-557.3-38.1-216.2 4.6-445.9 120.2-632.8C365.9 290.1 619 128.1 890.8 97.2m-30.5 293.4c-142.4 32.1-272.6 116.2-359.9 233.3-96.4 126.8-140.6 291.7-120.9 449.6 18.5 169 110.8 328.4 248.1 428.5 128.5 96.6 295.5 139 454.5 117.2 196.5-24 377.2-149.1 468.9-324.6 68.7-125.2 87.5-274 62.3-413.7-32.1-169.4-137.9-323.3-285.1-413.1-137.8-85.8-309.8-113.3-467.9-77.2z"/></svg>
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}">
              <span class="icon">
                <i class="lni lni-dashboard"></i>
              </span>
              <span class="text">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('crypto') }}">
              <span class="icon">
                <i class="lni lni-coin"></i>
              </span>
              <span class="text">Cryptocurrencies</span>
            </a>
          </li>
          <span class="divider"><hr /></span>
            <li class="nav-item">
            <a href="{{ route('profile') }}">
              <span class="icon">
                <i class="lni lni-user"></i>
              </span>
              <span class="text"> User Profile</span>
            </a>
          </li>
        </ul>
      </nav>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
      <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i> Menu
                  </button>
                </div>
                {{-- <div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div> --}}
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
                @guest
                <div>
                    <a class="btn bg-transparent border-0" href="{{ route('login') }}">
                        <i class="lni lni-enter"></i> Login
                      </a>
                </div>
                <div>
                    <a class="btn bg-transparent border-0" href="{{ route('register') }}">
                        <i class="lni lni-archive"></i> Register
                      </a>
                </div>
                @else
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info">
                        <div>
                          <h6 class="fw-500">{{ Auth::user()->name }}</h6>
                        </div>
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="content">
                          <h4 class="text-sm">{{ Auth::user()->name }}</h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs" href="#">{{ Auth::user()->email }}</a>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="{{ route('profile') }}">
                        <i class="lni lni-user"></i> User Profile
                      </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <livewire:user.logout />
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
                @endguest
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->

      <section class="section">
        <div id="message">
            @if(session('success'))
                <div class="auto-close alert alert-success alert-dismissible fade show" role="alert">
                    {!! session('success') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                </div>
            @endif

            @if(session('error'))
                <div class="auto-close alert alert-danger alert-dismissible fade show" role="alert">
                    {!! session('error') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                </div>
            @endif
        </div>
    </session>



      <!-- ========== section start ========== -->
      <section class="section">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="title">
                  <h2>{{ $title ?? 'Page Title' }}</h2>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->


          @yield('content')
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->

          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script type="module" src="{{ Vite::asset('resources/template_assets/js/bootstrap.bundle.min.js') }}"></script>
    <script type="module" src="{{ Vite::asset('resources/template_assets/js/polyfill.js') }}"></script>
    <script type="module" src="{{ Vite::asset('resources/template_assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @livewireScripts
    <script>
        const autoCloseElements = document.querySelectorAll(".auto-close");

        function fadeAndSlide(element) {
            const fadeDuration = 500;
            const slideDuration = 500;

            let opacity = 1;
            const fadeInterval = setInterval(function () {
                if (opacity > 0) {
                    opacity -= 0.1;
                    element.style.opacity = opacity;
                } else {
                    clearInterval(fadeInterval);

                    let height = element.offsetHeight;
                    const slideInterval = setInterval(function () {
                        if (height > 0) {
                        height -= 10;
                        element.style.height = height + "px";
                        } else {
                        clearInterval(slideInterval);

                        element.parentNode.removeChild(element);
                        }
                    }, slideDuration / 10);
                }
            }, fadeDuration / 10);
        }

        // Set a timeout to execute the animation after 5000 milliseconds (5 seconds)
        setTimeout(function () {
        autoCloseElements.forEach(function (element) {
            fadeAndSlide(element);
        });
        }, 5000);
    </script>

  </body>
</html>
