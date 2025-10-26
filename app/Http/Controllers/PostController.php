<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Post::paginate(3); // simplePaginate();

        return view('posts.index', [
            'posts' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedForm = $request->validated();

        Arr::set($validatedForm, 'uuid', Str::uuid()); // $validatedForm['uuid'] = Str::uuid();

        Post::create($validatedForm);

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($post)
    {
        // Post::where('id', $post->id)->first();

        $post = Post::whereUuid($post)->first();

        return view('posts.show', [
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
