@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.services'),

                                ])
@inject('service', 'App\Models\Service')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($service,[
                                'action'=>'Admin\ServiceController@store',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                'files'=>true
                                ])!!}
        <div class="box-body">
            <div class="form-group">
                @foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
                    <label for="title">{{trans("admin.title_$key")}}</label>
                    {!! Form::text("title_$key",null,[
                        'class'=>'form-control',

                    ]) !!}
                    <br>
                    <label for="desc">{{trans("admin.desc_$key")}}</label>
                    {!! Form::textarea("desc_$key",null,[
                        'class'=>'form-control myTextArea',
                        'rows'=>'15',

                    ]) !!}
                    <br>
                @endforeach
                <label for="thumbnail">{{trans('admin.icon')}}</label>
                <input name="thumbnail" id="icon-preview-tag" type="file" onchange="readImg(this, '#icon-preview');">
                <br>
                <img id="icon-preview" alt="" style="height: 50px;">
                <br><br>
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
    <br>
@stop
