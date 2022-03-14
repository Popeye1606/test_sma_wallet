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
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <h1>เข้าสู่ระบบ</h1>
            <h4>เข้าสู่ระบบ SMA Coin Wallet</h4>
        </div>
        <div class="section mb-5 p-2">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="email1">E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="Your Email" autofocus>
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
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="Your Password">
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
                    </div>
                </div>


                <div class="form-links mt-2">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                        <a href="forgot-password" class="text-muted" href="{{ route('password.request') }}">ลืมรหัสผ่าน ?</a>
                        @endif
                    </div>
                </div>

                <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">เข้าสู่ระบบ</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->



    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>