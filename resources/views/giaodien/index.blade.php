@extends('layouts\layout')

@section('title')
    Home
@endsection

@section('content')
<style>
    .single-product {
    position: relative;
    overflow: hidden;
    border-radius: 5px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    width: 100%;
}

.single-product:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}
</style>
    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Sản phẩm Hot</h1>
                        <p>Sản phẩm được ưa chuộng săn đón nhiều nhất năm 2023</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                @foreach ($bestselling as $bs)

                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <a href="{{ url('detail', $bs->id_sp) }}"><img src="{{ $bs->hinh }}" alt=""></a>
                        <div class="product-details text-center">
                            <h6>{{ trim(substr($bs->ten_sp, 0, 10)) }}</h6>
                            <div class="price">
                                <?php echo number_format($bs->gia); ?>₫
                                <h6 class="l-through">$210.00</h6>
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
                                        <p class="hover-text">Mua</p>
                                    </a>

                                <a href="#" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Yêu thích</p>
                                </a>
                                {{-- <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a> --}}
                                <a href="#" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Chi tiết</p>
                                </a>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



@endsection
<script>
    function addcart(id) {
        $.ajax({
            url: 'addcart/'+id,
            type:'get',
        }).done(function(response){
            console.log(response);
            $("#change-item-cart").empty();
            $("#change-item-cart").html(response);
            alertify.success('Đã thêm mới sản phẩm');
        });
    }
</script>

