<style>
    .collapse {
        visibility: visible;
    }
</style>
<div class="main_menu ">
    <nav class="navbar navbar-expand-lg navbar-light main_box">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="/">Trang Chủ</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="/product" class="nav-link">Sản phẩm</a>
                        {{-- <ul class="dropdown-menu" style="margin-top: -20%">
                            @foreach ($listloai as $brain)
                                <li class="nav-item"><a class="nav-link"
                                        href="/category/{{ $brain->id_loai }}">{{ $brain->ten_loai }}</a></li>
                            @endforeach
                        </ul> --}}
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Bài viết</a>
                        <ul class="dropdown-menu" style="display: none;" style="margin-top: -20%">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Bài viết</a></li>

                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Dịch vụ</a>
                        {{-- <ul class="dropdown-menu" style="display: none;">
                            <li class="nav-item"><a class="nav-link" href="login.html">Đăng nhập</a></li>
                            <li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
                            <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                        </ul> --}}
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Liên hệ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @auth

                        <div>

                            <div x-data="{ open: false }">
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        {{ Auth::user()->name }}

                                    </a>
                                    <ul class="dropdown-menu" style="display: none;">
                                        <li class="nav-item"><a class="nav-link" href="/profile"
                                                style="margin-left: -21.5%">Hồ sơ</a></li>
                                        <?php if (Auth::user()->role=='admin') {?>
                                        <li class="nav-item"><a class="nav-link" href="/admin/dashboard"
                                                >Quản trị</a></li>
                                        <?php }else {?>
                                        {{-- ko có --}}
                                        <?php }?>
                                        <li class="nav-item"><a class="nav-link" href="/cart">Đơn hàng</a></li>
                                        <li class="nav-item">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-dropdown-link :href="route('logout')" class="nav-link"
                                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();"
                                                    style="margin-left: 0%">
                                                    &ensp;{{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            </div>

                        </div>
                        {{-- <li class="nav-item mt-2">
                        <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                    </li> --}}
                    @else
                        <!-- Hiển thị nút đăng nhập -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }} </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>
