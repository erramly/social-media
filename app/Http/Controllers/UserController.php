<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // معالجة الصورة وتخزينها إذا كانت موجودة
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('profile_images', 'public');
        } else {
            $imagePath = null;
        }

        // إنشاء مستخدم جديد بدون التحقق من صحة البيانات
        $user = User::create([
            'profile_image' => $imagePath,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'username' => $request->input('username'),
            'birthday' => $request->input('birthday'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // تأكد من تشفير كلمة المرور
        ]);


        $user->sendEmailVerificationNotification();

        // إرجاع استجابة أو إعادة توجيه
        return response()->json(['message' => 'User created successfully!', 'user' => $user], 201);
    }
}
