@extends('welcome')
@section('title','blog list')
@section('content')
    <a type="button" class="btn btn-success mb-3" href="{{route('blogs.create')}}">Create</a>
    @if(\Illuminate\Support\Facades\Session::has('msg'))
        <p style="color: #1e7e34">{{\Illuminate\Support\Facades\Session::get('msg')}}</p>
    @endif
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col" width="200px">Title</th>
        <th scope="col" width="600px">Content</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key => $blog)
    <tr>
        <td>{{$key +1}}</td>
        <td>{{$blog->title}}</td>
        <td>{{$blog->content}}</td>
        <td>
            <a type="button" class="btn btn-success" href="{{route('blogs.edit',$blog->id)}}">Edit</a>
            <a onclick="return confirm('Are you sure?')" type="button" class="btn btn-danger" href="{{route('blogs.delete',$blog->id)}}">Delete</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
