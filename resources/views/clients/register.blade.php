@extends('clients.layouts.master')

@section('content')
    @include('clients.components.urlweb', ['pageName' => 'Đăng ký'])
    <div class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-title">
                            <h4>Đăng ký</h4>
                            <p>Vui lòng đăng ký tài khoản tài khoản chi tiết bên dưới</p>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <input name="name" placeholder="Tên đăng nhập" value="{{ old('name') }}"
                                    type="text">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="password" placeholder="Mật khẩu" type="password">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="email" placeholder="Email" value="{{ old('email') }}" type="email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password">
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="button-remember">
                                    <button class="login-btn" type="submit">Đăng ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
