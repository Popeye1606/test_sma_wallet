@extends('layouts.app')

@section('content')
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
@endsection
