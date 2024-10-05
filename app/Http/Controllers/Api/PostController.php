<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // جلب جميع المنشورات

    public function index()
    {
        $user = auth()->user();

        $post = Post::where("user_id", $user->id)->get();
        // $user = auth()->user()->id;

        // $posts = Post::where('user_id', $user)->get();

        return response()->json(["posts" => $post], 200);
    }

    // جلب منشور معين
    public function show($id)
    {
        $post = Post::with('user')->find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($post, 200);
    }

    // إنشاء منشور جديد
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images_posts', 'public');
        }

        if ($request->hasFile('video')) {
            $post->video = $request->file('video')->store('videos', 'public');
        }

        $post->save();

        return response()->json($post, 201);
    }

    // تحديث منشور موجود
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10000',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('video')) {
            $post->video = $request->file('video')->store('videos', 'public');
        }

        $post->save();

        return response()->json($post, 200);
    }

    // حذف منشور
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
