<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Friend;
use App\Models\Story;
use App\Models\User;
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
        //get posts friends to user page========================================================================================================
        // الحصول على معرفات الأصدقاء الذين لديهم علاقة بالمستخدم الحالي
        $friendIdsAsUserPosts = DB::table('friends')
            ->where('user_id', $user->id)
            ->where('status', 'accepted')
            ->pluck('friend_id')
            ->toArray();

        $friendIdsAsFriendPosts = DB::table('friends')
            ->where('friend_id', $user->id)
            ->where('status', 'accepted')
            ->pluck('user_id')
            ->toArray();

        // دمج معرفات الأصدقاء في مصفوفة واحدة
        $allFriendIds = array_merge($friendIdsAsUserPosts, $friendIdsAsFriendPosts);

        // إضافة المستخدم الحالي إذا كنت ترغب في تضمينه
        $allFriendIds[] = $user->id;

        // الحصول على المشاركات من الأصدقاء والمستخدم الحالي
        $posts = Post::whereIn('user_id', $allFriendIds)
            ->with(['user', 'likes', 'comments.user']) // get users & likes & comments
            ->latest() // get last 
            ->get();


        //recommed friends ========================================================================================================
        // جلب جميع العلاقات حيث يكون المستخدم هو user_id
        $friendIdsAsUser = DB::table('friends')
            ->where('user_id', $user->id)
            ->pluck('friend_id') // جلب friend_id المرتبطة بالمستخدم
            ->toArray(); // تحويل النتائج إلى مصفوفة

        // جلب جميع العلاقات حيث يكون المستخدم هو friend_id
        $friendIdsAsFriend = DB::table('friends')
            ->where('friend_id', $user->id)
            ->pluck('user_id') // جلب user_id المرتبطة بالمستخدم
            ->toArray(); // تحويل النتائج إلى مصفوفة


        $friendNotRelationWithUser = array_merge($friendIdsAsUser, $friendIdsAsFriend);

        $friendsRecommend = User::whereNotIn('id', $friendNotRelationWithUser)
            ->where('id', '!=', $user->id) // استثناء المستخدم الحالي من التوصيات
            ->get();
        //get stories  user story and his friends user=========================================================================================================================
        // get user stories
        $userStories = Story::where('user_id', $user->id)
            ->latest()
            ->with('user')
            ->first();
        // get stories friends
        $friendStories = Story::whereIn('user_id', $allFriendIds)
            ->where('user_id', '!=', $user->id) // delete user auth from query
            ->with('user')
            ->latest()
            ->get();


        // render this data in home page vue page name is : Home.vue
        return Inertia::render('Home', [
            'user' => $user,
            'user_stories' => $userStories,
            'friend_stories' => $friendStories,
            'posts' => $posts,
            'friends_request' => $friendsOrders,
            'friendsRecommend' => $friendsRecommend
        ]);
    }

    /**
     * save new post
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
     * get one post
     */
    public function show($id)
    {
        $post = Post::with('user')->findOrFail($id);
        return Inertia::render('Posts/Show', [
            'post' => $post,
        ]);
    }

    /**
     * edite post
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
     * delet post
     */
    public function destroy(Request $request)
    {
        $post_id = $request->input("Post_id");
        $post = Post::findOrFail($post_id);
        $post->delete();

        return redirect('/')->with('success', 'تم حدف المنشور بنجاح.');;
    }
}
