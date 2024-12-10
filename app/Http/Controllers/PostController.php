<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController
{
    public function index()
    {
        /* con metodo get */
        /* $posts = DB::table('posts')->get(); */

        /* con metodo ORM */

        $posts = Post::get();

        return view('/posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        /* sin type hints */
        /*  return Post::findOrFail($post); */

        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        /*                 $post = new Post();

        $post->title = request('title');
        $post->content = request('content');

        $post->save(); */

        Post::create($request->validated());

        session()->flash('status', 'Post created successfully');

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(Post $post, SavePostRequest $request)
    {
        /*         $post->title = request('title');
        $post->content = request('content');

        $post->save(); */

        $post->update($request->validated());

        session()->flash('status', 'Post updated successfully');

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('status', 'Post deleted successfully');

        return redirect()->route('posts.index');
    }

    public function showHome()
    {
        // Obtener los tres posts más recientes
        $posts = Post::latest()->take(6)->get();

        // Pasar los posts a la vista
        return view('welcome', ['posts' => $posts]);
    }
}
