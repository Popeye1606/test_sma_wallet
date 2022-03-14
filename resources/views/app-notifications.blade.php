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

<body class="bg-white">

    <!-- loader -->
    <!-- <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary">
        <div class="left">
            <!-- <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a> -->
        </div>
        <div class="pageTitle">
            <a href="/">
                <img src="{{ secure_asset('img/logo.png'); }}" alt="logo" class="logo">
            </a>
        </div>
        <div class="right">
            @if (Auth::check())
            <a href="#" class="headerButton text-white" onclick="toastbox('toast-example-1', 3000)">
                <ion-icon name="notifications-off-outline"></ion-icon>
            </a>
            @endif
        </div>
    </div>
    <!-- * App Header -->

    @if (Auth::check())
    <!-- toast bottom iconed -->
    <div id="toast-example-1" class="toast-box toast-bottom bg-primary">
        <div class="in">
            <ion-icon name="notifications-off-outline"></ion-icon>
            <div class="text">
                Notification sounds have been muted
            </div>
        </div>
        <button type="button" class="btn btn-sm btn-text-light close-button">OK</button>
    </div>
    <!-- * toast bottom iconed -->

    <!-- App Capsule -->
    <div class="section full d-flex align-items-center min-vh-100">
        <div class="col text-center">
            <img src="{{ secure_asset('img/notification.png') }}" class="w-25 mb-2" alt="">
            <!-- <h2 class="pt-3">กรุณาเข้าสู่ระบบ</h2> -->
            <p>ไม่มีการแจ้งเตือนในตอนนี้</p>
        </div>
    </div>

    <!-- <div id="appCapsule">

        <div class="section full">

            <ul class="listview image-listview flush">
                <li class="active">
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Payment Received</strong></div>
                                <div class="text-small mb-05">John sent you <b>$ 50</b></div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                            <span class="badge badge-primary badge-empty"></span>
                        </div>
                    </a>
                </li>
                <li class="active">
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-success">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Money has been sent</strong></div>
                                <div class="text-small mb-05">The money you sent to John was successfully sent.</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                            <span class="badge badge-primary">3</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-danger">
                            <ion-icon name="key-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Password changed</strong></div>
                                <div class="text-small mb-05">Your password has been changed</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-warning">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>New Messages</strong></div>
                                <div class="text-small mb-05">You have new messages from John</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-primary">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Payment Received</strong></div>
                                <div class="text-small mb-05">John sent you <b>$ 50</b></div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-success">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Money has been sent</strong></div>
                                <div class="text-small mb-05">The money you sent to John was successfully sent.</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-danger">
                            <ion-icon name="key-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>Password changed</strong></div>
                                <div class="text-small mb-05">Your password has been changed</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="app-notification-detail.html" class="item">
                        <div class="icon-box bg-warning">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </div>
                        <div class="in">
                            <div>
                                <div class="mb-05"><strong>New Messages</strong></div>
                                <div class="text-small mb-05">You have new messages from John</div>
                                <div class="text-xsmall">5/3/2020 10:30 AM</div>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>

    </div> -->
    <!-- * App Capsule -->
    @else
    <!-- Not Login App Capsule -->

    <div class="section full d-flex align-items-center min-vh-100">
        <div class="col text-center">
            <img src="{{ secure_asset('img/notification.png') }}" class="w-25" alt="">
            <h2 class="pt-3">กรุณาเข้าสู่ระบบ</h2>
            <p>เพื่อดูการแจ้งเตือน</p>
        </div>
    </div>

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
    <!-- * Not Login App Capsule -->
    @endif

    <!-- App Bottom Menu -->
    @include ('assets/component/bottomComponent')
    <!-- * App Bottom Menu -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')

</body>

</html>