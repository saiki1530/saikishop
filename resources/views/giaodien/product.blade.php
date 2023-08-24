@extends('layouts\layouts')
@section('title')
    Product
@endsection

@section('noidung')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Trang sản phẩm</h1>
                <nav class="d-flex align-items-center">
                    <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="/product">Sản phẩm<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Tất cả sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<div class="container">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-categories">
                <div class="head">Danh mục</div>
                <ul class="main-categories">
                    @foreach ($listloai as $brain)
                    <li class="main-nav-list"><a href="/category/{{ $brain->id_loai }}">{{ $brain->ten_loai }}<span class="number"></span></a></li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                    <div class="head">Brands</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="apple"
                                    name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="asus"
                                    name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee"
                                    name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax"
                                    name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung"
                                    name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Color</div>
                    <form action="#">
                        <ul>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="black"
                                    name="color"><label for="black">Black<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather"
                                    name="color"><label for="balckleather">Black
                                    Leather<span>(29)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred"
                                    name="color"><label for="blackred">Black
                                    with red<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="gold"
                                    name="color"><label for="gold">Gold<span>(19)</span></label></li>
                            <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey"
                                    name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                        </ul>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Price</div>
                    <div class="price-range-area">
                        <div id="price-range"></div>
                        <div class="value-wrapper d-flex">
                            <div class="price">Price:</div>
                            <span>$</span>
                            <div id="lower-value"></div>
                            <div class="to">to</div>
                            <span>$</span>
                            <div id="upper-value"></div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                        <option value="1">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    {{ $sanpham->links('pagination::test') }}
                </div>
                {{-- <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div> --}}
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    @foreach ($sanpham as $bs)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ $bs->hinh }}" alt="">
                            <div class="product-details">
                                <h6>{{ trim(substr($bs->ten_sp, 0, 10)) }}</h6>
                                <div class="price">
                                    <h6><?php echo number_format($bs->gia); ?>₫</h6>
                                    <h6 class="l-through"><?php echo number_format($bs->gia_km); ?>₫</h6>
                                </div>
                                <div class="prd-bottom">
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf



                                        <input type="hidden" value="{{ $bs->id_sp }}" name="id">
                                        <input type="hidden" value="{{ $bs->ten_sp }}" name="ten_sp">
                                        <input type="hidden" value="{{ $bs->gia }}" name="gia">
                                        <input type="hidden" value="{{ $bs->hinh }}"  name="hinh">
                                        <input type="hidden" value="1" name="soluong">
                                        {{-- <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button> --}}
                                        <a href="/addcart/{{ $bs->id_sp }}" class="social-info">
                                            <span class="ti-bag"></span>
                                            <p class="hover-text">addcart</p>
                                        </a>

                                    <a href="" class="social-info">
                                        <span class="lnr lnr-heart"></span>
                                        <p class="hover-text">Wishlist</p>
                                    </a>
                                    <a href="" class="social-info">
                                        <span class="lnr lnr-sync"></span>
                                        <p class="hover-text">compare</p>
                                    </a>
                                    <a href="{{ url('detail', $bs->id_sp) }}" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">view more</p>
                                    </a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single product -->
                    @endforeach
                </div>
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                        <option value="1">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    {{ $sanpham->links('pagination::test') }}
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>


@endsection

