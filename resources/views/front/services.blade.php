@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">خدماتنا</li>
                </ol>
            </nav>

        </div>

    </div>

    <div class="container py-5">
        @if(count($services))
        @foreach($services as $service)
        <div class="row py-5">
            <div class=" col-lg-6 @if($loop->iteration  % 2 != 0) order-1 @elseif($loop->iteration  % 2 == 0) order-2 @endif">
                <div class=" px-3 py-4   mb-4 mb-lg-0">
                    <img src='{{$service->icon}}' class="mb-3" />
                    <h3 class=" main-color mb-4">
                        {{$service->$title}}
                    </h3>
                    <p class="main-color lead">
                        {!!  $service->$desc!!}
                    </p>
                </div>
            </div>
            <div class=" col-lg-6 order-lg-12 @if($loop->iteration  % 2 == 0) order-1 @elseif($loop->iteration  % 2 == 0) order-2 @endif">
                <img src='{{$service->image}}' />
            </div>
        </div>
        @endforeach
        {{$services->links()}}
        @else
            <h3>لا توجد خدمات</h3>
        @endif
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
@endsection




