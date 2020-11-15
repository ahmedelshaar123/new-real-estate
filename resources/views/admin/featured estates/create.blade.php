@extends('layouts.admin.app',[
            'page_header'       => trans('admin.site'),
            'page_description'       => trans('admin.feat'),

                                ])
@inject('feat_estate', 'App\Models\BottomSlider')
@section('content')
    <div class="box">
    @include('layouts.partials.validation-errors')
    <!-- form start -->
        {!! Form::model($feat_estate,[
                                'action'=>'Admin\FeaturedEstateController@store',
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
                    <label for="address">{{trans("admin.address_$key")}}</label>
                    {!! Form::text("address_$key",null,[
                        'class'=>'form-control',

                    ]) !!}
                    <br>
                @endforeach

                <label for="image">{{trans('admin.images')}}</label>
                <input multiple name="image[]" type="file" id="multi-imgs-tag" onchange="previewImages(this)">
                <br>
                <div id="preview"></div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
        </div>
        {!! Form::close()!!}
    </div>
@stop
