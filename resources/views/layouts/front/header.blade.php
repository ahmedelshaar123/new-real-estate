<header>
    <div class="py-3 main-bk text-light border border-right-0 border-left-0 border-top-0 text-center text-lg-right">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="mailto:test@gmail.com">
                        <h5 class="d-inline-block pl-3 text-light">
                            <i class=" fa fa-envelope ml-1"></i> {{$emailVC->$valueVC}}
                        </h5>
                    </a>
                    <a href="tel:0100000000">
                        <h5 class="d-inline-block pr-3 text-light">
                            <i class=" fa fa-phone"></i>
                            <span class="number">
                                    +{{$phoneVC->$valueVC}}

                                </span>
                        </h5>

                    </a>
&nbsp;
&nbsp;
&nbsp;
                        <a href="#" class="dropdown dropdown-toggle text-white" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                        </a>
                        <ul class="dropdown-menu" >
                            <li>
                                <ul class="menu text-center">
{{--                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                                        <li style="list-style: none" class="text-center">--}}
{{--                                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                                {{ $properties['native'] }}--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
                                        @if(LaravelLocalization::getCurrentLocale() == 'ar' )
                                        <li style="list-style: none" class="text-center">
                                            <a class="text-center" rel="alternate" hreflang="en"
                                               href="{{LaravelLocalization::getLocalizedURL('en', null, [], true)}}">
                                                English
                                            </a>
                                        </li>
                                       @else
                                        <li style="list-style: none" class="text-center">
                                            <a class="text-center" rel="alternate" hreflang="ar"
                                               href="{{LaravelLocalization::getLocalizedURL('ar', null, [], true)}}">
                                                العربية
                                            </a>
                                        </li>
                                        @endif
                                </ul>
                            </li>
                        </ul>
                    <div class="d-block d-md-inline-block  text-center text-md-left float-md-left">
                        <a href="{{$instagramVC->$valueVC}}" class=" icon-nav" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="{{$twitterVC->$valueVC}}" class="mr-4  icon-nav " target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="{{$facebookVC->$valueVC}}" class="mr-4  icon-nav" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    @include('layouts.partials.validation-errors')
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg py-2  w-100">

        <div class="container p-0">

            <a class="navbar-brand m-0 p-0" href="#"><img src="{{asset('front/dist/img/logo.png')}}" class="m-0 p-0" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item {{request()->segment(2) == '' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}"> @lang('front.home') <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'about' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('about')}}">@lang('front.about_us')</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'services' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('services')}} ">@lang('front.our_services') </a>
                    </li>
                    <li class="nav-item {{request()->segment(2) == 'posts' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('posts')}}"> @lang('front.our_news')</a>

                    </li>

                    <li class="nav-item {{request()->segment(2) == 'team' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('team')}}">@lang('front.company_team')</a>
                    </li>
                    <li class="nav-item {{request()->segment(2) == 'partners' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('partners')}}">@lang('front.our_partners') </a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'contact-us' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('contact-us')}} ">@lang('front.contact_us')</a>
                    </li>
                    <i class="fa fa-search mr-4 mt-2 main-color" style="font-size: 28px;"
                       data-toggle="modal" data-target="#searchModel"></i>
{{--                        <input type="text" name="search" />--}}
{{--                        <button data-toggle="modal" data-target="#searchModel">@lang('front.search')</button>--}}

                </ul>
            </div>

        </div>

    </nav>
    <!-- Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if(count($topSlidersVC))
            @foreach($topSlidersVC as $topSlider)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->iteration-1}}" class="{{$loop->first ? 'active' : ''}}"></li>
            @endforeach
            @else
                <h3>@lang('front.no_top_sliders')</h3>
            @endif




        </ol>
        <div class="carousel-inner">
            @foreach($topSlidersVC as $topSlider)
                <div class="carousel-item {{$loop->first ? 'active' : ''}} position-relative">
                    <img src="{{$topSlider->image}}" class="d-block w-100" alt="...">
                    <div class="over-trans position-absolute text-center text-light">
                        <div class=" w-50 mx-auto">
                            <h6 class="mt-5 h5 mb-4 pt-3">
                                @lang('front.real_estate')
                            </h6>
                            <h4 class=" font-weight-bold mb-4 h3">
                                {{$topSlider->$titleVC}}
                            </h4>
                            <p class="text-center lead">
                                {!!$topSlider->$descVC!!}
                            </p>
                            <a href="{{url('about')}}" class="btn effect01 px-3 pt-2 pb-3 rounded-0"><span>@lang('front.about_us')</span></a>
                            <a href="{{url('/')}}" class="btn effect01 px-4 pt-2 pb-3 rounded-0 white mr-4"><span>@lang('front.start')</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="modal fade p-0" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-5 pt-5" role="document">
            <div class="modal-content">
{{--                <div class="modal-header">--}}
{{--                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
                <div class="close-btn pointer text-center" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times text-white" style="font-size: 23px;margin-top: 18px;"></i>
                </div>
                <div class="modal-body userModel text-center">
                    <h3>
                        @lang('front.search_news')
                    </h3>
                    <form class="table" method="get" action="{{url('search-news')}}">
                        <i class="fa fa-search mr-4 mt-2 main-color pointer" style="font-size: 28px"></i>
                        <input type="text" name="search">
                        <button type="submit">@lang('front.search')</button>
                    </form>
{{--                    <a href="#" class="btn6 mt-3 font-weight-bold px-4 py-3 h5">@lang('front.search')</a>--}}
                </div>


            </div>
        </div>
    </div>
</header>
