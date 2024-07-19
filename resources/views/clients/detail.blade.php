@extends('clients.layouts.master')

@section('content')
    @include('clients.components.urlweb', ['pageName' => 'Chi tiết tin tức'])

    <div class="blog-sidebar-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="blog-wrapper">
                        <div class="single-blog">

                            <div class="blog-details-text mt-30">
                                <h3> {{ $chiTiet->tieuDe }}</h3>
                                <div class="post-info">
                                    <ul>
                                        <li>
                                            <i class="fa fa-user"></i>
                                            a
                                        </li>
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            {{ $chiTiet->created_at }}
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments-o"></i>
                                                6
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <p class="details-pera">{{ $chiTiet->moTa }} </p>
                                <blockquote>
                                    <p>
                                        <img src="{{ asset($chiTiet->anh) }}" alt="">
                                    </p>
                                </blockquote>
                                <p>{{ $chiTiet->noiDung }}
                                </p>
                            </div>
                            <div class="news-details-bottom mtb-30">
                                <h3 class="leave-comment-text">Bình luận</h3>
                                <div class="blog-top">
                                    <div class="news-allreply">
                                        <a href="#"><img src="{{ asset('assets/img/testimonial/1.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <div class="blog-title-1">
                                                <h3>kavin smith</h3>
                                                <span>14 february, 2017 at 7 : 00 pm</span>
                                            </div>
                                            <div class="nes-icon hidden-xs">
                                                <a href="#">
                                                    reply
                                                </a>
                                            </div>
                                        </div>
                                        <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons.
                                            Duis aute irure dolor in reprehenderit in </p>
                                        <a href="#" class="visible-xs"><strong>Reply</strong></a>
                                    </div>
                                </div>
                                <div class="blog-top mt-40 mb-40 margin-middle">
                                    <div class="news-allreply">
                                        <a href="#"><img src="{{ asset('assets/img/testimonial/2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <div class="blog-title-1">
                                                <h3>lora dina</h3>
                                                <span>14 february, 2017 at 7 : 00 pm</span>
                                            </div>
                                            <div class="nes-icon hidden-xs">
                                                <a href="#">
                                                    reply
                                                </a>
                                            </div>
                                        </div>
                                        <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons.
                                            Duis aute irure dolor in reprehenderit in </p>
                                        <a href="#" class="visible-xs"><strong>Reply</strong></a>
                                    </div>
                                </div>
                                <div class="blog-top">
                                    <div class="news-allreply">
                                        <a href="#"><img src="{{ asset('assets/img/testimonial/3.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="blog-img-details">
                                        <div class="blog-title">
                                            <div class="blog-title-1">
                                                <h3>mikel smith</h3>
                                                <span>14 february, 2017 at 7 : 00 pm</span>
                                            </div>
                                            <div class="nes-icon hidden-xs">
                                                <a href="#">
                                                    reply
                                                </a>
                                            </div>
                                        </div>
                                        <p class="p-border">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore i aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons.
                                            Duis aute irure dolor in reprehenderit in </p>
                                        <a href="#" class="visible-xs"><strong>Reply</strong></a>
                                    </div>
                                </div>
                            </div>
                            <div class="leave-comment">
                                <h3 class="leave-comment-text">Viết bình luận</h3>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input placeholder="Name*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input placeholder="Email*" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-leave">
                                                <textarea placeholder="Comment*"></textarea>
                                                <button class="submit" type="submit">Bình luận</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="blog-sidebar mrg-for-sm-top">
                        <div class="single-sidebar">
                            <h3 class="sidebar-title">Tin tức khác</h3>
                          
                                @foreach ($relation as $item)
                                   
                                        <div class="recent-img-text mb-20">
                                            <div class="recent-img">
                                                <a href="{{ url('/chitiet', $item->id) }}"><img src="{{ asset($item->anh) }}" alt="" style="width: 80px"></a>
                                            </div>
                                            <div class="recent-text">
                                                <h4>
                                                    <a href="{{ url('/chitiet', $item->id) }}">{{$item->tieuDe}}</a>
                                                </h4>
                                                <div class="post-info">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-calendar"></i>
                                                            june 26, 2016
                                                        </li>
                                                    </ul>
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
    <div class="subscribe-area gray-bg">
        <div class="container">
            <div class="subscribe-bg ptb-80">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10">
                        <div class="subscribe-from
                        text-center">
                            <h3>Đăng ký nhận tin mới</h3>
                            <form action="#">
                                <input placeholder="Nhập vào email" type="email">
                                <button type="submit">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
