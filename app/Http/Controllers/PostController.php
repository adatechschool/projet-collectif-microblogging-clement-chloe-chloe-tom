<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'posts' => Post::latest()->get(), // Exemple de récupération de tous les posts
            // Ajoutez d'autres données ici
        ];
        return view('dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogpost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => ['required', 'string','max:255'],
        //     'content' => ['required', 'string', 'max:255'],
        //     // 'picture' => ['required', 'file', 'mimes:jpg,png,gif', 'max:3072'],
        // ]);

        // $picturePath = $request->file('picture')->storePublicly('picture');
        
        Post::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'user_id' => 1
            // 'title'=> $request->title,
            // 'content'=> $request->content,
            // 'picture'=> $picturePath,
            // 'user_id'=> Auth::user()->id
        ]);

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('blogpost.show', [
            'post' => $post
        ]);
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
