<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testAction(){
        $localName = "Ahmed Mahdy";
        $localBooks = ["PHP", "Laravel", "Zero"];
        return view("test", [
            "name" => $localName,
            "books" => $localBooks
        ]);
    }
}
