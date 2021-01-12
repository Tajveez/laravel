<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function Index()
    {
        return view('posts.index');
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        Post::create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);
    }
}
