@extends('Frontend.layouts.master')
@section('main-content')

<!-- Page Contain -->
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <!--Block 03: Product Tab-->
        <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
            <div class="container">
                <div class="biolife-title-box">
                    <h3 class="main-title">District <?php echo $_GET["dis"]; ?></h3>
                </div>
                <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                    <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                        <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                            <li class="tab-element active">
                                <!-- <a href="#tab01_1st" class="tab-link">VAN</a> -->
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab01_1st" class="tab-contain active">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                            <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="../detailcar?id=6" class="link-to-product">
                                                <img src="assets/images/fan/fan1.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Fan 1</b>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>24.46</span></ins>
                                            
                                            </div>
                                            <div class="slide-down-box">
                                                
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="../detailcar?id=6" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Read More</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                                <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="../detailcar?id=5" class="link-to-product">
                                                <img src="assets/images/cfl/cfl2.png" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href=""><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">CFL 2</b>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>248.08</span></ins>
                                                
                                            </div>
                                            <div class="slide-down-box">
                                                
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="../detailcar?id=5" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Read More</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="../detailcar?id=4" class="link-to-product">
                                                <img src="assets/images/geysers/geysers3.png" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Geyser 3</b>
                                            
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>248.08</span></ins>
                                                
                                            </div>
                                            <div class="slide-down-box">
                                                
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="../detailcar?id=4" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Read More</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="../detailcar?id=4" class="link-to-product">
                                                <img src="assets/images/cfl/cfl1.png" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">CFL 1</b>
                                            
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>234.46</span></ins>
                                                
                                            </div>
                                            <div class="slide-down-box">
                                                
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="../detailcar?id=4" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Read More</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        

        
        <!--Block 06: Products-->
<!--         <div class="Product-box sm-margin-top-150px xs-margin-top-200">
            <div class="container">
                <div class="row">
                
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <div class="advance-product-box">
                            <div class="biolife-title-box bold-style biolife-title-box__bold-style">
                                <h3 class="title">Top Rated Products</h3>
                            </div>
                            <ul class="products biolife-carousel eq-height-contain nav-center-03 nav-none-on-mobile row-space-29px" data-slick='{"rows":2,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":2,"responsive":[{"breakpoint":1200,"settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":992, "settings":{ "rows":2, "slidesToShow": 1}},{"breakpoint":768, "settings":{ "rows":2, "slidesToShow": 2}},{"breakpoint":500, "settings":{ "rows":2, "slidesToShow": 1}}]}'>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-03/po3.png" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            
                                            <h4 class="product-title"><a href="#" class="pr-name">Panamera Platinum Edition</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>253914.60</span></ins>
                                                
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(06 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-03/po2.png" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            
                                            <h4 class="product-title"><a href="../detail" class="pr-name">718 Boxster Style Edition</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>185357.56</span></ins>
                                                
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-03/me3.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            
                                            <h4 class="product-title"><a href="#" class="pr-name">Mercedes-Maybach S650 Pullman 2019</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">€</span>500.000</span></ins>
                                                
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item">
                                    <div class="contain-product right-info-layout contain-product__right-info-layout">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/home-03/me2.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            
                                            <h4 class="product-title"><a href="#" class="pr-name">Mercedes S550</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">$</span>41300.30</span></ins>
                                                
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 -->

    </div>

</div>
@endsection