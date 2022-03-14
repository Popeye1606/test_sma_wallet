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

<body class="bg-white">

    <!-- loader -->
    <!-- <div id="loader">
        <img src="assets/img/loading-icon.png" alt="icon" class="loading-icon">
    </div> -->
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            404 Page
        </div>
        <div class="right">
        </div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section">
            <div class="splash-page mt-5 mb-5">
                <h1>404</h1>
                <h2 class="mb-2">Page not found!</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam.
                </p>
            </div>
        </div>

        <div class="fixed-bar">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="btn btn-lg btn-outline-secondary btn-block goBack">Go Back</a>
                </div>
                <div class="col-6">
                    <a href="app-pages.html" class="btn btn-lg btn-primary btn-block">Try Again</a>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>