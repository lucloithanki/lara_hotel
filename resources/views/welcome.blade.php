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

                <div class="col-lg-4 col-md-6 col-12 mb-40">

                    <div class="row">
                        <div class="section-title text-left col mb-30">
                            <h1>Giá Sốc</h1>
                            <p>Lựa chọn tốt nhất cho bé</p>
                        </div>
                    </div>

                    <div class="best-deal-slider row">
                        
                        <div class="slide-item col">
                            <div class="best-deal-product">
                                <div class="image"><img src="{{ $topview->img }}" alt=""></div>
                                <div class="content-top">
                                    <div class="content-top-left">
                                        <h4 class="title"><a href="#">{{ $topview->ten }}</a></h4>
                                        </div>
                                    <div class="content-top-right">
                                        <span class="price">{{ $topview->gia }} <del class="old">{{ ($topview->gia)+10000 }}</del></span>
                                    </div>
                                </div>
                                <div class="content-bottom">
                                    <div class="countdown" data-countdown="2020/09/26"></div>
                                    <a href="#" data-hover="SHOP NOW">Chi Tiết</a>
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="slide-item col">
                            <div class="best-deal-product">
                                <div class="image"><img src="assets/images/product/best-deal-2.jpg" alt=""></div>

                                <div class="content-top">

                                    <div class="content-top-left">
                                        <h4 class="title"><a href="#">Kelly Shirt Set</a></h4>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>

                                    <div class="content-top-right">
                                        <span class="price">$09 <span class="old">$25</span></span>
                                    </div>

                                </div>

                                <div class="content-bottom">
                                    <div class="countdown" data-countdown="2019/06/20"></div>
                                    <a href="#" data-hover="SHOP NOW">SHOP NOW</a>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 col-md-6 col-12 pl-50 pl-sm-15 pl-xs-15">

                    <div class="row">
                        <div class="section-title text-left col mb-30">
                            <h1>Tất cả sản phẩm</h1>
                            <p>*Miến phí ship cho 100 đơn hàng đầu tiên trong ngày</p>
                        </div>
                    </div>

                    <div class="small-product-slider row row-7">
                     @foreach($product as $data)   
                        <div class="col mb-40">
                            <div class="on-sale-product">
                                <a href="single-product.html" class="image"><img src="{{ $data->img }}" alt=""></a>
                                <div class="content text-center">
                                    <h4 class="title"><a href="#">{{ $data->ten }}</a></h4>
                                    <span class="price">{{ $data->gia }} VNĐ<span class="old">{{ (($data->gia)+100) }}</span></span>
                                    <span class="">Danh mục {{ $data->name_cate  }} </span>
                                    
                                </div>
                            </div>

                        </div>
                    @endforeach
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Product Section End -->

    <!-- Feature Section Start -->    
    

    @endsection