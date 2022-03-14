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
            ติดต่อเรา
        </div>
        <div class="right">
            <a href="#" class="headerButton">
                <ion-icon name="call-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <div class="text-center">
                            <h2 class="text-primary">สอบถามเกี่ยวกับปัญหา SMA Coin Wallet</h2>
                            <p>กรอกแบบฟอร์มเพื่อติดต่อเรา</p>
                        </div>
                        <form>
                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="name2">ชื่อของคุณ</label>
                                    <input type="text" class="form-control" id="name2" placeholder="ชื่อของคุณ">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="email2">E-mail สำหรับติดต่อ</label>
                                    <input type="text" class="form-control" id="email2" placeholder="E-mail สำหรับติดต่อ">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic animated">
                                <div class="input-wrapper">
                                    <label class="label" for="textarea2">ข้อความ</label>
                                    <textarea id="textarea2" rows="4" class="form-control" placeholder="ข้อความ"></textarea>
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="mt-2">
                                <button type="button" class="btn btn-primary btn-lg btn-block">ส่ง</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <div class="text-center">
                            <h2 class="text-primary">ที่อยู่ติดต่อ</h2>
                            <p class="card-text">
                                2888 ลาดพร้าว 130 แขวงคลองจั่น เขตบางกะปิ<br>
                                กรุงเทพมหานคร 10240
                            </p>
                            <p>
                                <ion-icon name="call"></ion-icon> <span class="margin-left-md">0830079144</span>
                                <span>|</span>
                                <ion-icon name="mail"></ion-icon> <span class="margin-left-md">amangostore@gmail.com</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mt-2 mb-2">
            <div class="card">
                <div class="card-body">
                    <div class="p-1">
                        <div class="text-center">
                            <h2 class="text-primary mb-2">Social Profiles</h2>

                            <a href="https://www.facebook.com/smadropshipTH/" target="_blank" class="btn btn-facebook btn-icon me-05">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>

                            <a href="#" class="btn btn-twitter btn-icon me-05">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>

                            <a href="#" class="btn btn-linkedin btn-icon me-05">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>

                            <a href="#" class="btn btn-whatsapp btn-icon me-05">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>

                            <a href="#" class="btn btn-instagram btn-icon me-05">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>

                            <a href="#" class="btn btn-twitch btn-icon me-05">
                                <ion-icon name="logo-twitch"></ion-icon>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>