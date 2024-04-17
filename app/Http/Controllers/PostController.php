<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Model Post
use App\Models\Post;
class PostController extends Controller
{
    function index(){
        $posts = Post::all();
        return view("posts",["posts"=>$posts]);
    }
    function show($id)
    {
        $post=Post::find($id);
        return view("post",["post"=>$post]);
    }
    function create(){
        return view('create');
    }

    function store(Request $request)
    {
        // return "Created Successfully"
        $post = Post::create([
            'title' => $request['title'],
            'post' => $request['post'],
            'user_id'=> $request['user_id']
      ]);
       return redirect('/posts/');
    }
    function update(Request $request)
    {
        // return "Updated Successfully"
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        $post->user_id = $request->input('user_id');
        $post->save();
        return redirect('/posts/');
    }
    function edit($id)
    {
        $post= Post::find($id);
        return view("edit",["post"=>$post]);
    }
    function delete($id)
    {
        //return "Deleted Successfully";
        $post= Post::find($id);
        $post->delete();
        return redirect('/posts/');
    }
}
