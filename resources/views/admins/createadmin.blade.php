@extends('admins.layouts.master')

@section('title')
    Thêm danh mục mới
@endsection

@section('content')
    <div class="pc-content">
        @include('admins.components.head', ['pageName' => 'Thêm danh mục mới'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Thêm danh mục mới</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tenDanhMuc" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="tenDanhMuc" name="tenDanhMuc"
                                    value="{{ old('tenDanhMuc') }}">
                                @error('tenDanhMuc')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
