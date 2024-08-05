@extends('admins.layouts.master')

@section('title')
    Quản trị admin
@endsection

@section('content')
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        @include('admins.components.head', ['pageName' => 'Quản trị tin tức'])
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-12">
                <div class="card table-card">
                    <div class="card-header d-flex align-items-center justify-content-between py-3">
                        <h5 class="mb-0">Danh sách tin tức</h5>
                        <button class="btn btn-sm btn-link-primary"><a href="{{ route('admin.creatett') }}">Thêm
                                mới</a></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tiêu đề</th>
                                        <th>Nội dung</th>
                                        <th>Mô tả</th>
                                        <th>Ảnh</th>
                                        <th>ID danh mục</th>
                                        <th>Người đăng</th>
                                        <th>Ngày đăng</th>
                                        <th>Lượt xem</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allTinTuc as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">{{ $item->id }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ Str::limit($item->tieuDe, 50) }}</td>
                                            <td>{{ Str::limit($item->noiDung, 50) }}</td>
                                            <td>{{ Str::limit($item->moTa, 50) }}</td>
                                            <td> <img src="{{ asset('image/'.$item->anh) }}" alt="user image"
                                                    class="img-radius wid-40" /></td>
                                            <td>{{$item->id_danh_muc}}</td>
                                            <td>{{$item->user_id}}</td>  
                                            <td>{{$item->created_at}}</td> 
                                           
                                            <td>{{$item->luotXem}}</td> 
                                            <td>
                                                <a href="{{ route('admin.edittt', $item->id) }}"
                                                    class="avtar avtar-xs btn-link-secondary">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <form action="{{ route('admin.destroytt', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-link-secondary mb-2"><i
                                                            class="ti ti-trash f-20"></i></button>


                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="../asset/images/user/avatar-2.jpg" alt="user image"
                                                        class="img-radius wid-40" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">Ashton Cox</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Project Payment</td>
                                        <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span>
                                        </td>
                                        <td>$520.30</td>
                                        <td><span class="badge text-bg-success">Completed</span></td>
                                        <td>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-eye f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="../asset/images/user/avatar-3.jpg" alt="user image"
                                                        class="img-radius wid-40" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">Bradley Greer</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>You Tube Subscribe</td>
                                        <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span>
                                        </td>
                                        <td>$100.00</td>
                                        <td><span class="badge text-bg-warning">Pending</span></td>
                                        <td>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-eye f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="../asset/images/user/avatar-4.jpg" alt="user image"
                                                        class="img-radius wid-40" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">Brielle Williamson</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Slary Payment</td>
                                        <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span>
                                        </td>
                                        <td>$760.25</td>
                                        <td><span class="badge text-bg-primary">In Progress</span></td>
                                        <td>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-eye f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="../asset/images/user/avatar-5.jpg" alt="user image"
                                                        class="img-radius wid-40" />
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6 class="mb-0">Airi Satou</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Spotify Subscribe</td>
                                        <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span>
                                        </td>
                                        <td>$60.05</td>
                                        <td><span class="badge text-bg-danger">Canceled</span></td>
                                        <td>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-eye f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-edit f-20"></i>
                                            </a>
                                            <a href="#" class="avtar avtar-xs btn-link-secondary">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
@endsection
