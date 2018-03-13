@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Category
        </div>
        <div class="panel-body">
            {!! Form::open(['action' => ['CategoriesController@update', $category->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Category Name')}}
                    {{Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Enter the Category Name'])}}
                </div>
                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection