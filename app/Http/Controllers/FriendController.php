<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Notifications\FriendRequestNotification;

class FriendController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Fetch pending friend requests for the current user
        $friendsOrders = $this->getPendingFriendRequests($user->id);

        // Fetch friend recommendations
        $friendsRecommend = $this->getFriendRecommendations($user->id);

        $userFriends = $this->getFriendUser($user->id);

        // Render this data in Friends page (Home.vue)
        return Inertia::render('Friends', [
            'user' => $user,
            'userFriends'=>$userFriends,
            'friends_request' => $friendsOrders,
            'friendsRecommend' => $friendsRecommend,
        ]);
    }

    /**
     * Get pending friend requests for the user
     */
    private function getPendingFriendRequests($userId)
    {
        return Friend::where("user_id", $userId)
            ->where("status", 'pending')
            ->with('friend')
            ->get();
    }

    /**
     * Get recommended friends for the user (not currently friends with)
     */
    private function getFriendRecommendations($userId)
    {
        // Get friends where the user is the 'user_id'
        $friendIdsAsUser = DB::table('friends')
            ->where('user_id', $userId)
            ->pluck('friend_id')
            ->toArray();

        // Get friends where the user is the 'friend_id'
        $friendIdsAsFriend = DB::table('friends')
            ->where('friend_id', $userId)
            ->pluck('user_id')
            ->toArray();

        // Merge both results to get all friends' IDs
        $allFriendIds = array_merge($friendIdsAsUser, $friendIdsAsFriend);

        // Fetch users who are not currently friends with the user
        return User::whereNotIn('id', $allFriendIds)
            ->where('id', '!=', $userId) // Exclude the current user
            ->get();
    }
    private function getFriendUser($userId)
    {
        // Get friends where the user is the 'user_id'
        $friendIdsAsUser = DB::table('friends')
            ->where('user_id', $userId)
            ->where('status', "accepted")
            ->pluck('friend_id')
            ->toArray();

        // Get friends where the user is the 'friend_id'
        $friendIdsAsFriend = DB::table('friends')
            ->where('friend_id', $userId)
            ->where('status', "accepted")
            ->pluck('user_id')
            ->toArray();

        // Merge both results to get all friends' IDs
        $allFriendIds = array_merge($friendIdsAsUser, $friendIdsAsFriend);

        // Fetch users who are not currently friends with the user
        return User::whereIn('id', $allFriendIds)
            ->where('id', '!=', $userId) // Exclude the current user
            ->get();
    }

    // send request friend
    public function sendRequest($friend_id)
    {
        $user = Auth::user();
        $freind = User::find($friend_id);
        $friendship = Friend::create([
            'user_id' => $friend_id,
            'friend_id' => $user->id,
            'status' => 'pending'
        ]);
        $freind->notify(new FriendRequestNotification($user));

        return;
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

            return;
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
