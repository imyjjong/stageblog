<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post){
        $request->validate([
            'author' => 'required',
            'image' => 'required',
            'comment' => 'required'
        ]);

        $post->comments()->create([
            'author' => $request->input('author'),
            'image' => $request->input('image'),
            'comment' => $request->input('comment')
        ]);

        return redirect()->route('posts.show', $post)->with('succes', 'wauw it actually worked');
    }
}
