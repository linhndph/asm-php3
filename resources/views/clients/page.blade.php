    @extends('clients.layouts.master')
    @section('content')
        @include('clients.components.urlweb', ['pageName' => 'Trung tâm tin tức'])
        <div class="single-sidebar blog-search-deff">
            <h3 class="sidebar-title">Tìm kiếm</h3>

            <form action="{{ route('search') }}" method="GET">
                <input value="" placeholder="Tìm kiếm" type="search" name="search">
                <button class="blog-submit" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            <h3 class="sidebar-title " style="padding-top: 30px"><a href="{{ url()->previous() }}">Quay lại bước đầu
                    >>></a></h3>
        </div>
        <div class="blog-fullwidth-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($tintuc as $item)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-details mb-30">
                                <div class="blog-img">
                                    <a href="{{ url('/chitiet', $item->id) }}"><img src="{{ asset('image/'.$item->anh) }}"
                                            alt=""></a>
                                    <div class="blog-quick-view">
                                        <a href="blog-details.html">
                                            <i class="pe-7s-link"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="blog-meta">
                                    <h4><a href="{{ url('/chitiet', $item->id) }}">{{ $item->tieuDe }}</a></h4>
                                    <ul class="meta">
                                        <li><a href="#"><i class="fas fa-eye"></i> {{$item->luotXem}}</a></li>
                                        <li>{{ $item->day }}/{{ $item->month }}/{{ $item->year }}</li>
                                        <li>3 Bình luận</li>
                                    </ul>
                                    <a href="{{ url('/chitiet', $item->id) }}">
                                        <p>{{ $item->moTa }}</p>
                                    </a>
                                    <a href="{{ url('/chitiet', $item->id) }}">Chi tiết thêm</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-pagination text-center">
                            <ul>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subscribe-area gray-bg">
            <div class="container">
                <div class="subscribe-bg ptb-80">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                            <div class="subscribe-from
                                text-center">
                                <h3>Đăng ký cho tin mới</h3>
                                <form action="#">
                                    <input placeholder="Nhập email" type="email">
                                    <button type="submit">Đăng ký</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
