<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {

        $user = User::find($id);





        // الحصول على المشاركات من الأصدقاء والمستخدم الحالي
        $posts = Post::where('user_id',$id)
            ->with(['user', 'likes', 'comments.user']) // جلب المستخدمين والإعجابات والتعليقات
            ->latest() // الحصول على المشاركات بترتيب آخر تاريخ
            ->get();

        $frindsCount = Friend::count();
        return Inertia::render('ProfileShow', [
            'user' => $user,
            'posts' => $posts,
            'frindsCount' => $frindsCount,
        ]);

        return $user;
    }
}
