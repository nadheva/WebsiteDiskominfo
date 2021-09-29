
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('front.partials.head')
    <!-- =======================================================
    * Template Name: Bethany - v4.3.0
    * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>DISKOMINFO</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="Bethany/assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            @include('front.partials.navbar')

            </div><!-- End Header Container -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @yield('hero')
    <!-- End Hero -->

    <main id="main">

        {{ $slot }}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('front.partials.scripts')

</body>

</html>