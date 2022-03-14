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
    @include ('assets/component/loader')
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            About
        </div>
        <div class="right">
            <!-- <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">


        <div class="section full text-center pt-3 pb-1">
            <img src="{{ secure_asset('img/logo.png'); }}" alt="image" class="pt-2 imaged w-50 square">
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">เกี่ยวกับเรา</h2>
                    Finapp is Bootstrap 5 based template for your wallet, banking, financial mobile projects.
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Learn More</h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis iaculis aliquet. Duis euismod
                    nibh at neque gravida tincidunt. Nunc vitae fringilla augue. Nunc blandit tempor enim porttitor
                    bibendum. In ac blandit quam. Quisque laoreet ligula eu commodo cursus. In efficitur convallis
                    felis.
                </div>
            </div>
        </div>

        <div class="section full mt-3">

            <!-- carousel single -->
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <img src="{{ secure_asset('img/sample/photo/wide1.jpg'); }}" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="{{ secure_asset('img/sample/photo/wide2.jpg'); }}" alt="alt" class="imaged w-100">
                        </li>

                        <li class="splide__slide">
                            <img src="{{ secure_asset('img/sample/photo/wide3.jpg'); }}" alt="alt" class="imaged w-100">
                        </li>

                    </ul>
                </div>
            </div>
            <!-- * carousel single -->

        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">มีคำถาม ?</h2>
                    <p>
                        โปรดติดต่อเราหากมีปัญหาใดๆ เราจะติดต่อกลับโดยเร็วที่สุด</p>
                    <a href="contact" class="btn btn-primary">
                        <ion-icon name="mail-open-outline"></ion-icon> Contact
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>