@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.roles'),

                                ])
@section('content')
    <div class="ibox-content">
        <div @if(app()->getLocale() == 'ar')  class="pull-right" @else class="pull-left" @endif>
            <a href="{{route('roles.create')}}" class="btn btn-primary">
                <i class="fa fa-plus"></i>{{trans('admin.add')}}
            </a>
        </div>
        <hr>
        <div class="box-body">
            @if(count($roles))
                <div class="table-responsive">
                    <table class="data-table table table-bordered">
                        <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">{{trans('admin.name')}}</th>
                        <th class="text-center">{{trans('admin.permissions')}}</th>
                        <th class="text-center">{{trans('admin.edit')}}</th>
                        <th class="text-center">{{trans('admin.delete')}}</th>

                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr id="removable{{$role->id}}">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$role->name}}</td>
                                <td class="text-center">
                                    @foreach($role->permissions as $permission)
                                        {{$loop->last ? trans("admin.$permission->name") : trans("admin.$permission->name") . ' - '}}
                                    @endforeach
                                </td>
                                @if($role->name != 'Super Admin')
                                <td class="text-center"><a href="{{route('roles.edit',$role->id)}}"
                                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                </td>
                                <td class="text-center">
                                    <button data-token="{{ csrf_token() }}"
                                            data-route="{{URL::route('roles.destroy',$role->id)}}"
                                            type="button" class="destroy btn btn-danger btn-xs"><i
                                            class="fa fa-trash-o"></i></button>
                                @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
        <div class="text-center">
            {!! $roles->render() !!}
        </div>
        @else
            <div class="col-md-4 col-md-offset-4">
                <div class="alert alert-info md-blue text-center">{{trans('admin.no_data')}}</div>
            </div>
        @endif
    </div>

@endsection
