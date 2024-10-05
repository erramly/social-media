<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller

{

    /**
     * show posts and friends request
     */
    public function index()
    {
        $user = Auth::user();


        $friendsOrders = Friend::where("user_id", $user->id)
            ->where("status", 'pending')
            ->with('friend')
            ->get();

        // get user auth friends 
        $friendIds = DB::table('friends')
            ->where('user_id', auth()->id())
            ->where('status', 'accepted')
            ->pluck('friend_id')
            ->toArray();

        // add posts user auth 
        $friendIds[] = $user->id;

        // get friends posts and post user auth
        $posts = Post::whereIn('user_id', $friendIds)
            ->with(['user', 'likes', 'comments.user']) // get users and likes and comments
            ->latest() // get post by last date
            ->get();

        // render this data in home page vue page name is : Home.vue
        return Inertia::render('Home', [
            'user' => $user,
            'posts' => $posts,
            'friends_request' => $friendsOrders
        ]);
    }

    /**
     * تخزين منشور جديد.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10000',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('video')) {
            $post->video = $request->file('video')->store('videos', 'public');
        }

        $post->save();

        return redirect('/')->with('success', 'تم إنشاء المنشور بنجاح.');
    }

    /**
     * عرض منشور معين.
     */
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return Inertia::render('Posts/Show', [
            'post' => $post,
        ]);
    }

    /**
     * عرض نموذج تعديل المنشور.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return Inertia::render('Posts/Edit', [
            'post' => $post,
        ]);
    }

    /**
     * تحديث المنشور.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,avi|max:10000',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $post->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('video')) {
            $post->video = $request->file('video')->store('videos', 'public');
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'تم تحديث المنشور بنجاح.');
    }

    /**
     * حذف المنشور.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'تم حذف المنشور بنجاح.');
    }
}
