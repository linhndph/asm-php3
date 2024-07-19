@extends('clients.layouts.master')

@section('content')
    <div class="banner-style-3 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                   
                    <div class="row">
                        @foreach ($tinNB as $item)
                            <div class="col-md-6 col-sm-6">
                                <div class="banner-style-3-img mb-30">
                                    <img src="{{ $item->anh }}" alt="">
                                    <div class="banner-style-3-dec">
                                        <a href="{{ url('/chitiet', $item->id) }}" style="color: aliceblue">{{ $item->tieuDe }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                  
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="banner-style-3-img mb-30">
                        <img src="{{ $tinNB2->anh }}" alt="">
                        <div class="banner-style-3-dec">
                            <a href="{{ url('/chitiet', $tinNB2->id) }}" style="color: aliceblue">{{ $tinNB2->tieuDe }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner style 2 end -->
    <!-- shop area start -->
    <div class="home-product-area pt-70 pb-100">
        <div class="container">
            <div class="section-title text-center mb-70">
                <h2>Tin tức khoa học <i class="fa fa-shopping-cart"></i></h2>
            </div>
            <div class="features-tab">
                <div class="tab-content">
                    <div class="tab-pane active" id="dresses">
                        <div class="row">
                            @foreach ($kh as $item)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="{{ url('/chitiet', $item->id) }}"><img src="{{ $item->anh }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="{{ url('/chitiet', $item->id) }}">{{ $item->tieuDe }}</a>
                                                    </h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span
                                                        class="new">{{ $item->day }}/{{ $item->month }}/{{ $item->year }}</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left"><a
                                                        href="{{ url('/chitiet', $item->id) }}">{{ $item->moTa }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- shop area end -->
    <div class="counter-home2">
        <div class="container">
            <div class="counter2-all text-center">
                <img alt="" src="assets/img/banner/9.jpg">
                <div class="counter-content">
                    <h2>Thỏa thuận trong tuần</h2>
                    <h4>Giới hạn giảm giá trong thời gian</h4>
                    <div class="timer">
                        <div data-countdown="2019/12/20"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop area start -->
    <div class="home-product-area ptb-100">
        <div class="container">
            <div class="section-title text-center mb-70">
                <h2>
                    Tin tức giáo dục
                    <i class="fa fa-shopping-cart"></i>
                </h2>
            </div>
            <div class="features-tab">
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            @foreach ($yt2 as $item)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="single-shop">
                                        <div class="shop-img">
                                            <a href="{{ url('/chitiet', $item->id) }}"><img src="{{ $item->anh }}"
                                                    alt="" /></a>
                                        </div>
                                        <div class="shop-text-all">
                                            <div class="title-color fix">
                                                <div class="shop-title f-left">
                                                    <h3><a href="{{ url('/chitiet', $item->id) }}">{{ $item->tieuDe }}</a>
                                                    </h3>
                                                </div>
                                                <span class="price f-right">
                                                    <span
                                                        class="new">{{ $item->day }}/{{ $item->month }}/{{ $item->year }}</span>
                                                </span>
                                            </div>
                                            <div class="fix">
                                                <span class="f-left"><a
                                                        href="{{ url('/chitiet', $item->id) }}">{{ $item->moTa }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop area end -->
    <!-- blog area start -->
    <div class="blog-area gray-bg pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h2>Tin mới nhất <i class="fa fa-pencil"></i></h2>
            </div>
            <div class="row">
                @foreach ($hotNews as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-details mb-30">
                            <div class="blog-img">
                                <a href="{{ url('/chitiet', $item->id) }}"><img src="{{ $item->anh }}"
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
                                    <li><a href="#">Ria sen</a></li>
                                    <li>{{ $item->day }}/{{ $item->month }}</li>
                                    <li>3 Comments</li>
                                </ul>
                                <p>{{ $item->moTa }}</p>
                                <a href="{{ url('/chitiet', $item->id) }}">read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
