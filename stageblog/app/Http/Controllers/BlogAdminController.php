<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'hi';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3',
            'intro' => 'required',
            'description' => 'required',
            'author' => 'required',
            'authorimage' => '',
            'image' => '',
            'stage' => '',
            'published' => '',
        ]);
        
        $post = new Post($data);
        $post->save();

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $comments = $post->load('comments')->comments;
        return view('blog.post', compact('post'), ['comments' => $comments]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
