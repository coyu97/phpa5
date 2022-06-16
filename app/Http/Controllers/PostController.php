<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }

    public function postMessage(Request $request)
    {
        Post::create([
            "created_at" => time(),
            "message" => $request->input("body"),
            "user_id" => auth()->id(),
        ]);

        return redirect($request->url());
    }
}


