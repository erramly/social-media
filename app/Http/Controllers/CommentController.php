<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $user_id = $request->input("user_id");
        $post_id = $request->input("post_id");
        $content = $request->input("content");

        $comment = Comment::create([
            "user_id" => $user_id,
            "post_id" => $post_id,
            "content" => $content

        ]);
        return redirect()->back()->with('comment', $comment);
    }
}
