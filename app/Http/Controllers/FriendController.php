<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;
use App\Models\User;

class FriendController extends Controller
{
    // send request friend
    public function sendRequest($friend_id)
    {
        $friendship = Friend::create([
            'user_id' => auth()->id(),
            'friend_id' => $friend_id,
            'status' => 'pending'
        ]);

        return response()->json(['message' => 'Friend request sent!'], 200);
    }

    // accepted friend request
    public function acceptRequest(Request $request)
    {
        $user = auth()->user();
        $friend_id = $request->input('friend_id');
        $status = $request->input('status');

        $friendship = Friend::where('user_id', $user->id)
            ->where('friend_id', $friend_id)
            ->first();

        if ($friendship) {
            $friendship->update(['status' => $status]);

            return redirect('/')->with('success', 'تم إنشاء المنشور بنجاح.');
        }

        return response()->json(['error' => 'Friend request not found.']);
    }


    // declined friend request
    public function declineRequest($friend_id)
    {
        $friendship = Friend::where('user_id', $friend_id)
            ->where('friend_id', auth()->id())
            ->first();

        if ($friendship) {
            $friendship->update(['status' => 'declined']);
            return response()->json(['message' => 'Friend request declined.'], 200);
        }

        return response()->json(['error' => 'Friend request not found.'], 404);
    }

}
