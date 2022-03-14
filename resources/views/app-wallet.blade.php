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
            <!-- <a href="app-notifications.html" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                <span class="badge badge-danger">8</span>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->


    @if (Auth::check())
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet -->
        <div class="section full gradientSection">
            <div class="in">

                <div class="row">
                    <div class="col">
                        <h5 class="title mb-2">ยอดเงินปัจจุบัน</h5>
                        <h1 class="total">2,562.50</h1>
                        <h4 class="caption">
                            <!-- <span class="iconbox text-success">
                                <ion-icon name="trending-up-outline"></ion-icon>
                            </span> -->
                            บาท
                        </h4>
                    </div>
                    <div class="col">
                        <h5 class="title mb-2">เหรียญปัจจุบัน</h5>
                        <h1 class="total">999</h1>
                        <h4 class="caption">
                            <span class="iconbox text-success">
                                <ion-icon name="trending-up-outline"></ion-icon>
                            </span>
                            0.053205 SMA
                        </h4>
                    </div>
                </div>
                <div class="wallet-inline-button mt-5">
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#depositActionSheet">
                        <div class="iconbox">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                        </div>
                        <strong>ฝาก</strong>
                    </a>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#withdrawActionSheet">
                        <div class="iconbox">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <strong>ถอน</strong>
                    </a>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#sendActionSheet">
                        <div class="iconbox">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <strong>โอน</strong>
                    </a>
                    <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#exchangeActionSheet">
                        <div class="iconbox">
                            <ion-icon name="swap-vertical-outline"></ion-icon>
                        </div>
                        <strong>แลกเปลี่ยน</strong>
                    </a>
                </div>
            </div>
        </div>
        <!-- * Wallet -->


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

        <!-- Action Sheet Watchlist -->
        <div class="modal fade action-sheet" id="actionSheetWatchlist" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">BTC/USD</h5>
                        <h3 class="text-center mb-05 fontsize-headingLarge text-success">$38,509.44</h3>
                        <div class="text-muted text-center mb-1 fontsize-caption">Added 28 days ago</div>
                    </div>

                    <div class="modal-body">
                        <ul class="action-button-list">
                            <li>
                                <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                    <span>Buy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                    <span>Sell</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                    <span>Remove from List</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-list" data-bs-dismiss="modal">
                                    <span>Hide from List</span>
                                </a>
                            </li>
                            <li class="action-divider"></li>
                            <li>
                                <a href="#" class="btn btn-list text-danger" data-bs-dismiss="modal">
                                    <span>Close</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- * Action Sheet Watchlist -->


        <!-- Transactions -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">ประวัติการเพิ่ม Coin</h2>
                <a href="transactions" class="link">ดูทั้งหมด</a>
            </div>
            <div class="card">
                <ul class="listview flush transparent no-line image-listview detailed-list mt-1 mb-1">
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-success">
                                <ion-icon name="arrow-up-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>scb_4018471524</strong>
                                    <div class="text-small text-secondary">พงษ์ กุล</div>
                                </div>
                                <div class="text-end">
                                    <strong>99.00 บาท</strong>
                                    <div class="text-small">
                                        08/01/2022 15:46
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box bg-warning">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>
                                    <strong>scb_4018471524</strong>
                                    <div class="text-small text-secondary">พงษ์ กุล</div>
                                </div>
                                <div class="text-end">
                                    <strong>50.00 บาท</strong>
                                    <div class="text-small">
                                        27/12/2021 16:01
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                    <!-- item -->
                    <li>
                        <a href="#" class="item">
                            <div class="icon-box">
                                <img src="{{ secure_asset('img/sample/avatar/avatar4.jpg'); }}" alt="image" class="imaged rounded w36">
                            </div>
                            <div class="in">
                                <div>
                                    <strong>scb_4018471524</strong>
                                    <div class="text-small text-secondary">พงษ์ กุล</div>
                                </div>
                                <div class="text-end">
                                    <strong>11.00 บาท</strong>
                                    <div class="text-small">
                                        25/12/2021 16:59
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- * item -->
                </ul>
            </div>
        </div>
        <!-- Transactions -->


        <!-- Slider -->
        <div class="section mt-4">
            <div class="section-heading">
                <h2 class="title">ช่องทางการโอน</h2>
                <!-- <a href="crypto-transactions.html" class="link">ดูทั้งหมด</a> -->
            </div>
            <div class="carousel-single splide">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <div class="card card-with-icon">
                                <div class="card-body pt-3 pb-3 text-center">
                                    <div class="card-icon bg-success mb-2">
                                        <img src="{{ secure_asset('img/scb-logo.png'); }}" width="65" alt="">
                                        <!-- <ion-icon name="link"></ion-icon> -->
                                    </div>
                                    <h2 class="card-titlde mb-1">SCB</h2>
                                    <h3 class="card-titlde mb-3">ธนาคารไทยพาณิชย์</h3>

                                    <h5 style="color: gray;">เลขที่บัญชี : 4018471524</h5>
                                    <h5 style="color: gray;">ชื่อบัญชี : สุรติพงษ์ กุลโชติ</h5>
                                    <hr>
                                    <p>เพิ่ม Coin เงินออนไลน์ด้วย QR Code ธนาคาร 500-50,000 บาท
                                        หากต้องการยอดอื่นกรอกเลขที่ บัญชีด้านบน</p>

                                    <p class="mt-1">ชำระเงินทันทีที่เรายืนยันธุรกรรมเมื่อคุณชำระเงินในแอปพลิเคชันรหัส QR
                                        สำเร็จ</p>
                                    <img src="https://smadropship.com/assets/images/bankicon/scbppt.jpg" width="75%" alt="">
                                    <!-- <div class="row">
                                        <div class="col">
                                            <a href="#" class="btn btn-secondary">
                                                <ion-icon name="copy-outline"></ion-icon>
                                                Invite now
                                            </a>
                                        </div>
                                    </div> -->

                                    <!-- modal -->
                                    <!-- <div class="modal fade action-sheet" id="scbBank" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">BTC/USD</h5>
                                                    <h3 class="text-center mb-05 fontsize-headingLarge text-success">
                                                        $38,509.44</h3>
                                                    <div class="text-muted text-center mb-1 fontsize-caption">Added 28
                                                        days ago</div>
                                                </div>

                                                <div class="modal-body">
                                                    <p>test</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- modal -->

                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="card card-with-icon">
                                <div class="card-body pt-3 pb-3 text-center">
                                    <div class="card-icon mb-2">
                                        <img src="{{ secure_asset('img/sample/qr.png') }}" alt="QR Code" class="imaged w-100" style="border-radius: 50%;">
                                    </div>
                                    <h3 class="card-titlde mb-1">ทำรายการผ่าน QR Code</h3>

                                    <p>หรือสแกนจ่ายผ่าน QR Code เพื่อความสะดวกรวดเร็ว</p>
                                    <div class="row">
                                        <div class="col">
                                            <a href="qr-code" class="btn btn-block btn-primary w-25">
                                                สแกน
                                            </a>
                                        </div>
                                        <!-- <div class="col">
                                            <a href="component-messages.html" class="btn btn-block btn-secondary">
                                                View groups
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <div class="card card-with-icon">
                                <div class="card-body pt-3 pb-3 text-center">
                                    <div class="card-icon bg-secondary mb-2">
                                        <ion-icon name="share-social-outline"></ion-icon>
                                    </div>
                                    <h3 class="card-titlde mb-1">Follow Us</h3>

                                    <p>Follow us on social media!</p>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="btn btn-block btn-facebook">
                                                <ion-icon name="logo-facebook"></ion-icon>
                                                Facebook
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-block btn-twitter">
                                                <ion-icon name="logo-twitter"></ion-icon>
                                                Twitter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- * Slider -->


        <!-- News -->
        <div class="section full mt-4 mb-3">
            <div class="section-heading padding">
                <h2 class="title">ขั้นตอนเพิ่ม Coin ผ่าน QR Code</h2>
                <!-- <a href="app-blog.html" class="link">View All</a> -->
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="text-primary fw-bold">1. เข้าแอปพลิเคชั่น Online Banking บนโทรศัพท์</h4>
                        <h4 class="text-primary fw-bold">2. กดที่ปุ่มสแกน QR Code เพื่อให้กล้องสแกน QR หรือ เลือกรูปภาพ
                            QR Code.</h4>
                        <h4 class="text-primary fw-bold">3. ตรวจสอบผลการโอนเงิน</h4>
                        <h4 class="text-primary fw-bold">4. กดยืนยันการโอนเงิน</h4>
                        <h4 class="text-primary fw-bold">5. หลังจากโอนสำเร็จนำข้อมูลในสลิปมาแจ้งใน"ฟอร์มสำหรับเพิ่มCoin"
                        </h4>
                        <h4 class="text-primary fw-bold">6. ใส่ข้อมูล จำนวนเงิน /วัน/เวลา ที่โอน ตามสลิปที่ได้รับ</h4>
                        <h4 class="text-primary fw-bold">7. ตรวจสอบข้อมูล และ แจ้งเพิ่มCoin
                            ระบบจะตรวจสอบและทำการเพิ่มCoinให้โดยอัตโนมัติภายใน 1-2นาที</h4>
                        <h4 class="text-danger fw-bold mt-3">* เก็บสลิปไว้เพื่อ ดูวันที่และเวลาในการโอน
                            หากคุณแจ้งเพิ่มCoinและไม่ได้รับยอดเงินภายใน 2 นาที กรุณาติดต่อฝ่ายบริการ 083-007-9144.</h4>
                    </div>
                </div>
            </div>

        </div>
        <!-- * News -->


        <!-- app footer -->
        <div class="appFooter">
            <div class="footer-title">
                <p style="color:red;"><i class="fa fa-bell"></i>
                    <small>
                        ** คำเตือนอ่านก่อน :เงินที่เติมจะถูกแลกเป็น SMA COIN เพื่อใช้ซื้อสินค้าในราคาตัวแทน
                        SMA COIN นำไปตัดยอดเมื่อ Drop Shipping สินค้าจากเว็บ
                        รายได้ของท่านจะได้จากการขายสินค้าให้กับลูกค้าในช่องทางต่างๆ
                        ตัวแทนจำหน่ายรับชำระเงินโดยตรงจากผู้ซื้อ หรือ ช่องทางที่ลงขาย เข่น LAZADA SHOPEE KHAYDI
                    </small>
                </p>
            </div>
            <!-- Bootstrap 5 based mobile template. -->
        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
    @else
    <!-- App Capsule -->
    <div id="appCapsule">

        <!-- Wallet -->
        <div class="section full gradientSection">
            <div class="in">
                <div class="my-5 py-4">
                    <h1 class="text-white">กรุณาเข้าสู่ระบบ</h1>
                    <p class="text-white">เพื่อใช้งาน SMA Coin Wallet</p>
                </div>
            </div>
        </div>
        <!-- * Wallet -->

    </div>
    <!-- * App Capsule -->

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

    <script>
        var sparklineAreaExampleSuccess1 = {
            series: [{
                data: [555, 1222, 777, 888, 555, 888, 999, 1222]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 70,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };
        var sparklineAreaExampleSuccess2 = {
            series: [{
                data: [55, 66, 55, 77, 66, 180, 290, 333]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 70,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#1DCC70'],
            tooltip: {
                enabled: false
            }
        };
        var sparklineAreaExampleDanger1 = {
            series: [{
                data: [2222, 1666, 1444, 1777, 1333, 1111, 777, 666]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 70,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#FF396F'],
            tooltip: {
                enabled: false
            }
        };
        var sparklineAreaExampleDanger2 = {
            series: [{
                data: [1200, 1444, 2900, 505, 531, 1900, 555, 75]
            }],
            chart: {
                type: 'area',
                width: '100%',
                height: 70,
                sparkline: {
                    enabled: true
                }
            },
            stroke: {
                width: 2,
            },
            colors: ['#FF396F'],
            tooltip: {
                enabled: false
            }
        };


        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.chart-sparkline-success-1').forEach(chart => new ApexCharts(chart, sparklineAreaExampleSuccess1).render());
            document.querySelectorAll('.chart-sparkline-success-2').forEach(chart => new ApexCharts(chart, sparklineAreaExampleSuccess2).render());
            document.querySelectorAll('.chart-sparkline-danger-1').forEach(chart => new ApexCharts(chart, sparklineAreaExampleDanger1).render());
            document.querySelectorAll('.chart-sparkline-danger-2').forEach(chart => new ApexCharts(chart, sparklineAreaExampleDanger2).render());

        })
    </script>

</body>

</html>