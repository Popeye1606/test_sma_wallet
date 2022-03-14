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

<body class="">

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
            FAQ
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


        <div class="section mt-2 text-center">
            <div class="card">
                <div class="card-body pt-3 pb-3">
                    <!-- <img src="{{ asset('img/loading-icon.png'); }}" alt="image" class="imaged w-25 "> -->
                    <img src="{{ secure_asset('img/logo.png'); }}" alt="image" class="imaged w-50 ">
                    <h2 class="mt-2">มีข้อสงสัยใช่ไหม ? <br> คำถามที่พบบ่อย</h2>
                </div>
            </div>
        </div>

        <div class="section inset mt-2">
            <div class="accordion" id="accordionExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion01">
                            SMA Coin Wallet คืออะไร ?
                        </button>
                    </h2>
                    <div id="accordion01" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Finapp is HTML mobile template for mobile devices.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion02">
                            Is Finapp Bootstrap 5 based?
                        </button>
                    </h2>
                    <div id="accordion02" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Yes. Finapp using Bootstrap 5 css framework.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion03">
                            How can i customize this template?
                        </button>
                    </h2>
                    <div id="accordion03" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Finapp based on HTML, CSS and Vanilla Javascript. That's all. You don't need others. Use
                            your web skills you already known.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion04">
                            Is this template a PWA?
                        </button>
                    </h2>
                    <div id="accordion04" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                        <div class="accordion-body">
                            Yes, Finapp is a PWA (Progressive Web App) ready. You can add it your mobile device's
                            homescreen and use it like an app.
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="section inset mt-2">
            <div class="accordion" id="accordionExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion11">
                            How can i contact you?
                        </button>
                    </h2>
                    <div id="accordion11" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            You can contact us on <a href="https://themeforest.net/item/finapp-wallet-banking-htms-mobile-template/25738217/support" target="_blank">Finapp support tab</a>.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion12">
                            How can i buy this?
                        </button>
                    </h2>
                    <div id="accordion12" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                        <div class="accordion-body">
                            You can buy it on <a href="https://themeforest.net/item/finapp-wallet-banking-htms-mobile-template/25738217" target="_blank">Themeforest</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <h5 class="card-title">ยังมีคำถามอยู่ใช่ไหม ?</h5>
                    <p class="card-text">
                        อย่าลังเลที่จะติดต่อเรา
                    </p>
                    <a href="contact" class="btn btn-dark">
                        <ion-icon name="mail-open-outline"></ion-icon> ติดต่อเรา
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