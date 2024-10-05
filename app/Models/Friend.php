<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    protected  $fillable = ["user_id", "friend_id", "status"];
    public function friend()
    {
        return $this->belongsTo(User::class, 'friend_id'); // assuming the friend_id refers to the user's ID
    }
    public function getInfoFriendAttribute()
    {
        return $this->friend; // جلب بيانات الصديق من العلاقة الأصلية
    }
    protected $hidden = ['friend'];

    protected $appends = ['info_friend'];
}
