@extends('layout.page')
@section('title','Jadusona Thế giới cho bé')
@section('content')
<!-- Feature Section Start -->
<div class="feature-section section bg-theme-two pt-65 pt-lg-55 pt-md-45 pt-sm-45 pt-xs-25 pb-65 pb-lg-55 pb-md-45 pb-sm-45 pb-xs-25 fix" style="background-image: url({{ asset('assets/assets/images/pattern/pattern-dot.png') }});">
        <div class="container">
            <div class="feature-wrap row justify-content-between">

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="assets/images/feature/feature-1.png" alt=""></div>
                        <div class="content">
                            <h3>Miến phí mọi đơn hàng</h3>
                            <p>* Áp dụng bán kính < 11km</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="assets/images/feature/feature-2.png" alt=""></div>
                        <div class="content">
                            <h3>Chính sách hoàn tiền cho thành viên thân thiết</h3>
                            <p>Hoàn tiền từ 10%-90%</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-12 mt-15 mb-15">
                    <div class="feature-item text-center">

                        <div class="icon"><img src="assets/images/feature/feature-3.png" alt=""></div>
                        <div class="content">
                            <h3>Bảo mật thông tin</h3>
                            <p>Số 1 hiện nay</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!-- Feature Section End -->

   <!-- Product Section Start -->
   <div class="product-section section mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
   <br/>
        <div class="container">

            <div class="row">
                <div class="section-title text-center col mb-30">
                    <h1>Sản Phẩm Thịnh Hành</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">
                    <div class="product-item">
                        <div class="product-inner">
                            <div class="image">
                                <img src="https://lorempixel.com/640/480" alt="">

                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <button>Chọn</button>
                                        <button>add to wishlist</button>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="content-left">
                                    <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>
                                    <h5 class="color">Kho_> </h5>
                                    <h5 class="color">Danh mục_> </h5>
                                </div>

                                <div class="content-right">
                                <del class="price">$25</del>
                                <span class="price">$25</span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div><!-- Product Section End -->
    
    

    @endsection