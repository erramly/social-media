<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;


class UserController extends Controller
{
    // public function store(Request $request)
    // {
    //     // معالجة الصورة وتخزينها إذا كانت موجودة
    //     if ($request->hasFile('profile_image')) {
    //         $image = $request->file('profile_image');
    //         $imagePath = $image->store('profile_images', 'public');
    //     } else {
    //         $imagePath = null;
    //     }

    //     // إنشاء مستخدم جديد بدون التحقق من صحة البيانات
    //     $user = User::create([
    //         'profile_image' => $imagePath,
    //         'first_name' => $request->input('first_name'),
    //         'last_name' => $request->input('last_name'),
    //         'username' => $request->input('username'),
    //         'birthday' => $request->input('birthday'),
    //         'email' => $request->input('email'),
    //         'password' => bcrypt($request->input('password')), // تأكد من تشفير كلمة المرور
    //     ]);


    //     $user->sendEmailVerificationNotification();

    //     // إرجاع استجابة أو إعادة توجيه
    //     return response()->json(['message' => 'User created successfully!', 'user' => $user], 201);
    // }
    public function register(Request $request)
    {
        // التحقق من المدخلات
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // إنشاء المستخدم
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // إنشاء رمز المصادقة (Token)
        $token = $user->createToken('auth_token')->plainTextToken;

        // إرجاع المستخدم مع الرمز
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user' => $user,
        ], 201);
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
}
