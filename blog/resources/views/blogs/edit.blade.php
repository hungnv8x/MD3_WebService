@extends('welcome')
@section('title','blog edit')
@section('content')
    <form action="{{route('blogs.update',$blog->id)}}" method="post">
        @csrf
        <input type="text" name="title" value="{{$blog->title}}">
        <input type="text" name="content" value="{{$blog->content}}">
        <button class="btn btn-success">Update</button>
        <a type="btn" class="btn btn-success" href="{{route('blogs.list')}}">Call</a>
    </form>
@endsection
