@extends('layout.page')
@section('title','Shop - Jadusona Thế giới cho bé')
@section('content')
<div class="container">

            <div class="row">
                <div class="section-title text-center col mb-30">
                    <h1>Sản phẩm của chúng tôi</h1>
                    <div class="col order-3 text-center order-lg-2 main-menu">
                    <nav>
                    <ul class="">
                    @foreach($category as $item)
                    <li><a href="shop/{{ $item->id_cate }}">{{ $item->name_cate }}</a></li>
                    @endforeach
                    </ul>
                    </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($product as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">
                    <div class="product-item">
                        <div class="product-inner">
                            <div class="image">
                                <img src="{{ $item->img }}" alt="">
                                <div class="image-overlay">
                                    <div class="action-buttons">
                                        <a href="shop/ {{$item->id_product}}">Chi Tiet</a>
                                    </div>
                                </div>
                            </div>
                            <div class="content">
                                <div class="content-left">
                                    <h2 class="title"><a href="#">{{ $item->ten }}</a></h2>
                                    <h3><b class="price text-success text-center">{{ $item->gia ."  " }}VND</b></h3><br/>
                                    <h4><del class="text-danger">{{ ($item->gia)+10000 }}</del>VND</h4></br>
                                    <span></span></br>
                                    <span></span></br>
                                    <span></span></br>
                                    <span></span></br>
                                </div>
                                <div class="content-right">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
<!-- END product -->

@endsection