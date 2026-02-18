<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Mark notification as read
     */
    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['is_read' => true]);

        return response()->json(['success' => true]);
    }

    /**
     * Mark all notifications as read
     */
    public function markAllAsRead()
    {
        $user = Auth::user();
        
        // Mark all unread notifications as read (exclude notifications from current user)
        Notification::where('user_id', '!=', $user->id)
            ->where('is_read', false)
            ->update(['is_read' => true]);

        return response()->json(['success' => true]);
    }

    /**
     * Get unread count
     */
    public function getUnreadCount()
    {
        $user = Auth::user();
        
        // Count unread notifications (exclude notifications from current user)
        $count = Notification::where('user_id', '!=', $user->id)
            ->where('is_read', false)
            ->count();

        return response()->json(['count' => $count]);
    }
}
