<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $posts = Post::latest()->paginate(5);
        return view('blog.blog', [
            'posts' => $posts
        ]);
    }

    public function stageone(){
        $posts = Post::where('stage', 0)->latest()->paginate(5);
        return view('blog.blog', [
            'posts' => $posts
        ]);
    }
    public function stagetwo(){
        $posts = Post::where('stage', 1)->latest()->paginate(5);
        return view('blog.blog', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post){
        $post->load('comments');
        return view('posts.show', compact('post'));
    }
}
