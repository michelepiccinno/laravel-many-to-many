<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Type;
use App\Models\Technology;
//use App\Http\Requests\StorePostRequest;
//use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view("admin.posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("admin.posts.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $validati = $request->validated();
        $newPost = new Post();
        $newPost->fill($validati);
        $newPost->save();
        if ($request->technologies) {
            $newPost->technologies()->attach($request->technologies);
        }
        // return redirect()->route("admin.posts.show", $newPost->id);
        return redirect()->route("admin.posts.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $posts = Post::all();
        return view("admin.posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        /*ci serve per passare a edit l'elenco di tipi disponibili per un eventuale modifica del dato*/
        $types = Type::all();
        $technologies = Technology::all();
        return view("admin.posts.edit", compact("post", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        $data = $request->all(); 
        $post->update($data);
       /*  dd(var_dump($data)); */
        $post->technologies()->sync($request->technologies);
        return redirect()->route('admin.posts.index', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
