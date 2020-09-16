@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.roles'),

                                ])
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($role,[
                                'action'=>['Admin\RoleController@update', $role->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',

                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="name">{{trans("admin.name")}}</label>
                {!! Form::text("name",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <select multiple name="permissions[]">
                    <option disabled value="">{{trans('admin.choose_role_or_more')}}</option>
                    @foreach($permissions as $permission)
                        <option {{in_array($permission->id, $rolePermissions) ? 'selected' : ''}} value="{{$permission->id}}">{{ trans("admin.$permission->name") }}</option>
                    @endforeach
                </select>
                <br>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
