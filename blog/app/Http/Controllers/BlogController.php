<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.list',compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::all()->find($id);
        return view('blogs.edit',compact('blog'));
    }

    public function update(Request $request)
    {
        $blog = Blog::all()->find($request->id);
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        Session::flash('msg','Cập nhật thành công');
        return redirect()->route('blogs.list');
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('blogs.list');
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        try {
            $blog = new Blog();
            $blog->title = $request->input('title');
            $blog->content = $request->input('content');
            $blog->save();
            Session::flash('msg','Thêm thành công');
            return redirect()->route('blogs.list');
        }
        catch (Exception $exception){
            exit($exception->getMessage());
        }
    }

}
