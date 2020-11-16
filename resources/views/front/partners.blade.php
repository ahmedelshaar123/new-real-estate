@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">@lang('front.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('front.our_partners')</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class=" bg-light py-5">
        <div class="container py-5 text-center">
            @if(count($partners))
            @foreach($partners as $partner)
                <a href="{{$partner->link}}" target="_blank">
                    <img src='{{$partner->image}}' class=" d-inline-block ml-5 mb-5 pointer company" />
                </a>
            @endforeach
            {{$partners->links()}}
            @else
                <h3>@lang('front.no_partners')</h3>
            @endif
        </div>
    </div>
@endsection








