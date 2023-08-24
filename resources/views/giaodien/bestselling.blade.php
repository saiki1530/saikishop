 <!-- Start Banner Area -->

 <!-- End Banner Area -->
 <section class="banner-area organic-breadcrumb">
     <div class="container">
         <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
             <div class="col-first">
                 <h1>Sản phẩm theo danh mục</h1>
                 <nav class="d-flex align-items-center">

                     <?php foreach ($detail as $bs) {?>
                     <a href="/category/{{ $bs->id_loai }}">Danh mục<span class="lnr lnr-arrow-right"></span></a>
                     <a href="#">{{ $bs->ten_loai }}<span class="lnr lnr-arrow-right"></span></a>
                     <a href="#">{{ $bs->ten_sp }}</a>
                     <?php break;} ?>
                 </nav>
             </div>
         </div>
     </div>
 </section>
 <!--================Single Product Area =================-->
 <div class="product_image_area">
     <div class="container">
         <div class="row s_product_inner">
             <div class="col-lg-6">
                 <div class="s_Product_carousel">
                     <div class="single-prd-item">
                         @foreach ($detail as $bs)
                             <img class="img-fluid" src="{{ $bs->hinh }}" alt="">
                         @endforeach
                     </div>
                     @foreach ($detail as $bs)
                         <img class="img-fluid" src="{{ $bs->hinh }}" alt="">
                     @endforeach
                     @foreach ($detail as $bs)
                         <img class="img-fluid" src="{{ $bs->hinh }}" alt="">
                     @endforeach
                 </div>
             </div>
             <div class="col-lg-5 offset-lg-1">
                 <div class="s_product_text">
                     @foreach ($detail as $bs)
                         <h3>{{ $bs->ten_sp }}</h3>
                         <h2><?php echo number_format($bs->gia); ?>₫</h2>
                         <ul class="list">
                             <li><a class="active" href="#"><span>Danh mục</span> : {{ $bs->ten_loai }}</a></li>
                             <li><a href="#"><span>Tồn kho</span> : 10</a></li>
                         </ul>
                         {{-- <p>{{ $bs->ten_loai }}</p> --}}
                         <div class="product_count">
                             <label for="qty">Quantity:</label>
                                 <input type="text" name="qty" id="sst" maxlength="12" value="1"
                                 title="Quantity:" class="input-text qty" style="line-height: 0.5rem;width: 65px;">
                             <button
                                 onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                 class="increase items-count" type="button" style="top: -2.5px; right: 3px"><i class="lnr lnr-chevron-up"></i></button>
                             <button
                                 onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                 class="reduced items-count" type="button" style="bottom: -5.5px;right:3px"><i
                                     class="lnr lnr-chevron-down"></i></button>
                         </div>
                         <div class="card_area d-flex align-items-center">
                             <a class="primary-btn" href="#">Add to Cart</a>
                             <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                             <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--================End Single Product Area =================-->

 <!--================Product Description Area =================-->
 <section class="product_description_area">
     <div class="container">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item">
                 <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                     aria-selected="true">Miêu tả</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                     aria-controls="profile" aria-selected="false">Thông số chi tiết kĩ thuật</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                     aria-controls="contact" aria-selected="false">Bình luận</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab"
                     aria-controls="review" aria-selected="false">Đánh giá</a>
             </li>
         </ul>
         <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                 <p>Laptop Acer Aspire 7 Gaming A715 76G 5132 i5 12450H (NH.QMESV.002) mang trong mình con chip Intel
                     Gen 12 và card rời GTX 1650 mạnh mẽ cùng với những tính năng được cải thiện đáng kể, sẽ là "vũ khí"
                     tốt dành cho người đam mê game, là một lựa chọn không thể bỏ qua trong phân khúc laptop gaming phổ
                     thông.</p>
                 <p>• Lapptop Acer Aspire mang đến vẻ đẹp tối giản nhưng cũng không kém phần mạnh mẽ với gam màu đen,
                     thiết kế với bản lề ẩn cùng logo nhỏ cũng mang đến sự cuốn hút nhất định. Chất liệu nhựa cao cấp
                     cung cấp độ bền và độ nhẹ, giúp giảm khối lượng tổng thể của laptop xuống còn 2.1 kg. Nắp lưng bằng
                     kim loại được sử dụng nhằm đem lại vẻ ngoài sang trọng và chắc chắn.</p>

                 <p>• Bàn phím có đèn nền rất phù hợp trong môi trường thiếu ánh sáng, giúp bạn làm việc một cách thuận
                     tiện hơn. Bảo mật vân tay cũng là tính năng đáng chú ý của chiếc laptop này giúp tăng cường tính
                     bảo mật của thiết bị.</p>

                 <p>• Laptop này được trang bị một loạt các cổng giao tiếp đa dạng, mang lại khả năng kết nối và tương
                     tác linh hoạt với nhiều thiết bị và phụ kiện khác nhau như: HDMI, Jack tai nghe 3.5 mm, 3 x USB
                     3.2, 1 x USB Type-C, LAN.</p>

                 <p>• Laptop được trang bị bộ vi xử lý Intel Core i5 12450H có thiết kế 8 nhân và 12 luồng cùng bộ nhớ
                     đệm 12 MB mang lại khả năng giải quyết đa tác vụ mạnh mẽ như chơi những tựa game hay hoặc xử lý các
                     tác vụ văn phòng như nhập liêu, tính toán,... Kết hợp với card rời GeForce GTX 1650, với dung lượng
                     4 GB nâng cao hiệu năng xử lý các tác vụ đồ họa như chỉnh sửa hình ảnh, render video ngắn và chơi
                     game.

                 </p>
                 <p> • Với dung lượng RAM 8 GB cùng tốc độ Bus cao được cải thiện lên đến 3200 MHz, phiên bản laptop
                     Acer Aspire lần này có khả năng xử lý hiệu quả và mượt mà hơn đáng kể các tác vụ hàng ngày như
                     duyệt web, làm việc văn phòng và xem phim, nhanh chóng đáp ứng hoạt động chơi game nặng. Điều đáng
                     chú ý là máy còn một khe trống để bạn có thể nâng cấp RAM lên đến 32 GB, tăng khả năng đa nhiệm và
                     xử lý các tác vụ đòi hỏi nhiều tài nguyên hơn một cách hiệu quả.</p>

                 <p> • Máy được trang bị ổ cứng SSD NVMe PCIe dung lượng 512 GB, mang lại tốc độ truy cập dữ liệu và
                     thời gian khởi động nhanh chóng. Ngoài ra, khả năng nâng cấp dung lượng lưu trữ của máy với việc
                     tháo lắp và sử dụng khe cắm SSD M.2 PCIe mở rộng có thể lên tối đa tận 4 TB.</p>

                 <p>• Màn hình laptop Acer tận dụng tối đa diện tích màn hình giúp hiển thị và tạo cảm giác mở rộng
                     không gian với kích thước 15.6 inch viền hẹp và độ phân giải Full HD mang đến hình ảnh rõ ràng và
                     sắc nét hơn bao giờ hết.</p>

                 <p>• Máy hỗ trợ tần số quét 144 Hz đem lại nhiều khung ảnh hơn, chuyển động nhanh hơn chuẩn gaming,
                     giúp người dùng tận hưởng trải nghiệm chiến thắng tuyệt vời trong các trận game online căng thẳng.
                 </p>

                 <p>• Laptop sử dụng công nghệ Acer Purified Voice làm giảm tiếng ồn và tối ưu hóa âm thanh. Bên cạnh
                     đó, Acer TrueHarmony giúp cân bằng và cải thiện âm trầm, âm trung và âm cao giúp tái tạo âm thanh
                     chân thực.</p>
             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                 <div class="table-responsive">
                     <table class="table">
                         <tbody>
                             <tr>
                                 <td>
                                     <h5>RAM</h5>
                                 </td>
                                 <td>
                                     <h5>{{ $bs->RAM }}</h5>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <h5>CPU</h5>
                                 </td>
                                 <td>
                                     <h5>{{ $bs->CPU }}</h5>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <h5>Dia</h5>
                                 </td>
                                 <td>
                                     <h5>{{ $bs->Dia }}</h5>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <h5>Màu sắc</h5>
                                 </td>
                                 <td>
                                     <h5>{{ $bs->Mausac }}</h5>
                                 </td>
                             </tr>
                             <tr>
                                 <td>
                                     <h5>Cân nặng</h5>
                                 </td>
                                 <td>
                                     <h5>{{ $bs->Cannang }}</h5>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="comment_list">
                             <div class="review_item">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-1.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <h5>12th Feb, 2018 at 05:56 pm</h5>
                                         <a class="reply_btn" href="#">Reply</a>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                             <div class="review_item reply">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-2.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <h5>12th Feb, 2018 at 05:56 pm</h5>
                                         <a class="reply_btn" href="#">Reply</a>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                             <div class="review_item">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-3.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <h5>12th Feb, 2018 at 05:56 pm</h5>
                                         <a class="reply_btn" href="#">Reply</a>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="review_box">
                             <h4>Post a comment</h4>
                             <form class="row contact_form" action="/cmt" method="post"
                                 id="contactForm" novalidate="novalidate">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <input type="text" class="form-control" id="name" name="name"
                                             placeholder="Your Full name" value="{{ Auth::user()->name }}">
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <input type="email" class="form-control" id="email" name="email"
                                             placeholder="Email Address" value="{{ Auth::user()->email }}">
                                     </div>
                                 </div>

                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12 text-right">
                                     <button type="submit" value="submit" class="btn primary-btn">Bình luận</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="row total_rate">
                             <div class="col-6">
                                 <div class="box_total">
                                     <h5>Overall</h5>
                                     <h4>4.0</h4>
                                     <h6>(03 Reviews)</h6>
                                 </div>
                             </div>
                             <div class="col-6">
                                 <div class="rating_list">
                                     <h3>Based on 3 Reviews</h3>
                                     <ul class="list">
                                         <li><a href="#">5 Star <i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                         <li><a href="#">4 Star <i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                         <li><a href="#">3 Star <i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                         <li><a href="#">2 Star <i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                         <li><a href="#">1 Star <i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i><i
                                                     class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div class="review_list">
                             <div class="review_item">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-1.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                             <div class="review_item">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-2.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                             <div class="review_item">
                                 <div class="media">
                                     <div class="d-flex">
                                         <img src="img/product/review-3.png" alt="">
                                     </div>
                                     <div class="media-body">
                                         <h4>Blake Ruiz</h4>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
                                     </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                     incididunt ut labore et
                                     dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                     laboris nisi ut aliquip ex ea
                                     commodo</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6">
                         <div class="review_box">
                             <h4>Add a Review</h4>
                             <p>Your Rating:</p>
                             <ul class="list">
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                                 <li><a href="#"><i class="fa fa-star"></i></a></li>
                             </ul>
                             <p>Outstanding</p>
                             <form class="row contact_form" action="contact_process.php" method="post"
                                 id="contactForm" novalidate="novalidate">
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <input type="text" class="form-control" id="name" name="name"
                                             placeholder="Your Full name" onfocus="this.placeholder = ''"
                                             onblur="this.placeholder = 'Your Full name'">
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <input type="email" class="form-control" id="email" name="email"
                                             placeholder="Email Address" onfocus="this.placeholder = ''"
                                             onblur="this.placeholder = 'Email Address'">
                                     </div>
                                 </div>

                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <textarea class="form-control" name="message" id="message" rows="1" placeholder="Review"
                                             onfocus="this.placeholder = ''" onblur="this.placeholder = 'Review'"></textarea></textarea>
                                     </div>
                                 </div>
                                 <div class="col-md-12 text-right">
                                     <button type="submit" value="submit" class="primary-btn">Submit Now</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--================End Product Description Area =================-->

 <!-- Start related-product Area -->
 <section class="related-product-area section_gap_bottom">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6 text-center">
                 <div class="section-title">
                     <h1>Deals of the Week</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                         labore et dolore
                         magna aliqua.</p>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9">
                 <div class="row">
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r1.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r2.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r3.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r5.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r6.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6 mb-20">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r7.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r9.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r10.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                         <div class="single-related-product d-flex">
                             <a href="#"><img src="img/r11.jpg" alt=""></a>
                             <div class="desc">
                                 <a href="#" class="title">Black lace Heels</a>
                                 <div class="price">
                                     <h6>$189.00</h6>
                                     <h6 class="l-through">$210.00</h6>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3">
                 <div class="ctg-right">
                     <a href="#" target="_blank">
                         <img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
