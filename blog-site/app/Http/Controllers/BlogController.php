<?php

namespace App\Http\Controllers;
use App\Blog;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list() {
        $blogs = Blog::all();
        return view('listblog', compact('blogs'));
    }

    public function add() {
        return view('addblog');
    }

    public function store(Request $request) {
        $blog = new Blog;
        $blog->title = $request->inputTitle;
        $blog->content = $request->inputContent;
        $blog->category = $request->inputCategory;

        $blog->save();

        return redirect()->route('blog.list', ['blogs' => Blog::all()]);
    }

    public function modify() {
        return view('modifylist', ['blogs' => Blog::all()]);
    }

    public function showById($id) {
        return view('showblog', ['blog' => Blog::findOrFail($id)]);
    }

    public function edit($id) {
        return view('editblog', ['blog' => Blog::findOrFail($id)]);
    }

    public function update($id, Request $request) {
        DB::table('blogs')
            ->where('id', $id)
            ->update(['title' => $request->inputTitle, 'content' => $request->inputContent, 'category' => $request->inputCategory]);

        return redirect()->route('blog.modify', ['blogs' => Blog::all()]);
    }   
    
    public function delete($id) {
        return view('deleteblog', ['blog' => Blog::findOrFail($id)]);
    }

    public function destroy(Request $request) {
        DB::table('blogs')->where('id', '=', $request->id)->delete();
        return redirect()->route('blog.modify', ['blogs' => Blog::all()]);
    }

}

