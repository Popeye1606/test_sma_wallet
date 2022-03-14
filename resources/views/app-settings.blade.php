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
            ตั้งค่า
        </div>
        <div class="right">
            <!-- <a href="#" class="headerButton" onclick="toastbox('toast-example-1', 3000)">
                <ion-icon name="notifications-off-outline"></ion-icon>
            </a> -->
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="listview-title">ธีม</div>
        <ul class="listview image-listview inset mb-2">
            <li>
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="moon-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>โหมดมืด</div>
                        <div class="form-check form-switch ms-2">
                            <input class="form-check-input dark-mode-switch" type="checkbox" id="darkmodeSwitch">
                            <label class="form-check-label" for="darkmodeSwitch"></label>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="listview-title mt-1">การแจ้งเตือน</div>
        <ul class="listview image-listview text inset">
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            แจ้งเตือนการชำระเงิน
                            <div class="text-muted">
                                ส่งการแจ้งเตือนเมื่อได้รับการชำระเงินใหม่
                            </div>
                        </div>
                        <div class="form-check form-switch  ms-2">
                            <input class="form-check-input" type="checkbox" id="SwitchCheckDefault1">
                            <label class="form-check-label" for="SwitchCheckDefault1"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>เสียงแจ้งเตือน</div>
                        <span class="text-primary">Beep</span>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">ตั้งค่าผู้ใช้ & ความปลอดภัย</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="change-username" class="item">
                    <div class="in">
                        <div>เปลี่ยนชื่อผู้ใช้</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="change-email" class="item">
                    <div class="in">
                        <div>เปลี่ยน E-mail</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="change-password" class="item">
                    <div class="in">
                        <div>เปลี่ยนรหัสผ่าน</div>
                    </div>
                </a>
            </li>
            <li>
                <div class="item">
                    <div class="in">
                        <div>
                            การยืนยันแบบ 2 ขั้นตอน
                        </div>
                        <div class="form-check form-switch ms-2">
                            <input class="form-check-input" type="checkbox" id="SwitchCheckDefault3" />
                            <label class="form-check-label" for="SwitchCheckDefault3"></label>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="in">
                        <div>ออกจากระบบอุปกรณ์ทั้งหมด</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="listview-title mt-1">การช่วยเหลือ</div>
        <ul class="listview image-listview text mb-2 inset">
            <li>
                <a href="faq" class="item">
                    <div class="in">
                        <div>ศูนย์ช่วยเหลือ</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="contact" class="item">
                    <div class="in">
                        <div>ติดต่อเรา</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="about" class="item">
                    <div class="in">
                        <div>เกี่ยวกับ</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="container px-3 my-3">
            <div class="row">
                <div class="col">
                    <a class="btn btn-danger btn-block" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('ออกจากระบบ') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>