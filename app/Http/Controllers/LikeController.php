<?php

namespace App\Http\Controllers;

use App\Models\Post;

class LikeController extends Controller
{
    /**
     * Store like in storage.
     *
     * @param Post $post
     */
    public function store(Post $post)
    {
        $post->like(auth()->user());
    }

    /**
     * Remove like.
     *
     * @param Post $post
     * @return mixed
     */
    public function destroy(Post $post)
    {
        return $post->reverse(auth()->user());
    }
}
