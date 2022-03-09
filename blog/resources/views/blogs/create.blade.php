@extends('welcome')
@section('title','blog create')
@section('content')
    <form action="{{route('blogs.store')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Title" >
        <input type="text" name="content" placeholder="Content">
        <button class="btn btn-success">Create</button>
        <a type="btn" class="btn btn-success" href="{{route('blogs.list')}}">Call</a>
    </form>
@endsection
