@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new post
        </div>
        <div class="panel-body">
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title', 'Title')}}
                    {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Enter the Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('content', 'Content')}}
                    {{Form::textarea('content', '', ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder'=>'Enter the content'])}}
                </div>
                <div class="form-group">
                    {{Form::label('featured image', 'Featured Image')}}
                    {{Form::file('featured_image', '')}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection