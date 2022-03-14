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
        <img src="" alt="icon" class="loading-icon">
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
            <!-- <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">4</span>
            </a> -->
            <!-- <a href="settings" class="headerButton">
                <ion-icon name="settings-outline"></ion-icon>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- ==================================== login ==================================== -->
    @if (Auth::check())
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">ยอดเงินปัจจุบัน</span>
                        <h1 class="total">$ 2,100.50</h1>
                    </div>
                    <div class="right">
                        <a href="#" class="button" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                            <ion-icon name="add-outline"></ion-icon>
                        </a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <strong>ฝาก</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <strong>ถอน</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="app-cards.html" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <strong>โอน</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="swap-vertical"></ion-icon>
                            </div>
                            <strong>แลกเปลี่ยน</strong>
                        </a>
                    </div>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Deposit Action Sheet -->
        <div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @include ('assets/component/modal-deposit-header')
                    </div>
                    <div class="modal-body">
                        @include ('assets/component/modal-deposit-body')
                    </div>
                </div>
            </div>
        </div>
        <!-- * Deposit Action Sheet-->

        <!-- Withdraw Action Sheet -->
        <div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @include ('assets/component/modal-withdraw-header')
                    </div>
                    <div class="modal-body">
                        @include ('assets/component/modal-withdraw-body')
                    </div>
                </div>
            </div>
        </div>
        <!-- * Withdraw Action Sheet-->

        <!-- Send Action Sheet -->
        <div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @include ('assets/component/modal-send-header')
                    </div>
                    <div class="modal-body">
                        @include ('assets/component/modal-send-body')
                    </div>
                </div>
            </div>
        </div>
        <!-- * Send Action Sheet-->

        <!-- Exchange Action Sheet -->
        <div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        @include ('assets/component/modal-exchange-header')
                    </div>
                    <div class="modal-body">
                        @include ('assets/component/modal-exchange-body')
                    </div>
                </div>
            </div>
        </div>
        <!-- * Exchange Action Sheet -->

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">เงินโอนเข้า</div>
                        <div class="value text-success">$ 552.95</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">โอนเงินออก</div>
                        <div class="value text-danger">$ 86.45</div>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Total Bills</div>
                        <div class="value">$ 53.25</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">Savings</div>
                        <div class="value">$ 120.99</div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- * Stats -->

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">ประวัติการเงิน</h2>
                <a href="app-transactions.html" class="link">View All</a>
            </div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/1.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Amazon</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 150</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/2.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Apple</strong>
                            <p>Appstore Purchase</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">- $ 29</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/avatar/avatar3.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Alex Ljung</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price">+ $ 1,000</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/avatar/avatar4.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Beatriz Brito</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger">- $ 186</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- app footer -->
        <div class="appFooter mt-3">
            <div class="footer-title">
                Copyright © Finapp 2021. All Rights Reserved.
            </div>
            Bootstrap 5 based mobile template.
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->

    <!-- ==================================== not login ==================================== -->
    @else
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="text-center">
                    <div class="p-5">
                        <h3 class="">กรุณาเข้าสู่ระบบเพื่อแสดงยอดเงิน</h3>
                        <a href="login" type="button" class="btn btn-primary">เข้าสู่ระบบ</a>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">
                    <div class="item">
                        <a href="#" data-bs-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อทำรายการ" data-bs-target="#depositActionSheet">
                            <div class="icon-wrapper bg-danger">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <strong>ฝาก</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อทำรายการ" data-bs-target="#withdrawActionSheet">
                            <div class="icon-wrapper">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <strong>ถอน</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อทำรายการ" data-bs-target="#sendActionSheet">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <strong>โอน</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-bs-toggle="tooltip" title="กรุณาเข้าสู่ระบบเพื่อทำรายการ" data-bs-target="#exchangeActionSheet">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="swap-vertical"></ion-icon>
                            </div>
                            <strong>แลกเปลี่ยน</strong>
                        </a>
                    </div>

                </div>
                <!-- * Wallet Footer -->
            </div>
        </div>
        <!-- Wallet Card -->

        <!-- Stats -->
        <div class="section">
            <div class="row mt-2">
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">เงินโอนเข้า</div>
                        <div class="value text-success">$ ---.--</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="stat-box">
                        <div class="title">โอนเงินออก</div>
                        <div class="value text-danger">$ ---.--</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Stats -->

        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">ประวัติการเงิน</h2>
            </div>
            <div class="transactions">
                <div class="card">
                    <div class="card-body text-center">
                        <img class="pt-3 w-25" src="{{ secure_asset('img/no-money.png') }}" alt="">
                        <p class="pt-3">ไม่มีประวัติการทำรายการ</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Transactions -->

        <!-- app footer -->
        <div class="appFooter mt-3">
            <div class="footer-title">
                Copyright © 2015-2025 Smacorporations Co.,Ltd. | All rights reserved
            </div>
            @ 2015 Creats by Team Web Smac, Nadech | All rights reserved
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
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

    <!-- iOS & Android Add to Home Action Sheet -->
    @include ('assets/component/addToHome')
    <!-- iOS & Android Add to Home Action Sheet -->



    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

</body>

</html>