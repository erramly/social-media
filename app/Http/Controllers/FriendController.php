<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{    
    public function index()
    {
        $user = Auth::user();


        $friendsOrders = Friend::where("user_id", $user->id)
            ->where("status", 'pending')
            ->with('friend')
            ->get();

        //recommed friends ========================================================================================================
        // جلب جميع العلاقات حيث يكون المستخدم هو user_id
        $friendIdsAsUser = DB::table('friends')
            ->where('user_id', $user->id)
            ->pluck('friend_id') // جلب friend_id المرتبطة بالمستخدم
            ->toArray(); // تحويل النتائج إلى مصفوفة

        // جلب جميع العلاقات حيث يكون المستخدم هو friend_id
        $friendIdsAsFriend = DB::table('friends')
            ->where('friend_id', $user->id)
            ->pluck('user_id') // جلب user_id المرتبطة بالمستخدم
            ->toArray(); // تحويل النتائج إلى مصفوفة


        $friendNotRelationWithUser = array_merge($friendIdsAsUser, $friendIdsAsFriend);

        $friendsRecommend = User::whereNotIn('id', $friendNotRelationWithUser)
            ->where('id', '!=', $user->id) // استثناء المستخدم الحالي من التوصيات
            ->get();
        //=========================================================================================================================
        // render this data in home page vue page name is : Home.vue
        return Inertia::render('Friends', [
            'user' => $user,
            'friends_request' => $friendsOrders,
            'friendsRecommend' => $friendsRecommend
        ]);
    }
    // send request friend
    public function sendRequest($friend_id)
    {
        $user = Auth::user();
        $friendship = Friend::create([
            'user_id' => $friend_id,
            'friend_id' => $user->id,
            'status' => 'pending'
        ]);

        return redirect('/')->with('success', 'تم الارسال بنجاح');
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
