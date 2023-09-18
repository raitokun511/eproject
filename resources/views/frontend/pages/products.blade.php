@extends('Frontend.layouts.master')
@section('main-content')

<!-- Page Contain -->
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">
        <div class="biolife-title-box">
            <h3 class="main-title">All <?php echo $_GET["name"]; ?></h3>
        </div>
        <div class="brand-slide sm-margin-top-100px background-fafafa xs-margin-top-80px xs-margin-bottom-80px">
            <div class="container">
                
                <div class="tab-head tab-head__icon-top-layout icon-top-layout">
                        <ul class="tabs md-margin-bottom-35-im xs-margin-bottom-40-im">
                        </ul>
                    </div>
                <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}},{"breakpoint":450, "settings":{ "slidesToShow": 1, "slidesMargin":10}}]}'>
                    <li>
                        <div class="biolife-brd-container">
                            <a href="../smallcar" class="link">
                                <figure><img src="assets/images/fan/fan1.jpg" width="140" height="160" alt=""></figure>
                                <h3 class="main-title">Fan</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-brd-container">
                            <a href="http://127.0.0.1:8000/van" class="link">
                                <figure><img src="assets/images/cfl/cfl1.png" width="190" height="150" alt=""></figure>
                                <h3 class="main-title">CFL</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-brd-container">
                            <a href="http://127.0.0.1:8000/sedan" class="link">
                                <figure><img src="assets/images/geysers/geysers3.png" width="140" height="210" alt=""></figure>
                                <h3 class="main-title">Geysers</h3>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="biolife-brd-container">
                            <a href="http://127.0.0.1:8000/jeep" class="link">
                                <figure><img src="assets/images/iron/eiron3.png" width="190" height="150" alt=""></figure>
                                <h3 class="main-title">Electric Iron</h3>
                            </a>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </div>

    </div>

</div>
@endsection