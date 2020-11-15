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
                        الشركة العقارية

                    </h6>
                    <h3 class=" main-color mb-4 font-weight-bold">
                        شركة عقارية تسعى فى تقديم الخدمات العقارية بمصداقية بتحقيق أقصي درجات القبول لدى العملاء


                    </h3>
                    <p class="main-color lead mb-4">
                        شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و
                        الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                    </p>
                    <a href="#" class="btn effect01 px-4 pt-2 pb-3 rounded-0" target="_blank"><span class="h4 font-weight-bold">اتصل بنا</span></a>




                </div>

            </div>

        </div>
    </div>
    <div class="py-5 bg-light">
        <div class="container py-5">
            <h3 class=" main-color text-center font-weight-bold h2">
                خدماتنا
            </h3>
            <h4 class=" main-color text-center">
                من الخدمات التى تقدمها الشركة
            </h4>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="service px-3 py-4  pointer mb-4 mb-lg-0">
                        <img src='{{asset('front/dist/img/R_E _Y1.png')}}' class="mb-3" />
                        <h3 class=" main-color mb-4">
                            التسويق العقارى
                        </h3>
                        <p class="main-color lead">
                            شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                        </p>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="service px-3 py-4  pointer mb-4 mb-lg-0">
                        <img src='{{asset('front/dist/img/R_E _Y2.png')}}' class="mb-3" />
                        <h3 class=" main-color mb-4">
                            ادارة الممتلكات
                        </h3>
                        <p class="main-color lead">
                            شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                        </p>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="service px-3 py-4  pointer mb-4 mb-lg-0">
                        <img src='{{asset('front/dist/img/R_E _Y3.png')}}' class="mb-3" />
                        <h3 class=" main-color mb-4">
                            التثمين العقارى
                        </h3>
                        <p class="main-color lead">
                            شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="galary" id="lightgallery">
        <div class=" container-fluid m-0 p-0 ">
            <div class="row m-0 p-0">
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (2).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (2).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (3).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (3).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (2).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (2).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (2).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (3).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (2).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (4).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (2).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (2).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (4).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (4).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 p-lg-0">
                    <a href="{{asset('front/dist/img/article (3).png')}}" class="item">
                        <div class=" position-relative  mb-2 w-100 h-100">
                            <img src='{{asset('front/dist/img/article (3).png')}}' class="w-100 h-100" />
                            <div class=" over-sec position-absolute text-light p-3  pointer">
                                <i class="fa fa-plus fa-3x text-light mt-5"></i>
                                <!-- <div> -->
                                <h2>
                                    فيلا فاخرة
                                </h2>
                                <h5>
                                    مصر
                                </h5>
                                <!-- </div> -->


                            </div>

                        </div>
                    </a>
                </div>

            </div>

        </div>





    </div>
    <div class="py-5">
        <div class="container py-5">
            <h3 class=" text-black-50 text-center mb-3 h2 font-weight-bold">
                الفريق
            </h3>
            <p class=" text-center text-black-50 lead mb-5">
                نحن فريق متكامل و نسعى الى تقديم اﻷفضل
            </p>
            <div class="team owl-carousel owl-carousel-carousel my-5">
                <div class=" position-relative rounded my-2">
                    <img src='{{asset('front/dist/img/team1.png')}}' class=" rounded" />
                    <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                        <div class="mb-4">
                            <a href="#" class=" text-light">
                                <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-twitter ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-instagram ml-3 fa-2x"></i>
                            </a>

                        </div>
                        <h2>
                            على سامح فتحى
                        </h2>
                        <h5>
                            مدير الشركة
                        </h5>

                    </div>

                </div>
                <div class=" position-relative rounded my-2">
                    <img src='{{asset('front/dist/img/team3.png')}}' class=" rounded" />
                    <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                        <div class="mb-4">
                            <a href="#" class=" text-light">
                                <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-twitter ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-instagram ml-3 fa-2x"></i>
                            </a>

                        </div>
                        <h2>
                            على سامح فتحى
                        </h2>
                        <h5>
                            مدير الشركة
                        </h5>

                    </div>

                </div>
                <div class=" position-relative rounded my-2">
                    <img src='{{asset('front/dist/img/team2.png')}}' class=" rounded" />
                    <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                        <div class="mb-4">
                            <a href="#" class=" text-light">
                                <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-twitter ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-instagram ml-3 fa-2x"></i>
                            </a>

                        </div>
                        <h2>
                            على سامح فتحى
                        </h2>
                        <h5>
                            مدير الشركة
                        </h5>

                    </div>

                </div>
                <div class=" position-relative rounded my-2">
                    <img src='{{asset('front/dist/img/team3.png')}}' class=" rounded" />
                    <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                        <div class="mb-4">
                            <a href="#" class=" text-light">
                                <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-twitter ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-instagram ml-3 fa-2x"></i>
                            </a>

                        </div>
                        <h2>
                            على سامح فتحى
                        </h2>
                        <h5>
                            مدير الشركة
                        </h5>

                    </div>

                </div>
                <div class=" position-relative rounded my-2">
                    <img src='{{asset('front/dist/img/team2.png')}}' class=" rounded" />
                    <div class=" over-sec position-absolute text-light p-3 rounded pointer">
                        <div class="mb-4">
                            <a href="#" class=" text-light">
                                <i class=" fa fa-facebook-f ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-twitter ml-3 fa-2x"></i>
                            </a>
                            <a href="#" class=" text-light">
                                <i class=" fa fa-instagram ml-3 fa-2x"></i>
                            </a>

                        </div>
                        <h2>
                            على سامح فتحى
                        </h2>
                        <h5>
                            مدير الشركة
                        </h5>

                    </div>

                </div>
            </div>

        </div>
        <img src='{{asset('front/dist/img/image (1).png')}}' class="w-100" />
        <div class="bg-light">
            <div class=" container pb-5" style="margin-top: -200px;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 main-bk text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/city.png')}}' class="mb-4" height="130" />
                            <h2 class="text-white font-weight-bold mb-3">5</h2>
                            <h4 class="text-white">سنوات الخبرة</h4>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 bg-white text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/ribbon.png')}}' class="mb-4" height="130" />
                            <h2 class="main-color font-weight-bold mb-3">+20</h2>
                            <h4 class="main-color">الجوائز و اﻻوسمة</h4>

                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class=" rounded dropShadow p-4 sec-bk text-center mb-4 h-100 pointer hoverable">
                            <img src='{{asset('front/dist/img/quality.png')}}' class="mb-4" height="130" />
                            <h2 class="text-white font-weight-bold mb-3">+150</h2>
                            <h4 class="text-white">الصفقات الناجحة</h4>

                        </div>

                    </div>

                </div>

            </div>
            <div class="container py-5">
                <div id="carouselExampleCaptions" class="carousel slide py-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active">
                            <img src='{{asset('front/dist/img/team2.png')}}' />
                        </li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1">
                            <img src='{{asset('front/dist/img/team3.png')}}' />

                        </li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2">
                            <img src='{{asset('front/dist/img/team1.png')}}' />

                        </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption">

                                <p class="main-color lead mb-4 text-center">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و
                                    الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                                </p>
                                <img src='{{asset('front/dist/img/quote.png')}}' width="50" />
                                <h2 class="main-color">ندا سامح</h2>
                                <h5 class="main-color">مصممة</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p class="main-color lead mb-4 text-center">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و
                                    الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                                </p>
                                <img src='{{asset('front/dist/img/quote.png')}}' width="50" />
                                <h2 class="main-color">ندا سامح</h2>
                                <h5 class="main-color">مصممة</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p class="main-color lead mb-4 text-center">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و
                                    الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات
                                </p>
                                <img src='{{asset('front/dist/img/quote.png')}}' width="50" />
                                <h2 class="main-color">ندا سامح</h2>
                                <h5 class="main-color">مصممة</h5>
                            </div>
                        </div>
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
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/STC-pay-01.png ')}}" />

                    </div>
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/accession.png ')}}" />

                    </div>
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/capital.png ')}}" />

                    </div>
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/dynamic.png ')}}" />

                    </div>
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/Forbes-Middle-East-01.png ')}}" />

                    </div>
                    <div class="p-3 ">
                        <img src="{{asset('front/dist/img/STC-Channels-01.png ')}}" />

                    </div>


                </div>


            </div>

        </div>
    </div>
    <div class="py-5 ">
        <div class="container pb-5 ">
            <h3 class=" main-color text-center font-weight-bold h2 ">
                آخر أخبارنا
            </h3>
            <h4 class=" main-color text-center mb-5 ">
                تابع [خر أخبارنا و آخر التحديثات
            </h4>
            <div class="row ">
                <div class="col-lg-4 ">
                    <a href="# ">
                        <div class="news position-relative mb-4 ">
                            <img src='{{asset('front/dist/img/article (2).png')}}' class="mb-3 " />
                            <div class=" position-absolute sec-bk text-light py-2 rounded px-3 text-center ">
                                <h2 class=" font-weight-bold ">
                                    10
                                </h2>
                                <h5>مارس</h5>

                            </div>
                            <div class="p-3">
                                <h6 class=" sec-color ">تسويق عقارى , تمليك</h6>
                                <h5 class="main-color mb-4 ">تسويق عقارى بيع فيلا</h5>
                                <p class="main-color mb-3 ">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                                </p>
                                <h5 class=" main-color ">
                                    <img src='{{asset('front/dist/img/team1.png')}}' class=" rounded-circle ml-3 " width="40 " height="40 " />
                                    <span>بواسطة : ندى</span>
                                </h5>

                            </div>

                        </div>
                    </a>

                </div>
                <div class="col-lg-4 ">
                    <a href="# ">
                        <div class="news position-relative mb-4 ">
                            <img src='{{asset('front/dist/img/article (3).png')}}' class="mb-3 " />
                            <div class=" position-absolute sec-bk text-light py-2 rounded px-3 text-center ">
                                <h2 class=" font-weight-bold ">
                                    10
                                </h2>
                                <h5>مارس</h5>

                            </div>
                            <div class="p-3">
                                <h6 class=" sec-color ">تسويق عقارى , تمليك</h6>
                                <h5 class="main-color mb-4 ">تسويق عقارى بيع فيلا</h5>
                                <p class="main-color mb-3 ">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                                </p>
                                <h5 class=" main-color ">
                                    <img src='{{asset('front/dist/img/team1.png')}}' class=" rounded-circle ml-3 " width="40 " height="40 " />
                                    <span>بواسطة : ندى</span>
                                </h5>

                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 ">
                    <a href="# ">
                        <div class="news position-relative mb-4 ">
                            <img src='{{asset('front/dist/img/article (2).png')}}' class="mb-3 " />
                            <div class=" position-absolute sec-bk text-light py-2 rounded px-3 text-center ">
                                <h2 class=" font-weight-bold ">
                                    10
                                </h2>
                                <h5>مارس</h5>

                            </div>
                            <div class="p-3">
                                <h6 class=" sec-color ">تسويق عقارى , تمليك</h6>
                                <h5 class="main-color mb-4 ">تسويق عقارى بيع فيلا</h5>
                                <p class="main-color mb-3 ">
                                    شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات شركة متخصصة فى التسويق العقارى و التجارى و الاستثمارى والسكنى و لديها تنوع بالمنتجات يغطى كافة القطاعات

                                </p>
                                <h5 class=" main-color ">
                                    <img src='{{asset('front/dist/img/team1.png')}}' class=" rounded-circle ml-3 " width="40 " height="40 " />
                                    <span>بواسطة : ندى</span>
                                </h5>

                            </div>

                        </div>
                    </a>

                </div>

            </div>
            <div class="col-lg-12 mt-4 text-center ">
                <button class="btn effect01 px-4 pt-2 pb-3 rounded-0 " target="_blank "><span class="px-4 ">
                    استعراض المزيد
                </span></button>
            </div>

        </div>

    </div>


    <div class="bg-light ">
        <div class="container-fluid m-0 p-0 ">
            <div class="row m-0 ">
                <div class="col-lg-6 py-lg-5 ">
                    <form class="py-5 px-3 px-lg-5 ">
                        <h3 class="mb-5 h2 font-weight-bold ">
                            تواصل معنا
                        </h3>
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text " placeholder="اﻻسم ">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text " placeholder="البريد اﻻلكتورنى ">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text " placeholder="رقم الجوال ">

                            </div>
                            <div class="col-lg-6 ">
                                <input class="form-control form-control-lg rounded-0 mb-3 " type="text " placeholder="الموضوع ">

                            </div>
                            <div class="col-lg-12 ">
                                <textarea rows="6 " class="form-control rounded-0 mb-3 " placeholder="الرسالة "></textarea>

                            </div>
                            <div class="col-lg-12 mt-4 ">
                                <button class="btn effect01 px-4 pt-2 pb-3 rounded-0 " target="_blank "><span class="px-4 ">ارسال</span></button>
                            </div>


                        </div>

                    </form>

                </div>
                <div class="col-lg-6 p-3 p-lg-0 ">
                    <div class="wheel-map dropshadow h-100 " data-marker='dist/img/marker.svg' data-lat="45.7143528 " data-lng="-74.0059731 " data-zoom="10 " data-style="style-1" style="min-height: 400px;">
                    </div>

                </div>

            </div>

        </div>
@endsection
