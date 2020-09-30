@extends('layout.page')
@section('title','Liên Hệ - Jadusona Thế giới cho bé')
@section('content')
<!-- Page Section Start -->
<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row row-30">

               <div class="contact-info-wrap col-md-6 col-12 mb-40">
                   <h3>Jadusona Store</h3>
                   <p>Nhịp sống hiện đại ngày càng ảnh hưởng đến lối sống của mọi tầng lớp xã hội. Trong đó, giới trẻ là những người chịu ảnh hưởng nhiều nhất của lối sống mới này. Trong một cuộc điều tra nhỏ về nhu cầu mua sắm và chăm chút cho vẻ bề ngoài xinh đẹp của giới nữ thì có tới 99% cho kết quả thuận. Bởi vì đời sống ngày càng phát triền, những bộ trang phục và theo đó những phụ kiện đi kèm, có thể nói lên phong cách và cá tính rất riêng của họ. Chúng tôi hiểu và đã cho ra đời website: jasudona.com</p>
                   <ul class="contact-info">
                       <li>
                           <i class="fa fa-map-marker"></i>
                           <p>256, 1st AVE, You address <br>will be here</p>
                       </li>
                       <li>
                           <i class="fa fa-phone"></i>
                           <p><a href="#">+01 235 567 89</a><a href="#">+01 235 286 65</a></p>
                       </li>
                       <li>
                           <i class="fa fa-globe"></i>
                           <p><a href="#">info@example.com</a><a href="#">www.example.com</a></p>
                       </li>
                   </ul>
               </div>

               <div class="contact-form-wrap col-md-6 col-12 mb-40">
                   <h3>Ý Kiến Góp Ý</h3>
                   <form  id="contact-form" action="assets/php/mail.php">
                       <div class="contact-form">
                           <div class="row">
                               <div class="col-lg-6 col-12 mb-30"><input type="text" name="name" placeholder="Tên của bạn"></div>
                               <div class="col-lg-6 col-12 mb-30"><input type="email" name="email" placeholder="Địa chỉ email"></div>
                               <div class="col-12 mb-30"><textarea name="message" placeholder="Ý kiến"></textarea></div>
                               <div class="col-12"><input type="submit" value="Gửi"></div>
                           </div>
                       </div>
                   </form>
                   <p class="form-messege"></p>
               </div>

            </div>
        </div>
    </div><!-- Page Section End -->
@endsection