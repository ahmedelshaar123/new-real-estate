@extends('layouts.admin.app',[
         'page_header'       => trans('admin.site'),
         'page_description'       => trans('admin.subscribers')
                                ])
@section('content')
    <div class="ibox-content">
        <div class="box-body">
            @if(count($subscribers))
                <div class="table-responsive">
                    <table class="data-table table table-bordered" id="table1">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.email')}}</th>
                        <th class="text-center">{{trans('admin.delete')}}</th>
                        </thead>
                        <tbody id="ajax_search">
                        @foreach($subscribers as $subscriber)
                            <tr id="removable{{$subscriber->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$subscriber->email}}</td>
                                <td class="text-center">
                                    <button id="{{$subscriber->id}}" data-token="{{ csrf_token() }}"
                                            data-route="{{route('subscribers.destroy',$subscriber->id)}}"
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
{{--            {!! $subscribers->render() !!}--}}
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>
@stop
