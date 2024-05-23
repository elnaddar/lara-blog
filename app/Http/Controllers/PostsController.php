<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $allPosts = [
            ['id'=>1, 'title'=>'PHP', 'posted_by'=>"Ahmed", 'created_at' => "2022-10-10 09:00:00"],
            ['id'=>2, 'title'=>'Javascript', 'posted_by'=>"Mohammed", 'created_at' => "2022-10-10 09:00:00"],
            ['id'=>3, 'title'=>'Dart', 'posted_by'=>"Ahmed", 'created_at' => "2022-11-10 09:00:00"],
            ['id'=>4, 'title'=>'Flutter', 'posted_by'=>"Mahmoud", 'created_at' => "2023-09-10 09:00:00"],
            ['id'=>5, 'title'=>'Python', 'posted_by'=>"Ahmed", 'created_at' => "2024-02-10 09:00:00"],
        ];
        return view("test", ['posts' => $allPosts]);
    }
}
