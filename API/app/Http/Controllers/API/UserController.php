<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    /* Display a listing of the resource. */
    public function index()
    {
        $data['posts'] = Post::all();
        return response()->json([
            'status' => true,
            'message' => "All Post Data",
            'data' => $data,
        ], 200);
    }

    /* Store a newly created resource in storage. */
    public function store(Request $request)
    {
        $validPost = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg,gif,svg',
            ]
        );

        // if validation is failed then send response data
        if ($validPost->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Validation Error",
                'errors' => $validPost->errors()->all()
            ], 401);
        }

        $img = $request->image;
        $ext = $img->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $img->move(public_path() . '/uploads', $imageName);

        // if validation not failed then send the data to database
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        // and response the data
        return response()->json([
            'status' => true,
            'message' => "post Created Successfully",
            'post' => $post,
        ], 200);
    }

    /* Display the specified resource. */
    public function show(string $id)
    {
        $data['post'] = Post::select(
            'id',
            'title',
            'description',
            'image',
        )->where(['id' => $id])->get();

        return response()->json([
            'status' => true,
            'message' => "Display The Post ",
            'data' => $data,
        ], 200);
    }

    /* Update the specified resource in storage. */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validPost = Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'description' => 'required',
                'image' => 'nullable|mimes:png,jpg,jpeg,gif,svg',
            ]
        );

        // If validation fails, return a JSON response with errors
        if ($validPost->fails()) {
            return response()->json([
                'status' => false,
                'message' => "Validation Error",
                'errors' => $validPost->errors()->all()
            ], 401);
        }

        // Find the post by ID
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => false,
                'message' => "Post not found",
            ], 404);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = public_path() . '/uploads';

            // Delete the old image if it exists
            if ($post->image && file_exists($path . '/' . $post->image)) {
                unlink($path . '/' . $post->image);
            }

            // Store the new image
            $img = $request->file('image');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move($path, $imageName);
        } else {
            $imageName = $post->image; // Keep the old image if no new image is uploaded
        }

        // Update the post data
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        // Return a JSON response with the updated post data
        return response()->json([
            'status' => true,
            'message' => "Post updated successfully",
            'post' => $post,
        ], 200);
    }


    /* Remove the specified resource from storage. */
    public function destroy(string $id)
    {

        $imagePath = Post::select('image')->where('id', $id)->get();
        $filePath = public_path() . '/uploads/' . $imagePath[0]['image'];
        unlink($filePath);
        $post = Post::where('id', $id)->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Removed Successfully",
            'post' => $post,
        ], 200);
    }
}