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
            Transactions
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

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Today</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/1.jpg" alt="') }}" class="image-block imaged w48">
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
                        <img src="{{ secure_asset('img/sample/brand/2.jpg" alt="') }}" class="image-block imaged w48">
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

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Yesterday</div>
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
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 20, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/3.jpg" alt="') }}" class="image-block imaged w48">
                        <div>
                            <strong>Envato</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 24</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <!-- Transactions -->
        <div class="section mt-2">
            <div class="section-title">Sep 14, 2020</div>
            <div class="transactions">
                <!-- item -->
                <a href="app-notification-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/1.jpg" alt="') }}" class="image-block imaged w48">
                        <div>
                            <strong>Amazon</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 1,500</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-notification-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/brand/2.jpg" alt="') }}" class="image-block imaged w48">
                        <div>
                            <strong>Apple</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 150</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-notification-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/avatar/avatar7.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Lara Madrigal</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 550</div>
                    </div>
                </a>
                <!-- * item -->
                <!-- item -->
                <a href="app-notification-detail.html" class="item">
                    <div class="detail">
                        <img src="{{ secure_asset('img/sample/avatar/avatar6.jpg') }}" alt="img" class="image-block imaged w48">
                        <div>
                            <strong>Dina Glenn</strong>
                            <p>Transfer</p>
                        </div>
                    </div>
                    <div class="right">
                        <div class="price text-danger"> - $ 620</div>
                    </div>
                </a>
                <!-- * item -->
            </div>
        </div>
        <!-- * Transactions -->

        <div class="section mt-2 mb-2">
            <a href="#" class="btn btn-primary btn-block btn-lg">Load More</a>
        </div>


    </div>
    <!-- * App Capsule -->

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>