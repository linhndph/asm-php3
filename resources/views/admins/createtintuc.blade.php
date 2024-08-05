@extends('admins.layouts.master')

@section('title')
    Thêm tin tức
@endsection

@section('content')
    <div class="pc-content">
        @include('admins.components.head', ['pageName' => 'Thêm tin tức'])
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Thêm tin tức</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.storett') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="tieuDe" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="tieuDe" name="tieuDe"
                                    value="{{ old('tieuDe') }}">
                                @error('tieuDe')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="noiDung" class="form-label">Nội dung</label>
                                <textarea class="form-control" id="noiDung" name="noiDung" rows="5" value="{{ old('noiDung') }}"></textarea>
                                @error('noiDung')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="moTa" class="form-label">Mô tả</label>
                                <textarea class="form-control" id="moTa" name="moTa" rows="3" value="{{ old('moTa') }}"></textarea>
                                @error('moTa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="anh" class="form-label">Hình ảnh</label>
                                <input type="file" class="form-control" id="anh" name="anh"
                                    value="{{ old('anh') }}">
                                @error('anh')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="id_danh_muc" class="form-label">Danh mục</label>
                                <select class="form-control" id="id_danh_muc" name="id_danh_muc"
                                    value="{{ old('id_danh_muc') }}">
                                    @foreach ($danhMucs as $danhMuc)
                                        <option value="{{ $danhMuc->id }}">{{ $danhMuc->tenDanhMuc }}</option>
                                    @endforeach
                                    @error('id_danh_muc')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Người đăng</label>
                                <select class="form-control" id="user_id" name="user_id"
                                    value="{{ old('user_id') }}">
                                    @foreach ($user as $danhMuc)
                                        <option value="{{ $danhMuc->id }}">{{ $danhMuc->name }}</option>
                                    @endforeach
                                    @error('user_id')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="luotXem" class="form-label">Lượt xem</label>
                                <input type="number" class="form-control" id="luotXem" name="luotXem"
                                    value="{{ old('luotXem') }}">
                                @error('luotXem')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm tin tức</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
