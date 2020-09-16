@extends('layouts.app_admin',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.team'),

                                ])
@inject('comp_per', 'App\Models\CompanyTeam')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($comp_per,[
                                'action'=>'Admin\CompanyTeamController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                    <label for="name">{{trans("admin.name_$key")}}</label>
                    {!! Form::text("name_$key",null,[
                        'class'=>'form-control',

                    ]) !!}
                    <br>
                    <label for="job">{{trans("admin.job_$key")}}</label>
                    {!! Form::text("job_$key",null,[
                        'class'=>'form-control',

                    ]) !!}
                    <br>
                @endforeach
                <label for="fb_url">{{trans('admin.fb_url')}}</label>
                {!! Form::url('fb_url',null,[
                    'class'=>'form-control',
                ]) !!}
                <br>
                <label for="tw_url">{{trans('admin.tw_url')}}</label>
                {!! Form::url('tw_url',null,[
                    'class'=>'form-control',
                ]) !!}
                <br>
                <label for="insta_url">{{trans('admin.insta_url')}}</label>
                {!! Form::url('insta_url',null,[
                    'class'=>'form-control',
                ]) !!}
                <br>
                <label for="image">{{trans('admin.image')}}</label>
                <input name="image" id="img-preview-tag" type="file" onchange="readImg(this, '#img-preview');">
                <br>
                <img id="img-preview" alt="" style="height: 50px;">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
