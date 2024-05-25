<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view("posts.index", ['posts' => $posts]);
    }

    public function show(Post $post){
        // replaced this using Route Binding. "If you forgot read about it in the docs."
        // $post = Post::findOrFail($postId);
        return view('posts.show', ['post' => $post]);
    }

    public function create(){
        $users = \App\Models\User::all();
        return view("posts.create", ['users'=>$users]);
    }

    public function store(){
        // to get the data object call `all()` method from `request()` object.
        $data = request() -> all();
        // to look on data
        // return $data;

        // or get every thing individual by getting the `name` property from `request()` object.
        // $title = request() -> title;
        // $description = request() -> description;
        // $post_creator = request() -> post_creator;

        // save in the data base
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
        // redirect to index after that
        return to_route('posts.index');
    }

    public function edit(Post $post){
        $users = \App\Models\User::all();
        return view("posts.edit", ['post' => $post, 'users'=>$users]);
    }

    public function update(Post $post){
        $data = request() -> all();

        // to look on data
        // return $data;
        $post->update([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
        return to_route('posts.show', $post->id);
    }

    public function destroy($postId){
        return to_route('posts.index');
    }
}
