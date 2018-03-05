@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            View Cetegories
        </div>
        <div class="panel-body">
        @if(count($categories)>=1)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Category Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th>{{$category->name}}</th>
                        <th><a href="" class="btn btn-xs btn-default">edit</a></th>
                        <th><a href="" class="btn btn-xs btn-danger">delete</a></th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$categories->links()}}
        @else
            <p class="text-center">no categories found</p>
        @endif
        </div>
    </div>
@endsection