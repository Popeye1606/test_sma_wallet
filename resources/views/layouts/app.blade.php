<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div class="pageTitle bg-primary text-center" style="border-radius: 50%; height: 160px; width: 250px; padding-top: 95px; margin-bottom: 75px">
            <a href="/">
                <img src="{{ secure_asset('img/logo.png'); }}" alt="logo" class="logo z-10">
            </a>
        </div>
        <div class="right">
            @if (Request::is('login'))
            <a class="" href="{{ url('register') }}">สมัครสมาชิก</a>
            @else (Request::is('register'))
            <a class="" href="{{ url('login') }}">เข้าสู่ระบบ</a>
            @endif
        </div>
    </div>
    <!-- * App Header -->

    <div id="appCapsule">
        @yield('content')
    </div>

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')

</body>

</html>