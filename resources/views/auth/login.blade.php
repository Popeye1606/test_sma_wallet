@extends('layouts.app')

@section('content')
<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 text-center">
        <h1>เข้าสู่ระบบ</h1>
        <h4>เข้าสู่ระบบ SMA Coin Wallet</h4>
    </div>
    <div class="section mb-5 p-2">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif


            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email">E-mail</label>
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
                    <div class="form-links mt-1 mb-2">
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    จดจำการเข้าสู่ระบบ
                                </label>
                            </div>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                            <a href="forgot-password" class="text-muted" href="{{ route('password.request') }}">ลืมรหัสผ่าน ?</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>




            <div class="container text-center my-4">
                <div class="row">
                    <div class="col">
                        <h2>หรือ</h2>
                        <p>เข้าสู่ระบบด้วย</p>

                        <div class="row">

                            <div class="col text-center">
                                <div class="col py-1">
                                    <a href="{{ url('login/facebook') }}">
                                        <img src="{{ secure_asset('img/logosocial/facebook.png') }}" class="w-50" alt="">
                                    </a>
                                </div>
                                <div class="col py-1">
                                    <a href="{{ url('login/google') }}">
                                        <img src="{{ secure_asset('img/logosocial/google.png') }}" class="w-50" alt="">
                                    </a>
                                </div>
                                <div class="col py-1">
                                    <a href="{{ url('login/line') }}">
                                        <img src="{{ secure_asset('img/logosocial/line.png') }}" class="w-50" alt="">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="form-button-group transparent">
                <a href="/register" type="button" class="btn btn-info">สมัครสมาชิก</a>
            </div>

            <div class="form-button-group transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">เข้าสู่ระบบ</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->
@endsection