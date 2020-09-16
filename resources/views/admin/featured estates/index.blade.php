@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.feat'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('featured-estates.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($feat_estates))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.title')}}</th>
                        <th class="text-center">{{trans('admin.address')}}</th>
                        <th class="text-center">{{trans('admin.images')}}</th>
                        <th class="text-center">{{trans('admin.edit')}}</th>
                        <th class="text-center">{{trans('admin.delete')}}</th>

                        </thead>
                        <tbody id="ajax_search">
                        @foreach($feat_estates as $feat_estate)
                            <tr id="removable{{$feat_estate->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$feat_estate->$title}}</td>
                                <td class="text-center">{{$feat_estate->$address}}</td>
                                <td class="text-center">
                                    @foreach($feat_estate->photos as $photo)
                                    <img src="{{asset($photo->path)}}"
                                         alt="" style="height: 50px;">
                                    @endforeach
                                </td>

                                <td class="text-center"><a href="{{route('featured-estates.edit', $feat_estate->id)}}"
                                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <button data-token="{{ csrf_token() }}"
                                            data-route="{{URL::route('featured-estates.destroy',$feat_estate->id)}}"
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
            {!! $feat_estates->render() !!}
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>

@endsection
