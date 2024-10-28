<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal Portfolio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link href="{{ asset('build/assets/img/blog/S.jpg') }}" rel="icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/build/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/build/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('build/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('/build/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/build/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/build/assets/main.css') }}" rel="stylesheet" />
</head>

<body class="template-color-1 spybody white-version" data-spy="scroll" data-offset="150">
    <x-client.navbar />
    <main class="main-page-wrapper mt-5">
        @yield('content')
    </main>
    <x-client.footer :profile="$profile" :services="$services"/>

    <!-- Vendor JS Files -->
    <script src="{{ asset('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('build/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init();
    </script>

    <!-- Main JS File -->
    <script src="{{ asset('build/assets/js/main.js') }}"></script>
</body>

</html>
