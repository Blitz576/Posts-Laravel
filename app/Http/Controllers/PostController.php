<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $posts = [
            [
                "id" => 1,
                "title" => "7ma salah",
                "post" => "7ma salah's shoulder is harming him, so that people call him ketfo",
                "publisher" => "nagy"
            ],
            [
                "id" => 2,
                "title" => "New Recipe for Chocolate Cake",
                "post" => "Just tried a new recipe for chocolate cake and it turned out amazing! Who wants a slice?",
                "publisher" => "baker_girl"
            ],
            [
                "id" => 3,
                "title" => "Trip to the Moon",
                "post" => "Just booked my ticket for a trip to the moon! Can't wait to experience zero gravity!",
                "publisher" => "space_enthusiast"
            ],
            [
                "id" => 4,
                "title" => "Exciting News!",
                "post" => "I have some exciting news to share with everyone! Stay tuned for the big announcement!",
                "publisher" => "mystery_person"
            ],
            [
                "id" => 5,
                "title" => "Gardening Tips",
                "post" => "Check out my latest blog post for some helpful gardening tips and tricks!",
                "publisher" => "green_thumb"
            ]
        ];
        return view("posts",["posts"=>$posts]);
    }
    function show($id)
    {
        $post=[
            "id"=>$id,
            "title"=>"7ma salah",
            "post"=>"7ma salah's shoulder is harming him , so that people call him ketfo",
            "publisher"=>"nagy",
        ];
        return view("post",["post"=>$post]);
    }
    function create(){
        return view('create');
    }

    function store()
    {
        // return "Created Successfully"
       return redirect('/posts/');
    }
    function update()
    {
        // return "Updated Successfully"
        return redirect('/posts/');
    }
    function edit($id)
    {
        $post=[
            "id"=>$id,
            "title"=>"7ma salah",
            "post"=>"7ma salah's shoulder is harming him , so that people call him ketfo",
            "publisher"=>"nagy",
        ];
        return view("edit",["post"=>$post]);
    }
    function delete()
    {
        //return "Deleted Successfully";
        return redirect('/posts/');
    }
}
