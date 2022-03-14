<!-- App Bottom Menu -->
<div class="appBottomMenu" id="appBottomMenu">
    @if (Request::is('/') || Request::is('index'))
    <a href="/" class="item active">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>หน้าแรก</strong>
        </div>
    </a>
    @else
    <a href="/" class="item">
        <div class="col">
            <ion-icon name="home-outline"></ion-icon>
            <strong>หน้าแรก</strong>
        </div>
    </a>
    @endif

    @if (Request::is('list'))
    <a href="list" class="item active">
        <div class="col">
            <ion-icon name="list-outline"></ion-icon>
            <strong>รายการ</strong>
        </div>
    </a>
    @else
    <a href="list" class="item">
        <div class="col">
            <ion-icon name="list-outline"></ion-icon>
            <strong>รายการ</strong>
        </div>
    </a>
    @endif

    @if (Request::is('wallet'))
    <a href="wallet" class="item">
        <div class="col">
            <div class="action-button large">
                <ion-icon name="wallet-outline"></ion-icon>
                <!-- <strong>วอลเล็ท</strong> -->
            </div>
        </div>
    </a>
    @else
    <a href="wallet" class="item">
        <div class="col">
            <div class="action-button large">
                <ion-icon name="wallet-outline"></ion-icon>
                <!-- <strong>วอลเล็ท</strong> -->
            </div>
        </div>
    </a>
    @endif

    @if (Request::is('notifications'))
    <a href="notifications" class="item active">
        <div class="col">
            <ion-icon name="notifications-outline"></ion-icon>
            <strong>แจ้งเตือน</strong>
        </div>
    </a>
    @else
    <a href="notifications" class="item">
        <div class="col">
            <ion-icon name="notifications-outline"></ion-icon>
            <strong>แจ้งเตือน</strong>
        </div>
    </a>
    @endif

    @if (Request::is('profile'))
    <a href="profile" class="item active">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>ฉัน</strong>
        </div>
    </a>
    @else
    <a href="profile" class="item">
        <div class="col">
            <ion-icon name="person-outline"></ion-icon>
            <strong>ฉัน</strong>
        </div>
    </a>
    @endif
</div>
<!-- * App Bottom Menu -->