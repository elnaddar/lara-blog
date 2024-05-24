<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    private $allPosts = [];

    public function __construct() {
        $this->allPosts = [
            ['id'=>1, 'title'=>'PHP', 'posted_by'=>"Ahmed", 'created_at' => "2022-10-10 09:00:00", "description" => "Some desccription for the post"],
            ['id'=>2, 'title'=>'Javascript', 'posted_by'=>"Mohammed", 'created_at' => "2022-10-10 09:00:00", "description" => "Some desccription for the post"],
            ['id'=>3, 'title'=>'Dart', 'posted_by'=>"Ahmed", 'created_at' => "2022-11-10 09:00:00", "description" => "Some desccription for the post"],
            ['id'=>4, 'title'=>'Flutter', 'posted_by'=>"Mahmoud", 'created_at' => "2023-09-10 09:00:00", "description" => "Some desccription for the post"],
            ['id'=>5, 'title'=>'Python', 'posted_by'=>"Ahmed", 'created_at' => "2024-02-10 09:00:00", "description" => "Some desccription for the post"],
        ];
    }

    public function index(){
        return view("posts.index", ['posts' => $this->allPosts]);
    }

    public function show($postId){
        if (array_key_exists($postId - 1, $this->allPosts)) {
            $post = $this->allPosts[$postId - 1];
            return view("posts.show", ['post' => $post]);
        } else {
            abort(404, 'Post not found');
        }
    }

    public function create(){
        return view("posts.create");
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

        // redirect to index after that
        return to_route('posts.index');
    }

    public function edit($postId){
        if (array_key_exists($postId - 1, $this->allPosts)) {
            $post = $this->allPosts[$postId - 1];
            return view("posts.edit", ['post' => $post]);
        } else {
            abort(404, 'Post not found');
        }
    }

    public function update($postId){
        $data = request() -> all();

        // to look on data
        // return $data;

        return to_route('posts.show', $postId);
    }

    public function destroy($postId){
        return to_route('posts.index');
    }
}
