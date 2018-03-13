@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View Blog Posts
        </div>
        <div class="panel-body">
        @if(count($posts)>=1)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col" class="col-sm-2">Image</th>
                        <th scope="col" class="col-sm-6">Title</th>
                        <th scope="col" class="col-sm-2">Edit </th>
                        <th scope="col" class="col-sm-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th><a href="{{ route('post.show', ['id'=> $post->id]) }}"><img/ src="/storage/featured_images/{{$post->featured_image}}" width="25px" height="25px"></th>
                        <th><a href="{{ route('post.show',['id'=> $post->id]) }}">{{$post->title}}</a></th>
                        <th><a href="" class="btn btn-xs btn-default">edit</a></th>
                        <th><a href="" class="btn btn-xs btn-danger">delete</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$posts->links()}}
        @else
            <p class="text-center">no blog post found</p>
        @endif
        </div>
    </div>
@endsection