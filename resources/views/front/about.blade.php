@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تعرف علينا</li>
                </ol>
            </nav>

        </div>

    </div>
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
                        الشركة العقارية

                    </h6>
                    <h3 class=" main-color mb-4 font-weight-bold">
                        شركة عقارية تسعى فى تقديم الخدمات العقارية بمصداقية بتحقيق أقصي درجات القبول لدى العملاء


                    </h3>
                    <p class="main-color lead mb-4">
                        {!!$desc->$value!!}
                    </p>
                    <a href="#" class="btn effect01 px-4 pt-2 pb-3 rounded-0" target="_blank"><span class="h4 font-weight-bold">اتصل بنا</span></a>




                </div>

            </div>

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
                    <h3>لا يوجد شركاء</h3>
                @endif
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row py-5">
            <div class=" col-lg-6 order-2">
                <div class=" px-3 py-4   mb-4 mb-lg-0">
                    <!-- <img src='dist/img/R_E _Y1.png' class="mb-3" /> -->
                    <h3 class="sec-color mb-4">
                        الرؤية
                    </h3>
                    <p class="main-color lead">
                        {!!$vision->$value!!}
                    </p>

                </div>

            </div>
            <div class=" col-lg-6 order-1 order-lg-12">
                <img src='{{asset('front/dist/img/about (5).png')}}' />

            </div>

        </div>
        <div class="row py-5">
            <div class=" col-lg-6 order-1">
                <img src='{{asset('front/dist/img/article (4).png')}}' class="h-100" />

            </div>
            <div class=" col-lg-6 order-2">
                <div class=" px-3 py-4   mb-4 mb-lg-0">
                    <!-- <img src='dist/img/R_E _Y2.png' class="mb-3" /> -->
                    <h3 class="sec-color mb-4">
                        الرسالة
                    </h3>
                    <p class="main-color lead">
                        {!! $message->$value !!}

                    </p>

                </div>

            </div>


        </div>


    </div>
@endsection




