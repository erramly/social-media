<?php

namespace App\Http\Controllers;

use App\Models\Post;


use App\Models\User;
use Inertia\Inertia;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $user = Auth::user();


        // $friendsOrders = Friend::where("user_id", $user->id)
        //     ->where("status", 'pending')
        //     ->with('friend')
        //     ->get();
        // =======================================================================
        // جلب جميع أصدقاء المستخدم الحالي

        if ($user) {
            $userAuth = User::where("id", $user->id)->first();
            // Continue your logic here
        } else {
            // Handle the case when $user is null
            return response()->json(['error' => 'User not found'], 404);
        }
        // $friendIds = $user->friends()->pluck('id')->toArray();

        // إضافة معرف المستخدم الحالي ليشمل منشوراته هو أيضًا
        // $friendIds[] = $user->id;

        // // جلب منشورات الأصدقاء بما في ذلك منشورات المستخدم نفسه
        // $posts = Post::whereIn('user_id', $friendIds)
        //     ->with('user') // لجلب معلومات المستخدم صاحب المنشور
        //     ->latest() // لترتيب المنشورات من الأحدث إلى الأقدم
        //     ->get();


        // return Inertia::render('Home', [
        //     'posts' => $posts,
        //     'friends_request' => $friendsOrders
        // ]);

        return response()->json(["data" => $userAuth]);
    }
}
