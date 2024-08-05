@extends('clients.layouts.master')

@section('content')
    @include('clients.components.urlweb', ['pageName' => 'Đăng nhập'])
    <div class="login-area ptb-100">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-title">
                            <h4>Đăng nhập</h4>
                            <p>Vui lòng đăng nhập tài khoản bên dưới</p>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <input name="email" placeholder="Email" type="email" value="{{ old('email') }}" required autofocus>
                                <input name="password" placeholder="Mật khẩu" type="password" required autocomplete="current-password">
                                <div class="button-remember">
                                    <div class="checkbox-remember">
                                        <input id="checkbox" type="checkbox" name="remember">
                                        <label for="checkbox">Nhớ mật khẩu</label>
                                        <a href="{{ route('password.request') }}">Bạn quên mật khẩu ?</a>
                                    </div>
                                    <button class="login-btn" type="submit">Đăng nhập</button>
                                </div>
                                <div class="new-account">
                                    <p>Tạo mới tại đây ? <a href="{{ route('register') }}">Đăng ký tài khoản mới</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
