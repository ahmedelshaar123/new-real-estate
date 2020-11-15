@extends('layouts.front.app')
@section('content')
    <div class="breadCrumb position-relative">
        <!-- <img src='dist/img/breadcamp.png'/> -->
        <div class="position-absolute">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
                </ol>
            </nav>

        </div>

    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <img src='{{asset('front/dist/img/logo.png')}}' class="mt-5 mb-5" />
                <div class="row mb-3">
                    <div class=" col-3 col-sm-2">
                            <span class="fa-stack fa-2x sec-color ml-4">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                            </span>

                    </div>
                    <div class="col">
                        <h3 class=" main-color h5">
                            المنصورة شارع جيهان المنصورة شارع جيهان المنصورة شارع جيهان

                        </h3>

                    </div>


                </div>
                <div class="row mb-3">
                    <div class=" col-3 col-sm-2">
                            <span class="fa-stack fa-2x sec-color ml-4">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>

                    </div>
                    <div class="col">
                        <h3 class=" main-color h5">
                            test@gmail.com

                        </h3>

                    </div>


                </div>

                <div class="row mb-3">
                    <div class=" col-3 col-sm-2">
                            <span class="fa-stack fa-2x sec-color ml-4">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                            </span>

                    </div>
                    <div class="col">
                        <h3 class=" main-color h5 number">
                            +334444456677
                        </h3>

                    </div>


                </div>

                <div class="row mb-3">
                    <div class=" col-3 col-sm-2">
                            <span class="fa-stack fa-2x sec-color ml-4">
                            <i class="fa fa-square fa-stack-2x"></i>
                            <i class="fa fa-calendar-alt fa-stack-1x fa-inverse"></i>
                            </span>

                    </div>
                    <div class="col">
                        <h3 class=" main-color h5">
                            مواعيد العمل من 9 صباحا الى 10 مساء

                        </h3>

                    </div>


                </div>


            </div>
            <div class="col-lg-6 py-5">
                <div class=" bg-light dropShadow">
                    <form class="py-3 px-2 px-lg-4 " method="post" action="{{route('contact-us')}}">
                        @csrf
                        <h3 class="mb-5 h2 font-weight-bold ">
                            تواصل معنا
                        </h3>
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text" placeholder="اﻻسم " name="name">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="email" placeholder="البريد اﻻلكتورنى " name="email">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="number" placeholder="رقم الجوال " name="phone">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text" placeholder="الموضوع " name="title">

                            </div>
                            <div class="col-lg-12 ">
                                <textarea rows="6 " class="form-control rounded-0 mb-3 " placeholder="الرسالة " name="message"></textarea>

                            </div>
                            <div class="col-lg-12 mt-4 ">
                                <button type="submit" class="btn effect01 px-4 pt-2 pb-3 rounded-0 "><span class="px-4 ">ارسال</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="wheel-map dropshadow w-100" data-marker='dist/img/marker.svg' data-lat="45.7143528 " data-lng="-74.0059731 " data-zoom="10 " data-style="style-1" style='height: 500px;'>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @if(session()->has('key'))
        <script>
            console.log('ok');
            // setTimeout(function(){
            //     $("div.alert").remove();
            // }, 2000 ); // 2 secs
            Swal.fire({
                title: '{{session()->get('key')}}',
                imageUrl: "{{asset('uploads/logo.png')}}",
            });
            location.reload();
        </script>
    @endif
@endpush
