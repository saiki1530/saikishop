<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Liên kết tới Bootstrap CSS từ CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Hoặc tải Bootstrap CSS từ tệp cục bộ trong dự án của bạn -->
    <link rel="stylesheet" href="path/to/bootstrap.min.css">

    <link rel="stylesheet" href="/css/linearicons.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/themify-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/nouislider.min.css">
    <link rel="stylesheet" href="/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/main.css">

    <!-- Scripts -->

</head>

<style>
    .collapse {
        visibility: visible;
}
</style>
<body class="font-sans text-gray-900 antialiased">
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    {{-- <div id="navbarSupportedContent"> --}}
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">


                            <li class="nav-item">
                                <form class="d-flex" role="search"method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <input class="form-control me-2 sm:rounded-lg" placeholder="Email" aria-label="Search" id="email" type="email" name="email":value="old('email')" required autofocus autocomplete="username">
                                    <input class="form-control me-2 sm:rounded-lg" placeholder="Mật khẩu" aria-label="Search" type="password" name="password" required autocomplete="current-password">
                                    <button class="btn btn-outline-success" style="width:55%" type="submit">Đăng
                                        nhập</button>
                                </form>
                            </li>
                            <li class="nav-item"><a class="nav-link text-primary" href="/register"
                                    style="text-transform: none;">Bạn chưa có tài khoản ư?</a></li>
                    </div>
                </div>
            </nav>
        </div>


    </header>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <section class="tracking_box_area section_gap ">
        <div class="container">
            <div class="tracking_box_inner d-flex justify-content-center align-items-center" style="margin-top: 5%">
                <div class="row tracking_form">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>



    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <b style="font-size:30px ">QUÊN MẬT KHẨU</b>

        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div> --}}

</body>
<script src="/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper./js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="/js/vendor/bootstrap.min.js"></script>
<script src="/js/jquery.ajaxchimp.min.js"></script>
<script src="/js/jquery.nice-select.min.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/nouislider.min.js"></script>
<script src="/js/countdown.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="/js/gmaps.min.js"></script>
<script src="/js/main.js"></script>
<!-- Liên kết tới Bootstrap JavaScript từ CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Hoặc tải Bootstrap JavaScript từ tệp cục bộ trong dự án của bạn -->
<script src="path/to/bootstrap.bundle.min.js"></script>

</html>
