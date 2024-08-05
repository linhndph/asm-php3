<div class="menu-wrap">
    <nav class="menu">
        <div class="icon-list">
            <h5 class="mt-2">Tài khoản của tôi:</h5>
            @if (Auth::user())
                @if (Auth::user()->type == 'admin')
                    <label for="" style="color: #fff">Tên tài khoản:</label> <br>
                    <label for="" style="color: #fff">Vào trang admin:</label>
                    <a href="{{ route('admin.index') }}">Vào</a>
                @endif
                <span style="color: #fff">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="login-btn"><i class="pe-7s-check"></i> Đăng xuất</button>
                </form>
            @endif

            <a href="{{ route('login') }}"><i class="pe-7s-next-2"></i><span>Đăng nhập</span></a>
            <a href="{{ route('register') }}"><i class="pe-7s-add-user"></i><span>Đăng ký</span></a>

        </div>
    </nav>
    <button class="close-button" id="close-button">Close Menu</button>
    <div class="morph-shape" id="morph-shape" data-morph-open="M-1,0h101c0,0,0-1,0,395c0,404,0,405,0,405H-1V0z">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 100 800"
            preserveAspectRatio="none">
            <path d="M-1,0h101c0,0-97.833,153.603-97.833,396.167C2.167,627.579,100,800,100,800H-1V0z" />
        </svg>
    </div>
</div>
