@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.users'),

                                ])
@inject('user', 'App\User')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($user,[
                                'action'=>'Admin\UserController@store',
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
                <label for="email">{{trans("admin.email")}}</label>
                {!! Form::text("email",null,[
                    'class'=>'form-control',

                ]) !!}
                <br>
                <label for="password">{{trans("admin.password")}}</label>
                <input type="password" class="form-control" name="password">
                <br>
                <label for="confirm-password">{{trans("admin.confirm_new_password")}}</label>
                <input type="password" class="form-control" name="confirm-password">
                <br>
                <select multiple name="roles[]">
                    <option disabled selected value="">{{trans('admin.choose_role_or_more')}}</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->name}}</option>
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
