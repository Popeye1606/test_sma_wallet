<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Dropoff</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/dropoff.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-white scrolling-navbar">
            <a class="navbar-brand text-dark" href="#">
                <img src="{{ secure_asset('img/sma-dropoff.png'); }}" alt="logo" class="logo w-50">
            </a>
            <button class="navbar-toggler btn-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-dark"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-dark" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">SMA Coin Wallet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">SMA Dropship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">SMA Droppoint</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="#">SMA Dropoff</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section>

        <!--for demo wrap-->
        <h1 class="pt-5">SMA Dropoff</h1>
        <form method="POST" action="{{ url('parcel') }}">
            @csrf

            <div class="container-fluid rounded align-items-center mb-3 bg-white px-5">

                <div class="form-row">

                    <!-- Grid column -->
                    <div class="col-md-5">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <input type="text" class="form-control" name="store_name" id="store_name" required>
                            <label for="track1">ชื่อร้านค้า</label>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <input type="text" class="form-control" name="parcel_tracking" id="parcel_tracking" required>
                            <label for="track2">หมายเลขติดตามพัสดุ</label>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <!-- Material input -->
                        <div class="md-form form-group">
                            <button class="btn btn-primary d-block" type="submit">เพิ่ม</button>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
            </div>
        </form>

        @if(Session::get('success'))
        <div class="alert alert-info">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif

        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>ชื่อร้านค้า</th>
                        <th>หมายเลขติดตามพัสดุ</th>
                        <th>Loaded Time</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach ($product as $list)
                    <tr>
                        <td>{{ $list->store_name }}</td>
                        <td>{{ $list->parcel_tracking }}</td>
                        <td>{{ $list->loaded_time }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <!-- script -->
    <script src="{{ secure_asset('js/dropoff.js') }}"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>

</html>