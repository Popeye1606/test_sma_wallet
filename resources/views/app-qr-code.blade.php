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
    @include ('assets/component/loader')
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            QR Code
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#DialogBasic">Help</a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Dialog Basic -->
    <div class="modal fade dialogbox" id="DialogBasic" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">QR Code Verification</h5>
                </div>
                <div class="modal-body">
                    You can use QR code verification for two-factor authentication or protect actions.
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-primary" data-bs-dismiss="modal">OK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Dialog Basic -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section">
            <div class="form-group basic p-3">
                <div class="input-wrapper">
                    <label class="label" for="payment">ใส่จำนวนเงิน</label>
                    <input class="form-control datetimepicker-input" type="number" id="payment" name="payment" value="0" />
                </div>
                <div class="col text-center">
                    <a class="mt-2 btn btn-primary">รับ QR Code</a>
                </div>
            </div>
            <div class="splash-page mb-5">
                <div class="mb-3">
                    <img src="{{ secure_asset('img/sample/qr.png') }}" alt="QR Code" class="imaged square w140">
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam.
                </p>
            </div>
        </div>

        <div class="fixed-bar">
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-lg btn-outline-secondary btn-block goBack">Go Back</a>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>