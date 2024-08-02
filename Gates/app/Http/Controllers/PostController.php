<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function postSave(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data['user_id'] = auth()->id();

        $post = Post::create($data);

        if ($post) {
            return redirect()->route('dashboard')->with('success', 'Post created successfully!');
        }

        return back()->with('error', 'There was an error creating the post.');
    }

    public function postShow()
    {
        $posts = Post::where('user_id', Auth::id())->get();
        // return $posts;
        return view('postShow', compact('posts'));
        // dd($posts);
    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        $targetUser = $post->user_id;


        Gate::authorize('updatePost', $targetUser);
        $post = Post::findorfail($id);
        return $post;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $targetUser = $post->user_id;


        Gate::authorize('deletePost', $targetUser);
        $post = Post::findorfail($id);
        $post->delete();
        return view("dashboard");
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('postDetail', compact('post'));
    }
}
