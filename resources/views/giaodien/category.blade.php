@extends('layouts\layouts')
@section('title')
    Product
@endsection

@section('noidung')
    <!-- Start related-product Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Sản phẩm</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/product">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
                        <?php foreach ($category as $cat) {?>
                        <a href="/category/{{ $cat->id_loai }}">{{ $cat->ten_loai }}</a>
                       <?php break;} ?>
                    </nav>
                </div>
            </div>
        </div>
    </section><br>
    <?php foreach ($category as $cat) {?>
    <center><h1 >{{ $cat->ten_loai }}</h1></center><br>
    <?php break;} ?>
    <div class="single-product-slider">
        <div class="container">
            <div class="row">
                <!-- single product -->

                @foreach ($category as $cat)
                    <div class="col-lg-3 col-md-6">
                        <div class="single-product">
                            <a href="{{ url('detail', $cat->id_sp) }}"><img src="{{ $cat->hinh }}" alt=""></a>
                            <div class="product-details">
                                <h6>{{ trim(substr($cat->ten_sp, 0, 10)) }}</h6>
                                <div class="price">
                                    <strong><?php echo number_format($cat->gia); ?>đ
                                    </strong>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">add to bag</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
