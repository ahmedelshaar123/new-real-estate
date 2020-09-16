@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.posts'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('posts.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($posts))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.title')}}</th>
                        <th class="text-center">{{trans('admin.desc')}}</th>
                        <th class="text-center">{{trans('admin.services')}}</th>
                        <th class="text-center">{{trans('admin.image')}}</th>
                        <th class="text-center">{{trans('admin.edit')}}</th>
                        <th class="text-center">{{trans('admin.delete')}}</th>

                        </thead>
                        <tbody id="ajax_search">
                        @foreach($posts as $post)
                            <tr id="removable{{$post->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$post->$title}}</td>
                                <td class="text-center">{!!$post->$desc!!}</td>
                                <td class="text-center">
                                    @foreach($post->services as $service)
                                    {{$loop->last ? $service->$title : $service->$title . ' - '}}
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <img src="{{asset($post->photo->path)}}"
                                         alt="" style="height: 50px;">
                                </td>

                                <td class="text-center"><a href="{{route('posts.edit', $post->id)}}"
                                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <button data-token="{{ csrf_token() }}"
                                            data-route="{{URL::route('posts.destroy',$post->id)}}"
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
            {!! $posts->render() !!}
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>

@endsection
