<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
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
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>เปลี่ยนรหัสผ่าน</h1>
            <h4>กรุณากรอกอีเมล์เพื่อรีเซ็ทรหัสผ่าน</h4>
        </div>
        <div class="section mb-5 p-2">
            <form action="index.html">
                <div class="card">
                    <div class="card-body pb-1">

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail</label>
                                <input type="email" class="form-control" id="email1" placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">รีเซ็ทรหัสผ่าน</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>