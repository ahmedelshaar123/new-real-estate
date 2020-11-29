@extends('layouts.front.app')
@section('content')
    <div class="py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-5 offset-lg-1 py-5">
                    <div class=" position-relative h-100">
                        <img src='{{asset('front/dist/img/article (4).png')}}' class="w-100 h-100 mt-5 first-img" />
                        <img src='{{asset('front/dist/img/project (5).png')}}' class=" position-absolute bor" />


                    </div>

                </div>
                <div class="col-lg-6 ">
                    <h6 class=" sec-color mt-5 h5">
                        @lang('front.real_estate')

                    </h6>
                    <h3 class=" main-color mb-4 font-weight-bold">
                        @lang('front.a_real_estate_company_that_seeks_to_provide_real_estate_services_with_credibility_to_achieve_the_highest_levels_of_customer_acceptance')


                    </h3>
                    <p class="main-color lead mb-4">
                        {!!$description->$value!!}
                    </p>
                    <a href="{{url('contact-us')}}" class="btn effect01 px-4 pt-2 pb-3 rounded-0"><span class="h4 font-weight-bold">@lang('front.contact_us')</span></a>




                </div>

            </div>

        </div>
    </div>
    <div class="py-5 bg-light">
        <div class="container py-5">
            <h3 class=" main-color text-center font-weight-bold h2">
                @lang('front.our_services')
            </h3>
            <h4 class=" main-color text-center">
                @lang('front.from_services_that_company_provides')
            </h4>
            <div class="row mt-5">
                @if(count($services))
                @foreach($services as $service)
                    <div class="col-lg-4">
                        <div class="service px-3 py-4  pointer mb-4 mb-lg-0">
                            <img src='{{$service->icon}}' class="mb-3" />
                            <h3 class=" main-color mb-4">
                                {{$service->$title}}
                            </h3>
                            <p class="main-color lead">
                                {!! $service->$desc !!}
                            </p>
                        </div>
                    </div>
                @endforeach
                @else
                    <h3>@lang('front.no_services')</h3>
                @endif
            </div>
        </div>
    </div>
    <div class="galary" id="lightgallery">
        <div class=" container-fluid m-0 p-0 ">
            <div class="row m-0 p-0">
                @if(count($featuredEstates))
                @foreach($featuredEstates as $featuredEstate)
                    <div class="col-lg-3 col-md-6 p-lg-0">
                        @foreach($featuredEstate->photos as $photo)
                            <a href="{{asset($photo->path)}}" class="item">
                        @endforeach
                            <div class=" position-relative  mb-2 w-100 h-100">
                                <img src='{{asset($featuredEstate->photos()->first()->path)}}' class="w-100 h-100" />
                                <div class=" over-sec position-absolute text-light p-3  pointer">
                                    <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                    <!-- <div> -->
                                    <h2>
                                        {{$featuredEstate->$title}}
                                    </h2>
                                    <h5>
                                        {{$featuredEstate->$address}}
                                    </h5>
                                    <!-- </div> -->


                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
                @else
                    <h3>@lang('front.no_featured_real_estates')</h3>
                @endif
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container py-5">
            <h3 class=" text-black-50 text-center mb-3 h2 font-weight-bold">
                @lang('front.team')
            </h3>
            <p class=" text-center text-black-50 lead mb-5">
                @lang('front.we_are_an_integrated_team_and_we_strive_to_provide_the_best')
            </p>
            <div class="team owl-carousel owl-carousel-carousel my-5">
                @if(count($team))
                    @foreach($team as $employee)
                        <div class=" position-relative rounded my-2">
                            <img src='{{$employee->image}}' class=" rounded" />
                            <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                                <div class="mb-4">
                                    @if($employee->fb_url != null)
                                        <a href="{{$employee->fb_url}}" class=" text-light" target="_blank">
                                            <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                                        </a>
                                    @endif
                                    @if($employee->tw_url != null)
                                        <a href="{{$employee->tw_url}}" class=" text-light" target="_blank">
                                            <i class=" fa fa-twitter ml-3 fa-2x"></i>
                                        </a>
                                    @endif
                                    @if($employee->insta_url != null)
                                        <a href="{{$employee->insta_url}}" class=" text-light" target="_blank">
                                            <i class=" fa fa-instagram ml-3 fa-2x"></i>
                                        </a>
                                    @endif
                                </div>
                                <h2>
                                    {{$employee->$name}}
                                </h2>
                                <h5>
                                    {{$employee->$job}}
                                </h5>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h3>@lang('front.no_employees')</h3>
                @endif
        </div>
        <img src='{{asset('front/dist/img/image (1).png')}}' class="w-100" />
        <div class="bg-light">
            <div class=" container pb-5" style="margin-top: -200px;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 main-bk text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/city.png')}}' class="mb-4" height="130" />
                            <h2 class="text-white font-weight-bold mb-3">5</h2>
                            <h4 class="text-white">@lang('front.experience_years')</h4>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 bg-white text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/ribbon.png')}}' class="mb-4" height="130" />
                            <h2 class="main-color font-weight-bold mb-3">+20</h2>
                            <h4 class="main-color">@lang('front.rewards_&_trophies')</h4>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 sec-bk text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/quality.png')}}' class="mb-4" height="130" />
                            <h2 class="text-white font-weight-bold mb-3">+150</h2>
                            <h4 class="text-white">@lang('front.successful_deals')</h4>

                        </div>

                    </div>

                </div>

            </div>
            <div class="container py-5">
                <div id="carouselExampleCaptions" class="carousel slide py-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @if(count($botSliders))
                        @foreach($botSliders as $botSlider)
                        <li data-target="#carouselExampleCaptions" data-slide-to="{{$loop->iteration-1}}" class="{{$loop->first ? 'active' : ''}}">
                            <img src='{{$botSlider->image}}' />
                        </li>
                        @endforeach
                        @else
                            <h3>@lang('front.no_bottom_sliders')</h3>
                        @endif
                    </ol>
                    <div class="carousel-inner">
                        @foreach($botSliders as $botSlider)
                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                <div class="carousel-caption">
                                    <p class="main-color lead mb-4 text-center">
                                        {!!$botSlider->$desc!!}
                                    </p>
    {{--                                <img src='{{asset('front/dist/img/quote.png')}}' width="50" />--}}
    {{--                                <h2 class="main-color">ندا سامح</h2>--}}
    {{--                                <h5 class="main-color">مصممة</h5>--}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>


        </div>
        <div class=" bg-light py-5 border-black border border-bottom-0 border-left-0 border-right-0 ">
            <div class="container ">
                <div class="parteners owl-carousel owl-carousel-carousel ">
                    @if(count($partners))
                        @foreach($partners as $partner)
                            <div class="p-3">
                                <img src="{{$partner->image}}" style="width: 158px" height="47px" />
                            </div>
                        @endforeach
                    @else
                        <h3>@lang('front.no_partners')</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
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
                @else
                    <h3>@lang('front.no_news')</h3>
                @endif
            </div>
            <div class="col-lg-12 mt-4 text-center ">
                <a href="{{url('posts')}}">
                    @if($allPosts->count() > 3)
                        <button class="btn effect01 px-4 pt-2 pb-3 rounded-0 "><span class="px-4 ">
                            @lang('front.show_more')
                        </span></button>
                    @endif
                </a>
            </div>

        </div>

    </div>


    <div class="bg-light ">
        <div class="container-fluid m-0 p-0 ">
            <div class="row m-0 ">
                <div class="col-lg-6 py-lg-5 ">
                    <form class="py-3 px-2 px-lg-4 " method="post" action="{{route('contact-us')}}">
                        @csrf
                        <h3 class="mb-5 h2 font-weight-bold ">
                            @lang('front.contact_us')
                        </h3>
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text" placeholder="@lang('front.name') " name="name">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="email" placeholder="@lang('front.email') " name="email">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="number" placeholder="@lang('front.phone') " name="phone">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text" placeholder="@lang('front.title') " name="title">

                            </div>
                            <div class="col-lg-12 ">
                                <textarea rows="6 " class="form-control rounded-0 mb-3 " placeholder="@lang('front.message') " name="message"></textarea>

                            </div>
                            <div class="col-lg-12 mt-4 ">
                                <button type="submit" class="btn effect01 px-4 pt-2 pb-3 rounded-0 "><span class="px-4 ">@lang('front.send')</span></button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6 p-3 p-lg-0 ">
{{--                    <div class="wheel-map dropshadow h-100 " data-marker='dist/img/marker.svg' data-lat="45.7143528 " data-lng="-74.0059731 " data-zoom="10 " data-style="style-1" style="min-height: 400px;">--}}
{{--                    </div>--}}
                    <img class="wheel-map dropshadow h-100 " src="{{asset('uploads/map.jfif')}}" alt="map">

                </div>

            </div>

        </div>
@endsection
