@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.team'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('company-team.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($comp_team))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.name')}}</th>
                        <th class="text-center">{{trans('admin.job')}}</th>
                        <th class="text-center">{{trans('admin.fb_url')}}</th>
                        <th class="text-center">{{trans('admin.tw_url')}}</th>
                        <th class="text-center">{{trans('admin.insta_url')}}</th>
                        <th class="text-center">{{trans('admin.image')}}</th>
                        <th class="text-center">{{trans('admin.edit')}}</th>
                        <th class="text-center">{{trans('admin.delete')}}</th>

                        </thead>
                        <tbody id="ajax_search">
                        @foreach($comp_team as $comp_per)
                            <tr id="removable{{$comp_per->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$comp_per->$name}}</td>
                                <td class="text-center">{{$comp_per->$job}}</td>
                                @if($comp_per->fb_url == null)
                                    <td class="text-center">{{trans('admin.no_data')}}</td>
                                @else
                                    <td class="text-center">{{$comp_per->fb_url}}</td>
                                @endif
                                @if($comp_per->tw_url == null)
                                    <td class="text-center">{{trans('admin.no_data')}}</td>
                                @else
                                    <td class="text-center">{{$comp_per->tw_url}}</td>
                                @endif
                                @if($comp_per->insta_url == null)
                                    <td class="text-center">{{trans('admin.no_data')}}</td>
                                @else
                                    <td class="text-center">{{$comp_per->insta_url}}</td>
                                @endif
                                <td class="text-center">
                                    <img src="{{asset($comp_per->photo->path)}}"
                                         alt="" style="height: 50px;">
                                </td>

                                <td class="text-center"><a href="{{route('company-team.edit', $comp_per->id)}}"
                                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <button data-token="{{ csrf_token() }}"
                                            data-route="{{URL::route('company-team.destroy',$comp_per->id)}}"
                                            type="button" class="destroy btn btn-danger btn-xs"><i
                                            class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        <div class="text-center">
            {!! $comp_team->render() !!}
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>

@endsection
