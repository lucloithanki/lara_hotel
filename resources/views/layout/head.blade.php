<!-- Header Section Start -->
<div class="header-section section">

<!-- Header Top Start -->
<div class="header-top header-top-one bg-theme-two">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">

            <div class="col mt-10 mb-10 d-none d-md-flex">
                <!-- Header Top Left Start -->
                <div class="header-top-left">
                    <p>Chào mừng bạn đến với JASU Baby+Store</p>
                    <p>Hotline: <a href="tel:0123456789">0123 456 789</a></p>
                </div><!-- Header Top Left End -->
            </div>

            <div class="col mt-10 mb-10">
                <!-- Header Language Currency Start -->
                <ul class="header-lan-curr">

                    <li><a href="#">VN</a>
                        <ul>
                            <li><a href="#">tiếng việt</a></li>
                        </ul>
                    </li>

                    <li><a href="#">VN</a>
                        <ul>
                            <li><a href="#">Việt Nam Đồng</a></li>
                        </ul>
                    </li>

                </ul><!-- Header Language Currency End -->
            </div>

            <div class="col mt-10 mb-10">
                <!-- Header Shop Links Start -->
                <div class="header-top-right">
                    <!-- <p><a href="#">My Account</a></p> -->
                    <p><a href="{{ route('dang-nhap') }}">Đăng Nhập</a><a href="{{ route('dang-ky') }}">Đăng Ký</a></p>

                </div><!-- Header Shop Links End -->
            </div>

        </div>
    </div>
</div><!-- Header Top End -->

<!-- Header Bottom Start -->
<div class="header-bottom header-bottom-one header-sticky@">
    <div class="container-fluid">
        <div class="row menu-center align-items-center justify-content-between">

            <div class="col mt-15 mb-15">
                <!-- Logo Start -->
                <div class="header-logo">
                    <a href="{{ route('/') }}">
                        <img src="assets/images/logo.png" alt="Jadusona">
                    </a>
                </div><!-- Logo End -->
            </div>

            <div class="col order-2 order-lg-3">
                <!-- Header Advance Search Start -->
                <div class="header-shop-links">

                    <div class="header-search">
                        <button class="search-toggle"><img src="assets/images/icons/search.png" alt="Search Toggle"><img class="toggle-close" src="assets/images/icons/close.png" alt="Search Toggle"></button>
                        <div class="header-search-wrap">
                            <form action="#">
                                <input type="text" placeholder="Type and hit enter">
                                <button><img src="assets/images/icons/search.png" alt="Search"></button>
                            </form>
                        </div>
                    </div>
<!-- 
                    <div class="header-mini-cart">
                        <a href="cart.html"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02($250)</span></a>
                    </div> -->

                </div><!-- Header Advance Search End -->
            </div>

            <div class="col order-3 order-lg-2">
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="active"><a href="index.html">HOME</a></li>
                            <li><a href="shop.html">Shop now</a>
                                <ul class="sub-menu"> 
                                    <li><a href="#">Bé uống</a></li>
                                    <li><a href="#">Bé ăn dặm </a></li>
                                    <li><a href="#">Bé chơi & học</a></li>
                                    <li><a href="#">Bé mặc</a></li>
                                    <li><a href="#">Bé vệ sinh</a></li>
                                    <li><a href="#">Bé khỏe & an toàn</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="blog.html">BLOG</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                </ul>
                            </li> -->
                            <li><a href="{{ route('lien-he') }}">Liên Hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu order-12 d-block d-lg-none col"></div>

        </div>
    </div>
</div><!-- Header BOttom End -->
</div><!-- Header Section End -->
