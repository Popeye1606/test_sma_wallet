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

    <style>
        .ion-carousel {
            font-size: 35px;
        }
    </style>
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
            <a href="settings" class="headerButton">
                <ion-icon name="settings-outline"></ion-icon>
                <!-- <span class="badge badge-danger">4</span> -->
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section pt-3 pb-3 full gradientSection text-center">
            <div class="avatar-section">
                <a href="#">
                    @if (Auth::user()->avatar == NULL)
                    <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="avatar" class="imaged rounded" style="width: 125px; height: 125px">
                    @else
                    <img src="storage/uploads/{{ Auth::user()->avatar }}" alt="avatar" class="imaged rounded" style="width: 125px; height: 125px">
                    @endif
                </a>

                <span class="button" data-bs-toggle="modal" data-bs-target="#changeImg">
                    <ion-icon name="camera-outline"></ion-icon>
                </span>

                <div class="modal fade action-sheet" id="changeImg" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">เลือกรูป Profile ใหม่</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-3">
                                        <label for="upload">
                                            <!-- <ion-icon name="images-outline" style="font-size: 100px;"></ion-icon> -->
                                            <figure class="figure border border-primary w-75">
                                                <img id="imgUpload" src="{{ Auth::user()->avatar }}" class="figure-img img-fluid w-50" alt="">
                                            </figure>
                                            <br>
                                            <input type="file" id="upload" name="upload" style="display:none" onchange="readURL(this)">
                                            <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                            <a type="button" class="btn btn-primary">เลือกรูปโปรไฟล์ใหม่</a>
                                        </label>
                                        <br>
                                        <input class="btn btn-primary mt-1" type="submit" value="Upload" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="button-section px-3 pt-3">
                <div class="row">
                    @if (Auth::check())
                    <h3 class="text-white">{{ Auth::user()->name }}</h3>
                    @else
                    <div class="col">
                        <a href="login" class="btn btn-block btn-success">
                            เข้าสู่ระบบ
                        </a>
                    </div>
                    <div class="col">
                        <a href="register" class="btn btn-block btn-secondary">
                            สมัครสมาชิก
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="section full mt-2">
            <div class="section-title mb-1">เมนู</div>

            <!-- carousel small -->
            <div class="carousel-small splide">
                <div class="splide__track ">
                    <ul class="splide__list text-center">
                        <li class="splide__slide">
                            <a href="https://www.smacorporation.com/sendpack/">
                                <img src="{{ secure_asset('img/circle-droppoint.png') }}" class="rounded-circle w-75" alt="">
                            </a>
                            <p>SMA Droppoint</p>
                        </li>
                        <li class="splide__slide">
                            <a href="https://smadropship.com/">
                                <img src="{{ secure_asset('img/circle-dropship.png') }}" class="rounded-circle w-75" alt="">
                            </a>
                            <p>SMA Dropship</p>
                        </li>
                        <li class="splide__slide">
                            <a href="https://smadropship.com/">
                                <img src="{{ secure_asset('img/circle-khaydi.png') }}" class="rounded-circle w-75" alt="">
                            </a>
                            <p>KHAYDI</p>
                        </li>
                        <li class="splide__slide">
                            <a href="{{ url('dropoff') }}">
                                <img src="{{ secure_asset('img/circle-dropoff.png') }}" class="rounded-circle w-75" alt="">
                            </a>
                            <p>SMA Dropoff</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- * carousel small -->

        </div>

        <div class="listview-title mt-1">ตั้งค่าการชำระเงิน</div>
        <ul class="listview image-listview text inset">
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>ยอดเงินคงเหลือ</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="logo-bitcoin"></ion-icon>
                    </div>
                    <div class="in">
                        <div>เหรียญ SMA ของฉัน</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="bank-account" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="reader-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>บัญชีธนาคารของฉัน</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="dc-card" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>บัตรเดบิต/เครดิตของฉัน</div>
                    </div>
                </a>
            </li>
        </ul>

        <div class="section pt-2">
            <a class="btn btn-danger btn-block" type="button" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('ออกจากระบบ') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    @include ('assets/component/bottomComponent')
    <!-- * App Bottom Menu -->

    <script>
        function readURL(input) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imgUpload').attr('src', e.target.result).width(300)
            }

            reader.readAsDataURL(input.files[0]);
        }
    </script>

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>