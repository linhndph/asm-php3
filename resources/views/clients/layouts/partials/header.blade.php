<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3 col-xs-6">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-8 col-sm-9 col-xs-6">
                <div class="cart-menu">
                    <div class="user user-style-3 f-right">
                        <a href="#" id="open-button">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                    <div class="main-menu f-right">
                        <nav>
                            <ul>
                                @foreach ($allDM as $item)
                                    <li><a href="{{ url('/tintuc', $item->id) }}">{{ $item->tenDanhMuc }}</a>
                                @endforeach

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
