@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('front.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('front.news')</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="pt-5">
        <div class="py-5 ">
            <div class="container pb-5 ">
                <h3 class=" main-color text-center font-weight-bold h2 ">
                    @lang('front.our_latest_news')
                </h3>
                <h4 class=" main-color text-center mb-5 ">
                    @lang('front.follow_our_latest_news_&_latest_updates')
                </h4>
                <div class="row ">
                    @if(count($posts))
                    @foreach($posts as $post)
                    <div class="col-lg-4 ">
{{--                        <a href="# ">--}}
                            <div class="news position-relative mb-4 ">
                                <img src="{{$post->image}}" class="mb-3 ">
                                <div class=" position-absolute sec-bk text-light py-2 rounded px-3 text-center ">
                                    <h2 class=" font-weight-bold ">
                                        {{\Carbon\Carbon::parse($post->created_at)->translatedFormat('d')}}
                                    </h2>
                                    <h5>{{\Carbon\Carbon::parse($post->created_at)->translatedFormat('M')}}</h5>

                                </div>
                                <div class="p-3">
                                    <h6 class=" sec-color ">
                                       @if(count($post->services))
                                       @foreach($post->services as $service)
                                           @if($loop->last)
                                               {{$service->$title}}
                                           @else
                                               {{$service->$title . ','}}
                                            @endif
                                        @endforeach
                                        @else
                                            <h3>@lang('front.no_services')</h3>
                                       @endif
                                    </h6>
                                    <h5 class="main-color mb-4 ">{{$post->$title}}</h5>
                                    <p class="main-color mb-3 ">
                                        {!!$post->$desc!!}
                                    </p>
{{--                                    <h5 class=" main-color ">--}}
{{--                                        <img src="dist/img/team1.png" class=" rounded-circle ml-3 " width="40 " height="40 ">--}}
{{--                                        <span>بواسطة : ندى</span>--}}
{{--                                    </h5>--}}
                                </div>
                            </div>
{{--                        </a>--}}
                    </div>
                    @endforeach
                    {{$posts->links()}}
                    @else
                        <h3>@lang('front.no_news')</h3>
                    @endif
                </div>
{{--                <div class="text-left clearfix mt-5">--}}
{{--                    <nav aria-label="Page navigation example float-left text-left" dir="ltr">--}}
{{--                        <ul class="pagination float-left">--}}
{{--                            <li class="page-item ">--}}
{{--                                <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                    <span aria-hidden="true">&laquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#" aria-label="Next">--}}
{{--                                    <span aria-hidden="true">&raquo;</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}

{{--                </div>--}}


            </div>



        </div>

        <div class=" bg-light py-5">
            <div class="container">
                <div class="parteners owl-carousel owl-carousel-carousel">
                    @if(count($partners))
                    @foreach($partners as $partner)
                        <div class="p-3">
                            <img src="{{$partner->image}}" />
                        </div>
                    @endforeach
                    @else
                        <h3>@lang('front.no_partners')</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection




