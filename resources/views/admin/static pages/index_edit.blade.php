@extends('layouts.admin.app',[
                                'page_header'       => trans('admin.site'),
                                'page_description'  => trans('admin.static_pages')
                                ])
@inject('staticPage', 'App\Models\StaticPage')

@section('content')
    <div class="box box-primary">
        <!-- form start -->
        {!! Form::model($staticPage,[
                                'action'=>['Admin\StaticPageController@update',$staticPage->id],
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'PUT',
                                'files'=>'true',
                                ])!!}

        <div class="box-body">
            @include('layouts.partials.validation-errors')

            @foreach($staticPages as $staticPage)
                <div class="form-body">
                    <div class="form-group">
                        @if($staticPage->type == 'text')
                            <label for="{{$staticPage->key}}">{{$staticPage->$name}}</label>
                            {!! Form::text($staticPage->key,$staticPage->$value,[
                                'class'=>'form-control',
                            ]) !!}
                            <br>
                        @elseif($staticPage->type == 'textarea')
                            <label for="{{$staticPage->key}}">{{$staticPage->$name}}</label>
                            {!! Form::text($staticPage->key,$staticPage->$value,[
                                'class'=>'form-control myTextArea',
                            ]) !!}
                            <br>
                        @elseif($staticPage->type == 'image')
                            <label for="image">{{$staticPage->$name}}</label>
                            <input @if($staticPage->key == 'vision_image') name="vision_image" @elseif($staticPage->key == 'message_image') name="message_image"
                                    @elseif($staticPage->key == 'desc_image') name="desc_image" @endif
                                    id="img-preview-tag" type="file" onchange="readImg(this, '#img-preview-{{$staticPage->id}}');">
                            <br>
                            <img id="img-preview-{{$staticPage->id}}" alt="" style="height: 50px;" src="{{asset($staticPage->photo->path)}}">
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{trans('admin.save')}}</button>
            </div>

        </div>
        <br>
        {!! Form::close()!!}



    </div><!-- /.box -->

@endsection


