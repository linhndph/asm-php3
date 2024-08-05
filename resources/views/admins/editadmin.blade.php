@extends('admins.layouts.master')

@section('title')
    Chỉnh sửa danh mục
@endsection

@section('content')
    <div class="pc-content">
        @include('admins.components.head', ['pageName' => 'Chỉnh sửa danh mục'])

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Chỉnh sửa danh mục</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.update', $danhMuc->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="tenDanhMuc" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" id="tenDanhMuc" name="tenDanhMuc"
                                    value="{{ $danhMuc->tenDanhMuc }}" >
                                @error('tenDanhMuc')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
