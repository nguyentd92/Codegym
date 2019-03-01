<?php

namespace App\Http\Controllers;
use App\Blog;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function list() {
        $blogs = Blog::paginate(5);
        return view('blog.list', compact('blogs'));
    }

    public function add() {
        return view('blog.add');
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
        return view('blog.modify', ['blogs' => Blog::all()]);
    }

    public function showById($id) {
        return view('blog.show', ['blog' => Blog::findOrFail($id)]);
    }

    public function edit($id) {
        return view('blog.edit', ['blog' => Blog::findOrFail($id)]);
    }

    public function update($id, Request $request) {
        DB::table('blogs')
            ->where('id', $id)
            ->update(['title' => $request->inputTitle, 'content' => $request->inputContent, 'category' => $request->inputCategory]);

        return redirect()->route('blog.modify', ['blogs' => Blog::all()]);
    }   
    
    public function delete($id) {
        return view('blog.delete', ['blog' => Blog::findOrFail($id)]);
    }

    public function destroy(Request $request) {
        DB::table('blogs')->where('id', '=', $request->id)->delete();
        return redirect()->route('blog.modify', ['blogs' => Blog::all()]);
    }
   

}

