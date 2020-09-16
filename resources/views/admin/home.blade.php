@extends('layouts.app_admin',[
                                'page_header'       => trans('admin.site'),
                                'page_description'  => trans('admin.statistics')
                                ])


@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-3">
                <div class="widget red-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-users fa-4x"></i>
                        <h1 class="m-xs">{{$companyTeam}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.team')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-red p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-mail-reply-all fa-4x"></i>
                        <h1 class="m-xs">{{$subscribers}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.subscribers')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-purple p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-hand-o-up fa-4x"></i>
                        <h1 class="m-xs">{{$services}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.services')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget white-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-handshake-o fa-4x"></i>
                        <h1 class="m-xs">{{$partners}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.partners')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget gray-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-building-o fa-4x"></i>
                        <h1 class="m-xs">{{$featured}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.feat')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-yellow-gradient p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-sliders fa-4x"></i>
                        <h1 class="m-xs">{{$bottom_sliders}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.bot')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget yellow-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-sliders fa-4x"></i>
                        <h1 class="m-xs">{{$topSliders}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.top')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-light-blue p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-user-plus fa-4x"></i>
                        <h1 class="m-xs">{{$users}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.users')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-purple-active p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-plus fa-4x"></i>
                        <h1 class="m-xs">{{$roles}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.roles')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget blue-bg p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-newspaper-o fa-4x"></i>
                        <h1 class="m-xs">{{$posts}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.posts')}}
                        </h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="widget bg-green p-lg text-center">
                    <div class="m-b-md">
                        <i class="fa fa-phone fa-4x"></i>
                        <h1 class="m-xs">{{$contacts}}</h1>
                        <h3 class="font-bold no-margins">
                            {{trans('admin.contacts')}}
                        </h3>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
