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
    <div class="appHeader no-border transparent position-absolute">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
            <a href="login" class="headerButton">
                เข้าสู่ระบบ
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>สมัครสมาชิก</h1>
            <h4>สร้างบัญชีผู้ใช้</h4>
        </div>
        <div class="section mb-5 p-2">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="card">
                    <div class="card-body">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="name">ชื่อ-นามสกุล</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email">E-mail</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password">รหัสผ่าน</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="password-confirm">ยืนยันรหัสผ่าน</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox mt-2 mb-1">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheckb1">
                                <label class="form-check-label" for="customCheckb1">
                                    I agree <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and
                                        conditions</a>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="form-button-group transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">สมัครสมาชิก</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- Terms Modal -->
    <div class="modal fade modalbox" id="termsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terms and Conditions</h5>
                    <a href="#" data-bs-dismiss="modal">Close</a>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fermentum, urna eget finibus
                        fermentum, velit metus maximus erat, nec sodales elit justo vitae sapien. Sed fermentum
                        varius erat, et dictum lorem. Cras pulvinar vestibulum purus sed hendrerit. Praesent et
                        auctor dolor. Ut sed ultrices justo. Fusce tortor erat, scelerisque sit amet diam rhoncus,
                        cursus dictum lorem. Ut vitae arcu egestas, congue nulla at, gravida purus.
                    </p>
                    <p>
                        Donec in justo urna. Fusce pretium quam sed viverra blandit. Vivamus a facilisis lectus.
                        Nunc non aliquet nulla. Aenean arcu metus, dictum tincidunt lacinia quis, efficitur vitae
                        dui. Integer id nisi sit amet leo rutrum placerat in ac tortor. Duis sed fermentum mi, ut
                        vulputate ligula.
                    </p>
                    <p>
                        Vivamus eget sodales elit, cursus scelerisque leo. Suspendisse lorem leo, sollicitudin
                        egestas interdum sit amet, sollicitudin tristique ex. Class aptent taciti sociosqu ad litora
                        torquent per conubia nostra, per inceptos himenaeos. Phasellus id ultricies eros. Praesent
                        vulputate interdum dapibus. Duis varius faucibus metus, eget sagittis purus consectetur in.
                        Praesent fringilla tristique sapien, et maximus tellus dapibus a. Quisque nec magna dapibus
                        sapien iaculis consectetur. Fusce in vehicula arcu. Aliquam erat volutpat. Class aptent
                        taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- * Terms Modal -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>