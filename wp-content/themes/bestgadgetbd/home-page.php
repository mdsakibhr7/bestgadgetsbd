<?php

/*
Template Name: Home
*/

get_header();
?>


<!-- banner slider start -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-3">
                <img src="<?= get_stylesheet_directory_uri() . '/images/banner1.svg'; ?>" alt="Main Logo">
            </div>
            <div class="col-md-7 mb-4">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/slider.svg'; ?>" class="d-block w-100" alt="slider">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/slider.svg'; ?>" class="d-block w-100" alt="slider">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/slider.svg'; ?>" class="d-block w-100" alt="slider">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="banner-bt-content1">
                    <h2>Xiaomi Poco <br>X5 Pro</h2>
                    <p>BDT 161,999 / 128GB</p>
                    <a href="#" class="bgbd-btn">Shop Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-bt-content2">
                    <h2>Xiaomi Poco <br>X5 Pro</h2>
                    <p>BDT 161,999 / 128GB</p>
                    <a href="#" class="bgbd-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- banner bottom end -->

<!--  trending start  -->

<div class="trending-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="trending-content">
                    <h2 class="trending-tittle">Trending Devices</h2>
                    <div class="trending-filter">
                        <div class="select-trending-box">
                            <span>Display:</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="22" viewBox="0 0 52 22" fill="none">
                                <rect width="22" height="22" fill="#ED4923"/>
                                <rect x="5" y="5" width="5" height="5" fill="white"/>
                                <rect x="5" y="12" width="5" height="5" fill="white"/>
                                <rect x="12" y="5" width="5" height="5" fill="white"/>
                                <rect x="12" y="12" width="5" height="5" fill="white"/>
                                <rect x="37" y="5" width="3" height="3" fill="#00051E"/>
                                <rect x="42" y="5" width="10" height="3" fill="#00051E"/>
                                <rect x="37" y="10" width="3" height="3" fill="#00051E"/>
                                <rect x="42" y="10" width="10" height="3" fill="#00051E"/>
                                <rect x="37" y="15" width="3" height="3" fill="#00051E"/>
                                <rect x="42" y="15" width="10" height="3" fill="#00051E"/>
                            </svg>
                            <div class="dropdown">
                                <button class="dropbtn">Date (default) <span class="chevron">&#9660;</span></button>
                                <div class="dropdown-content">
                                    <a href="#">Option 1</a>
                                    <a href="#">Option 2</a>
                                    <a href="#">Option 3</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">Select Brands <span class="chevron">&#9660;</span></button>
                                <div class="dropdown-content">
                                    <a href="#">Option 4</a>
                                    <a href="#">Option 5</a>
                                    <a href="#">Option 6</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button class="dropbtn">Filters <span class="chevrons">&#9660;</span></button>
                                <div class="dropdown-content">
                                    <a href="#">Option 7</a>
                                    <a href="#">Option 8</a>
                                    <a href="#">Option 9</a>
                                </div>
                            </div>
                        </div>
                        <!-- no of product showing display -->
                        <div class="no-of-product">
                            <h5>Showing 12 phones out of 145</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="trending-product-box">
                    <div class="trending-product-image">
                        <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                    </div>
                    <div class="trending-mobile-future-content">
                        <h3 class="trending-title">iPhone 12 pro</h3>
                        <div class="trending-price">BDT 161,999 / 128GB</div>
                        <button class="trending-product-button">View Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 all-view">
                <button class="btn ">All view
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
                        <path d="M1 1L6 6L1 11" stroke="white" stroke-width="1.5"/>
                        <path d="M7 1L12 6L7 11" stroke="white" stroke-width="1.5"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<!--  trending end  -->

<!-- Latest Phones Section -->
<div class="container">
    <div class="bgbd-latest-phone">
        <div class="row">
            <!-- Left Column (8 columns wide) -->
            <div class="col-md-8 mb-4">
                <div class="latest-phone-content1">
                    <p>Get 20% Off on All Phones</p>
                    <h2>Vivo Y21A <br> Smartphone 2023</h2>
                    <a href="#" class="bgbd-btn">Shop Now</a>
                </div>
            </div>
            <!-- Right Column (4 columns wide) -->
            <div class="col-md-4">
                <div class="latest-phone-content2">
                    <p>Get 35% Off</p>
                    <h2>Oneplus Nord N10</h2>
                    <a href="#" class="bgbd-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Latest Phones Section -->


<!--  arrival start  -->
<div class="section-arrival">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="arrival-tittle d-flex justify-content-between">
                    <h2>New Arrivals</h2>
                    <div class="arr-btn-cnt d-flex">
                        <button id="ct-js-box-slider--prev" class="pull-right slick-arrow arr-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                <path d="M9 15L2 8L9 1" stroke="black" stroke-width="2"/>
                            </svg>
                        </button>

                        <button id="ct-js-box-slider--next" class="pull-right slick-arrow arr-btn ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
                                <path d="M1 1L8 8L1 15" stroke="white" stroke-width="2"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ct-box-slider ct-js-box-slider">
            <div class="arrival-item">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrival-item">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="arrival-product-grid">
                            <div class="arrival-product-thumb">
                                <img src="<?= get_stylesheet_directory_uri() . '/images/iphone.png'; ?>" alt="Slider Image 2">
                            </div>
                            <div class="arrival-future-content">
                                <h3>Symphony Z40</h3>
                                <p>BDT 161,999 / 128GB</p>
                                <div class="cart-btn">
                                    <a href="">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  arrival end  -->

<!--  Latest News start -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="lates-news-tittle">
                <h2>Latest News</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="lates-news">
                <div class="news-thumb">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/news.jpg'; ?>" alt="Main Logo">
                </div>
                <div class="lates-news-content">
                    <div class="views">
                        <div class="date">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>February 4, 2023</span>
                        </div>
                        <div class="comment">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>10 Comment</span>
                        </div>
                    </div>
                    <h3>Samsung Galaxy S23 review is out, check the full specifications and features too</h3>
                    <p>An Update on the Samsung Galaxy Tab S9 Series’ Upcoming Release: The Galaxy Tab S9 FE+ has arrived With the…</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="lates-news">
                <div class="news-thumb">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/news.jpg'; ?>" alt="Main Logo">
                </div>
                <div class="lates-news-content">
                    <div class="views">
                        <div class="date">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>February 4, 2023</span>
                        </div>
                        <div class="comment">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>10 Comment</span>
                        </div>
                    </div>
                    <h3>Samsung Galaxy S23 review is out, check the full specifications and features too</h3>
                    <p>An Update on the Samsung Galaxy Tab S9 Series’ Upcoming Release: The Galaxy Tab S9 FE+ has arrived With the…</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="lates-news">
                <div class="news-thumb">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/news.jpg'; ?>" alt="Main Logo">
                </div>
                <div class="lates-news-content">
                    <div class="views">
                        <div class="date">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>February 4, 2023</span>
                        </div>
                        <div class="comment">
                            <img src="<?= get_stylesheet_directory_uri() . '/images/date.svg'; ?>" alt="Main Logo">
                            <span>10 Comment</span>
                        </div>
                    </div>
                    <h3>Samsung Galaxy S23 review is out, check the full specifications and features too</h3>
                    <p>An Update on the Samsung Galaxy Tab S9 Series’ Upcoming Release: The Galaxy Tab S9 FE+ has arrived With the…</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Latest News end -->


<!-- news latter start-->

<?php get_template_part( 'templates-parts/news-letter' ); ?>

<!-- news latter end-->


<!--popular brands start-->
<?php get_template_part( 'templates-parts/popular-brand' ); ?>
<!--popular brands end -->


<?php
get_footer();
?>




		
