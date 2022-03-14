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
            บัญชีธนาคารของฉัน
        </div>
        <div class="right">
            <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#actionSheetForm">
                <ion-icon name="add-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Form Action Sheet -->
    <div class="modal fade action-sheet" id="actionSheetForm" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">เพิ่มบัญชีธนาคาร</h5>
                </div>
                <div class="modal-body">
                    <div class="action-sheet-content">

                        <form>
                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label" for="account1">เลือกบัญชีธนาคาร</label>
                                    <select class="form-control custom-select" id="account1">
                                        <option value="0">Lifestyle</option>
                                        <option value="1">Living</option>
                                        <option value="2">Gaming</option>
                                        <option value="3">Mortgage</option>
                                        <option value="4">Travel</option>
                                        <option value="5">Gift</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">ชื่อบัญชีธนาคาร</label>
                                    <input type="text" class="form-control" placeholder="Enter name on card">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <div class="input-wrapper">
                                    <label class="label">หมายเลขบัญชีธนาคาร</label>
                                    <input type="text" class="form-control" placeholder="Enter number card">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group basic">
                                <button type="button" class="btn btn-primary btn-block btn-lg"
                                    data-bs-dismiss="modal">เพิ่ม</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * Form Action Sheet -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 mb-2">

            <div class="goals">
                <!-- item -->
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>MasterCard</h4>
                            <p>เลขลงท้าย **69</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-icon btn-primary me-1">
                                <ion-icon name="create-outline"></ion-icon>
                            </button>
                            <button type="button" class="btn btn-icon btn-danger me-1">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>MasterCard</h4>
                            <p>เลขลงท้าย **69</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-icon btn-primary me-1">
                                <ion-icon name="create-outline"></ion-icon>
                            </button>
                            <button type="button" class="btn btn-icon btn-danger me-1">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="item">
                    <div class="in">
                        <div>
                            <h4>Visa</h4>
                            <p>เลขลงท้าย **69</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-icon btn-primary me-1">
                                <ion-icon name="create-outline"></ion-icon>
                            </button>
                            <button type="button" class="btn btn-icon btn-danger me-1">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                </div>
                <!-- * item -->
            </div>

        </div>

    </div>
    <!-- * App Capsule -->

    <!-- ========= JS Files =========  -->
    @include ('assets/component/link-script')


</body>

</html>