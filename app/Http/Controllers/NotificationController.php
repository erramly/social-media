<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function readAllNotification()
    {
        auth()->user()->unreadNotifications->markAsRead();
    }
    //show notifaction of user outh
    public function showAllNotification()
    {

        $notifications = auth()->user()->notifications;

        return response()->json(["data" => $notifications]);
    }
}
