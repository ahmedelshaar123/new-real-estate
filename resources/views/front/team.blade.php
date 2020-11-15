@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">فريق الشركة</li>
                </ol>
            </nav>

        </div>

    </div>
    <div class="pt-5">
        <div class="container py-5">
            <h3 class=" text-black-50 text-center mb-3 h2 font-weight-bold">
                الفريق
            </h3>
            <p class=" text-center text-black-50 lead mb-5">
                نحن فريق متكامل و نسعى الى تقديم اﻷفضل
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
                    <h3>لا يوجد موظفين</h3>
                @endif
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
    </div>
@endsection





