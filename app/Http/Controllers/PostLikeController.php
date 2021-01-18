<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    public function Store(Post $post, Request $request)
    {
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        return back();
    }
}
