@extends('layouts.layouts') {{-- Giả sử bạn có tệp layout có tên "app.blade.php" --}}
@section('title')
    Cart
@endsection
@section('noidung')
    <style>
        .cart_inner .table tbody tr.bottom_button td .cupon_text {
            margin-left: -468px;
        }
    </style>
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Sản phẩm</h1>
                    <nav class="d-flex align-items-center">
                        <a href="/">Trang chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="/cart">Giỏ hàng</a>

                    </nav>
                </div>
            </div>
        </div>
    </section><br>
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Tổng cộng</th>
                                <th scope="col" class="text-center">Hành động</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if (session('cart') != null)
                                <form action="{{ route('cart.update') }}" method="POST">
                                    @csrf
                                    @foreach (session('cart') as $id_sp => $details)
                                        <tr data-id="{{ $id_sp }}">
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="{{ $details['hinh'] }}" alt="" width="100px">
                                                    </div>
                                                    <div class="media-body">
                                                        <p>{{ $details['ten_sp'] }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5>{{ number_format($details['gia']) . ' ₫' }}</h5>
                                            </td>
                                            <td>
                                                <div class="product_count">
                                                    <input type="hidden" name="id_sp[]" value="{{ $id_sp }}">
                                                    <input type="number" name="soluong[]" value="{{ $details['soluong'] }}"
                                                        title="Số lượng:" class="input-text qty">
                                                </div>
                                            </td>
                                            <td>
                                                @php $total = 0 @endphp

                                                @php $total += $details['gia'] * $details['soluong'] @endphp

                                                <h5>{{ number_format($total, 0, ',', '.') }}₫</h5>
                                            </td>
                                            <td class="text-center"><a
                                                    href="{{ route('cart.remove', ['id_sp' => $id_sp]) }}"><i
                                                        class="bi bi-trash" style="font-size: 23px; color:black;"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach

                            @endif
                            <tr class="bottom_button">

                                <td>
                                    <button type="submit" class="gray_btn">Cập nhật giỏ hàng</button>
                                </td>
                            </form>
                                <td></td>
                                <td></td>
                                <td></td>


                                <td>
                                    <div class="cupon_text d-flex align-items-center">
                                        <input type="text" placeholder="Mã giảm giá">
                                        <a class="primary-btn" href="#">Áp dụng</a>
                                        <a class="gray_btn" href="#">voucher</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>

                                <td>
                                    <h5>Tổng cộng</h5>
                                </td>


                                <td>
                                    @php $totalAmount = 0 @endphp
                                    @foreach ((array) session('cart') as $id => $details)
                                        @php $totalAmount += $details['gia'] * $details['soluong'] @endphp
                                    @endforeach
                                    <h5>{{ number_format($totalAmount, 0, ',', '.') }}₫</h5>
                                </td>
                                <td></td>
                            </tr>
                            <form action="/session" method="post">
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cart-buttons">

                                            <div class="mb-3">

                                                <label for="tennguoinhan" class="form-label">Họ và tên</label>
                                                <input type="text" name="tennguoinhan" class="form-control"
                                                    id="tennguoinhan" aria-describedby="emailHelp" value="{{ Auth::user()->name }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="dienthoai" class="form-label">Số điện thoại</label>
                                                <input type="number" name="dienthoai" class="form-control" id="dienthoai" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="diachigiaohang" class="form-label">Địa chỉ giao hàng</label>
                                                <input type="text" name="diachigiaohang" class="form-control"
                                                    id="diachigiaohang" value="{{ Auth::user()->diachi }}" required>
                                            </div>


                                    </div>
                                </td>

                                <td></td>
                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="/../../product">Tiếp tục mua sắm</a>
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <button class="primary-btn" type="submit" id="checkout-live-button"> Thanh
                                            toán</button>


                                    </div>
                                </td>
                            </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
