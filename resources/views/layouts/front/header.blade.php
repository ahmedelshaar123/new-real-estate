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
                        <a class="nav-link" href="{{url('/')}}"> الرئيسية <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'about' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('about')}}">تعرف علينا</a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'services' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('services')}} ">خدماتنا </a>
                    </li>
                    <li class="nav-item {{request()->segment(2) == 'posts' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('posts')}}"> أخبارنا</a>

                    </li>

                    <li class="nav-item {{request()->segment(2) == 'team' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('team')}}">فريق الشركة</a>
                    </li>
                    <li class="nav-item {{request()->segment(2) == 'partners' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('partners')}}">شركائنا </a>
                    </li>

                    <li class="nav-item {{request()->segment(2) == 'contact-us' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('contact-us')}} "> اتصل بنا</a>
                    </li>

                    <a href="#">
                        <i class="fa fa-search mr-4 mt-2 main-color" style="font-size: 28px;"></i>
                    </a>

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
                <h3>لا توجد شرائح بالأعلي</h3>
            @endif




        </ol>
        <div class="carousel-inner">
            @foreach($topSlidersVC as $topSlider)
                <div class="carousel-item {{$loop->first ? 'active' : ''}} position-relative">
                    <img src="{{$topSlider->image}}" class="d-block w-100" alt="...">
                    <div class="over-trans position-absolute text-center text-light">
                        <div class=" w-50 mx-auto">
                            <h6 class="mt-5 h5 mb-4 pt-3">
                                الشركة العقارية
                            </h6>
                            <h4 class=" font-weight-bold mb-4 h3">
                                {{$topSlider->$titleVC}}
                            </h4>
                            <p class="text-center lead">
                                {!!$topSlider->$descVC!!}
                            </p>
                            <a href="{{url('about')}}" class="btn effect01 px-3 pt-2 pb-3 rounded-0"><span>تعرف علينا</span></a>
                            <a href="{{url('/')}}" class="btn effect01 px-4 pt-2 pb-3 rounded-0 white mr-4"><span>البدء</span></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</header>
