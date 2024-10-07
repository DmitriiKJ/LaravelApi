<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        return view("index");
    }

    // public function store(Request $request)
    // {
    //     $post = Post::create([
    //         'title' => $request->input('title'),
    //         'content' => $request->input('content')
    //     ]);
    //     return view("index");
    // }
}
