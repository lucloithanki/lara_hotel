<!-- Hero Section Start -->
<div class="hero-section section">
    <!-- Hero Slider Start -->
<div class="hero-slider hero-slider-two fix">
    @foreach( $slider as $item  )
    <!-- Hero Item Start -->
    <div class="hero-item" style="background-image: url({{ $item->anh }})">

<!-- Hero Content -->
<div class="hero-content">

    <!-- <h1>Get 35% off <br>Latest Baby Product</h1> -->
    <!-- <a href="#">SHOP NOW</a> -->

</div>

</div><!-- Hero Item End -->
    @endforeach
    </div><!-- Hero Slider End -->
</div><!-- Hero Section End -->