<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $post_id = $request->input("post_id");
        $user = auth()->user();

        // التحقق من الإعجاب الحالي
        $existingLike = Like::where('user_id', $user->id)
            ->where('post_id', $post_id)
            ->first();

        if ($existingLike) {
            // حذف الإعجاب إذا كان موجودًا
            $existingLike->delete();
        } else {
            // إنشاء إعجاب جديد إذا لم يكن موجودًا
            Like::create([
                'user_id' => $user->id,
                'post_id' => $post_id,
            ]);
        }

        // إعادة المنشور المحدث مع عدد الإعجابات الجديد
        $post = Post::with('likes')->find($post_id);

        return redirect()->back()->with('post', $post);  // العودة مع المنشور المحدث
    }
}
