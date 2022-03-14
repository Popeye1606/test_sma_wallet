@if (Auth::check())
<div class="modal-content">
    <div class="modal-body p-0">
        <!-- profile box -->
        <div class="profileBox pt-2 pb-2">
            <div class="image-wrapper">
                @if (Auth::user()->avatar == NULL)
                <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" alt="image" class="imaged  w36">
                @else
                <img src="storage/uploads/{{ Auth::user()->avatar }}" alt="image" class="imaged  w36">
                @endif
            </div>
            <div class="in">
                @if (Auth::check())
                <strong>{{ Auth::user()->name }}</strong>
                <div class="text-muted">{{ Auth::user()->email }}</div>
                @else
                <strong></strong>
                <div class="text-muted"></div>
                @endif
            </div>
            <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                <ion-icon name="close-outline"></ion-icon>
            </a>
        </div>
        <!-- * profile box -->
        <!-- balance -->
        <div class="sidebar-balance pb-2">
            <div class="listview-title">ยอดเงินปัจจุบัน</div>
            <div class="in">
                <h1 class="amount">$ 2,000.50</h1>
            </div>
        </div>
        <!-- * balance -->

        <!-- menu -->
        <div class="listview-title mt-1">Menu</div>
        <ul class="listview flush transparent no-line image-listview">
            <li>
                <a href="/" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="home-outline"></ion-icon>
                    </div>
                    <div class="in">
                        หน้าแรก
                        <!-- <span class="badge badge-primary">10</span> -->
                    </div>
                </a>
            </li>
            <li>
                <a href="wallet" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </div>
                    <div class="in">
                        วอลเล็ท
                    </div>
                </a>
            </li>
            <li>
                <a href="list" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="list-outline"></ion-icon>
                    </div>
                    <div class="in">
                        รายการ
                    </div>
                </a>
            </li>
            <li>
                <a href="notifications" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="notifications-outline"></ion-icon>
                    </div>
                    <div class="in">
                        การแจ้งเตือน
                    </div>
                </a>
            </li>
        </ul>
        <!-- * menu -->

        <!-- others -->
        <div class="listview-title mt-1">Others</div>
        <ul class="listview flush transparent no-line image-listview">
            <li>
                <a href="settings" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="settings-outline"></ion-icon>
                    </div>
                    <div class="in">
                        การตั้งค่า
                    </div>
                </a>
            </li>
            <li>
                <a href="faq" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                    <div class="in">
                        ช่วยเหลือ
                    </div>
                </a>
            </li>
            <li>
                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <div class="icon-box bg-primary">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </div>
                    <div class="in">
                        ออกจากระบบ
                    </div>
                </a>
            </li>


        </ul>
        <!-- * others -->

    </div>
</div>
@else
<div class="modal-content">
    <div class="modal-body">
        <div class="jumbotron d-flex align-items-center min-vh-100">
            <div class="container text-center">
                <h2>กรุณาเข้าสู่ระบบ</h2>
                <h4>SMA Coin Wallet</h4>
                <a class="btn btn-primary" type="button" href="login">เข้าสู่ระบบ</a>
            </div>
        </div>
    </div>
</div>
@endif