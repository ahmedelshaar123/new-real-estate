<footer class="py-5 ">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-3 text-center ">
                <img src="{{asset('front/dist/img/logo.png')}}" class="mb-4 ">
                <p class=" text-light mb-5 ">
                    {!!$footerDescVC->$valueVC!!}
                </p>
                <!-- <a href="# " class=" text-white ">
                <i class="fab fa-instagram ml-4 "></i>
            </a>
            <a href="# " class=" text-white ">
                <i class="fab fa-twitter ml-4 "></i>
            </a>
            <a href="# " class=" text-white ">
                <i class="fab fa-facebook-f ml-4 "></i>
            </a> -->
            </div>
            <div class="col-lg-5 ">
                <!-- <h3 class="main-color under-line position-relative mb-5 font-weight-bold ">روابط هامة</h3> -->
                <ul class="contact-ul text-white list-unstyled h6 inline-list ">
                    <!-- <div class="row ">
                    <div class="col-md-5 "> -->
                    <div class="row ">
                        <div class="col-lg-6 ">
                            <h3 class=" sec-color mb-4 font-weight-bold ">
                                روابط سريعة
                            </h3>
                            <li class="mb-3 ">
                                <a href="{{url('/')}}" class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> الرئيسية
                                </a>
                            </li>
                            <li class="mb-3 ">
                                <a href="{{url('services')}} " class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> خدماتنا</a>
                            </li>


                            <li class="mb-3 ">
                                <a href="{{url('team')}}" class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> فريق الشركة</a>
                            </li>
                            <li class="mb-3 ">
                                <a href="{{url('posts')}}" class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> أخبار العقارات</a>

                            </li>
                            <li class="mb-3 ">
                                <a href="{{url('partners')}}" class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> شركائنا
                                </a>
                            </li>
                            <li class="mb-3 ">
                                <a href="{{url('contact-us')}} " class=" text-white ">
                                    <i class="fas fa-play sec-color "></i> تواصل معنا</a>
                            </li>

                        </div>
                        <div class="col-lg-6 ">
                            <h3 class=" sec-color h4 mb-4 font-weight-bold ">
                                تواصل معنا
                            </h3>
                            <h6 class="mb-3 ">
                                العنوان : {{$addressVC->$valueVC}}
                            </h6>

                            <h6 class="mb-3 ">
                                البريد اﻻلكتورنى : {{$emailVC->$valueVC}}
                            </h6>
                            <h6 class="mb-3 ">
                                رقم الجوال : <span class="number ">
                                      +{{$phoneVC->$valueVC}}
                                  </span>
                            </h6>
                            <h6 class="mb-3 ">
                                مواعيد العمل : {{$workTimesVC->$valueVC}}
                            </h6>

                        </div>

                    </div>

                    <!-- </div>

                </div> -->

                </ul>

            </div>
            <div class="col-lg-4 ">
                <div class=" border border-silver rounded p-3 mt-5 ">
                    <h5 class=" h6 text-white mb-4 ">
                        لا تفوت المتابعة و اﻻشتراك فى خدماتنا الجديدة أو يمكنك متابعتنا اﻵن
                    </h5>
                    <form method="post" action="{{route('email-subscribe')}}">
                        @csrf
                        <div class="input-group mb-3 " dir="ltr">
                            <div class="input-group-prepend mr-4 border-0 ">
                                        <button type="submit" class="input-group-text sec-bk text-white " id="basic-addon2 " style="border-bottom-left-radius: 5px !important; border-top-left-radius: 5px !important; border-top-right-radius: 0 !important; border-bottom-right-radius:
                                0 !important; ">
                                            <i class=" fa fa-arrow-left "></i>
                                        </button>
                            </div>
                            <input type="email" class="form-control form-control-lg text-right " name="email" placeholder="البريد اﻻلكترونى " aria-label="Recipient 's username" aria-describedby="basic-addon2" style="border-bottom-left-radius: 0px;
                                                        border-top-left-radius: 0px ;
                                                        border-top-right-radius: 5px;
                                                        border-bottom-right-radius: 5px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bg-light">
    <div class="container py-3 clearfix">
        <h5 class="text-black mb-0 mt-3" style="line-height: 2;">جميع الحقوق محفوظة © 2020 <a href="# " class="sec-color "> Smart Level</a>
            <span class="float-left ">
                    <img src='{{asset('front/ dist/img/smart-level.png ')}}' width="200"/>
                </span>
        </h5>
    </div>

</div>
<div class="over ">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
