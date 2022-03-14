<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    @include ('assets/component/link-style')
</head>

<body>

    <!-- loader -->
    <!-- <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <a href="/">
                <img src="{{ secure_asset('img/logo.png'); }}" alt="logo" class="logo">
            </a>
        </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- title header -->
        <div class="section full gradientSection">
            <div class="in coin-head">
                <h1 class="total pt-5 mt-5">สินค้าและบริการแนะนำ</h1>
                <!-- <h4 class="caption">
                    <span class="iconbox text-success">
                        <ion-icon name="caret-up"></ion-icon>
                    </span>
                    $2,325.19 <strong>(+1.50%)</strong>
                </h4> -->
            </div>
        </div>
        <!-- * title header -->

        <!-- carousel -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ secure_asset('img/carousel1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ secure_asset('img/carousel2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ secure_asset('img/carousel3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- * carousel -->

        <!-- Order Recommend -->
        <div class="section full mt-4">
            <div class="section-heading padding">
                <h2 class="title">บริการแนะนำ</h2>
            </div>
            <!-- carousel multiple -->
            <div class="carousel-multiple splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <div class="bill-box">
                                <div class="img-wrapper py-1">
                                    <img src="https://khaydi.com/public/uploads/all/DCEVUnZYT9g59mjNRSCguoy63gUewgFa0J7BwJNb.png" alt="img" class="image-block imaged w-75">
                                </div>
                                <h4 class="">KHAYDI</h4>
                                <p>ซื้อขายสินค้า เลือกช็อปได้ที่นี่</p>
                                <a href="https://khaydi.com/" target="_blank" class="btn btn-primary btn-block btn-sm">เข้าสู่เว็บไซต์</a>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="bill-box">
                                <div class="img-wrapper">
                                    <img src="https://r.mobirisesite.com/180778/assets/images/drop-point-2-500x500.png?v=1NcEht" alt="img" class="image-block imaged w-75">
                                </div>
                                <h4 class="">SMA DROPPOINT</h4>
                                <p>บริการฝากส่งพัดดุในเรทอัตราที่ถูกมาก เข้ารับของถึงที่ หรือนำของมาส่งกับเรา</p>
                                <a href="https://www.smacorporation.com/sendpack" target="_blank" class="btn btn-primary btn-block btn-sm">เข้าสู่เว็บไซต์</a>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="bill-box">
                                <div class="img-wrapper py-1">
                                    <img src="https://smadropship.com/assets/uploads/logos/sma2.png" alt="img" class="image-block imaged w-100">
                                </div>
                                <h4 class="">SMA DROPSHIP</h4>
                                <p>ตัวแทนทำดรอปชิป DROPSHIP ผ่านระบบ SMADROPSHIP เชื่อมต่อง่าย & เผยแพร่สินค้าไปยัง LAZADA & SHOPEE</p>
                                <a href="https://async.smadropship.com/service.html" class="btn btn-primary btn-block btn-sm">เข้าสู่เว็บไซต์</a>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="bill-box">
                                <div class="img-wrapper py-1">
                                    <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/v1433187297/xjg9phknabrfgpc0rnwt.png" alt="img" class="image-block imaged w-50">
                                </div>
                                <h4 class="">SMA DROPOFF</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi nobis consectetur in?</p>
                                <a href="{{ url('/dropoff') }}" class="btn btn-primary btn-block btn-sm">เข้าสู่เว็บไซต์</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- * carousel multiple -->
        </div>
        <!-- * Order Recommend -->

        <!-- สินค้าแนะนำ -->
        <div class="section full my-5 pb-5">
            <div class="section-heading padding">
                <h2 class="title">สินค้าแนะนำ</h2>
            </div>
            <!-- carousel small -->
            <div class="carousel-small splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar2.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Jurrien</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar3.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Elwin</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar4.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Alma</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar5.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Justine</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar6.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Maria</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar7.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Pamela</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar8.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Neville</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar9.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Alex</strong>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide">
                            <a href="#">
                                <div class="user-card">
                                    <img src="{{ secure_asset('img/sample/avatar/avatar10.jpg') }}" alt="img" class="imaged w-100">
                                    <strong>Stina</strong>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel small -->
        </div>
        <!-- * สินค้าแนะนำ -->

    </div>
    <!-- * App Capsule -->

    @if (Auth::check())
    <div class=""></div>
    @else
    <div class="fixed-bottom pb-5 mb-5">
        <div class="row text-center">
            <div class="col">
                <a type="button" href="login" class="btn btn-lg w-75 btn-primary">
                    เข้าสู่ระบบ
                </a>
            </div>
            <div class="col">
                <a type="button" href="register" class="btn btn-lg w-75 btn-primary">
                    สมัครสมาชิก
                </a>
            </div>
        </div>
    </div>
    @endif

    <!-- App Bottom Menu -->
    @include ('assets/component/bottomComponent')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">

            <!-- sidebar body -->
            @include ('assets/component/drawer')
            <!-- sidebar body -->

        </div>
    </div>
    <!-- * App Sidebar -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')

</body>

</html>