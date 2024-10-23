<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function show($id)
    {
        $news = Http::get('https://bladna24.ma/wp-json/wp/v2/posts/');

        // التأكد من نجاح الطلب
        if ($news->successful()) {
            $news = $news->json(); // تحويل البيانات إلى مصفوفة
        } else {
            $news = []; // في حال حدوث خطأ
        }



        
        $user = User::find($id);





        // الحصول على المشاركات من الأصدقاء والمستخدم الحالي
        $posts = Post::where('user_id', $id)
            ->with(['user', 'likes', 'comments.user']) // جلب المستخدمين والإعجابات والتعليقات
            ->latest() // الحصول على المشاركات بترتيب آخر تاريخ
            ->get();

        $frindsCount = Friend::count();
        return Inertia::render('ProfileShow', [
            'user' => $user,
            'posts' => $posts,
            'news'=>$news,
            'frindsCount' => $frindsCount,
        ]);

        return $user;
    }
}
