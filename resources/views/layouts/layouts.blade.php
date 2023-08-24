<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Thẻ Meta cho thiết bị di động -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/fav.png">
    <!-- Tác giả Meta -->
    <meta name="author" content="CodePixar">
    <!-- Mô tả Meta -->
    <meta name="description" content="">
    <!-- Từ khóa Meta -->
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Thiết lập ký tự Meta -->
    <meta charset="UTF-8">
    <!-- Tiêu đề trang -->
    <title>@yield('title')</title>
    <!-- CSS -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js"></script>



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
    <link rel="stylesheet" href="/css/nice-select.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <!-- Bắt đầu Phần đầu -->
    <header class="header_area sticky-header">
        @include('layouts.menu')
        {{-- <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between">
                    <input type="text" class="form-control" id="search_input" placeholder="Tìm kiếm">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Đóng Tìm kiếm"></span>
                </form>
            </div>
        </div> --}}
    </header>
{{-- <div style="margin-top: 10%"></div> --}}
@yield('noidung')
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Thông tin về chúng tôi</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore dolore
                        magna aliqua.
                    </p>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Thư thông báo</h6>
                    <p>Cập nhật thông tin mới nhất của chúng tôi</p>
                    <div class="" id="mc_embed_signup">

                        <form target="_blank" novalidate="true"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">

                            <div class="d-flex flex-row">

                                <input class="form-control" name="EMAIL" placeholder="Nhập Email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập Email '"
                                    required="" type="email" value="quang.sang1530@gmail.com">


                                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                        aria-hidden="true"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                        value="" type="text">
                                </div>

                                <!-- <div class="col-lg-4 col-md-4">
        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
       </div>  -->
                            </div>
                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">Bài viết trên Instagram</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="/img/i1.jpg" alt=""></li>
                        <li><img src="/img/i2.jpg" alt=""></li>
                        <li><img src="/img/i3.jpg" alt=""></li>
                        <li><img src="/img/i4.jpg" alt=""></li>
                        <li><img src="/img/i5.jpg" alt=""></li>
                        <li><img src="/img/i6.jpg" alt=""></li>
                        <li><img src="/img/i7.jpg" alt=""></li>
                        <li><img src="/img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Theo dõi chúng tôi</h6>
                    <p>Hãy cùng kết nối với chúng tôi</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
            <p class="footer-text m-0">
                Bản quyền &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> Đã đăng ký bản quyền | Template này được tạo bởi <i class="fa fa-heart-o"
                    aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
        </div>
    </div>
</footer>
<!-- Kết thúc Phần chân trang -->

<script src="/js/vendor/jquery-2.2.4.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper./js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script> --}}
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
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}
<script src="{{ asset('js/cart.js') }}"></script>

</body>

</html>
