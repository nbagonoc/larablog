@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="text-center text-capitalize">{{$post->title}}</h2>
            <p class="text-muted text-center">Category: {{$post->category->name}}</p>
        </div>
        <div class="panel-body">
            <img/ src="/storage/featured_images/{{$post->featured_image}}" class="img-responsive center-block"></th>
            <p>{{$post->content}}</p>
        </div>
    </div>
@endsection