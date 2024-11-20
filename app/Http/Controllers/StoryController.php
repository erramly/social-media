<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    //
    public function index()
    {
        return Story::where('expires_at', '>', now())->with('user')->get();
    }


    public function store(Request $request)
    {
       // check is request is have a media
        if (!$request->hasFile('media')) {
            return response()->json(["error" => "error media"], 201);
        }
        $mediaPath = $request->file('media')->store('stories', 'public');
        // create story
        $story = Story::create([
            'user_id' => auth()->id(),
            'media_path' => $mediaPath, // استخدم المسار الناتج عن رفع الملف
            'expires_at' => now()->addHours(24),
        ]);

        // return json
        return;
    }
}
