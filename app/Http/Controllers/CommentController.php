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
    public function delete(Request $request)
    {

        $comment_id = $request->input("comment_id");
        $comment = Comment::find($comment_id);
        $comment->delete();

        
        return redirect()->back()->with('comment', $comment);
    }
}
