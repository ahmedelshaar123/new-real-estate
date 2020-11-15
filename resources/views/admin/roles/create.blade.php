@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.roles'),

                                ])
@inject('role', 'Spatie\Permission\Models\Role')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($role,[
                                'action'=>'Admin\RoleController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',

                                ])!!}
        <div class="box-body">
            <div class="form-group">
                <label for="name">{{trans("admin.name")}}</label>
                {!! Form::text("name",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <select multiple name="permissions[]">
                    <option selected disabled value="">{{trans('admin.choose_role_or_more')}}</option>
                    @foreach($permissions as $permission)
                        <option value="{{$permission->id}}">{{ trans("admin.$permission->name") }}</option>
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
