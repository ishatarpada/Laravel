<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController as BaseController;

class PostController extends BaseController
{
    /* Display a listing of the resource. */
    public function index()
    {
        $data['posts'] = Post::all();
        return $this->sendResponse($data, "All Post Data.");
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
            return $this->sendError($validPost, "Validation Error", 401);
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
        return $this->sendResponse($post, "successfully.");
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

        return $this->sendResponse($data, "Display The Post.");
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
                'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,svg',
            ]
        );

        // If validation fails, return a JSON response with errors
        if ($validPost->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error',
                'errors' => $validPost->errors()
            ], 401);
        }

        // Find the post by ID
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => "Post not found",
            ], 404);
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = public_path('uploads');

            // Delete the old image if it exists
            if ($post->image && file_exists($path . '/' . $post->image)) {
                unlink($path . '/' . $post->image);
            }

            // Store the new image
            $img = $request->file('image');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move($path, $imageName);

            // Update the image field in the post
            $post->image = $imageName;
        }

        // Update the post data
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $post->image, // Ensure the image field is updated if no new image is uploaded
        ]);

        // Return a JSON response with the updated post data
        return response()->json([
            'success' => true,
            'message' => "Post updated successfully.",
            'data' => $post
        ]);
    }



    /* Remove the specified resource from storage. */
    public function destroy(string $id)
    {

        $imagePath = Post::select('image')->where('id', $id)->get();
        $filePath = public_path() . '/uploads/' . $imagePath[0]['image'];
        unlink($filePath);
        $post = Post::where('id', $id)->delete();

        return $this->sendResponse($post, "Post Removed Successfully.");
    }
}
