<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function postSave(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data['user_id'] = auth()->id();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $data['image'] = $path;
        }

        $post = Post::create($data);

        if ($post) {
            return redirect()->route('postShow', ['id' => $post->id])->with('success', 'Post created successfully!');
        }

        return back()->with('error', 'There was an error creating the post.');
    }


    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        Gate::authorize('update', $post);
        /* if ($request->user()->cannot('update', $id)) {
            abort(403 , "you are not authorized");
        } */


        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post->title = $request->input('title');
        $post->description = $request->input('description');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image', 'public');
            $post->image = $path;
        }

        $post->save();

        return Redirect::route('postShow', ['id' => $id])->with('success', 'Post updated successfully.');
    }



    public function show($id)
    {
        $post = Post::findOrFail($id);
        // Gate::authorize('view', $post);

        $userPosts = Post::get();

        return view('postShow', [
            'post' => $post,
            'userPosts' => $userPosts
        ]);
    }



    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('updatePost', compact('post'));
    }


    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        Gate::authorize('delete', $post);

        $post->delete();
        return Redirect::route('postShow')->with('success', 'Post deleted successfully.');
    }


    /* public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('postDetail', compact('post'));
    } */
}
